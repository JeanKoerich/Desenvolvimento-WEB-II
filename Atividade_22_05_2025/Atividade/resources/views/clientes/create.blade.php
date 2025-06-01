<x-app-layout>
    <x-slot name="header">
        <div class='flex items-center'>
            <div class='w-1/2'>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Cadastrar Cliente') }}</h2>
            </div>
            <div class='w-1/2 flex justify-end'>
                <button type="submit" form="form-cadastrar" class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg text-white mr-2 shadow">
                    Salvar
                </button>
                <a href="{{ route('clientes.index') }}" class='bg-gray-600 hover:bg-gray-800 px-6 py-2 rounded-lg text-white shadow'>
                    Voltar
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class='mb-4 font-bold text-lg'>{{ __("Novo Cliente") }}</h1>

                    <form id="form-cadastrar" method="POST" action="{{ route('clientes.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                            <input type="text" name="nome" id="nome" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none">
                        </div>

                        <div class="mb-4">
                            <label for="idade" class="block text-sm font-medium text-gray-700">Idade</label>
                            <input type="number" name="idade" id="idade" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
