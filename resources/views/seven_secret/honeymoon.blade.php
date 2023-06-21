@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('honeymoon.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('honeymoon.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript">
    $('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		arrows: false,
		cssEase: 'linear',
		draggable: false,
		pauseOnDotsHover: false,
		pauseOnHover: false,
		pauseOnFocus: false
	});
</script>
@endpush

<x-seven-secret>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{asset($setting->banner_image)}}" alt="{{$setting->title}}" class="h-100 w-100 object-fit-cover object-position-center">
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

    <section>

        @foreach ($honeymoon_list as $data)
        @if($loop->iteration % 2 == 0) <div class="py-5"> @else <div class="py-5 bg-light-gray"> @endif
                <div class="container">
                    <div class="row">
                        @if($loop->iteration % 2 == 0) <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-3"> @else <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-1"> @endif
                                <div class="pb-4 border-bottom border-dark">
                                    <h2 class="fs-1 mb-3">{{$data->title}}</h2>
                                    <h5 class="fs-6 text-primary"></h5>
                                </div>
                                <div class="py-3 h-100">
                                    {!! $data->description !!}
                                </div>
                                <div class="pt-4 border-top border-dark">
                                    <div class="row">
                                        <div class="col-12 col-md-7"></div>
                                        <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                                            <a href="https://www.e1-booking.com/booking/booking-page.php?id=3169&checkin={{date('Y-m-d')}}&checkout={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&promo={{$data->promo_code}}" target="blank" class="btn btn-primary text-uppercase w-100 py-2 fw-bold rounded-0 small">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 order-2 d-flex justify-content-center align-items-center"></div>
                            @if($loop->iteration % 2 == 0) <div class="col-12 col-md-6 order-1"> @else <div class="col-12 col-md-6 order-3"> @endif
                                    <div class="h-100 slider">
                                        <div class="ratio ratio-1x1">
                                            <img src="{{asset($data->cover_image)}}" alt="{{$data->title}}" class="w-100 object-fit-cover object-position-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

    </section>

</x-seven-secret>