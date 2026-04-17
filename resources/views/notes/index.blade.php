<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium">Liste des notes</h3>
                        <a href="{{ route('notes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Créer une note
                        </a>
                    </div>

                    <div class="space-y-4">
                        @foreach ($notes as $note)
                            <div class="flex items-center justify-between p-4 border rounded-lg hover:bg-gray-50">
                                <div>
                                    <h4 class="font-bold">{{ $note->title }}</h4>
                                    <p class="text-sm text-gray-600">{{ Str::limit($note->content, 100) }}</p>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="{{ route('notes.show', $note) }}" class="text-blue-600 hover:text-blue-900">Voir</a>
                                    <a href="{{ route('notes.edit', $note) }}" class="text-yellow-600 hover:text-yellow-900">Modifier</a>
                                    <form action="{{ route('notes.destroy', $note) }}" method="POST" onsubmit="return confirm('Supprimer cette note ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
