<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editando Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <p >Editando o nével de acesso do usuário <strong>{{ $user->name }}</strong> </p>
                </div>
                <div class="p-6">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')

                        <label for="level" class=" dark:text-gray-100">Selecione o nivel de acesso deste usuario</label><br>
                        <select name="level" required class="py-1 px-8 rounded">
                            <option value=" " selected disabled>Selecione uma opção</option>
                            <option value="prof">Professor</option>
                            <option value="aluno">Aluno</option>
                            <option value="Admin">Adminstrador</option>
                        </select>
                            <br>
                            <button type="button" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
                </div>
        </div>
    </div>
</x-app-layout>
