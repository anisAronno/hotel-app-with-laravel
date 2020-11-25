<section class="booking mb-5 m-auto">
    <form action="{{ route('bookiongSubmit') }}" id="bookingSubmitform" method="POST">
        @csrf
            <div class="col-md-12 ">
                <div class="row m-auto text-center">
    
                    <div class="col-md-2  col-sm-12 form-group">
                        <input  autocomplete="off" id="arrivedDate" name="arrival_date" type="text" class="form-control datepicker-arrived"
                            placeholder="&#61447; &nbsp; Arrival Date">
                    </div>
                    <div class="col-md-2  col-sm-12 form-group">
                        <input autocomplete="off" id="leaveDate" name="departure_date" type="text" class="form-control datepicker-leave"
                            placeholder="&#61447; &nbsp;Departure Date">
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <input autocomplete="off" id="customerMobile" name="customer_mobile" type="text" class="form-control" placeholder="&#9990; &nbsp; Mobile Number">
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <select name="adult_person" id="adultPerson" class="custom-select">
                            <option value="" selected disabled>Adults</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <select name="children_person" id="childrenPerson" class="custom-select">
                            <option value="" selected disabled>Children</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                            <button id="bookingSubmitBtn"  type="submit" class="btn btn-sm btn-dark btn-block form-submit">Book Now </button>
                    </div>
                </div>
            </div>
        </form>
    
        </section>
        <!-- Booking Section End -->