@extends('main')

@section('title', 'Category')

@section('content')
<div class="content-wrapper">
   <div class="card">
      <div class="card-header bg-primary text-white">
         <h3 class="card-title">Category Details</h3>
      </div>
      <div class="card-body">
         <table class="table table-bordered">
            <tbody>
               <tr class="table-info">
                  <th>ID</th>
                  <td class="text-primary">{{ $models->id }}</td>
               </tr>
               <tr class="table-success">
                  <th>Name</th>
                  <td class="text-success">{{ $models->name }}</td>
               </tr>
               <tr class="table-success">
                  <th>Category_id</th>
                  <td class="text-success">{{ $models->category_id }}</td>
               </tr>
               <tr class="table-success">
                  <th>Price</th>
                  <td class="text-success">{{ $models->price }}</td>
               <tr class="table-success">
                  <th>Count</th>
                  <td class="text-success">{{ $models->count }}</td>
               </tr>
               <tr class="table-warning">
                  <th>Created At</th>
                  <td class="text-warning">{{ $models->created_at }}</td>
               </tr>
               <tr class="table-danger">
                  <th>Updated At</th>
                  <td class="text-danger">{{ $models->updated_at }}</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection