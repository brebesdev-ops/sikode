<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta content="Add your app description here" name=description>
    <meta content="Add your app keywords here" name=keywords>
    <link href=sikode.ico rel="shortcut icon" type=image/x-icon>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel=stylesheet>
    <link href=/assets/css/bootstrap.min.css rel=stylesheet>
    <link href=/assets/css/icofont.css rel=stylesheet>
    <link href=/assets/css/animate.css rel=stylesheet>
    <link href=/assets/css/owl.carousel.min.css rel=stylesheet>
    <link href=/assets/css/magnific-popup.css rel=stylesheet>
    <link href=/assets/css/common.css rel=stylesheet>
    <link href=/assets/css/style-1.css rel=stylesheet>
    <link href=/assets/css/responsive-1.css rel=stylesheet>
    <link href=/assets/style.css rel=stylesheet>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <link href=/assets/switcher-style.css rel=stylesheet>
</head>
<body>

        @include('shared.navbar')


                @yield('content')
                
        <script src=/assets/js/jquery.2.1.1.min.js></script>
    <script src=/assets/js/bootstrap.min.js></script>
    <script src=/assets/js/particles.min.js></script>
    <script src=/assets/js/owl.carousel.min.js></script>
    <script src=/assets/js/jquery.magnific-popup.min.js></script>
    <script src=/assets/js/jquery.easypiechart.min.js></script>
    <script src=/assets/js/wow.min.js></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>

    <script src=/assets/js/common.js></script>
     <script>
        // Google Map
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(-6.7401342, 108.5150153)
            };
            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'https://lh4.ggpht.com/Tr5sntMif9qOPrKV_UVl7K8A_V3xQDgA7Sw_qweLUFlg76d_vGFA7q1xIKZ6IcmeGqg=w170',
                map: map
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src=/assets/js/main-1.js></script>
    <script src=/assets/styleswitcher.js></script>
    <script src=/assets/switcher-active.js></script>

</body>
</html>
