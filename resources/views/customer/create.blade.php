
@extends ('layouts.main')

@section('title', 'Add customer')

<form action="{{route('customer.store')}}" method="POST">
    @csrf
    @include('customer.form' , ['title'=> 'Add customer'])
</form>