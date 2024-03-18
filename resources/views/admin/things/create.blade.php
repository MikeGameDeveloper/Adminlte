@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add a thing</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-6">
        @include('partials.admin.errors')
        <form action="{{ route('things.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Nume">
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop