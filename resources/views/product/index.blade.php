@extends('layouts.main')

@section('title', 'view Product')

@section('content')
@include('product.form' , ['title'=> 'Add Products'])
@endsection