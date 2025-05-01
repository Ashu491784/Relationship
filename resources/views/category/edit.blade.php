
@extends('layouts.main')

@section('title', 'Edit Category')

@section('content')

<form action="{{route('category.update', $category->id)}}" method="POST">
@csrf
@method('put')
@include('category.form', ['ctitle'=>'Update category'])
</form>

@endsection