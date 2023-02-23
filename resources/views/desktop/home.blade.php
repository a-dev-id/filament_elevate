@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('index') }}" />
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<style type="text/css">
    #advantages-slides small {
        font-size: 10px;
        left: 80px;
        letter-spacing: .1em;
    }

    #offers-slides .box-arrows .slick-arrow {
        transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    }

    #offers-slides .box-arrows .slick-arrow:hover {
        background-color: #5A8C14 !important;
        color: #FFF;
        transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    }

</style>
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('#advantages-slides .sliders').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: "#advantages-slides .box-arrows",
            prevArrow: "<div class='float-start rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
        $('#accommodation-slides .sliders').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: "#accommodation-slides .box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
        $('#experiences-slides .sliders').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
        });
        $('#offers-slides .sliders').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: "#offers-slides .box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });

        $('.reviews-box-list').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: ".reviews-box-arrows",
            prevArrow: "<i class='fa fa-long-arrow-left'></i>",
            nextArrow: "<i class='fa fa-long-arrow-right'></i>",
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }, ]
        });
</script>

<script type="text/javascript">
    $(document).ready(function() {
            $('#BannerPopUp').modal('show');
        });
</script>
@endpush

<x-desktop>

    @foreach ($popup_list as $data)
    <div class="modal fade" id="BannerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            @if ($data->button_text == 'with_text')
            <div class="modal-content" style="background-color: white; border-radius: 0px!important; top: 70px;">
                <div class="modal-body pb-4">

                    <div class="row">
                        <div class="col-md-12 text-center mb-2">
                            <img class="" src="{{ asset('storage/' . $data->cover_image) }}" alt="{{ $data->title }}" style="max-width: 100%">
                        </div>
                        <div class="col-md-12 text-center fs-3">
                            <h3 class="">{{ $data->title }}</h3>
                            <p class="mb-4" style="font-size: 16px;">{{ $data->excerpt }}</p>
                            <a class="btn btn-default text-decoration-none fs-5" href="{{ route('blog.show', [$data->slug]) }}" style="background-color:#6ea027; color:white;">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
            @elseif ($data->button_text == 'full_image')
            <div class="modal-content" style="background-color: white; border-radius: 0px!important; top: 100px;">
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <a href="{{ route('blog.show', [$data->button_link]) }}">
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $data->cover_image) }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            @endif
        </div>
    </div>
    @endforeach

    <section class="vh-100 overflow-hidden position-relative">
        <iframe src="{{ $setting->button_link }}" class="header-iframe-youtube"></iframe>
    </section>

    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-2">{{ $setting->title }}<br></h1>
                    <h4 class=" mb-5 underline">{{ $setting->subtitle }}</h4>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 border border-secondary py-5 position-relative" id="advantages-slides">
                    <small class="position-absolute top-0 bg-primary fw-bold text-white text-uppercase py-1 px-2">Advantages of Booking</small>
                    <div class="sliders px-4 d-flex justify-content-center align-items-center">

                        @foreach ($setting->CustomFields as $data)
                        @if ($data->is_active == '1')
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">{{ $data->title }}</p>
                            <p class="text-primary mb-0 small">{{ $data->excerpt }}</p>
                        </div>
                        @else
                        @endif
                        @endforeach

                    </div>
                    <div class="box-arrows position-absolute start-0 w-100 px-3"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-2 text-center mb-5 underline">Accommodations</h1>
                    <div class="position-relative" id="accommodation-slides">
                        <div class="sliders with-half-slides overflow-hidden">

                            @foreach ($villa_list as $data)
                            @if ($data->is_active == '1')
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="{{ asset('storage/' . $data->banner_image) }}" alt="{{ $data->title }}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">{{ $data->title }}</h2>
                                                <p class="small mb-0">{{ Str::limit($data->excerpt, 90) }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('suites-villas.show', [$data->slug]) }}" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @endif
                            @endforeach

                        </div>
                        <div class="box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row" id="experiences-slides">
                <div class="col-12 text-center sliders">

                    @foreach ($experience_list as $data)
                    <div class="row d-flex">
                        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-between">
                            <h1 class="underline pt-4">Experiences</h1>
                            <div class="px-4">
                                <h3 class="text-uppercase fst-italic mb-4">{{ $data->title }}</h3>
                                <div class="fs-5">
                                    {{ Str::limit($data->excerpt, 150) }}
                                </div>
                            </div>
                            <div class="pb-4">
                                <a href="{{ route('experiences.index') }}" class="btn btn-primary text-uppercase px-4 py-3 rounded-0 fw-bold">Discover More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ratio ratio-1x1">
                                <img src="{{ asset('storage/' . $data->banner_image) }}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-12 text-center position-relative" id="offers-slides">
                    <h1 class="fs-2 text-center mb-5 underline">Special Offers</h1>
                    <div class="sliders overflow-hidden position-relative" style="z-index: 2;">

                        @foreach ($offer_list as $data)
                        <div class="mx-1">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('storage/' . $data->cover_image) }}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-100 d-flex align-items-center bg-hover-overlay">
                                    <div class="text-white w-100">
                                        <div class="h-100 px-5">
                                            {{-- <h2 class="fs-5 mb-5">Start from USD 1,584++</h2> --}}
                                            <div class="text-center pt-4">
                                                <a href="{{ route('offers.index') }}" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase">{{ $data->title }}</h4>
                            {{-- <a href="{{ $data->button_link }}" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{ $data->button_text }}</a> --}}
                            @if ($data->min_night == !null)
                            <a href="https://book-directonline.com/properties/nandinibalidirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&currency=USD&trackPage=yes" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @elseif ($data->button_text == "Learn More")
                            <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Special Offer - {{ $data->title }}*" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @else
                            <a href="{{$data->button_link}}" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @endif
                        </div>
                        @endforeach

                    </div>
                    <div class="box-arrows position-absolute" style="left: -2.75rem; right: -2.75rem; z-index: 1;"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="reviews-element-container">
                        <div class="wrap-reviews-element">
                            <p class="reviews-element-title">
                                Reviews
                            </p>
                            <div class="reviews-element-quote">
                                <hr class="reviews-element-line">
                                <h1 class="reviews-element-icon">“</h1>
                            </div>
                            <div class="reviews-box-list">

                                @foreach ($review_list as $data)
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <strong>{{ $data->title }}</strong>
                                        {!! $data->comment !!}
                                    </div>
                                    <p class="reviews-element-guess fw-bold">{{ $data->name }}</p>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="reviews-element-gray-box">
                            <div class="reviews-box-arrows"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-block text-center pt-5">
        <a href="https://www.instagram.com/nandinijungleresort/" class="btn btn-outline-secondary rounded-0 mb-4" style="width: 250px;"><i class="fa fa-instagram"></i> @nandinijungleresort</a>
        <!-- SnapWidget -->
        <script src="https://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="https://snapwidget.com/embed/961982" class="snapwidget-widget border-0 overflow-hidden w-100" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
    </div>
</x-desktop>