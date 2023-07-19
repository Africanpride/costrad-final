<x-front-layout>
    <div class="grid-cols-12">
        <div class="bg-white shadow-md">
            <div class="overflow-hidden">
                <div class="bg-blue-200 h-2"></div>
                <div class="bg-indigo-200 h-1 animate-pulse"></div>
            </div>
            <div class="p-4">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">NAME</th>
                            <th class="py-2 px-4 border-b">EMAIL</th>
                            <th class="py-2 px-4 border-b">DATE</th>
                            <th class="py-2 px-4 border-b">SALARY</th>
                            <th class="py-2 px-4 border-b">AGE</th>
                            <th class="py-2 px-4 border-b">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4">
                                <div class="flex flex-col">
                                    <h6 class="text-sm font-medium">Edwina Ebsworth</h6>
                                    <span class="text-xs">Human Resources Assistant</span>
                                </div>
                            </td>
                            <td class="py-2 px-4 text-sm">eebsworth2m@sbwire.com</td>
                            <td class="py-2 px-4 text-sm">09/27/2018</td>
                            <td class="py-2 px-4 text-sm">$19586.23</td>
                            <td class="py-2 px-4 text-sm">27</td>
                            <td>
                                <span class="inline-block py-1 px-2 text-xs font-medium text-white bg-blue-500 rounded capitalize">Current</span>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>



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
