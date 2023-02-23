@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('press.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('press.index') }}" />
@endsection

@push('css')
<style type="text/css">
    .press-box-arrows {
        top: calc(50% - 1.5em);
    }

    .press-box-arrows .slick-arrow {
        width: 3em;
        height: 3em;
    }

    .press-box-slides .card {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    .press-box-slides .slick-track {
        display: flex !important;
    }

    .press-box-slides .slick-slide {
        height: inherit !important;
    }

</style>
@endpush

@push('js')
<script type="text/javascript">
    $('.press-box-slides').slick({
		dots: false,
		infinite: true,
		speed: 500,
		centerMode: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		appendArrows: ".press-box-arrows",
		prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
		nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
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
    <section class="py-90 bg-light-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="press-box-slides overflow-hidden">

                            @foreach ($press_list as $data)
                            <div class="card mx-3">
                                <div class="card-img-top ratio ratio-4x3">
                                    <img src="{{asset('storage/'.$data->cover_image)}}" class="w-100 object-fit-cover object-position-center" alt="{{$setting->title.' - '.$data->title}}">
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="press-box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>