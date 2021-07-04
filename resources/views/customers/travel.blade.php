@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Kliento ir jo kelionės detalės</div>
    <div class="card-body">
        <h5>Užsakovas: {{ $customer->name }} {{$customer->surname}}</h5>
        <h5>Telefonas: {{ $customer->phone }}</h5>
        <h5>El. paštas: {{ $customer->email }}</h5>
        <hr>
        <h5>Kelionės šalis:  {{ $customer->country->title }}</h5>
        <h5>Lankytini miestai: </h5>
        <table class="table">
            <tr>
                <th>Miesto pavadinimas</th>
                <th>Populiacija</th>
            </tr>
            @foreach ($customer->country->towns as $town)
            <tr>
                <th>{{ $town->title }}</th>
                <th>{{ $town->population }}</th>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
