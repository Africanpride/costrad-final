<x-app-layout>
<div class="gap-x-5 grid md:grid-cols-12 my-10 px-4">
    <div class="md:col-span-9">

            <!-- Invoice -->
            <div>
                <div class="mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col p-4 sm:p-10 bg-slate-200/30 shadow-md rounded-xl dark:bg-gray-800">
                        <!-- Grid -->
                        <div class="flex justify-between">
                            <div>
                                <x-admin.branding />
                                {{-- <h1 class="mt-2 text-lg md:text-xl font-semibold text-firefly-600 dark:text-white">Preline Inc.</h1> --}}
                            </div>
                            <!-- Col -->

                            <div class="text-right  w-1/3">
                                <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">Invoice #
                                </h2>
                                <span class="mt-1 block text-gray-500">{{ $invoice->id }}</span>

                                <address class="mt-4 not-italic text-firefly-800 dark:text-gray-200  ">
                                    <a href="{{ $institute->frontend_url }}"> <span
                                            class="font-bold capitalize">{{ $institute->name }}</span><br><span
                                            class="uppercase">({{ $institute->acronym }})</span></a> <br>
                                    <span class="text-gray-400">Accra, Ghana</span><br>
                                </address>
                            </div>
                            <!-- Col -->
                        </div>
                        <!-- End Grid -->

                        <!-- Grid -->
                        <div class="mt-8 grid sm:grid-cols-2 gap-3">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Bill to:</h3>
                                <h3 class="text-lg font-semibold text-firefly-800 dark:text-gray-200">
                                    {{ auth()->user()->full_name }}</h3>
                                <address class="mt-2 not-italic text-gray-500">
                                    {{ auth()->user()->profile->address }},<br>
                                    {{ auth()->user()->profile->city }}, {{ auth()->user()->profile->state }}
                                    {{ auth()->user()->profile->zipcode }},<br>
                                    {{ auth()->user()->profile?->country }}.<br>
                                </address>
                            </div>
                            <!-- Col -->

                            <div class="sm:text-right space-y-2">
                                <!-- Grid -->
                                <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Invoice
                                            date:</dt>
                                        <dd class="col-span-2 text-gray-500">
                                            {{ $invoice->created_at->format('M d,Y') }}</dd>
                                    </dl>
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Due date:
                                        </dt>
                                        <dd class="col-span-2 text-gray-500">
                                            {{ \Carbon\Carbon::parse($institute->startDate)->format('M d,Y') }}</dd>
                                    </dl>
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Invoice
                                            Status:</dt>
                                        <dd class="col-span-2 text-gray-500">
                                            <span
                                                class="px-3 py-1 rounded-full inline-flex items-center text-[12px] font-bold capitalize {{ $invoice->status == 'pending' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">

                                                {{ $invoice->status }}
                                            </span>
                                        </dd>
                                    </dl>
                                </div>
                                <!-- End Grid -->
                            </div>
                            <!-- Col -->
                        </div>
                        <!-- End Grid -->

                        <!-- Table -->
                        <div class="mt-6">
                            <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
                                <div class="hidden sm:grid sm:grid-cols-5">
                                    <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">Item</div>
                                    <div class="text-left text-xs font-medium text-gray-500 uppercase">Qty</div>
                                    <div class="text-left text-xs font-medium text-gray-500 uppercase">Rate</div>
                                    <div class="text-right text-xs font-medium text-gray-500 uppercase">Amount</div>
                                </div>

                                <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>

                                <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                    <div class="col-span-full sm:col-span-2">
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Design UX and UI</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                        <p class="text-gray-800 dark:text-gray-200">1</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                        <p class="text-gray-800 dark:text-gray-200">5</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                        <p class="sm:text-right text-gray-800 dark:text-gray-200">$500</p>
                                    </div>
                                </div>

                                <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>

                                <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                    <div class="col-span-full sm:col-span-2">
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Web project</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                        <p class="text-gray-800 dark:text-gray-200">1</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                        <p class="text-gray-800 dark:text-gray-200">24</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                        <p class="sm:text-right text-gray-800 dark:text-gray-200">$1250</p>
                                    </div>
                                </div>

                                <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>

                                <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                    <div class="col-span-full sm:col-span-2">
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">SEO</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                        <p class="text-gray-800 dark:text-gray-200">1</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                        <p class="text-gray-800 dark:text-gray-200">6</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                        <p class="sm:text-right text-gray-800 dark:text-gray-200">$2000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Table -->

                        <!-- Flex -->
                        <div class="mt-8 flex sm:justify-end">
                            <div class="w-full max-w-2xl sm:text-right space-y-2">
                                <!-- Grid -->
                                <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Subtotal:
                                        </dt>
                                        <dd class="col-span-2 text-gray-500">$2750.00</dd>
                                    </dl>

                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Total:
                                        </dt>
                                        <dd class="col-span-2 text-gray-500">$2750.00</dd>
                                    </dl>

                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Tax:</dt>
                                        <dd class="col-span-2 text-gray-500">$39.00</dd>
                                    </dl>

                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Amount
                                            paid:</dt>
                                        <dd class="col-span-2 text-gray-500">$2789.00</dd>
                                    </dl>

                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Due
                                            balance:</dt>
                                        <dd class="col-span-2 text-gray-500">$0.00</dd>
                                    </dl>
                                </div>
                                <!-- End Grid -->
                            </div>
                        </div>
                        <!-- End Flex -->

                        <div class="mt-8 sm:mt-12">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Thank you!</h4>
                            <p class="text-gray-500">If you have any questions concerning this invoice, use the
                                following contact information:</p>
                            <div class="mt-2">
                                <p class="block text-sm font-medium text-gray-800 dark:text-gray-200">example@site.com
                                </p>
                                <p class="block text-sm font-medium text-gray-800 dark:text-gray-200">+1 (062) 109-9222
                                </p>
                            </div>
                        </div>

                        <p class="mt-5 text-sm text-gray-500">&copy;
                            &ThinSpace;{{ now()->format('Y') }}&ThinSpace;{{ config('app.name') }}</p>
                        <div class="cursor-pointer flex items-center md:justify-center text-center"
                            data-hs-overlay="#donate">
                            <img src="{{ asset('images/main/all-cards.png') }}" alt="Donate with Paypal or Credit Card"
                                class="w-auto rounded-md h-4">
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Buttons -->
                    <div class="my-5 flex justify-end gap-x-3 ">
                        <a class="inline-flex justify-center items-center gap-x-3 text-sm text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                            href="#">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg>
                            PDF
                        </a>
                        <a class="inline-flex justify-center items-center gap-x-3 text-center bg-firefly-600 hover:bg-firefly-700 border border-transparent text-sm text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-firefly-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                            href="#">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                <path
                                    d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                            </svg>
                            Print details
                        </a>

                        <button x-data="{ showButton: '{{ $invoice->status !== 'paid' }}' }"
                            x-bind:class="showButton ? '' : 'opacity-50 pointer-events-none'" x-show="showButton"
                            type="submit"
                            class="inline-flex justify-center items-center gap-x-3 text-center bg-firefly-600 hover:bg-firefly-700 border border-transparent text-sm text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-firefly-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                            data-hs-overlay="#payInvoice">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                <path
                                    d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                            </svg>
                            Pay online
                        </button>

                    </div>
                    <!-- End Buttons -->
                </div>
            </div>
            <!-- End Invoice -->
    </div>
<div class="md:col-span-3">
   <div class="flex flex-col p-4 sm:p-10 bg-slate-200/30 shadow-md rounded-xl dark:bg-gray-800"">
    discount
   </div>
</div>
</div>

<div id="payInvoice"
class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
<div
    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-gray-950">
        <div class="absolute bg-gray-900/50 right-2 rounded-full top-2 z-[10]">
            <button type="button"
                class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md  text-white hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                data-hs-overlay="#payInvoice">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" width="8" height="8" viewBox="0 0 8 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                        fill="currentColor" />
                </svg>
            </button>
        </div>

        <div class="aspect-w-16 aspect-h-8 relative">
            <div class="absolute bottom-0 left-0 right-0 top-0 grid place-items-center">
                <img class="inline-block h-[6.975rem] w-[6.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                    src="{{ $institute->institute_logo }}" alt="{{ $institute->name }}">
            </div>
            <img class="w-full object-cover rounded-t-xl h-52" src="{{ $institute->featured_image }}"
                alt="{{ $institute->name }}">
        </div>

        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8"
            class="form-horizontal d-none" role="form">
            <input type="hidden" name="institute" value="{{ $institute->acronym }}">
            <input type="hidden" name="institute_id" value="{{ $institute->id }}">
            <input type="hidden" name="invoice_id" value="{{ $invoice->id }}">

            @csrf
            <div class="p-4 sm:p-8 text-center overflow-y-auto space-y-4">
                <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-gray-200 uppercase">
                    <span class="px-2">{{ $institute->acronym }} {{ now()->format('Y') }}</span> 🎉
                </h3>
                <div>
                    <fieldset class="grid grid-cols-2 gap-4">

                        <div>
                            <input type="radio" name="paymentoption" value="fullPayment" id="fullPayment"
                                class="peer hidden [&:checked_+_label_svg]:block" checked />

                            <label for="fullPayment"
                                class="block cursor-pointer rounded-lg border border-gray-200 dark:border-gray-700/50 bg-white dark:bg-gray-950 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                <div class="flex items-center justify-between">
                                    <p class="text-gray-700 dark:text-white text-lg">Full Payment</p>

                                    <svg class="hidden h-5 w-5 text-blue-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="mt-1 text-left text-firefly-500">{{ '$' . $institute->price }}</p>
                            </label>
                        </div>

                        <div>
                            <input type="radio" name="paymentoption" value="partPayment" id="partPayment"
                                class="peer hidden [&:checked_+_label_svg]:block" />

                            <label for="partPayment"
                                class="block cursor-pointer rounded-lg border border-gray-200 dark:border-gray-700/50 bg-white dark:bg-gray-950 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                <div class="flex items-center justify-between">
                                    <p class="text-gray-700 dark:text-white text-lg">Part Payment</p>

                                    <svg class="hidden h-5 w-5 text-blue-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="mt-1 text-firefly-500 text-left">{{ __('Pay in 3 Installments.') }}
                                </p>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                <p class="text-gray-500 text-sm text-left">
                    {!! __(
                        'By clicking enroll, you agree to abide by our <a href="/terms" class="capitalize text-firefly-500 font-bold" target="_blank">terms and conditions</a>. An invoice would be made available to you in <span class=" text-yellow-600 font-bold">Ghana Cedis</span> equivalent. Thank you.',
                    ) !!}
                </p>


                <div class="mt-6 grid grid-cols-1 gap-3">
                    <x-jet-button type="submit" class="w-full">
                        Proceed To Payment
                    </x-jet-button>

                </div>
            </div>

        </form>
    </div>
</div>
</div>
</x-app-layout>
