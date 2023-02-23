@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('dining.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('dining.index') }}" />
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.slider').slick({
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
        });
</script>
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
                </div>
            </div>
        </div>
    </section>

    <section>
        @foreach ($offer_list as $key => $data)
        @if ($key % 2 == 0)
        <div class="py-5 bg-light-gray">
            @else
            <div class="py-5">
                @endif
                <div class="container">
                    <div class="row">

                        @if ($key % 2 == 0)
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-between order-1">
                            @else
                            <div class="col-12 col-md-6 d-flex flex-column justify-content-between order-2">
                                @endif
                                <div class="pe-3">
                                    <h2 class="text-uppercase mb-4">{{ $data->title }}</h2>
                                    <p class="leftline position-relative ps-5">{!! $data->excerpt !!}</p>
                                </div>
                                <div class="pe-3">
                                    <button class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0 me-1" data-bs-toggle="modal" data-bs-target="#modal{{$data->id}}">View Details</button>
                                    @if ($data->min_night == !null)
                                    <a href="https://book-directonline.com/properties/nandinibalidirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&currency=USD&trackPage=yes" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @elseif ($data->button_text == "Learn More")
                                    <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Special Offer - {{ $data->title }}*" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @else
                                    <a href="{{$data->button_link}}" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0" target="_blank">{{$data->button_text}}</a>
                                    @endif
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modal{{$data->id}}" tabindex="-1" aria-labelledby="modal{{$data->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-bold text-uppercase" id="modal{{$data->id}}Label">Special Offers</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="text-uppercase">{{$data->title}}</h2>
                                                <p class="text-primary mb-3">{!! $data->description !!}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                                                @if ($data->min_night == !null)
                                                <a href="https://book-directonline.com/properties/nandinibalidirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&currency=USD&trackPage=yes" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0" target="_blank">{{$data->button_text}}</a>
                                                @elseif ($data->button_text == "Learn More")
                                                <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Special Offer - {{ $data->title }}*" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0" target="_blank">{{$data->button_text}}</a>
                                                @else
                                                <a href="{{$data->button_link}}" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0" target="_blank">{{$data->button_text}}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            @if ($key % 2 == 0)
                            <div class="col-12 col-md-6 order-2">
                                @else
                                <div class="col-12 col-md-6 order-1">
                                    @endif
                                    <div class="h-100 slider">

                                        @foreach ($data->images as $subdata)
                                        @if ($subdata->is_active == '1')
                                        <div class="ratio ratio-16x9">
                                            <img src="{{ asset('storage/' . $subdata->image) }}" alt="{{ $setting->meta_title . ' - ' . $subdata->title }}" class="w-100 object-fit-cover object-position-center">
                                        </div>
                                        @else
                                        @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
    </section>
</x-desktop>