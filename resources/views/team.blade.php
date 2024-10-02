@include('partials.header')

@include('partials.blocks.navigation', [
    'active' => 'team'
])

@include('partials.blocks.page_header', [
    'page-name' => 'Our Team'
])

@include('partials.blocks.about')
@include('partials.blocks.team')

@include('partials.blocks.footer')
@include('partials.footer')
