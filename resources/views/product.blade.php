@extends('layouts.main')
@section('title', 'Produto por Id')
@section('content')
<h1>Produto! </h1>
@if($id != null)
<p> Exibindo produto id: {{ $id }}</p>
@endif
@endsection