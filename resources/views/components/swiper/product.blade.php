@props(['data' => []])

<div class="swiper category-swiper rounded-lg group">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper rounded-lg">
        <!-- Slides -->
        @dd(json_decode($data))
        @foreach (json_decode($data) as $index => $v)
        <div class="aspect-[3/4]">
            {{--<img class="object-cover h-full w-full rounded-lg" src="https://placehold.co/{{$i*20}}" alt="slide">--}}
            <h2>{{$index}}</h2>
            <h2>{{$v}}</h2>
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