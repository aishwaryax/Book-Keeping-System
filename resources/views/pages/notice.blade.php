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
                        <button type="submit" onclick="login.html" class="btn btn-primary">LOGIN</button>
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Notice</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- notice -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="list-unstyled">
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">30</span> APR,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Teaching Materials and Testing Methods</a>
              <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!</p>
            </div>
            <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">read more</a></div>
          </li>
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">27</span> APR,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Biltong sirloin sausage brisket porchetta prosciutto</a>
              <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!</p>
            </div>
            <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">read more</a></div>
          </li>
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">25</span> APR,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Teaching Materials and Testing Methods</a>
              <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!</p>
            </div>
            <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">read more</a></div>
          </li>
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">23</span> APR,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Biltong sirloin sausage brisket porchetta prosciutto</a>
              <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!</p>
            </div>
            <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">read more</a></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /notice -->


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