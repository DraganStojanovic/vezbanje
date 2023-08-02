@extends('master')
@section('title', 'Add Grade')

@section('content')
<div class="container">
    <form method="POST" action="/add-user-grade" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Predmet</label>
                <input required type="text" name="predmet" class="form-control" placeholder="Unesi predmet">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Ocena</label>
                <input required type="number" name="ocena" class="form-control" placeholder="Unesi ocenu">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Profesor</label>
                <input required type="text" name="profesor" class="form-control" placeholder="Unesi ime profesora">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Unesi podakte o oceni</button>
    </form>
</div>
@endsection
