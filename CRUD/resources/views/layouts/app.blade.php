<html>

<head>
	<title> @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>

<body>
	<header class="pt-1 bg-dark">
		<nav>
			<ul class="nav nav-pills nav-fill">
				<li class="nav-item">
					<a class=" nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Search</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="container py-5">
			@yield('content')
			@show
		</div>
	</main>
</body>

</html>
