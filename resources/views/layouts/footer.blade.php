<footer class="bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex flex-col justify-center">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <h3 class="font-bold mb-2 text-xl text-gray-800">Bantuan</h3>
                    <ul>
                        @foreach ([1,2,3] as $index => $value)
                        <li><a href="#" class="text-sm text-gray-600 hover:text-gray-400">Bantuan {{$value}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2 text-xl text-gray-800">Ikuti Kami</h3>
                    <ul>
                        @foreach ([1,2,3,1,2,3] as $index => $value)
                        <li><a href="#" class="text-sm text-gray-600 hover:text-gray-400">Ikuti Kami {{$value}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2 text-xl text-gray-800">Jelajahi</h3>
                    <ul class="space-y-3">
                        @foreach ([1,2,3,4,5,6,7] as $index => $value)
                        <li>
                            <a href="#" class="flex items-center text-sm text-gray-600 hover:text-gray-400">
                                <x-simpleicon-facebook class="w-5 h-5 mr-2" />
                                <span>Jelajahi {{$value}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <span class="w-full text-gray-500 text-center border-t border-gray-300 pt-6 mt-6">© 2023. Hak Cipta
                Dilindungi</span>
        </div>
    </div>
</footer>