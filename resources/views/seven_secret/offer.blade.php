@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('offers.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('offers.index') }}" />
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

        @foreach ($offer_list as $data)
        @if($loop->iteration % 2 == 0) <div class="py-5"> @else <div class="py-5 bg-light-gray"> @endif
                <div class="container">
                    <div class="row">
                        @if($loop->iteration % 2 == 0) <div class="col-12 col-md-6 d-flex flex-column justify-content-between order-2"> @else <div class="col-12 col-md-6 d-flex flex-column justify-content-between order-1"> @endif
                                <div class="pe-3">
                                    <h2 class="text-uppercase">{{$data->title}}</h2>
                                    <p class="text-primary mb-4">
                                        @if ($data->price == null)
                                        @else
                                        Starting from {{$data->price}} @if ($data->per == null) @else per {{$data->per}} @endif
                                        @endif
                                    </p>
                                    <p class="leftline position-relative ps-5">{{$data->excerpt}}</p>
                                </div>
                                <div class="pe-3">
                                    <button class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0 me-1" data-bs-toggle="modal" data-bs-target="#{{$data->slug}}-modal">View Details</button>
                                    @if ($data->button_text == "Book Now")
                                    <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&promocode={{$data->promo_code}}&trackPage=yes" class="btn btn-primary text-uppercase py-2 px-3 btn-sm rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @elseif ($data->button_text == "Learn More")
                                    <a href="{{$data->button_link}}?text=Hi, I would like to Book: Special Offer - {{ $data->title }}" class="btn btn-primary text-uppercase py-2 px-3 btn-sm rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @else
                                    <a href="{{$data->button_link}}" class="btn btn-primary text-uppercase py-2 px-3 btn-sm rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @endif

                                </div>
                            </div>
                            @if($loop->iteration % 2 == 0) <div class="col-12 col-md-6 order-1"> @else <div class="col-12 col-md-6 order-2"> @endif
                                    <div class="h-100 slider">
                                        <div class="ratio ratio-16x9">
                                            <img src="{{asset($data->cover_image)}}" alt="{{$data->title}}" class="w-100 object-fit-cover object-position-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Detail Modal --}}
                    <div class="modal fade" id="{{$data->slug}}-modal" tabindex="-1" aria-labelledby="{{$data->slug}}-label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold text-uppercase" id="{{$data->slug}}-label">{{$data->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="result">
                                    {!! $data->description !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                                    @if ($data->button_text == "Book Now")
                                    <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&promocode={{$data->promo_code}}&trackPage=yes" class="btn btn-primary text-uppercase py-2 px-3 btn-sm rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @elseif ($data->button_text == "Learn More")
                                    <a href="{{$data->button_link}}?text=Hi, I would like to Book: Special Offer - {{ $data->title }}" class="btn btn-primary text-uppercase py-2 px-3 btn-sm rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @else
                                    <a href="{{$data->button_link}}" class="btn btn-primary text-uppercase py-2 px-3 btn-sm rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

    </section>

</x-seven-secret>