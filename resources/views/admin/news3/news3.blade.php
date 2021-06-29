@extends('layouts.admin')
@section('title', 'News3')
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
          <li class="breadcrumb-item active">pundak</li>
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
        <div class="d-flex justify-content-between">
          <h3 class="card-title">inputan artikel pundak</h3>
          <a href="{{route('news3.create')}}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Create</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table-author" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>About</th>
              <th>Category</th>
              <th>Client</th>
              <th>Picture</th>
              <th>Content</th>
              <th>Published</th>
              <th>Author</th>
              <th>Dibuat Pada</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($news3 as $newss)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $newss->title }}</td>
              <td>{{ $newss->about }}</td>
              <td>{{ $newss->category }}</td>
              <td>{{ $newss->client }}</td>
              <td>
                <a href="{{ asset('img/uploads/') }}/{{ $newss->picture }}">Lihat Gambar</a>
              </td>
              <td>{{ $newss->content }}</td>
              <td>

                <?php if ($newss->is_published == 0) { ?>
                  <small class="badge badge-danger"> Not Published</small>
                <?php } else if ($newss->is_published == 1) { ?>
                  <small class="badge badge-success"> Published</small>
                <?php } ?>

              </td>
              <td><?php
                  foreach ($author as $authors)
                    if ($newss->authorid == $authors->id) {
                      echo $authors->name;
                    }
                  ?></td>
              <td>{{ $newss->created_at->isoFormat('LLLL') }}</td>
              <td>
                <a href="{{ route('news3.edit', [$newss->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                <form class="float-left m-1" action="{{ route('news3.destroy', [$newss->id]) }}" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</a>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>About</th>
              <th>Category</th>
              <th>Client</th>
              <th>Picture</th>
              <th>Content</th>
              <th>Published</th>
              <th>Author</th>
              <th>Dibuat Pada</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

</section>
<!-- /.content -->
@endsection
@push('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatablesresponsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatablesresponsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function() {
    $("#table-suppliers").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datatablesbs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatablesresponsive/css/responsive.bootstrap4.min.css') }}">
@endpush