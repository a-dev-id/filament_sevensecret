@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mblog') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mblog') }}" />
@endsection

@push('css')
<style>
    .page-link {
        color: #000000;
    }

</style>
@endpush

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
        <div class="container-fluid activities py-2">
            <div class="row">
                @foreach ($blog_list as $data)
                <div class="col-12">
                    <div class="row gx-1 py-3 @if ($loop->last) @else border-bottom @endif">
                        <div class="col-5">
                            <div class="ratio ratio-1x1">
                                <img src="{{asset('storage/'.$data->cover_image)}}" class="img-fluid" alt="{{$data->title}}">
                            </div>
                        </div>
                        <div class="col-7 ps-2 d-flex flex-column justify-content-between">
                            <div class="title-wrapper">
                                <h2 class="fw-bold mb-2">{{$data->title}}</h2>
                                <p class="mb-3">{{ Str::limit($data->excerpt, 100) }}</p>
                            </div>
                            <div class="button-wrapper text-end">
                                <a href="{{route('mblog.show',[$data->slug])}}" class="btn btn-custom">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 mt-3">
                    {{ $blog_list->links() }}
                </div>
            </div>
        </div>
</x-elevate-bali-mobile>