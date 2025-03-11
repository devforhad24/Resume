@extends('admin.admin_dashboard')

@section('content')
<div class="page-content">
 
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.service') }}" class="btn btn-inverse-info">Add Service</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">Projects</h6>
              <div class="dropdown mb-2">
                <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th class="pt-0">SL</th>
                    <th class="pt-0">Title</th>
                    <th class="pt-0">Sub Titile</th>
                    <th class="pt-0">Image</th>
                    <th class="pt-0">Status</th>
                    <th class="pt-0">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $key => $service)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ Str::limit($service->sub_title, 20) }}</td>
                    <td>
                      <img src="{{ asset('public/backend/services/' .$service->image) }}" alt="">
                    </td>
                    <td>
                      @if($service->status == 1)
                        <a href="{{ route('change.status',$service->id) }}" class="badge bg-success">Active</a>
                      @else
                        <a href="{{ route('change.status',$service->id) }}" class="badge bg-danger">Inactive</a>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('edit.service', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      <a href="{{ route('delete.service', $service->id) }}" class="delete btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div> 
        </div>
</div>
@endsection