@props(['id', 'icon', 'title', 'valueProp', 'delay'])

<div class="service-module" id="service-{{ $id }}" data-aos="fade-up" data-aos-delay="{{ $delay }}" tabindex="0">
    <div class="card-face">
        <div class="card-icon-wrapper">
            <i class="fas {{ $icon }}"></i>
            <div class="micro-animation-bg"></div>
        </div>
        <h3 class="card-title">{{ $title }}</h3>
        <p class="card-value-prop">{{ $valueProp }}</p>
    </div>
    <div class="expanded-panel">
        <button class="close-panel-btn" aria-label="Close Panel">×</button>
        <div class="panel-content">
            {{ $slot }}
        </div>
        <button class="tech-toggle-btn"></button>
    </div>
</div>
