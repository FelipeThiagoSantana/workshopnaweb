<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <p class="mb-4">Olá <strong>{{ Auth::user()->name}}</strong></p>

                <div class="p-4 text-gray-500">
                    <table class="table-auto w-full">
                        <thead class="dark:text-gray-100">
                            <tr>
                                <th class="">Nivel</th>
                                <th class="p-4">Nome</th>
                                <th >E-mail</th>
                                <th >Data de Cadastro</th>
                                <th class="">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="text-center dark:text-gray-100">
                            @foreach ( $users as $user )
                                <tr class="hover:text-gray-500 ">
                                    <td class="text-center">icone</td>
                                    <td class="p-4">{{ $user->name }}</td>
                                    <td >{{ $user->email }}</td>
                                    <td >{{ $user->created_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-3 dark:text-gray-100 rounded-lg mb-4 mt-6">
                        {{ $users->links() }}
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
