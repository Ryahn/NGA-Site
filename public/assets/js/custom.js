$(document).ready(function () {
    var images = [
        'assets/images/home/home_bg_1.jpg',
        'assets/images/home/home_bg_2.jpg',
        'assets/images/home/home_bg_3.jpg',
        'assets/images/home/home_bg_4.jpg',
    ];
    // console.log(images[Math.floor(Math.random() * images.length)]);

    $('.jarallax-img').attr('src', images[Math.floor(Math.random() * images.length)]);

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
});


