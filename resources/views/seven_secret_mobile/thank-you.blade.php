@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('thank-you.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('thank-you.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-desktop>
    <section class="vh-100">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                    <a href="{{ route('index') }}" class="link-dark text-decoration-none"><i class="fa fa-long-arrow-left me-2"></i> <span class="border-bottom border-dark">Back to front page</span></a>
                </div>
            </div>
        </div>
    </section>

</x-desktop>