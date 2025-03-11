@extends('admin.admin_dashboard')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->

      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-7 col-xl-8 middle-wrapper">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('all.service') }}" class="btn btn-inverse-info">Services</a>
            </ol>
        </nav>
        <div class="row">
            <div class="card">
                <div class="card-body">
                        <h6 class="card-title">Edit Service</h6>
                    <form class="forms-sample" action="{{ route('update.service' ,$service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $service->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea type="text" name="sub_title" rows="5" class="form-control @error('sub_title') is-invalid @enderror">{{ $service->sub_title }}</textarea>
                            @error('sub_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Image</label>
                            <img style="width:50px;" src="{{ asset('public/backend/services/' .$service->image) }}" alt="">
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                    </form>
                </div>
              </div>
        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->

      <!-- right wrapper end -->
    </div>

</div>
@endsection
