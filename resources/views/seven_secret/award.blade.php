@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('awards.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('awards.index') }}" />
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.sliders').slick({
            dots: false,
            infinite: true,
            speed: 500,
            centerMode: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: ".box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
</script>
@endpush

<x-seven-secret>
    <section class="vh-100">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="sliders overflow-hidden">

                            @foreach ($award_list as $data)
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('storage/' . $data->cover_image) }}" alt="{{ $data->title }}" class="w-100 h-100 object-fit-contain object-position-center">
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

</x-seven-secret>