@extends('adminlte::page')

@section('title', 'Dashboard:: Ultimate Fitness Gym')

@section('content_header')
<div class="pen-title">
    <h1><b>ULTIMATE FITNESS GYM</b></h1>
</div>
@stop

@section('content')
<style>
div.prop {
  width: 200px;
  padding: 10px;
  margin: 35px;
}
</style>
<div class="container">
    <div class="row">
        <div class="card bg-primary text-white prop col-sm-2">
            <div class="card-body">Primary card</div>
        </div>
        <div class="card bg-success text-white prop col-sm-2">
            <div class="card-body">Success card</div>
        </div>
        <div class="card bg-warning text-white prop col-sm-2">
            <div class="card-body">Warning card</div>
        </div>
        <div class="card bg-danger text-white prop col-sm-2">
            <div class="card-body">Danger card</div>
        </div>
    </div>
</div>
@stop