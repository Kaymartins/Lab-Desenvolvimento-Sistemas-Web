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
                    <img src="{{$banner->path}}" style="max-width: 600px; max-height: 800px">
                </div>
                <div class="p-6 border-b border-gray-200">


                        @if(session()->has('status'))
                            <div class="p-6 bg-green-400 text-xl mb-8 ">
                                {{session('status')}}
                            </div>
                        @endif

                    <a href="{{ route('teams.create') }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Criar nova turma
                        </button>
                    </a>

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
                            @foreach($teams as $team)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                        {{$team->subject}}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{$team->year}}
                                    </td>
                                    <td class="py-4 px-6 flex gap-2">
                                        <a href="{{ route('teams.show',$team->id) }}" class="font-medium">
                                            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </a>

                                        <a href="{{ route('teams.edit',$team->id) }}" class="font-medium">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>

                                        <form method="post" action="{{ route('teams.destroy',$team->id) }}">
                                            @csrf
                                            @method('DELETE')
                                                <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
