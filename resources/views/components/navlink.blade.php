<li>
    @php
        $pathname = '/' . ($text == 'home' ? '' : $text);
        $isActive = Request::is($pathname);
        $activeClass = 'block py-2 px-3 text-white bg-yellow-300 rounded md:bg-transparent md:text-yellow-300 md:p-0  md:py-6 md:border-b-8 md:border-yellow-300 md:rounded-none';
        $nonActiveClass = 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:py-6 ';
    @endphp
    <a href={{ $pathname }} @class([
        $activeClass => $isActive,
        $nonActiveClass => !$isActive,
    ]) aria-current="page">{{ strtoupper($text) }}</a>
</li>
