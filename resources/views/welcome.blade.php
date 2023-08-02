@extends('master')
@section('title', 'Show Grades')

@section('content')
<br>
<div class="container">
    <h1 class="text-center">OCENE</h1>
    <br>
    <div class="row">
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Predmet</th>
                <th>Ocena</th>
                <th>Profesor</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $ocene as $key=>$ocena)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $ocena->predmet }}</td>
                    <td>{{ $ocena->ocena }}</td>
                    <td>{{ $ocena->profesor }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
    @endsection


