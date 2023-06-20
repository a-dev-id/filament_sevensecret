@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mvilla') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('mvilla') }}" />
@endsection

<x-seven-secret-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-1">
                        <a href="{{route('mindex')}}" class="link-dark"><i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="col-11 ps-1">
                        <h1>{{$setting->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid accommodation py-2">
            <div class="container-fluid about">
                <div class="row">
                    <div class="col-12 py-3">
                        {{-- <img src="{{asset('storage/'.$setting->banner_image)}}" class="m-auto mb-4 w-100"> --}}
                        <h1 class="text-center">{{$setting->page_name}}</h1>
                        <p class="mb-0">
                            {!! $setting->description !!}
                        </p>
                        <div class="button-wrapper text-center">
                            <a href="mailto:reservations@hanginggardensofbali.com" class="btn btn-custom w-100 py-2" target="_blank">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-seven-secret-mobile>