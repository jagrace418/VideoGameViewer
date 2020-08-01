@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
	<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
	<div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800">
		<div class="game mt-8">
			<div class="relative inline-block">
				<a href="#">
					<img src="/game0.jpg" alt="game0" class="hover:opacity-75 transition ease-in-out duration-150">
				</a>
				<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
					<div class="font-semibold text-xs flex justify-center items-center h-full"></div>
				</div>
			</div>
			<a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Destory all humans</a>
			<div class="text-gray-400 my-1">PC GAMERSZ</div>
		</div>
	</div>
</div>
@endsection