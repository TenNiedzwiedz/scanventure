<div class="min-h-screen bg-violet-700">
    <x-navigation />

    <!-- Page Heading -->
    @if(isset($header))
        <header class="bg-violet-900 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-white leading-tight">
                    {{ $header }}
                </h2>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
