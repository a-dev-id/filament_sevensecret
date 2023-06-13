@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Seven Secret by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Seven Secret by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Seven Secret by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('index') }}" />
@endsection

@push('css')
<style type="text/css">
    #advantages-slides small {
        font-size: 10px;
        left: 80px;
        letter-spacing: .1em;
    }

    #offers-slides .box-arrows .slick-arrow {
        transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    }

    #offers-slides .box-arrows .slick-arrow:hover {
        background-color: #5A8C14 !important;
        color: #FFF;
        transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    }

    .header-iframe-youtube {
        width: 102%;
        height: 120%;
        top: -10%;
        left: -1%;
        position: absolute;
        pointer-events: none;
    }

</style>
@endpush

@push('js')
<script type="text/javascript">
    $('.slider-section').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
		fade: true,
		cssEase: 'linear',
		draggable: false,
		pauseOnDotsHover: false,
		pauseOnHover: false,
		pauseOnFocus: false
	});
	$('#advantages-slides .sliders').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: "#advantages-slides .box-arrows",
		prevArrow: "<div class='float-start rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
	});
	$('#accommodation-slides .sliders').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: "#accommodation-slides .box-arrows",
		prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
	});
	$('#experiences-slides .sliders').slick({
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
	});
	$('#offers-slides .sliders').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: "#offers-slides .box-arrows",
		prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
	});

	$('.reviews-box-list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".reviews-box-arrows",
		prevArrow: "<i class='fa fa-long-arrow-left'></i>",
		nextArrow: "<i class='fa fa-long-arrow-right'></i>",
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});
</script>
@endpush

<x-seven-secret>

    <section class="vh-100 overflow-hidden position-relative">
        <iframe src="https://www.youtube.com/embed/videoseries?list=PLw8fGZ6fiQLDJFgAGgnwqjoTEvBH1pd8r&amp;autoplay=1&amp;mute=1&amp;controls=0&amp;loop=1&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;playlist=9RA48trBz24" class="header-iframe-youtube"></iframe>
    </section>

    <section class="py-5 bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="mb-5" src="{{asset('images/logo-sevensecret.png')}}" alt="Elevate Bali" style="width: 300px">
                    {{-- <div class=" mb-5 underline"></div> --}}
                    <h1 class="mb-3 mt-3 fs-4 fst-italic text-uppercase fw-bold">{{$setting->title}}</h1>
                    <div class="underline"></div>
                    <h2 class="mb-3 mt-3 fs-5 fst-italic text-uppercase fw-bold">{{$setting->subtitle}}</h2>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 border border-secondary py-5 position-relative" id="advantages-slides">
                    <small class="position-absolute top-0 bg-primary fw-bold text-white text-uppercase py-1 px-2">Advantages of Booking</small>
                    <div class="sliders px-4 d-flex justify-content-center align-items-center">

                        @foreach ($setting->CustomFields as $data)
                        @if ($data->is_active == '1')
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">{{$data->title}}</p>
                            <p class="text-primary mb-0 small">{{$data->excerpt}}</p>
                        </div>
                        @else
                        @endif
                        @endforeach

                    </div>
                    <div class="box-arrows position-absolute start-0 w-100 px-3"></div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-2 text-center mb-5 underline fw-bold text-uppercase">Accommodations</h1>
                    <div class="position-relative" id="accommodation-slides">
                        <div class="sliders with-half-slides overflow-hidden">

                            @foreach ($villa_list as $data)
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="{{asset('storage/'.$data->banner_image)}}" alt="{{$data->title}}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3 text-uppercase">{{$data->title}}</h2>
                                                <p class="small mb-0">{{$data->excerpt}}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="{{route('accommodations.show',[$data->slug])}}" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row" id="experiences-slides">
                <div class="col-12 text-center sliders">

                    @foreach ($experience_list as $data)
                    <div class="row d-flex">
                        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-between">
                            <h1 class="underline pt-4 fw-bold text-uppercase">Activities</h1>
                            <div class="px-4">
                                <h2 class="text-uppercase fst-italic mb-4 text-uppercase">{{$data->title}}</h2>
                                {!! $data->excerpt !!}
                            </div>
                            <div class="pb-4">
                                <a href="{{route('activities.index')}}" class="btn btn-primary text-uppercase px-4 py-3 rounded-0 fw-bold">Discover More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ratio ratio-1x1">
                                <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{$data->title.' - '.$data->subtitle}}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-12 text-center position-relative" id="offers-slides">
                    <h1 class="fs-2 text-center mb-5 underline fw-bold text-uppercase">Special Offers</h1>
                    <div class="sliders overflow-hidden position-relative" style="z-index: 2;">

                        @foreach ($offer_list as $data)
                        <div class="mx-1">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{$data->title}}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-100 d-flex align-items-center bg-hover-overlay">
                                    <div class="text-white w-100">
                                        <div class="h-100 px-5">
                                            <h2 class="fs-5 mb-5 text-uppercase">{{$data->title}}</h2>
                                            <div class="text-center pt-4">
                                                <a href="{{route('offers.index')}}" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase"></h4>
                            @if ($data->button_text == "Book now")
                            <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&promocode={{$data->promo_code}}&trackPage=yes" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @elseif ($data->button_text == "Learn More")
                            <a href="{{$data->button_link}}?text=Hi, I would like to Book: Special Offer - {{ $data->title }}" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @else
                            <a href="{{$data->button_link}}" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @endif
                        </div>
                        @endforeach

                    </div>
                    <div class="box-arrows position-absolute" style="left: -2.75rem; right: -2.75rem; z-index: 1;"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-block text-center pt-5">
        <a href="https://www.instagram.com/sevensecretsresort/" class="btn btn-outline-secondary rounded-0 mb-4" target="_blank"><i class="fa fa-instagram"></i> @sevensecretsresort</a>
        <!-- SnapWidget -->
        <script src="https://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="https://snapwidget.com/embed/1035679" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>

    </div>

</x-seven-secret>