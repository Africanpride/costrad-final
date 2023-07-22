<x-app-layout>
    <x-admin.pageheader model-name="{{ __('Institute') }}" description="{{ $institute->name }}" add-button="false" class="mx-4 capitalize">
        <x-heroicon-o-finger-print class="w-6 h-6 text-current" />
    </x-admin.pageheader>
    <!-- user/invoices.blade.php -->
    <section class=" grid-cols-3 gap-4 h-auto hidden">

        <div class="relative col-span-full md:col-span-2 p-2">
            <div class="absolute -top-16 -z-10 flex w-full justify-center overflow-hidden lg:-top-20"><img alt=""
                    width="640" height="1124" decoding="async" data-nimg="1" class="max-w-none sm:hidden"
                    srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage-mobile.61dc5f81.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage-mobile.61dc5f81.png&amp;w=1920&amp;q=75 2x"
                    src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage-mobile.61dc5f81.png&amp;w=1920&amp;q=75"
                    style="color: transparent;"><img alt="" width="1024" height="1124" decoding="async"
                    data-nimg="1" class="hidden max-w-none sm:block lg:hidden"
                    srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage-tablet.bfb22167.png&amp;w=1080&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage-tablet.bfb22167.png&amp;w=2048&amp;q=75 2x"
                    src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage-tablet.bfb22167.png&amp;w=2048&amp;q=75"
                    style="color: transparent;"><img alt="" width="2510" height="1168" decoding="async"
                    data-nimg="1" class="hidden max-w-none lg:block"
                    srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage.46f045ac.png&amp;w=3840&amp;q=75 1x"
                    src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fglow-homepage.46f045ac.png&amp;w=3840&amp;q=75"
                    style="color: transparent;"></div>
            <div class="mx-auto max-w-7xl py-2 lg:py-4 lg:px-6">
                <div class="relative aspect-video">
                    <div class=" relative z-0 w-full overflow-hidden lg:rounded-xl">
                        <div class="aspect-video w-full" data-testid="vimeo-player" data-vimeo-initialized="true">
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                    src="https://player.vimeo.com/video/822796259?h=17a8f7232b&amp;app_id=122963"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                    title="react-server-components-1" data-ready="true"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative bg-gray-300 col-span-full md:col-span-1">
            {{ $institute->acronym }}
        </div>
    </section>

    <section class="p-6 hidden">
        <!-- Jumbotron -->
        <div class=" mx-auto p-6 shadow rounded-lg bg-firefly-50 dark:bg-firefly-900 dark:text-white ">
            {{-- <h2 class="font-semibold text-3xl mb-5">Hello world!</h2> --}}
            <p>
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.
            </p>
            <hr class="my-6 border-firefly-300" />
            <p>
                It uses utility classes for typography and spacing to space content out within the larger
                container.
            </p>
            <button type="button"
                class="inline-block px-6 py-2.5 mt-4 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                Learn more
            </button>
        </div>
    </section>

    <div class="container mx-auto">
        <div class="border-b border-firefly-200 px-4 dark:border-firefly-700">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-firefly-500 active"
                    id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab">
                    Intro Video
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-firefly-500"
                    id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2" role="tab">
                    Course Materials
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-firefly-500"
                    id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3" role="tab">
                    Tab 3
                </button>
            </nav>
        </div>

        <div class="mt-3 p-4">
            <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
                <div class="p-4  bg-gray-200 dark:bg-black">

                    <div class="grid md:grid-cols-12 gap-4">

                        <div class="md:col-span-8" style="position: relative; overflow: hidden;">
                            <div id="cover-image-container"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                <img src="{{ $institute->featured_image }}" class="rounded-xl" alt="Cover Image"
                                    style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <video id="video-player" controls class="w-full aspect-video h-auto rounded-xl"
                                poster="path/to/cover-image.jpg">
                                <source
                                    src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                                    type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>


                        <div class="md:col-span-4 shadow-lg bg-white dark:bg-gray-950 dark:text-white rounded-xl">
                            <div class="p-6 space-y-4">
                                <h5 class="text-gray-600 text-xl font-bold uppercase">{{ $institute->acronym }}
                                    {{ __('Institute Prep.') }}</h5>
                                <p>
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's
                                    content.
                                </p>
                                <div>
                                    <x-jet-button>
                                        button
                                    </x-jet-button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                <p class="text-gray-500 dark:text-gray-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em> item's
                    tab
                    body.
                </p>
            </div>
            <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
                <p class="text-gray-500 dark:text-gray-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's
                    tab
                    body.
                </p>
            </div>
        </div>
    </div>


    <script>
        var video = document.getElementById('video-player');
        var coverImageContainer = document.getElementById('cover-image-container');

        video.addEventListener('play', function() {
            coverImageContainer.style.display = 'none';
        });

        video.addEventListener('pause', function() {
            if (video.currentTime === 0) {
                coverImageContainer.style.display = 'block';
            }
        });
    </script>

</x-app-layout>
