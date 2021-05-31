<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <span>{{ __('subcategories.edit_headline') }}</span>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="mb-4">
                                <div class="card-body">
                                    {{ Form::model($subcategory, ['route' => ['subcategories.update', $subcategory->id], 'method' => 'put', 'files' => true]) }}

                                    @csrf

                                    @include('pages.subcategories.partials.form')

                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>