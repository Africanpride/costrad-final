<x-app-layout>
    <x-admin.pageheader model-name="Invoices" description="{{ __('My Invoices') }}" add-button="false" class="mx-4">
        <x-heroicon-o-finger-print class="w-6 h-6 text-current" />
    </x-admin.pageheader>
    <!-- user/invoices.blade.php -->

    <div class="container mx-auto px-4 sm:px-4">
        <div>

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto ">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    @if ($myInvoices->count() > 0)

                        <table class="min-w-full leading-normal dark:bg-black dark:text-white ">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-950 dark:text-white border-b-2 border-gray-200/10">
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        {{ __('Institute / Invoice') }}
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        {{ __('Amount') }}
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider whitespace-no-wrap">
                                        {{ __('Issued') }}
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        {{ __('Outstanding') }}
                                    </th>
                                    <th
                                        class="px-5 py-3  text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        {{ __('Action') }}
                                    </th>
                                    <th class="px-5 py-3 "></th>
                                </tr>
                            </thead>
                            <tbody class="border dark:border-gray-900/50 overflow-x-hidden">
                                @foreach ($myInvoices as $invoice)
                                    <tr>
                                        <td class="px-5 py-5 text-sm">
                                            <div class="flex">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="{{ $invoice->institute->institute_logo }}" alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p
                                                        class="text-gray-700 dark:text-white whitespace-wrap font-bold">
                                                        {{ $invoice->institute->name }}
                                                    </p>
                                                    <p class="text-gray-500 whitespace-no-wrap">
                                                        {{ $invoice->institute->duration }},
                                                        {{ now()->format('Y') }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 text-sm">
                                            <p class="text-gray-600 whitespace-nowrap font-bold">GHC
                                                {{ number_format($invoice->totalAmount / 100, 2, '.', ',') }}
                                            </p>
                                            <p class="text-gray-600 whitespace-nowrap">USD
                                                {{ $invoice->institute->price }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm whitespace-no-wrap">
                                            <div class="text-gray-600 whitespace-no-wrap font-bold whitespace-nowrap	 ">
                                                {{ $invoice->created_at->format('d M, Y') }}</div>
                                        </td>

                                        <td class="px-5 py-5 text-sm">


                                            <p class="text-gray-600 whitespace-nowrap font-bold">
                                                {{ __('Total Amount: ') }} {{ $invoice->institute->price }}
                                            </p>
                                            <p class=" whitespace-nowrap font-bold">
                                                {{ __('Outstanding Amount: ') }}
                                                <span
                                                    class="px-2 rounded-full inline-flex items-center text-[10px] {{ $invoice->outstandingAmount > 0.0 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">

                                                    {{ $invoice->outstandingAmount }}
                                                </span>
                                            </p>


                                        </td>
                                        <td class="px-5 py-5 text-[11px] text-center">
                                            <form action=" {{ route('installment-payment',['institute' => $invoice->institute_id, 'invoice' => $invoice]) }}" method="post">
                                                @csrf

                                                <button type="submit"  class="font-bold text-blue-600 whitespace-nowrap ">
                                                    {{ __('View') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <div class="p-5">
                            <livewire:admin.nothing-here />
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
