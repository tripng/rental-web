<x-app-layout>
    <div class="md:py-4" x-data="{ day: 1, price: {{$product->price}} }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-8 space-y-3">
                    <div>
                        <img loading="lazy" class="object-cover w-full rounded-xl" src="https://placehold.co/300"
                            alt="">
                    </div>
                    <x-card class="space-y-2">
                        <span class="text-xl font-semibold">Deskripsi</span>
                        <p>{{$product->description}}</p>
                        <p>{{$product->description}}</p>
                        <p>{{$product->description}}</p>
                        <p>{{$product->description}}</p>
                    </x-card>
                    <x-card class="space-y-2">
                        <span class="text-xl font-semibold mb-2">Spesifikasi</span>
                        <div class="grid grid-cols-2 w-2/3">
                            @foreach ([1,2,3] as $index => $value)
                            <span class="text-gray-400">Spesifikasi 1</span>
                            <span>Spesifikasi Value 1</span>
                            @endforeach
                        </div>
                    </x-card>
                </div>
                <div class="col-span-12 md:col-span-4 relative w-full">
                    <div class="static md:sticky top-5 space-y-3    ">
                        <x-card class="w-full space-y-2" addClass="p-5">
                            <h2 class="text-2xl text-gray-800 font-semibold">{{$product->name}}</h2>
                            <div class="flex items-center text-sm text-gray-500 divide-x divide-gray-400 space-x-2">
                                <div class="flex items-center space-x-1">
                                    <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                    <span class="mt-1">{{$product->rating}}</span>
                                    <span class="mt-1">({{$product->rating}} Penilaian)</span>
                                </div>
                                <span class="pl-2 mt-1">{{$product->rented}} Tersewakan</span>
                            </div>
                            <div class="flex flex-col justify-center space-y-1">
                                <span class="text-3xl font-bold">@money($product->price)</span>
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="bg-red-100 text-xs rounded-full px-2 font-semibold text-red-500">27%</span>
                                    <span
                                        class="text-md font-semibold line-through text-gray-600 italic">@money($product->price*73/100)</span>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-semibold mb-2">Day</span>
                                <div class="flex space-x-2">
                                    <x-primary-button type="button" class="flex justify-center w-12" addClass="p-0"
                                        @click="day != 1 && day--">
                                        <span class="font-extrabold text-3xl mb-2">-</span>
                                    </x-primary-button>
                                    <input type="number"
                                        class="w-12 rounded-lg text-sm font-bold text-center focus:ring-0 border-indigo-600"
                                        x-model="day">
                                    <x-primary-button type="button" class="flex justify-center w-12" addClass="p-0"
                                        @click="day++">
                                        <span class="font-extrabold text-3xl mb-2">+</span>
                                    </x-primary-button>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-semibold mb-2">Size</span>
                                <select name="size" id="size" class="rounded-lg focus:ring-0 focus:border-indigo-600">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                </select>
                            </div>
                            <x-primary-button type="button" class="w-full">
                                <span class="m-auto">Simpan ke Keranjang</span>
                            </x-primary-button>
                            <x-primary-button type="button" variant="ghost" class="w-full">
                                <span class="m-auto">Sewa</span>
                            </x-primary-button>
                        </x-card>
                        <x-card class="w-full space-y-3" addClass="p-5">
                            <div class="flex items-center space-x-2">
                                <div class="w-14">
                                    <img loading="lazy" class="object-cover rounded-full" src="https://placehold.co/100"
                                        alt="">
                                </div>
                                <div class="space-y-2">
                                    <h4 class="text-md text-indigo-600 font-medium text-sm">Bapak Kau Store</h4>
                                    <div class="flex">
                                        <div class="text-xs rounded-full bg-green-100 text-green-800 px-2">Premium
                                            Seller</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full space-y-2 text-sm text-gray-500 ">
                                <div class="flex items-center divide-x divide-gray-400 space-x-2">
                                    <div class="flex items-center space-x-1">
                                        <x-heroicon-o-star class="w-5 h-5 text-gray-400" />
                                        <span class="">4.9 rata-rata penilaian</span>
                                    </div>
                                    <span class="pl-2 ">122 ulasan</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <x-heroicon-o-map-pin class="w-5 h-5 text-gray-400" />
                                    <span class="">Sumenep, Madura</span>
                                </div>
                            </div>
                        </x-card>
                    </div>
                </div>
                <div class="col-span-12 space-y-5">
                    <h2 class="text-2xl font-semibold">Produk lain </h2>
                    <x-swiper.products :data="$products" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>