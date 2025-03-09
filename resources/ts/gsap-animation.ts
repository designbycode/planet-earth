import gsap from "gsap"
import ScrollTrigger from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

document.addEventListener("livewire:navigated", function () {
    gsap.from(".timer-counter-block", {
        // scrollTrigger: ".box",
        y: 40,
        opacity: 0,
        stagger: {
            each: 0.1,
        },

        duration: 0.3,
        ease: "back.out(1.7)",
    })

    gsap.from(".events-list-item", {
        opacity: 0,
        x: gsap.utils.wrap([-80, 80]),
        duration: 0.3,
        stagger: {
            each: 0.1,
            // amount: 0.75,
        },
        ease: "power1.inOut",
        scrollTrigger: {
            trigger: ".events-list",
            // start: "top center",
            // end: "top center",
            toggleActions: "restart none none none",
            markers: false,
            // scrub: true,
        },
    })

    gsap.from(".section-box-item", {
        opacity: 0,
        x: 40,
        // duration: 1,
        stagger: {
            each: 0.1,
            // amount: 0.75,
        },
        ease: "power1.inOut",
        scrollTrigger: {
            trigger: ".section-box-item",
            // start: "top center",
            // end: "top center",
            toggleActions: "restart none none none",
            markers: false,
            // scrub: true,
        },
    })
})
