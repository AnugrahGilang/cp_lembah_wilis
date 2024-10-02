@include('partials.header')

@include('partials.blocks.navigation', ['active' => 'about'])

@include('partials.blocks.page_header', ['page-name' => 'About Us'])

<section class="about-shot-info sectio  n-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mt-20">
        <h2 class="mb-3">Lembah Wilis</h2>
        <p>Kabupaten Madiun merupakan salah satu daerah diProvinsi Jawa Timur. Ada banyak tempat wisata di Madiun
            yang layak untuk dikunjungi wisatawan. Selain memiliki potensi wisata sejarah, Madiun juga mempunyai potensi wisata alam dan kuliner.</p>
        <p>Salah satu tempat wisata yang ramah keluarga di Kabupaten Madiun adalah Taman Wisata Lembah Wilis. Seperti namanya, tempat wisata ini berlokasi di kawasan Gunung Wilis.</p>
        <p>Ada beragam wahana wisata yang ada di Taman Wisata Lembah Wilis. Selain itu, tempat ini memiliki kolam renang dan restoran yang memiliki
            view keindahan area persawahan dan Gunung Wilis. Berbagai spot foto indah juga tersedia di tempat ini.</p>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <img loading="lazy" class="img-fluid" src="{{ asset('images/company/company-image.jpg') }}" alt="">
      </div>
    </div>
  </div>
</section>

<section class="company-mission section-sm bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3> Misi</h3>
        <p>...</p>
        <img loading="lazy" src="{{ asset('images/company/company-image-2.jpg') }}" alt="" class="img-fluid mt-30">
      </div>
      <div class="col-md-6 mt-5 mt-md-0">
        <h3>Visi</h3>
        <p>...</p>
        <img loading="lazy" src="{{ asset('images/company/company-image-3.jpg') }}" alt="" class="img-fluid mt-30">
      </div>
    </div>
  </div>
</section>

{{-- @include('partials.blocks.about_video') --}}

{{-- @include('partials.blocks.call_to_action') --}}

{{-- <section class="section gallery">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="title text-center">
          <h2>Sneak Peak Gallery</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae qui
            aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro, praesentium consectetur
            tempore. Nulla, error eius dolorem.</p>
          <div class="border"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="company-gallery">
          <img loading="lazy" src="{{ asset('images/company/gallery-1.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-2.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-3.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-4.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-5.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-5.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-1.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-2.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-3.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-4.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-5.jpg') }}" alt="">
          <img loading="lazy" src="{{ asset('images/company/gallery-5.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section> --}}

{{-- @include('partials.blocks.team') --}}
@include('partials.blocks.counter')
@include('partials.blocks.call_to_action2')

@include('partials.blocks.footer')

@include('partials.footer')
