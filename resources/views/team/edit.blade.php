<x-app-layout>
    <div class="py-12">
        <div x-data="{ showForm: true }" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center" x-show="showForm">
            <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg p-6 w-96 mx-auto">
                <div class="text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div>
                            <div class="flex flex-col mt-3">
                                <label for="name" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Karyawan</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $team->name) }}" class="mt-1 px-4 py-2 border border-gray-900 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" required>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-3">
                                <label for="jabatan" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Peran</label>
                                <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $team->jabatan) }}" class="mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" required>
                                @error('jabatan')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-3">
                                <label for="email" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email', $team->email) }}" class="mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" required>
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-3">
                                <label for="phone" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Telepon</label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone', $team->phone) }}" class="mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" required>
                                @error('phone')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-between mt-6">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg w-full">
                                    Simpan 
                                </button>
                                <button type="button" x-on:click="showForm = false; window.location.href='{{ route('team.index') }}'" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded-lg w-full ml-2">
                                    Batal
                                </button>

                            </div>

                        </div>
                    </form>
                    
                </div>
                <div class="mt-4 text-center  ">
                    @include('team.partials.delete', ['team' => $team])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
