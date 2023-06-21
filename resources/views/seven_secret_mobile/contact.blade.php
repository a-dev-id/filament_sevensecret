@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('mcontact') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('mcontact') }}" />
@endsection

@section('contact_active', 'active')

<x-seven-secret-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-1">
                        <a href="{{route('mindex')}}" class="link-dark"><i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="col-11 ps-1">
                        <h1>{{$setting->page_name}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid contact py-2">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('images/logo-sevensecret.png')}}" alt="{{config('app.name')}} - Logo" class="img-logo my-3" style="width:50%">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4152.808820475982!2d116.04592373372977!3d-8.428285441811916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcddd537ea4ceb5%3A0xde92945bc8e915e0!2sSeven%20Secrets%20Resort%20by%20Hanging%20Gardens!5e1!3m2!1sen!2sid!4v1686715753101!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <ul class="list-unstyled">
                        <li class="my-1"><i class="fa fa-map-marker me-1"></i> Jl. Raya Pemenang No.KM 10, Malaka, Kec. Pemenang, Kab. Lombok Utara, Nusa Tenggara Barat, Indonesia</li>

                        <li class="my-1"><i class="fa fa-phone me-1"></i> <a href="https://wa.me/6282145666738" class="link-dark">+62 821-4566-6738</a></li>

                        <li class="my-1"><i class="fa fa-envelope me-1"></i> <a href="mailto:reservations@sevensecretsresorts.com" class="link-dark">reservations@sevensecretsresorts.com</li>
                    </ul>
                </div>
            </div>
        </div>
</x-seven-secret-mobile>