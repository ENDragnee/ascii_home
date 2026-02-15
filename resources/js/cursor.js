import { isTouchDevice } from "./utils";

export const initCursor = () => {
    const cursor = document.querySelector(".cursor");
    const grid = document.querySelector(".background-grid");
    const touchDevice = isTouchDevice();

    // 1. Device-Specific Setup
    if (touchDevice) {
        if (cursor) cursor.style.display = "none";
        return; // Exit for touch devices
    }

    if (cursor) cursor.style.display = "block";

    // 2. Mouse Movement Logic (Cursor + Parallax)
    document.addEventListener(
        "mousemove",
        (e) => {
            window.requestAnimationFrame(() => {
                if (cursor) {
                    cursor.style.left = `${e.clientX}px`;
                    cursor.style.top = `${e.clientY}px`;
                }
                if (grid) {
                    // Subtle parallax effect for the background grid
                    grid.style.backgroundPosition = `${e.clientX / -30}px ${e.clientY / -30}px`;
                }
            });
        },
        { passive: true },
    );

    // 3. Hover Effects for Interactive Elements
    const attachHoverListeners = () => {
        const interactiveSelectors = [
            "a",
            "button",
            ".project-card",
            ".feature",
            ".step",
            ".about-core-image",
            ".social-link",
            ".service-module:not(.is-expanded)",
        ].join(", ");

        const interactiveElements =
            document.querySelectorAll(interactiveSelectors);

        interactiveElements.forEach((el) => {
            el.addEventListener("mouseenter", () =>
                cursor?.classList.add("hover"),
            );
            el.addEventListener("mouseleave", () =>
                cursor?.classList.remove("hover"),
            );
        });
    };

    attachHoverListeners();

    /**
     * Optional: If using HTMX, you'll want to call attachHoverListeners()
     * again after content is swapped.
     */
    document.body.addEventListener("htmx:afterSwap", attachHoverListeners);
};
