<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles de Categoría
        </h2>
    </x-slot>

    <div class='container '>
        <div class='row'>
            <div class='col-12'>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">

                                <h3 class="text-xl font-semibold">{{ $category->name }}</h3>

                                <div class="mt-4">
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Volver</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

