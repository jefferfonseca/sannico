// 0. Iniciar el juego

alert('Inicia el juego')
alert('Elige un ataque')
// 1. Elejir ataque de los jugadores
let player = prompt('Escribe 0 para piedra, 1 para papel, 2 para tijera')

if (player == 0){
    alert('Elejiste piedra')
}else if (player == 1) {
    alert('Elejiste papel')
}else if (player == 2) {
    alert('Elejiste tijera')
}
// 2. Elejir ataque ALEATORIO del enemigo 
let enemy = Math.round(Math.random() * 2)

if (enemy == 0){
    alert('El enemigo eligio piedra')
}else if (enemy == 1) {
    alert('El enemigo eligio papel')
}else if (enemy == 2) {
    alert('El enemigo eligio tijera')
}
// 3. Mostrar resultado
if (player == enemy){
    alert('Empate')
} else if (player == 0 && enemy == 2){
    alert('RAQUITICK PARA MESSI SEVA A METER AL AREA VA A ARMAR LIO SE METIOOOOOOO GOLAAAAAAZOOOOOOO POR DIOS')
} else if (player == 1 && enemy == 0){
    alert('RAQUITICK PARA MESSI SEVA A METER AL AREA VA A ARMAR LIO SE METIOOOOOOO GOLAAAAAAZOOOOOOO POR DIOS')
} else if (player == 2 && enemy == 1){
    alert('RAQUITICK PARA MESSI SEVA A METER AL AREA VA A ARMAR LIO SE METIOOOOOOO GOLAAAAAAZOOOOOOO POR DIOS')
} else{
    alert('TODO SE DERRUMBO DENTRO DE MI DENTRO DE MI')
}