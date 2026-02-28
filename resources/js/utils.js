export const isTouchDevice = () => {
    return (
        "ontouchstart" in window ||
        navigator.maxTouchPoints > 0 ||
        navigator.msMaxTouchPoints > 0 ||
        window.matchMedia("(pointer: coarse)").matches
    );
};
