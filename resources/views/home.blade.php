 <x-app-layout>
     <!-- Posts Section -->
     <section class="flex flex-col items-center w-full px-3 md:w-2/3">

         @foreach ($posts as $post)
             <x-post-item :post="$post" />
         @endforeach


         <!-- Pagination -->
         <div class="flex items-center py-8">
             <a href="#"
                 class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-white bg-blue-800 hover:bg-blue-600">1</a>
             <a href="#"
                 class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-gray-800 hover:bg-blue-600 hover:text-white">2</a>
             <a href="#"
                 class="flex items-center justify-center w-10 h-10 ml-3 text-sm font-semibold text-gray-800 hover:text-gray-900">Next
                 <i class="ml-2 fas fa-arrow-right"></i></a>
         </div>

     </section>

 </x-app-layout>
