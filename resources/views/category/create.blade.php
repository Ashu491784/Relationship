<form action="{{route('category.store')}}" method="post">
    @csrf
    @include('category.categoryform',
    ['btn'=>'Add Category',
    'clr'=>'primary']
    )
</form>