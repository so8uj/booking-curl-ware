@extends('layouts.admin')

@section('dash_content')




    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-center justify-space">
                <h2>Update Hotel Details</h2> 
                <div>
                    <a href="{{ route('hotels.create') }}" class="btn btn-primary"><i class="fa fa-plus"> Add Hotels</i></a>
                    <a href="{{ route('hotels.index') }}" class="btn btn-primary"><i class="fa fa-list"> Manage Hotels</i></a>

                </div>
            </div>
        </div>

        <div class="col-lg-4"><br><br></div>
        <div class="col-lg-4 mx-auto">
            <br><br>
            @include('admin.components.assets.form_messages')
            <div>
                @include('admin.components.assets.hotel_form')
            </div>
        </div>
    </div>


@endsection