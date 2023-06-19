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

@section('contact_active', 'active')

<x-elevate-bali-mobile>
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
        <div class="container-fluid contact py-2">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('images/logo.png')}}" alt="{{config('app.name')}} - Logo" class="img-logo my-3" style="width:70%">
                    {{-- <iframe src="https://maps.google.com/maps?q=Nandini+Bali+Jungle+Resort+and+Spa&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="my-3"></iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4940.537093958637!2d115.07833411536863!3d-8.271228385425484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd187ff4f0f1dd5%3A0x6ca5a9c8030285a4!2sELEVATE%20BALI%20by%20HANGING%20GARDENS!5e1!3m2!1sen!2sid!4v1677736377954!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <ul class="list-unstyled">
                        <li class="my-1"><i class="fa fa-map-marker me-1"></i> Munduk, Banjar Kabupaten Buleleng - Bali Indonesia</li>

                        <li class="my-1"><i class="fa fa-phone me-1"></i> <a href="https://wa.me/6282145666738" class="link-dark">+62 821-4566-6738</a></li>

                        <li class="my-1"><i class="fa fa-envelope me-1"></i> <a href="mailto:reservations@elevatebali.com" class="link-dark">reservations@elevatebali.com</li>
                    </ul>
                </div>
            </div>
        </div>
</x-elevate-bali-mobile>