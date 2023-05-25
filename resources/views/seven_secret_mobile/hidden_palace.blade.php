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
            <div class="container-fluid about">
                <div class="row">
                    <div class="col-12 py-3">
                        {{-- <img src="{{asset('storage/'.$setting->banner_image)}}" class="m-auto mb-4 w-100"> --}}
                        <h1 class="text-center">{{$setting->page_name}}</h1>
                        <p class="mb-0">
                            {!! $setting->description !!}
                        </p>
                        <div class="button-wrapper text-center">
                            <a href="mailto:reservations@hanginggardensofbali.com" class="btn btn-custom w-100 py-2" target="_blank">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-cover" style="background-image: url({{asset('images/header-hidden-palace-1.jpg')}}); background-attachment: fixed;">
                <div class="py-90 bg-black bg-opacity-50">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <h2 class="underline text-white text-center fw-bold">Main Features</h2>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/home.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">2000 sqm</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/person.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">2-10 Persons</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/pool.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Olympic Size Pool</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/coffee-maker.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Coffee Tea Making Facilities</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/audio.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Home Audio &amp; Visual System</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/bathtub.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Deluxe handmade terrazzo bathtub</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/bed.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">King Size</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/minibar.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Minibar</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/safety-box.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Safety Box</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/bathrob.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Cotton Bathrobes &amp; Slippers</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/hairdryer.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Hair Dryer</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/toilitries.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Luxurious toiletries</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/gazebo.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Outdoor Gazebo &amp; Sunbeds</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/wifi.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Wireless Internet</span>
                            </div>
                            <div class="col-6 my-2 d-flex align-items-center text-start text-light">
                                <img alt="Hanging Gardens of Bali - Hidden Palace" src="{{asset('images/facilities/shared.png')}}" class="me-2" style="width: 20px; filter: invert(100%);">
                                <span class="ms-2">Shared Dining &amp; Living Area</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mt-4">
            <div class="row mt-4">
                @foreach ($hidden_palace_list as $data)
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
                                            {{-- <div class="button-wrapper text-center">
                                                <h5 class="fw-bold">{{$data->price.' '.$data->per}}</h5>
                                                <a href="https://book-directonline.com/properties/nandinibalidirect?locale=en&currency=USD" class="btn btn-custom w-100 py-2" target="_blank">Book this Room</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 my-3">
                    <div class="button-wrapper text-center">
                        <a href="mailto:reservations@hanginggardensofbali.com" class="btn btn-custom w-100 py-2" target="_blank">Inquire Now</a>
                    </div>
                </div>
            </div>
        </div>
</x-elevate-bali-mobile>