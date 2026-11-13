<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-sm font-medium text-slate-700" />
            <x-text-input
                id="name"
                class="mt-2 block w-full rounded-2xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-800 shadow-sm transition focus:border-teal-500 focus:bg-white focus:ring-4 focus:ring-teal-100"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-700" />
            <x-text-input
                id="email"
                class="mt-2 block w-full rounded-2xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-800 shadow-sm transition focus:border-teal-500 focus:bg-white focus:ring-4 focus:ring-teal-100"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-slate-700" />
            <x-text-input
                id="password"
                class="mt-2 block w-full rounded-2xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-800 shadow-sm transition focus:border-teal-500 focus:bg-white focus:ring-4 focus:ring-teal-100"
                type="password"
                name="password"
                required
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium text-slate-700" />
            <x-text-input
                id="password_confirmation"
                class="mt-2 block w-full rounded-2xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-800 shadow-sm transition focus:border-teal-500 focus:bg-white focus:ring-4 focus:ring-teal-100"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center rounded-2xl bg-gradient-to-r from-[#0f766e] to-[#f59e0b] px-5 py-3 text-xs font-black tracking-[0.18em] text-white shadow-lg shadow-amber-500/20 transition hover:translate-y-[-1px] hover:shadow-xl hover:shadow-amber-500/20">
                {{ __('REGISTER') }}
            </x-primary-button>
        </div>

        <p class="text-center text-sm text-slate-600">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold text-teal-700 transition hover:text-teal-800">Masuk</a>
        </p>
    </form>
</x-guest-layout>
