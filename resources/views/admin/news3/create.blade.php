@extends('layouts.admin')
@section('title', 'Create News3')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">pundak</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href=" {{ route('news3.index') }} ">pundak</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('news3.store') }}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="card-body">
                    <div class="col-20">
                        <div class="col-20">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="News3 Title">
                                <small class="text-danger">@error('title') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="about">about</label>
                                <input type="text" name="about" class="form-control @error('about') is-invalid @enderror" placeholder="about">
                                <small class="text-danger">@error('about') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="category">category</label>
                                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" placeholder="category">
                                <small class="text-danger">@error('category') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="client">client</label>
                                <input type="text" name="client" class="form-control @error('client') is-invalid @enderror" placeholder="client">
                                <small class="text-danger">@error('client') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <strong>Picture :</strong>
                                <input type="file" name="picture" class="form-control" placeholder="picture">
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Content">
                                <small class="text-danger">@error('content') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="is_published">Published</label>
                                <div class="col">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="is_published" value="0" /> Not Publish Now
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="is_published" value="1" /> Publish Now
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="authorid">Author</label>
                                <select class="form-control" name="authorid">
                                    @foreach ($data as $author)
                                    <option value='{{$author->id}}'>{{$author->name}}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">@error('authorid') {{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href=" {{ route('news3.index') }} " class="m-1 btn btn-outline-danger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection