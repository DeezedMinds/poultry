<div class="flex bg-gray-200 items-center justify-center">
  <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="grid grid-cols-1 mt-5 mx-7">
        {{ Form::label('name', __('resources.name').__('resources.of_resource'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
        {{ Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent']) }}
        {!! $errors->first('name', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
    </div>
    <div class="grid grid-cols-1 mt-5 mx-7">
      <label for="pdf" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold ">{{ __('actions.upload_pdf') . __('resources.of_resource') }}</label>
      <div class='flex items-center justify-center w-full'>
      <input type='file' class="mt-5" name="pdf" id="pdf" accept="application/pdf"/>
      </div>
    </div>
    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button" onclick="window.location='{{ route("resources.index") }}'">Cancel</button>
      <button class='w-auto bg-green-500 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="submit">{{ $verb }}</button>
    </div>
  </div>
</div>
