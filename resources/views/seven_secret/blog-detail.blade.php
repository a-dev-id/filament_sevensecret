@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('blog.show',[$setting->slug]) }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('blog.show',[$setting->slug]) }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-seven-secret>
    <section class="header-image">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="w-100 vh-100">
    </section>

    <section class="py-90 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="blog-slider mb-4">
                        <div class="ratio ratio-1x1">
                            <img src="{{asset('storage/'.$blog_detail->cover_image)}}" class="w-100 object-fit-cover object-position-center" alt="{{'Blog - '.$blog_detail->title}}">
                        </div>
                    </div>
                    <h1 class="fs-3 fw-bold text-uppercase">{{$blog_detail->title}}</h1>
                    <h6 class="text-muted mb-4">Posted on {{date('M d, Y', strtotime($blog_detail->updated_at))}}</h6>
                    {!! $blog_detail->description !!}
                </div>
                <div class="col-12 col-md-4">
                    <h1 class="fs-3 fw-bold text-uppercase mb-4">Most Recent</h1>

                    @foreach ($blog_list as $data)
                    @if ($loop->last)
                    <div class="row py-3">
                        @else
                        <div class="row py-3 border-bottom">
                            @endif
                            <div class="col-12 col-md-4">
                                <div class="ratio ratio-4x3">
                                    <img src="{{asset('storage/'.$data->cover_image)}}" class="w-100 object-fit-cover object-position-center" alt="{{'Blog - '.$data->title}}">
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <h1 class="fs-6 fw-bold">
                                    <a href="{{route('blog.show',[$data->slug])}}" class="link-dark text-decoration-none">{{$data->title}}</a>
                                </h1>
                                <h6 class="text-muted">Posted on {{date('M d, Y', strtotime($data->updated_at))}}</h6>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

</x-seven-secret>