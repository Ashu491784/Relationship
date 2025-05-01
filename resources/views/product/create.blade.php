
@extends ('layouts.app')

@session('title', 'Add Products')

<form action="{{route('product.store')}}" method="POST">
    @csrf
    @include('product.form' , ['ctitle'=> 'Add Products'])
</form>