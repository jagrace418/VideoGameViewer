<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Video Games!</title>
	<link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
<header class="border-b border-green-800">
	<nav class="container mx-auto flex items-center justify-between px-4 py-6">
		<div class="flex items-center">
			<a href="/">
				<img src="/keyboard.jpg" alt="TEST" class="w-32 flex-none">
			</a>
			<ul class="flex ml-16 space-x-8">
				<li><a href="#" class="hover:text-blue-500">Games</a></li>
				<li><a href="#" class="hover:text-blue-500">Reviews</a></li>
				<li><a href="#" class="hover:text-blue-500">Soon</a></li>
			</ul>
		</div>
		<div class="flex items-center">
			<div class="relative">
				<input type="text" class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 py-1" placeholder="Search...">
				<div class="absolute top-0"></div>
			</div>
			<div class="relative">
				<div class="ml-6">
					<a href="#"><img src="/avatar.jpg" alt="Avatar" class="rounded-full w-8"></a>
				</div>
			</div>
		</div>
	</nav>
</header>
<main class="py-8">
	@yield('content')
</main>

<footer class="border-t bg-gray-800">
	<div class="container mx-auto px-4 py-6">
		Powered by <a href="#">IGDB API</a>
	</div>
</footer>
</body>
</html>