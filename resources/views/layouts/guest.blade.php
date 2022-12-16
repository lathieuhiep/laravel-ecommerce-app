<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-gray-200">
        <div>
            <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-50">
                <div x-show="open"
                     class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true"
                >
                    <div x-show="open"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="fixed inset-0 bg-black bg-opacity-25" @click="open = false" aria-hidden="true"
                    ></div>

                    <div x-show="open"
                         x-transition:enter="transition ease-in-out duration-300 transform"
                         x-transition:enter-start="-translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transition ease-in-out duration-300 transform"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="-translate-x-full"
                         class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto"
                    >
                        <div class="px-4 pt-5 pb-2 flex">
                            <button @click="open = false" type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Women</a>
                            </div>

                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Men</a>
                            </div>

                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Kid</a>
                            </div>

                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Accessories</a>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
                            </div>
                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                            <!-- Currency selector -->
                            <form>
                                <div class="inline-block">
                                    <label for="mobile-currency" class="sr-only">Currency</label>
                                    <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                        <select id="mobile-currency" name="currency" class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">
                                            <option>CAD</option>

                                            <option>USD</option>

                                            <option>AUD</option>

                                            <option>EUR</option>

                                            <option>GBP</option>
                                        </select>
                                        <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <header class="relative">
                    <nav aria-label="Top">
                        <!-- Top navigation -->
                        <div class="bg-gray-900">
                            <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                                <!-- Currency selector -->
                                <form>
                                    <div>
                                        <label for="desktop-currency" class="sr-only">Currency</label>
                                        <div class="-ml-2 group relative bg-gray-900 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                            <select id="desktop-currency" name="currency" class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">
                                                <option>CAD</option>

                                                <option>USD</option>

                                                <option>AUD</option>

                                                <option>EUR</option>

                                                <option>GBP</option>
                                            </select>
                                            <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="flex items-center space-x-6">
                                    <a href="{{ route('login') }}" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                                    <a href="{{ route('register') }}" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                                </div>
                            </div>
                        </div>

                        <!-- Secondary navigation -->
                        <div class="bg-white shadow-sm">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="h-16 flex items-center justify-between">
                                    <!-- Logo (lg+) -->
                                    <div class="hidden lg:flex-1 lg:flex lg:items-center">
                                        <a href="/">
                                            <span class="sr-only">{{ config('app.name') }}</span>
                                            <x-application-logo class="h-8 w-auto text-indigo-500 fill-current" />
                                        </a>
                                    </div>

                                    <div class="hidden h-full lg:flex">
                                        <!-- Flyout menus -->
                                        <div class="px-4 bottom-0 inset-x-0">
                                            <div class="h-full flex justify-center space-x-8">
                                                <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Women</a>

                                                <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Men</a>

                                                <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Kid</a>

                                                <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Accessories</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mobile menu and search (lg-) -->
                                    <div class="flex-1 flex items-center lg:hidden">
                                        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                        <button @click="open = true" type="button" class="-ml-2 bg-white p-2 rounded-md text-gray-400">
                                            <span class="sr-only">Open menu</span>
                                            <!-- Heroicon name: outline/menu -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </button>

                                        <!-- Search -->
                                        <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Search</span>
                                            <!-- Heroicon name: outline/search -->
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                    </div>

                                    <!-- Logo (lg-) -->
                                    <a href="#" class="lg:hidden">
                                        <span class="sr-only">{{ config('app.name') }}</span>
                                        <x-application-logo class="h-8 w-auto text-indigo-500 fill-current" />
                                    </a>

                                    <div class="flex-1 flex items-center justify-end">
                                        <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block"> Search </a>

                                        <div class="flex items-center lg:ml-8">
                                            <!-- Help -->
                                            <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:hidden">
                                                <span class="sr-only">Help</span>
                                                <!-- Heroicon name: outline/question-mark-circle -->
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Help</a>

                                            <!-- Cart -->
                                            <div class="ml-4 flow-root lg:ml-8">
                                                <a href="#" class="group -m-2 p-2 flex items-center">
                                                    <!-- Heroicon name: outline/shopping-bag -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                    </svg>
                                                    <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                                    <span class="sr-only">items in cart, view bag</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                <main class="max-w-7xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </main>

                <footer aria-labelledby="footer-heading" class="bg-white border-t border-gray-200">
                    <h2 id="footer-heading" class="sr-only">Footer</h2>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="py-20">
                            <div class="grid grid-cols-1 md:grid-cols-12 md:grid-flow-col md:gap-x-8 md:gap-y-16 md:auto-rows-min">
                                <!-- Image section -->
                                <div class="col-span-1 md:col-span-2 lg:row-start-1 lg:col-start-1">
                                    <x-application-logo class="h-8 w-auto text-indigo-500 fill-current" />
                                </div>

                                <!-- Sitemap sections -->
                                <div class="mt-10 col-span-6 grid grid-cols-2 gap-8 sm:grid-cols-3 md:mt-0 md:row-start-1 md:col-start-3 md:col-span-8 lg:col-start-2 lg:col-span-6">
                                    <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">Products</h3>
                                            <ul role="list" class="mt-6 space-y-6">
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Bags </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Tees </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Objects </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Home Goods </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Accessories </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">Company</h3>
                                            <ul role="list" class="mt-6 space-y-6">
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Who we are </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Sustainability </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Press </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Careers </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Terms &amp; Conditions </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Privacy </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                                        <ul role="list" class="mt-6 space-y-6">
                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> Contact </a>
                                            </li>

                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> Shipping </a>
                                            </li>

                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> Returns </a>
                                            </li>

                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> Warranty </a>
                                            </li>

                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> Secure Payments </a>
                                            </li>

                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> FAQ </a>
                                            </li>

                                            <li class="text-sm">
                                                <a href="#" class="text-gray-500 hover:text-gray-600"> Find a store </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Newsletter section -->
                                <div class="mt-12 md:mt-0 md:row-start-2 md:col-start-3 md:col-span-8 lg:row-start-1 lg:col-start-9 lg:col-span-4">
                                    <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                                    <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                                    <form class="mt-2 flex sm:max-w-md">
                                        <label for="newsletter-email-address" class="sr-only">Email address</label>
                                        <input id="newsletter-email-address" type="text" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                        <div class="ml-4 flex-shrink-0">
                                            <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 py-10 text-center">
                            <p class="text-sm text-gray-500">&copy; 2021 {{ config('app.name') }}, Inc. All rights reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
