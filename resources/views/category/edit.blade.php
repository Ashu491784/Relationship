<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    @method('put')
    @include('category.categoryForm',
    ['btn'=>'Edit Category',
    'clr'=>'warning']
    )
</form>