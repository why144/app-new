@extends('./dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>

  <div class="table-responsive col-lg-6">
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
  @endif
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name}}</td>
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge btn-info">Detail</a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge btn-primary">Edit</a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge btn-danger border-0" onclick="return confirm('Are You Sure?')">Hapus</button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


@endsection