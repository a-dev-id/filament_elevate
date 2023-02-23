@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('contact.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('contact.index') }}" />
@endsection

@push('css')
<style type="text/css">
    .btn-whatsapp {
        color: #fff;
        background-color: #075E54;
        border-color: #075E54;
    }

    .btn-whatsapp:hover {
        background-color: #25D366;
        border-color: #25D366;
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
                <div class="col-12 text-center mb-5">
                    <h1 class="underline fw-bold text-uppercase">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-4">
                    <i class="fas fa-phone-alt" style="font-size: 60px;"></i>
                    <p class="fs-5 mt-4">+62 361 982 700</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-map-marker-alt" style="font-size: 60px;"></i>
                    <p class="fs-5 mt-4">Desa Buahan, Payangan, Bali 80571, Indonesia</p>
                </div>
                <div class="col-12 col-md-4">
                    <a href="mailto:reservations@hanginggardensofbali.com" class="link-dark text-decoration-none"><i class="fas fa-envelope" style="font-size: 60px;"></i></a>
                    <p class="fs-5 mt-4"><a href="mailto:reservations@hanginggardensofbali.com" class="link-dark text-decoration-none">reservations@hanginggardensofbali.com</a></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <a href="http://wa.me/628113800988" target="_blank" class="btn btn-whatsapp border-0 rounded-0 d-inline-flex p-0">
                        <span class="px-3 d-flex align-items-center">Chat with Us</span>
                        <div class="px-3 py-2 text-white" style="background-color: #128C7E;"><i class="fab fa-whatsapp"></i></div>
                    </a>
                </div>
                <div class="col-12 mt-4">
                    <!-- <div class="mb-3">
    					<h3 class="fw-bold">General Enquiries</h3>
    					<a href="mailto:info@hanginggardensofbali.com" class="fs-5 text-decoration-none link-dark">info@hanginggardensofbali.com</a>
    				</div> -->
                    <div class="mt-1">
                        <h3 class="fw-bold">Press & Media Partnership</h3>
                        <a href="mailto:fenty@hanginggardensinternational.com" class="fs-5 text-decoration-none link-dark">fenty@hanginggardensinternational.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <iframe src="https://maps.google.com/maps?q=Hanging+Gardens+Of+Bali&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>