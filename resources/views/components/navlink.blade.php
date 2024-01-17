<li>
    @php
        $pathname = '/' . ($text == 'home' ? '' : $text);
        $isActive = Request::path() == ($text == 'home' ? '/' : $text);
        $activeClass = 'block py-2 px-3 md:p-0 text-white bg-red-700 hover:bg-red-800 md:hover:bg-transparent rounded md:bg-transparent md:text-red-700 md:dark:text-red-500 md:hover:text-red-800 transition';
        $nonActiveClass = 'block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition';
    @endphp
    <a href={{ $pathname }} @class([
        $activeClass => $isActive,
        $nonActiveClass => !$isActive,
    ]) aria-current="page">{{ strtoupper($text) }}</a>
</li>
