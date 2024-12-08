
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

                <div class="mt-8 ">
                    <h2 class="text-2xl font-bold">Ruangan yang tersedia</h2>
                </div>
                {{-- <div class="container">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="mx-auto rounded-lg bg-base-100 w-72 shadow-lg my-4">
                                <figure>
                                    <div class="relative pb-2/3 bg-red">
                                        <img class=" rounded-lg absolute w-full h-full object-cover"
                                        src="{{asset('images/check-icon.svg')}}"
                                        alt="Ruang Kelas" />
                                    </div>
                                </figure>
                                <div class="p-4">
                                    <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div > --}}

                <!-- Slider main container -->
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="mx-auto rounded-lg bg-base-100 w-72 shadow-lg">
                    <figure>
                        <div class="relative pb-2/3 bg-red">
                            <img class=" rounded-lg absolute w-full h-full object-cover" src="{{asset('images/check-icon.svg')}}" alt="Ruang Kelas" />
                        </div>
                    </figure>
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="mx-auto rounded-lg bg-base-100 w-72 shadow-lg">
                    <figure>
                        <div class="relative pb-2/3 bg-red">
                            <img class=" rounded-lg absolute w-full h-full object-cover" src="{{asset('images/check-icon.svg')}}" alt="Ruang Kelas" />
                        </div>
                    </figure>
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="mx-auto rounded-lg bg-base-100 w-72 shadow-lg">
                    <figure>
                        <div class="relative pb-2/3 bg-red">
                            <img class=" rounded-lg absolute w-full h-full object-cover" src="{{asset('images/check-icon.svg')}}" alt="Ruang Kelas" />
                        </div>
                    </figure>
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="mx-auto rounded-lg bg-base-100 w-72 shadow-lg">
                    <figure>
                        <div class="relative pb-2/3 bg-red">
                            <img class=" rounded-lg absolute w-full h-full object-cover" src="{{asset('images/check-icon.svg')}}" alt="Ruang Kelas" />
                        </div>
                    </figure>
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev absolute top-1/2 z-10 p-2">
            <div class="border p-1 rounded-full text-gray-900 bg-white/75">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </div>
        </div>
        <div class="swiper-button-next absolute top-1/2 right-0 z-10 p-2">
            <div class="border p-1 rounded-full text-gray-900 bg-white/75">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
        </div>
    </x-bg-card>
    </section>
   
</x-app-layout>
