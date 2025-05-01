
<div class="container mt-4">
    <div class="card col-7 border-danger mb-3">
        <div class="card-header">
            <h2 class="card-title text-center ">{{$title}}</h2>
        </div>
        <div class="card-body">
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" placeholder="Enter ID" name="id" id="id"  required>
            
            </div>
            
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Product Name" name="AuthorName" id="AuthorName"  required>
            
            </div>
            
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="price" name="contact" id="contact" required>
            
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{route('product.index')}}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>