<x-front-layout>

    <!-- Card Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
            @foreach ($institutes as $institute)
                <!-- Card -->
                <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <img class="h-[3.375rem] w-[3.375rem] rounded-full" src="{{ $institute->institute_logo }}"
                                    alt="{{ $institute->name }}">
                                <div class="ml-3">
                                    <h5
                                        class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                        Enrollments
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



    <table>
        <thead>
            <tr>
                <th>Institute Name</th>
                <th>Participants</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($institutes as $institute)
                <tr>
                    <td>{{ $institute->name }}</td>
                    <td>
                        <ul>
                            @foreach ($institute->participants as $participant)
                                <li>{{ $participant->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="p-8">

        <div id="alert" class="alert bg-blue-50 border border-blue-200 rounded-md p-4" role="alert" style="display: none;">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        This website uses cookies
                    </h3>
                    <div class="mt-2 text-sm text-gray-600">
                        We use cookies to enhance your experience on our website. By continuing to browse, you consent to the use of cookies.
                    </div>
                    <div class="mt-4">
                        <button type="button" id="cookie-consent-button" class="inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-medium text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                            Accept
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}






</x-front-layout>
{{--
<script>
    $(document).ready(function () {
        var hasAcceptedCookies = sessionStorage.getItem('cookieConsentAccepted');

        if (hasAcceptedCookies !== 'true') {
            $("#alert").show();
        }

        $("#cookie-consent-button").click(function () {
            sessionStorage.setItem('cookieConsentAccepted', 'true');
            $("#alert").fadeOut();
        });
    });
</script> --}}
