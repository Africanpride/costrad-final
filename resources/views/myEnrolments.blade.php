<x-app-layout>
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

    <section class="p-4  bg-gray-200 dark:bg-black">

        <div class="grid md:grid-cols-12 gap-4">

            <div class="md:col-span-8" style="position: relative; overflow: hidden;">
                <div id="cover-image-container"  style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                    <img src="{{ $institute->featured_image }}" class="rounded-xl" alt="Cover Image" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <video id="video-player" controls class="w-full aspect-video h-auto rounded-xl" poster="path/to/cover-image.jpg">
                    <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="md:col-span-4 shadow-lg bg-white dark:bg-gray-950 dark:text-white rounded-xl">
                <div class="p-6 space-y-4">
                    <h5 class="text-gray-600 text-xl font-bold uppercase">{{ $institute->acronym }} {{ __('Institute Prep.') }}</h5>
                    <p>
                        Some quick example text to build on the card title and make up the bulk of the card's
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

    </section>
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
