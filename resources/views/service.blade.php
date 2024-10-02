@include('partials.header')

@include('partials.blocks.navigation', [
    'active' => 'service'
])

@include('partials.blocks.page_header', [
    'page-name' => 'Our Services'
])

@include('partials.blocks.service')
@include('partials.blocks.skills')
@include('partials.blocks.counter')
@include('partials.blocks.testimonial')

@include('partials.blocks.footer')

@include('partials.footer')
