@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Aprašas</th>
            <th>Atstumas</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($countries as $country)
        <tr>
            <td>{{ $country->title }}</td>
            <td>{{ $country->description }}</td>
            <td>{{ $country->distance }}</td>
            <td>
                <form action={{ route('country.destroy', $country->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('country.edit', $country->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('country.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
