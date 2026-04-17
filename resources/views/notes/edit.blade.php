<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier la note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <a href="{{ route('notes.index') }}" class="text-blue-600 hover:underline">← Retour à la liste</a>
                    </div>

                    <form action="{{ route('notes.update', $note) }}" method="POST">
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                            <input type="text" name="title" id="title" value="" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            @error('title')
                                <p class="text-red-500 text-xs mt-1"></p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
                            <textarea name="content" id="content" rows="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1"></p>
                            @enderror
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
