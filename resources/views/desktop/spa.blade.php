@section('meta')
    <meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
    <title>{{ $setting->meta_title }}</title>
    <meta property="og:url" content="{{ route('spa.index') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta property="og:description" content="{{ $setting->meta_description }}">
    <meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="twitter:description" content="{{ $setting->meta_description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <link rel="canonical" href="{{ route('spa.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-desktop>
    <section class="vh-100">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <div class="container mt-5">
        <h1 class="underline fw-bold text-uppercase text-center mb-5">{{ $setting->title }} <br> <span style="font-size: 1.5rem">{{ $setting->subtitle }}</span></h1>
        <div class="row">
            <div class="col-12 col-md-4 border-end border-secondary d-flex flex-column justify-content-between">
                <div class="mb-3">
                    <h4 class="text-uppercase mb-0" style="font-size: 12px;">Operating Hours</h4>
                    <p class="fs-5 mb-0">9 am to 5 pm</p>
                </div>
                <div class="mb-3">
                    <h4 class="text-uppercase mb-0" style="font-size: 12px;">Booking</h4>
                    <p class="fs-5 mb-0">in advanced recommended</p>
                </div>
                <div class="mb-3">
                    <h4 class="text-uppercase mb-0" style="font-size: 12px;">Contact</h4>
                    <p class="fs-5 mb-0">
                        <a href="mailto:spa@nandinibali.com" class="link-dark text-decoration-none d-block mb-0">spa@nandinibali.com</a>
                        <a href="tel:+62361982777" class="link-dark text-decoration-none d-block mb-0">+62-361 982 777</a>
                    </p>
                </div>
                <div class="mt-1">
                    <a href="/storage/app/media/spa-menu.pdf" download="spa-menu" class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0"><i class="fa fa-download me-2"></i> View Menu</a>
                    <a href="https://wa.me/6281236871170" class="btn btn-primary text-uppercase py-2 fw-bold rounded-0 small"> Reserve Now</a>
                </div>
            </div>
            <div class="col-12 col-md-8 ps-5">
                <div class="lh-lg">{!! $setting->description !!}</div>
            </div>
        </div>
    </div>

    <section class="pt-5">
        <div class="container-fluid px-0">
            <div class="row g-0 mb-4">
                <div class="col-12 text-center">
                    <p class="fst-italic mb-3">Best spa only for you</p>
                    <h2 class="fw-bold text-uppercase mb-2">Book Our Spa</h2>
                    <h5>Open daily from 09:00 until 17:00</h5>
                </div>
            </div>
            <div class="row g-0">

                @foreach ($setting->images as $data)
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $setting->title . ' - ' . $data->title }}" class="w-100 img-hover">
                    </div>
                @endforeach

            </div>
    </section>
</x-desktop>
