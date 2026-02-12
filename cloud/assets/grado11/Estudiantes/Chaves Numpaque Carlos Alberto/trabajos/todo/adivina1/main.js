let resultElement = document.querySelector('.result');
let mainContainer = document.querySelector('.main-container');
let rowId = 1;

// Peticion de palabras
let words = [
    'manzana', 'perro', 'gato', 'computadora', 'telefono', 'elefante', 'jirafa', 'banco', 'ciudad', 'zorro', 
    'pelota', 'avion', 'espejo', 'silla', 'mesa', 'refrigerador', 'luna', 'estrella', 'cielo', 'sol', 'nieve',
    // Añade más palabras hasta tener 300
];

// Elegir una palabra aleatoria
let randomIndex = Math.floor(Math.random() * words.length);
let word = words[randomIndex];  // Esta será la palabra que el usuario debe adivinar
let wordArray = word.toUpperCase().split('');  // Convierte la palabra a mayúsculas y la convierte en un array de letras
console.log(wordArray);

let actualRow = document.querySelector('.row')

drawSquares(actualRow);
listenInput(actualRow)
addfocus(actualRow)

function listenInput(actualRow){
    let square = actualRow.querySelectorAll('.square');
    square = [...square];

    let userInput = []

    square.forEach(element =>{
        element.addEventListener('input', event=>{
            // Si no se a borrado
            if(event.inputType !== 'deleteContentBackward'){
                // Recoger el ingreso del usuario
            userInput.push(event.target.value.toUpperCase())   
            next = event.target.nextElementSibling;
            if (next) {
                next.focus();    
            }else{
                // Crear un areglo con las letras llenas

                // Buscar el contenido de la fila anterior
                // Armar un areglo con el resultado antes de comparar

                let squareFilled = document.querySelectorAll('.square')
                squareFilled = [...squareFilled]
                let lastFiveSquareFilled = squareFilled.slice(-5);
                let finalUserInput = [];
                lastFiveSquareFilled.forEach(element => {
                    finalUserInput.push(element.value.toUpperCase())
                });

                // Cambiar estilos si existe la letra pero en la posicion incorrecta
                let existIndexArray = existLetter(wordArray, finalUserInput)
                existIndexArray.forEach(element=>{
                    square[element].classList.add('gold');
                });
                // Comparar arreglos para cambiar estilos
                let rightIndex = compareArrays(wordArray, finalUserInput)
                console.log(rightIndex)
                rightIndex.forEach(element => {
                    square[element].classList.add('green');
                })
                // Si los areglos son iguales
                if(rightIndex.length == wordArray.length){
                    showResult('Ganaste')
                    return;
                }
                // Crear una nueva fila
                let actualRow = createRow()
                if(!actualRow){
                    return
                }
                console.log(actualRow)
                drawSquares(actualRow)
                listenInput(actualRow)
                addfocus(actualRow)
                // Crear una Linea
            }
            }else{
                userInput.pop();
            }
            console.log(userInput)
        });
    })
    }
// funciones

function compareArrays(array1, array2){
    let iqualsIndex = []
    array1.forEach((element, index)=>{
        if(element == array2[index]){
            console.log(`En la posicicion ${index} Si son iguales`);
            iqualsIndex.push(index)
        }else{
            console.log(`En la posicicion ${index} No son iguales`);
        }
    });
    return iqualsIndex;
}

function existLetter(array1, array2){
    let existIndexArray = [];
    array2.forEach((element, index)=>{
        if (array1.includes(element)){
            existIndexArray.push(index)
        }
    });
    return existIndexArray;
}

function createRow(){
    rowId++
    if(rowId <= 5 ){
    let newRow = document.createElement('div');
    newRow.classList.add('row');
    newRow.setAttribute('id', rowId)
    mainContainer.appendChild(newRow)
    return newRow;
    }else{
        showResult(`Mera Burra La respuesta era "${word.toUpperCase()}"`)
    }

}

function drawSquares(actualRow){
    wordArray.forEach((item, index) => {
        if(index === 0){
            actualRow.innerHTML += `<input type="text" maxlength="1" class="square focus">`
        }else{
            actualRow.innerHTML += `<input type="text" maxlength="1" class="square">`
        }
        
    })
}

function addfocus(actualRow){
    let focusElement = actualRow.querySelector('.focus')
    console.log(focusElement)
    focusElement.focus();
}
function showResult(textMsg){
    resultElement.innerHTML = `
    <p>${textMsg}</p>
    <button class="button">Reiniciar</button>`

    let resetBtn = document.querySelector('.button');
    resetBtn.addEventListener('click', ()=>{
    location.reload();
    });
}