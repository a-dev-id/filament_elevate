@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('honeymoon.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('honeymoon.index') }}" />
@endsection

@push('css')

@endpush

@push('js')
<script type="text/javascript">
    $('.experience-slider').slick({
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
                <div class="col-12 col-md-10 offset-md-1 text-center">
                    <h1 class="underline fw-bold text-uppercase">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    @foreach ($honeymoon_list as $data)
    @if($loop->iteration % 2 == 0) <section class="py-90"> @else <section class="py-90 bg-light-gray"> @endif
            <div class="container">
                <div class="row">
                    @if($loop->iteration % 2 == 0) <div class="col-12 col-md-5 order-3"> @else <div class="col-12 col-md-5 order-1"> @endif
                            <div class="pt-0 pb-2 border-bottom border-secondary">
                                <h2 class="experience-title mt-0">{{$data->title}}</h2>
                            </div>
                            <div class="py-2 border-bottom border-secondary fs-6">
                                {!! $data->description !!}
                            </div>
                            <div class="py-3 border-bottom border-secondary">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                    </div>
                                    <div class="col-12 col-md-5 d-flex align-items-center">
                                        @if ($data->min_night == !null)
                                        <a href="https://book-directonline.com/properties/hanginggardensofbalidirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&currency=USD&trackPage=yes" class="btn btn-gold text-uppercase py-2 fw-bold rounded-0 w-100" target="_blank">{{$data->button_text}}</a>
                                        @elseif ($data->button_text == "Learn More")
                                        <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Special Offer - {{ $data->title }}*" class="btn btn-gold text-uppercase py-2 fw-bold rounded-0 w-100" target="_blank">{{$data->button_text}}</a>
                                        @else
                                        <a href="{{$data->button_link}}" class="btn btn-gold text-uppercase py-2 fw-bold rounded-0 w-100" target="_blank">{{$data->button_text}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-1 order-2 d-flex align-items-center justify-content-center">
                        </div>
                        @if($loop->iteration % 2 == 0) <div class="col-12 col-md-6 order-1"> @else <div class="col-12 col-md-6 order-3"> @endif
                                <div class="h-100 experience-slider">
                                    @foreach ($data->images as $subdata)
                                    <div class="ratio ratio-1x1">
                                        <img src="{{ asset('storage/' . $subdata->image) }}" class="w-100 object-fit-cover object-position-center" alt="{{ $setting->title . ' - ' . $subdata->title }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        @endforeach

</x-hanging-gardens-of-bali>