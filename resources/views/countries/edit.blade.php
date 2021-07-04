@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime šalies informaciją</div>


        

                <div class="card-body">
                    <form method="POST" action="{{ route('country.update', $country->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="title" class="form-control" value="{{ $country->title }}">

                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @if($errors->any())
                            <h4 style="color: red">{{$errors->first()}}</h4>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <label for="">Atstumas</label>
                            <input type="text" name="distance" class="form-control" value="{{ $country->distance }}">
                        </div>
                        <div class="form-group">
                            <label for="">Aprašas</label>
                            <textarea type="text" name="description" rows=10 cols=100 class="form-control">{{ $country->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
