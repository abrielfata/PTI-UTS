<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Our Teams') }}
        </h2>
    </x-slot>

    <main class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <x-alert massage="{{ session('success') }}" />
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6 flex items-center justify-between">
                        <form method="GET" action="{{ route('team.index') }}"
                            class="flex items-center gap-4 w-full sm:w-auto">
                            <div class="relative w-full">
                                <input type="text" name="search" placeholder="Search by name or jabatan..."
                                    class="w-full px-4 py-2 text-gray-900 dark:text-gray-100 bg-gray-200 dark:bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    value="{{ request('search') }}">
                                <button type="submit"
                                    class="absolute right-3 top-2.5 text-gray-600 dark:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 18l6-6m0 0l-6-6m6 6H4"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>

                        @if (auth()->user()->role == 'admin')
                            <div class="space-x-4">
                                <a href="{{ route('team.create') }}"
                                    class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">
                                    Add Team
                                </a>
                                <a href="{{ route('team.report') }}"
                                    class="inline-block bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg">
                                    Laporan
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    @foreach ($teams as $team)
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div
                                class="mt-4 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <div>
                                        <p class="text-xl font-bold text-white">{{ $team->name }}
                                            <span
                                                class="ml-2 inline-block px-3 py-1 text-sm font-medium text-white bg-gray-500 rounded-full">
                                                {{ ucfirst($team->jabatan) }}
                                            </span>
                                        </p>
                                        <p class="font-semibold text-gray-400">{{ $team->email }}</p>
                                        <p class="font-semibold text-gray-400">{{ $team->phone }}</p>
                                    </div>
                                </div>

                                @if (auth()->user()->role == 'admin' || $team->user_id == auth()->user()->id)
                                    <a href="{{ route('team.edit', $team->id) }}"
                                        class="inline-block ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        Edit Team
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer class="bg-gray-800 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-white text-sm font-semibold">© {{ date('Y') }} Kepstore. </p>
                <p class="text-gray-400 text-sm mt-2">
                    Made by<span class="font-semibold"> 10122219 | Abriel Fata Saptaji | IF-06</span>
                </p>
            </div>
            <div class="flex justify-center space-x-6 mt-6">
                <a href="https://shopee.co.id/kepswell" class="text-blue-400 hover:text-white">Shopee</a>
                <a href="https://www.instagram.com/kepstore/" class="text-blue-400 hover:text-white">Instagram</a>
                <a href="https://www.tiktok.com/@kepswell" class="text-blue-400 hover:text-white">Tiktok</a>
            </div>
        </div>
    </footer>
</x-app-layout>
