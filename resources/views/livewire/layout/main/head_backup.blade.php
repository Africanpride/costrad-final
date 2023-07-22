<header
    class="  flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-md  py-4 bg-white backdrop-blur-md
md:backdrop-blur-none dark:bg-gray-900 text-sm  sticky top-0 inset-x-0  sm:justify-start sm:flex-nowrap
 border-b  sm:py-0  dark:border-gray-700/50">

    <nav class="max-w-[85rem] flex flex-wrap justify-between items-center w-full mx-auto px-4 sm:px-6 lg:px-8 py-3"
        aria-label="Global">

        <x-admin.branding />

        <div class="flex justify-end items-center">

            <div id="navbar-collapse-with-animation"
                class="hs-collapse overflow-hidden transition-all duration-300 basis-full grow ml-auto md:block md:w-auto md:basis-auto md:order-2 hidden">

                    <div
                        class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:pl-7 md:divide-y-0 md:divide-solid dark:divide-gray-700 px-2">

                        <a href="{{ url('/') }}"
                            class="py-3 md:py-6 text-firefly-700 dark:text-firefly-200 hover:text-firefly-500
                                hover:dark:text-firefly-300
                                    {{ Request::is('home') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }}
                                    ">{{ __('Home') }}
                                                        </a>
                                                        <a href="{{ url('about') }}"
                                                            class="py-3 md:py-6 text-firefly-700 dark:text-firefly-200 hover:text-firefly-500
                                hover:dark:text-firefly-300
                                    {{ Request::is('about') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }}
                                    ">{{ __('About') }}
                                                        </a>
                                                        <a href="{{ url('news') }}"
                                                            class="py-3 md:py-6 text-firefly-700 dark:text-firefly-200 hover:text-firefly-500
                                hover:dark:text-firefly-300
                                    {{ Request::is('news') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }}
                                    ">{{ __('News') }}
                        </a>
                        <a href="{{ route('institute.show', [$costrad->slug]) }}"
                            class="py-3 md:py-6 text-firefly-700 dark:text-firefly-200 hover:text-firefly-500
                        hover:dark:text-firefly-300
                            {{ Request::is('costrad') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }}
                            ">{{ __('COSTrAD') }}
                        </a>

                        <livewire:institutes-list />



                        <div class="pt-3 md:pt-0">
                            <a class="inline-flex justify-center items-center gap-x-2 text-center bg-firefly-600 hover:bg-firefly-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-firefly-600 focus:ring-offset-2 focus:ring-offset-white transition py-1 px-3 dark:focus:ring-offset-gray-800"
                                href="{{ url('donate') }}">
                                {{ __('Donate') }}
                            </a>
                        </div>

                    </div>


                </div>
            </div>

            <div class="flex items-center gap-x-3 ">
                <div
                    class="before:bg-gray-300 dark:before:bg-gray-700 flex gap-4 items-center justify-between md:border-l ml-3 border-gray-500/10 border- spacing-y-4">
                    <a class="" href="https://www.youtube.com/@costrad6590" target="_blank">
                        <img class="h-4" src="{{ asset('images/main/youtube.png') }}" />
                    </a>
                    <x-admin.dark-switch />
                    <livewire:main-auth-indicator />
                </div>


                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-firefly-600 transition-all text-sm dark:bg-firefly-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>

            </div>

        </div>


    </nav>

</header>
