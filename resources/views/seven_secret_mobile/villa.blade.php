@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mvilla') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mvilla') }}" />
@endsection

@section('villa_active', 'active')

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
        <div class="container-fluid accommodation py-2">
            <div class="row">
                @foreach ($villa_list as $data)
                <div class="col-12">
                    <div class="room">
                        <div class="pb-3">
                            <div class="slider mb-2">
                                @foreach ($data->images as $subdata)
                                <div class="ratio ratio-16x9">
                                    <img src="{{asset('storage/'.$subdata->image)}}" class="img-fluid" alt="{{$subdata->title}}">
                                </div>
                                @endforeach
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-8">
                                    <h2 class="title">{{$data->title}}</h2>
                                </div>
                                <div class="col-4 button-wrapper text-end">
                                    <button type="button" class="btn btn-outline-dark w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#{{$data->slug}}">Room Info <i class="fa fa-chevron-up mx-1 rotate-180"></i></button>
                                </div>
                            </div>
                            <div class="row collapse" id="{{$data->slug}}">
                                <div class="col-12">
                                    <hr>
                                    {{-- <div class="row row-cols-2 gx-1">
                                        <div class="col text-center">
                                            <p class="room-icon mb-1">
                                                <i class="fa fa-expand"></i>
                                                Size
                                            </p>
                                            <p class="feature">89 sqm</p>
                                        </div>
                                        <div class="col text-center">
                                            <p class="room-icon mb-1">
                                                <i class="fa fa-bed room-icon"></i>
                                                Bed
                                            </p>
                                            <p class="feature">King Size Bed</p>
                                        </div>
                                    </div>
                                    <hr> --}}
                                    <div class="row">
                                        <div class="col-12 facilities">
                                            <div class="mb-3">
                                                <h4 class="text-center fw-bold mb-2">Room Facilities</h4>
                                                <div class="d-flex justify-content-center">
                                                    <ul class="text-start list-unstyled" style="column-count: 2;">
                                                        @foreach ($data->facilities as $subdata)
                                                        <li class="px-1 pt-2"><img src="{{asset('storage/'.$subdata->icon)}}" style="width: 20px;" class="pe-1">{{$subdata->title}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            {!! $data->description !!}
                                            <hr>
                                            <div class="button-wrapper text-center">
                                                <h5 class="fw-bold">{{$data->price.' '.$data->per}}</h5>
                                                <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?" class="btn btn-custom w-100 py-2" target="_blank">Book this Room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</x-elevate-bali-mobile>