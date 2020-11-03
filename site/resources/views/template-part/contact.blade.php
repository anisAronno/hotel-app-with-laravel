  <!--Sent us a message Start-->
  <div class="col-md-6">
    <h2 class="p-2">Sent us a message</h2>
    <form action="{{ route('contactSend') }}" id="contactSubmitform" method="POST">
        @csrf
            <div class="form-group">
                <div class="">
                    <input type="name" class="form-control" id="name" placeholder="Your Name" name="name">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-2">
                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                        name="email">
                </div>
            </div>
            <div class="form-group">

                <div class="my-3">
                    <input type="number" class="form-control" id="PhonNumber"
                        placeholder="Phone Number" name="PhonNumber">
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <input type="Your Subject" class="form-control" id="YourSubject"
                        placeholder="Your Subject" name="YourSubject">
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <textarea class="form-control" rows="5" id="massage" name="massage"
                        placeholder="Your Message"></textarea>
                </div>
            </div>
            <div>
                <button id="contactSubmitBtn" class="btn btn-dark btn-block p-2" type="submit">Send Message</button>
            </div>
            <br>
       </form>
</div>
<!--Sent us a message  END-->
