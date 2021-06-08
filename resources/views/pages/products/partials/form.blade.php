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
    
    <div class="grid grid-cols-1 mt-5 mx-7">
      {{ Form::label('price', __('products.price').__('products.of_product'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
      {{ Form::number('price', null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent', 'id' =>'categories', 'step' => '0.01', 'min' => '0.01'])}}
      {!! $errors->first('subcategory', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      {{ Form::label('subcategory_id', __('products.subcategory').__('products.of_product'), ['class' => 'uppercase md:text-sm text-xs text-gray-500 text-light font-semibold']) }}
      @if(!isset($product))
      {{ Form::select('subcategory_id', $subcategories, null, ['class' => 'py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent', 'id' =>'categories', 'multiple'=>'multiple', 'name' => 'subcategory_id[]'])}}
      @else
      <select multiple="multiple" name="subcategory_id[]" id="subcategory_id" class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent">
        @foreach($subcategories as $name => $group)
          <optgroup label="{{$name}}">
            @foreach($group as $key => $sub)
              <option value="{{$key}}" @if(in_array($key, $selected_subcategories)) selected="selected"@endif>{{$sub}}</option>
            @endforeach
          </optgroup>
        @endforeach
        </select>
      @endif
      {!! $errors->first('subcategory_id', '<p class="bg-red-100 border border-red-400 py-3 rounded relative text-red-700">:message</p>') !!}
    </div>
    
    <div class="grid grid-cols-1 mt-5 mx-7">
      <label for="photo" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold ">{{ __('actions.upload_photo') . __('products.of_product') }}</label>
      <div class='flex items-center justify-center w-full'>
      <input type='file' class="mt-5" name="photo" id="photo" />
      </div>
    </div>
    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button" onclick="window.location='{{ route("products.index") }}'">Cancel</button>
      <button class='w-auto bg-green-500 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="submit">{{ $verb }}</button>
    </div>
  </div>
</div>
