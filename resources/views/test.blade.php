<x-front-layout>
    <div class="p-8">

        <div class="alert bg-gray-50 border border-gray-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-gray-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </svg>
                </div>
                <div class="flex-1 md:flex md:justify-between ml-4">
                    <p class="text-sm text-gray-700">
                        A new software update is available. See what's new in version 3.0.7
                    </p>
                    <p class="text-sm mt-3 md:mt-0 md:ml-6">
                        <a class="text-gray-700 hover:text-gray-500 font-medium whitespace-nowrap"
                            href="#">Details</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</x-front-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    });
</script>
