@section('meta')
<meta name="title" content="{{ $setting->meta_title }}| {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('contact-us.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}| {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }}| {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('contact-us.index') }}" />
@endsection

@push('css')
<style type="text/css">
    .btn-whatsapp {
        color: #fff;
        background-color: #075E54;
        border-color: #075E54;
    }

    .btn-whatsapp .text-white {
        background-color: #128C7E;
    }

    .btn-whatsapp:hover {
        background-color: #25D366;
        border-color: #25D366;
    }

</style>
@endpush

@push('js')
@endpush

<x-seven-secret>
    <section class="vh-100">
        <img src="{{ asset($setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">Get in Touch</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-phone"></i>
                    <p class="fs-5 mt-4 mb-0">+62 821-4566-6738</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-map-marker"></i>
                    <p class="fs-5 pt-2">Jl. Raya Pemenang No.KM 10, Malaka,
                        Kec. Pemenang, Kab. Lombok Utara,
                        Nusa Tenggara Barat, Indonesia</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-envelope"></i>
                    <p class="fs-5 mt-4 mb-0">reservations@sevensecretsresorts.com</p>
                </div>
                <div class="col-12 my-4">
                    <a href="http://wa.me/6282145666738" target="_blank" class="btn btn-whatsapp border-0 rounded-0 d-inline-flex p-0">
                        <span class="px-3 d-flex align-items-center">Chat with Us</span>
                        <div class="px-3 py-2 text-white"><i class="fa fa-whatsapp"></i></div>
                    </a>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <h3 class="fw-bold">General Enquiries</h3>
                        <a href="mailto:info@sevensecretsresorts.com" class="fs-5 text-decoration-none link-dark">info@sevensecretsresorts.com</a>
                    </div>
                    <div class="mt-1">
                        <h3 class="fw-bold">Sales</h3>
                        <a href="mailto:ssm@sevensecretsresorts.com" class="fs-5 text-decoration-none link-dark">ssm@sevensecretsresorts.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4152.808820475982!2d116.04592373372977!3d-8.428285441811916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcddd537ea4ceb5%3A0xde92945bc8e915e0!2sSeven%20Secrets%20Resort%20by%20Hanging%20Gardens!5e1!3m2!1sen!2sid!4v1686715753101!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</x-seven-secret>