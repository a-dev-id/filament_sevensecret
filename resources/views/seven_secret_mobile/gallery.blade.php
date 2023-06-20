@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mgallery',[$setting->slug]) }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('mgallery',[$setting->slug]) }}" />
@endsection

@section('gallery_active', 'active')

<x-seven-secret-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Photo Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid gallery py-2">
            <div class="row">
                <div class="col-12">
                    <div class="row g-1">
                        @foreach ($gallery_list as $data)
                        <div class="col-4">
                            <div class="ratio ratio-1x1">
                                <a href="{{asset($data->image)}}" data-fancybox="gallery">
                                    <img src="{{asset($data->image)}}" alt="Gellery - {{$data->title}}">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-seven-secret-mobile>