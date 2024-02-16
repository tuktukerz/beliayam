<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ $seo->title ?? 'About Us - BeliAyam.com' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="description" content="{{ $seo->description ?? '' }}">

    <title>Tentang Kami - Beliayam.com</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<x-Navbar :logo="$identities->logo_black" :phone="$identities->phone" :$formattedPhone />

<main class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
    <h1 class="font-bold text-2xl md:text-4xl text-center my-16">TENTANG <span class="text-red-600">KAMI</span></h1>

    <section class="flex gap-8 justify-center mb-24 flex-col md:flex-row">
        @isset($visions)
            <div class="shadow-md rounded-md p-6 w-full">
                <h2 class="font-bold text-2xl md:text-3xl text-red-600 mb-2">VISION</h2>
                <ul>
                    @foreach ($visions as $vision)
                        <li class="flex gap-2 items-center">
                            <div class="bg-red-600 w-2 h-2 rounded-full"></div>
                            {{ $vision->title }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endisset
        @isset($missions)
            <div class="shadow-md rounded-md p-6 w-full">
                <h2 class="font-bold text-2xl md:text-3xl text-red-600 mb-2">MISSION</h2>
                <ul>
                    @foreach ($missions as $mission)
                        <li class="flex gap-2 items-center">
                            <div class="bg-red-600 w-2 h-2 rounded-full"></div>
                            {{ $mission->title }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endisset
    </section>

    @isset($story)
        <section class="mb-24">
            <h1 class="font-bold text-2xl md:text-4xl mb-4 md:mb-4 text-center uppercase">{{ $story->title }}</span></h1>
            <pre class="whitespace-pre-wrap text-gray-600 font-sans text-justify text-sm sm:text-base">{{ $story->description }}</pre>
        </section>
    @endisset

    @if (count($supports) > 0)
        <section class="flex flex-col justify-center items-center mb-24">
            <h1 class="text-gray-500 text-2xl italic text-center">Didukung Pemerintah dan Organisasi Perunggasan Melalui
                :
            </h1>
            <div
                class="flex flex-wrap p-6 md:p-16 m-6 bg-gray-100 justify-center items-center gap-12 rounded-xl max-w-7xl border-2">
                @foreach ($supports as $support)
                    <img src="{{ asset('storage/support/' . $support->image . '?ver=' . strtotime($support->updated_at)) }}"
                        class="max-h-28 max-w-28 object-contain hover:scale-105 transition" alt="Supporter" />
                @endforeach
            </div>
        </section>
    @endif

    @isset($acitivieties)
        <section class="mb-24">
            <h1 class="font-bold text-2xl md:text-4xl my-4 text-center uppercase">{{ $activities->title }}</h1>

            <div class="flex justify-center">
                <img src="{{ asset('storage/activities/' . $activities->image . '?ver=' . strtotime($activities->updated_at)) }}"
                    alt={{ $activities->type }} class="rounded-3xl max-h-[800px]">
            </div>
        </section>
    @endisset

    @isset($record)
        <section class="mb-24">
            <h1 class="font-bold text-2xl md:text-4xl my-4 text-center uppercase">{{ $roadmap->title }}</h1>

            <div class="flex justify-center">
                <img src="{{ asset('storage/roadmap/' . $roadmap->image . '?ver=' . strtotime($roadmap->updated_at)) }}"
                    alt={{ $roadmap->type }} class="rounded-3xl max-h-[800px]">
            </div>
        </section>
    @endisset

    @isset($places)
        <section class="mb-24 lg:mx-44 flex flex-col gap-6">
            <h1 class="font-bold text-2xl md:text-4xl my-4 text-center uppercase">Kantor Kami</h1>
            @foreach ($places as $place)
                <div class="flex gap-6 flex-col md:flex-row items-center">
                    <div>
                        <img src="{{ asset('storage/place/' . $place->image . '?ver=' . strtotime($place->updated_at)) }}"
                            class="max-h-32 md:max-h-52 max-w-52 object-contain hover:scale-105 transition"
                            alt="Place" />
                    </div>
                    <div>
                        <h2 class="font-bold text-2xl md:text-4xl text-red-600 mb-2 text-center sm:text-left">
                            {{ $place->title }}</h2>
                        <p class="text-sm sm:text-base">{{ $place->description }}</p>
                    </div>
                </div>
            @endforeach
        </section>
    @endisset
</main>

<x-Footer :logo-black="$identities->logo_black" :updated-at="$identities->updated_at" :footer-desc="$identities->footer_desc" :phone="$identities->phone" :$formattedPhone :email="$identities->email"
    :youtube="$identities->youtube" :instagram="$identities->instagram" :twitter="$identities->twitter" />

</html>
