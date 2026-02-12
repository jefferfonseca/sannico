let resultElement = document.querySelector('.result');
let mainContainer = document.querySelector('.main-container');
let rowId = 1;

// Lista de palabras (puedes agregar cualquier palabra que desees)
let words = [
    'manzana', 'pera', 'negro', 'vanesa', 'vaso', 'radio','melocoton','rosa','maus','fotografia ',  'espejo', 'cuna ','moto', 'lona', 'fresa','sandia', 'pitalla', 'ropa', 'tina', 'perro', 'gato', 'computadora', 'telefono', 'elefante', 'jirafa', 'banco', 'ciudad', 'zorro',
    'pelota', 'avion', 'espejo', 'silla', 'mesa', 'refrigerador', 'luna','salon','musica','niños ','durazno','alcoba ', 'estrella', 'cielo', 'sol', 'nieve','nevera',
]

// Elegir una palabra aleatoria
let randomIndex = Math.floor(Math.random() * words.length);
let word = words[randomIndex];
let wordArray = word.toUpperCase().split('');
console.log(wordArray);

let actualRow = document.querySelector('.row');

drawSquares(actualRow);
listenInput(actualRow);
addfocus(actualRow);

// Función para escuchar la entrada del usuario
function listenInput(actualRow) {
    let square = actualRow.querySelectorAll('.square');
    square = [...square];

    let userInput = [];

    square.forEach(element => {
        element.addEventListener('input', event => {
            if (event.inputType !== 'deleteContentBackward') {
                // Recoger el ingreso del usuario
                userInput.push(event.target.value.toUpperCase());

                // Si la fila está llena (según la longitud de la palabra), procesar el intento
                if (userInput.length === wordArray.length) {
                    let squareFilled = document.querySelectorAll('.square');
                    squareFilled = [...squareFilled];
                    let lastSquareFilled = squareFilled.slice(-wordArray.length);
                    let finalUserInput = [];
                    lastSquareFilled.forEach(element => {
                        finalUserInput.push(element.value.toUpperCase());
                    });

                    // Cambiar estilos si existe la letra pero en la posición incorrecta
                    let existIndexArray = existLetter(wordArray, finalUserInput);
                    existIndexArray.forEach(element => {
                        square[element].classList.add('gold');
                    });

                    // Comparar arreglos para cambiar estilos
                    let rightIndex = compareArrays(wordArray, finalUserInput);
                    console.log(rightIndex);
                    rightIndex.forEach(element => {
                        square[element].classList.add('green');
                    });

                    // Si los arreglos son iguales
                    if (rightIndex.length === wordArray.length) {
                        showResult('¡Ganaste!');
                        return;
                    }

                    // Crear una nueva fila solo si no hemos llegado al límite de intentos
                    let newRow = createRow();
                    if (newRow) {
                        drawSquares(newRow);
                        listenInput(newRow);
                        addfocus(newRow);
                    }
                }
            } else {
                // Eliminar la última letra si se está borrando
                userInput.pop();
            }

            // Mover el foco al siguiente input después de escribir
            moveFocus(event.target);
        });
    });
}

// Función para mover el foco al siguiente input
function moveFocus(currentInput) {
    const nextInput = currentInput.nextElementSibling;
    const prevInput = currentInput.previousElementSibling;

    if (nextInput && currentInput.value !== "") {
        nextInput.focus();
    } else if (prevInput && currentInput.value === "") {
        prevInput.focus();
    }
}

// Funciones de comparación
function compareArrays(array1, array2) {
    let iqualsIndex = [];
    array1.forEach((element, index) => {
        if (element === array2[index]) {
            console.log(`En la posición ${index} son iguales`);
            iqualsIndex.push(index);
        } else {
            console.log(`En la posición ${index} no son iguales`);
        }
    });
    return iqualsIndex;
}

function existLetter(array1, array2) {
    let existIndexArray = [];
    array2.forEach((element, index) => {
        if (array1.includes(element)) {
            existIndexArray.push(index);
        }
    });
    return existIndexArray;
}

function createRow() {
    rowId++;
    if (rowId <= 6) {  // Deberían ser 6 intentos en total
        let newRow = document.createElement('div');
        newRow.classList.add('row');
        newRow.setAttribute('id', rowId);
        mainContainer.appendChild(newRow);
        return newRow;
    } else {
        showResult(`¡Perdiste! La respuesta era "${word.toUpperCase()}"`);
    }
}

function drawSquares(actualRow) {
    wordArray.forEach((item, index) => {
        if (index === 0) {
            actualRow.innerHTML += `<input type="text" maxlength="1" class="square focus">`;
        } else {
            actualRow.innerHTML += `<input type="text" maxlength="1" class="square">`;
        }
    });
}

function addfocus(actualRow) {
    let focusElement = actualRow.querySelector('.focus');
    console.log(focusElement);
    focusElement.focus();
}

function showResult(textMsg) {
    resultElement.innerHTML = `
        <p>${textMsg}</p>
        <button class="button">Reiniciar</button>`;

    let resetBtn = document.querySelector('.button');
    resetBtn.addEventListener('click', () => {
        location.reload();  // Reiniciar el juego
    });
}
