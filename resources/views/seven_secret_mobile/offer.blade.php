@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('moffer') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('moffer') }}" />
@endsection

@push('css')
<style>
    .form-control.datepicker[readonly] {
        background-color: #fff;
        cursor: pointer;
    }

</style>
@endpush

@section('offer_active', 'active')

<x-seven-secret-mobile>
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
        <div class="container-fluid experience py-2">
            <div class="row">

                @foreach ($offer_list as $data)
                <div class="col-12 pt-2">
                    <div class="card shadow-sm text-dark mb-2">
                        <img src="{{asset($data->cover_image)}}" class="card-img-top" alt="{{ $setting->title.' - '.$data->title }}">
                        <div class="card-body p-2">
                            <h2 class="card-title mb-1">{{$data->title}}</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#{{$data->slug}}" class="btn btn-outline-custom rounded-0 mt-1" style="font-size: 60%;">View Detail</a>
                        </div>
                    </div>
                    <!-- Detail Modal -->
                    <div class="modal fade" id="{{$data->slug}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{$data->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {!! $data->description !!}
                                </div>
                                <div class="modal-footer button-wrapper">
                                    <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                    @if ($data->button_text == "Inquiry Now")
                                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#{{'modalinquiry'.$data->id}}">
                                        {{ $data->button_text }}
                                    </button>
                                    @elseif($data->button_text == "Book Now")
                                    <a href="{{$data->button_link}}promocode={{$data->promo_code}}&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&trackPage=yes" target="_blank" class="btn btn-custom">{{$data->button_text}}</a>
                                    @else
                                    <a href="{{$data->button_link}}" target="_blank" class="btn btn-custom">{{$data->button_text}}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
</x-seven-secret-mobile>