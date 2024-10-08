@include('partials.header')

<section class="page-404 section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>404</h1>
				<h2>Page Not Found</h2>
				<p>Sorry, but the page you were trying to view does not exist.</p>
				<a href="{{ asset('index_home.blade.php') }}" class="btn btn-main mt-20">Go Home</a>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')
