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
            <div class="col-6">
                <form class="row g-3" action="{{route('category.store')}}" method="POST">
                  @csrf
                    <div class="col-12">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                    </div>
                    @error('title')
                    <span class="alert alert-danger">{{$message}}</span>
                  @enderror
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="{{old('description')}}">
                    </div>
                    @error('description')
                      <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                    <div class="col-12">
                        <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                    <div class="col-12 my-5">
                      <div class="d-gird">
                        @session('category-added')
                          <span class="alert alert-success">{{$value}}</span>
                        @endsession
                      </div>
                    </div>
                    </form>
            </div>

            <!-- Table Column -->
            <div class="col-6">
                <!-- Your table code goes here -->
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titile</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                          <th scope="col">{{$category->id}}</th>
                          <th scope="col">{{$category->title}}</th>
                          <th scope="col">{{$category->slug}}</th>
                          <th scope="col">{{$category->description}}</th>
                          <th scope="col">
                            <a href="{{route('category.edit',['id'=>$category->id])}}" 
                            class="btn btn-xl btn-info mx-2 text-green">
                            <i class="bi bi-pencil-square"></i>
                          </a>

                          <a href="#" class="btn btn-xl btn-danger mx-2 text-green delete-category" data-category-id="{{$category->id}}">
                            <i class="bi bi-archive-fill"></i>
                        </a>

                          </th>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titile</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                    </tfoot>
                    <div class="col-12 my-5">
                      <div class="d-gird">
                        @session('category-deleted')
                          <span class="alert alert-success">{{$value}}</span>
                        @endsession
                      </div>
                    </div>
                </table>
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
