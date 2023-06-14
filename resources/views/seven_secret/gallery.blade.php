@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('gallery.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('gallery.index') }}" />
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/1.3.7/css/lightgallery.min.css">
<style type="text/css">
    ul.navigation-gallery-left {
        display: block;
        list-style-type: disc;
        -webkit-margin-before: 0;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 0px;
    }

    ul.navigation-gallery-left li {
        width: 100%;
        text-align: left;
    }

    /*isotope*/
    .gallery {
        margin-bottom: 20px;
    }

    .grid-item,
    .grid-sizer {
        width: 50%
    }

    .grid-item {
        margin-top: 0px;
        padding: 0px
    }

    .grid-item img {
        width: 100%;
        display: block;
        height: auto;
        cursor: pointer;
    }

    .lg-backdrop,
    .lg-outer {
        z-index: 99999
    }

    .filter-button-group {
        margin-bottom: 20px;
        text-align: left;
    }

    .filter-button {
        display: inline-block;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 12px;
        padding: 10px 15px;
        margin: 0px 5px;
        border-bottom: 1px solid rgb(204, 204, 204);
        opacity: .8;
        background: #e4c568;
    }

    .filter-button a {
        display: block;
        padding: 7px
    }

    .filter-button.is-checked {
        color: rgb(255, 255, 255);
        border-color: #002639;
        background: #002639 !important;
        opacity: 1;
    }

    .filter-button:hover {
        cursor: pointer;
    }

    .gallery-container p {
        font-size: 19px;
        margin-bottom: 50px;
    }

    @media screen and (min-width: 768px) {
        .gallery-container {
            padding: 0px 25px;
        }
    }

    @media screen and (min-width: 992px) {

        .grid-item,
        .grid-sizer {
            width: 25%;
        }

        .grid-item {
            margin-top: 0px;
            padding: 5px;
        }

        .gallery-container p {
            color: rgba(0, 0, 0, 0.40);
            width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .activities-txt {
            padding-top: 50px;
        }
    }

    @media screen and (max-width: 500px) {
        .grid-item img {
            padding: 3px;
        }

        .filter-button {
            display: block;
        }
    }

</style>
@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/lightgallery/1.3.7/js/lightgallery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/lightgallery/1.3.7/js/lightgallery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            var $grid = $('.grid').isotope({
                stagger: 30,
                sortBy: 'random',
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
            $grid.imagesLoaded().progress(function() {
                $grid.isotope('layout');
            });
            $('.filter-button-group').on('click', '.filter-button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            $('.button-group').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', '.filter-button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });
            $('#gallery').lightGallery({
                selector: '.grid-item'
            });
        });
</script>
<script type="text/javascript">
    $(document).ready(function() {
            var $grid = $('.grid').isotope({
                transitionDuration: '0',
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
            $grid.imagesLoaded().progress(function() {
                $grid.isotope('layout');
            });
            $('.filter-button-group').on('click', '.filter-button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            $('.button-group').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', '.filter-button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });
            $('#gallery').lightGallery({
                selector: '.grid-item'
            });
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
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid gallery">
            <div class="container">
                <div class="gallery-container">
                    <div class="row">
                        <div class="button-group filter-button-group gallery-menu col-md-12 text-center">
                            <div class="filter-button is-checked" data-filter="*">All</div>
                            @foreach ($categories as $data)
                            <div class="filter-button" data-filter=".{{ $data->slug }}-item">{{ $data->title }}</div>
                            @endforeach
                        </div>
                        <div class="col-sm-12">
                            <div id="gallery" class="grid">
                                <div class="grid-sizer"></div>
                                @foreach ($gallery_list as $data)
                                <div data-src="{{ asset('storage/' . $data->image) }}" class="grid-item @foreach ($data->categories as $subdata) {{ $subdata->slug . '-item' }} @endforeach">
                                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $setting->title }} - @foreach ($data->categories as $subdata) {{ $subdata->title }} @endforeach - {{ $data->title }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-seven-secret>