<!-- Popper -->
<script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<!-- ScrollReveal -->
<script src="{{ asset('assets/vendor/scrollreveal/dist/scrollreveal.min.js') }}"></script>
<!-- Animejs -->
<script src="{{ asset('assets/vendor/animejs/lib/anime.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Jarallax -->
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
<!-- Swiper -->
<script src="{{ asset('assets/vendor/swiper/js/swiper.min.js') }}"></script>
<!-- Fancybox -->
<script src="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<!-- Moment.js -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>
<!-- ImagesLoaded -->
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('assets/vendor/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
<!-- Ion Range Slider -->
<script src="{{ asset('assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<!-- Bootstrap TouchSpin -->
<script src="{{ asset('assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<!-- Bootstrap Validator -->
<script src="{{ asset('assets/vendor/bootstrap-validator/dist/validator.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    var images = [
        "{{ asset('assets/images/home/home_bg_1.jpg') }}",
        "{{ asset('assets/images/home/home_bg_2.jpg') }}",
        "{{ asset('assets/images/home/home_bg_3.jpg') }}",
        "{{ asset('assets/images/home/home_bg_4.jpg') }}",
    ];
    // console.log(images[Math.floor(Math.random() * images.length)]);

    $('.jarallax-img').attr('src', images[Math.floor(Math.random() * images.length)]);
</script>
