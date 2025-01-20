import { GameObject } from "./gameObject.js";
import { UP, DOWN, LEFT, RIGHT } from "./input.js";
import { COLS, ROWS } from "./main.js";

export class Hero extends GameObject {
    constructor({ game, sprite, position, scale }) {
        super({ game, sprite, position, scale });
    }
    update() {
        if 
        (this.game.input.lastkey === UP) {
            if (this.position.y > 0)
            {
                this.position.y--;
            }
        } else if
        (this.game.input.lastkey === DOWN) {
            if (this.position.y < ROWS -1)
            {
                    this.position.y++;
            }
        } else if
        (this.game.input.lastkey === LEFT) {
            if (this.position.x > 0)
            {
                this.position.x--;
            }
        } else if
        (this.game.input.lastkey === RIGHT) {
            if (this.position.x < COLS -1)
            {
                this.position.x++;
            }
        } 
    }
}