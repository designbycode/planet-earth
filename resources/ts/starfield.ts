interface Star {
    radius: number // Distance from origin
    angle: number // Angle in radians
    size: number
    brightness: number
    speed: number // Angular velocity
    twinkleSpeed: number
    twinklePhase: number
}

interface StarFieldOptions {
    starCount?: number
    speed?: number
    backgroundColor?: string
    minStarSize?: number
    maxStarSize?: number
    minBrightness?: number
    maxBrightness?: number
    paused?: boolean
    minRadius?: number // New: Minimum radius as a percentage of canvas size
    maxRadius?: number // New: Maximum radius as a percentage of canvas size
    clockwise?: boolean
    showOriginPoint?: boolean
    originPointColor?: string
    originPointSize?: number
    originX?: number
    originY?: number
}

export function setupStarField(canvas: HTMLCanvasElement, options: StarFieldOptions = {}): () => void {
    const ctx = canvas.getContext("2d")!

    const config = {
        starCount: options.starCount ?? 200,
        speed: options.speed ?? 1,
        backgroundColor: options.backgroundColor ?? "#000814",
        minStarSize: options.minStarSize ?? 0.5,
        maxStarSize: options.maxStarSize ?? 2.5,
        minBrightness: options.minBrightness ?? 0.2,
        maxBrightness: options.maxBrightness ?? 1.0,
        paused: options.paused ?? false,
        minRadius: options.minRadius ?? 0, // Default to 0% of canvas size
        maxRadius: options.maxRadius ?? 120, // Default to 100% of canvas size
        clockwise: options.clockwise ?? true,
        showOriginPoint: options.showOriginPoint ?? true,
        originPointColor: options.originPointColor ?? "#ff4500",
        originPointSize: options.originPointSize ?? 5,
        originX: options.originX ?? 0.5,
        originY: options.originY ?? 0.5,
    }

    let stars: Star[] = []
    let originX: number
    let originY: number
    let canvasRadius: number
    let animationId: number

    function handleResize(): void {
        canvas.width = window.innerWidth
        canvas.height = window.innerHeight

        // Update origin coordinates
        originX = canvas.width * config.originX
        originY = canvas.height * config.originY

        // Calculate the canvas radius (distance from origin to farthest corner)
        canvasRadius = Math.sqrt(
            Math.max(
                Math.pow(originX, 2) + Math.pow(originY, 2),
                Math.pow(canvas.width - originX, 2) + Math.pow(originY, 2),
                Math.pow(originX, 2) + Math.pow(canvas.height - originY, 2),
                Math.pow(canvas.width - originX, 2) + Math.pow(canvas.height - originY, 2),
            ),
        )

        initStars()
    }

    function initStars(): void {
        stars = []
        for (let i = 0; i < config.starCount; i++) {
            const minRadius = (config.minRadius / 100) * canvasRadius
            const maxRadius = (config.maxRadius / 100) * canvasRadius
            stars.push({
                radius: Math.sqrt(Math.random()) * (maxRadius - minRadius) + minRadius,
                angle: Math.random() * Math.PI * 2,
                size: Math.random() * (config.maxStarSize - config.minStarSize) + config.minStarSize,
                brightness: Math.random() * (config.maxBrightness - config.minBrightness) + config.minBrightness,
                speed: (Math.random() * 0.001 + 0.0005) * config.speed,
                twinkleSpeed: Math.random() * 0.01 + 0.003,
                twinklePhase: Math.random() * Math.PI * 2,
            })
        }
    }

    function drawStar(star: Star): void {
        const twinkle = Math.sin(star.twinklePhase) * 0.3 + 0.7
        const x = originX + Math.cos(star.angle) * star.radius
        const y = originY + Math.sin(star.angle) * star.radius

        ctx.fillStyle = `rgba(255, 255, 255, ${star.brightness * twinkle})`
        ctx.beginPath()
        ctx.arc(x, y, star.size, 0, Math.PI * 2)
        ctx.fill()
    }

    function updateStar(star: Star): void {
        const direction = config.clockwise ? -1 : 1
        star.angle += star.speed * direction

        if (star.angle > Math.PI * 2) {
            star.angle -= Math.PI * 2
        } else if (star.angle < 0) {
            star.angle += Math.PI * 2
        }

        star.twinklePhase += star.twinkleSpeed
        if (star.twinklePhase > Math.PI * 2) {
            star.twinklePhase -= Math.PI * 2
        }
    }

    function drawOriginPoint(): void {
        if (!config.showOriginPoint) return

        ctx.fillStyle = config.originPointColor
        ctx.beginPath()
        ctx.arc(originX, originY, config.originPointSize, 0, Math.PI * 2)
        ctx.fill()

        ctx.strokeStyle = config.originPointColor
        ctx.lineWidth = 1
        ctx.beginPath()
        ctx.arc(originX, originY, config.originPointSize + 3, 0, Math.PI * 2)
        ctx.stroke()
    }

    function animate(): void {
        animationId = requestAnimationFrame(animate)

        if (config.paused) return

        ctx.fillStyle = config.backgroundColor
        ctx.fillRect(0, 0, canvas.width, canvas.height)

        stars.forEach((star) => {
            updateStar(star)
            drawStar(star)
        })

        drawOriginPoint()
    }

    function setupEventListeners(): void {
        setTimeout(() => {
            const toggleButton = document.querySelector<HTMLButtonElement>("#toggleAnimation")
            if (toggleButton) {
                toggleButton.addEventListener("click", () => {
                    config.paused = !config.paused
                    toggleButton.textContent = config.paused ? "Resume" : "Pause"
                })
            }

            const starCountSlider = document.querySelector<HTMLInputElement>("#starCount")
            const starCountValue = document.querySelector<HTMLSpanElement>("#starCountValue")
            if (starCountSlider && starCountValue) {
                starCountSlider.value = config.starCount.toString()
                starCountValue.textContent = config.starCount.toString()
                starCountSlider.addEventListener("input", () => {
                    config.starCount = Number.parseInt(starCountSlider.value)
                    starCountValue.textContent = starCountSlider.value
                    initStars()
                })
            }

            const speedSlider = document.querySelector<HTMLInputElement>("#speed")
            const speedValue = document.querySelector<HTMLSpanElement>("#speedValue")
            if (speedSlider && speedValue) {
                speedSlider.value = config.speed.toString()
                speedValue.textContent = config.speed.toString()
                speedSlider.addEventListener("input", () => {
                    config.speed = Number.parseFloat(speedSlider.value)
                    speedValue.textContent = speedSlider.value
                    stars.forEach((star) => {
                        star.speed = (Math.random() * 0.001 + 0.0005) * config.speed
                    })
                })
            }

            const directionToggle = document.querySelector<HTMLButtonElement>("#directionToggle")
            if (directionToggle) {
                directionToggle.textContent = config.clockwise ? "Clockwise" : "Counterclockwise"
                directionToggle.addEventListener("click", () => {
                    config.clockwise = !config.clockwise
                    directionToggle.textContent = config.clockwise ? "Clockwise" : "Counterclockwise"
                })
            }

            const originPointToggle = document.querySelector<HTMLButtonElement>("#originPointToggle")
            if (originPointToggle) {
                originPointToggle.textContent = config.showOriginPoint ? "Hide Origin" : "Show Origin"
                originPointToggle.addEventListener("click", () => {
                    config.showOriginPoint = !config.showOriginPoint
                    originPointToggle.textContent = config.showOriginPoint ? "Hide Origin" : "Show Origin"
                })
            }

            const originXSlider = document.querySelector<HTMLInputElement>("#originX")
            const originXValue = document.querySelector<HTMLSpanElement>("#originXValue")
            if (originXSlider && originXValue) {
                originXSlider.value = config.originX.toString()
                originXValue.textContent = config.originX.toFixed(2)
                originXSlider.addEventListener("input", () => {
                    config.originX = Number.parseFloat(originXSlider.value)
                    originXValue.textContent = config.originX.toFixed(2)
                    handleResize() // Recalculate star positions
                })
            }

            const originYSlider = document.querySelector<HTMLInputElement>("#originY")
            const originYValue = document.querySelector<HTMLSpanElement>("#originYValue")
            if (originYSlider && originYValue) {
                originYSlider.value = config.originY.toString()
                originYValue.textContent = config.originY.toFixed(2)
                originYSlider.addEventListener("input", () => {
                    config.originY = Number.parseFloat(originYSlider.value)
                    originYValue.textContent = config.originY.toFixed(2)
                    handleResize() // Recalculate star positions
                })
            }

            // New: Min and Max Radius sliders
            const minRadiusSlider = document.querySelector<HTMLInputElement>("#minRadius")
            const minRadiusValue = document.querySelector<HTMLSpanElement>("#minRadiusValue")
            if (minRadiusSlider && minRadiusValue) {
                minRadiusSlider.value = config.minRadius.toString()
                minRadiusValue.textContent = config.minRadius.toString()
                minRadiusSlider.addEventListener("input", () => {
                    config.minRadius = Number.parseFloat(minRadiusSlider.value)
                    minRadiusValue.textContent = config.minRadius.toString()
                    initStars()
                })
            }

            const maxRadiusSlider = document.querySelector<HTMLInputElement>("#maxRadius")
            const maxRadiusValue = document.querySelector<HTMLSpanElement>("#maxRadiusValue")
            if (maxRadiusSlider && maxRadiusValue) {
                maxRadiusSlider.value = config.maxRadius.toString()
                maxRadiusValue.textContent = config.maxRadius.toString()
                maxRadiusSlider.addEventListener("input", () => {
                    config.maxRadius = Number.parseFloat(maxRadiusSlider.value)
                    maxRadiusValue.textContent = config.maxRadius.toString()
                    initStars()
                })
            }
        }, 0)

        window.addEventListener("resize", handleResize)
    }

    function init(): void {
        handleResize()
        setupEventListeners()
        animate()
    }

    init()

    return () => {
        cancelAnimationFrame(animationId)
        window.removeEventListener("resize", handleResize)
    }
}

