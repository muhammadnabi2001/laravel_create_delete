@extends('main')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
  <a href="/" class="btn btn-primary mt-2">Create</a>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/createcomment" method="post">
        @csrf
        <div class="card-body">
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
              <select class="form-control" name="post_id">
              @foreach($models as $model)
              <option value="{{$model->id}}">{{$model->body}}</option>
              @endforeach
              </select>
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
