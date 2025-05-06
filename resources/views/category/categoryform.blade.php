<div class="row">
    <div class="col-8">
        <input name="CategoryName" value="{{ old('CategoryName',$category->CategoryName ?? "") }}"
               class="form-control" placeholder="Add Category" required>
    </div>
    <div class="col-4">
        <button type="submit" class="btn btn-{{$clr}}">{{$btn}}</button>
    </div>
</div>