const TILE_SIZE = 64;
const COLS = 15;
const ROWS = 20;
const GAME_WIDTH = TILE_SIZE * COLS;
const GAME_HEIGHT = TILE_SIZE * ROWS;

window.addEventListener('load', function(){
    const canvas  = document.getElementById('canvas1');
    const ctx = canvas.getContext('2d');
    canvas.width = GAME_WIDTH;
    canvas.height = GAME_HEIGHT;

    function drawGrid(){
for (let row = 0; row < ROWS; row ++){
    for (let col = 0; col < COLS; col ++){
        //ctx.fillRect(col * TILE_SIZE, row * TILE_SIZE, TILE_SIZE, TILE_SIZE);
        ctx.strokeRect(
            col * TILE_SIZE, 
            row * TILE_SIZE, 
            TILE_SIZE, 
            TILE_SIZE
        );
    }}


        }
    drawGrid();
})