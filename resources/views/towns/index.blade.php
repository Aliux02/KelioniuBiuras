@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Populiacija</th>
            <th>Šalis</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($towns as $town)
        <tr>
            <td>{{ $town->title }}</td>
            <td>{{ $town->population }}</td>
            <td>{{ $town->country->title }}</td>
            <td>
                <form action={{ route('town.destroy', $town->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('town.edit', $town->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('town.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
