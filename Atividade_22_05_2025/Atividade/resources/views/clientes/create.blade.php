<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Cadastrar Cliente') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-lg">{{ __('Novo Cliente') }}</h1>
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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

                        <div class="flex justify-end gap-4">
                            <a href="{{ route('clientes.index') }}"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium px-4 py-2 rounded-lg shadow">Cancelar</a>
                            <button href="{{ route('clientes.index') }}" type="submit"
                                class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-lg shadow">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
