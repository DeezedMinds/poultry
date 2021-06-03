<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Detalle del recurso #{{$resource->id}}, {{ $resource->name }}
            </h2>
            <button class="bg-green-300 hover:bg-green-400 text-black-800 font-bold py-2 px-4 rounded inline-flex items-center" type="button" onclick="window.location='{{ route("resources.edit", $resource->id) }}'">
                <span>{{ __('actions.edit') }}</span>
                <img src="{{ asset('vendor/blade-heroicons/o-pencil.svg') }}" class="text-red-800 h-4 ml-1"/>
            </button>
        </div>
    </x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                    {{__('resources.name')}}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $resource->name}}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                    {{__('resources.pdf')}}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <a href="{{$resource->pdf}}" download="{{$resource->name}}.pdf">
                            <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span>Descargar</span>
                            </button>
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-app-layout>