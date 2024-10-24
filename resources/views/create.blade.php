@extends('main')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
  <a href="/" class="btn btn-primary mt-2">Create</a>
  
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/category" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="form-group col-5">
              <label for="exampleInputEmail1">Category name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Categoryname" name="name">
            </div>
          </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
