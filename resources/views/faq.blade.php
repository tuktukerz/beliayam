<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ $seo->title ?? 'About Us - BeliAyam.com' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="description" content="{{ $seo->description ?? '' }}">

    <title>FAQ - Beliayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<x-Navbar :logo="$identities->logo_black" :phone="$identities->phone" :$formattedPhone />

<main class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
    <section class="mb-24 text-center">
            <h1 class="font-bold text-2xl md:text-3xl uppercase">Pertanyaan yang Sering Diajukan (FAQ)</h1>
        @foreach ($faqs as $faq)
        <div class="*:font-sans mb-6">
            <h2 class="font-bold text-xl mb-4">{{ $loop->iteration . '. ' . $faq->question }}</h2>
            <pre class="whitespace-pre-wrap text-gray-600">{{ $faq->answer }}</pre>
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
