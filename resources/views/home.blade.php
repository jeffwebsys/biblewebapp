@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h3 class="d-flex justify-content-center pb-2">Verse Entries</h3>
        <div class="container">
            <div class="row pb-4 d-flex">
                <button class="btn btn-dark">Add New Verse</button>
                <div class="pr-3"></div>
                 <button class="btn btn-success">Add New Name</button>
            </div>
            <div class="row d-flex">
                
        <table class="table border table-hover table-bordered small">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
     
  </tbody>
</table>
</div>
</div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop