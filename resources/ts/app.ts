import "./bootstrap"
import "vanilla-headless"
import "./gsap-animation"
import createGlobe from "cobe"

// import "./theme-toggle"
import "./web-components/mouse-spotlight"
import CountdownTimer from "./CountdownTimer"
import { setupStarField } from "./starfield"

import.meta.glob(["../img/**/*.{webp,png,svg,jpeg,jpg}"])

const earth: () => void = function (): void {
    let phi = 0
    let canvas = document.getElementById("canvas")!

    const globe = createGlobe(<HTMLCanvasElement>canvas, {
        devicePixelRatio: 3,
        width: 1800,
        height: 1800,
        phi: 0,
        theta: 0,
        dark: 1,
        diffuse: 10,
        scale: 0.9,
        mapSamples: 36000,
        mapBrightness: 10,
        mapBaseBrightness: 0.25,
        baseColor: [2.2, 1, 1],
        markerColor: [1, 0, 1],
        glowColor: [0.8, 0.4, 0.4],
        offset: [100, 2800],
        opacity: 1,
        markers: [],

        onRender: (state) => {
            // Called on every animation frame.
            // `state` will be an empty object, return updated params.
            state.phi = phi
            phi += 0.005
        },
    })
}

const starfield: () => void = function (): void {
    const canvas = document.querySelector<HTMLCanvasElement>("#starCanvas")!
    if (canvas) {
        setupStarField(canvas, {
            starCount: 1800,
            speed: 0.4,
            backgroundColor: "#000814",
            minStarSize: 0.25,
            maxStarSize: 1.5,
            minBrightness: 0.2,
            maxBrightness: 1.0,
            originX: 0.5,
            originY: 2,
            paused: false,
        })
    }
}

// Initialize countdown timer for all elements with the class 'countdown'
function initializeCountdowns(): void {
    const countdownContainers = document.querySelectorAll(".countdown") as NodeListOf<HTMLElement>
    countdownContainers.forEach((container) => new CountdownTimer(container))
}

document.addEventListener("livewire:navigated", initializeCountdowns)
// document.addEventListener("livewire:navigated", earth)
// document.addEventListener("livewire:navigated", starfield)
