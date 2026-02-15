@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero" style="background: url('{{ asset('images/Abstract.jpeg') }}') no-repeat center center; background-size: cover;">
      <div id="particles-js"></div>
      <div class="hero-content" data-aos="fade-in" data-aos-duration="1500">
        <h1 class="hero-title">
          <span data-aos="fade-up" data-aos-delay="200">Ascii Technologies</span>
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="600">
          We partner with businesses to build high-performance custom software, implement intelligent automation, and leverage scalable cloud infrastructure for measurable results.
        </p>
        <a href="#services" class="cta-button" data-aos="fade-up" data-aos-delay="800">
          Explore Our Solutions
        </a>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about creative-about">
      <div class="about-content creative-layout">
        <div class="about-intro" data-aos="fade-down" data-aos-duration="1200">
          <h2 class="about-title">Your Strategic Technology Partner</h2>
          <p class="about-tagline" data-aos="fade-up" data-aos-delay="200">
            We translate complex business challenges into elegant, effective, and scalable digital solutions.
          </p>
        </div>
        <div class="about-core-idea" data-aos="zoom-in" data-aos-delay="400">
          <img src="{{ asset('images/Abstract.jpeg') }}" alt="Strategic Innovation" class="about-core-image" />
        </div>
        <div class="about-philosophy" data-aos="fade-left" data-aos-delay="600">
          <h3>Our Approach</h3>
          <p>We believe technology should be an enabler, not an obstacle. Our foundation rests on robust engineering, intuitive design, and true partnership.</p>
          <h4>Core Principles:</h4>
          <ul class="philosophy-list">
            <li><i class="fas fa-lightbulb icon-spark"></i> <span>Drive innovation through <span class="highlight">insightful strategy</span>.</span></li>
            <li><i class="fas fa-puzzle-piece icon-connect"></i> <span>Ensure seamless integration via <span class="highlight">expert engineering</span>.</span></li>
            <li><i class="fas fa-rocket icon-launch"></i> <span>Accelerate growth with <span class="highlight">scalable solutions</span>.</span></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Professional Services Section -->
    <section id="services" class="professional-services">
      <h2 class="section-title" data-aos="fade-down">Core Service Offerings</h2>
      <p class="section-subtitle">Leverage our expertise to overcome challenges and unlock new opportunities for growth.</p>

      <div class="professional-service-grid">

        <!-- 1. Custom Software -->
        <x-service-card id="custom-software" icon="fa-puzzle-piece" title="Custom Software Development" valueProp="Architect bespoke digital platforms tailored to your unique objectives." delay="300">
            <div class="content-section business-view">
                <h4>Challenge: Generic software limits potential.</h4>
                <p class="problem-statement">Off-the-shelf solutions often force inefficient workarounds and lack integration capabilities.</p>
                <ul class="solution-list">
                    <li><i class="fas fa-check"></i> Seamless integration with existing APIs.</li>
                    <li><i class="fas fa-check"></i> Workflow automation optimized for your processes.</li>
                </ul>
                <div class="case-study-snippet">
                    <h5>Example: Logistics</h5>
                    <p>"Custom TMS reduced route planning time by 45%."</p>
                </div>
            </div>
            <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <ul>
                    <li>Frontend: React, Next.js, Angular</li>
                    <li>Backend: Node.js, Python, Java</li>
                    <li>DB: PostgreSQL, Redis</li>
                </ul>
            </div>
        </x-service-card>

        <!-- 2. Web & Mobile -->
        <x-service-card id="web-mobile" icon="fa-laptop-code" title="Web & Mobile App Development" valueProp="Create engaging platforms that drive user adoption and business value." delay="400">
            <div class="content-section business-view">
                <h4>Challenge: Inadequate digital presence.</h4>
                <p class="problem-statement">Outdated platforms lead to lost opportunities and customer frustration.</p>
                <ul class="solution-list">
                    <li><i class="fas fa-check"></i> Responsive PWAs and SPAs.</li>
                    <li><i class="fas fa-check"></i> Native iOS & Android Apps.</li>
                </ul>
            </div>
            <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <ul>
                    <li>Mobile: Swift, Kotlin, React Native</li>
                    <li>Web: Vue, Svelte, Next.js</li>
                </ul>
            </div>
        </x-service-card>

        <!-- 3. AI & Automation -->
        <x-service-card id="ai-automation" icon="fa-robot" title="AI & Automation Solutions" valueProp="Leverage ML to automate processes and enhance decision-making." delay="500">
            <div class="content-section business-view">
                <h4>Challenge: Manual processes drain resources.</h4>
                <p class="problem-statement">Repetitive tasks consume time and increase operational costs.</p>
                <ul class="solution-list">
                    <li><i class="fas fa-check"></i> RPA for rule-based tasks.</li>
                    <li><i class="fas fa-check"></i> NLP for chatbots & text analysis.</li>
                </ul>
            </div>
            <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <ul>
                    <li>AI: TensorFlow, PyTorch</li>
                    <li>NLP: Hugging Face, GPT Models</li>
                </ul>
            </div>
        </x-service-card>

        <!-- 4. Cloud & DevOps -->
        <x-service-card id="cloud-devops" icon="fa-cloud" title="Cloud & DevOps" valueProp="Optimize scalability and security through expert cloud strategy." delay="600">
            <div class="content-section business-view">
                <h4>Challenge: Legacy infrastructure limits agility.</h4>
                <p class="problem-statement">On-premise hardware struggles with fluctuating demand.</p>
                <ul class="solution-list">
                    <li><i class="fas fa-check"></i> AWS/Azure Cloud Migration.</li>
                    <li><i class="fas fa-check"></i> Infrastructure as Code (IaC).</li>
                </ul>
            </div>
            <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <ul>
                    <li>Cloud: AWS, Azure, GCP</li>
                    <li>DevOps: Docker, Kubernetes, Terraform</li>
                </ul>
            </div>
        </x-service-card>

        <!-- 5. Digital Transformation -->
        <x-service-card id="digital-trans" icon="fa-sync-alt" title="Digital Transformation" valueProp="Modernize legacy systems to enhance agility and unlock data value." delay="700">
            <div class="content-section business-view">
                <h4>Challenge: Legacy systems impede innovation.</h4>
                <p class="problem-statement">Monolithic architectures hinder the ability to adapt quickly.</p>
                <ul class="solution-list">
                    <li><i class="fas fa-check"></i> Monolith to Microservices.</li>
                    <li><i class="fas fa-check"></i> Data migration and integration.</li>
                </ul>
            </div>
            <div class="content-section tech-view">
                <h4>Technical Implementation</h4>
                <ul>
                    <li>Patterns: Strangler Fig, Event Sourcing</li>
                    <li>Messaging: Kafka, RabbitMQ</li>
                </ul>
            </div>
        </x-service-card>

        <!-- 6. UI/UX Design -->
        <x-service-card id="ui-ux" icon="fa-bezier-curve" title="UI/UX Design & Strategy" valueProp="Craft intuitive interfaces that drive satisfaction and conversion." delay="800">
            <div class="content-section business-view">
                <h4>Challenge: Poor usability hinders adoption.</h4>
                <p class="problem-statement">Confusing interfaces lead to low engagement and high support costs.</p>
                <ul class="solution-list">
                    <li><i class="fas fa-check"></i> User research & Persona mapping.</li>
                    <li><i class="fas fa-check"></i> WCAG Accessibility compliance.</li>
                </ul>
            </div>
            <div class="content-section tech-view">
                <h4>Tools & Methodologies</h4>
                <ul>
                    <li>Design: Figma, Adobe XD</li>
                    <li>Research: Usability Testing, A/B Testing</li>
                </ul>
            </div>
        </x-service-card>

      </div>
    </section>

    <!-- How We Work Section -->
    <section id="how-we-work" class="section">
      <div class="process-intro" data-aos="fade-right">
        <h2 class="section-title">Our Process: Collaborative & Results-Driven</h2>
        <p>We ensure alignment with your goals from discovery through deployment.</p>
      </div>
      <div class="process-steps">
          <div class="step" data-aos="fade-left" data-aos-delay="200">
            <h3>1. Discovery & Strategy</h3>
            <p>Deep dive into objectives and technical strategy definition.</p>
          </div>
          <div class="step" data-aos="fade-left" data-aos-delay="400">
            <h3>2. Design & Prototyping</h3>
            <p>Interactive prototypes and iterative UI/UX design.</p>
          </div>
          <div class="step" data-aos="fade-left" data-aos-delay="600">
            <h3>3. Agile Development</h3>
            <p>Iterative sprints with continuous testing and quality assurance.</p>
          </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <h2 class="section-title">Impactful Solutions Delivered</h2>
        <div class="project-cards">
            <div class="project-card" data-aos="zoom-in-up">
                <h3>SaaS Founders Hub</h3>
                <p>Platform connecting student entrepreneurs with venture tools.</p>
            </div>
            <div class="project-card" data-aos="zoom-in-up" data-aos-delay="200">
                <h3>Lumo E-Learning</h3>
                <p>Interactive ecosystem with personalized learning paths.</p>
            </div>
            <div class="project-card" data-aos="zoom-in-up" data-aos-delay="400">
                <h3>OneClick Pay Gateway</h3>
                <p>Modern, secure payment gateway focused on DX.</p>
            </div>
        </div>
        <div class="cta-container">
            <a href="{{ url('projects') }}" class="cta-button">View More Projects</a>
        </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="section">
        <h2 class="section-title">The Ascii Advantage</h2>
        <div class="flex-container">
            <div class="feature" data-aos="fade-up">
                <h3>Deep Expertise</h3>
                <p>Strategic guidance and technical excellence integrated with your team.</p>
            </div>
            <div class="feature" data-aos="fade-up" data-aos-delay="200">
                <h3>Tailored Quality</h3>
                <p>Meticulously crafting solutions built for long-term reliability.</p>
            </div>
            <div class="feature" data-aos="fade-up" data-aos-delay="400">
                <h3>ROI Focus</h3>
                <p>Delivering tangible results that demonstrably improve efficiency.</p>
            </div>
        </div>
    </section>
@endsection
