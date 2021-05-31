<div class="flex bg-gray-200 items-center justify-center">
  <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="grid grid-cols-4 mt-5 mx-7">
    <div class="grid col-span-3 pr-2">
        {{ Form::label('name', __('products.name').__('products.of_product'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
        {{ Form::text('name', null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent']) }}
        {!! $errors->first('name', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
    </div>
    <div class="grid col-span-1">
        {{ Form::label('featured', __('products.featured'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
        {{ Form::checkbox('featured', true, isset($product->featured) ? $product->featured : false, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent']) }}
        {!! $errors->first('featured', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
    </div>
    </div>
    
    <div class="grid grid-cols-1 mt-5 mx-7">
      {{ Form::label('description', __('products.description').__('products.of_product'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
      {{ Form::textarea('description', null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent']) }}
      {!! $errors->first('description', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        {{ Form::label('price', __('products.price').__('products.of_product'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
        {{ Form::number('price', null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent', 'id' =>'categories', 'step' => '0.1', 'min' => '0.1'])}}
        {!! $errors->first('subcategory', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
      </div>
      <div class="grid grid-cols-1">
        {{ Form::label('subcategory_id', __('products.subcategory').__('products.of_product'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
        {{ Form::select('subcategory_id', $subcategories, null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent', 'id' =>'categories'])}}
        {!! $errors->first('subcategory_id', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
      </div>
    </div>
    
    <div class="grid grid-cols-1 mt-5 mx-7">
      <label for="photo" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold ">{{ __('products.upload_photo') . __('products.of_product') }}</label>
      <div class='flex items-center justify-center w-full'>
        <label for="photo" class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-green-300 group'>
          <div class='flex flex-col items-center justify-center pt-7'>
            <svg class="w-10 h-10 text-green-400 group-hover:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <p class='lowercase text-sm text-gray-400 group-hover:text-green-600 pt-1 tracking-wider'>{{__('products.upload_photo') . __('products.of_product')}}</p>
          </div>
          <input type='file' class="hidden" name="photo" id="photo" />
        </label>
      </div>
    </div>
    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button" onclick="window.location='{{ route("products.index") }}'">Cancel</button>
      <button class='w-auto bg-green-500 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="submit">{{ $verb }}</button>
    </div>
    
  </div>
</div>
