<footer class="footer-section  mt-5 m-0 p-0">
    <div class="footer-wrappe">
      <div class="newsletter text-center">
        <h1 class="pt-5">Sign Up For Exclusive <br> Offers From Us</h1>
        <form action="{{ route('newsLatterSend') }}" id="newslatterSubmitform" method="POST">
          @csrf
          <input type="text" placeholder="Your Name" id="name">
          <input type="text" placeholder="Your Email Address" id="email">
          <button id="newslatterSubmitBtn" type="submit">Subscribe Now</button>
        </form>
      </div>
      <hr class="mt-5">
      <div class="footer-content mt-5">
        <div class="footer-item">
          <img src=" <?php if ($othersData) {echo $othersData->logo;}?>" alt="" class="logo" width="150px"
            height="auto">
          <div class="social-icon">
            <a href="{{$socialData->facebook}}"><i class="fab fa-facebook"></i></a>
            <a href="{{$socialData->linkin}}"> <i class="fab fa-linkedin-in"></i></a>
            <a href="{{$socialData->twitter}}"><i class="fab fa-twitter"></i></a>
            <a href="{{$socialData->youtube}}"><i class="fab fa-youtube"></i></a>

          </div>
        </div>
        <div class="footer-item">
          <h6>ADDRESS</h6>
          <p class="text-muted"><?php if ($othersData) {echo $othersData->address;}?></p>
        </div>
        <div class="footer-item">
          <h6>PHONE</h6>
          <p class="text-muted"><?php if ($othersData) {echo $othersData->phone;}?></p>
        </div>
        <div class="footer-item">
          <h6>RESERVATIONS</h6>
          <p class="text-muted"><?php if ($othersData) {echo $othersData->phone;}?></p>
          <p class="text-muted"><?php if ($othersData) {echo $othersData->email;}?></p>
        </div>
      </div>
      <hr class="my-5">
      <div class="copyright-section text-center">
        <p class="text-muted">Copyright © <span>2020</span>. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</div>