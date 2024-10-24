@extends('main')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
  <a href="/" class="btn btn-primary mt-2">Create</a>
  
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/addpost" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="form-group col-5">
              <label for="exampleInputEmail1">title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Categoryname" name="title">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-5">
              <label for="exampleInputEmail1">Body</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Categoryname" name="body">
            </div>
          </div>
          <div class="col-sm-5">
            <!-- select -->
            <div class="form-group">
              <label>Select</label>
              <select class="form-control" name="category_id">
              @foreach($models as $model)
              <option value="{{$model->id}}">{{$model->name}}</option>
              @endforeach
              </select>
            </div>
            <input type="hidden" name="like" value="1">
            <input type="hidden" name="dislike" value="1">
          </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
