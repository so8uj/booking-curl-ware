@extends('layouts.front')

@section('front_content')

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card text-bg-primary w-full">
                    <div class="card-body">
                      <h5 class="card-title">Total Bookig</h5>
                      <p class="fs-1 card-text">{{ get_user_bookings(Auth::id()) }}</p>
                    </div>
                </div>
            </div> 
            <div class="col-lg-3">
                <div class="card text-bg-success w-full">
                    <div class="card-body">
                      <h5 class="card-title">Success Bookig</h5>
                      <p class="fs-1 card-text">{{ get_user_seccess_bookings(Auth::id()) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-bg-warning w-full">
                    <div class="card-body">
                      <h5 class="card-title">Inprogress Bookig</h5>
                      <p class="fs-1 card-text">{{ get_user_inprogress_booking(Auth::id()) }}</p>                    
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-bg-danger w-full">
                    <div class="card-body">
                      <h5 class="card-title">Canceled Bookig</h5>
                      <p class="fs-1 card-text">{{ get_user_cancled_bookings(Auth::id()) }}</p>                    
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 mx-auto">
                <h2 class="fs-1">All Booking Details</h2>

                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Arrival Date</th>
                            <th>Departure Date</th>
                            <th>Hotel Name</th>
                            <th>Room Type</th>
                            <th>Total Persons</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (get_user_bookings_details(Auth::id()) as $booking)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $booking->arrival_date }} </td>
                                <td>{{ $booking->departure_date }}</td>
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
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</section>
    

@endsection
