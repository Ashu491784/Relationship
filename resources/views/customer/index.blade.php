@extends('layouts.main')

@section('title', 'view customer')

@section('content')


    <div class="container">
        <div class="card mt-4">
            <div class="card-header p-3">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title fw-bold">Customer</h4>
                    </div>
                    <div class="col">
                        <form action="{{route('customer.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <input class="form-control" type="text" placeholder="customer name" name="customerName" 
                                    id="customerName" value="{{old('id', optional($customer)->id)}}">
                                    
                                    <input class="form-control" type="text" placeholder="cContact" name="Contact" 
                                    id="Contact" value="{{old('id', optional($customer)->id)}}">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-success" type="submite">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Customer</th>
                                    <th>Contact</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($customer as $cu)
                                         <td>{{$cu->id}}</td>
                                         <td>{{$cu->customerName}}</td>
                                         <td>{{$cu->Contact}}</td>
                                         <td>
                                            <a href="{{route('customer.edit', $cu->id)}}" class="btn btn-primary">Edit</a>
                                              <form action="{{route('customer.destroy',$cu->id)}}" method="POST" class="d-inline">
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
        </div>
    
@endsection