<!doctype html>
<html lang="en">
  <head>
    <title>Ascii Technologies - Strategic Technology Solutions</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Ascii Technologies partners with businesses to deliver custom software, AI-powered automation, and scalable cloud solutions, driving efficiency, growth, and measurable ROI."
    />
    <meta
      name="keywords"
      content="custom software development, AI automation, cloud solutions, web application development, mobile application development, digital transformation, business process optimization, technology consulting, software development company, ROI driven tech"
    />
    <meta name="author" content="Ascii Technologies" />
    <!-- Make sure to replace with your actual domain -->
    <link rel="canonical" href="https://www.ascii-technologies.com/" />

    <!-- Open Graph / Facebook -->
    <meta
      property="og:title"
      content="Ascii Technologies - Strategic Technology Solutions"
    />
    <meta
      property="og:description"
      content="We craft bespoke software and technology strategies that solve complex business challenges and deliver tangible results."
    />
    <!-- Make sure to replace with your actual image URL -->
    <meta
      property="og:image"
      content="https://www.ascii-technologies.com/og-image.jpg"
    />
    <meta property="og:url" content="https://www.ascii-technologies.com/" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:title"
      content="Ascii Technologies - Strategic Technology Solutions"
    />
    <meta
      name="twitter:description"
      content="We craft bespoke software and technology strategies that solve complex business challenges and deliver tangible results."
    />
    <meta
      name="twitter:image"
      content="https://www.ascii-technologies.com/og-image.jpg"
    />

    <!-- Libraries -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
    />
    <!-- Favicon - Make sure this file exists -->
    <link rel="icon" href="Artboard 1.ico" type="image/x-icon" />

    <!-- Embedded Styles -->
    <style>
      /* ==========================================================================
           Base Styles & Variables
           ========================================================================== */
      :root {
        --primary-color: #00e5ff;
        --secondary-color: #1d1dff; /* Less used */
        --primary-glow-color: rgba(0, 229, 255, 0.6);
        --text-color: #e0e0e0;
        --text-secondary: #a0a0c0;
        --bg-color: #0a0a1a;
        --card-bg: rgba(25, 25, 45, 0.85); /* Slightly more opaque card */
        --card-bg-opaque: #19192d; /* Opaque version for panels */
        --card-border: rgba(255, 255, 255, 0.1);
        --card-hover-border: var(--primary-glow-color);
        --card-shadow: rgba(0, 0, 0, 0.2);
        --card-hover-shadow: rgba(0, 0, 0, 0.3);
        --transition-base: 0.3s ease-in-out; /* Main transition */
        --transition-smooth: 0.45s cubic-bezier(0.25, 0.8, 0.25, 1); /* For smoother effects like panel expand */
      }

      html {
        scroll-behavior: smooth;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      body {
        font-family:
          -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
          Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
          "Segoe UI Symbol";
        background-color: var(--bg-color);
        color: var(--text-color);
        overflow-x: hidden;
        margin: 0;
        line-height: 1.6;
        font-size: 16px; /* Base font size */
      }

      /* ==========================================================================
           Utility & Global Elements
           ========================================================================== */

      /* Custom Cursor (Optional) */
      .cursor {
        width: 25px;
        height: 25px;
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        transform: translate(-50%, -50%);
        z-index: 9999;
        transition:
          transform 0.1s ease-out,
          width 0.2s ease,
          height 0.2s ease,
          background-color 0.2s ease,
          border-color 0.2s ease;
        mix-blend-mode: difference;
      }
      .cursor.hover {
        width: 45px;
        height: 45px;
        background-color: rgba(255, 255, 255, 0.2);
        border-color: transparent;
        transform: translate(-50%, -50%) scale(0.9);
      }
      /* Hide cursor on touch devices - handled by JS */

      /* Background Grid */
      .background-grid {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
          linear-gradient(
            to right,
            rgba(255, 255, 255, 0.03) 1px,
            transparent 1px
          ),
          linear-gradient(
            to bottom,
            rgba(255, 255, 255, 0.03) 1px,
            transparent 1px
          );
        background-size: 60px 60px;
        z-index: -1;
        transition: background-position 0.1s linear; /* Parallax effect */
      }

      /* Sidebar Navigation */
      .sidebar-nav {
        position: fixed;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 18px;
        z-index: 1000;
      }
      .sidebar-nav a {
        width: 10px;
        height: 10px;
        background-color: rgba(255, 255, 255, 0.35);
        border-radius: 50%;
        display: block;
        position: relative;
        transition:
          background-color var(--transition-base),
          transform var(--transition-base),
          box-shadow var(--transition-base),
          border var(--transition-base);
        border: 1px solid transparent;
      }
      .sidebar-nav a::before {
        /* Tooltip */
        content: attr(data-label);
        position: absolute;
        right: 100%;
        top: 50%;
        transform: translateY(-50%) translateX(-15px);
        background-color: rgba(0, 0, 0, 0.85);
        color: #fff;
        padding: 6px 12px;
        border-radius: 5px;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition:
          opacity var(--transition-base),
          visibility var(--transition-base);
        font-size: 0.85rem;
      }
      .sidebar-nav a:hover::before {
        opacity: 1;
        visibility: visible;
      }
      .sidebar-nav a:hover {
        background-color: rgba(255, 255, 255, 0.8);
        transform: scale(1.3);
      }
      .sidebar-nav a.active {
        background-color: var(--primary-color);
        transform: scale(1.6);
        border: 1px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 0 12px 3px var(--primary-glow-color);
      }

      /* Logo */
      .logo {
        position: fixed;
        top: 5px;
        left: 5px;
        z-index: 1001;
      }
      .logo img {
        height: 130px;
        width: auto;
        display: block;
        filter: drop-shadow(0 0 5px rgba(0, 229, 255, 0.7));
        transition: filter var(--transition-base);
      }
      .logo img:hover {
        filter: drop-shadow(0 0 10px rgba(0, 229, 255, 0.9));
      }

      /* General Section Styling */
      section {
        padding: 6rem 2rem;
        position: relative;
        overflow: hidden;
      }
      .section-title {
        text-align: center;
        font-size: clamp(2.2rem, 5.5vw, 3.2rem);
        margin: 0 auto 1rem auto; /* Center margin */
        font-weight: 700;
        color: var(--primary-color);
        max-width: 900px; /* Limit width for readability */
      }
      .section-subtitle {
        text-align: center;
        font-size: clamp(1.05rem, 2.6vw, 1.25rem);
        margin: 0 auto 3.5rem auto; /* Center margin */
        color: var(--text-secondary);
        max-width: 750px; /* Limit width */
        line-height: 1.65;
      }

      /* Base Card Styling (Project, Feature, Step, etc.) */
      .project-card,
      .feature,
      .step,
      .about-philosophy {
        transition:
          transform var(--transition-base),
          box-shadow var(--transition-base),
          border-color var(--transition-base),
          background-color var(--transition-base);
        box-shadow: 0 6px 18px var(--card-shadow);
        border-radius: 15px;
        padding: 2rem;
        background-color: var(--card-bg);
        border: 1px solid var(--card-border);
        backdrop-filter: blur(10px);
        text-align: center;
      }
      .project-card:hover,
      .feature:hover,
      .step:hover,
      .about-philosophy:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px var(--card-hover-shadow);
        border-color: var(--card-hover-border);
        background-color: rgba(35, 35, 60, 0.9); /* Slightly adjust hover bg */
      }
      h3 {
        /* General heading style for cards/sections */
        color: var(--primary-color);
        margin-top: 0;
        margin-bottom: 0.8rem;
        font-size: 1.4rem;
        font-weight: 600;
      }
      p {
        /* General paragraph style */
        color: var(--text-secondary);
        line-height: 1.65;
        margin-bottom: 1rem;
      }
      p:last-child {
        margin-bottom: 0;
      }
      a {
        /* Base link style */
        color: var(--primary-color);
        text-decoration: none;
        transition: color var(--transition-base);
      }
      a:hover {
        color: #fff;
      }

      /* Call to Action Button */
      .cta-button {
        display: inline-block;
        padding: 14px 35px;
        background: var(--primary-color);
        color: #000;
        border: none;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition:
          transform var(--transition-base),
          box-shadow var(--transition-base),
          background-color var(--transition-base),
          color var(--transition-base);
        box-shadow: 0 5px 18px rgba(0, 229, 255, 0.3);
        cursor: pointer; /* Ensure pointer cursor */
      }
      .cta-button:hover {
        transform: translateY(-4px) scale(1.03);
        box-shadow: 0 10px 25px rgba(0, 229, 255, 0.45);
        background: #fff;
        color: var(--primary-color);
      }

      /* ==========================================================================
           Hero Section (#home)
           ========================================================================== */
      .hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        padding: 3rem 2rem;
        /* Background image is applied inline for uniqueness */
        background-color: transparent;
      }
      #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0;
      }
      .hero-content {
        position: relative;
        z-index: 1;
        max-width: 850px;
      }
      .hero-title {
        font-size: clamp(2.8rem, 6.5vw, 4.8rem);
        margin-bottom: 1.5rem;
        line-height: 1.15;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      }
      .hero-title span {
        display: block;
      }
      .hero-subtitle {
        font-size: clamp(1.1rem, 2.5vw, 1.4rem);
        margin-bottom: 2.5rem;
        color: #ccc;
        max-width: 650px;
        margin-left: auto;
        margin-right: auto;
      }
      /* Hero CTA uses .cta-button style */

      /* ==========================================================================
           About Section (#about)
           ========================================================================== */
      .creative-about .about-content {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
      }
      @media (min-width: 992px) {
        .creative-about .about-content {
          grid-template-columns: 1fr 1fr;
          grid-template-areas:
            "intro image"
            "philosophy image";
          gap: 4rem;
        }
        .about-intro {
          grid-area: intro;
          text-align: left;
        }
        .about-core-idea {
          grid-area: image;
          align-self: center;
        }
        .about-philosophy {
          grid-area: philosophy;
          text-align: left;
        }
      }

      .about-intro {
        text-align: center;
        margin-bottom: 1rem;
      }
      .creative-about .about-title {
        /* Override general section title */
        font-size: clamp(2.4rem, 5.5vw, 3.4rem);
        margin-bottom: 0.75rem;
        color: #fff;
        text-align: inherit; /* Inherit alignment from parent */
      }
      .about-tagline {
        font-size: clamp(1.1rem, 3vw, 1.4rem);
        color: var(--text-secondary);
        margin-bottom: 2rem;
        max-width: 550px;
        margin-left: auto;
        margin-right: auto;
        text-align: inherit; /* Inherit alignment */
      }
      @media (min-width: 992px) {
        .about-intro,
        .about-philosophy {
          text-align: left;
        }
        .about-tagline {
          margin-left: 0;
          margin-right: 0;
        }
      }

      .about-core-idea {
        text-align: center;
        position: relative;
      }
      .about-core-image {
        max-width: 85%;
        width: clamp(250px, 30vw, 350px);
        height: clamp(250px, 30vw, 350px);
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 12px 35px rgba(0, 255, 255, 0.15);
        border: 4px solid rgba(0, 255, 255, 0.4);
        transition:
          transform 0.5s ease,
          box-shadow 0.5s ease;
        display: block;
        margin: 0 auto;
        cursor: pointer; /* Add pointer if interactive */
      }
      .about-core-image:hover {
        transform: scale(1.04) rotate(3deg);
        box-shadow: 0 18px 45px rgba(0, 255, 255, 0.25);
      }

      /* .about-philosophy inherits base card styles */
      .about-philosophy {
        padding: 2.5rem;
        text-align: left; /* Ensure left alignment */
      }
      .about-philosophy h3 {
        /* Our Approach */
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: #fff;
      }
      .about-philosophy h4 {
        /* Core Principles */
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 600;
        color: var(--text-color);
        font-size: 1.2rem;
      }
      .philosophy-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
      }
      .philosophy-list li {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 1.05rem;
        color: var(--text-secondary);
      }
      .philosophy-list i {
        font-size: 1.4rem;
        margin-right: 1.2rem;
        width: 35px;
        text-align: center;
        transition: transform var(--transition-base);
        flex-shrink: 0;
      }
      .icon-spark {
        color: #ffeb3b;
      }
      .icon-connect {
        color: #00bcd4;
      }
      .icon-launch {
        color: #ff5722;
      }
      .philosophy-list li:hover i {
        transform: scale(1.15) rotate(-8deg);
      }
      .philosophy-list .highlight {
        font-weight: 600;
        color: var(--text-color);
      }
      .about-philosophy p:last-of-type {
        /* Concluding sentence */
        margin-top: 1.5rem;
        font-weight: 500;
        color: var(--text-color);
        font-size: 1.1rem;
      }

      /* ==========================================================================
           Professional Services Section (#services)
           ========================================================================== */
      .professional-services {
        /* Slightly transparent background to show grid */
        background-color: rgba(10, 10, 26, 0.97);
        padding: 6rem 1.5rem 8rem 1.5rem;
        position: relative;
        overflow: hidden; /* Changed from visible */
      }

      /* Filter styling */
      .industry-filter-container {
        text-align: center;
        margin-bottom: 3.5rem;
        color: var(--text-secondary);
      }
      .industry-filter-container label {
        margin-right: 0.75rem;
        font-size: 0.95rem;
      }
      .industry-filter-container select {
        padding: 0.6rem 1.2rem;
        background-color: var(--card-bg-opaque); /* Use opaque */
        border: 1px solid var(--card-border);
        color: var(--text-color);
        border-radius: 8px;
        font-size: 0.95rem;
        cursor: pointer;
        transition:
          border-color var(--transition-base),
          background-color var(--transition-base);
      }
      .industry-filter-container select:hover {
        border-color: var(--primary-color);
      }
      .industry-filter-container select:focus {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
        border-color: var(--primary-color);
      }
      .filter-note {
        display: block;
        font-size: 0.85rem;
        margin-top: 0.75rem;
        opacity: 0.7;
      }

      /* Service Grid */
      .professional-service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr));
        gap: 2.5rem;
        max-width: 1280px;
        margin: 0 auto;
      }

      /* Service Module Base */
      .service-module {
        background-color: var(--card-bg);
        border-radius: 15px;
        border: 1px solid var(--card-border);
        position: relative;
        transition:
          transform var(--transition-base),
          box-shadow var(--transition-base),
          border-color var(--transition-base);
        overflow: hidden; /* Important: hide panel initially */
        cursor: pointer;
        min-height: 250px; /* Ensure card face has space */
        display: flex;
        flex-direction: column;
        backdrop-filter: blur(10px);
      }
      .service-module:focus {
        outline: none; /* Remove default outline */
      }
      .service-module:focus-visible {
        /* Style keyboard focus */
        outline: 2px solid var(--primary-color);
        outline-offset: 3px;
      }

      /* Card Face (Visible initially) */
      .card-face {
        padding: 2rem 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        justify-content: center;
        position: relative; /* Relative to module */
        transition:
          opacity var(--transition-smooth),
          transform var(--transition-smooth);
        z-index: 2;
        flex-grow: 1; /* Take available space */
      }
      .card-icon-wrapper {
        font-size: 2.8rem;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        position: relative;
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform var(--transition-base);
      }
      .micro-animation-bg {
        /* Subtle glow background */
        position: absolute;
        inset: -15%; /* simpler positioning */
        background: radial-gradient(
          circle,
          rgba(0, 229, 255, 0.15) 0%,
          transparent 65%
        );
        border-radius: 50%;
        opacity: 0;
        transform: scale(0.8);
        transition:
          opacity var(--transition-smooth),
          transform var(--transition-smooth);
        z-index: -1;
      }
      .card-title {
        font-size: 1.4rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 0.75rem;
        transition: color var(--transition-base);
      }
      .card-value-prop {
        font-size: 1rem;
        color: var(--text-secondary);
        line-height: 1.55;
        max-width: 320px;
      }

      /* Card Face Hover/Focus State (when NOT expanded) */
      .service-module:not(.is-expanded):hover,
      .service-module:not(.is-expanded):focus-within {
        transform: translateY(-6px);
        box-shadow:
          0 15px 35px rgba(0, 0, 0, 0.25),
          0 0 18px var(--prof-shadow-color);
        border-color: var(--primary-color);
      }
      .service-module:not(.is-expanded):hover .micro-animation-bg,
      .service-module:not(.is-expanded):focus-within .micro-animation-bg {
        opacity: 1;
        transform: scale(1);
      }
      .service-module:not(.is-expanded):hover .card-icon-wrapper {
        transform: scale(1.1);
      }
      .service-module:not(.is-expanded):hover .card-title {
        color: var(--primary-color);
      }

      /* Expanded Panel (Hidden initially) */
      .expanded-panel {
        position: absolute; /* Position over the card face */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--card-bg-opaque); /* Use opaque bg */
        z-index: 1; /* Below card face when hidden */
        opacity: 0;
        overflow-y: auto; /* Scroll if content overflows */
        pointer-events: none;
        transform: translateY(15px) scale(0.99);
        transition:
          opacity var(--transition-smooth),
          transform var(--transition-smooth);
        display: flex;
        flex-direction: column;
      }
      .panel-content {
        padding: 2.5rem 1.75rem 1rem 1.75rem;
        flex-grow: 1;
        position: relative; /* For close button positioning */
      }

      /* Close Button */
      .close-panel-btn {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: transparent;
        border: none;
        color: var(--text-secondary);
        font-size: 2rem;
        line-height: 1;
        cursor: pointer;
        padding: 0.3rem;
        z-index: 10; /* Above panel content */
        transition:
          color var(--transition-base),
          transform var(--transition-base);
      }
      .close-panel-btn:hover,
      .close-panel-btn:focus {
        color: var(--primary-color);
        transform: scale(1.1);
        outline: none; /* Remove focus outline if styled on hover */
      }

      /* Expanded Panel Content Styling */
      .expanded-panel h4 {
        /* E.g., "Challenge:", "Solution:" */
        color: #fff;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        padding-bottom: 0.6rem;
        border-bottom: 1px solid var(--card-border);
      }
      .problem-statement {
        color: var(--text-secondary);
        margin-bottom: 1.8rem;
        font-size: 1rem;
        border-left: 3px solid var(--prof-accent-dark); /* Use a defined accent */
        padding-left: 1rem;
      }
      .solution-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 1.8rem;
      }
      .solution-list li {
        color: var(--text-color); /* Use primary text color */
        margin-bottom: 0.8rem;
        font-size: 1rem;
        display: flex;
        align-items: flex-start;
      }
      .solution-list i.fa-check {
        /* Style the check icon */
        color: var(--primary-color);
        margin-right: 0.8rem;
        margin-top: 0.25em;
        font-size: 0.85em;
        flex-shrink: 0;
      }
      .case-study-snippet {
        background-color: rgba(0, 0, 0, 0.25);
        padding: 1.2rem;
        border-radius: 8px;
        margin-bottom: 1.8rem;
        border-left: 4px solid var(--primary-color);
      }
      .case-study-snippet h5 {
        /* E.g., "Industry Example:" */
        color: var(--text-secondary);
        font-size: 0.85rem;
        text-transform: uppercase;
        margin-bottom: 0.75rem;
        letter-spacing: 0.8px;
        font-weight: 600;
      }
      .case-study-snippet p {
        color: var(--text-color);
        font-size: 0.95rem;
        margin-bottom: 1rem;
      }
      .case-study-link {
        /* Link within case study */
        color: var(--primary-color);
        font-size: 0.95rem;
        font-weight: 600;
      }
      .case-study-link:hover {
        color: #fff;
        text-decoration: underline;
      }
      .case-study-link i {
        margin-left: 0.4rem;
        font-size: 0.8em;
        transition: transform 0.2s ease-in-out;
      }
      .case-study-link:hover i {
        transform: translateX(3px);
      }

      /* Interactive Demo Area */
      .interactive-demo-area {
        margin-bottom: 1.8rem;
        border: 1px dashed var(--card-border);
        padding: 1.8rem 1.2rem;
        border-radius: 8px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.1);
      }
      .interactive-demo-area h5 {
        color: var(--text-secondary);
        font-size: 1rem;
        margin-bottom: 1.2rem;
        font-weight: 600;
      }
      .demo-placeholder {
        font-size: 0.95rem;
        color: var(--text-secondary);
      }
      .demo-placeholder::before {
        /* Style potential icons */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        margin-right: 0.5rem;
        color: var(--primary-color);
        display: inline-block; /* Allow margin */
      }
      .demo-placeholder.efficiency::before {
        content: "\f201";
      } /* Chart icon */
      .demo-placeholder.roi::before {
        content: "\f51e";
      } /* Dollar icon */

      /* Tech Toggle Button */
      .tech-toggle-btn {
        display: block;
        width: calc(100% - 3.5rem); /* Match panel padding */
        margin: 0rem 1.75rem 1.75rem 1.75rem;
        padding: 0.9rem 1.2rem;
        background-color: rgba(0, 0, 0, 0.35);
        border: 1px solid var(--card-border);
        color: var(--text-secondary);
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        font-size: 0.95rem;
        font-weight: 500;
        transition:
          background-color var(--transition-base),
          color var(--transition-base),
          border-color var(--transition-base);
        flex-shrink: 0;
        position: relative; /* For pseudo-elements */
      }
      .tech-toggle-btn:hover,
      .tech-toggle-btn:focus {
        background-color: var(--primary-color);
        color: var(--bg-color); /* Use dark bg color for text */
        border-color: var(--primary-color);
        outline: none;
      }
      /* Button Text Content (Handled by CSS pseudo-elements here, JS alternative available) */
      .tech-toggle-btn::before {
        content: "View Technical Details ";
        font-family: inherit; /* Use button font */
      }
      .service-module.show-tech .tech-toggle-btn::before {
        content: "View Business Impact ";
      }
      /* Button Icon */
      .tech-toggle-btn::after {
        content: "\f06e"; /* Eye icon */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        margin-left: 0.7rem;
        font-size: 0.9em;
        transition: transform var(--transition-base);
        display: inline-block; /* Allows transform */
      }
      .service-module.show-tech .tech-toggle-btn::after {
        content: "\f070"; /* Eye-slash icon */
      }
      .tech-toggle-btn:hover::after {
        transform: scale(1.1);
      }

      /* Tech View Content Styling */
      .tech-view {
        display: none;
      }
      .service-module.show-tech .business-view {
        display: none;
      }
      .service-module.show-tech .tech-view {
        display: block;
      }

      .tech-view h4 {
        /* Technical Overview title */
        color: #fff;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
      }
      .tech-view p {
        color: var(--text-secondary);
        margin-bottom: 1.2rem;
        font-size: 1rem;
      }
      .tech-view ul {
        list-style: none;
        padding-left: 0;
        margin-bottom: 1.5rem;
        columns: 2; /* Display tech stack in columns if wide enough */
        column-gap: 2rem;
      }
      @media (max-width: 500px) {
        .tech-view ul {
          columns: 1;
        } /* Stack on small screens */
      }
      .tech-view li {
        color: var(--text-color);
        margin-bottom: 0.6rem;
        font-size: 0.95rem;
        position: relative;
        padding-left: 1.2rem;
        break-inside: avoid-column; /* Prevent list items breaking across columns */
      }
      .tech-view li::before {
        /* Bullet point */
        content: "•";
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: bold;
      }

      /* Module Expanded State */
      .service-module.is-expanded {
        z-index: 10; /* Bring to front */
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
        cursor: default; /* Not clickable when expanded */
        transform: translateY(0); /* Reset hover transform */
        border-color: var(--primary-color); /* Keep border highlighted */
        overflow: visible; /* Allow shadow to show */
      }
      .service-module.is-expanded .card-face {
        opacity: 0;
        pointer-events: none;
        transform: translateY(-10px);
        transition:
          opacity 0.3s ease,
          transform 0.3s ease; /* Faster hide */
      }
      .service-module.is-expanded .expanded-panel {
        opacity: 1;
        pointer-events: auto; /* Make panel interactive */
        transform: translateY(0) scale(1);
        z-index: 3; /* Panel above hidden face */
      }

      /* ==========================================================================
           How We Work Section (#how-we-work)
           ========================================================================== */
      #how-we-work {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
        align-items: start;
        max-width: 1200px;
        margin: 0 auto;
      }
      @media (min-width: 992px) {
        #how-we-work {
          grid-template-columns: 1fr 1.2fr;
          gap: 4rem;
        }
      }
      .process-intro {
        text-align: left;
      }
      .process-intro .section-title {
        text-align: left;
      }
      .process-intro .section-content {
        /* Paragraph */
        max-width: 500px;
        color: var(--text-secondary);
      }
      .process-steps {
        display: flex;
        flex-direction: column;
        gap: 1.8rem;
      }
      /* .step inherits base card styles but overrides some */
      .step {
        background-color: var(--card-bg);
        border: 1px solid var(--card-border);
        border-left: 4px solid var(--primary-color);
        padding: 1.8rem;
        text-align: left;
        backdrop-filter: blur(10px);
        transition:
          transform var(--transition-base),
          box-shadow var(--transition-base); /* Add hover transition */
      }
      .step:hover {
        transform: translateX(5px); /* Slight move on hover */
        box-shadow: 0 8px 20px var(--card-hover-shadow);
      }
      .step h3 {
        /* Step title, e.g., "1. Discovery" */
        font-size: 1.35rem;
        color: #fff;
        margin-bottom: 0.6rem;
      }
      .step p {
        color: var(--text-secondary);
        font-size: 0.95rem;
        margin-bottom: 0;
      }

      /* ==========================================================================
           Projects Section (#projects)
           ========================================================================== */
      .projects .project-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2.5rem;
        max-width: 1280px;
        margin: 0 auto 3rem auto;
      }
      /* .project-card inherits base card styles */
      .project-card {
        text-align: left;
      }
      .project-card h3 {
        /* Project title */
        font-size: 1.5rem;
        color: var(--primary-color);
        margin-bottom: 0.75rem;
      }
      .project-card p {
        font-size: 0.95rem;
        color: var(--text-secondary);
      }
      .projects .cta-container {
        text-align: center;
        margin-top: 3rem;
      }
      /* Projects CTA uses .cta-button style */

      /* ==========================================================================
           Why Us Section (#why-us)
           ========================================================================== */
      #why-us .flex-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2.5rem;
        max-width: 1280px;
        margin: 0 auto;
      }
      /* .feature inherits base card styles */
      .feature {
        padding: 2.5rem;
        text-align: left;
      }
      .feature .icon {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: var(--primary-color);
        height: auto;
        width: 40px;
        display: flex;
        transition: transform var(--transition-base);
      }
      .feature:hover .icon {
        transform: scale(1.1) rotate(-5deg);
      }
      .feature .icon svg {
        height: 40px;
        width: auto;
        fill: currentColor;
      }
      .feature h3 {
        /* Feature title */
        color: #fff;
        font-size: 1.4rem;
        margin-bottom: 0.75rem;
      }
      .feature p {
        font-size: 0.95rem;
        color: var(--text-secondary);
      }

      /* ==========================================================================
           Footer (#contact)
           ========================================================================== */
      .footer {
        background: rgba(10, 10, 26, 0.8); /* Slightly more opaque */
        backdrop-filter: blur(8px);
        padding: 5rem 2rem 2.5rem 2rem;
        margin-top: 5rem;
        border-top: 1px solid var(--card-border);
      }
      .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 3rem;
        max-width: 1280px;
        margin: 0 auto 3rem auto;
        text-align: center;
      }
      @media (min-width: 768px) {
        .footer-content {
          text-align: left;
        }
        .social-links {
          justify-content: flex-start;
        }
      }
      .footer-logo h3 {
        /* Company Name */
        font-size: 1.8rem;
        color: #fff;
        margin-bottom: 0.75rem;
        font-weight: 600;
      }
      .footer-logo p {
        /* Tagline */
        color: var(--text-secondary);
        font-size: 0.95rem;
        line-height: 1.5;
      }
      .footer-heading {
        font-size: 1.1rem; /* Smaller footer headings */
        color: #fff;
        margin-bottom: 1.2rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.8px; /* More spacing */
      }
      .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      .footer-links li {
        margin-bottom: 0.8rem;
      }
      .footer-links a {
        color: var(--text-secondary);
        font-size: 0.95rem;
      }
      .footer-links a:hover {
        color: var(--primary-color);
      }
      .social-links {
        display: flex;
        gap: 1.2rem;
        justify-content: center; /* Center by default */
      }
      .social-link {
        color: var(--text-secondary);
        font-size: 1.4rem;
        transition:
          transform var(--transition-base),
          color var(--transition-base);
      }
      .social-link:hover {
        color: var(--primary-color);
        transform: scale(1.2); /* Simpler hover */
      }
      .footer-contact-section p {
        margin-bottom: 0.75rem;
        color: var(--text-secondary);
        font-size: 0.95rem;
        display: flex;
        align-items: center;
      }
      .footer-contact-section i {
        /* Contact icons */
        margin-right: 10px;
        color: var(--primary-color);
        width: 18px;
        text-align: center;
        flex-shrink: 0;
      }
      .footer-contact-section a {
        /* Contact links */
        color: var(--text-secondary);
      }
      .footer-contact-section a:hover {
        color: var(--primary-color);
      }
      .footer-copyright {
        text-align: center;
        margin-top: 4rem;
        padding-top: 2rem;
        border-top: 1px solid var(--card-border);
        color: #aaa;
        font-size: 0.9rem;
      }

      /* ==========================================================================
           Media Query Adjustments (Example)
           ========================================================================== */
      @media (max-width: 767px) {
        section {
          padding: 4rem 1rem;
        } /* Less padding on mobile */
        .section-title {
          font-size: clamp(1.8rem, 7vw, 2.5rem);
        }
        .section-subtitle {
          font-size: clamp(1rem, 4vw, 1.15rem);
          margin-bottom: 2.5rem;
        }

        .professional-service-grid {
          gap: 1.8rem;
          grid-template-columns: 1fr;
        }
        .panel-content {
          padding: 2rem 1.25rem 1rem 1.25rem;
        }
        .tech-toggle-btn {
          width: calc(100% - 2.5rem);
          margin: 1rem 1.25rem 1.5rem 1.25rem;
        }

        #how-we-work {
          grid-template-columns: 1fr;
        } /* Ensure stacking */
        .process-intro,
        .step {
          text-align: center;
        } /* Center text */
        .step {
          border-left: none;
          border-top: 4px solid var(--primary-color);
        } /* Top border */

        .projects .project-cards {
          grid-template-columns: 1fr;
        }
        #why-us .flex-container {
          grid-template-columns: 1fr;
        }
        .feature {
          text-align: center;
        }
        .feature .icon {
          margin-left: auto;
          margin-right: auto;
        } /* Center icon */

        .footer-content {
          text-align: center;
        }
        .social-links {
          justify-content: center;
        }
        .footer-contact-section p {
          justify-content: center;
        }
      }
    </style>
  </head>
  <body>
    <!-- Logo -->
    <div class="logo">
      <!-- Ensure image path is correct -->
      <img src="image/Artboard 1.png" alt="Ascii Technologies Logo" />
    </div>

    <!-- Custom Cursor -->
    <div class="cursor"></div>

    <!-- Sidebar Navigation -->
    <nav class="sidebar-nav">
      <a href="#home" class="active" data-label="Home"></a>
      <a href="#about" data-label="About"></a>
      <a href="#services" data-label="Services"></a>
      <!-- Ensure project.html exists or change href -->
      <a href="projects" data-label="Projects"></a>
      <a href="#contact" data-label="Contact"></a>
    </nav>

    <!-- Background Grid -->
    <div class="background-grid"></div>

    <!-- Hero Section -->
    <!-- Ensure background image path is correct -->
    <section
      id="home"
      class="hero"
      style="
        background: url(image/AbstractCosmicStructure.jpeg) no-repeat center
          center;
        background-size: cover;
      "
    >
      <div id="particles-js"></div>
      <div class="hero-content" data-aos="fade-in" data-aos-duration="1500">
        <h1 class="hero-title">
          <span data-aos="fade-up" data-aos-delay="200"
            >Ascii Technologies</span
          >
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="600">
          We partner with businesses to build high-performance custom software,
          implement intelligent automation, and leverage scalable cloud
          infrastructure for measurable results.
        </p>
        <a
          href="#services"
          class="cta-button"
          data-aos="fade-up"
          data-aos-delay="800"
        >
          Explore Our Solutions
        </a>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about creative-about">
      <div class="about-content creative-layout">
        <div class="about-intro" data-aos="fade-down" data-aos-duration="1200">
          <h2 class="about-title">Your Strategic Technology Partner</h2>
          <p
            class="about-tagline"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            We translate complex business challenges into elegant, effective,
            and scalable digital solutions.
          </p>
        </div>
        <div
          class="about-core-idea"
          data-aos="zoom-in"
          data-aos-delay="400"
          data-aos-duration="1200"
        >
          <!-- Ensure image path is correct -->
          <img
            src="image/Abstract 3D Sphere.jpeg"
            alt="Ascii Core Concept - Strategic Innovation"
            class="about-core-image"
          />
        </div>
        <div
          class="about-philosophy"
          data-aos="fade-left"
          data-aos-delay="600"
          data-aos-duration="1200"
        >
          <h3>Our Approach</h3>
          <p>
            We believe technology should be an enabler, not an obstacle. Our
            foundation rests on robust engineering, intuitive design, and true
            partnership. We delve into your operational needs, align with your
            strategic goals, and craft bespoke solutions designed for impact and
            longevity.
          </p>
          <h4>Core Principles:</h4>
          <ul class="philosophy-list">
            <li data-aos="fade-left" data-aos-delay="700">
              <i class="fas fa-lightbulb icon-spark"></i>
              <span
                >Drive innovation through
                <span class="highlight">insightful strategy</span>.</span
              >
            </li>
            <li data-aos="fade-left" data-aos-delay="800">
              <i class="fas fa-puzzle-piece icon-connect"></i>
              <span
                >Ensure seamless integration via
                <span class="highlight">expert engineering</span>.</span
              >
            </li>
            <li data-aos="fade-left" data-aos-delay="900">
              <i class="fas fa-rocket icon-launch"></i>
              <span
                >Accelerate growth with
                <span class="highlight">scalable solutions</span>.</span
              >
            </li>
          </ul>
          <p>
            Precision. Performance. Partnership. That's the Ascii commitment.
          </p>
        </div>
      </div>
    </section>

    <!-- Professional Services Section -->
    <section id="services" class="professional-services">
      <h2 class="section-title" data-aos="fade-down">Core Service Offerings</h2>
      <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
        Leverage our expertise across key technology domains to overcome
        challenges, optimize operations, and unlock new opportunities for
        growth.
      </p>

      <!-- Industry Filter -->
      <div
        class="industry-filter-container"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <label for="industry-select">View examples relevant to:</label>
        <select id="industry-select" name="industry">
          <option value="all">All Industries</option>
          <option value="fintech">FinTech & Finance</option>
          <option value="healthcare">Healthcare Technology</option>
          <option value="ecommerce">Retail & eCommerce</option>
          <option value="logistics">Supply Chain & Logistics</option>
          <option value="education">Education Technology</option>
          <!-- Add more relevant industries -->
        </select>
        <span class="filter-note"
          >(Case study filtering requires JS implementation)</span
        >
      </div>

      <!-- Services Grid -->
      <div class="professional-service-grid">
        <!-- Service Module 1: Custom Software -->
        <div
          class="service-module"
          id="service-custom-software"
          data-aos="fade-up"
          data-aos-delay="300"
          tabindex="0"
        >
          <div class="card-face">
            <div class="card-icon-wrapper">
              <i class="fas fa-puzzle-piece"></i>
              <div class="micro-animation-bg"></div>
            </div>
            <h3 class="card-title">Custom Software Development</h3>
            <p class="card-value-prop">
              Architect bespoke digital platforms tailored precisely to your
              unique operational requirements and strategic objectives.
            </p>
          </div>
          <div class="expanded-panel">
            <button class="close-panel-btn" aria-label="Close Panel">×</button>
            <div class="panel-content">
              <div class="content-section business-view">
                <h4>
                  Challenge: Generic software limits potential and creates
                  friction.
                </h4>
                <p class="problem-statement">
                  Off-the-shelf solutions often force inefficient workarounds,
                  hinder scalability, lack integration capabilities, and fail to
                  provide a unique competitive advantage.
                </p>
                <h4>Solution: Precision-Engineered Platforms</h4>
                <ul class="solution-list">
                  <li>
                    <i class="fas fa-check"></i> Seamless integration with
                    existing ecosystems & APIs.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Workflow automation optimized
                    for your core processes.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Scalable, resilient
                    architecture designed for future growth.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Enhanced data security,
                    governance, and compliance adherence.
                  </li>
                </ul>
                <div class="case-study-snippet">
                  <h5>Industry Example: Logistics</h5>
                  <p>
                    "Developed a custom TMS reducing route planning time by 45%
                    and improving on-time delivery rates by 15% for a regional
                    carrier."
                  </p>
                  <!-- Link to actual case study page or section -->
                  <a href="#case-study-logistics" class="case-study-link"
                    >View Full Case Study <i class="fas fa-arrow-right"></i
                  ></a>
                </div>
                <div class="interactive-demo-area">
                  <h5>Interactive Element</h5>
                  <div class="demo-placeholder efficiency">
                    Visualize Efficiency Gains
                  </div>
                </div>
              </div>
              <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <p>
                  Utilizing agile methodologies and robust technology stacks to
                  deliver high-quality, maintainable code.
                </p>
                <ul>
                  <li>Frontend Frameworks: React, Next.js, Vue.js, Angular</li>
                  <li>
                    Backend Technologies: Node.js (Express/NestJS), Python
                    (Django/Flask), Java (Spring Boot), .NET Core
                  </li>
                  <li>
                    Database Systems: PostgreSQL, MySQL, MongoDB, Redis,
                    Elasticsearch
                  </li>
                  <li>
                    Architectural Patterns: Microservices, Serverless,
                    Event-Driven, Monolith (when appropriate)
                  </li>
                  <li>
                    DevOps & Cloud: Docker, Kubernetes, Terraform, AWS, Azure,
                    GCP, CI/CD Pipelines
                  </li>
                </ul>
              </div>
            </div>
            <button class="tech-toggle-btn"></button>
            <!-- Text set by CSS -->
          </div>
        </div>

        <!-- Service Module 2: Web & Mobile -->
        <div
          class="service-module"
          id="service-web-mobile"
          data-aos="fade-up"
          data-aos-delay="400"
          tabindex="0"
        >
          <div class="card-face">
            <div class="card-icon-wrapper">
              <i class="fas fa-laptop-code"></i>
              <div class="micro-animation-bg"></div>
            </div>
            <h3 class="card-title">Web & Mobile App Development</h3>
            <p class="card-value-prop">
              Create engaging, high-performance web platforms and mobile
              applications that drive user adoption and business value.
            </p>
          </div>
          <div class="expanded-panel">
            <button class="close-panel-btn" aria-label="Close Panel">×</button>
            <div class="panel-content">
              <div class="content-section business-view">
                <h4>
                  Challenge: Inadequate digital presence hinders engagement and
                  reach.
                </h4>
                <p class="problem-statement">
                  Outdated, unresponsive, or poorly performing web and mobile
                  platforms lead to lost opportunities, customer frustration,
                  and operational inefficiencies.
                </p>
                <h4>Solution: User-Centric Digital Experiences</h4>
                <ul class="solution-list">
                  <li>
                    <i class="fas fa-check"></i> Responsive, performant web
                    applications (PWAs, SPAs).
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Native (iOS/Android) &
                    Cross-Platform mobile app development.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> API development and integration
                    for seamless connectivity.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> User Experience (UX) design
                    focused on usability and conversion.
                  </li>
                </ul>
                <div class="case-study-snippet">
                  <h5>Industry Example: eCommerce</h5>
                  <p>
                    "Launched a redesigned eCommerce PWA resulting in a 25%
                    increase in mobile conversion rates and a 40% decrease in
                    page load times."
                  </p>
                  <a href="#case-study-ecommerce" class="case-study-link"
                    >View Full Case Study <i class="fas fa-arrow-right"></i
                  ></a>
                </div>
                <div class="interactive-demo-area">
                  <h5>Interactive Element</h5>
                  <div class="demo-placeholder">[Device Preview Simulator]</div>
                </div>
              </div>
              <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <p>
                  Building modern, scalable frontends and robust mobile
                  applications using industry best practices.
                </p>
                <ul>
                  <li>
                    Web Technologies: React, Vue, Angular, Svelte, Next.js,
                    Nuxt.js, Web Components
                  </li>
                  <li>
                    Mobile Technologies: Swift (iOS), Kotlin (Android), React
                    Native, Flutter
                  </li>
                  <li>API Protocols: RESTful, GraphQL, gRPC</li>
                  <li>
                    Performance Optimization: Code Splitting, Lazy Loading, CDN,
                    Image Optimization (WebP/AVIF)
                  </li>
                  <li>
                    Testing Frameworks: Jest, Cypress, Playwright, Appium,
                    BrowserStack/Sauce Labs
                  </li>
                </ul>
              </div>
            </div>
            <button class="tech-toggle-btn"></button>
          </div>
        </div>

        <!-- Service Module 3: AI & Automation -->
        <div
          class="service-module"
          id="service-ai-automation"
          data-aos="fade-up"
          data-aos-delay="500"
          tabindex="0"
        >
          <div class="card-face">
            <div class="card-icon-wrapper">
              <i class="fas fa-robot"></i>
              <div class="micro-animation-bg"></div>
            </div>
            <h3 class="card-title">AI & Automation Solutions</h3>
            <p class="card-value-prop">
              Leverage Artificial Intelligence and Machine Learning to automate
              processes, gain insights, and enhance decision-making.
            </p>
          </div>
          <div class="expanded-panel">
            <button class="close-panel-btn" aria-label="Close Panel">×</button>
            <div class="panel-content">
              <div class="content-section business-view">
                <h4>
                  Challenge: Manual processes drain resources and impede growth.
                </h4>
                <p class="problem-statement">
                  Repetitive tasks, complex data analysis, and inconsistent
                  decision-making consume valuable time, increase operational
                  costs, and limit strategic focus.
                </p>
                <h4>Solution: Intelligent Operational Enhancement</h4>
                <ul class="solution-list">
                  <li>
                    <i class="fas fa-check"></i> Robotic Process Automation
                    (RPA) for automating rule-based tasks.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Natural Language Processing
                    (NLP) for text analysis, chatbots, sentiment analysis.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Machine Learning (ML) for
                    predictive modeling, anomaly detection, personalization.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Computer Vision for image
                    recognition and video analysis tasks.
                  </li>
                </ul>
                <div class="case-study-snippet">
                  <h5>Industry Example: FinTech</h5>
                  <p>
                    "Implemented an ML-based fraud detection system, reducing
                    false positives by 30% and improving detection of
                    sophisticated fraud patterns."
                  </p>
                  <a href="#case-study-fintech" class="case-study-link"
                    >View Full Case Study <i class="fas fa-arrow-right"></i
                  ></a>
                </div>
                <div class="interactive-demo-area">
                  <h5>Interactive Element</h5>
                  <div class="demo-placeholder roi">
                    Calculate Potential ROI
                  </div>
                </div>
              </div>
              <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <p>
                  Applying cutting-edge AI/ML models and robust automation
                  frameworks tailored to specific use cases.
                </p>
                <ul>
                  <li>Core Languages: Python (preferred), R</li>
                  <li>
                    ML/DL Frameworks: TensorFlow, PyTorch, Keras, scikit-learn,
                    XGBoost
                  </li>
                  <li>
                    AI Platforms: AWS SageMaker, Google AI Platform, Azure
                    Machine Learning
                  </li>
                  <li>RPA Tools: UiPath, Blue Prism, Automation Anywhere</li>
                  <li>
                    NLP Libraries: spaCy, NLTK, Hugging Face Transformers, GPT
                    Models (via API)
                  </li>
                  <li>Data Processing: Pandas, NumPy, Apache Spark, Dask</li>
                </ul>
              </div>
            </div>
            <button class="tech-toggle-btn"></button>
          </div>
        </div>

        <!-- Service Module 4: Cloud & DevOps -->
        <div
          class="service-module"
          id="service-cloud-solutions"
          data-aos="fade-up"
          data-aos-delay="600"
          tabindex="0"
        >
          <div class="card-face">
            <div class="card-icon-wrapper">
              <i class="fas fa-cloud"></i>
              <div class="micro-animation-bg"></div>
            </div>
            <h3 class="card-title">Cloud Infrastructure & DevOps</h3>
            <p class="card-value-prop">
              Optimize scalability, reliability, security, and cost-efficiency
              through expert cloud strategy and implementation.
            </p>
          </div>
          <div class="expanded-panel">
            <button class="close-panel-btn" aria-label="Close Panel">×</button>
            <div class="panel-content">
              <div class="content-section business-view">
                <h4>
                  Challenge: On-premise or poorly managed cloud limits agility &
                  increases costs.
                </h4>
                <p class="problem-statement">
                  Legacy infrastructure struggles with fluctuating demand, poses
                  security risks, incurs high maintenance overhead, and slows
                  down innovation cycles.
                </p>
                <h4>Solution: Optimized Cloud Enablement</h4>
                <ul class="solution-list">
                  <li>
                    <i class="fas fa-check"></i> Cloud migration strategy &
                    execution (AWS, Azure, GCP).
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Infrastructure as Code (IaC)
                    for consistency and automation.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> CI/CD pipeline implementation
                    for faster, reliable deployments.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Cloud security posture
                    management and cost optimization.
                  </li>
                </ul>
                <div class="case-study-snippet">
                  <h5>Industry Example: SaaS Provider</h5>
                  <p>
                    "Migrated core application to AWS serverless architecture,
                    reducing infrastructure costs by 35% and improving
                    deployment frequency by 4x."
                  </p>
                  <a href="#case-study-saas" class="case-study-link"
                    >View Full Case Study <i class="fas fa-arrow-right"></i
                  ></a>
                </div>
                <div class="interactive-demo-area">
                  <h5>Interactive Element</h5>
                  <div class="demo-placeholder">
                    [Cloud Cost Comparison Tool]
                  </div>
                </div>
              </div>
              <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <p>
                  Leveraging leading cloud platforms and DevOps tooling for
                  efficient and secure infrastructure management.
                </p>
                <ul>
                  <li>
                    Cloud Providers: Amazon Web Services (AWS), Microsoft Azure,
                    Google Cloud Platform (GCP)
                  </li>
                  <li>
                    IaC Tools: Terraform, AWS CloudFormation, Azure Resource
                    Manager (ARM)
                  </li>
                  <li>
                    Containerization: Docker, Kubernetes (EKS, AKS, GKE), Helm
                  </li>
                  <li>
                    CI/CD Tools: Jenkins, GitLab CI, GitHub Actions, Argo CD
                  </li>
                  <li>
                    Monitoring & Logging: Prometheus, Grafana, ELK Stack,
                    Datadog, CloudWatch, Azure Monitor
                  </li>
                  <li>
                    Serverless: AWS Lambda, Azure Functions, Google Cloud
                    Functions
                  </li>
                </ul>
              </div>
            </div>
            <button class="tech-toggle-btn"></button>
          </div>
        </div>

        <!-- Service Module 5: Digital Transformation -->
        <div
          class="service-module"
          id="service-digital-transformation"
          data-aos="fade-up"
          data-aos-delay="700"
          tabindex="0"
        >
          <div class="card-face">
            <div class="card-icon-wrapper">
              <i class="fas fa-sync-alt"></i>
              <div class="micro-animation-bg"></div>
            </div>
            <h3 class="card-title">Digital Transformation & Modernization</h3>
            <p class="card-value-prop">
              Strategically modernize legacy systems and processes to enhance
              agility, improve user experiences, and unlock data value.
            </p>
          </div>
          <div class="expanded-panel">
            <button class="close-panel-btn" aria-label="Close Panel">×</button>
            <div class="panel-content">
              <div class="content-section business-view">
                <h4>
                  Challenge: Legacy systems impede innovation and
                  competitiveness.
                </h4>
                <p class="problem-statement">
                  Outdated technology stacks, monolithic architectures, and
                  siloed data hinder the ability to adapt quickly, integrate new
                  services, and leverage data effectively.
                </p>
                <h4>Solution: Strategic Modernization Roadmap</h4>
                <ul class="solution-list">
                  <li>
                    <i class="fas fa-check"></i> Legacy system assessment and
                    modernization strategy.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Re-platforming and
                    re-architecting applications (e.g., monolith to
                    microservices).
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Data migration, integration,
                    and establishment of data lakes/warehouses.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> API enablement for enhanced
                    connectivity and interoperability.
                  </li>
                </ul>
                <div class="case-study-snippet">
                  <h5>Industry Example: Manufacturing</h5>
                  <p>
                    "Modernized a legacy ERP system, integrating shop floor data
                    and enabling real-time production monitoring, improving OEE
                    by 12%."
                  </p>
                  <a href="#case-study-manufacturing" class="case-study-link"
                    >View Full Case Study <i class="fas fa-arrow-right"></i
                  ></a>
                </div>
                <div class="interactive-demo-area">
                  <h5>Interactive Element</h5>
                  <div class="demo-placeholder">
                    [Modernization Pathway Visualizer]
                  </div>
                </div>
              </div>
              <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <p>
                  Employing proven patterns and technologies for effective
                  system modernization and digital enablement.
                </p>
                <ul>
                  <li>
                    Modernization Patterns: Strangler Fig, Anti-Corruption
                    Layer, Event Sourcing
                  </li>
                  <li>
                    Architecture Styles: Microservices, Micro-frontends, CQRS
                  </li>
                  <li>
                    Data Technologies: Apache Kafka, RabbitMQ, Data Warehouses
                    (Snowflake, Redshift, BigQuery), Data Lakes
                  </li>
                  <li>
                    API Management: Apigee, Kong, AWS API Gateway, Azure API
                    Management
                  </li>
                  <li>
                    Programming Languages: Adapting based on existing and target
                    systems (Java, C#, Python, Go, etc.)
                  </li>
                </ul>
              </div>
            </div>
            <button class="tech-toggle-btn"></button>
          </div>
        </div>

        <!-- Service Module 6: UI/UX Design -->
        <div
          class="service-module"
          id="service-ui-ux-design"
          data-aos="fade-up"
          data-aos-delay="800"
          tabindex="0"
        >
          <div class="card-face">
            <div class="card-icon-wrapper">
              <i class="fas fa-bezier-curve"></i>
              <div class="micro-animation-bg"></div>
            </div>
            <h3 class="card-title">UI/UX Design & Strategy</h3>
            <p class="card-value-prop">
              Craft intuitive, engaging, and data-informed user interfaces that
              drive adoption, satisfaction, and business outcomes.
            </p>
          </div>
          <div class="expanded-panel">
            <button class="close-panel-btn" aria-label="Close Panel">×</button>
            <div class="panel-content">
              <div class="content-section business-view">
                <h4>
                  Challenge: Poor usability hinders adoption and damages brand
                  perception.
                </h4>
                <p class="problem-statement">
                  Confusing interfaces, inefficient workflows, and inconsistent
                  design lead to user frustration, low engagement, increased
                  support costs, and missed conversion opportunities.
                </p>
                <h4>Solution: Human-Centered Design Process</h4>
                <ul class="solution-list">
                  <li>
                    <i class="fas fa-check"></i> User research, persona
                    development, and journey mapping.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Wireframing, prototyping, and
                    iterative usability testing.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Accessible (WCAG) and
                    responsive UI design systems.
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Data-driven design validation
                    through analytics and A/B testing.
                  </li>
                </ul>
                <div class="case-study-snippet">
                  <h5>Industry Example: Healthcare Portal</h5>
                  <p>
                    "Redesigned a patient portal resulting in a 50% increase in
                    appointment scheduling via the platform and a significant
                    reduction in support calls."
                  </p>
                  <a href="#case-study-healthcare" class="case-study-link"
                    >View Full Case Study <i class="fas fa-arrow-right"></i
                  ></a>
                </div>
                <div class="interactive-demo-area">
                  <h5>Interactive Element</h5>
                  <div class="demo-placeholder">
                    [Before/After UI Comparison Slider]
                  </div>
                </div>
              </div>
              <div class="content-section tech-view">
                <h4>Methodologies & Tooling</h4>
                <p>
                  Applying established design thinking principles and utilizing
                  industry-standard tools for effective UI/UX creation.
                </p>
                <ul>
                  <li>
                    Design Methodologies: Design Thinking, User-Centered Design,
                    Lean UX, Agile UX
                  </li>
                  <li>
                    Research Methods: User Interviews, Surveys, Usability
                    Testing, Card Sorting, Analytics Review
                  </li>
                  <li>Design Tools: Figma, Sketch, Adobe XD</li>
                  <li>Prototyping Tools: Figma, InVision, Axure RP</li>
                  <li>Design System Management: Storybook, Zeroheight</li>
                  <li>Accessibility Testing: Axe, WAVE, manual testing</li>
                </ul>
              </div>
            </div>
            <button class="tech-toggle-btn"></button>
          </div>
        </div>
      </div>
      <!-- /professional-service-grid -->
    </section>

    <!-- How We Work Section -->
    <section id="how-we-work" class="section">
      <div
        class="process-intro"
        data-aos="fade-right"
        data-aos-duration="1200"
        data-aos-delay="100"
        data-aos-easing="ease-out-cubic"
      >
        <h2 class="section-title">
          Our Process: Collaborative & Results-Driven
        </h2>
        <p class="section-content">
          We believe in a transparent and collaborative approach, ensuring
          alignment with your goals from discovery through deployment and
          beyond. Our methodology emphasizes quality, efficiency, and continuous
          communication.
        </p>
      </div>
      <div class="process-steps-container">
        <div class="process-steps">
          <div
            class="step"
            data-aos="fade-left"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-easing="ease-out-back"
          >
            <h3 class="step-title">1. Discovery & Strategy</h3>
            <p>
              Deep dive into your objectives, challenges, and requirements.
              Define scope, technical strategy, and success metrics.
            </p>
          </div>
          <div
            class="step"
            data-aos="fade-left"
            data-aos-duration="1000"
            data-aos-delay="350"
            data-aos-easing="ease-out-back"
          >
            <h3 class="step-title">2. Design & Prototyping</h3>
            <p>
              Translate strategy into intuitive UI/UX designs and interactive
              prototypes. Iterate based on feedback and testing.
            </p>
          </div>
          <div
            class="step"
            data-aos="fade-left"
            data-aos-duration="1000"
            data-aos-delay="500"
            data-aos-easing="ease-out-back"
          >
            <h3 class="step-title">3. Agile Development & QA</h3>
            <p>
              Build the solution in iterative sprints with continuous testing,
              ensuring quality, flexibility, and regular progress visibility.
            </p>
          </div>
          <div
            class="step"
            data-aos="fade-left"
            data-aos-duration="1000"
            data-aos-delay="650"
            data-aos-easing="ease-out-back"
          >
            <h3 class="step-title">4. Deployment & Support</h3>
            <p>
              Manage deployment to production environments. Provide ongoing
              support, maintenance, and optimization as needed.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
      <div class="projects-content">
        <h2 class="section-title" data-aos="fade-down" data-aos-duration="1000">
          Impactful Solutions Delivered
        </h2>
        <p
          class="section-subtitle"
          data-aos="fade-up"
          data-aos-delay="100"
          data-aos-duration="1000"
        >
          Explore examples of how we've partnered with organizations to leverage
          technology for significant business outcomes.
        </p>
        <div class="project-cards">
          <div
            class="project-card"
            data-aos="zoom-in-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <h3 class="project-title">SaaS Founders Hub Platform</h3>
            <p>
              Developed a resource and mentorship platform connecting student
              entrepreneurs with tools and guidance for SaaS venture creation.
            </p>
          </div>
          <div
            class="project-card"
            data-aos="zoom-in-up"
            data-aos-duration="800"
            data-aos-delay="350"
          >
            <h3 class="project-title">Lumo E-Learning Ecosystem</h3>
            <p>
              Engineered an interactive e-learning platform with personalized
              learning paths, collaborative features, and robust analytics.
            </p>
          </div>
          <div
            class="project-card"
            data-aos="zoom-in-up"
            data-aos-duration="800"
            data-aos-delay="500"
          >
            <h3 class="project-title">OneClick Pay Gateway</h3>
            <p>
              Designed and built a modern, secure payment gateway focused on
              developer experience and seamless integration capabilities.
            </p>
          </div>
        </div>
        <div class="cta-container" data-aos="fade-up" data-aos-delay="600">
          <!-- Link to your projects page -->
          <a href="project.html" class="cta-button">View More Projects</a>
        </div>
      </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="section">
      <div class="why-us-content">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">
          The Ascii Advantage
        </h2>
        <p
          class="section-subtitle"
          data-aos="fade-up"
          data-aos-delay="100"
          data-aos-duration="1000"
        >
          Partnering with Ascii means gaining more than just technical
          execution; it means gaining a dedicated ally invested in your success.
        </p>
        <div class="flex-container">
          <div
            class="feature"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <div class="icon">
              <!-- People Icon SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path
                  d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z"
                />
              </svg>
            </div>
            <h3>Deep Expertise & Partnership</h3>
            <p>
              Our experienced team integrates seamlessly with yours, providing
              strategic guidance and technical excellence throughout the project
              lifecycle.
            </p>
          </div>
          <div
            class="feature"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="350"
          >
            <div class="icon">
              <!-- Checkmark/Quality Icon SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"
                />
              </svg>
            </div>
            <h3>Tailored, High-Quality Solutions</h3>
            <p>
              We avoid generic approaches, meticulously crafting solutions
              optimized for your specific challenges and built for long-term
              reliability and performance.
            </p>
          </div>
          <div
            class="feature"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="500"
          >
            <div class="icon">
              <!-- Target/ROI Icon SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M448 256A192 192 0 1 0 64 256a192 192 0 1 0 384 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 80a80 80 0 1 0 0-160 80 80 0 1 0 0 160zm0-224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zM224 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"
                />
              </svg>
            </div>
            <h3>Measurable Impact & ROI Focus</h3>
            <p>
              Our success is measured by yours. We focus on delivering tangible
              results that demonstrably improve efficiency, drive growth, and
              yield a strong return on investment.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
      <div class="footer-content">
        <div class="footer-logo" data-aos="fade-up" data-aos-delay="100">
          <h3 class="footer-ascii">Ascii Technologies</h3>
          <p>
            Strategic Technology Partners.<br />Engineering Digital Success.
          </p>
        </div>
        <div
          class="footer-links-section"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <h3 class="footer-heading">Navigation</h3>
          <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Ascii</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="project.html">Case Studies</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
        <div
          class="footer-connect-section"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <h3 class="footer-heading">Connect</h3>
          <div class="social-links">
            <!-- Add your actual social media links -->
            <a
              href="https://www.linkedin.com/company/asciihub"
              target="_blank"
              rel="noopener noreferrer"
              class="social-link"
              title="LinkedIn"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a
              href="https://x.com/AsciiHUB"
              target="_blank"
              rel="noopener noreferrer"
              class="social-link"
              title="Twitter"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              href="https://github.com/ENDragnee"
              target="_blank"
              rel="noopener noreferrer"
              class="social-link"
              title="GitHub"
              ><i class="fab fa-github"></i
            ></a>
            <a
              href="#"
              target="_blank"
              rel="noopener noreferrer"
              class="social-link"
              title="Medium"
              ><i class="fab fa-medium-m"></i
            ></a>
          </div>
        </div>
        <div
          class="footer-contact-section"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <h3 class="footer-heading">Get In Touch</h3>
          <p>
            <i class="fas fa-envelope"></i>
            <a href="mailto:info@ascii-technologies.com"
              >info@ascii-technologies.com</a
            >
          </p>
          <p>
            <i class="fas fa-phone"></i>
            <a href="tel:+251915949551">+251 915 949 551</a>
          </p>
          <!-- Optional: Address
                 <p><i class="fas fa-map-marker-alt"></i> <span>Add Your Address Here</span></p>
                 -->
        </div>
      </div>
      <div class="footer-copyright">
        © <span id="current-year"></span> Ascii Technologies LLC. All rights
        reserved.
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.9.3/tsparticles.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Main Application Script -->
    <script>
      // --- Helper Function: Detect Touch Devices ---
      function isTouchDevice() {
        return (
          "ontouchstart" in window ||
          navigator.maxTouchPoints > 0 ||
          navigator.msMaxTouchPoints > 0 ||
          window.matchMedia("(pointer: coarse)").matches
        );
      }

      // --- Run Code After DOM is Fully Loaded ---
      document.addEventListener("DOMContentLoaded", () => {
        // --- Cache Frequently Used Elements ---
        const cursor = document.querySelector(".cursor");
        const grid = document.querySelector(".background-grid");
        const professionalGrid = document.querySelector(
          ".professional-service-grid",
        );
        const sidebarNavLinks = document.querySelectorAll(".sidebar-nav a");
        const sections = document.querySelectorAll("section[id]");
        const footer = document.getElementById("contact");
        const currentYearElement = document.getElementById("current-year");
        const particlesElement = document.getElementById("particles-js");

        // Elements for cursor hover effects (cache this if performance is critical, otherwise query as needed)
        const getInteractiveElements = () =>
          document.querySelectorAll(
            "a, button, .project-card, .feature, .step, .about-core-image, .social-link, .service-module:not(.is-expanded)",
          );

        // --- Device-Specific Setup ---
        const touchDevice = isTouchDevice();
        if (touchDevice) {
          if (cursor) cursor.style.display = "none";
        } else {
          // --- Non-Touch Device Cursor Logic ---
          if (cursor) cursor.style.display = "block";

          document.addEventListener(
            "mousemove",
            (e) => {
              window.requestAnimationFrame(() => {
                if (cursor) {
                  cursor.style.left = `${e.clientX}px`;
                  cursor.style.top = `${e.clientY}px`;
                }
                if (grid) {
                  // Subtle parallax effect
                  grid.style.backgroundPosition = `${e.clientX / -30}px ${e.clientY / -30}px`;
                }
              });
            },
            { passive: true },
          );

          // Add hover effects (consider using event delegation on body for many elements)
          getInteractiveElements().forEach((el) => {
            el.addEventListener("mouseenter", () =>
              cursor?.classList.add("hover"),
            );
            el.addEventListener("mouseleave", () =>
              cursor?.classList.remove("hover"),
            );
          });
        }

        // --- Professional Services Card Interaction ---
        if (professionalGrid) {
          const serviceModules =
            professionalGrid.querySelectorAll(".service-module");

          // Function to close all expanded panels except one
          const closeAllExpandedPanels = (exceptModule = null) => {
            serviceModules.forEach((mod) => {
              if (
                mod !== exceptModule &&
                mod.classList.contains("is-expanded")
              ) {
                mod.classList.remove("is-expanded", "show-tech");
                mod.setAttribute("aria-expanded", "false");
                const panel = mod.querySelector(".expanded-panel");
                if (panel) panel.scrollTop = 0; // Reset scroll
                const cardFace = mod.querySelector(".card-face");
                if (cardFace) cardFace.style.pointerEvents = "auto";
              }
            });
          };

          // Attach listeners to each service module
          serviceModules.forEach((module) => {
            const cardFace = module.querySelector(".card-face");
            const closeButton = module.querySelector(".close-panel-btn");
            const techToggleButton = module.querySelector(".tech-toggle-btn");
            const panel = module.querySelector(".expanded-panel");

            // Function to expand the card
            const expandCard = () => {
              if (module.classList.contains("is-expanded")) return;
              closeAllExpandedPanels(module);
              module.classList.add("is-expanded");
              module.setAttribute("aria-expanded", "true");
              if (cardFace) cardFace.style.pointerEvents = "none";
              // Focus the close button for accessibility
              setTimeout(() => closeButton?.focus(), 450); // Delay matches CSS transition
            };

            // Function to collapse the card
            const collapseCard = () => {
              if (!module.classList.contains("is-expanded")) return;
              module.classList.remove("is-expanded", "show-tech");
              module.setAttribute("aria-expanded", "false");
              if (panel) panel.scrollTop = 0;
              if (cardFace) cardFace.style.pointerEvents = "auto";
              module.focus(); // Return focus to the module
            };

            // Event Listeners for Card Face (Click)
            if (cardFace) {
              cardFace.addEventListener("click", expandCard);
            }

            // Event Listeners for Module (Keyboard)
            module.addEventListener("keydown", (e) => {
              if (
                !module.classList.contains("is-expanded") &&
                (e.key === "Enter" || e.key === " ")
              ) {
                const isInteractiveChild =
                  e.target.matches("a, button, input, select, textarea") &&
                  e.target !== cardFace;
                if (!isInteractiveChild) {
                  e.preventDefault();
                  expandCard();
                }
              }
              if (
                module.classList.contains("is-expanded") &&
                e.key === "Escape"
              ) {
                e.preventDefault();
                collapseCard();
              }
            });

            // Event Listeners for Close Button (Click + Keyboard)
            if (closeButton) {
              closeButton.addEventListener("click", (e) => {
                e.stopPropagation();
                collapseCard();
              });
              closeButton.addEventListener("keydown", (e) => {
                if (e.key === "Enter" || e.key === " ") {
                  e.preventDefault();
                  collapseCard();
                }
              });
            }

            // Event Listeners for Tech Toggle Button (Click + Keyboard)
            if (techToggleButton) {
              techToggleButton.addEventListener("click", (e) => {
                e.stopPropagation();
                module.classList.toggle("show-tech");
              });
              techToggleButton.addEventListener("keydown", (e) => {
                if (e.key === "Enter" || e.key === " ") {
                  e.preventDefault();
                  module.classList.toggle("show-tech");
                }
              });
            }
          });

          // Close panel if clicking outside any module
          document.addEventListener("click", (e) => {
            const clickedInsideModule = Array.from(serviceModules).some(
              (module) => module.contains(e.target),
            );
            if (!clickedInsideModule) {
              // Check if the click was also outside the grid container itself (optional)
              // if (!professionalGrid.contains(e.target)) {
              closeAllExpandedPanels();
              // }
            }
          });
        } // End if(professionalGrid)

        // --- AOS (Animate on Scroll) Initialization ---
        if (typeof AOS !== "undefined") {
          AOS.init({
            easing: "ease-out-cubic",
            duration: 800,
            once: true,
            mirror: false,
            disable: window.innerWidth < 768 || touchDevice, // Disable on small screens and touch devices
            offset: 100,
            debounceDelay: 50,
            throttleDelay: 99,
          });
        } else {
          console.warn("AOS library not loaded.");
        }

        // --- Sidebar Navigation Active State Logic ---
        if (sections.length > 0 && sidebarNavLinks.length > 0) {
          let currentActiveSectionId = null; // Track the currently active section

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
              // Fallback checks if nothing is actively intersecting based on rootMargin
              if (
                footer &&
                footer.getBoundingClientRect().top < window.innerHeight * 0.7
              ) {
                newActiveSectionId = "contact"; // Prioritize footer if near bottom
              } else if (window.scrollY < window.innerHeight * 0.5) {
                newActiveSectionId = "home"; // Default to home if near top
              }
            }

            // Only update if the active section has changed
            if (
              newActiveSectionId &&
              newActiveSectionId !== currentActiveSectionId
            ) {
              currentActiveSectionId = newActiveSectionId;
              sidebarNavLinks.forEach((link) => {
                link.classList.remove("active");
                // Check if the link's href matches the active section ID
                if (
                  link.getAttribute("href") === `#${currentActiveSectionId}`
                ) {
                  link.classList.add("active");
                }
              });
            } else if (!newActiveSectionId && currentActiveSectionId) {
              // If scrolled out of all tracked areas, potentially deactivate all
              // Or default to 'home' if near top
              if (window.scrollY < window.innerHeight * 0.5) {
                currentActiveSectionId = "home";
                document
                  .querySelector('.sidebar-nav a[href="#home"]')
                  ?.classList.add("active");
              } else {
                // Maybe clear all if scrolled far past footer or in an unknown state
                // sidebarNavLinks.forEach(link => link.classList.remove("active"));
                // currentActiveSectionId = null;
              }
            }
          };

          const observerOptions = {
            rootMargin: "0px 0px -50% 0px", // Section needs to pass midpoint
            threshold: 0, // Trigger immediately on edge crossing
          };
          const observer = new IntersectionObserver(
            observerCallback,
            observerOptions,
          );

          sections.forEach((section) => observer.observe(section));
          if (footer) observer.observe(footer);

          // Function to set the active link based on URL hash or default
          const setActiveInitialLink = () => {
            const hash = window.location.hash;
            let targetId = hash ? hash.substring(1) : "home"; // Default to 'home'
            currentActiveSectionId = targetId; // Set initial tracked ID

            sidebarNavLinks.forEach((link) => {
              link.classList.remove("active");
              if (link.getAttribute("href") === `#${targetId}`) {
                link.classList.add("active");
              }
            });
            // Ensure home is active if hash is invalid or empty
            if (!document.querySelector(".sidebar-nav a.active")) {
              document
                .querySelector('.sidebar-nav a[href="#home"]')
                ?.classList.add("active");
              currentActiveSectionId = "home";
            }
          };

          // Set initial state and listen for hash changes
          setTimeout(setActiveInitialLink, 150); // Delay slightly for accurate scroll pos
          window.addEventListener("hashchange", setActiveInitialLink);
        } // End if sections/navLinks exist

        // --- tsParticles Initialization ---
        if (typeof tsParticles !== "undefined" && particlesElement) {
          tsParticles
            .load("particles-js", {
              fpsLimit: 60,
              interactivity: {
                events: {
                  // UPDATED: Changed hover mode to "grab"
                  onHover: { enable: !touchDevice, mode: "repulse" },
                  onClick: { enable: true, mode: "push" },
                  resize: true,
                },
                modes: {
                  // REMOVED: Repulse settings (or comment out)
                  // repulse: { distance: 90, duration: 0.4, speed: 0.5 },
                  push: { quantity: 3 }, // Keep push on click
                  // ADDED: Grab settings
                  repulse: {
                    distance: 65, // How close cursor needs to be to "grab"

                    links: {
                      opacity: 0.6, // Opacity of the lines drawn to cursor
                      color: "var(--primary-color)", // Color of the lines drawn to cursor
                    },
                  },
                },
              },
              particles: {
                color: { value: "#ffffff" },
                links: {
                  // Keep existing links between particles
                  color: "#ffffff",
                  distance: 160,
                  enable: true,
                  opacity: 0.15, // You might want to decrease this if grab lines are prominent
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
                }, // Slightly slower base speed
                number: {
                  density: { enable: true, area: 800 }, // Make density area smaller to pack more in
                  // UPDATED: Increased particle value significantly
                  value: 150, // More particles (adjust number based on desired density & performance)
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
            })
            .catch((error) =>
              console.error("Error loading tsParticles:", error),
            );
        } else if (!particlesElement) {
          console.warn("Element with ID 'particles-js' not found.");
        } else {
          console.warn("tsParticles library not loaded.");
        }

        // --- Update Copyright Year ---
        if (currentYearElement) {
          currentYearElement.textContent = new Date().getFullYear();
        }
      }); // --- End DOMContentLoaded ---
    </script>
  </body>
</html>
