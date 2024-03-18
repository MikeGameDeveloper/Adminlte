@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalii</h1>
@stop

@section('content')
    <table class="table table-bordered mt-3">
        <tbody>
                <tr>
                    <td>Nume</td>
                    <td>{{$thing->name}}</td>
                </tr>
                <tr>
        </tbody>
    </table>
@stop

@section('css')

@stop

@section('js')

@stop