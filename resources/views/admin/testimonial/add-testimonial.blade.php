@extends('admin.admin_dashboard')

@section('content')

<div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->

      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-7 col-xl-8 middle-wrapper">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('testimonials') }}" class="btn btn-inverse-info">Testimonial</a>
            </ol>
        </nav>
        <div class="row">
            <div class="card">
                <div class="card-body">
                        <h6 class="card-title">Add Testimonial</h6>
                    <form class="forms-sample" action="{{ route('store.testimonial') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Title</label>
                            <input type="text" name="name" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Sub Title</label>
                            <textarea type="text" name="description" rows="5" class="form-control @error('sub_title') is-invalid @enderror"></textarea>
                            @error('sub_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Image</label>
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
