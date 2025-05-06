@extends('layouts.main')

@section('title', 'view Product')

@section('content')


    <div class="container">
        <div class="card mt-4">
            <div class="card-header p-3">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title fw-bold">Product</h4>
                    </div>
                    <div class="col">
                        <form action="{{route('product.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <input class="form-control" type="text" placeholder="product No" name="productNo" 
                                    id="productNo">
                                </div>
                                <div class="col-8 mt-2">
                                    <input class="form-control" type="text" placeholder="product" name="productName" 
                                    id="productName">
                                </div>
                                <div class="col-8 mt-2">
                                    <input class="form-control" type="text" placeholder="unit price" name="price" 
                                    id="price">
                                </div>
                                <div class="col-8 mt-2">
                                    <input class="form-control" type="img" placeholder="product" name="img" 
                                    id="img">
                                </div>

                                <div class="col-4">
                                    <button class="btn btn-primary" type="submite">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            {{-- <div class="card mt-5">
                <div class="card-header">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($category as $ca)
                                         <td>{{$ca->id}}</td>
                                         <td>{{$ca->CategoryName}}</td>
                                         <td>
                                            <a href="{{route('category.edit', $ca->id)}}" class="btn btn-primary">Edit</a>
                                              <form action="{{route('category.destroy',$ca->id)}}" method="POST" class="d-inline">
                                                      @csrf
                                                     @method('delete')
                                      <a href="" class="btn btn-danger">Delete</a>
                                         </td>
                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    
@endsection