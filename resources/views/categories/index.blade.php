<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categor&iacute;as
        </h2>
    </x-slot>

    <div class='container '>
        <div class='row'>
            <div class='col-12'>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
            <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Agregar</a>
            

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th style="width:30px;"></th>
                                <th style="width:30px;">Acciones</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{ $category->name }}</td>

                                <td style="width:30px;">
                                    <a href="{{ route('categories.show', $category) }}" class="btn btn-success">Ver</a>
                                </td>
                                <td style="width:30px;">
                                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Editar</a>
                                </td>
                                <td style="width:30px;">
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
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
            </div>
        </div>
    </div>

    
</x-app-layout>
