@include('partials.header')

@include('partials.blocks.navigation', [
    'active' => 'home'
])

@include('partials.blocks.hero_area')

@include('partials.blocks.about')
@include('partials.blocks.call_to_action')
@include('partials.blocks.service')
@include('partials.blocks.call_to_action2')
@include('partials.blocks.skills')
@include('partials.blocks.counter')
@include('partials.blocks.portfolio')
@include('partials.blocks.team')
@include('partials.blocks.pricing')
@include('partials.blocks.testimonial')
@include('partials.blocks.blog')
@include('partials.blocks.contact')
@include('partials.blocks.footer')

@include('partials.footer')
