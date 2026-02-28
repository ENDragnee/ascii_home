@extends('layouts.app')

@section('title', 'Ascii Technologies - Project Showcase')

@push('styles')
<style>
    /* =========================================
       Root & Behavioral Styles (Matching Old UI)
       ========================================= */
    :root {
        --bg-dark: #0a0a0a;
        --text-silver: #c0c0c0;
    }

    body {
        background-color: var(--bg-dark);
        color: var(--text-silver);
        overflow: hidden; /* Prevent double scrollbars */
    }

    /* Fullscreen Snap Container */
    .projects-container {
        scroll-snap-type: y mandatory;
        overflow-y: auto;
        height: 100vh;
        width: 100vw;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Hide scrollbar for clean look */
    }

    .projects-container::-webkit-scrollbar {
        display: none;
    }

    /* Individual Fullscreen Section */
    .project-section {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        scroll-snap-align: start;
        position: relative;
        /* Parallax Effect from Old Template */
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Dark Overlay from Old Template */
    .project-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6); /* Slightly darker for better text contrast */
        z-index: 1;
    }

    /* Content Styling */
    .project-content {
        max-width: 800px;
        text-align: center;
        z-index: 2;
        position: relative;
        padding: 0 20px;
        /* Animation Entry */
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    .project-section.active .project-content {
        opacity: 1;
        transform: translateY(0);
    }

    .project-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: clamp(2rem, 7vw, 4.5rem);
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .project-description {
        color: rgba(255, 255, 255, 0.8);
        font-size: clamp(1rem, 2vw, 1.25rem);
        margin-bottom: 2.5rem;
        line-height: 1.6;
    }

    /* Button Style (Old template border style + Modern glow) */
    .project-link {
        text-decoration: none;
        padding: 12px 35px;
        border-radius: 5px;
        transition: all 0.3s ease;
        display: inline-block;
        font-size: 1.1rem;
        font-weight: 600;
        border: 2px solid;
        background: transparent;
        text-transform: uppercase;
    }

    .project-link:hover {
        transform: scale(1.05);
        color: #000 !important;
    }

    /* Sidebar - Matching Old Template position but new dots */
    .sidebar-nav {
        position: fixed;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 20px;
        z-index: 100;
    }

    .sidebar-nav a {
        position: relative;
        width: 12px;
        height: 12px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .sidebar-nav a.active {
        transform: scale(1.5);
    }

    .sidebar-nav a::after {
        content: attr(data-label);
        position: absolute;
        left: 30px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 4px 12px;
        font-size: 11px;
        border-radius: 4px;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .sidebar-nav a:hover::after {
        opacity: 1;
    }

    @media (max-width: 768px) {
        .project-section {
            background-attachment: scroll; /* Performance fix for mobile */
        }
        .sidebar-nav {
            display: none; /* Old behavior: sidebar often hidden or changed on mobile */
        }
    }
</style>
@endpush

@section('content')

{{-- Left Sidebar matching old behavior --}}
<nav class="sidebar-nav">
    <a href="{{ url('/') }}" data-label="Back Home"></a>
    @foreach($portfolios as $project)
        <a href="#project-{{ $project->id }}"
           data-label="{{ $project->title }}"
           class="nav-dot"
           id="dot-project-{{ $project->id }}"></a>
    @endforeach
</nav>

<div class="projects-container">
    @forelse($portfolios as $project)
        @php
            // Blob Storage Logic: Prioritize Thumbnail, Fallback to First image
            $mediaItem = $project->media->sortByDesc('is_thumbnail')->first();
            $bgUrl = $mediaItem ? Storage::url($mediaItem->url) : asset('images/default-bg.jpg');

            // Dynamic Accent Color
            $accent = $project->color ?? '#00ffd4';
        @endphp

        <section class="project-section"
                 id="project-{{ $project->id }}"
                 style="background-image: url('{{ $bgUrl }}');">

            <div class="project-content">
                <h2 class="project-title" style="color: {{ $accent }};">
                    {{ $project->title }}
                </h2>

                <p class="project-description">
                    {{ $project->description }}
                </p>

                @if($project->link)
                    <a href="{{ $project->link }}"
                       target="_blank"
                       class="project-link"
                       style="border-color: {{ $accent }}; color: {{ $accent }};"
                       onmouseover="this.style.backgroundColor='{{ $accent }}';"
                       onmouseout="this.style.backgroundColor='transparent'; this.style.color='{{ $accent }}';">
                       Explore Project
                    </a>
                @else
                    <span style="color: rgba(255,255,255,0.4); text-transform: uppercase; font-size: 0.8rem; letter-spacing: 2px;">
                        <i class="fas fa-lock"></i> Private Case Study
                    </span>
                @endif
            </div>

        </section>

    @empty
        <section class="project-section">
            <div class="project-content active">
                <h2 class="project-title" style="color: #666;">Coming Soon</h2>
                <p class="project-description">We are currently updating our portfolio with new success stories.</p>
                <a href="{{ url('/') }}" class="project-link" style="border-color: #fff; color: #fff;">Return Home</a>
            </div>
        </section>
    @endforelse
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll('.project-section');
        const dots = document.querySelectorAll('.nav-dot');

        const observerOptions = {
            threshold: 0.5 // Trigger when half of the section is visible
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add active class to section for animations
                    entry.target.classList.add('active');

                    // Update Sidebar dots
                    dots.forEach(dot => {
                        dot.classList.remove('active');
                        // Set active dot color dynamically
                        dot.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
                    });

                    const activeDot = document.getElementById('dot-' + entry.target.id);
                    if (activeDot) {
                        activeDot.classList.add('active');
                        // Match dot color to project accent color
                        const projectColor = entry.target.querySelector('.project-title').style.color;
                        activeDot.style.backgroundColor = projectColor;

                        // Update Cursor color if it exists in layout
                        const cursor = document.querySelector('.cursor');
                        if(cursor) cursor.style.borderColor = projectColor;
                    }
                }
            });
        }, observerOptions);

        sections.forEach(section => observer.observe(section));
    });
</script>
@endpush
