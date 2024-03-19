@extends('layouts.admin')

@section('dash_content')




<div class="row">
    <div class="col-lg-12">
        <div class="d-flex align-center justify-space">
            <h2>All Bookings Info</h2> <a href="{{ url('/admin/booking-request') }}" class="btn btn-primary"><i class="fa fa-list"> Booking Requests</i></a>
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
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            Arrival Date: {{ $booking->arrival_date }} <br>
                            Departure Date: {{ $booking->departure_date }} <br>
                        </td>
                        <td>{{ $booking->bookingUser->name }}</td>
                        <td>{{ $booking->bookingHotel->name }}</td>
                        <td>{{ $booking->room_type }}</td>
                        <td>{{ $booking->person_numbers }}</td>
                        <td>
                            @if ($booking->status == 'inprogress')
                                Requested
                            @elseif ($booking->status == 'success')
                                Booked
                            @elseif ($booking->status == 'finished')
                                Finised
                            @else
                                Canceled
                            @endif
                            
                        </td>
                        <td>
                            @if ($booking->status == 'inprogress')
                                <a href="{{ url('/admin/booking-request','confrim-'.$booking->id) }}" class="btn btn-success">Confrim Booking</a>
                            @endif
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection