<section class="space-y-6">
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-delete-karyawan')"
    >{{ __('Hapus Karyawan') }}</x-danger-button>

    <x-modal name="confirm-delete-karyawan" focusable>
        <form method="post" action="{{ route('team.destroy', $team)  }}" class="p-6">
            @csrf
            @method('DELETE')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Apakah anda yakin ingin menghapus karyawan ini?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Karyawan akan dihapus secara permanen. Anda tidak akan dapat mengembalikan data ini.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Hapus Karyawan') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
