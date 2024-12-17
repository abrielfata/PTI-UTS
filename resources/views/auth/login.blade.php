<x-guest-layout>
    <!-- Session Status Message (Optional, only if there's a status message to show) -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Input Section -->
        <!-- Change type="email" to type="text" -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email atau Username')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password Input Section -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me Checkbox -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Forgot Password Link and Submit Button -->
        <div class="flex items-center justify-between mt-4">
            <!-- Forgot Password Link (only visible if password.request route exists) -->
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!-- Login Button -->
            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Register Link for users who don't have an account -->
    <div class="mt-4 text-center">
        <span class="text-sm text-gray-600">{{ __("Don't have an account?") }}</span>
        <a class="underline text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('register') }}">
            {{ __('Register') }}
        </a>
    </div>
</x-guest-layout>
