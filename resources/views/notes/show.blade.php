<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $note->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <a href="{{ route('notes.index') }}" class="text-blue-600 hover:underline">← Retour à la liste</a>
                    </div>

                    <div class="prose max-w-none">
                        <h3 class="text-2xl font-bold mb-4">{{ $note->title }}</h3>
                        <p class="whitespace-pre-line text-gray-700">{{ $note->content }}</p>
                    </div>

                    <div class="mt-8 pt-6 border-t flex space-x-4">
                        <a href="{{ route('notes.edit', $note) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
