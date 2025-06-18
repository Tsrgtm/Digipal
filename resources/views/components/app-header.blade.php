<header
    class="bg-white dark:bg-stone-950 border-b-[.5px] border-stone-200 dark:border-stone-800 transition-all duration-300 ease-in-out">

    <div class="grid grid-cols-2 justify-between items-center px-4 sm:px-6 lg:px-4 py-2 max-w-7xl mx-auto">
        <a href="/" class="flex items-center justify-start gap-2 transition-all duration-300 ease-in-out">
            <img src="{{ asset('assets/images/logo.png') }}" class="h-10" alt="Digipal Logo">
        </a>

        <nav class="hidden  gap-2 items-center justify-center transition-all duration-300 ease-in-out">

            <a href="/"
                class="text-zinc-600 dark:text-zinc-400 hover:bg-green-50 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-1 rounded-full transition-all duration-300 ease-in-out">
                Services
            </a>

            <a href="/"
                class="text-zinc-600 dark:text-zinc-400 hover:bg-green-50 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-1 rounded-full transition-all duration-300 ease-in-out">
                Portfolio
            </a>

            <a href="/"
                class="text-zinc-600 dark:text-zinc-400 hover:bg-green-50 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-1 rounded-full transition-all duration-300 ease-in-out">
                About
            </a>

            <a href="/"
                class="text-zinc-600 dark:text-zinc-400 hover:bg-green-50 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-1 rounded-full transition-all duration-300 ease-in-out">
                Blog
            </a>

            <a href="/"
                class="text-zinc-600 dark:text-zinc-400 hover:bg-green-50 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-1 rounded-full transition-all duration-300 ease-in-out">
                Contact
            </a>

        </nav>

        <div class="flex items-center space-x-4 justify-end">
            <button id="theme-toggle"
                class="p-2 text-zinc-600 dark:text-zinc-400 hover:bg-green-50 dark:hover:bg-green-900 hover:text-green-600 dark:hover:text-green-400 rounded-full transition-all duration-300 ease-in-out">
                <flux:icon.sun class="h-6 w-6 dark:hidden" />
                <flux:icon.moon class="h-6 w-6 hidden dark:inline" />
            </button>
            <a href="{{ route('proposal') }}" class="relative secondary-button hidden sm:inline-flex">
                Request a proposal
            </a>
            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open"
                    class="relative w-10 h-10 border border-transparent rounded-full font-medium text-white bg-gradient-to-b from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 transition duration-300 ease-in-out">
                    <div x-show="!open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95">
                        <flux:icon.bars-3-bottom-right
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6" />
                    </div>
                    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95">
                        <flux:icon.x-mark
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6" />
                    </div>

                    <span class="sr-only">Open main menu</span>
                </button>
                <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-2"
                    class="absolute w-48 top-full right-0 mt-2 p-1 rounded-md bg-white dark:bg-stone-950 border border-stone-200 dark:border-stone-800 shadow z-10">
                    <div class="flex flex-col gap-1 w-full dark:text-zinc-400">
                        <a href="/"
                            class="hover:bg-green-50 dark:hover:bg-green-900 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-2 rounded-md transition-all duration-300 ease-in-out">
                            Services
                        </a>
                        <a href="/"
                            class="hover:bg-green-50 dark:hover:bg-green-900 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-2 rounded-md transition-all duration-300 ease-in-out">
                            Portfolio
                        </a>
                        <a href="{{ route('about') }}"
                            class="hover:bg-green-50 dark:hover:bg-green-900 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-2 rounded-md transition-all duration-300 ease-in-out">
                            About
                        </a>
                        <a href="{{ route('blogs') }}"
                            class="hover:bg-green-50 dark:hover:bg-green-900 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-2 rounded-md transition-all duration-300 ease-in-out">
                            Blogs
                        </a>
                        <a href="{{ route('contact') }}"
                            class="hover:bg-green-50 dark:hover:bg-green-900 hover:text-green-600 dark:hover:text-green-400 font-medium px-3 py-2 rounded-md transition-all duration-300 ease-in-out">
                            Contact
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
