@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>List of things</h1>
@stop

@section('content')
    <a class="btn btn-dark" href="{{ route('things.create') }}">Adauga</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nume</th>
            </tr>
        </thead>
        <tbody>
            @forelse($things as $thing)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$thing->name}}</td>
                    <td>
                        <a href="{{ route('things.edit', ['thing'=>$thing->id]) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('things.show', ['thing'=>$thing->id]) }}" class="btn btn-dark">Show</a>
                        <a href="{{ route('things.destroy', ['thing'=>$thing->id]) }}" class="btn btn-dark">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td collspan="6">
                        No data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
   
@stop

@section('css')

@stop

@section('js')

@stop