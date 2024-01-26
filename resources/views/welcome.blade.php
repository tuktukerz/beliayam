<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>beliayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div id="modal-ad" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-[99] hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
    <div class="relative max-h-full w-fit max-w-6xl">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white lg:text-2xl">
                    May Interest You!
                </h3>
                <button type="button" data-modal-hide="modal-ad"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-6 p-6 flex" id="ads">
                <img src="{{ asset('storage/ad/' . $identities->ad) }}"/>
            </div>
        </div>
    </div>
</div>

<x-Navbar :logo="$identities->logo_black" />

<!-- CARROUSEL    -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    {{-- Hero Text --}}
    <div class="absolute z-40 w-full h-full flex flex-col justify-center items-center text-white gap-4 md:p-6">
        <div class="flex w-full">
            <div class="hidden bg-red-600 md:flex w-full max-w-40"></div>
            <div class="font-bold md:text-2xl lg:text-4xl text-center w-full flex flex-col justify-center items-center">
                <h1 class="max-w-6xl">{{ $identities->title }}</h1>
            </div>
            <div class="hidden bg-red-600 md:flex w-full max-w-40"></div>
        </div>
        <div
            class="bg-gray-50 bg-opacity-20 rounded-xl p-2 md:p-4 text-xs md:text-base lg:text-xl mx-8 md:m-0 font-semibold text-center">
            <h2>{{ $identities->description }}</h2>
        </div>
        <a href="#map-container"
            class="hidden md:block bg-red-600 hover:bg-red-800 shadow-md md:py-4 md:px-12 rounded-lg md:text-lg font-bold">Selengkapnya</a>
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


<section class="xl:px-32 mt-6 lg:mt-10 mb-6 md:mb-0">
    <h1 class="text-red-600 font-bold text-2xl md:text-4xl text-center">UPDATE HARGA</h1>
    <h2 class="text-gray-600 text-sm md:text-lg text-center">Ayam dan Telur Tingkat Peternak</h2>
    <div class="w-full h-[400px] xl:h-screen" id="map-container"></div>
</section>

<section class="w-full justify-center md:mb-24 py-6 hidden md:flex flex-wrap">
    @foreach ($priceAverageByisland as $total)
        @php
            $formattedNumber = number_format($total['total_price']);

            // Add the Rupiah symbol
            $formattedNumber = 'Rp ' . $formattedNumber;
        @endphp
        <div class="flex justify-center items-center flex-col min-w-40">
            <div
                class="border-[{{ $total['color'] }}] border-4 h-12 w-12 rounded-full flex justify-center items-center relative">
                <p class="text-[{{ $total['color'] }}] text-lg font-bold">{{ $loop->iteration }}</p>
                <div
                    class="before:content-['▼'] absolute -bottom-1 h-2 text-[{{ $total['color'] }}] text-xl scale-y-50">
                </div>
            </div>
            <div class="w-full relative flex justify-center items-center my-4">
                <div class="h-2 w-2 bg-[{{ $total['color'] }}] absolute rounded-full z-50"></div>
                <div class="border border-gray-400 border-dashed w-full absolute"></div>
            </div>
            <h4 class="font-light text-lg italic text-[{{ $total['color'] }}]">
                {{ $total['island'] }}</h4>
            <h5 class="font-bold text-lg">{{ $formattedNumber }}</h5>
        </div>
    @endforeach
</section>

{{-- Mobile --}}
<section class="w-full justify-center md:mb-24 py-6 flex md:hidden flex-wrap">
    @foreach ($priceAverageByisland as $total)
        @php
            $formattedNumber = number_format($total['total_price']);

            // Add the Rupiah symbol
            $formattedNumber = 'Rp ' . $formattedNumber;
        @endphp
        <div class="flex justify-center items-center min-w-40 flex-col mb-4">
            <div
                class="border-[{{ $total['color'] }}] border h-6 w-6 rounded-full flex justify-center items-center relative">
                <p class="text-[{{ $total['color'] }}] font-bold">{{ $loop->iteration }}</p>
            </div>
            <h4 class="font-light italic text-[{{ $total['color'] }}]">
                {{ $total['island'] }}</h4>
            <h5 class="font-bold text-sm">{{ $formattedNumber }}</h5>
        </div>
    @endforeach
</section>

@if (count($values) > 0)
    <section class="flex justify-center items-center mb-24 mx-6">
        <div class="flex rounded-3xl lg:rounded-[6.5rem] overflow-hidden md:px-16 py-6 gap-8 flex-col md:flex-row">
            @foreach ($values as $value)
                <div
                    class="max-w-96 text-black text-center flex flex-col justify-start items-center group shadow-xl p-6 rounded-xl">
                    <img src="{{ asset('storage/value/' . $value->image) }}"
                        class="max-h-60 md:max-w-full object-contain group-hover:scale-105 transition rounded-xl"
                        alt="product value" />
                    <div class="bg-gray-200 h-[0.5px] w-full my-6"></div>
                    <h1 class="text-3xl font-black mb-2 text-red-600">{{ $value->title }}</h1>
                    <h2 class="text-sm max-w-72 text-gray-600">{{ $value->description }}</h2>
                </div>
            @endforeach
        </div>
    </section>
@endif


@if (count($supports) > 0)
    <section class="flex flex-col justify-center items-center mb-24">
        <h1 class="text-gray-500 text-2xl italic text-center">Didukung Pemerintah dan Organisasi Perunggasan Melalui :
        </h1>
        <div
            class="flex flex-wrap p-6 md:p-16 m-6 bg-gray-100 justify-center items-center gap-12 rounded-xl max-w-7xl border-2">
            @foreach ($supports as $support)
                <img src="{{ asset('storage/support/' . $support->image) }}"
                    class="max-h-28 max-w-28 object-contain hover:scale-105 transition" alt="Supporter" />
            @endforeach
        </div>
    </section>
@endif


<section class="bg-white dark:bg-gray-900">
    <div
        class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="{{ asset('images/cooking.png') }}" alt="dashboard image">
        <img class="w-full hidden dark:block"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg"
            alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h1 class="font-bold text-3xl lg:text-5xl italic md:mb-6">Sudah makan <span class="text-red-600">ayam dan
                    telur</span> hari ini ?</h1>
            <h2 class="text-sm text-gray-600 lg:text-3xl italic">Yuk, hidup sehat dengan Protein hemat. Siap bantu
                untuk
                memenuhi kebutuhan Resto dan Café kamu !!</h2>
            <a href="#"
                class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>


@if ($howto)
    <section class="px-6 xl:px-32 text-center flex flex-col justify-center items-center mb-24">
        <h1 class="font-bold text-2xl md:text-4xl mb-4 md:mb-12">HOW TO <span class="text-red-600">ORDER</span></h1>
        <p class="max-w-3xl text-sm md:text-base text-gray-500 mb-6">{{ $howto->description }}</p>
        <img src="{{ asset('storage/howto/' . $howto->image) }}" class="object-contain transition"
            alt="How To Guide" />
    </section>
@endif

@if (count($customers) > 0)
    @php
        $loopCount = ceil(count($customers) / 4);
    @endphp
    <!-- CARROUSEL    -->
    <section class="bg-gray-200 py-8">
        <h1 class="font-bold text-2xl md:text-4xl text-center">HAPPY <span class="text-red-600">CUSTOMER</span></h1>
        <h2 class="text-gray-600 text-sm md:text-lg text-center">More Than {{ count($customers) }}+ UMKM</h2>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden h-[700px] sm:h-[600px]">
                {{-- divide by forth item --}}
                @for ($item = 0; $item < $loopCount; $item++)
                    <div class="hidden duration-700 ease-in-out w-full md:py-12" data-carousel-item>
                        <div
                            class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid lg:grid-cols-2 w-full px-6 md:px-24">
                            @for ($i = 0; $i < 4; $i++)
                                @if (count($customers) > $i + $item * 4)
                                    @php
                                        $border = '';
                                        if ($i < 2) {
                                            $border = 'border-b';
                                        } else {
                                            $border = 'border-t';
                                        }
                                        if ($i % 2 == 0) {
                                            $border = $border . ' border-r';
                                        } else {
                                            $border = $border . ' border-l';
                                        }
                                        $customer = $customers[$i + $item * 4];
                                    @endphp

                                    <div
                                        class="flex justify-start items-center gap-6 {{ $border }} border-gray-300 p-4 lg:p-12">
                                        @if ($customer->image)
                                            <img src="{{ asset('storage/customer/' . $customer->image) }}"
                                                alt="Customer"
                                                class="h-12 w-12 xl:h-24 xl:w-24 max-h-32 rounded-full object-contain">
                                        @endif
                                        <div>
                                            <h3 class="font-medium text-lg xl:text-3xl">{{ $customer->title }}</h3>
                                            <p class="text-xs lg:text-base">{{ $customer->description }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                @endfor
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
    </section>
@endif

<footer>
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse mb-4">
                    <img src="{{ asset('storage/logo/' . $identities->logo_black) }}" class="h-12"
                        alt="Beli Ayam Logo" />
                </a>
                <p class="text-gray-600 text-sm max-w-md text-justify">{{ $identities->footer_desc }}</p>
            </div>
            <div class="flex gap-8 sm:gap-16 flex-wrap">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-black">Links</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href={{ route('welcome') }} class="hover:underline ">Home</a>
                        </li>
                        <li class="mb-4">
                            <a href={{ route('showListProduct') }} class="hover:underline">Products</a>
                        </li>
                        <li class="mb-4">
                            <a href={{ route('about') }} class="hover:underline">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:block w-[1px] h-full bg-gray-200"></div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-black">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href={{ route('tos') }} class="hover:underline ">Ketentuan Pengguna
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href={{ route('privacy') }} class="hover:underline">Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:block w-[1px] h-full bg-gray-200"></div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-black">Contacts</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <div class="group flex items-center gap-2">
                                <x-icon link="https://wa.me/{{ $identities->phone }}" alt="Whatsapp number"
                                    path="M12.036 5.339c-3.635 0-6.591 2.956-6.593 6.589-.001 1.483.434 2.594 1.164 3.756l-.666 2.432 2.494-.654c1.117.663 2.184 1.061 3.595 1.061 3.632 0 6.591-2.956 6.592-6.59.003-3.641-2.942-6.593-6.586-6.594zm3.876 9.423c-.165.463-.957.885-1.337.942-.341.051-.773.072-1.248-.078-.288-.091-.657-.213-1.129-.417-1.987-.858-3.285-2.859-3.384-2.991-.099-.132-.809-1.074-.809-2.049 0-.975.512-1.454.693-1.653.182-.2.396-.25.528-.25l.38.007c.122.006.285-.046.446.34.165.397.561 1.372.611 1.471.049.099.083.215.016.347-.066.132-.099.215-.198.33l-.297.347c-.099.099-.202.206-.087.404.116.198.513.847 1.102 1.372.757.675 1.395.884 1.593.983.198.099.314.083.429-.05.116-.132.495-.578.627-.777s.264-.165.446-.099 1.156.545 1.354.645c.198.099.33.149.38.231.049.085.049.482-.116.945zm3.088-14.762h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-6.967 19.862c-1.327 0-2.634-.333-3.792-.965l-4.203 1.103 1.125-4.108c-.694-1.202-1.059-2.566-1.058-3.964.002-4.372 3.558-7.928 7.928-7.928 2.121.001 4.112.827 5.609 2.325s2.321 3.491 2.32 5.609c-.002 4.372-3.559 7.928-7.929 7.928z" />
                                <a href="https://wa.me/{{ $identities->phone }}" target="_blank"
                                    class="group-hover:text-gray-500 text-sm font-light text-gray-800">{{ $identities->phone }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="group flex items-center gap-2 justify-center">
                                <x-icon link="mailto:{{ $identities->email }}" alt="Whatsapp number"
                                    path="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z" />
                                <a href="mailto:{{ $identities->email }}" target="_blank"
                                    class="group-hover:text-gray-500 text-sm font-light text-gray-800">{{ $identities->email }}/</a>
                            </div>
                        </li>
                    </ul>
                    <h2 class="mb-6 mt-6 text-sm font-semibold uppercase text-black">Follow Us</h2>
                    <x-Socials :youtube="$identities->youtube" :instagram="$identities->instagram" :twitter="$identities->twitter" />
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                    href="/" class="hover:underline">beliayam.com™</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>

<!--{{-- Map Chart --}}-->
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/accessibility.js"></script>
<script src="{{ asset('js/highcharts.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>

<script>
    const result = @json($groupedPricings);

    createMap(result);
</script>

</html>
