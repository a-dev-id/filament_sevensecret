@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('accommodations.show',[$setting->slug]) }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('accommodations.show',[$setting->slug]) }}" />
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript">
    $('#big-slides').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		asNavFor: '#small-slides',
		arrows: false,
	});
	$('#small-slides').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '#big-slides',
		centerMode: true,
		focusOnSelect: true,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
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
</script>
@endpush

<x-seven-secret>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{asset('storage/'.$setting->banner_image)}}" alt="{{$setting->title}}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>
    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="mb-3 mb-xxl-4 underline text-uppercase">Details</h2>
                        <ul class="list-unstyled row">

                            @foreach ($setting->facilities as $data)
                            @if ($data->is_active == '1')
                            <li class="col-12 col-md-6 py-2 d-flex small">
                                <img src="{{ asset('storage/' . $data->icon) }}" class="h-20px me-2">
                                <span>{{ $data->title }}</span>
                            </li>
                            @else
                            @endif
                            @endforeach

                        </ul>
                    </div>
                    <div class="row align-items-center justify-content-center align-items-center">
                        <div class="col-12 col-md-4">
                            <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-2" id="big-slides">

                        @foreach ($setting->images as $data)
                        @if ($data->is_active == '1')
                        <div class="ratio ratio-4x3">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $setting->title . ' - ' . $data->title }}" class="w-100 object-fit-cover object-position-center">
                        </div>
                        @else
                        @endif
                        @endforeach

                    </div>
                    <div class="mt-1" id="small-slides">

                        @foreach ($setting->images as $data)
                        @if ($data->is_active == '1')
                        <div class="ratio ratio-16x9 mx-1">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $setting->title . ' - ' . $data->title }}" class="w-100 object-fit-cover object-position-center">
                        </div>
                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-5 underline">Other Accommodations</h2>
                    <div class="position-relative" id="accommodation-slides">
                        <div class="sliders with-half-slides overflow-hidden">

                            @foreach ($villa_list as $data)
                            @if ($data->slug == $setting->slug)
                            @else
                            @if ($data->is_active == '1')
                            <div class="position-relative ">
                                <div class="ratio ratio-4x3">
                                    <img src="{{ asset('storage/' . $data->banner_image) }}" alt="{{ $data->title }}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">{{ $data->title }}</h2>
                                                <p class="small mb-0">{{ Str::limit($data->excerpt, 100) }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('accommodations.show', [$data->slug]) }}" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @endif
                            @endif
                            @endforeach

                        </div>
                        <div class="box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-seven-secret>