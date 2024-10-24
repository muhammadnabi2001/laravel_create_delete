@extends('main')

@section('title', 'Category')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6 mt-2">
                    <a href="/createpost" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Categry_id</th>
                            <th>like</th>
                            <th>Dislike</th>
                            <th>Delete</th>
                            <th>Detail</th>
                        </tr>
                        @foreach ($models as $model)
                            <tr>
                                <th>{{$model->id}}</th>
                                <td>{{$model->title}}</td>
                                <td>{{$model->body}}</td>
                                <td>{{$model->category_id}}</td>
                                <td>{{$model->like}}</td>
                                <td>{{$model->dislike}}</td>
                                <td>
                                    <form action="/post/{{$model->id}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                      </td>
                                      <td>
                                    <a href="/show_category" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-info"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                        </svg></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
