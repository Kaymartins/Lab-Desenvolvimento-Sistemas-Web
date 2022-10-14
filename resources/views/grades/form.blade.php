<div class="pb-1 mt-3 mb-3">
    <label for="task" class="block mb-2 text-sm font-medium text-gray-900">Tarefa</label>
    <input type="text" id="task" name="task" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" required
           value="{{ old('task',$grade->task) }}">
</div>
<div class="pb-1 mb-3 w-full">
    <label for="grade" class="block mb-2 text-sm font-medium text-gray-900">Nota</label>
    <input type="number" id="grade" name="grade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5" required
           value="{{ old('grade',$grade->grade) }}">
</div>
