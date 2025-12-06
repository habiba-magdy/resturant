<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gourmet Haven</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-pc6XfK+K4jvZl2b2k8gF1Z6x2q9Jt1ZLr3qJz5q6f3YV9R1w1V1Y7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.hero {
			background-image: url("{{ asset('img/resturant.jpeg') }}");
			background-size: cover;
			background-position: center;
			height: 320px;
			position: relative;
			color: white;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.hero::before {
			content: '';
			position: absolute;
			left: 0; right: 0; top: 0; bottom: 0;
			background: rgba(0,0,0,0.55);
		}
		.hero .hero-content { position: relative; z-index: 2; text-align: center; }
		.hero h1 { font-weight: 800; font-size: 48px; letter-spacing: 1px; }
		.hero p { margin-top: 6px; color: #f0f0f0; }
		.menu-pill { display:inline-block; border-radius:30px; padding:8px 18px; }
		.footer-dark { background: #22252a; color: #ddd; padding: 48px 0; }
		.footer-dark a { color: #ddd; }
		.card .badge-cat { background:#ffcc00; color:#111; }
	</style>
</head>
<body>

	<!-- Header / Hero -->
	<header class="hero mb-5">
		<div class="hero-content">
			<h1>Gourmet Haven</h1>
			<p class="small">Savor the finest culinary creations</p>
		</div>
	</header>

	<main class="container">
		<h2 class="text-center mb-4" style="font-weight:700">Our Menu</h2>
		<div class="text-center mb-4">
			@foreach($categories as $category)
				<a href="{{ route('category.filter', $category->id) }}" class="btn btn-outline-warning m-1 menu-pill">{{ $category->name }}</a>
			@endforeach
			<a href="{{ route('home') }}" class="btn btn-outline-warning m-1 menu-pill">Show All</a>
		</div>

		<div class="row">
			@forelse($meals as $meal)
				<div class="col-md-4 mb-4">
					<div class="card h-100 shadow-sm">
						@if($meal->image)
							<img src="{{ asset('storage/' . $meal->image) }}" class="card-img-top" alt="{{ $meal->name }}">
						@else
							<img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="{{ $meal->name }}">
						@endif
						<div class="card-body d-flex flex-column">
							<h5 class="card-title">{{ $meal->name }}</h5>
							<p class="card-text text-muted">{{ Str::limit($meal->description, 100) }}</p>
							<div class="mt-auto d-flex justify-content-between align-items-center">
								<span class="fw-bold text-primary">${{ number_format($meal->price, 2) }}</span>
								<a href="#" class="btn btn-outline-warning btn-sm">Add to Card</a>
							</div>
						</div>
					</div>
				</div>
			@empty
				<p class="text-center">No meals available for this category.</p>
			@endforelse
		</div>
	</main>

	<!-- Footer -->
	<footer class="footer-dark mt-5">
		<div class="container text-center">
			<h5 style="color:#fff; font-weight:700;">Gourmet Haven</h5>
			<p class="small mb-1">123 Culinary Street, Foodville</p>
			<p class="small mb-3">Open Tuesday - Sunday, 11am - 10pm</p>
			<div class="mb-3">
				<a href="#" class="mx-2"><i class="fab fa-facebook fa-lg"></i></a>
				<a href="#" class="mx-2"><i class="fab fa-instagram fa-lg"></i></a>
				<a href="#" class="mx-2"><i class="fab fa-twitter fa-lg"></i></a>
			</div>
			<p class="small mb-0">© 2023 Gourmet Haven. All rights reserved.</p>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>