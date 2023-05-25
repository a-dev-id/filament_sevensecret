@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mblog.show',[$setting->slug]) }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mblog.show',[$setting->slug]) }}" />
@endsection

@push('css')
<style>
    .share-article i {
        font-size: 24px;
    }

</style>
@endpush

@push('js')
@endpush

<x-elevate-bali-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-1">
                        <a href="{{route('mblog')}}" class="link-dark"><i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="col-11 ps-1">
                        <h1>{{$setting->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid activities py-2">
            <div class="row">
                <div class="col-12 my-3">
                    <img src="{{asset('storage/'.$blog_detail->cover_image)}}" class="w-100" alt="{{$blog_detail->title}}">
                    <h1 class="my-3">{{$blog_detail->title}}</h1>
                    <div class="d-flex share-article">
                        <p class="about">Share this article : </p>
                        <a class="ps-2" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i class="fa fa-facebook-square" style="color: #3b5998"></i></a>
                        <a class="ps-2" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//twitter.com/intent/tweet?text={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #00acee;" class="fa fa-twitter-square"></i></a>
                        <a class="ps-2" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="https://api.whatsapp.com/send?text={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #25d366;" class="fa fa-whatsapp-square"></i></a>
                        <a class="ps-2" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="https://www.linkedin.com/sharing/share-offsite/?url={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #0e76a8;" class="fa fa-linkedin"></i></a>
                        <a class="ps-2" href="mailto:?subject={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #00ffff;" class="fa fa-envelope-square" aria-hidden="true"></i></a>
                    </div>

                    <div class="about">{!! $blog_detail->description !!}</div>
                </div>
            </div>
        </div>
</x-elevate-bali-mobile>