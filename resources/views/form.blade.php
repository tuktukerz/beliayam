<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ $seo->title ?? 'About Us - BeliAyam.com' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="description" content="{{ $seo->description ?? '' }}">

    <title>Pemesanan - Beliayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<x-Navbar :logo="$identities->logo_black" :phone="$identities->phone" />

<main class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
    @if ($howto)
        <section class="px-6 xl:px-32 text-center flex flex-col justify-center items-center mb-24">
            <h1 class="font-bold text-2xl md:text-4xl mb-4 md:mb-12">CARA <span class="text-red-600">MEMESAN</span></h1>
            <p class="max-w-3xl text-sm md:text-base text-gray-500 mb-6">{{ $howto->description }}</p>
            <img src="{{ asset('storage/howto/' . $howto->image . '?ver=' . strtotime($howto->updated_at)) }}"
                class="object-contain transition" alt="How To Guide" />
        </section>
    @endif

    @if ($formOrder)
        <section id="form_order">
            <div class="my-6 border-b-2 border-red-600 w-fit pb-2">
                <h1 class="font-bold text-2xl md:text-3xl">Form Order</h1>
            </div>
            <div class="flex justify-center items-center">
                {!! $formOrder->link !!}
            </div>
        </section>
    @endif
</main>

<footer>
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse mb-4">
                    <img src="{{ asset('storage/logo/' . $identities->logo_black . '?ver=' . strtotime($identities->updated_at)) }}"
                        class="h-12" alt="Beli Ayam Logo" />
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
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/"
                    class="hover:underline">beliayam.com™</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>

</html>
