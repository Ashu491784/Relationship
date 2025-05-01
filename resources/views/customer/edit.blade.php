
@extends('layouts.main')

@section('title', 'Edit customer')

@section('content')

<form action="{{route('customer.update', $customer->id)}}" method="POST">
@csrf
@method('put')
@include('customer.form', ['ctitle'=>'Update customer'])
</form>

@endsection