<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- <script src="{{asset('js/core.js')}}"></script> -->
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<!-- <script src="{{asset('js/maps.js')}}"></script> -->
<!-- <script src="{{asset('js/worldLow.js')}}"></script> -->
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('slick/slick.js')}}"></script>
<script src="{{asset('slick/slick.min.js')}}"></script>


<!-- For stripe -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>


<script>
  

  // blogslider start
  $(".blogslid").slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      autoplay: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: true,
              },
          },
          {
              breakpoint: 600,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
              },
          },
          {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
              },
          },
      ],
  });
</script>

@stack('js')
