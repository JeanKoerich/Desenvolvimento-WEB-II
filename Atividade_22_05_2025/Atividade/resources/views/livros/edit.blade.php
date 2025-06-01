<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Editar Livro') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('livros.update', $livro) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Título</label>
                        <input type="text" name="titulo" value="{{ old('titulo', $livro->titulo) }}"
                            class="w-full border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring focus:ring-indigo-200"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Autor</label>
                        <input type="text" name="autor" value="{{ old('autor', $livro->autor) }}"
                            class="w-full border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring focus:ring-indigo-200"
                            required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-medium mb-2">Cliente (opcional)</label>
                        <select name="cliente_id" class="w-full border-gray-300 rounded-lg px-4 py-2 shadow-sm">
                            <option value="">-- Selecione um cliente --</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}"
                                    {{ $livro->cliente_id == $cliente->id ? 'selected' : '' }}>
                                    {{ $cliente->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('livros.index') }}"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium px-4 py-2 rounded-lg shadow">Cancelar</a>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-lg shadow">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
