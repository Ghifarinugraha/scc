
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <section class="h-screen sm:px-6 lg:px-8">
        <x-bg-card>
                <div class="flex">
                    <div class="lg:block lg:flex lg:w-1/2 hidden">
                       <img class=" rounded-xl" src="{{asset('images/scc_building.png')}}" alt="sccimg">
                   </div>
                   <div class="lg:flex-1 lg:p-8">
                       <h2 class="text-2xl font-bold">Apa itu SCC?</h2>
                       <img class="mt-2 rounded-xl lg:hidden sm:w-full" src="{{asset('images/scc_building.png')}}" alt="sccimg">
                       <p class="text-sm mt-4">Sumedang Crative Center (SCC) adalah pusat kreativitas di Kabupaten Sumedang yang didedikasikan untuk mendukung perkembangan seni, budaya dan inovasi. Dengan fasilitas modern seperti ruang pertemuan, studio kreatif, ruang pameran, ruang editing, area diskusi dan ruang lainnya, SCC memberikan tempat yang nyaman dan inspiratif untuk berbagai kegiatan mulai dari workshop, pameran seni, hingga acara komunitas.</p>
                       <div class="mt-6">
                           <a href="/dashboard" class=" px-5 py-3 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out">Selengkapnya</a>
                       </div>
                   </div>    
                </div>
    </x-bg-card>
    </section>
   
</x-app-layout>
