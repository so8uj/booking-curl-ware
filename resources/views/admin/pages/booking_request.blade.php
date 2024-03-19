@extends('layouts.admin')

@section('dash_content')




<div class="row">
    <div class="col-lg-12">
        <div class="d-flex align-center justify-space">
            <h2>All Booking Requests</h2> <a href="{{ url('admin/bookings') }}" class="btn btn-primary"><i class="fa fa-list"> All Bookings</i></a>
        </div>
    </div>
    <div class="col-lg-12">
        @include('admin.components.assets.form_messages')
        <table class="table">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Dates</th>
                    <th>Customer Name</th>
                    <th>Hotel Name</th>
                    <th>Room Type</th>
                    <th>Total Persons</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking_requests as $booking_request)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            Arrival Date: {{ $booking_request->arrival_date }} <br>
                            Departure Date: {{ $booking_request->departure_date }} <br>
                        </td>
                        <td>{{ $booking_request->bookingUser->name }}</td>
                        <td>{{ $booking_request->bookingHotel->name }}</td>
                        <td>{{ $booking_request->room_type }}</td>
                        <td>{{ $booking_request->person_numbers }}</td>
                        <td>
                            <a href="{{ url('/admin/booking-request','confrim-'.$booking_request->id) }}" class="btn btn-success">Confrim Booking</a>
                            <a href="{{ url('/admin/booking-request','cancel-'.$booking_request->id) }}" class="btn btn-danger">Cancel Booking</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection