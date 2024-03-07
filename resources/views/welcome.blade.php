<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Evento</title>
		<meta name="author" content="name">
		<meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	</head>
	<body class="">
        <nav class="fixed inset-x-0 top-0 z-10 w-full px-4 py-1 bg-zinc-500 shadow-md border-slate-500 transition duration-700 ease-out">
            <div class="flex justify-between p-4">
                <div class="text-white">
                    Evento
                </div>
                <div class="flex items-center m-4 text-lg font-semibold">
                    <a href="{{ route('login') }}" class="px-6 py-2 text-black transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white">Login</a>
					<a href="{{ route('register') }}" class="px-6 py-2 text-black transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white">Sign up</a>

                </div>

            </div>
	    </nav>

		<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<p class="text-white font-extrabold text-3xl md:text-5xl">
					Evento
				</p>
				<p class="text-xl md:text-2xl text-gray-500">Reserver aux events</p>
			</div>
		</div>
			
		<div class="bg-amber-400 container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
				<div class="mx-0 sm:mx-6">
					<div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
						<div class=" flex flex-wrap justify-between pt-12 -mx-6">

							<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
								<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
									<a href="#" class="flex flex-wrap no-underline hover:no-underline">
										<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
										<p class="w-full text-gray-600 text-xs md:text-sm px-6">Lieu</p>
										<div class="w-full font-bold text-xl text-gray-900 px-6">Nom d'event</div>
										<p class="text-gray-800 font-serif text-base px-6 mb-5">
											Description d'evenements
										</p>
									</a>
								</div>
								<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
									<div class="flex items-center justify-between">
										<button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Reserver</button>
									</div>
								</div>
							</div>
							<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
								<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
									<a href="#" class="flex flex-wrap no-underline hover:no-underline">
										<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
										<p class="w-full text-gray-600 text-xs md:text-sm px-6">Lieu</p>
										<div class="w-full font-bold text-xl text-gray-900 px-6">Nom d'event</div>
										<p class="text-gray-800 font-serif text-base px-6 mb-5">
											Description d'evenements
										</p>
									</a>
								</div>
								<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
									<div class="flex items-center justify-between">
										<button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Reserver</button>
									</div>
								</div>
							</div>
							<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
								<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
									<a href="#" class="flex flex-wrap no-underline hover:no-underline">
										<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
										<p class="w-full text-gray-600 text-xs md:text-sm px-6">Lieu</p>
										<div class="w-full font-bold text-xl text-gray-900 px-6">Nom d'event</div>
										<p class="text-gray-800 font-serif text-base px-6 mb-5">
											Description d'evenements
										</p>
									</a>
								</div>
								<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
									<div class="flex items-center justify-between">
										<button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Reserver</button>
									</div>
								</div>
							</div>

							<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
								<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
									<a href="#" class="flex flex-wrap no-underline hover:no-underline">
										<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
										<p class="w-full text-gray-600 text-xs md:text-sm px-6">Lieu</p>
										<div class="w-full font-bold text-xl text-gray-900 px-6">Nom d'event</div>
										<p class="text-gray-800 font-serif text-base px-6 mb-5">
											Description d'evenements
										</p>
									</a>
								</div>
								<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
									<div class="flex items-center justify-between">
										<button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Reserver</button>
									</div>
								</div>
							</div>

							<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
								<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
									<a href="#" class="flex flex-wrap no-underline hover:no-underline">
										<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
										<p class="w-full text-gray-600 text-xs md:text-sm px-6">Lieu</p>
										<div class="w-full font-bold text-xl text-gray-900 px-6">Nom d'event</div>
										<p class="text-gray-800 font-serif text-base px-6 mb-5">
											Description d'evenements
										</p>
									</a>
								</div>
								<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
									<div class="flex items-center justify-between">
										<button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Reserver</button>
									</div>
								</div>
							</div>

						</div>						
					</div>	
				</div>
			</div>
		<footer class="bg-gray-900">	
			<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

				<div class="w-full mx-auto flex flex-wrap items-center">
					<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
						<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
							👻 <span class="text-base text-gray-200">EVENTO</span>
						</a>
					</div>
					<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
						<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
						<li>
							<a class="inline-block py-2 px-3 text-white no-underline" href="#">Home</a>
						</li>
						<li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
						</li>
						<li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
						</li>
							<li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="https://unpkg.com/tippy.js@6"></script>
	</body>
</html>
