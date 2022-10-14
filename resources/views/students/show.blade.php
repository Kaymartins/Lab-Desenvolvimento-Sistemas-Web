<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="mb-4 text-5xl font-extrabold text-sky-800 tracking-tight mt-8 leading-none md:text-4xl lg:text-6xl">
                        <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                            Notas de {{$student->name}}
                        </span>
                    </h1>
                </div>

                @if(session()->has('status'))
                    <div class="p-6 bg-green-400 text-xl mb-8 ">
                        {{session('status')}}
                    </div>
                @endif

                <div class="ml-8 mt-4 flex justify-between">
                    <a href="{{ route('teams.show',$student->team_id) }}">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mb-4">
                            Voltar
                        </button>
                    </a>

                </div>

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-12 ml-8 mr-8 mb-16">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Tarefa
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nota
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Ações
                            </th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($grades as $grade)
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{$grade->task}}
                                </th>

                                <td>
                                    {{$grade->grade}}
                                </td>

                                <td>
                                    <div class="flex gap-2">

                                        <a href="{{ route("grades.edit",$grade->id) }}" class="font-medium">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>

                                        <form method="post" action="{{ route("grades.destroy",$grade->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>



