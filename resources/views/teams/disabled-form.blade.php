<div class="w-100 flex gap-5 ml-8 mt-8">
    <div class="">
        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Disciplina</label>
        <input type="text" id="subject" name="subject" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Lab de Sistemas Web" required
               value="{{ old('subject',$team->subject) }}" readonly disabled>
    </div>
    <div class="">
        <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Ano</label>
        <input type="number" id="year" name="year" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5" required
               value="{{ old('year',$team->year) }}" readonly disabled>
    </div>
</div>
