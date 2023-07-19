<x-front-layout>

    <section class="relative z-20 overflow-hidden p-6 pt-24 pb-12 ">
        <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[920px] text-center md:mb-20 space-y-3">
                <x-top-title>
                    COSTrAD: Counting on Your Generous Contribution
                    <x-slot name="icon">
                        <x-lucide-wallet class="dark:text-white  w-5 h-5 " />
                    </x-slot>


                    <x-slot name="paragraph">
                        Each donation made to (<a href="{{ url('costrad') }}"
                            class=" bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 font-bold">COSTrAD</a>)
                        has a significant effect that extends well beyond our walls. Your contribution will make the
                        difference as we raise effective leaders for tomorrow. Thank you for your support.

                    </x-slot>

                </x-top-title>
            </div>
        </div>
        <!-- giving -->
        <!-- Testimonials -->
    </section>
    <!-- Hero -->
    <section class="text-center w-full">
        <x-jet-validation-errors class="" />

    </section>
    <section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid -->

        <div class="border-gray-500/20 gap-4 grid md:border md:gap-8 md:items-center md:p-2 rounded-3xl xl:gap-20">
            <div class="p-4 md:p-8 space-y-5">
                <h1
                    class="block text-2xl font-bold text-gray-800 sm:text-3xl lg:text-5xl lg:leading-tight dark:text-white">
                    <span class="prominent-titles">COSTrAD</span>
                    Giving Guide
                </h1>

                <p class="mt-3 text-lg text-gray-800 dark:text-gray-400 max-w-5xl">
                    {{ __('We present several payment options, including Discover, MasterCard, American Express, Paypal, and Visa. Our customer service team is available to take your call between 9 a.m. and 5 p.m. UTC, and we would be happy to assist you with any questions or concerns.') }}
                </p>


                <!-- Buttons -->
                <div class="py-5  w-full  ">

                    <div class="cursor-pointer" data-hs-overlay="#donate">
                        <img src="{{ asset('images/main/all-cards.png') }}" alt="Donate with Paypal or Credit Card"
                            class="w-auto rounded-md">
                    </div>

                </div>

                <div class="w-auto text-center">
                    {{-- <x-jet-validation-errors class="" /> --}}

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                <!-- End Buttons -->
                <div class="grid grid-cols-2 gap-3">

                    <div id="trigger-donation"
                        class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                        <div
                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                            <div
                                class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                <div class="absolute top-2 right-2">
                                    <button type="button"
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                                        data-hs-overlay="#trigger-donation">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="p-4 sm:p-10 overflow-y-auto">
                                    <div class="mb-6 text-center">
                                        <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                            {{ __('Donation') }}
                                        </h3>
                                        <p class="text-gray-500 text-[10px]">
                                            {{ __('We do not store any credit card information on the server. 100% secure                                                                                                     payments are processed by PayStack and PayPal. This site is secured by SSL                                                                                                     encryption.') }}


                                        </p>
                                    </div>
                                    <div x-data="{ toggle: false }">
                                        <form method="POST" action="{{ route('donation.store') }}"
                                            accept-charset="UTF-8" class="form-horizontal d-none" role="form">
                                            @csrf
                                            <div class="space-y-4">
                                                <!-- Card -->
                                                <div
                                                    class=" flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
                                                    <label for="hs-account-activity" class="flex p-4 md:p-5">
                                                        <span class="flex mr-5">
                                                            <svg class="flex-shrink-0 mt-1 w-5 h-5 text-gray-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                            </svg>

                                                            <span class="ml-5">
                                                                <span
                                                                    class="block font-medium text-gray-800 dark:text-gray-200">
                                                                    Donate Anonymously
                                                                </span>
                                                                <span class="block text-sm text-gray-500">Yes, you can
                                                                    choose to make your donations anonymous. Simply tick
                                                                    the
                                                                    box marked ‘Donate Anonymously’. Thank.</span>
                                                            </span>
                                                        </span>

                                                        <input type="checkbox" id="hs-account-activity" x-model="toggle"
                                                            value="boolean" name="anonymousDonation"
                                                            class="transition duration-500 delay-700 ease-in-out relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-firefly-600 rounded-full cursor-pointer border border-transparent ring-1 ring-transparent focus:border-firefly-600 focus:ring-firefly-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-firefly-600 dark:focus:ring-offset-gray-800 before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-firefly-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-firefly-200">
                                                    </label>
                                                </div>

                                                <div class="space-y-3 transition duration-500 delay-700 ease-in-out "
                                                    x-show="!toggle">
                                                    <div>

                                                        <div class="flex justify-between items-center">
                                                            <label for="name"
                                                                class="block text-sm font-medium mb-2 dark:text-white">Name</label>
                                                            <span
                                                                class="block text-sm text-gray-500 mb-2">Optional</span>
                                                        </div>
                                                        <input type="text" id="with-corner-hint" name="name"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-firefly-500 focus:ring-firefly-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                            @auth value="{{ Auth::user()->name }}" @endauth
                                                            class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-firefly-500 focus:ring-firefly-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                            placeholder="Name"
                                                            @auth placeholder="{{ Auth::user()->name }}" @endauth>
                                                        <!-- End Card -->
                                                    </div>
                                                    <div>
                                                        <div class="flex justify-between items-center">
                                                            <label for="email"
                                                                class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                                                            <span
                                                                class="block text-sm text-gray-500 mb-2">Optional</span>
                                                        </div>
                                                        <div class="relative">
                                                            <input type="email" id="hs-leading-icon" name="email"
                                                                @auth
value="{{ Auth::user()->email }}" @endauth
                                                                class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-firefly-500 focus:ring-firefly-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                                placeholder="you@site.com"
                                                                @auth placeholder="{{ Auth::user()->email }}" @endauth>
                                                            <div
                                                                class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                                                <svg class="h-4 w-4 text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                    <label for="hs-input-with-leading-and-trailing-icon"
                                                        class="block text-sm font-medium mb-2 dark:text-white">Amount</label>
                                                    <div class="relative">
                                                        <input type="number" name="amount"
                                                            id="hs-input-with-leading-and-trailing-icon"
                                                            class="py-3 px-4 pl-9 pr-16 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-firefly-500 focus:ring-firefly-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                            placeholder="0.00" required>
                                                        <div
                                                            class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                                            <span class="text-gray-500">$</span>
                                                        </div>
                                                        <div
                                                            class="absolute inset-y-0 right-0 flex items-center pointer-events-none z-20 pr-4">
                                                            <span class="text-gray-500">USD</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Button -->
                                                <div class=" flex justify-between gap-x-2">
                                                    <button type="reset"
                                                        class="py-1 px-3 w-full inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-firefly-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                        <x-lucide-x class="w-4 h-4 text-current" />
                                                        <span>Reset</span>
                                                    </button>
                                                    <button
                                                        class=" flex justify-center items-center w-full rounded-md bg-firefly-600 px-3 py-1 text-center text-sm font-semibold text-white shadow-sm hover:bg-firefly-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-firefly-600 dark:bg-firefly-800 dark:hover:bg-firefly-700 dark:focus-visible:outline-firefly-800"
                                                        href="#">
                                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                                            <path
                                                                d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                        </svg>
                                                        <span class="px-2"> Initiate Donation</span>
                                                    </button>
                                                </div>
                                                <!-- End Buttons -->
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <button type="button"
                        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-gray-200
                        dark:border-gray-800 font-semibold bg-white dark:bg-gray-950 dark:text-gray-300 text-gray-500 transition-all hover:border-gray-300 text-md"
                        data-hs-overlay="#trigger-donation">
                        Click Here To Donate
                        <x-lucide-arrow-right-circle class="w-6 h-6 text-current" />
                    </button>

                    <button type="button"
                        class="py-2 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all dark:focus:ring-offset-gray-800 text-md"
                        data-hs-overlay="#donate-via-paypal">
                        Donate Via PayPal
                        <x-bi-paypal class="w-5 h-5 text-current" />
                    </button>




                </div>

            </div>
            <!-- End Col -->


            <div
                class="min-h-[35vh] bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[75vh]"
                style="background-image: url('{{ asset('images/main/donate2.jpg') }}');">
                <div
                    class="md:absolute bottom-0 left-0 right-0 md:max-w-4xl text-center mx-auto p-6 md:left-auto md:text-left md:mx-0">
                    <!-- Card -->
                    <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7 dark:bg-gray-800 space-y-3 text-[13px]">
                        <div class=" md:block">
                            <h3 class="text-lg font-bold text-gray-800 sm:text-2xl dark:text-gray-200">Bank Account Details</h3>
                            <p class="mt-2 text-gray-800 dark:text-gray-200">
                                <span class="font-bold">Holder:</span>  <span class="text-firefly-500">Kingdom Resources Switzerland.</span> <br />
                                <span class="font-bold">Bank:</span>  <span class="text-firefly-500">CREDIT SUISSE (Switzerland) Ltd.</span> <br />
                                <span class="font-bold">Account Number:</span>  <span class="text-firefly-500">1335725-82-8</span> <br />
                                <span class="font-bold">IBAN:</span>  <span class="text-firefly-500">CH35 0483 5133 5725 8200 8</span> <br />
                                <span class="font-bold">Currency:</span>  <span class="text-firefly-500">US Dollars</span> <br />
                                <span class="font-bold">Account Type:</span>  <span class="text-firefly-500"> Current Account</span> <br />
                                {{-- <span class="font-bold">Account Name:</span>  <span class="text-firefly-500"> LRF USD</span> <br /> --}}
                                <span class="font-bold">BIC / SWIFT:</span>  <span class="text-firefly-500">CRESCHZZ80A</span> <br />
                                <span class="font-bold">Clearing number:</span>  <span class="text-firefly-500">4835</span> <br />
                            </p>
                        </div>


                    </div>
                    <!-- End Card -->
                </div>
            </div>



        </div>
        <!-- End Grid -->
    </section>
    <!-- End Hero -->

    <section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="border-gray-500/20 gap-4 grid md:border md:gap-8 md:items-center md:p-2 rounded-3xl xl:gap-20">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute left-0 -z-[1]">
                <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20">
                </div>
            </div>

            <!-- Grid -->
            <div class="md:grid md:grid-cols-8 md:gap-8 md:items-center place-items-center">
                <div class="hidden md:block md:col-span-3">
                    <img class="aspect-video h-96 rounded-2xl" src="{{ asset('images/main/cheque_.jpg') }}"
                        alt="Image Description">
                </div>
                <!-- End Col -->

                <div class="md:col-span-5 h-auto ">
                    <!-- Blockquote -->
                    <blockquote class="space-y-3">
                        <div class="space-y-2">
                            <svg class="w-16 h-16 text-gray-800 dark:text-white" viewBox="0 -9 58 58" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g clip-path="url(#clip0_1503_2376)">
                                        <g clip-path="url(#clip1_1503_2376)">
                                            <path
                                                d="M3.5614 0.5H54.4386C56.1256 0.5 57.5 1.87958 57.5 3.58974V36.4103C57.5 38.1204 56.1256 39.5 54.4386 39.5H3.5614C1.87437 39.5 0.5 38.1204 0.5 36.4103V3.58974C0.5 1.87958 1.87437 0.5 3.5614 0.5Z"
                                                stroke="#F3F3F3"></path>
                                            <path d="M49.5 8.5H8.5V31.5H49.5V8.5Z" fill="#D9DDE1"></path>
                                            <path d="M46 16H36V19H46V16Z" fill="white"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M32 16H12V17H32V16ZM24 27H12V28H24V27ZM12 24H20V25H12V24ZM28 19H12V20H28V19Z"
                                                fill="#001018"></path>
                                            <path d="M50 8H8V12H50V8Z" fill="white"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M36.7051 24.5019C36.7041 24.5028 36.7032 24.5037 36.7022 24.5047C36.6753 24.5317 36.6403 24.5774 36.6049 24.6407C36.5702 24.7027 36.5419 24.7697 36.523 24.8304C36.5137 24.8603 36.5076 24.8859 36.5039 24.9061C36.5021 24.9161 36.5011 24.9239 36.5006 24.9296C36.5 24.9348 36.5 24.9374 36.5 24.9374V24.9373C36.5 25.2135 36.2761 25.4373 36 25.4373C35.7239 25.4373 35.5 25.2135 35.5 24.9373C35.5 24.6778 35.6043 24.3812 35.7321 24.1527C35.7998 24.0316 35.8869 23.9061 35.9941 23.7986C36.0979 23.6945 36.2475 23.5803 36.4425 23.5316C37.1017 23.3668 37.5808 23.8553 37.8258 24.176C38.0855 24.516 38.2812 24.9256 38.3881 25.1494C38.3944 25.1625 38.4003 25.1749 38.406 25.1867C38.4856 25.3527 38.5367 25.5599 38.5756 25.7292C38.5901 25.7925 38.6036 25.8534 38.6167 25.913C38.6434 26.0343 38.6689 26.15 38.7001 26.2688C38.7458 26.4431 38.7924 26.5761 38.8422 26.6679C38.8718 26.7225 38.8925 26.7438 38.8995 26.7501C38.9607 26.7725 38.9804 26.7621 38.9881 26.7581C38.9886 26.7578 38.989 26.7576 38.9894 26.7574C39.0157 26.7445 39.0705 26.7027 39.138 26.5943C39.2755 26.3734 39.3637 26.0409 39.3935 25.8055C39.3982 25.7687 39.3956 25.7 39.3777 25.5681C39.3742 25.5425 39.37 25.5131 39.3653 25.4812C39.3505 25.3794 39.3319 25.2516 39.3237 25.1368C39.3129 24.9843 39.3117 24.7717 39.3933 24.5653C39.4865 24.3293 39.6705 24.1447 39.9364 24.0516C40.6483 23.8025 41.1902 24.2474 41.5063 24.5797C41.6474 24.7281 41.7816 24.8944 41.8957 25.036C41.9167 25.0621 41.9371 25.0873 41.9567 25.1115C42.0952 25.2821 42.1935 25.3942 42.2743 25.46C42.3875 25.5523 42.4453 25.5537 42.4639 25.5535C42.4964 25.553 42.5564 25.5401 42.6687 25.4724C42.7553 25.4202 42.8349 25.3607 42.9359 25.2852C42.9765 25.2549 43.0206 25.2219 43.07 25.1858C43.2227 25.0742 43.4204 24.938 43.6501 24.8519C43.9092 24.7548 44.3436 24.6412 44.7726 24.6191C44.9875 24.608 45.2274 24.6182 45.4531 24.6814C45.6803 24.7449 45.9306 24.8736 46.0985 25.1255C46.2517 25.3552 46.1896 25.6657 45.9598 25.8189C45.7305 25.9717 45.4208 25.9102 45.2674 25.6815C45.2671 25.6811 45.2668 25.6806 45.2664 25.6802C45.2669 25.6808 45.2673 25.6813 45.2676 25.6817C45.2675 25.6817 45.2674 25.6816 45.2674 25.6815C45.2627 25.6771 45.2421 25.6607 45.1837 25.6444C45.0998 25.6209 44.9782 25.6098 44.8242 25.6177C44.5153 25.6337 44.1823 25.7203 44.0012 25.7882C43.9076 25.8233 43.8026 25.889 43.6601 25.9932C43.6322 26.0135 43.6014 26.0366 43.5685 26.0612C43.4559 26.1455 43.318 26.2487 43.1848 26.3289C43.0035 26.4381 42.7642 26.5493 42.4783 26.5534C42.1786 26.5577 41.899 26.4441 41.6426 26.2353C41.47 26.0946 41.3108 25.9025 41.1803 25.7417C41.1566 25.7126 41.1335 25.6839 41.1108 25.6558C40.9962 25.5139 40.8921 25.385 40.7817 25.2689C40.5452 25.0203 40.4135 24.9721 40.3188 24.9831C40.3196 24.9516 40.3226 24.9368 40.3233 24.9332C40.3236 24.9322 40.3236 24.9321 40.3233 24.9328C40.32 24.9412 40.3108 24.9588 40.2928 24.9761C40.2802 24.9882 40.2699 24.9937 40.2667 24.9953C40.2661 24.9957 40.2657 24.9958 40.2657 24.9959C40.2657 24.9959 40.266 24.9957 40.2668 24.9955C40.283 24.9898 40.3002 24.9853 40.3188 24.9831C40.3183 25.0034 40.3187 25.0305 40.3212 25.066C40.3265 25.1411 40.337 25.213 40.35 25.3023C40.3558 25.3421 40.3621 25.3854 40.3687 25.4339C40.3866 25.5665 40.4084 25.7515 40.3856 25.9312C40.3459 26.2441 40.2292 26.7336 39.9869 27.1228C39.8644 27.3196 39.6856 27.5298 39.4295 27.6554C39.154 27.7904 38.8423 27.8009 38.529 27.6791C38.2435 27.5681 38.0698 27.341 37.9634 27.145C37.8556 26.9465 37.7849 26.7212 37.7328 26.5226C37.6966 26.3843 37.6637 26.2352 37.6348 26.1044C37.6228 26.0501 37.6115 25.999 37.601 25.9531C37.5598 25.7736 37.5291 25.6709 37.5043 25.619C37.5009 25.612 37.4975 25.605 37.4941 25.5978C37.3822 25.3643 37.2259 25.038 37.0311 24.783C36.8523 24.549 36.7465 24.5078 36.7051 24.5019Z"
                                                fill="#001018"></path>
                                            <path d="M49.5 8.5H8.5V31.5H49.5V8.5Z" stroke="#EFF1F3"></path>
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1503_2376">
                                            <rect width="58" height="40" fill="white"></rect>
                                        </clipPath>
                                        <clipPath id="clip1_1503_2376">
                                            <rect width="58" height="40" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </g>
                                </viewBox=>
                                <div
                                    class="bg-gradient-to-r from-gray-200 to-white/0 h-0.5 mt-3 dark:from-gray-700 dark:to-slate-900/0">
                                    <div class="bg-gray-400 w-16 h-0.5"></div>
                                </div>

                                <div class="py-5">
                                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white"> <span
                                            class="pt-2">Donate Via Mail or Bank Deposit</span>
                                    </h1>

                                    <p
                                        class="text-md font-medium text-gray-800 md:text-lg md:leading-normal tracking-tight dark:text-gray-200">
                                        For your donations via cheque, mail to "<span
                                            class="font-bold  text-gray-900 dark:text-gray-50 text-gradient__teal">P.O
                                            Box CT 4467
                                            Cantonments, Accra; Greater Accra Region, Ghana</span>" , with "College of
                                        Sustainable
                                        Transformation And Development" as beneficianry. Thank you in advance.
                                    </p>
                                </div>
                        </div>
                        <!-- End Icon Block -->


                        <footer class="flex gap-x-16 items-center justify-start ">
                            <div class="flex items-center">

                                <div class="md:ml-0">

                                    <span class="text-md font-medium text-gray-800 dark:text-white">Mail To:</span>
                                    <p class="text-sm">
                                        <span class="  prominent-titles-2">P.O Box CT 4467 <br />Cantonments, Accra,
                                            Ghana.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center">

                                <div class="md:ml-0">

                                    <span class="text-md font-medium text-gray-800 dark:text-white">Payee:</span>
                                    <p class="text-sm">
                                        <span class="  prominent-titles-2">College of Sustainable Transformation<br />
                                            And Development.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                    <!-- End Blockquote -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>



    </section>

    <div id="donate-via-paypal"
        class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-gray-800">
                <div class="absolute top-2 right-2 z-[10]">
                    <button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md bg-white/[.1] text-white hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                        data-hs-overlay="#donate-via-paypal">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" width="8" height="8" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>

                <div class="aspect-w-16 aspect-h-8">
                    <img class="h-[200px] object-cover rounded-t-xl w-full"
                        src="{{ asset('images/main/globe-in-palm.png') }}" alt="Image Description">
                </div>

                <div class="p-4 sm:p-10 text-center overflow-y-auto space-y-3">
                    <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-gray-200">
                        <div>Donation Via Paypal</div>
                        <div class="py-3 flex justify-center items-center">
                            <img class="h-8" src="{{ asset('images/main/paypal.png') }}"
                                alt="Costrad paypal Donation">
                        </div>
                    </h3>
                    <p class="text-gray-500">
                        Donations Via PayPal coming soon. In the meantime, kindly consider donating through
                        the other secure options available. Thank you for your Support.
                    </p>

                    <div class="mt-6  justify-center gap-x-4 hidden">
                        <button type="button"
                            class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-firefly-500 text-white hover:bg-firefly-600 focus:outline-none focus:ring-2 focus:ring-firefly-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                            data-hs-overlay="#donate-via-paypal">
                            Got it
                        </button>
                        <a class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-firefly-500 hover:text-firefly-700 focus:outline-none focus:ring-2 ring-offset-white focus:ring-firefly-500 focus:ring-offset-2 transition-all text-sm"
                            href="#">
                            Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Testimonials -->
    <!-- End giving -->


    <livewire:subscribe />
</x-front-layout>
