<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>beliayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<section class='py-2 bg-gray-800 text-white text-right px-10 flex items-center justify-center sm:justify-between gap-4'>
    <x-Socials :youtube="$identities->youtube" :instagram="$identities->instagram" :twitter="$identities->twitter"/>
    <div class="flex gap-2">
        <div class="group flex items-center gap-2 justify-center">
            <x-icon link="https://wa.me/{{ $identities->phone }}" alt="Whatsapp number"
                    path="M12.036 5.339c-3.635 0-6.591 2.956-6.593 6.589-.001 1.483.434 2.594 1.164 3.756l-.666 2.432 2.494-.654c1.117.663 2.184 1.061 3.595 1.061 3.632 0 6.591-2.956 6.592-6.59.003-3.641-2.942-6.593-6.586-6.594zm3.876 9.423c-.165.463-.957.885-1.337.942-.341.051-.773.072-1.248-.078-.288-.091-.657-.213-1.129-.417-1.987-.858-3.285-2.859-3.384-2.991-.099-.132-.809-1.074-.809-2.049 0-.975.512-1.454.693-1.653.182-.2.396-.25.528-.25l.38.007c.122.006.285-.046.446.34.165.397.561 1.372.611 1.471.049.099.083.215.016.347-.066.132-.099.215-.198.33l-.297.347c-.099.099-.202.206-.087.404.116.198.513.847 1.102 1.372.757.675 1.395.884 1.593.983.198.099.314.083.429-.05.116-.132.495-.578.627-.777s.264-.165.446-.099 1.156.545 1.354.645c.198.099.33.149.38.231.049.085.049.482-.116.945zm3.088-14.762h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-6.967 19.862c-1.327 0-2.634-.333-3.792-.965l-4.203 1.103 1.125-4.108c-.694-1.202-1.059-2.566-1.058-3.964.002-4.372 3.558-7.928 7.928-7.928 2.121.001 4.112.827 5.609 2.325s2.321 3.491 2.32 5.609c-.002 4.372-3.559 7.928-7.929 7.928z"/>
            <a href="https://wa.me/{{ $identities->phone }}" target="_blank"
               class="group-hover:text-yellow-300 text-lg font-light text-gray-300">{{ $identities->phone }}</a>
        </div>
    </div>
</section>

<x-Navbar :logo="$identities->logo_black"/>


<section class="px-6 xl:px-32 text-center flex flex-col justify-center items-center mb-24">
    <h1 class="font-bold text-2xl md:text-4xl">Our <span class="text-red-600">Product</span></h1>
    <section class="flex justify-center items-center mb-24 mx-6">
        <div class="flex rounded-3xl lg:rounded-[6.5rem] overflow-hidden md:px-16 py-6 gap-8 flex-col md:flex-row">
            @foreach ($products as $product)
            @php
            // Format the price
            $formattedNumber = number_format($product->price);

            // Add the Rupiah symbol
            $formattedNumber = 'Rp ' . $formattedNumber;
            @endphp
            <div
                class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                    <img class="object-cover"
                         src="{{ asset('storage/product/' . $product->image) }}"
                         alt="product image"/>
                </a>
                <div class="mt-4 px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl tracking-tight text-slate-900 text-left">{{ $product->name }}</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">{{ $formattedNumber }}</span>
                            <span class="text-sm text-slate-900">/ {{ $product->piece }}</span>
                        </p>
                    </div>
                    <a href="https://wa.me/{{ $identities->phone }}?text=asdadasd"
                       class="flex items-center justify-center rounded-md bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Chat Kami
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</section>


<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse mb-4">
                <img src="{{ asset('storage/logo/' . $identities->logo_light) }}" class="h-12"
                     alt="Beli Ayam Logo"/>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Products</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 Beliayam.com. All Rights Reserved.</span>
    </div>
</footer>


</html>
