@extends('layouts/main')

@section('content')
    <div class="container mt-4">
        <h2>Actualizar Usuario: {{$user->name}}</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update', $user->id)}}" method="POST">
                            @csrf
                           @method('PUT')

                            <label for="" class="">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">         
                            
                            <div class="d-flex justify-content-between">
                                <a href="{{route('index')}}" class=" btn btn-secondary mt-3">Cancelar</a>
                                <button class="btn btn-success mt-3" type="submit">Actualizar</button>           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection