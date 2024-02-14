@extends('backend.layout.app')
@section('page-content')
      <!--start content-->
      <main class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- Form Column -->
            <div class="col-12">
                <form class="row g-3" action="{{route('category.update', ['id' => $category->id])}}" method="POST">
                  @csrf
                  @method('patch')
                    <div class="col-12">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$category->title}}">
                    </div>
                    @error('title')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$category->description}}">
                    </div>
                    @error('description')
                      <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                    <div class="col-12">
                        <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <div class="col-12 my-5">
                      <div class="d-gird">
                        @session('category-updated')
                          <span class="alert alert-success">{{$value}}</span>
                        @endsession
                      </div>
                    </div>
                    </form>
            </div>
        </div>
    </main>
<!--end page main-->
@endsection
@push('extra-js')
<script>
  $(document).ready(function() {
      $('.delete-category').click(function(e) {
          e.preventDefault(); 
          var categoryId = $(this).data('category-id');
          if (confirm('Are you sure you want to delete this category?')) {
              $.ajax({
                  url: '/dashboard/delete-category/' + categoryId,
                  type: 'POST',
                  headers: {
                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
                  },
                  success: function(response) {
                      alert('Category deleted successfully');
                      location.reload(); 
                  },
                  error: function(error) {
                      alert('Failed to delete category. Please try again.');
                  }
              });
          }
      });
  });
</script>

@endpush
