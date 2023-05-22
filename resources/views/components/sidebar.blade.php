        <!-- Sidebar Section -->
        <!-- Sidebar Section -->
        <aside class="flex flex-col items-center w-full md:w-1/3">

            <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
                <h3 class="text-xl font-semibold mb-3">
                    All categories
                </h3>
                @foreach($categories as $category)
                <a href="{{ route('by-category', $category) }}"
                   class="text-semibold block py-2 px-3 rounded {{ request('category')?->slug === $category->slug
                    ? 'bg-blue-600 text-white' :  ''}}">
                    {{$category->title}} ({{$category->total}})
                </a>
            @endforeach
            </div>

            <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
                <p class="pb-5 text-xl font-semibold">
                    {{\App\Models\TextWidget::getTitle('about-us-sidebar')}}
                </p>


                {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
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
        {{-- <x-sidebar /> --}}