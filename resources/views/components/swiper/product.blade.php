<div class="swiper product-swiper rounded-lg group">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper rounded-lg">
        <!-- Slides -->
        @foreach ($data as $index => $value) <div class="swiper-slide">
            <div class="aspect-[3/4] bg-white">
                <div class="aspect-[1/1]">
                    <img class="object-cover h-full w-full rounded-lg" src="https://placehold.co/{{$index*20}}"
                        alt="slide">
                </div>
                <div class="p-1">
                    <h2 class="text-md">{{$value->name}}</h2>
                    <span class="text-md">@money($value->price)</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div
        class="swiper-button-prev opacity-0 group-hover:opacity-100 transition-all ease-in-out duration-300 bg-indigo-600 rounded-full w-10 h-10 text-white after:content-['prev'] after:text-sm after:font-bold hover:bg-indigo-700 active:bg-indigo-800">
    </div>
    <div
        class="swiper-button-next opacity-0 group-hover:opacity-100 transition-all ease-in-out duration-300 bg-indigo-600 rounded-full w-10 h-10 text-white after:content-['next'] after:text-sm after:font-bold hover:bg-indigo-700 active:bg-indigo-800">
    </div>
</div>