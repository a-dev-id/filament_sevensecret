@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('contact-us.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

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
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
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
                    <p class="fs-5 mt-4 mb-0">Munduk, Banjar
                        Kabupaten Buleleng - Bali
                        Indonesia</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-envelope"></i>
                    <p class="fs-5 mt-4 mb-0">reservations@elevatebali.com</p>
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
                        <a href="mailto:info@elevatebali.com" class="fs-5 text-decoration-none link-dark">info@elevatebali.com</a>
                    </div>
                    <div class="mt-1">
                        <h3 class="fw-bold">Sales</h3>
                        <a href="mailto:ssm@elevatebali.com" class="fs-5 text-decoration-none link-dark">ssm@elevatebali.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4986.8063648195875!2d115.07833411535934!3d-8.271233694048732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd187ff4f0f1dd5%3A0x6ca5a9c8030285a4!2sELEVATE%20BALI%20by%20HANGING%20GARDENS%20MUNDUK!5e1!3m2!1sen!2sid!4v1637821288203!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
</x-seven-secret>