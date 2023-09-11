<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categor&iacute;as
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="border px-4 py-2">{{$i}}</td>
                                <td class="border px-4 py-2">{{ $category->name }}</td>

                                <td class="border px-4 py-2">#</td>
                            </tr>
                                <?php
                                $i++;
                                ?>
                        @empty
                            <tr class="bg-red-400 text-white text-center">
                                <td colspan="3" class="border px-4 py-2">{{ __('No hay categorias para mostrar') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
