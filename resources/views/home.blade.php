<x-app-layout meta-title="TheCodeholic Blog"
    meta-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit">

    <!-- Posts Section -->
    <section class="w-full px-3 md:w-2/3 fle flex-col items-center">
      
            @foreach($posts as $post)
            <x-post-item :post="$post" />
            @endforeach
        {{ $posts->onEachSide(1)->links() }}
    </section>

    <x-sidebar />
</x-app-layout>