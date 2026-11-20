<x-layouts.app>
    <x-main.user.navbar />

    {{-- {{ $slot }}
    @if (Auth::check() && request()->path() !== 'login' && request()->path() !== 'register')
        <x-ui.user.cta />
    @endif --}}

    {{-- <x-main.user.footer /> --}}

    {{-- Flash Messages --}}
    {{-- <div class="fixed top-20 right-6 z-50 space-y-4">
        @if (session('success'))
            <x-ui.user.toast type="success" :message="session('success')" />
        @endif

        @if (session('error'))
            <x-ui.user.toast type="error" :message="session('error')" />
        @endif

        @if (session('warning'))
            <x-ui.user.toast type="warning" :message="session('warning')" />
        @endif

        @if (session('info'))
            <x-ui.user.toast type="info" :message="session('info')" />
        @endif
    </div> --}}
</x-layouts.app>
