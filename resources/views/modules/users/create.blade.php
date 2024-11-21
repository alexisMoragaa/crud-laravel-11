@extends('layouts/main')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                           @method('POST')

                            <label for="" class="">Nombre</label>
                            <input type="text" name="name" class="form-control">         
                            
                            <div class="d-flex justify-content-between">
                                <a href="{{route('index')}}" class=" btn btn-secondary mt-3">Cancelar</a>
                                <button class="btn btn-success mt-3" type="submit">Enviar</button>           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection