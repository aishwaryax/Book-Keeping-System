@extends('layouts.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/notice">Notice</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Notice Details</li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- notice details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex">
          <div class="text-center mr-4">
            <div class="p-4 bg-primary text-white">
                <span class="h2 d-block">30</span> APR,2019
            </div>
          </div>
          <!-- notice content -->
          <div>
            <h3 class="mb-4">Teaching Materials and Testing Methods</h3>
            <p>Lorem ipsum dolor sit amet, lectus molestie amet eget varius nulla ultricies, senectus vehicula wisi risus tellus nonummy. Urna volutpat, nunc doloremque risus felis lorem risus. Et suspendisse diam libero pulvinar, tristique ac cras luctus ornare. Quam justo. Non ligula turpis sem, velit dolor luctus venenatis. Eros eget at vitae, wisi diam ut ad convallis, in gravida nunc inceptos sed leo donec, duis dolorem adipiscing arcu facilisis. Purus lorem vulputate et condimentum in felis, porttitor accumsan id bibendum diam varius, lorem diam molestie erat a amet urna, dolor pellentesque lectus justo adipiscing. Laoreet est velit vestibulum, laoreet luctus bibendum sed ornare amet elementum, ullamcorper nibh in sollicitudin donec arcu lorem.</p>
            <p>Quam justo. Non ligula turpis sem, velit dolor luctus venenatis. Eros eget at vitae, wisi diam ut ad convallis, in gravida nunc inceptos sed leo donec, duis dolorem adipiscing arcu facilisis. Purus lorem vulputate et condimentum in felis, porttitor accumsan id bibendum diam varius, lorem diam molestie erat a amet urna, dolor pellentesque lectus justo adipiscing. Laoreet est velit vestibulum, laoreet luctus bibendum sed ornare amet elementum, ullamcorper nibh in sollicitudin donec arcu lorem.</p>
            <ul class="list-styled mb-5">
              <li>Digital Access to Scholarship at Smart</li>
              <li>institutes</li>
              <li>Smart-affiliated hospitals and research</li>
              <li>Smart Catalyst</li>
              <li>Smart Library Portal</li>
              <li>Smart research programs and departments</li>
            </ul>
            <a href="#" class="btn btn-primary">Download</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /notice details -->

@endsection


<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>