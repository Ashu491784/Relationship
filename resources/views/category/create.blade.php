
@extends ('layouts.main')

@section('title', 'Add categories')

<form action="{{route('category.store')}}" method="POST">
    @csrf
    @include('category.form' , ['title'=> 'Add category'])
</form>