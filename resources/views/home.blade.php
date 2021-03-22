<style>
.figures {
    flex: 0 0 250px;
}

</style>


@extends('adminlte::page')

@section('title', 'Dashboard:: Ultimate Fitness Gym')

@section('content_header')
<div class="pen-title">
    <h1>ULTIMATE FITNESS GYM</h1>
</div>
@stop

@section('content')

<div class="d-flex flex-nowrap justify-content-start align-items-baseline overflow-auto my-4">
        <div class="card bg-primary text-white figures">
            <div class="card-body">
            <h3 class="mb-4 text-capitalize">Total Received</h3>
            <h5 class="font-weight-normal">1223</h5>
            
            </div>
        </div>
        <div class="card bg-success text-white mx-3 figures">
            <div class="card-body">
            <h3 class="mb-4 text-capitalize">Total Received</h3>
            <h5 class="font-weight-normal">1223</h5>
            
            </div>
        </div>
        <div class="card bg-warning text-white mr-3 figures">
            <div class="card-body">
            <h3 class="mb-4 text-capitalize">Total Received</h3>
            <h5 class="font-weight-normal">1223</h5>

            </div>
        </div>
        <div class="card bg-danger text-white figures">
            <div class="card-body">
            <h3 class="mb-4 text-capitalize">Total Received</h3>
            <h5 class="font-weight-normal">1223</h5>

            </div>
        </div>
</div>


@stop