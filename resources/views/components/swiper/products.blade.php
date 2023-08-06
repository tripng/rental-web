<div class="swiper product-swiper rounded-lg group">
    <div class="swiper-wrapper rounded-lg">
        @foreach ($data as $index => $value)
        <div class="swiper-slide">
            <x-product-card :index="$index" :data="$value" />
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div
        class="swiper-button-prev opacity-0 group-hover:opacity-100 transition-all ease-in-out duration-300 bg-indigo-600 rounded-full w-10 h-10 text-white after:content-['prev'] after:text-sm after:font-bold hover:bg-indigo-700 active:bg-indigo-800">
    </div>
    <div
        class="swiper-button-next opacity-0 group-hover:opacity-100 transition-all ease-in-out duration-300 bg-indigo-600 rounded-full w-10 h-10 text-white after:content-['next'] after:text-sm after:font-bold hover:bg-indigo-700 active:bg-indigo-800">
    </div>
</div>