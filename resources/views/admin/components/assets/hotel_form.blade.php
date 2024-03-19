<form action="{{ ($form=='update') ? route('hotels.update',$hotel->id) : route('hotels.store') }}" method="POST">
    @csrf
    @if($form == 'update')
        @method('PUT')
    @endif
    <div class="from-group">
        <label for="name">Hotel Name</label>
        <input type="text" id="name" class="form-control" name="name" value="{{ ($form=='update') ? $hotel->name : old('name') }}" required>
    </div>
    <div class="from-group">
        <label for="location">Hotel Location</label>
        <input type="text" id="location" class="form-control" name="location" value="{{ ($form=='update') ? $hotel->location : old('location') }}" required>
    </div>
    <div class="from-group">
        <label for="avaiable_rooms">Total Rooms (Quantity)</label>
        <input type="number" id="avaiable_rooms" class="form-control" name="total_rooms" value="{{ ($form=='update') ? $hotel->total_rooms : old('total_rooms') }}" required>
    </div>
    <div class="from-group"> <br>
        <button class="btn btn-primary btn-block"> {{ ($form=='update') ? 'Update Hotel' : 'Add Hotel' }}</button>
    </div>
</form>