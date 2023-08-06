<x-app-layout>
    <div class="md:py-4" x-data="{ day: 1 }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">
            <div class="grid grid-cols-12 gap-x-3">
                <div class="col-span-12 md:col-span-8 space-y-3">
                    <div>
                        <img class="object-cover w-full rounded-xl" src="https://placehold.co/300" alt="">
                    </div>
                    <x-card class="shadow">
                        <span class="text-xl font-semibold mb-2">Deskripsi</span>
                    </x-card>
                </div>
                <div class="col-span-12 md:col-span-4 relative w-full">
                    <div class="static md:sticky top-5 bg-white w-full shadow max-w-full p-4 rounded-md space-y-2">
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
                                <span class="bg-red-100 text-xs rounded-full px-2 font-semibold text-red-500">27%</span>
                                <span
                                    class="text-md font-semibold line-through text-gray-600 italic">@money($product->price)</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>