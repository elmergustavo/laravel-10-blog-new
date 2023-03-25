<x-app-layout meta-title="TheCodeholic Blog" meta-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit">
    <div class="container flex flex-wrap py-6 mx-auto">

        <!-- Posts Section -->
        <section class="w-full px-3 md:w-2/3">
            <div class="flex flex-col items-center ">
                @foreach($posts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
            {{ $posts->links() }}
        </section>

        <!-- Sidebar Section -->
        {{-- <x-sidebar /> --}}

    </div>
</x-app-layout>