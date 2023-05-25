<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <link rel="icon" type="image/png" href="{{ asset('images/nandini-icon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/elevate_mobile.css')}}">

    @stack('css')
</head>

<body>

    {{$slot}}

    <a href="https://wa.me/6282145666738" class="floating-whatsapp" target="_blank">
        <i class="lab la-whatsapp"></i>
    </a>
    <footer class="fixed-bottom">
        <div class="container-fluid check">
            <div class="row">
                <div class="col-12">
                    <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?trackPage=yes" class="check-item link-light" target="_blank">
                        <span>
                            <i class="fa fa-calendar me-2"></i>
                            Check Availability
                        </span>
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid gx-0 menu">
            <div class="row row-cols-5 gx-1">
                <div class="col text-center">
                    <a href="{{route('mindex')}}" class="menu-item @yield('home_active')">
                        <i class="fa fa-home"></i>
                        Home
                    </a>
                </div>
                <div class="col text-center">
                    <a href="{{route('mvilla')}}" class="menu-item @yield('villa_active')">
                        <i class="fa fa-bed"></i>
                        Accommodations
                    </a>
                </div>
                <div class="col text-center">
                    <a href="{{route('moffer')}}" class="menu-item @yield('offer_active')">
                        <i class="fa fa-tags"></i>
                        Offers
                    </a>
                </div>
                <div class="col text-center">
                    <a href="{{route('mgallery')}}" class="menu-item @yield('gallery_active')">
                        <i class="fa fa-image"></i>
                        Gallery
                    </a>
                </div>
                <div class="col text-center">
                    <a href="{{route('mcontact')}}" class="menu-item @yield('contact_active')">
                        <i class="fa fa-envelope"></i>
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="{{asset('js/hgob_mobile.js')}}"></script>

    <script type="text/javascript">
        if (screen.width > 768) {
                window.location = "{{route('index')}}";
              }
    </script>
    @stack('js')

</body>

</html>