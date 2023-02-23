@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('index') }}" />
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript">
    $('.advantages-box-list').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".advantages-box-arrows",
		prevArrow: "<div class='float-start rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});

	$('.villa-box-slides').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".villa-box-arrows",
		prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});

	$('.experience-box-list').slick({
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

	$('.offers-box-list').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".offers-box-arrows",
		prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});

	$('.reviews-box-list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".reviews-box-arrows",
		prevArrow: "<i class='fas fa-long-arrow-alt-left'></i>",
		nextArrow: "<i class='fas fa-long-arrow-alt-right'></i>",
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});
</script>
@endpush

<x-hanging-gardens-of-bali>

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

    <section class="description bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="underline fw-bold text-uppercase">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="home-advantages">
        <div class="container">
            <div class="row">
                <div class="col-12 border border-secondary py-5 position-relative">
                    <span class="advantages-box-title px-2">Exclusive Amenities & Services</span>
                    <div class="advantages-box-list">

                        @foreach ($setting->CustomFields as $data)
                        @if ($data->is_active == '1')
                        <div class="wrap-advantages-element">
                            <p class="advantages-element-text mb-0">{{ $data->title }}</p>
                            <p class="advantages-element-subtext mb-0">{{ $data->excerpt }}</p>
                        </div>
                        @else
                        @endif
                        @endforeach

                    </div>
                    <div class="advantages-box-arrows"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center position-relative">
                    <h2 class="underline">Accommodations Bali</h2>
                    <div class="position-relative">
                        <div class="villa-box-slides overflow-hidden">

                            @foreach ($villa_list as $data)
                            @if ($data->is_active == '1')
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="{{ asset('storage/' . $data->banner_image) }}" alt="{{ $data->title }}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute w-100 h-50 bottom-0 py-3 d-flex align-items-end black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100">
                                        <div class="d-flex align-items-center pe-3">
                                            <hr class="accommodation-element-line">
                                            <div class="text-start">
                                                <p class="mb-1 text-uppercase">{{ $data->subtitle }}</p>
                                                <h3 class="fs-xl-3 fs-4 fw-bold">{{ $data->title }}</h3>
                                                {{ Str::limit($data->excerpt, 90) }}
                                            </div>
                                        </div>
                                        <a href="{{ route('villas.show', [$data->slug]) }}" class="btn btn-sm btn-outline-light text-uppercase py-2 px-3 rounded-0 me-4">Explore</a>
                                    </div>
                                </div>
                            </div>
                            @else
                            @endif
                            @endforeach

                        </div>
                        <div class="villa-box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-experience">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center experience-box-list">

                    @foreach ($experience_list as $data)
                    <div class="row">
                        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-between wrap-experience-element">
                            <h3 class="experience-element-title underline">Best experiences Bali</h3>
                            <div class="experience-element-container">
                                <h3 class="experience-element-subtitle text-uppercase fst-italic mb-4">{{ $data->title }}</h3>
                                <div class="experience-element-description"></div>
                            </div>
                            <div class="experience-element-text fst-italic w-100 text-center">{{ Str::limit($data->excerpt, 80) }}</div>
                            <div class="experience-element-button">
                                <a href="{{ route('experiences.index') }}" class="btn btn-gold text-uppercase px-4 py-3 rounded-0 fw-bold">Discover More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="{{ asset('storage/'.$data->banner_image) }}" class="experience-element-image w-100" alt="{{ 'Experience - '.$data->title }}">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="home-offers">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center position-relative">
                    <h3 class="underline">Special Offers</h3>
                    <div class="offers-box-list" style="z-index: 2;">

                        @foreach ($offer_list as $data)
                        <div class="wrap-offers-element">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{'Special Offer - '.$data->title}}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="offers-element-overlay">
                                    <div class="offers-element-overlay-content">
                                        <p>{{$data->excerpt}}</p>
                                        <a href="{{route('offers.index')}}" class="btn btn-outline-light text-uppercase py-3 px-4 fw-bold rounded-0">Explore</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase">{{$data->title}}</h4>

                            @if ($data->min_night == !null)
                            <a href="https://book-directonline.com/properties/hanginggardensofbalidirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&currency=USD&trackPage=yes" class="btn btn-gold text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @elseif ($data->button_text == "Learn More")
                            <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Special Offer - {{ $data->title }}*" class="btn btn-gold text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @else
                            <a href="{{$data->button_link}}" class="btn btn-gold text-uppercase px-4 rounded-0" target="_blank">{{$data->button_text}}</a>
                            @endif

                        </div>
                        @endforeach

                    </div>
                    <div class="offers-box-arrows"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-reviews">
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
                                <h4 class="reviews-element-icon">“</h4>
                            </div>
                            <div class="reviews-box-list">

                                @foreach ($review_list as $data)
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <p><strong>{{$data->title}}</strong><br />{!! $data->comment !!}</p>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By {{$data->name}}</p>
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
</x-hanging-gardens-of-bali>