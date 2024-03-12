<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
    </style>
</head>
<body class="overflow-x-hidden antialiased">
    <header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">

                <span class="ml-3 text-xl text-gray-800">Evento</span>
            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                <a href="{{ route('client.home') }}" class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                <!-- <a href="#events"  class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Events</a> -->
                <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                    <a href="#_" class="w-full py-2 font-bold text-center text-pink-500"></a>
                    <a href="#_"class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold"></a>
                </div>
            </nav>

            <!-- <div class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                <a href="#_"class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-black sm:w-full lg:shadow-none hover:shadow-xl">login</a>
                <a href="#_"  class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-black sm:w-full lg:shadow-none hover:shadow-xl">Signup</a>
            </div> -->

            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </header>

    <div>
        <div class="bg-gray-100 dark:bg-gray-800 py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <!-- Event Image -->
                        <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                            <img class="w-full h-full object-cover" src="" alt="Event Image">
                        </div>
                        <!-- Add to Cart Button -->
                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                            <a href="{{ route('client.createReservation', ['id' => $event->id]) }}" class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Reserve a Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <!-- Event Title -->
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $event->title }}</h2>
                        <!-- Event Description -->
                        
                        <!-- Event Details -->
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold text-gray-700 dark:text-gray-300">Categorie:</span>
                                <span class="text-gray-600 dark:text-gray-300">{{ $event->category->name }}</span>
                            </div>
                            <div>
                                <span class="font-bold text-gray-700 dark:text-gray-300">Places:</span>
                                <span class="text-gray-600 dark:text-gray-300">{{ $event->available_seats }}</span>
                            </div>
                        </div>
                        <!-- Event Description -->
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300"> Description:</span>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                                {{ $event->description }}
                            </p>
                            <span class="font-bold text-gray-700 dark:text-gray-300">Date:</span>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                                {{ $event->date }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>
</body>
</html>
