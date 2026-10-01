<section class="hero-section mb-4 mb-md-5 rounded-3 overflow-hidden">
  <div class="tns-carousel tns-controls-static tns-controls-outside tns-dots-enabled" role="region"
    aria-label="Hero slider">
    <div class="tns-carousel-inner"
      data-carousel-options="{&quot;items&quot;: 1, &quot;gutter&quot;: 0, &quot;controls&quot;: true, &quot;autoHeight&quot;: false, &quot;nav&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000}">

      {{-- Slide 1 --}}
      {{-- Previous height: clamp(280px, 45vw, 500px) --}}
      <div class="position-relative" style="height: clamp(220px, 32vw, 380px);">
        <img src="{{ asset('img/Slider-1.png') }}" class="w-100 h-100 d-block" style="object-fit: cover;" alt="Rembeka slide 1">
      </div>

      {{-- Slide 2 --}}
      <div class="position-relative" style="height: clamp(220px, 32vw, 380px);">
        <img src="{{ asset('img/Slider-2.png') }}" class="w-100 h-100 d-block" style="object-fit: contain;" alt="Rembeka slide 2">
      </div>

      {{-- Slide 3 --}}
      <div class="position-relative" style="height: clamp(220px, 32vw, 380px);">
        <img src="{{ asset('img/Slider-3.png') }}" class="w-100 h-100 d-block" style="object-fit: contain;" alt="Rembeka slide 3">
      </div>

      {{-- Slide 4 --}}
      <div class="position-relative" style="height: clamp(220px, 32vw, 380px);">
        <img src="{{ asset('img/Slider-4.png') }}" class="w-100 h-100 d-block" style="object-fit: contain;" alt="Rembeka slide 4">
      </div>

    </div>
  </div>
</section>