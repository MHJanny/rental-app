@extends('backend.layout.app')
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
                          <form class="row g-3">
                          <div class="col-12">
                              <label class="form-label">Title</label>
                              <span class="text-danger">*</span>
                              <input type="text" name="title" class="form-control">
                          </div>
                          <div class="col-12">
                              <label class="form-label">Rent Type</label>
                              <span class="text-danger">*</span>
                              <select class="form-select mb-3" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
                          </div>
                          <div class="col-12">
                              <label class="form-label">Price</label>
                              <span class="text-danger">*</span>
                              <input type="number" class="form-control">
                          </div>
                          <div class="col-12">
                              <label class="form-label">Start Date</label>
                              <input type="date" class="form-control">
                          </div>
                          <div class="col-12">
                              <label class="form-label">End Date</label>
                              <input type="date" class="form-control">
                          </div>
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

    

