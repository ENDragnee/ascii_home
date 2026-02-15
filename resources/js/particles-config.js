export const getParticlesConfig = (touchDevice) => ({
    fpsLimit: 60,
    interactivity: {
        events: {
            onHover: { enable: !touchDevice, mode: "repulse" },
            onClick: { enable: true, mode: "push" },
            resize: true,
        },
        modes: {
            push: { quantity: 3 },
            repulse: {
                distance: 65,
                links: {
                    opacity: 0.6,
                    color: "#00e5ff",
                },
            },
        },
    },
    particles: {
        color: { value: "#ffffff" },
        links: {
            color: "#ffffff",
            distance: 160,
            enable: true,
            opacity: 0.15,
            width: 1,
        },
        collisions: { enable: false },
        move: {
            direction: "none",
            enable: true,
            outModes: { default: "bounce" },
            random: true,
            speed: 1.0,
            straight: false,
        },
        number: {
            density: { enable: true, area: 800 },
            value: 150,
        },
        opacity: {
            value: { min: 0.1, max: 0.4 },
            animation: {
                enable: true,
                speed: 0.9,
                minimumValue: 0.05,
                sync: false,
            },
        },
        shape: { type: "circle" },
        size: {
            value: { min: 1, max: 2.5 },
            animation: {
                enable: true,
                speed: 2.5,
                minimumValue: 0.5,
                sync: false,
            },
        },
    },
    detectRetina: true,
    background: { color: "transparent" },
});
