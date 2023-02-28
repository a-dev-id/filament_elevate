@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('dining.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('dining.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript">
    $('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		arrows: false,
		cssEase: 'linear',
		draggable: false,
		pauseOnDotsHover: false,
		pauseOnHover: false,
		pauseOnFocus: false
	});
</script>
@endpush

<x-elevate-bali>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{asset('storage/'.$setting->banner_image)}}" alt="{{$setting->title}}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>
    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h1 class="mb-2 text-uppercase">{{$setting->title}}</h1>
                    <!-- <h1 class="mb-2">CLOUDS</h1> -->
                    <h4 class="mb-3 underline">{{$setting->subtitle}}</h4>
                </div>
                <div class="col-12 col-md-4 border-end border-secondary">
                    <div class="mb-3">
                        <h4 class="text-uppercase mb-0" style="font-size: 12px;">Cuisine</h4>
                        <p class="fs-5 mb-0">International and Indonesian</p>
                    </div>
                    <div class="mb-3">
                        <h4 class="text-uppercase mb-0" style="font-size: 12px;">Operationg Hour</h4>
                        <p class="fs-5 mb-0">7am to 9pm</p>
                    </div>
                    <div class="mb-3">
                        <h4 class="text-uppercase mb-0" style="font-size: 12px;">Contact</h4>
                        <p class="fs-5 mb-0">
                            <a href="mailto:reservations@elevatebali.com" class="link-dark text-decoration-none d-block mb-0">reservations@elevatebali.com</a>
                            <a href="tel:+62 821 4566 6738" class="link-dark text-decoration-none d-block mb-0">+62 821 4566 6738</a>
                        </p>
                    </div>
                    <div class="mt-1">
                        <a href="mailto:reservations@elevatebali.com" class="btn btn-primary text-uppercase px-3 py-2 rounded-0 small"> Book a Table</a>
                    </div>
                </div>
                <div class="col-12 col-md-8 ps-5">
                    <h5 class="fw-bold mb-3">{{$setting->excerpt}}</h5>
                    <div class="lh-lg">{!! $setting->description !!}</div>
                </div>
            </div>
        </div>
    </section>

    <section>

        @foreach ($dining_list as $data)
        @if($loop->iteration % 2 == 0) <div class="py-5"> @else <div class="py-5 bg-light-gray"> @endif
                <div class="container">
                    <div class="row">
                        @if($loop->iteration % 2 == 0) <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-2"> @else <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-1"> @endif
                                <div class="pe-3">
                                    <h2 class="text-uppercase mb-3">{{$data->title}}</h2>
                                    <p class="fw-bold mb-4">{{$data->subtitle}}</p>
                                    {!! $data->description !!}
                                </div>
                                <div class="pe-3">
                                    <button type="submit" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0">Inquire Now</button>
                                </div>
                            </div>
                            @if($loop->iteration % 2 == 0) <div class="col-12 col-md-7 order-1"> @else <div class="col-12 col-md-7 order-2"> @endif
                                    <div class="h-100 slider">
                                        <div class="ratio ratio-16x9">
                                            <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{$data->title}}" class="w-100 object-fit-cover object-position-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

    </section>

</x-elevate-bali>