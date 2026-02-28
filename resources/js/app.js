import "./bootstrap";
import { isTouchDevice } from "./utils";
import { initCursor } from "./cursor";
import { initServiceCards } from "./services";
import { initNavigation } from "./navigation";
import { getParticlesConfig } from "./particles-config";

// Imports for NPM packages
import AOS from "aos";
import { tsParticles } from "@tsparticles/engine";
import { loadAll } from "@tsparticles/all";

document.addEventListener("DOMContentLoaded", async () => {
    const touchDevice = isTouchDevice();

    // 1. Initialize Custom UI Modules
    initCursor(touchDevice);
    initServiceCards();
    initNavigation();

    // 2. AOS (Animate on Scroll)
    // Note: Since we imported it via NPM, it is always "defined"
    AOS.init({
        easing: "ease-out-cubic",
        duration: 800,
        once: true,
        mirror: false,
        disable: window.innerWidth < 768 || touchDevice,
        offset: 100,
        debounceDelay: 50,
        throttleDelay: 99,
    });

    // 3. tsParticles (Corrected Async Initialization)
    const particlesElement = document.getElementById("particles-js");
    if (particlesElement) {
        try {
            // This is required for NPM version to load all plugins (links, shapes, etc.)
            await loadAll(tsParticles);

            await tsParticles.load({
                id: "particles-js",
                options: getParticlesConfig(touchDevice),
            });
        } catch (error) {
            console.error("Error loading tsParticles:", error);
        }
    }

    // 4. Update Copyright Year
    const currentYearElement = document.getElementById("current-year");
    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
    }
});
