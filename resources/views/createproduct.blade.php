@extends('main')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">
  <a href="/" class="btn btn-primary mt-2">Create</a>

  <form action="/addproduct" method="post">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="form-group col-5">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Product name" name="name" value="{{ old('name') }}">

          @error('name')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="col-sm-5">
        <div class="form-group">
          <label>Select Category</label>
          <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
            <option value="" disabled selected>Select a Category</option> 
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
      </div>

      <div class="row">
        <div class="form-group col-5">
          <label for="exampleInputEmail1">Price</label>
          <input type="number" class="form-control @error('price') is-invalid @enderror" id="exampleInputEmail1" placeholder="Price" name="price" value="{{ old('price') }}">

          @error('price')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="form-group col-5">
          <label for="exampleInputEmail1">Count</label>
          <input type="number" class="form-control @error('count') is-invalid @enderror" id="exampleInputEmail1" placeholder="Count" name="count" value="{{ old('count') }}">

          @error('count')
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
