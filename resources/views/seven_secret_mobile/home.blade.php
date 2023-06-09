@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('mindex') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('mindex') }}" />
@endsection

@section('home_active', 'active')

<x-seven-secret-mobile>
    <div class="wrapper ">
        <div class="position-relative">
            <div class="slider">

                @foreach ($setting->images as $data)
                <div class="ratio ratio-4x3">
                    <img src="{{asset($data->image)}}" class="img-fluid" alt="{{ config('app.name').' - '.$data->title }}">
                </div>
                @endforeach

            </div>
            <div class="button-wrapper button-wrapper-home">
                <a href="https://goo.gl/maps/bb2yY8eDVvk1QRPw9" class="btn btn-outline-light border-2" target="_blank"><i class="fa fa-map-marker me-1"></i> Get Directions</a>
            </div>
            <div class="gradient-top"></div>
        </div>
        <div class="container-fluid about">
            <div class="row">
                <div class="col-12 py-3">
                    <img src="{{asset('images/logo-sevensecret.png')}}" class="m-auto img-logo mb-4" style="width: 70%">
                    <p class="mb-0">
                        {!! $setting->description !!}
                    </p>
                </div>
            </div>
        </div>
        <hr>
        {{-- <div class="container-fluid check-rates">
            <div class="row align-items-center my-2">
                <div class="col-7">
                    <span class="mb-0 text-uppercase">OFFICIAL WEBSITE</span>
                    <p class="mb-0 fw-bold" style="font-size:17px!important">LAST MINUTE DEALS</p>
                </div>
                <div class="col-5 button-wrapper">
                    <a href="https://elevatebali.com/m/offers" class="btn btn-custom w-100 py-2 rounded-0">Learn More</a>
                </div>
            </div>
        </div>
        <hr> --}}
        <div class="w-100 pb-2 mb-5">
            <div class="container-fluid px-1">
                <div class="row g-1">
                    <div class="col-7">
                        <div class="row g-1">
                            <div class="col-12 h-90px">
                                <div class="tiles">
                                    <img src="{{asset($villa->banner_image)}}" alt="{{config('app.name')}} - {{$villa->page_name}}">
                                    <a href="{{route('mvilla')}}">{{$villa->page_name}}</a>
                                </div>
                            </div>
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($experience->banner_image)}}" alt="{{config('app.name')}} - {{$experience->page_name}}">
                                    <a href="{{route('mexperience')}}">{{$experience->page_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($offer->banner_image)}}" alt="{{config('app.name')}} - {{$offer->page_name}}">
                                    <a href="{{route('moffer')}}">{{$offer->page_name}}</a>
                                </div>
                            </div>
                            <div class="col-12 h-90px">
                                <div class="tiles">
                                    <img src="{{asset('images/maps.jpg')}}" alt="Maps">
                                    <a href="https://goo.gl/maps/bb2yY8eDVvk1QRPw9" target="_blank">Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-1">
                            <div class="col-6 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($facilities->banner_image)}}" alt="{{config('app.name')}} - {{$facilities->page_name}}">
                                    <a href="{{route('mfacility')}}">{{$facilities->page_name}}</a>
                                </div>
                            </div>
                            <div class="col-6 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($spa->banner_image)}}" alt="{{config('app.name')}} - {{$spa->page_name}}">
                                    <a href="{{route('mspa')}}">{{$spa->page_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($dining->banner_image)}}" alt="{{config('app.name')}} - {{$dining->page_name}}">
                                    <a href="{{route('mdining')}}">{{$dining->page_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($wedding->banner_image)}}" alt="{{config('app.name')}} - {{$wedding->page_name}}">
                                    <a href="{{route('mwedding')}}">{{$wedding->page_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($honeymoon->banner_image)}}" alt="{{config('app.name')}} - {{$honeymoon->page_name}}">
                                    <a href="{{route('mhoneymoon')}}">{{$honeymoon->page_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset($blog->banner_image)}}" alt="{{config('app.name')}} - {{$blog->page_name}}">
                                    <a href="{{route('mblog')}}">{{$blog->page_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-seven-secret-mobile>