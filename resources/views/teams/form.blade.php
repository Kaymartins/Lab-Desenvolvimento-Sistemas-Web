<div class="pb-1 mt-3 mb-3">
    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Disciplina</label>
    <input type="text" id="subject" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Lab de Sistemas Web" required
    value="{{ old('subject',$team->subject) }}">
</div>
<div class="pb-1 mb-3 w-full">
    <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Ano</label>
    <input type="number" id="year" name="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5" required
    value="{{ old('year',$team->year) }}">
</div>

