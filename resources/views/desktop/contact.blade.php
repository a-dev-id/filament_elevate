@section('meta')
    <meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
    <title>{{ $setting->meta_title }}</title>
    <meta property="og:url" content="{{ route('contact-us.index') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta property="og:description" content="{{ $setting->meta_description }}">
    <meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="twitter:description" content="{{ $setting->meta_description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <link rel="canonical" href="{{ route('contact-us.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-desktop>
    <section class="vh-100">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">Get in Touch</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-phone"></i>
                    <p class="fs-5 mt-4">+62 812-3687-1170</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-map-marker"></i>
                    <p class="fs-5 mt-4">Br, Jl. Susut, Buahan, Payangan, Kabupaten Gianyar, Bali</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fs-1 fa fa-envelope"></i>
                    <p class="fs-5 mt-4">info@nandinibali.com</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <iframe src="https://maps.google.com/maps?q=Nandini+Bali+Jungle+Resort+and+Spa&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
</x-desktop>
