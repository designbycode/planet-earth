import './bootstrap';
import "vanilla-headless"
import "./theme-toggle"
import {setupStarField} from "./starfield";
import ThemeManager from "@designbycode/theme-manager";


document.addEventListener("livewire:navigated", () => {
    const canvas = document.querySelector<HTMLCanvasElement>('#starCanvas')!
    if (canvas) {
        setupStarField(canvas, {
            starCount: 1800,
            speed: 1,
            backgroundColor: '#000814',
            minStarSize: 0.25,
            maxStarSize: 1.5,
            minBrightness: 0.2,
            maxBrightness: 1.0,
            originX: 0.5,
            originY: 2,
            paused: false
        })
    }
})
