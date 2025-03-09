export default class CountdownTimer {
    private container: HTMLElement
    private readonly targetDate: number
    private monthElement: Element | null
    private daysElement: Element | null
    private hoursElement: Element | null
    private minutesElement: Element | null
    private secondsElement: Element | null

    constructor(container: HTMLElement) {
        this.container = container
        this.targetDate = new Date(container.getAttribute("data-time")!).getTime()

        // Get references to the child elements
        this.monthElement = container.querySelector("[data-month]")
        this.daysElement = container.querySelector("[data-days]")
        this.hoursElement = container.querySelector("[data-hours]")
        this.minutesElement = container.querySelector("[data-minutes]")
        this.secondsElement = container.querySelector("[data-seconds]")

        this.update() // Initial update
        this.start() // Start the countdown
    }

    update() {
        const now = new Date().getTime() // Use the computer's current date and time
        const timeDifference = this.targetDate - now

        if (timeDifference <= 0) {
            this.container.innerHTML = `
                <div class="bg-rose-500 w-full text-white p-4 rounded-md mb-4">
                    <p class="text-center">Times Up</p>
                </div>
            `
            return
        }

        // Calculate time web-components
        const months = Math.floor(timeDifference / (1000 * 60 * 60 * 24 * 30))
        const days = Math.floor((timeDifference % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24))
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60))
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000)

        // Update the DOM elements
        this.monthElement!.textContent = `${months}`
        this.daysElement!.textContent = `${days}`
        this.hoursElement!.textContent = `${hours}`
        this.minutesElement!.textContent = `${minutes}`
        this.secondsElement!.textContent = `${seconds}`
    }

    start() {
        setInterval(() => this.update(), 1000)
    }
}
