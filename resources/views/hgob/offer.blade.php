@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('offers.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('offers.index') }}" />
@endsection

@push('css')
<style type="text/css">
    .experience-slider img {
        height: 30vh;
        object-fit: cover;
    }

</style>

<style type="text/css">
    .btn-view {
        margin-top: -30px;
        position: absolute;
        left: 45%;
        width: 30px;
    }

</style>
@endpush

@push('js')
<script type="text/javascript">
    $('.experience-slider').slick({
		// dots: true,
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

    <section class="pt-2 pb-5">
        <div class="container">
            <div class="row">

                @foreach ($offer_list as $data)
                <div class="col-md-3 my-3">
                    <div class="card w-100 card-{{$data->id}}" style="height: auto;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <section class="experience-slider">
                                    <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{$setting->title.' - '.$data->title}}" class="w-100">
                                </section>
                            </div>
                            <div class="card-body col-md-12">
                                <h2 class="mb-2 text-uppercase fw-bold" style="font-size:1.15rem">{{$data->title}}</h2>

                                <div class="fs-6 mb-4 content-{{$data->id}}">{{ Str::limit($data->excerpt, 80) }}</div>
                                <div class="fs-6 mb-4 content-detail-{{$data->id}}" style="display: none;">
                                    {!! $data->description !!}
                                </div>

                                <a role="button" id="vd-offers-{{$data->id}}">
                                    <hr>
                                    <center><button class="btn btn-sm btn-gold rounded-circle btn-view"><i class="fas fa-angle-down"></i></button></center>
                                </a>
                                <a role="button" id="vl-offers-{{$data->id}}" style="display: none;">
                                    <hr>
                                    <center><button class="btn btn-sm btn-gold rounded-circle btn-view"><i class="fas fa-angle-up"></i></button></center>
                                </a>

                                <p class="text-center">
                                    @if ($data->min_night == !null)
                                    <a href="https://book-directonline.com/properties/hanginggardensofbalidirect?locale=en&propertyId=9897&checkInDate={{date('Y-m-d')}}&checkOutDate={{date('Y-m-d',strtotime('+'.$data->min_night.' days'))}}&currency=USD&trackPage=yes" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0 mt-3" target="_blank">{{$data->button_text}}</a>
                                    @elseif ($data->button_text == "Learn More")
                                    <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Special Offer - {{ $data->title }}*" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0 mt-3" target="_blank">{{$data->button_text}}</a>
                                    @else
                                    <a href="{{$data->button_link}}" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0 mt-3" target="_blank">{{$data->button_text}}</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @push('js')
                <script type="text/javascript">
                    document.querySelector('#vd-offers-{{$data->id}}').addEventListener('click', function(){
                        document.querySelector('.card-{{$data->id}}').style.height='auto';
                        document.querySelector('.content-detail-{{$data->id}}').style.display='block';
                        document.querySelector('.content-{{$data->id}}').style.display='none';
                        this.style.display = "none";
                        document.querySelector('#vl-offers-{{$data->id}}').style.display="block";
                    });
                    document.querySelector('#vl-offers-{{$data->id}}').addEventListener('click', function(){
                        document.querySelector('.card-{{$data->id}}').style.height='auto';
                        document.querySelector('.content-detail-{{$data->id}}').style.display='none';
                        document.querySelector('.content-{{$data->id}}').style.display='block';
                        this.style.display = "none";
                        document.querySelector('#vd-offers-{{$data->id}}').style.display="block";
                    });
                </script>
                @endpush
                @endforeach

            </div>
        </div>
    </section>

</x-hanging-gardens-of-bali>