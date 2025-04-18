@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Management</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div> 
    @endif

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Admin</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td> @if ($user->is_admin) Admin @else User @endif </td>  
                <td>
                  <a href="/dashboard/users/{{ $user->username}}/edit" class="badge bg-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span data-feather="edit"></span> EDIT</a>
                </td>
              </tr>    
          @endforeach
          </tbody>
        </table>
      </div>
@endsection