<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ascii Technologies - Project Showcase</title>
    <link rel="icon" href="Artboard 1.ico" type="image/x-icon" />
    <style>
      :root {
        --bg-dark: #0a0a0a;
        --accent-teal: #00ffd4;
        --accent-purple: #6a0dad;
        --text-silver: #c0c0c0;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        cursor: none;
      }

      @media (max-width: 768px) {
        * {
          cursor: auto; /* Disable custom cursor on mobile/touch devices */
        }

        .cursor {
          display: none; /* Hide custom cursor on mobile */
        }
      }

      body {
        font-family: "Space Grotesk", sans-serif;
        background-color: var(--bg-dark);
        color: var(--text-silver);
        overflow-x: hidden;
        line-height: 1.6;
      }

      #ascii-payment {
        background-image: url("image/card.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #ascii-payment::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #ascii-payment .project-content {
        position: relative;
        z-index: 2;
      }

      #lumo {
        background-image: url("image/lumo.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #lumo::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #lumo .project-content {
        position: relative;
        z-index: 2;
      }

      #usae-event-manager {
        background-image: url("image/run.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #usae-event-manager::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #usae-event-manager .project-content {
        position: relative;
        z-index: 2;
      }

      #usae-registration {
        background-image: url("image/sun.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #usae-registration::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #usae-registration .project-content {
        position: relative;
        z-index: 2;
      }

      #aastu-cafeteria {
        background-image: url("image/cafeteria.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #aastu-cafeteria::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #aastu-cafeteria .project-content {
        position: relative;
        z-index: 2;
      }

      #aastu-check-out {
        background-image: url("image/exit.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #aastu-check-out::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #aastu-check-out .project-content {
        position: relative;
        z-index: 2;
      }

      #aastu-maps {
        background-image: url("image/map.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #aastu-maps::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #aastu-maps .project-content {
        position: relative;
        z-index: 2;
      }

      #student-validator {
        background-image: url("image/hand.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #student-validator::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #student-validator .project-content {
        position: relative;
        z-index: 2;
      }

      #saas-founders {
        background-image: url("image/saas.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        color: white;
        background-attachment: fixed;
        position: relative;
      }

      #saas-founders::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
      }

      #saas-founders .project-content {
        position: relative;
        z-index: 2;
      }

      .background-grid {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
          linear-gradient(
            0deg,
            transparent 24%,
            rgba(0, 255, 212, 0.05) 25%,
            rgba(0, 255, 212, 0.05) 26%,
            transparent 27%
          ),
          linear-gradient(
            90deg,
            transparent 24%,
            rgba(0, 255, 212, 0.05) 25%,
            rgba(0, 255, 212, 0.05) 26%,
            transparent 27%
          );
        background-size: 50px 50px;
        z-index: 1;
        opacity: 2;
        animation: gridMove 20s linear infinite;
        pointer-events: none;
      }

      @keyframes gridMove {
        0% {
          background-position: 0 0;
        }
        100% {
          background-position: 50px 50px;
        }
      }

      .projects-container {
        scroll-snap-type: y proximity; /* Changed from mandatory for better mobile experience */
        overflow-y: auto;
        height: 100vh;
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS devices */
      }

      .project-section {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        scroll-snap-align: start;
        padding: 2rem;
        position: relative;
        background-color: var(--bg-dark);
      }

      .project-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(
          circle at center,
          rgba(0, 255, 212, 0.1) 0%,
          transparent 70%
        );
        z-index: 1;
      }

      .project-content {
        max-width: 800px;
        text-align: center;
        z-index: 2;
        position: relative;
        padding: 0 20px;
      }

      .project-title {
        font-size: clamp(1.5rem, 6vw, 4rem);
        color: var(--accent-teal);
        margin-bottom: 1rem;
        text-transform: uppercase;
      }

      .project-description {
        color: rgba(255, 255, 255, 0.7);
        font-size: clamp(0.9rem, 2vw, 1.2rem);
        margin-bottom: 2rem;
      }

      .project-link {
        color: var(--accent-teal);
        text-decoration: none;
        border: 2px solid var(--accent-teal);
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
        display: inline-block;
        font-size: clamp(0.9rem, 2vw, 1rem);
      }

      .project-link:hover {
        background-color: var(--accent-teal);
        color: var(--bg-dark);
      }

      @media (max-width: 768px) {
        .project-section {
          padding: 1rem;
          height: auto;
          min-height: 100vh;
        }

        .project-title {
          font-size: clamp(1.5rem, 6vw, 2.5rem);
        }

        .project-description {
          font-size: 1rem;
        }

        .project-link {
          padding: 12px 24px;
          font-size: 1rem;
        }

        /* Disable fixed background on mobile for better performance */
        #ascii-payment,
        #lumo,
        #usae-event-manager,
        #usae-registration,
        #aastu-cafeteria,
        #aastu-check-out,
        #aastu-maps,
        #student-validator,
        #saas-founders {
          background-attachment: scroll;
        }
      }

      .cursor {
        position: fixed;
        width: 20px;
        height: 20px;
        border: 2px solid var(--accent-teal);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        pointer-events: none;
        transition: transform 0.1s ease;
        z-index: 9999;
      }

      .sidebar-nav {
        position: fixed;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 20px;
        z-index: 10;
      }

      .sidebar-nav a {
        position: relative;
        width: 15px;
        height: 15px;
        background-color: rgb(255 255 255 / 58%);
        border-radius: 50%;
        transition: all 0.3s ease;
      }

      .sidebar-nav a:hover {
        background-color: var(--accent-teal);
        transform: scale(1.5);
      }

      .sidebar-nav a::after {
        content: attr(data-label);
        position: absolute;
        left: 30px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.05);
        color: white;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 16px;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
      }

      .sidebar-nav a:hover::after {
        opacity: 1;
      }

      .sidebar-nav a.active {
        background-color: var(--accent-teal);
      }

      /* Mobile navigation */
      @media (max-width: 768px) {
        .sidebar-nav {
          bottom: 0;
          left: 0;
          top: auto;
          transform: none;
          width: 100%;
          flex-direction: row;
          justify-content: space-around;
          background-color: rgba(10, 10, 10, 0.8);
          padding: 15px 0;
          gap: 0;
        }

        .sidebar-nav a {
          width: 30px;
          height: 30px;
        }

        .sidebar-nav a::after {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <div class="cursor"></div>
    <nav class="sidebar-nav">
      <a href="index.html" data-label="Home"></a>
      <a href="#about" data-label="About"></a>
      <a href="#services" data-label="Services"></a>
      <a href="#hero" class="active" data-label="Projects"></a>
      <a href="#contact" data-label="Contact"></a>
    </nav>
    <div class="background-grid"></div>

    <div class="projects-container">
      <section class="project-section" id="ascii-payment">
        <div class="project-content">
          <h2 class="project-title">ASCII Payment</h2>
          <p class="project-description">
            Secure digital payment platform with intuitive interface and
            advanced transaction capabilities.
          </p>
          <a
            href="https://onclck.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="lumo">
        <div class="project-content">
          <h2 class="project-title">Lumo</h2>
          <p class="project-description">
            Interactive learning platform designed to enhance educational
            experiences through innovative technology.
          </p>
          <a
            href="https://easy-learning-two.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="usae-event-manager">
        <div class="project-content">
          <h2 class="project-title">USAE Event Manager</h2>
          <p class="project-description">
            Comprehensive event management system for seamless organization and
            coordination of complex events.
          </p>
          <a
            href="https://usae-2017.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="usae-registration">
        <div class="project-content">
          <h2 class="project-title">USAE Registration</h2>
          <p class="project-description">
            User registration and identification system with robust security and
            seamless user experience.
          </p>
          <a
            href="https://aastu-usae.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="aastu-cafeteria">
        <div class="project-content">
          <h2 class="project-title">AASTU Cafeteria</h2>
          <p class="project-description">
            Digital cafeteria management platform streamlining food ordering and
            inventory tracking.
          </p>
          <a
            href="https://aastu-cafe.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="aastu-check-out">
        <div class="project-content">
          <h2 class="project-title">AASTU Check-out</h2>
          <p class="project-description">
            Efficient transaction tracking and check-out system with real-time
            processing capabilities.
          </p>
          <a
            href="https://aastu-slip.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="aastu-maps">
        <div class="project-content">
          <h2 class="project-title">AASTU Maps</h2>
          <p class="project-description">
            Interactive campus mapping solution providing comprehensive location
            and navigation services.
          </p>
          <a
            href="https://sweg-2014-ec-batch.github.io/AASTU-Loaction/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="student-validator">
        <div class="project-content">
          <h2 class="project-title">Student Validator</h2>
          <p class="project-description">
            Advanced student verification and authentication platform ensuring
            secure institutional access.
          </p>
          <a
            href="https://aastu-verfier.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>

      <section class="project-section" id="saas-founders">
        <div class="project-content">
          <h2 class="project-title">SAAS Founders</h2>
          <p class="project-description">
            Networking platform connecting SaaS founders, investors, and
            entrepreneurial resources.
          </p>
          <a
            href="https://saas-founders.vercel.app/"
            target="_blank"
            class="project-link"
            >Explore Project</a
          >
        </div>
      </section>
    </div>
    <script>
      const cursor = document.querySelector(".cursor");
      const grid = document.querySelector(".background-grid");

      document.addEventListener("mousemove", (e) => {
        cursor.style.left = e.clientX + "px";
        cursor.style.top = e.clientY + "px";

        grid.style.transform = `translate(${e.clientX / -50}px, ${e.clientY / -50}px)`;
      });

      // Check if device is touch-enabled and disable custom cursor
      function isTouchDevice() {
        return (
          "ontouchstart" in window ||
          navigator.maxTouchPoints > 0 ||
          navigator.msMaxTouchPoints > 0
        );
      }

      if (isTouchDevice()) {
        document.querySelector(".cursor").style.display = "none";
        document.querySelectorAll("*").forEach((el) => {
          el.style.cursor = "auto";
        });
      }

      document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".sidebar-nav a");

        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                navLinks.forEach((link) => {
                  link.classList.remove("active");
                  if (link.getAttribute("href") === `#${entry.target.id}`) {
                    link.classList.add("active");
                  }
                });
              }
            });
          },
          { threshold: 0.3 }, // Reduced threshold for better mobile experience
        );

        sections.forEach((section) => {
          observer.observe(section);
        });
      });
    </script>
  </body>
</html>
