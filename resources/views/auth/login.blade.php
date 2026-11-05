<x-guest-layout>
    <x-auth-session-status class="mb-5" :status="session('status')" />

    @if (session('error'))
        <div class="mb-5 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm font-medium text-rose-700">
            {{ session('error') }}
        </div>
    @endif

    <div class="mb-5 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600">
        <p class="font-semibold text-slate-800">
            {{ $role === 'admin' ? 'Login Admin' : 'Login User' }}
        </p>
        <p class="mt-1">
            {{ $role === 'admin' ? 'Akses khusus administrator untuk mengelola website.' : 'Login untuk masuk ke dashboard pengguna.' }}
        </p>
    </div>

    <form method="POST" action="{{ $role === 'admin' ? route('admin.login.store') : route('login') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-700" />
            <x-text-input
                id="email"
                class="mt-2 block w-full rounded-2xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-800 shadow-sm transition focus:border-teal-500 focus:bg-white focus:ring-4 focus:ring-teal-100"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
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
                autocomplete="current-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between gap-3">
            <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-slate-600">
                <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-teal-600 focus:ring-teal-500" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-teal-700 transition hover:text-teal-800" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center rounded-2xl {{ $role === 'admin' ? 'bg-gradient-to-r from-[#0f172a] to-[#7c3aed]' : 'bg-gradient-to-r from-[#0f766e] to-[#0f172a]' }} px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-teal-500/20 transition hover:translate-y-[-1px] hover:shadow-xl hover:shadow-teal-500/20">
                {{ $role === 'admin' ? 'Masuk sebagai Admin' : 'Log in' }}
            </x-primary-button>
        </div>

        <p class="text-center text-sm text-slate-600">
            {{ $role === 'admin' ? 'Bukan admin?' : 'Belum punya akun?' }}
            @if ($role === 'admin')
                <a href="{{ route('login') }}" class="font-semibold text-teal-700 transition hover:text-teal-800">Login user</a>
            @else
                <a href="{{ route('register') }}" class="font-semibold text-teal-700 transition hover:text-teal-800">Daftar sekarang</a>
            @endif
        </p>

        @if ($role !== 'admin')
            <p class="text-center text-xs text-slate-500">
                Admin login khusus: <a href="{{ route('admin.login') }}" class="font-semibold text-violet-700">Klik di sini</a>
            </p>
        @endif
    </form>
</x-guest-layout>
