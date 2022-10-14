<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="mb-4 text-5xl font-extrabold text-sky-800 tracking-tight mt-8 leading-none md:text-4xl lg:text-6xl">
                        <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                            Editar turma
                        </span>
                    </h1>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <form method="post" action="{{route('teams.update',$team->id)}}">
                        @csrf
                        @method('PUT')
                        @include('teams.form')
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
