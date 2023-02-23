@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('villas.show',[$setting->slug]) }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('villas.show',[$setting->slug]) }}" />
@endsection

@push('css')
<style type="text/css">
    .slider-nav .slick-slide {
        margin: 0 5px;
    }

    .icon-30 {
        width: 30px;
        height: 30px;
    }

    .villa-box-arrows {
        top: calc(50% - 1.5em);
    }

    .villa-box-arrows .slick-arrow {
        width: 3em;
        height: 3em;
    }

    .py-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .villa-box-slides .slick-list {
        margin: 0 -5px;
        padding: 0 15% 0 0;
    }

    .villa-box-slides .slick-slide {
        margin: 0 5px;
    }

</style>
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.accommodation-box-list').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".accommodation-box-arrows",
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
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		autoplay: true,
		autoplaySpeed: 3000,
	});
</script>
@endpush

<x-hanging-gardens-of-bali>
    <!-- Content -->
    <section class="header-image">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" class="w-100 vh-100" alt="{{ $setting->meta_title }}">
    </section>

    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="underline fw-bold text-uppercase">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Odd -->
    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="underline-left">Features</h3>
                        <div class="row">

                            @foreach ($setting->facilities as $data)
                            @if ($data->is_active == '1')
                            <div class="col-12 col-md-6 mb-2 d-flex align-items-center text-start">
                                <img src="{{ asset('storage/' . $data->icon) }}" alt="{{ $setting->title.' - '.$data->title }}" class="me-2 icon-30">
                                <span class="ms-2">{{ $data->title }}</span>
                            </div>
                            @else
                            @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center mt-4">
                        <div class="col-12 col-md-6 text-center">
                            <a href="{{ $setting->button_link }}" class="btn btn-gold text-uppercase rounded-0 px-4" target="_blank">{{ $setting->button_text }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="slider-for mb-2">
                        @foreach ($setting->images as $data)
                        @if ($data->is_active == '1')
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('storage/' . $data->image) }}" class="w-100 object-fit-cover object-position-center" alt="{{ $setting->title . ' - ' . $data->title }}">
                        </div>
                        @else
                        @endif
                        @endforeach
                    </div>
                    <div class="slider-nav">
                        @foreach ($setting->images as $data)
                        @if ($data->is_active == '1')
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('storage/' . $data->image) }}" class="w-100 object-fit-cover object-position-center" alt="{{ $setting->title . ' - ' . $data->title }}">
                        </div>
                        @else
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center position-relative">
                    <h1 class="underline">Other Villas</h1>
                    <div class="position-relative">
                        <div class="villa-box-slides overflow-hidden">

                            @foreach ($villa_list as $data)
                            @if ($data->slug == $setting->slug)
                            @else
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
                                                <h4 class="fs-xl-3 fs-4 fw-bold">{{ $data->title }}</h4>
                                                {{ Str::limit($data->excerpt, 100) }}
                                            </div>
                                        </div>
                                        <a href="{{ route('villas.show', [$data->slug]) }}" class="btn btn-sm btn-outline-light text-uppercase py-2 px-3 rounded-0 me-4">Explore</a>
                                    </div>
                                </div>
                            </div>
                            @else
                            @endif
                            @endif
                            @endforeach


                        </div>
                        <div class="villa-box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>