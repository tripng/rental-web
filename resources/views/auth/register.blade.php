<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Sandi')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex flex-col justify-start mt-4 space-y-3">
            <a class="underline text-sm text-indigo-600 hover:text-indigo-900 rounded-md focus:outline-none"
                href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>
            <x-primary-button class="w-full justify-center bg-indigo-600 hover:bg-indigo-900">
                {{ __('Daftar') }}
            </x-primary-button>
            <div class="flex align-middle py-3">
                <hr class="w-1/2 my-auto border-gray-100 border-y-2">
                <span class="text-xs whitespace-nowrap px-2 text-gray-400 font-semibold">atau masuk dengan</span>
                <hr class="w-1/2 my-auto border-gray-100 border-y-2">
            </div>
            <x-link-button href="{{ route('auth.google') }}"
                class="w-full justify-center bg-slate-50 hover:bg-slate-400 text-black border-gray-700" variant="">
                <img src="{{ asset('images/google.png') }}" loading="lazy" class="mr-2" alt="google-icon" width="20">
                {{ __('Daftar dengan Google') }}
            </x-link-button>
        </div>
    </form>
</x-guest-layout>