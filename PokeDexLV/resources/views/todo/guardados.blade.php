@extends('app')
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">EXP</th>
                <th scope="col">HP</th>
                <th scope="col">ATK</th>
                <th scope="col">DEF</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pokemones as $pok)
                <tr>
                    <th scope="row">{{$pok->id}}</th>
                    <td>{{$pok->nombre}}</td>
                    <td>{{$pok->exp}}</td>
                    <td>{{$pok->hp}}</td>
                    <td>{{$pok->atk}}</td>
                    <td>{{$pok->def}}</td>
                </tr>    
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection