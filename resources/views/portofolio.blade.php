@include('partials.header')

@include('partials.blocks.navigation', [
    'active' => 'portofolio'
])

@include('partials.blocks.page_header', [
    'page-name' => 'Portofolio'
])

@include('partials.blocks.portofolio')

@include('partials.blocks.about_video')

@include('partials.blocks.testimonial')

@include('partials.blocks.footer')

@include('partials.footer')
