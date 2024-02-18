@extends('backend.layout.app')
@push('extra-css')

@endpush
@section('page-content')
     <!--start content-->
     <main class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Forms</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
          </nav>
        </div>
      </div>
      <!--end breadcrumb-->
      
      <div class="row">
        <div class="col-xl-6 mx-auto">
                      <div class="card">
                      <div class="card-body">
                          <div class="border p-3 rounded">
                          <h6 class="mb-0 text-uppercase">Add Rental</h6>
                          <hr/>
                          @session('property-success')
                            <span class="text-success">{{$value}}</span>
                          @endsession
                          <form id="my-dropzone" class="row g-3 dropzone" action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="col-12">
                              <label class="form-label">Title</label>
                              <span class="text-danger">*</span>
                              <input type="text" name="title" value="{{old('title')}}" class="form-control">
                          </div>
                          @error('title')
                            <span class="alert alert-danger">{{$message}}</span>
                          @enderror
                          <div class="col-12">
                            <label class="form-label">Description</label>
                            <span class="text-danger">*</span>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
                        </div>
                        @error('description')
                            <span class="alert alert-danger">{{$message}}</span>
                        @enderror
                          <div class="col-12">
                              <label class="form-label">Rent Type</label>
                              <span class="text-danger">*</span>
                              <select name="category_id" class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Select Type</option>
                                      @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                      @endforeach
                            </select>
                          </div>
                          @error('category_id')
                            <span class="alert alert-danger">{{$message}}</span>
                          @enderror
                          <div class="col-12">
                            <label class="form-label">Address</label>
                            <span class="text-danger">*</span>
                            <input type="text" name="address" class="form-control">
                        </div>
                        @error('address')
                            <span class="alert alert-danger">{{$message}}</span>
                        @enderror
                        <div class="col-12">
                          <label class="form-label">Feature Image</label>
                          <span class="text-danger">*</span>
                          <div class="text-center my-2" id="image-container">
                              <img id="image-preview" height="300" width="300" style="display: none;" src="">
                              <button id="remove-image" style="display: none;" 
                              class="btn btn-danger my-2 text-4xl">
                              <i class="bi bi-x-octagon text-white"></i></button>
                          </div>
                          <input type="file" id="avatar" name="image" class="form-control file-pond">
                      </div>
                      
                      @error('image')
                        <span class="alert alert-danger">{{$message}}</span>
                      @enderror
                      <div class="col-12">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    @error('start_date')
                      <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                    <div class="col-12">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    @error('end_date')
                      <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                 {{--    <div class="col-12">
                      <label class="form-label">Gallery Images</label>
                      <span class="text-danger">*</span>
                      <input type="file" name="image" class="form-control">
                  </div> --}}
                     <div class="col-12">
                        <label class="form-label">Price</label>
                          <span class="text-danger">*</span>
                          <input type="number" name="price" class="form-control">
                      </div>
                      @error('price')
                        <span class="alert alert-danger">{{$message}}</span>
                      @enderror
                          
                          <div class="col-12">
                              <div class="d-grid">
                              <button type="submit" class="btn btn-primary">Add Retal</button>
                              </div>
                          </div>
                          </form>
                      </div>
                      </div>
                      </div>
        </div>
      </div>
      <!--end row-->
      <!--end row-->
    </main>
     <!--end page main-->
@endsection
@push('extra-js')
  <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
 
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const inputElement = document.getElementById('avatar');
      const imagePreview = document.getElementById('image-preview');
      const imageContainer = document.getElementById('image-container');
      const removeImageButton = document.getElementById('remove-image');

      inputElement.addEventListener('change', function (e) {
          if (e.target.files && e.target.files[0]) {
              const reader = new FileReader();
              reader.onload = function (e) {
                  imagePreview.src = e.target.result;
                  imagePreview.style.display = 'block';
                  removeImageButton.style.display = 'block';
              };
              reader.readAsDataURL(e.target.files[0]);
          }
      });

      removeImageButton.addEventListener('click', function () {
          imagePreview.src = ''; 
          imagePreview.style.display = 'none'; 
          removeImageButton.style.display = 'none';
          inputElement.value = '';
      });
  });
</script>


@endpush
    

