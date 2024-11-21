@extends('layouts/main')

@section('content')

    <div class="container mt-4">
        <h2>Crud de nombres con laravel 11</h2>
        <div class="row">

            <div class="card ">
                <div class="card-body">
                    <a href="{{route('createUser')}}" class="btn btn-success mb-2">Agregar</a>

                    <table class="table table-sm table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item )
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <form action="{{route('destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{route('show', $item->id)}}" class="btn btn-info">Mostrar</a>
                                            <a href="{{route('edit', $item->id)}}" class="btn btn-warning">Editar</a>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td> No hay datos en la tabla </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end">{{$items->links()}}</div>

                </div>
            </div>

        </div>
    </div>

@endsection
