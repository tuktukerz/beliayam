<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ $seo->title ?? 'Product List - BeliAyam.com' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="description" content="{{ $seo->description ?? '' }}">

    <title>List Produk - Beliayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<x-Navbar :logo="$identities->logo_black" :phone="$identities->phone" :$formattedPhone />


<section class="px-6 xl:px-32 text-center flex flex-col justify-center items-center mb-24">
    <h1 class="font-bold text-2xl md:text-4xl text-center my-16 uppercase">Produk <span class="text-red-600">Kami</span></h1>
    <section class="mb-24 mx-6 w-full">
        <div
            class="rounded-3xl lg:rounded-[6.5rem] overflow-hidden py-6 gap-8 grid grid-cols-fit justify-center">
            @foreach ($products as $product)
            @php
            // Format the price
            $formattedNumber = number_format($product->price);

            // Add the Rupiah symbol
            $formattedNumber = 'Rp ' . $formattedNumber;
            @endphp
            <div
                class="relative flex max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md grow">
                <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                    <img class="object-cover w-full"
                         src="{{ $product->image ? asset('storage/product/' . $product->image . '?ver=' . strtotime($product->updated_at)) : asset('storage/product/default-product.jpg') }}"
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
                    <a href="https://wa.me/{{ $identities->phone }}?text=Tentang produk {{$product->name}} dengan harga {{ $formattedNumber }}"
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
