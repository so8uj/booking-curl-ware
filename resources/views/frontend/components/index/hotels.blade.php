<section class="hotels section-padding" id="hotels">
    <div class="container">
        <h2 class="fw-bold fs-1 text-center mb-5">Our Premium Hotels</h2>

        <div class="row">
            @foreach ($hotels as $hotel)
              
            <div class="col-lg-4 col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel->name }}</h5>
                        <p class="card-text mb-1">{{ $hotel->location }}</p>
                        <p class="text-success fw-bold pt-0">Avaiable Room: {{ get_available_rooms($hotel->id,$hotel->total_rooms) }}</p>
                        <a href="{{ url('booking',Str::slug($hotel->name,'-')) }}" class="btn btn-primary">Book A Room Now</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>
