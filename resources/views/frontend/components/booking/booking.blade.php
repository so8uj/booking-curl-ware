<section class="section-padding">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    
                    <div class="border p-3">
                        <form action="{{ url('/post-booking',$hotel_detail->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" name="arrival_date">
                                        <label for="floatingInput">Arrival Date</label>
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" name="departure_date">
                                        <label for="floatingInput">Departure Date</label>
                                      </div>
                                </div>
                              </div>
                            <div class="form-floating">
                                <select class="form-select mb-3" id="floatingSelect" aria-label="Floating label select example" name="room_type">
                                  <option selected>Select Room Type</option>
                                  <option value="Single">Single</option>
                                  <option value="Double">Double</option>
                                  <option value="Family">Family</option>
                                </select>
                                <label for="floatingSelect">Room Type</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="person_numbers">
                                  <option selected>Select Persons</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                </select>
                                <label for="floatingSelect">Number of Persons</label>
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary">Book Now</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="pe-2">
                        <h2 class="fs-1 mb-3">Hotel: {{ $hotel_detail->name }}</h2>
                        <h6 class="fs-5 mb-3">Location: {{ $hotel_detail->location }}</h6>
                        <h6 class="fs-5  text-success">Available Rooms: {{ get_available_rooms($hotel_detail->id,$hotel_detail->total_rooms) }}</h6>
                    </div>
                </div>
            </div>
        </div>

    </section>