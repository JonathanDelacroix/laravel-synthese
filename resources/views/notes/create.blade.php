<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('notes.store') }}">

                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Titre')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="" required autofocus />
                            <x-input-error :messages="" class="mt-2" />
                        </div>

                        <!-- Content -->
                        <div class="mt-4">
                            <x-input-label for="content" :value="__('Contenu')" />
                            <textarea id="content" name="content" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="5" required></textarea>
                            <x-input-error :messages="" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-secondary-button onclick="window.history.back()" class="mr-3">
                                {{ __('Annuler') }}
                            </x-secondary-button>
                            <x-primary-button>
                                {{ __('Enregistrer') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>