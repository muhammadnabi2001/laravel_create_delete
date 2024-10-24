@extends('main')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
  <a href="/" class="btn btn-primary mt-2">Create</a>

  <!-- form start -->
  <form action="/createcomment" method="post">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="form-group col-5">
          <label for="exampleInputEmail1">Body</label>
          <input type="text" class="form-control @error('body') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Body" name="body" value="{{ old('body') }}">
          
          @error('body')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="col-sm-5">
        <div class="form-group">
          <label>Select</label>
          <select class="form-control @error('post_id') is-invalid @enderror" name="post_id">
            <option value=""></option>
            @foreach($models as $model)
              <option value="{{$model->id}}">{{$model->body}}</option>
            @endforeach
          </select>

          @error('post_id')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
