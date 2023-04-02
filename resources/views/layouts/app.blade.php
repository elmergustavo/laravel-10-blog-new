<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
     <!-- Font Awesome -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

   @vite(['resources/css/app.css', 'resources/js/app.js'])
   @livewireStyles
   @livewireScripts
   @stack('scripts')
  
</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="container flex flex-wrap items-center justify-between w-full mx-auto">

            <nav>
                <ul class="flex items-center justify-between text-sm font-bold text-white no-underline uppercase">
                    <li><a class="px-4 hover:text-gray-200 hover:underline" href="#">Shop</a></li>
                    <li><a class="px-4 hover:text-gray-200 hover:underline" href="#">About</a></li>
                </ul>
            </nav>

            <div class="flex items-center pr-6 text-lg text-white no-underline">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="container w-full mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="text-5xl font-bold text-gray-800 uppercase hover:text-gray-700" href="#">
                Tavcode
            </a>
            <p class="text-lg text-gray-600">
                Lorem Ipsum Dolor Sit Amet
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 bg-gray-100 border-t border-b" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#" class="flex items-center justify-center block text-base font-bold text-center uppercase md:hidden" @click="open = !open">
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="ml-2 fas"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="flex-grow w-full sm:flex sm:items-center sm:w-auto">
            <div class="container flex flex-col items-center justify-center w-full px-6 py-2 mx-auto mt-0 text-sm font-bold uppercase sm:flex-row">
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Technology</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Automotive</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Finance</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Politics</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Culture</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Sports</a>
            </div>
        </div>
    </nav>


    <div class="container flex flex-wrap py-6 mx-auto">

       {{ $slot}}

        <!-- Sidebar Section -->
        <aside class="flex flex-col items-center w-full md:w-1/3">

            <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
                <p class="pb-5 text-xl font-semibold">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="flex items-center justify-center w-full px-2 py-3 mt-4 text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                    Get to know us
                </a>
            </div>

            {{-- <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
                <p class="pb-5 text-xl font-semibold">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="flex items-center justify-center w-full px-2 py-3 mt-6 text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                    <i class="mr-2 fab fa-instagram"></i> Follow @dgrzyb
                </a>
            </div> --}}

        </aside>

    </div>

    <footer class="w-full pb-12 bg-white border-t">
        {{-- <div class="relative flex items-center invisible w-full md:visible md:pb-12" x-data="getCarouselData()">
            <button class="absolute w-16 h-16 ml-12 text-2xl font-bold text-white bg-blue-800 rounded-full hover:bg-blue-700 hover:shadow" x-on:click="decrement()">
                &#8592;
            </button>
            <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                <img class="w-1/6 hover:opacity-75" :src="image">
            </template>
            <button class="absolute right-0 w-16 h-16 mr-12 text-2xl font-bold text-white bg-blue-800 rounded-full hover:bg-blue-700 hover:shadow" x-on:click="increment()">
                &#8594;
            </button>
        </div> --}}
        <div class="container flex flex-col items-center w-full mx-auto">
            {{-- <div class="flex flex-col py-6 text-center md:flex-row md:text-left md:justify-between">
                <a href="#" class="px-3 uppercase">About Us</a>
                <a href="#" class="px-3 uppercase">Privacy Policy</a>
                <a href="#" class="px-3 uppercase">Terms & Conditions</a>
                <a href="#" class="px-3 uppercase">Contact Us</a>
            </div> --}}
            <div class="py-6 uppercase">&copy; myblog.com</div>
        </div>
    </footer>

    {{-- <script>
        function getCarouselData() {
            return {
                currentIndex: 0
                , images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=2'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=3'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=4'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=5'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=6'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=7'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=8'
                    , 'https://source.unsplash.com/collection/1346951/800x800?sig=9'
                , ]
                , increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                }
                , decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                }
            , }
        }

    </script> --}}

</body>
</html>
