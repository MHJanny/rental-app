@extends('backend.layout.app')
@push('extra-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endpush
@section('page-content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="p-0 mb-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Bookings</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Property</th>
                            @if (auth()->user()->role === 'user' || auth()->user()->role === 'admin')
                            <th>Owner</th>
                            @endif
                            @if(auth()->user()->role === 'owner' || auth()->user()->role === 'admin')
                            <th>User</th>
                            @endif
                            <th>Check in</th>
                            <th>Check out</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->property->title}}</td>
                            @if (auth()->user()->role === 'user' || auth()->user()->role === 'admin')
                            <td>{{$booking->property->user->name}}</td>
                            @endif
                            @if(auth()->user()->role === 'owner' || auth()->user()->role === 'admin')
                            <td>{{$booking->user->name}}</td>
                            @endif
                            <td>{{$booking->check_in->format('d M, Y')}}</td>
                            <td>{{$booking->check_out->format('d M, Y')}}</td>
                            <td>{{$booking->status}}</td>
                            <td>
                                @if(auth()->user()->role === 'owner' && $booking->status == 'pending')
                                <a href="#" class="mx-2 btn btn-xl btn-primary text-green update-booking" data-booking-status="approved" data-booking-id="{{$booking->id}}">
                                    Approve
                                </a>
                                <a href="#" class="mx-2 btn btn-xl btn-danger text-green update-booking" data-booking-status="rejected" data-booking-id="{{$booking->id}}">
                                    Reject
                                </a>
                                @endif
                                @if(auth()->user()->role === 'admin' || ($booking->status == 'pending' && auth()->user()->role === 'user'))
                                <a href="#" class="mx-2 btn btn-xl btn-danger text-green delete-booking" data-booking-id="{{$booking->id}}">
                                    <i class="bi bi-archive-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-2 mx-2 my-2 text-center">{{ $bookings->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
</main>
<!--end page main-->
@endsection
@push('extra-js')
<script>
    $(document).ready(function() {
        $('.delete-booking').click(function(e) {
            e.preventDefault();
            let bookingId = $(this).data('booking-id');
            if (confirm('Are you sure you want to delete this booking?')) {
                $.ajax({
                    url: '/dashboard/bookings/' + bookingId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert('Booking deleted successfully!');
                        location.reload();
                    },
                    error: function(error) {
                        alert('Failed to delete booking! Please try again.');
                    }
                });
            }
        });

        $('.update-booking').click(function(e) {
            e.preventDefault();
            let bookingId = $(this).data('booking-id');
            let bookingStatus = $(this).data('booking-status');
            if (confirm('Are you sure to update booking status?')) {
                $.ajax({
                    url: '/dashboard/bookings/' + bookingId,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        status: bookingStatus
                    },
                    success: function(response) {
                        alert('Booking status updated successfully!');
                        location.reload();
                    },
                    error: function(error) {
                        alert('Failed to update booking status! Please try again.');
                    }
                });
            }
        })
    });
</script>
@endpush