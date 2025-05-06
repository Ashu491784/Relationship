@extends('layouts.main')

@section('title', 'Category')

@section('content')
    <div class="card col-10  border-primary mt-2">
        <div class="card-header p-3">
            <div class="row">
                <div class="col">
                    <h3 class="card-title fw-light">Category</h3>
                </div>
                <div class="col">
                    @if($formType === 'add')
                        @include('category.create')
                    @elseif($formType === 'edit')
                        @include('category.edit')
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body p-1">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->CategoryName}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" onclick="updateCategory();"
                                   class="btn btn-primary "><i
                                        class="fa fa-pencil-square text-white"
                                        aria-hidden="true"></i> Update</a>
                                <a class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection