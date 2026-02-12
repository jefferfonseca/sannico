const playBoard = document.querySelector(".play-board");
const scoreElement = document.querySelector(".score");
const highScoreElement = document.querySelector(".high-score");

let gameOver = false;
let foodx, foody;
let snakex = 5, snakey =10;
let snakeBody = [];
let velocityx = 0, velocityy = 0;
let setIntervalid;
let score = 0;

let highScore = localStorage.getItem("high-score") || 0;
highScoreElement.innerHTML = `High Score: ${highScore}`;

const changFoodPosition = () => {
    foodx = Math.floor(Math.random() * 30) + 1;
    foody = Math.floor(Math.random() * 30) + 1;
}

const handleGameOver = () => {
    clearInterval(setIntervalid);
    alert("Game Over");
    location.reload();
}

const changeDirection = (e) => {
    if(e.key === "ArrowUp" && velocityy != 1){
        velocityx = 0;
        velocityy = -1;
    } else if(e.key === "ArrowDown" && velocityy != -1){
        velocityx = 0;
        velocityy = 1;
    } else if(e.key === "ArrowLeft" && velocityx != 1){
        velocityx = -1;
        velocityy = 0;
    }else if(e.key === "ArrowRight" && velocityx != -1){
        velocityx = 1;
        velocityy = 0;
    }
}

const initGame = () => {
    if(gameOver) return handleGameOver();
    let htmlMarkup = `<div class="food" style="grid-area:${foody} / ${foodx}"></div>`;
    
    if(snakex === foodx && snakey === foody) {
        changFoodPosition();
        snakeBody.push([foodx, foody]);
        score++;

        highScore = score >= highScore ? score : highScore;
        localStorage.setItem("high-score", highScore);
        scoreElement.innerHTML = `Score: ${score}`;

        highScoreElement.innerHTML = `High Score: ${highScore}`;

    }

    for(let i = snakeBody.length - 1; i > 0; i--) {
        snakeBody[i] = snakeBody[i - 1];
    }

    snakeBody[0] = [snakex, snakey];

    snakex += velocityx;
    snakey += velocityy;

    if(snakex <= 0 || snakex > 30 || snakey <= 0 || snakey > 30 ) {
        gameOver = true;
    }

    for(let i = 0; i < snakeBody.length; i++) {
        htmlMarkup += `<div class="head" style="grid-area: ${snakeBody[i][1]} / ${snakeBody[i][0]}"></div>`;
        if(i !== 0 && snakeBody[0][1] === snakeBody[i][1] && snakeBody[0][0] === snakeBody[i][0]) {
            gameOver = true;
        }
    }
    playBoard.innerHTML = htmlMarkup;
}

changFoodPosition();
setIntervalid = setInterval(initGame, 125);
document.addEventListener("keydown", changeDirection);