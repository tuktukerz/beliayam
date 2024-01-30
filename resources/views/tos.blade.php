<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ $seo->title ?? 'Beli Ayam.com' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="description" content="{{ $seo->description ?? '' }}">

    <title>Terms Of Service</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<x-Navbar :logo="$identities->logo_black" :phone="$identities->phone" :$formattedPhone />

<main class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
    <section>
        <h1 class="text-red-600 font-bold text-2xl md:text-4xl text-center my-16">SYARAT & KETENTUAN PENGGUNA</h1>
        @foreach ($tos as $item)
        <div class="*:font-sans mb-6">
            <h2 class="font-bold text-xl mb-4">{{ $loop->iteration . '. ' . $item->title }}</h2>
            <pre class="whitespace-pre-wrap text-gray-600">{{ $item->description }}</pre>
        </div>
        @endforeach
    </section>
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
