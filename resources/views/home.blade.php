@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between" style="background-image: linear-gradient(-90deg, white, grey);">
        <div class="font-weight-bold" style="font-size: 20px; color: black;"><i class="fas fa-book pr-2"></i>Manage Entries</div>

<button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus pr-2"></i>New</button>
</div>
    </div>

        <div class="container" style="background-image: linear-gradient(-90deg, white, white);">

            <div class="row pb-4 d-flex">

                <button class="btn btn-dark mt-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus pr-1"></i>Add Verse</button>
                <div class="pr-3"></div>
                 <button class="btn btn-info mt-4"><i class="fas fa-edit pr-1"></i>Add Name</button>
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
{{-- modals --}}
@include('modals.verse')
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop