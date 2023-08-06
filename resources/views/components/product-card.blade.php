<a href="{{route('product.details', $data->slug)}}">
    <div class="aspect-[3/4] bg-white rounded-md">
        <div class="aspect-[1/1]">
            <img loading="lazy" class="object-cover h-full w-full rounded-lg" src="https://placehold.co/{{$index*20}}"
                alt="slide">
        </div>
        <div class="flex flex-col p-2 space-y-2">
            <h2 class="text-md">{{$data->name}}</h2>
            <span class="text-md font-bold">@money($data->price)</span>
            <div class="flex items-center text-sm text-gray-500 divide-x divide-gray-400 space-x-2">
                <div class="flex items-center">
                    <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                    <span class="ml-2">{{$data->rating}}</span>
                </div>
                <span class="pl-2">10 tersewakan</span>
            </div>
        </div>
    </div>
</a>