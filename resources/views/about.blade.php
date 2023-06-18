<x-app-layout>
    <section class="w-full  flex flex-col px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class=" w-full ">
                <img class="h-auto max-w-full" src="/storage/{{ $widget->image }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <div class="flex gap-4">
                </div>
                <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $widget->title }}
                </h1>
                <div>
                    {!! $widget->content !!}
                </div>

                {{-- <livewire:upvote-downvote :post="$post"/> --}}
            </div>
        </article>


        {{-- <livewire:comments :post="$post"/> --}}
    </section>

</x-app-layout>
