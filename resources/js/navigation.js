export const initNavigation = () => {
    const sidebarNavLinks = document.querySelectorAll(".sidebar-nav a");
    const sections = document.querySelectorAll("section[id]");
    const footer = document.getElementById("contact");

    if (sections.length === 0 || sidebarNavLinks.length === 0) return;

    let currentActiveSectionId = null;

    // 1. Observer Logic to determine which section is most visible
    const observerCallback = (entries) => {
        let bestMatch = null;

        entries.forEach((entry) => {
            // Find the best intersecting entry (largest ratio)
            if (
                entry.isIntersecting &&
                (!bestMatch ||
                    entry.intersectionRatio > bestMatch.intersectionRatio)
            ) {
                bestMatch = entry;
            }
        });

        let newActiveSectionId = null;

        if (bestMatch) {
            newActiveSectionId = bestMatch.target.getAttribute("id");
        } else {
            // Fallback checks
            if (
                footer &&
                footer.getBoundingClientRect().top < window.innerHeight * 0.7
            ) {
                newActiveSectionId = "contact"; // Near footer
            } else if (window.scrollY < window.innerHeight * 0.5) {
                newActiveSectionId = "home"; // Near top
            }
        }

        // Only update if the active section has changed
        if (
            newActiveSectionId &&
            newActiveSectionId !== currentActiveSectionId
        ) {
            currentActiveSectionId = newActiveSectionId;
            updateActiveSidebarLink(currentActiveSectionId);
        }
    };

    const updateActiveSidebarLink = (id) => {
        sidebarNavLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${id}`) {
                link.classList.add("active");
            }
        });
    };

    const observerOptions = {
        rootMargin: "0px 0px -50% 0px", // Trigger when section passes midpoint
        threshold: 0,
    };

    const observer = new IntersectionObserver(
        observerCallback,
        observerOptions,
    );

    sections.forEach((section) => observer.observe(section));
    if (footer) observer.observe(footer);

    // 2. Initial state logic based on URL hash
    const setActiveInitialLink = () => {
        const hash = window.location.hash;
        let targetId = hash ? hash.substring(1) : "home";
        currentActiveSectionId = targetId;

        updateActiveSidebarLink(targetId);

        // Default to 'home' if hash is invalid
        if (!document.querySelector(".sidebar-nav a.active")) {
            updateActiveSidebarLink("home");
            currentActiveSectionId = "home";
        }
    };

    // Delay slightly for accurate scroll position calculation on load
    setTimeout(setActiveInitialLink, 150);

    // Listen for manual hash changes (clicking links)
    window.addEventListener("hashchange", setActiveInitialLink);
};
