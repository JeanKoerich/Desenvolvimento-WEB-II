<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Editar Cliente') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-lg">{{ __('Editar Cliente') }}</h1>

                    <form id="form-editar" method="POST" action="{{ route('clientes.update', $cliente) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                            <input type="text" name="nome" id="nome"
                                value="{{ old('nome', $cliente->nome) }}" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none">
                        </div>

                        <div class="mb-4">
                            <label for="idade" class="block text-sm font-medium text-gray-700">Idade</label>
                            <input type="number" name="idade" id="idade"
                                value="{{ old('idade', $cliente->idade) }}" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none">
                        </div>

                        <div class="flex justify-end gap-4">
                            <a href="{{ route('clientes.index') }}"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium px-4 py-2 rounded-lg shadow">
                                Voltar
                            </a>
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-lg shadow">
                                Atualizar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
