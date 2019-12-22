
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('public/frontend/lib/bootstrap/js/bootstrap.min.js') !!}"></script>
<!-- Plugin JavaScript -->
<script src="{!! asset('public/frontend/lib/jquery/jquery.easing.min.js') !!}"></script>
<script src="{!! asset('public/frontend/lib/parallax/parallax.min.js') !!}"></script>
<script src="{!! asset('public/frontend/lib/owl-carousel/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('public/frontend/lib/jquery/isotope.pkgd.min.js') !!}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
<script src="{!! asset('public/frontend/lib/lightbox/dist/js/lightbox.min.js') !!}"></script>
<script src="{{ asset('public/adminpanel/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
<!-- Template JavaScript -->
<script src="{!! asset('public/frontend/js/scripts.min.js') !!}"></script>
<script type="text/javascript">
$(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    auto: true,
    pager: false,
    controls: false
  });
});
</script>
<script type="text/javascript">
function myMap() {
    var location = {lat: 23.006257, lng: 72.60255};
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: location,
    });
    var marker = new google.maps.Marker({
      position: location,
      map: map
    });
}

jQuery(document).ready(function () {
    displayNotifications();
});

function displayNotifications(){
    toastr.options.closeButton = true;
    toastr.options.timeOut = 10000;
    if(jQuery('#flashsuccess').length != 0){
        toastr.success(jQuery('#flashsuccess').html())
    } else if(jQuery('#flasherror').length != 0){
        toastr.error(jQuery('#flasherror').html())
    }
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRAatMB3kzBlZs-jYbNhnqRaPmdj98hkQ&callback=myMap"></script>