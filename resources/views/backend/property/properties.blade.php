@extends('backend.layout.app')
@push('extra-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endpush
@section('page-content')
       <!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
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
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">All Rentals</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Price</th>
										@if (auth()->user()->role === 'admin')
										<th>Is Featured</th>
										@endif
										<th>Address</th>
										@if (auth()->user()->role === 'admin')
										<th>User</th>
										@endif
										<th>Status</th>
                    					<th>Action</th>
									</tr>
								</thead>
								<tbody>
                  @foreach ($properties as $property)
                  <tr>
                    @if (auth()->user()->role === 'admin')
                    <td>{{$property->id}}</td>
                    @else 
                    <td>{{$property->uuid}}</td>
                    @endif
                    <td>{{$property->title}}</td>
                    <td>{{$property->price}}</td>
					@if (auth()->user()->role === 'admin')
                    <td>{{$property->is_featured}}</td>
                    @endif
                    <td>{{$property->address}}</td>
                    @if (auth()->user()->role === 'admin')
                    <td>{{$property->user->name}}</td>
                    @endif
                    <td>{{$property->status}}</td>
                    <td>
                      <a href="{{route('property.edit', ['uuid' => $property->uuid])}}" class="btn btn-xl btn-info mx-2 text-green">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="#" class="btn btn-xl btn-danger mx-2 text-green delete-property" data-property-id="{{$property->uuid}}">
                        <i class="bi bi-archive-fill"></i>
                    </a>
                    </td>
                  </tr>     
                  @endforeach         
								</tbody>
								
								<tfoot>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Price</th>
										@if (auth()->user()->role === 'admin')
										<th>Is Featured</th>
										@endif
										<th>Address</th>
                    					@if (auth()->user()->role === 'admin')
										<th>User</th>
                    					@endif
										<th>Status</th>
                    					<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="text-center my-2 mx-2 p-2">{{ $properties->links('vendor.pagination.bootstrap-5') }}
						</div>
					</div>
				</div>
			</main>
       <!--end page main-->
@endsection
@push('extra-js')

<script>
  $(document).ready(function() {
      $('.delete-property').click(function(e) {
          e.preventDefault(); 
          var categoryId = $(this).data('property-id');
          if (confirm('Are you sure you want to delete this property?')) {
              $.ajax({
                  url: '/dashboard/delete-property/' + categoryId,
                  type: 'POST',
                  headers: {
                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
                  },
                  success: function(response) {
                      alert('Property deleted successfully');
                      location.reload(); 
                  },
                  error: function(error) {
                      alert('Failed to delete property. Please try again.');
                  }
              });
          }
      });
  });






</script>
@endpush
     