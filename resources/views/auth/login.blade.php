<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        {{--<div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
        </div>--}}

        <div class="flex flex-col mt-4 space-y-3">
            <div class="flex justify-between">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-indigo-600 hover:text-indigo-900 rounded-md focus:outline-none"
                    href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
                @endif
                <a class="underline text-sm text-indigo-600 hover:text-indigo-900 rounded-md focus:outline-none"
                    href="{{ route('register') }}">
                    {{ __('Belum punya akun?') }}
                </a>
            </div>
            <x-primary-button class="w-full justify-center bg-indigo-600 hover:bg-indigo-900">
                {{ __('Masuk') }}
            </x-primary-button>
            <x-link-button href="{{ route('auth.google') }}"
                class="w-full justify-center bg-slate-50 hover:bg-slate-400 text-black border-gray-700">
                {{--<img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                    style="margin-left: 3em;height: 40px;border-radius: 12px">--}}
                <img src="{{ asset('images/google.png') }}" class="mr-2" alt="google-icon" width="20">
                {{ __('Masuk Dengan Google') }}
            </x-link-button>
        </div>
    </form>
</x-guest-layout>