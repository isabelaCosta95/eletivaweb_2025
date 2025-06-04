@extends('layout')

@section('principal')
  <h1>Bem vindo Adm! {{Auth::user()->name}} </h1>
@endsection