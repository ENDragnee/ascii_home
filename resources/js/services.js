export const initServiceCards = () => {
    const professionalGrid = document.querySelector(
        ".professional-service-grid",
    );
    if (!professionalGrid) return;

    const serviceModules = professionalGrid.querySelectorAll(".service-module");

    const closeAllPanels = (exceptModule = null) => {
        serviceModules.forEach((mod) => {
            if (mod !== exceptModule && mod.classList.contains("is-expanded")) {
                mod.classList.remove("is-expanded", "show-tech");
                mod.setAttribute("aria-expanded", "false");
                const cardFace = mod.querySelector(".card-face");
                if (cardFace) cardFace.style.pointerEvents = "auto";
            }
        });
    };

    serviceModules.forEach((module) => {
        const cardFace = module.querySelector(".card-face");
        const closeButton = module.querySelector(".close-panel-btn");
        const techToggle = module.querySelector(".tech-toggle-btn");

        cardFace?.addEventListener("click", () => {
            closeAllPanels(module);
            module.classList.add("is-expanded");
            module.setAttribute("aria-expanded", "true");
            cardFace.style.pointerEvents = "none";
            setTimeout(() => closeButton?.focus(), 450);
        });

        closeButton?.addEventListener("click", (e) => {
            e.stopPropagation();
            module.classList.remove("is-expanded", "show-tech");
            module.setAttribute("aria-expanded", "false");
            cardFace.style.pointerEvents = "auto";
        });

        techToggle?.addEventListener("click", (e) => {
            e.stopPropagation();
            module.classList.toggle("show-tech");
        });
    });

    document.addEventListener("click", (e) => {
        if (!Array.from(serviceModules).some((m) => m.contains(e.target))) {
            closeAllPanels();
        }
    });
};
