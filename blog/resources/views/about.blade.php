
@extends('Layout')
@section('title','Про-Блог')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <div class="col-md-8">
 <h1>Это моя страница</h1>

        </div>

@endsection
@section('search')

        <div class="card my-4">
  <h5 class="card-header">Поиск</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Начали!</button>
      </span>
    </div>
  </div>
</div>
@endsection