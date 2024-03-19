@extends('layouts.admin')

@section('dash_content')




<div class="row">
    <div class="col-lg-12">
        <div class="d-flex align-center justify-space">
            <h2>Manage Hotels</h2> <a href="{{ route('hotels.create') }}" class="btn btn-primary"><i class="fa fa-plus"> Add Hotels</i></a>
        </div>
    </div>
    <div class="col-lg-12">
        @include('admin.components.assets.form_messages')
        <table class="table">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Hotel Names</th>
                    <th>Location</th>
                    <th>Total Room</th>
                    <th>Booked Room</th>
                    <th>Avaiable Room</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        <th>{{ $hotel->name }}</th>
                        <th>{{ $hotel->location }}</th>
                        <th>{{ $hotel->total_rooms }}</th>
                        <th>{{ $hotel->total_rooms - get_available_rooms($hotel->id,$hotel->total_rooms) }}</th>
                        <th>{{ get_available_rooms($hotel->id,$hotel->total_rooms) }}</th>
                        <th>
                            <a href="{{ route('hotels.edit',$hotel->id) }}"><i class="fa fa-pencil"></i></a> |
                            <form method="POST" action="{{ route('hotels.destroy',$hotel->id) }}" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <a class="text-danger" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection