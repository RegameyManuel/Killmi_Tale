import { GameObject } from "./gameObject.js";
import { UP, DOWN, LEFT, RIGHT } from "./input.js";

export class Hero extends GameObject {
    constructor({ game, sprite, position, scale }) {
        super({ game, sprite, position, scale });
    }
    update() {
        if 
        (this.game.input.lastkey === UP) {
            this.position.y--;
        } else if
        (this.game.input.lastkey === DOWN) {
            this.position.y++;
        } else if
        (this.game.input.lastkey === LEFT) {
            this.position.x--;
        } else if
        (this.game.input.lastkey === RIGHT) {
            this.position.x++;
        } 
    }
}