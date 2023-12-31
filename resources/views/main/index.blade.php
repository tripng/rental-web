<x-app-layout>
    <div class="md:py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">
            <x-card>
                <div class="relative shadow-sm sm:rounded-xl">
                    <x-swiper.banner />
                </div>
            </x-card>
            <div class="mx-2 space-y-5">
                <h2 class="text-2xl font-semibold mb-2">Tag Populer</h2>
                <x-card>
                    <div class="relative p-1 shadow-sm sm:rounded-xl">
                        <x-swiper.category />
                    </div>
                </x-card>
                <h2 class="text-2xl font-semibold">Rekomendasi</h2>
                <x-swiper.products :data="$products" />
            </div>
        </div>
    </div>
</x-app-layout>