<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jual Ayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<section class='py-2 bg-gray-800 text-white text-right px-10 sm:flex items-center justify-center sm:justify-between'>
    <x-Socials />
    <div class="flex gap-2">
        <div class="group flex items-center gap-2 justify-center">
            <x-icon link="https://wa.me/08123141424" alt="Whatsapp number"
                path="M12.036 5.339c-3.635 0-6.591 2.956-6.593 6.589-.001 1.483.434 2.594 1.164 3.756l-.666 2.432 2.494-.654c1.117.663 2.184 1.061 3.595 1.061 3.632 0 6.591-2.956 6.592-6.59.003-3.641-2.942-6.593-6.586-6.594zm3.876 9.423c-.165.463-.957.885-1.337.942-.341.051-.773.072-1.248-.078-.288-.091-.657-.213-1.129-.417-1.987-.858-3.285-2.859-3.384-2.991-.099-.132-.809-1.074-.809-2.049 0-.975.512-1.454.693-1.653.182-.2.396-.25.528-.25l.38.007c.122.006.285-.046.446.34.165.397.561 1.372.611 1.471.049.099.083.215.016.347-.066.132-.099.215-.198.33l-.297.347c-.099.099-.202.206-.087.404.116.198.513.847 1.102 1.372.757.675 1.395.884 1.593.983.198.099.314.083.429-.05.116-.132.495-.578.627-.777s.264-.165.446-.099 1.156.545 1.354.645c.198.099.33.149.38.231.049.085.049.482-.116.945zm3.088-14.762h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-6.967 19.862c-1.327 0-2.634-.333-3.792-.965l-4.203 1.103 1.125-4.108c-.694-1.202-1.059-2.566-1.058-3.964.002-4.372 3.558-7.928 7.928-7.928 2.121.001 4.112.827 5.609 2.325s2.321 3.491 2.32 5.609c-.002 4.372-3.559 7.928-7.929 7.928z" />
            <a href="https://wa.me/08123141424" target="_blank"
                class="group-hover:text-yellow-300 text-lg font-light text-gray-300">+628120414150</a>
        </div>
    </div>
</section>

<x-Navbar />

<!-- CARROUSEL    -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    {{-- Hero Text --}}
    <div class="absolute z-50 w-full h-full flex flex-col justify-center items-center text-white gap-4 p-6">
        <div class="flex w-full">
            <div class="hidden bg-red-600 md:flex w-full max-w-40"></div>
            <div class="font-bold md:text-2xl lg:text-4xl text-center w-full flex flex-col">
                <h1>BANTU PENUHI PROTEINMU SETIAP HARI MASYARAKAT</h1>
                <h1>SEHAT DAN CERDAS BEBAS STUNTING</h1>
            </div>
            <div class="hidden bg-red-600 md:flex w-full max-w-40"></div>
        </div>
        <div
            class="bg-gray-50 bg-opacity-20 rounded-xl p-2 md:p-4 text-xs md:text-base lg:text-xl mx-8 md:m-0 font-semibold text-center">
            <h2>Belanja Kebutuhan Ayam dan Telur Untuk Usaha dan Konsumsi Harian Semakin Mudah dan Hemat</h2>
        </div>
        <a href="#map-container"
            class="hidden md:block bg-yellow-400 shadow-md shadow-yellow-500 md:py-4 md:px-12 rounded-lg md:text-lg">Selengkapnya</a>
    </div>
    <!-- Carousel wrapper -->
    <div class="relative h-64 overflow-hidden md:h-[600px] brightness-75">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/banner/' . $sectionBanner->banner1) }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/banner/' . $sectionBanner->banner2) }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/banner/' . $sectionBanner->banner3) }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 start-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<section class="xl:px-32 mt-6 lg:mt-10">
    <h1 class="text-red-600 font-bold text-lg md:text-4xl text-center">UPDATE HARGA</h1>
    <h2 class="text-gray-600 text-sm md:text-lg text-center">Ayam dan Telur Tingkat Peternak</h2>
    <div class="w-full h-[400px] xl:h-screen" id="map-container"></div>
</section>

<section class="w-full justify-center mb-24 py-6 hidden md:flex flex-wrap">
    @for ($i = 0; $i < count($mapSeriesSorted); $i++)
        @php
            $formattedNumber = number_format($mapSeriesSorted[$i]['data'][0]['value']);

            // Add the Rupiah symbol
            $formattedNumber = 'Rp ' . $formattedNumber;
        @endphp
        <div class="flex justify-center items-center flex-col min-w-40">
            <div
                class="border-[{{ $mapSeriesSorted[$i]['color'] }}] border-4 h-12 w-12 rounded-full flex justify-center items-center relative">
                <p class="text-[{{ $mapSeriesSorted[$i]['color'] }}] text-lg font-bold">{{ $i + 1 }}</p>
                <div
                    class="before:content-['▼'] absolute -bottom-1 h-2 text-[{{ $mapSeriesSorted[$i]['color'] }}] text-xl scale-y-50">
                </div>
            </div>
            <div class="w-full relative flex justify-center items-center my-4">
                <div class="h-2 w-2 bg-[{{ $mapSeriesSorted[$i]['color'] }}] absolute rounded-full z-50"></div>
                <div class="border border-gray-400 border-dashed w-full absolute"></div>
            </div>
            <h4 class="font-light text-lg italic text-[{{ $mapSeriesSorted[$i]['color'] }}]">
                {{ $mapSeriesSorted[$i]['name'] }}</h4>
            <h5 class="font-bold text-lg">{{ $formattedNumber }}</h5>
        </div>
    @endfor
</section>



<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Jualayam.com™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 21 16">
                        <path
                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
            </div>
        </div>
    </div>
</footer>
{{-- Map Chart --}}
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/accessibility.js"></script>
<script src="{{ asset('js/highcharts.js') }}"></script>
<script>
    const result = @json($mapSeriesSorted);

    createMap(result)
</script>

</html>
