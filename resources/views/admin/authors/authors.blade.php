@extends('layouts.admin')
@section('title', 'Author')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Authors</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Admin</li>
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
          <h3 class="card-title">Data table of author</h3>
          <a href="{{route('author.create')}}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Create</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table-author" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Picture</th>
              <th>Address</th>
              <th>Total Publish News</th>
              <th>Terakhir Dirubah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($author as $authors)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $authors->name }}</td>
              <td>
                <a href="{{ asset('img/uploads/') }}/{{ $authors->picture }}">Lihat Gambar</a>
              </td>
              <td>{{ $authors->address }}</td>
              <td>{{ $authors->news->count() }} News</td>
              <td>{{ $authors->updated_at->diffForHumans() }}</td>
              <td>
                <a href="{{ route('author.edit', [$authors->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                <form class="float-left m-1" action="{{ route('author.destroy', [$authors->id]) }}" method="POST">
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
              <th>Name</th>
              <th>Picture</th>
              <th>Address</th>
              <th>Total Publish News</th>
              <th>Terakhir Dirubah</th>
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