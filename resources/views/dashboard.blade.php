<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Espaço para propagandas !
                </div>
                <div class="p-6 border-b border-gray-200">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Criar nova turma
                    </button>

                    <h1 class="mb-4 text-4xl font-extrabold text-sky-800 tracking-tight mt-8 leading-none md:text-5xl lg:text-6xl">
                        <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                            Turmas
                        </span>
                    </h1>

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-12">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Disciplina
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Ano
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Ações
                                </th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    Lab de sistemas web
                                </th>
                                <td class="py-4 px-6">
                                    2022
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium">
                                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </a>

                                    <a href="#" class="font-medium">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>

                                    <a href="#" class="font-medium">
                                        <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
