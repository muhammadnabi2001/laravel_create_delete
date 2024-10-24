@extends('main')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
  <a href="/" class="btn btn-primary m-2">Create</a>

  <!-- form start -->
  <form action="/addpost" method="post">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="form-group col-5">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Title" name="title" value="{{ old('title') }}">

          <!-- Xatolik xabari input ostida chiqadi -->
          @error('title')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
      </div>

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
          <label>Select Category</label>
          <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
            <option value="" disabled selected>Select a Category</option> <!-- Bo'sh variant qo'shildi -->
            @foreach($models as $model)
              <option value="{{ $model->id }}" {{ old('category_id') == $model->id ? 'selected' : '' }}>
                {{ $model->name }}
              </option>
            @endforeach
          </select>

          @error('category_id')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>

        <input type="hidden" name="like" value="1">
        <input type="hidden" name="dislike" value="1">
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
