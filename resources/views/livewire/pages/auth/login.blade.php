<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }
}; ?>

<div>
    <!-- Session Status -->
    {{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

    {{--    <form wire:submit="login">--}}
    {{--        <!-- Email Address -->--}}
    {{--        <div>--}}
    {{--            <x-input-label for="email" :value="__('Email')" />--}}
    {{--            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />--}}
    {{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
    {{--        </div>--}}

    {{--        <!-- Password -->--}}
    {{--        <div class="mt-4">--}}
    {{--            <x-input-label for="password" :value="__('Password')" />--}}

    {{--            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"--}}
    {{--                            type="password"--}}
    {{--                            name="password"--}}
    {{--                            required autocomplete="current-password" />--}}

    {{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
    {{--        </div>--}}

    {{--        <!-- Remember Me -->--}}
    {{--        <div class="block mt-4">--}}
    {{--            <label for="remember" class="inline-flex items-center">--}}
    {{--                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
    {{--                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
    {{--            </label>--}}
    {{--        </div>--}}

    {{--        <div class="flex items-center justify-end mt-4">--}}
    {{--            @if (Route::has('password.request'))--}}
    {{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" wire:navigate>--}}
    {{--                    {{ __('Forgot your password?') }}--}}
    {{--                </a>--}}
    {{--            @endif--}}

    {{--            <x-primary-button class="ms-3">--}}
    {{--                {{ __('Log in') }}--}}
    {{--            </x-primary-button>--}}
    {{--        </div>--}}
    {{--    </form>--}}
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <div class="flex flex-col justify-center items-center gap-5">
        <img class="rounded-full aspect-square h-16 self-center shadow-lg"
             alt="logo" src="{{asset('scm_logo.png')}}"/>
        <h1 class="text-2xl dark:text-gray-100 text-center font-medium drop-shadow-xl">Welcome to the HRMO
            Management System</h1>
    </div>
    @if($errors->any())
        <div class="flex bg-red-200 border border-red-400 rounded p-5">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-9a1 1 0 11-2 0V7a1 1 0 112 0v2zm0 4a1 1 0 11-2 0v-2a1 1 0 112 0v2z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm self-center leading-5 text-red-700">
                    <x-input-error :messages="$errors->get('email')"/>
                </p>
            </div>
        </div>
    @endif
    <form wire:submit="login">
        <div class="grid grid-cols-1">
            <label class="mt-3 dark:text-gray-100 font-medium text-md" htmlFor="email">Email</label>
            <input wire:model="form.email" class="my-1 drop-shadow focus:ring-2 focus:ring-blue-500 border-0 rounded"
                   type="email" id="email" name="email"
                   autoComplete="email"
                   required/>
            <label class="mt-3 dark:text-gray-100 font-medium text-md" htmlFor="password">Password</label>
            <input wire:model="form.password"
                   class="my-1 drop-shadow border-0 rounded focus:ring-2 focus:ring-blue-500" type="password"
                   id="password"
                   name="password"
                   autoComplete="current-password"
                   required/>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            <div class="block mt-4">
                <label for="remember" class="inline-flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox"
                           class="rounded bg-gray-400 dark:border-gray-700 text-[#377037] shadow-sm ring-0"
                           name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex justify-between mt-3 drop-shadow text-blue-500">
                <a wire:navigate href="{{ route('dashboard') }}"
                   class="drop-shadow focus:outline-0 text-sm underline">{{ __('Forgot your password?') }}</a>
                <a href class="text-sm underline drop-shadow focus:outline-0">{{ __('Create an account') }}</a>
            </div>
            <div class="flex justify-center mt-3">
                <x-primary-button wire:loading.attr="disabled" wire:loading.class="opacity-50">
                    {{ __('LOGIN') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</div>
