@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('villas.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('villas.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript">
    $('.accommodation-element-slides').slick({
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
                    <h1 class="underline fw-bold text-uppercase">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">

                @foreach ($villa_list as $data)
                <div class="col-12 col-md-6 mb-4">
                    <div class="position-relative">
                        <div class="accommodation-element-slides">

                            @foreach ($data->images as $subdata)
                            <div class="ratio ratio-4x3">
                                <img src="{{ asset('storage/' . $subdata->image) }}" class="w-100 object-fit-cover object-position-center" alt="{{$subdata->title}}">
                            </div>
                            @endforeach

                        </div>
                        <div class="position-absolute w-100 h-50 bottom-0 py-3 d-flex align-items-end black-white-gradient">
                            <div class="text-white accommodation-element-container d-flex justify-content-between align-items-center w-100">
                                <div class="d-flex align-items-center pe-3">
                                    <hr class="accommodation-element-line">
                                    <div class="accommodation-element-text text-start">
                                        <p class="mb-1 text-uppercase">{{$data->subtitle}}</p>
                                        <h4 class="mb-1 fs-3 fw-bold">{{$data->title}}</h4>
                                        <p class="mb-0 small">{{$data->excerpt}}</p>
                                    </div>
                                </div>
                                <a href="{{route('villas.show',$data->slug)}}" class="btn btn-sm btn-outline-light text-uppercase py-2 px-3 rounded-0 me-4">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>