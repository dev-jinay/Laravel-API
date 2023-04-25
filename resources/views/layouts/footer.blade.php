<!-- ======= Footer ======= -->
@if(!isset($nofooter))
<footer id="footer">

<div class="d-flex list-unstyled container justify-content-center p-4" style="gap: 50px;">
  <div>
    <li><a class="nav-link scrollto active ho fw-bold text-secondary" href="usecase.html">Use cases</a></li>
  </div>
  <div>
    <li><a class="nav-link scrollto ho fw-bold text-secondary" href="#pricing">Pricing</a></li>
  </div>
  <div>
    <li><a class="nav-link scrollto ho fw-bold text-secondary" href="#affiliates">Affiliates</a></li>
  </div>
  <div>
    <li><a class="nav-link scrollto ho fw-bold text-secondary" href="#privacy">Privacy</a></li>
  </div>
  <div>
    <li><a class="nav-link scrollto ho fw-bold text-secondary" href="animation.html">Community</a></li>
  </div>
  <div>
    <li><a class="nav-link scrollto ho fw-bold text-secondary" href="animation.html">Success stories</a></li>
  </div>
</div>

</footer>
@endif
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script>
function openNav() {
  console.log("open")
  document.getElementById("mySidenav").style.width = "250px";
  $("#menubutton").attr("onclick","closeNav()");
  }

function closeNav() {
  console.log("close")
  document.getElementById("mySidenav").style.width = "0";
  $('#menubutton').attr("onclick", "openNav()");
}
</script>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>

</script>
@yield('script')