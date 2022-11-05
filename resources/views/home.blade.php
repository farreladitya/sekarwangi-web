<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <title>Sekarwangi Florist</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
            </style>

        {{-- Icon --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body class="antialiased bg-def" style="font-family: 'PT Sans', sans-serif;">
                        {{-- <div class="navigation">
                            <img  src="{{ asset('img/logo.png') }}" class="mb-10 px-2 py-2" alt="Sekarwangi Florist">
                            <ul>
                                <li class="list text-xl font-bold active">
                                    <a href="#">
                                    <span class="icon "><ion-icon name="analytics-outline"></ion-icon>
                                    </span>
                                    <span class="title">Home</span>
                                    </a>
                                </li>
                                <li class="list text-xl font-bold">
                                    <a href="#">
                                    <span class="icon "><ion-icon name="analytics-outline"></ion-icon>
                                    </span>
                                    <span class="title">About</span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        <!-- Navbar goes here -->
                          <!-- Navbar goes here -->
		<nav class="bg-white shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
                            {{-- <img  src="{{ asset('img/logo.png') }}" class="mb-10 px-2 py-2" alt="Sekarwangi Florist"> --}}

							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img src="{{ asset('img/logo.png') }}" alt="Logo" class=" w-1/3">
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="" class="py-4 px-2 text-pink-500 border-b-4 border-pink-500 font-semibold ">Home</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-pink-500 transition duration-300">About</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-pink-500 transition duration-300">Contact Us</a>
						</div>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-pink-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>

				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-pink-500 font-semibold">Home</a></li>
					<li><a href="/about" class="block text-sm px-2 py-4 hover:bg-pink-500 transition duration-300">About</a></li>
					<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-pink-500 transition duration-300">Contact Us</a></li>
				</ul>
			</div>
		</nav>

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative height-car rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="{{ asset('img/carousel-1.jpeg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/carousel-2.jpeg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/carousel-1.jpeg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
        <div class="">
            <div class="text-3xl py-9 flex justify-center font-bold">Buket</div>
            <div class="grid grid-cols-2">
            @foreach ( $buket as $b )
        <div class=" w-5/4 h-64 bg-def rounded-lg shadow-md mx-2 my-2" onclick="location.href='/product/{{$b->id}}';">
            <a href="#">
                <img class="rounded-t-lg w-64 h-48" src="{{ url('/product_image/'.$b->image) }}" alt="product image" />
            </a>
            <div class="container">
                <a href="#">
                    <h3 class="text-xl font-semibold tracking-tight text-gray-900">{{$b->name}}</h3>
                </a>
                <h5 class="text-lg font-semibold tracking-tight text-gray-900">@php
                    echo "Rp. " . number_format($b->price,0,",",".",);
                    @endphp</h5>
                {{-- <div class="flex justify-between items-center">
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</a>
                </div> --}}
            </div>
        </div>
        @endforeach
    </div>
    </div>
        <div class="">
        <div class="text-3xl py-9 flex justify-center font-bold">Bunga Box</div>
        <div class="grid grid-cols-2">
        @foreach ($box as $x )
        <div class=" w-5/4 h-64 bg-def rounded-lg shadow-md mx-2 my-2" onclick="location.href='/product/{{$x->id}}';">
            <a href="#">
                <img class="rounded-t-lg w-64 h-48" src="{{ url('/product_image/'.$x->image) }}" alt="product image" />
            </a>
            <div class="container">
                <a href="#">
                    <h3 class="text-xl font-semibold tracking-tight text-gray-900">{{$x->name}}</h3>
                </a>
                <h5 class="text-lg font-semibold tracking-tight text-gray-900">@php
                    echo "Rp. " . number_format($x->price,0,",",".",);
                    @endphp</h5>

            </div>
        </div>
        @endforeach
    </div>
    </div>
        <div class="">
        <div class="text-3xl py-9 flex justify-center font-bold">Bunga Meja</div>
        <div class="grid grid-cols-2">
        @foreach ($meja as $m)
        <div class=" w-5/4 h-64 bg-def rounded-lg shadow-md mx-2 my-2" onclick="location.href='/product/{{$m->id}}';">
            <a href="#">
                <img class="rounded-t-lg w-64 h-48" src="{{ url('/product_image/'.$m->image) }}" alt="product image" />
            </a>
            <div class="container">
                <a href="#">
                    <h3 class="text-xl font-semibold tracking-tight text-gray-900">{{$m->name}}</h3>
                </a>
                <h5 class="text-lg font-semibold tracking-tight text-gray-900">@php
                    echo "Rp. " . number_format($m->price,0,",",".",);
                    @endphp</h5>

            </div>
        </div>
        @endforeach
    </div>
    </div>
        <div class="">
        <div class="text-3xl py-9 flex justify-center font-bold">Bunga Papan</div>
        <div class="grid grid-cols-2">
            @foreach ($papan as $p)
            <div class=" w-5/4 h-64 bg-def rounded-lg shadow-md mx-2 my-2" onclick="location.href='/product/{{$p->id}}';">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-48" src="{{ url('/product_image/'.$p->image) }}" alt="product image" />
                </a>
                <div class="container">
                    <a href="#">
                        <h3 class="text-xl font-semibold tracking-tight text-gray-900">{{$p->name}}</h3>
                    </a>
                    <h5 class="text-lg font-semibold tracking-tight text-gray-900">@php
                        echo "Rp. " . number_format($p->price,0,",",".",);
                        @endphp</h5>

                </div>
            </div>
            @endforeach
        </div>
    </div>
        <div class="">
        <div class="text-3xl py-9 flex justify-center font-bold">Bunga Papan Kertas</div>
        <div class="grid grid-cols-2">
            @foreach ($panker as $pk)
            <div class=" w-5/4 h-64 bg-def rounded-lg shadow-md mx-2 my-2" onclick="location.href='/product/{{$pk->id}}';">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-48" src="{{ url('/product_image/'.$pk->image) }}" alt="product image" />
                </a>
                <div class="container">
                    <a href="#">
                        <h3 class="text-lg font-semibold tracking-tight text-gray-900">{{$pk->name}}</h3>
                    </a>
                    <h5 class="text-lg font-semibold tracking-tight text-gray-900">@php
                        echo "Rp. " . number_format($pk->price,0,",",".",);
                        @endphp</h5>

                </div>
            </div>
            @endforeach
        </div>
    </div>
        <div class="">
        <div class="text-3xl py-9 flex justify-center font-bold">Bunga Standing</div>
        <div class="grid grid-cols-2">
            @foreach ($standing as $s)
            <div class=" w-5/4 h-64 bg-def rounded-lg shadow-md mx-2 my-2" onclick="location.href='/product/{{$s->id}}';">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-48" src="{{ url('/product_image/'.$s->image) }}" alt="product image" />
                </a>
                <div class="container">
                    <a href="#">
                        <h3 class="text-xl font-semibold tracking-tight text-gray-900">{{$s->name}}</h3>
                    </a>
                    <h5 class="text-lg font-semibold tracking-tight text-gray-900">@php
                        echo "Rp. " . number_format($s->price,0,",",".",);
                        @endphp</h5>

                </div>
            </div>
            @endforeach
    </div>
    <a href="https://wa.me/6282232259990/" style="position: fixed; bottom:30px; right:10px" class=" w-20"><img src="{{ asset('img/whatsapp.png') }}"></a>

<footer class="p-4 bg-gray-100 sm:p-6 dark:bg-gray-900">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" class="mr-3 w-1/2" alt="FlowBite Logo">
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://flowbite.com/" class="hover:underline">Home</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://tailwindcss.com/" class="hover:underline">Product</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://tailwindcss.com/" class="hover:underline">About Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Instagram</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Tokopedia</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Shopee</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Sekarwangi Web Developmet™</a> <br> All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Dribbbel account</span>
            </a>
        </div>
    </div>
</footer>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
            </script>
    </body>
</html>