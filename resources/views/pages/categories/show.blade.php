<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('categories.show_headline') }} #{{$category->id}}, {{ $category->name }}
            </h2>
            <button class="bg-green-300 hover:bg-green-400 text-black-800 font-bold py-2 px-4 rounded inline-flex items-center" type="button" onclick="window.location='{{ route("categories.edit", $category->id) }}'">
                <span>{{ __('actions.edit') }}</span>
                <img src="{{ asset('vendor/blade-heroicons/o-pencil.svg') }}" class="text-red-800 h-4 ml-1"/>
            </button>
        </div>
    </x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                    {{__('categories.image')}}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <img src="{{$category->image}}" alt="" srcset="">
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                    {{__('categories.name')}}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $category->name}}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                    {{__('categories.group')}}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ App\Models\Category::GROUPS[$category->group_id]}}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-app-layout>