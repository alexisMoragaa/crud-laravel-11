@extends('layouts/main')

<div class="container mt-4">
    <h2>Mostrar la informacioon de {{$user->name}}</h2>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-bordered text-center">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{route('index')}}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>