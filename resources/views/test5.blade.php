<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">
        <form class="w-px-500 p-3 p-md-3" action="{{ route('test5') }}" method="post">
            @csrf
            <div>
                <fieldset class="grid grid-cols-3 gap-4">

                    <div class="text-4xl">
                        <span class="font-['anton'] dark:text-white">Choose Payment Option _</span>
                    </div>
                    <legend class="sr-only">Delivery</legend>

                    <div>
                        <input type="radio" name="paymentoption" value="fullPayment" id="fullPayment"
                            class="peer hidden [&:checked_+_label_svg]:block" checked />

                        <label for="fullPayment"
                            class="block cursor-pointer rounded-lg border border-gray-200 dark:border-gray-700/50 bg-white dark:bg-gray-950 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-700 dark:text-white text-lg">Full Payment</p>

                                <svg class="hidden h-5 w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <p class="mt-1 text-gray-900">Free</p>
                        </label>
                    </div>

                    <div>
                        <input type="radio" name="paymentoption" value="partPayment" id="partPayment"
                            class="peer hidden [&:checked_+_label_svg]:block" />

                        <label for="partPayment"
                            class="block cursor-pointer rounded-lg border border-gray-200 dark:border-gray-700/50 bg-white dark:bg-gray-950 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-700 dark:text-white text-lg">Part Payment</p>

                                <svg class="hidden h-5 w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <p class="mt-1 text-gray-900">£9.99</p>
                        </label>
                    </div>
                </fieldset>
            </div>

            <div class="row mb-3 mt-5">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <x-jet-button type="submit" class="btn btn-success inline-block w-auto text-white">Submit</x-jet-button>
                </div>
            </div>
        </form>
    </section>


    </section>

    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">


        <div class="p-5 bg-gray-200/50 dark:bg-black  md:py-8 rounded-3xl">
            <div id="chart">

            </div>
        </div>

    </section>

</x-app-layout>

<script>
    var options = {
        series: [{
            name: 'Participants',
            data: [4, 3, 10, 9, 29, 19, 22, 9, 12, ]
        }],
        chart: {
            height: 450,
            type: 'line',
        },
        forecastDataPoints: {
            count: 9
        },
        stroke: {
            width: 9,
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000',
                '8/11/2000', '9/11/2000'
            ],
            tickAmount: 9,
            labels: {
                formatter: function(value, timestamp, opts) {
                    return opts.dateFormatter(new Date(timestamp), 'dd MMM yyyy')
                }
            }
        },
        title: {
            text: 'Institute Attendance',
            align: 'left',
            style: {
                fontSize: "24px",
                color: '#666'
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                gradientToColors: ['#FDD835'],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                stops: [100, 125, 150, 175, ]
            },
        },
        yaxis: {
            min: 0,
            max: 100
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
