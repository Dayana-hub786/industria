@extends('layouts.app')
@section('title','Lista de setores')
@section('content')
<h1>Lista de setores</h1>
<table class="table" >
    <thead class="table-info">
        <th>ID</th>
        <th>Nome</th>
  </thead>
  <tbody>
      @foreach($setores as $setor)
      <tr class="table-info">
        <td>{{ $setor->id}}</td>
        <td>{{ $setor->nome}}</td>

      </tr>
@endforeach     

</tbody>
</table>
@endsection