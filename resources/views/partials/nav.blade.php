<nav class="sidebar-nav">
  {{-- If we are on the homepage, use hash links --}}
  @if(Request::is('/'))
      <a href="#home" class="active" data-label="Home"></a>
      <a href="#about" data-label="About"></a>
      <a href="#services" data-label="Services"></a>
      <a href="{{ url('projects') }}" data-label="Projects"></a>
      <a href="#contact" data-label="Contact"></a>
  @else
      {{-- If we are on the Projects page, links must go back to home --}}
      <a href="{{ url('/#home') }}" data-label="Home"></a>
      <a href="{{ url('/#about') }}" data-label="About"></a>
      <a href="{{ url('/#services') }}" data-label="Services"></a>
      <a href="{{ url('projects') }}" class="active" data-label="Projects"></a>
      <a href="{{ url('/#contact') }}" data-label="Contact"></a>
  @endif
</nav>
