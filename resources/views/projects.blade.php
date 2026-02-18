@extends('layouts.app')

@section('title', 'Ascii Technologies - Project Showcase')

@push('styles')
<style>
    .projects-container {
        height: 100vh;
        width: 100%;
        overflow-y: auto;
        scroll-snap-type: y mandatory;
        scroll-behavior: smooth;
        /* Hide scrollbar for cleaner look */
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE/Edge */
    }

    .projects-container::-webkit-scrollbar {
        display: none; /* Chrome/Safari */
    }

    /* Individual Project Section */
    .project-section {
        height: 100vh;
        width: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        scroll-snap-align: start;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* Fix background for parallax feel */
        background-attachment: fixed;
        overflow: hidden;
    }

    /* Overlay to ensure text readability over any image */
    .project-section::before {
        content: "";
        position: absolute;
        inset: 0;
        /* Gradient from top (transparent) to bottom (darker) */
        background: linear-gradient(
            to bottom,
            rgba(10, 10, 26, 0.3) 0%,
            rgba(10, 10, 26, 0.6) 50%,
            rgba(10, 10, 26, 0.95) 100%
        );
        z-index: 1;
        pointer-events: none;
    }

    /* Glassmorphism Content Box */
    .project-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 3rem;
        text-align: center;

        /* The Glass Effect */
        background: rgba(16, 16, 30, 0.65);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);

        /* Animation Entry */
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    /* Animate content when in view (handled by JS intersection observer below) */
    .project-section.in-view .project-content {
        opacity: 1;
        transform: translateY(0);
    }

    /* Typography */
    .project-title {
        font-family: 'Space Grotesk', sans-serif; /* Assuming you have this font */
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: -1px;
        /* Dynamic color applied inline via Blade */
    }

    .project-description {
        font-size: clamp(1rem, 2vw, 1.25rem);
        color: #e0e0e0;
        line-height: 1.7;
        margin-bottom: 2.5rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Action Button */
    .project-link-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 45px;
        font-size: 1.1rem;
        font-weight: 700;
        text-decoration: none;
        border-radius: 100px;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 2px solid transparent;
        background: transparent;
    }

    .project-link-btn:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        /* Background and text color swap handled inline */
    }

    .project-link-btn i {
        transition: transform 0.3s ease;
    }

    .project-link-btn:hover i {
        transform: translateX(4px) scale(1.1);
    }

    /* Internal/Private Project Badge */
    .internal-badge {
        display: inline-block;
        padding: 12px 30px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.5);
        border-radius: 50px;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: not-allowed;
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .projects-container {
            scroll-snap-type: y proximity; /* Less strict on mobile */
        }

        .project-section {
            background-attachment: scroll; /* Fix performance on mobile */
            padding: 1rem;
        }

        .project-content {
            padding: 2rem 1.5rem;
            border-radius: 16px;
            background: rgba(16, 16, 30, 0.85); /* More opaque on mobile */
        }

        .project-title {
            margin-bottom: 1rem;
        }
    }
</style>
@endpush

@section('content')

<div class="projects-container">

    {{-- Loop through the portfolios passed from the Controller --}}
    @forelse($portfolios as $index => $project)

        @php
            // 1. Determine Background Image
            // Logic: Check for 'is_thumbnail' first. If not found, use the first media item.
            // If media is empty, use a placeholder.

            $mediaItem = $project->media->sortByDesc('is_thumbnail')->first();

            if ($mediaItem) {
                // Determine if we are on S3 or Local Public
                $bgUrl = Storage::url($mediaItem->url);
            } else {
                // Fallback image if no media exists
                $bgUrl = asset('images/default-bg.jpg'); // Ensure you have a default image
            }

            // 2. Determine Accent Color (Default to Teal if not set)
            $accentColor = $project->color ?? '#00ffd4';

            // 3. Convert Hex to RGB for rgba usage
            list($r, $g, $b) = sscanf($accentColor, "#%02x%02x%02x");
        @endphp

        <section class="project-section"
                 id="project-{{ $project->id }}"
                 style="background-image: url('{{ $bgUrl }}');">

            <div class="project-content">
                {{-- Dynamic Title --}}
                <h2 class="project-title" style="color: {{ $accentColor }}; text-shadow: 0 0 30px rgba({{ $r }}, {{ $g }}, {{ $b }}, 0.3);">
                    {{ $project->title }}
                </h2>

                {{-- Dynamic Description --}}
                <p class="project-description">
                    {{ $project->description }}
                </p>

                {{-- Dynamic Link Logic --}}
                @if($project->link)
                    <a href="{{ $project->link }}"
                       target="_blank"
                       class="project-link-btn"
                       style="border-color: {{ $accentColor }}; color: {{ $accentColor }};"
                       onmouseover="this.style.backgroundColor='{{ $accentColor }}'; this.style.color='#000';"
                       onmouseout="this.style.backgroundColor='transparent'; this.style.color='{{ $accentColor }}';">

                       Explore Project
                       <i class="fas fa-external-link-alt"></i>
                    </a>
                @else
                    <div class="internal-badge">
                        <i class="fas fa-lock" style="margin-right: 8px;"></i> Internal / Private Project
                    </div>
                @endif
            </div>

        </section>

    @empty
        {{-- Empty State if no projects exist in database --}}
        <section class="project-section" style="background-color: #0a0a1a;">
            <div class="project-content">
                <h2 class="project-title" style="color: #666;">No Projects Yet</h2>
                <p class="project-description">
                    Check back soon to see our latest work.
                </p>
                <a href="{{ url('/') }}" class="project-link-btn" style="border-color: #fff; color: #fff;">
                    Return Home
                </a>
            </div>
        </section>
    @endforelse

</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {

        // 1. Force Sidebar "Projects" link to be active
        const sidebarLinks = document.querySelectorAll('.sidebar-nav a');
        sidebarLinks.forEach(link => link.classList.remove('active'));

        // Assuming the 4th link is Projects, or finding by href containing 'projects'
        const projectsLink = document.querySelector('.sidebar-nav a[href*="projects"]');
        if(projectsLink) projectsLink.classList.add('active');

        // 2. Intersection Observer for Entry Animations
        // This adds the class .in-view to the section when it appears on screen
        const observerOptions = {
            threshold: 0.4 // Trigger when 40% of the section is visible
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');

                    // Optional: Update URL hash as user scrolls without jumping
                    // history.replaceState(null, null, '#' + entry.target.id);
                }
            });
        }, observerOptions);

        const sections = document.querySelectorAll('.project-section');
        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>
@endpush
