<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-6">
                <form method="GET" action="{{ url('clientes/busca') }}" class="flex items-center w-full max-w-md space-x-2">
                    <input type="text" name="busca" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200"
                        placeholder="Buscar nome ou idade" value="{{ $busca ?? '' }}">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Buscar</button>
                    @if (!empty($busca))
                        <a href="{{ url('clientes') }}"
                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-800">X</a>
                    @endif
                </form>

                <a href="{{ route('clientes.create') }}"
                class="ml-4 bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-lg shadow">
                Novo Cliente
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full text-left">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-6 font-semibold">Nome</th>
                            <th class="py-3 px-6 font-semibold">Idade</th>
                            <th class="py-3 px-6 font-semibold">Livros</th>
                            <th class="py-3 px-6 font-semibold">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr class="border-t hover:bg-gray-50">
                                <td class="py-3 px-6">{{ $cliente->nome }}</td>
                                <td class="py-3 px-6">{{ $cliente->idade }}</td>
                                <td class="py-3 px-6">
                                    @if ($cliente->livros->count())
                                        {{ $cliente->livros->pluck('titulo')->join(', ') }}
                                    @else
                                        <em>Nenhum livro</em>
                                    @endif
                                </td>
                                <td class="py-3 px-6 space-x-2">
                                    <a href="{{ route('clientes.edit', $cliente) }}"
                                        class="text-blue-600 hover:underline">Editar</a>
                                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-4 px-6 text-center text-gray-500">
                                    Nenhum cliente encontrado.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
