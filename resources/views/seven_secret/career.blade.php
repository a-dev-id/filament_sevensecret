@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('careers.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('careers.index') }}" />
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.press-box-slides').slick({
            dots: false,
            infinite: true,
            speed: 500,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: ".press-box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
        });
</script>
@endpush

<x-seven-secret>
    <section class="vh-100">
        <img src="{{ asset($setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
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

    <section class="py-90 bg-light-gray">
        <div class="container-fluid">
            <div class="row">

                @foreach ($career_list as $data)
                <div class="col-12">
                    <div class="position-relative">
                        <div class="press-box-slides overflow-hidden">
                            <div class="card mx-3">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <div class="mb-3">
                                        <h4 class="card-title fw-bold">{{ $data->title }}</h4>
                                        <p class="card-text">{{ $data->excerpt }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <a href="#" class="float-end link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#careers-{{ $data->id }}">Read more <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="press-box-arrows position-absolute w-100"></div>
                    </div>
                </div>

                <div class="modal fade" id="careers-{{ $data->id }}" tabindex="-1" aria-labelledby="careers-{{ $data->id }}-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold text-uppercase" id="careers-{{ $data->id }}-label">{{ $data->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {!! $data->description !!}
                            </div>
                            <div class="modal-footer">
                                <a href="http://wa.me/628113800988" target="_blank" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0 me-2">Chat with Us</a>
                                <button type="button" class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

</x-seven-secret>