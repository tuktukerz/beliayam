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

<x-Navbar :logo="$identities->logo_black" :phone="$identities->phone" :$formattedPhone />

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
        <section class="mb-24">
            <div class="w-full pb-2 flex justify-center items-center">
                <h1 class="font-bold text-2xl md:text-4xl mb-4 md:mb-12">FORM <span class="text-red-600">ORDER</span></h1>
            </div>
            <div class="flex justify-center items-center">
                {!! $formOrder->link !!}
            </div>
        </section>
    @endif
</main>

<x-Footer 
    :logo-black="$identities->logo_black" 
    :updated-at="$identities->updated_at" 
    :footer-desc="$identities->footer_desc" 
    :phone="$identities->phone" 
    :$formattedPhone
    :email="$identities->email" 
    :youtube="$identities->youtube" 
    :instagram="$identities->instagram" 
    :twitter="$identities->twitter" 
/>

</html>
