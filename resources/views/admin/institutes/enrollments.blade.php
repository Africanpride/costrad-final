<x-app-layout>
        <!-- Card Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-3 sm:gap-5">
                @foreach ($institutes as $institute)
                    <!-- Card -->
                    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                        href="#">
                        <div class="p-2 md:p-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <img class="h-[4.375rem] w-[4.375rem] rounded-full" src="{{ $institute->institute_logo }}"
                                        alt="{{ $institute->name }}">
                                    <div class="ml-2">
                                        <h5
                                            class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                            <span class="uppercase"> {{ $institute->acronym ." ". Carbon\Carbon::parse($institute->startDate)->format('Y') }}  ({{ $institute->participants->count() }})</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="pl-3">
                                    <svg class="w-3.5 h-3.5 text-gray-500" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                @endforeach



            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Section -->


</x-app-layout>
