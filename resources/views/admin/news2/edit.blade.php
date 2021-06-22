@extends('layouts.admin')
@section('title', 'Edit News2')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">News2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('news2.index') }}">News2</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('news2.update', [$news2->id]) }}" method="POST" enctype="multipart/form-data">
                @CSRF
                @method('put')
                <div class="card-body">
                    <div class="col-20">
                        <div class="col-20">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Author Name" value="{{$news2->title}}">
                                <small class="text-danger">@error('title') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="about">about</label>
                                <input type="text" name="about" class="form-control @error('about') is-invalid @enderror" placeholder="about" value="{{$news2->about}}">
                                <small class="text-danger">@error('about') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="category">category</label>
                                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" placeholder="category" value="{{$news2->category}}">
                                <small class="text-danger">@error('category') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="client">client</label>
                                <input type="text" name="client" class="form-control @error('client') is-invalid @enderror" placeholder="client" value="{{$news2->client}}">
                                <small class="text-danger">@error('client') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <strong>Picture : </strong>
                                <input type="file" name="picture" class="form-control" placeholder="picture">
                                <img src="{{ asset('img/uploads/') }}/{{ $news2->picture }}" width="100px">
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="content" value="{{$news2->content}}">
                                <small class="text-danger">@error('content') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="is_published">Published</label>
                                <div class="col">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="is_published" value="0" <?php echo($news2->is_published == '0')?"checked":""; ?> /> Not Publish Now
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="is_published" value="1" <?php echo($news2->is_published == '1')?"checked":""; ?> /> Publish Now
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="form-group">
                                <label for="authorid">Author</label>
                                <input type="text" name="authorid" class="form-control @error('authorid') is-invalid @enderror" placeholder="Authorid" value="{{$news2->authorid}}" readonly>
                                <small class="text-danger">@error('authorid') {{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('news2.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection