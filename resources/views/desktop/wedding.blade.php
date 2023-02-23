@section('meta')
    <meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
    <title>{{ $setting->meta_title }}</title>
    <meta property="og:url" content="{{ route('weddings.index') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta property="og:description" content="{{ $setting->meta_description }}">
    <meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="twitter:description" content="{{ $setting->meta_description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <link rel="canonical" href="{{ route('weddings.index') }}" />
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush

@push('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.slider').slick({
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

<x-desktop>
    <section class="vh-100">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section>
        @foreach ($wedding_list as $key => $data)
            @if ($key % 2 == 0)
                <div class="py-5 bg-light-gray">
                @else
                    <div class="py-5">
            @endif
            <div class="container">
                <div class="row">
                    @if ($key % 2 == 0)
                        <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-1">
                        @else
                            <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-3">
                    @endif

                    <div class="pb-4 border-bottom border-dark">
                        <h2 class="fs-1 mb-3">{{ $data->title }}</h2>
                        <h5 class="fs-6 text-primary"></h5>
                    </div>
                    <div class="py-3 h-100">
                        {!! $data->description !!}
                    </div>
                    <div class="pt-4 border-top border-dark">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                @if ($data->price == null)
                                @else
                                    <p class="mb-2">From</p>
                                    <h3 class="fs-2 mb-2">{{ $data->price }}</h3>
                                    <p class="mb-0">{{ $data->per }}</p>
                                @endif
                            </div>
                            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                                <form id="enquiryForm-6" method="post" action="https://nandinibali.com/enquiry" class="w-100">
                                    <input type="hidden" name="package_name" value="{{ $data->title }}">
                                    <input type="hidden" name="package_excerpt" value="{{ $data->excerpt }}">
                                    <input type="hidden" name="package_image" value="{{ asset('storage/' . $data->banner_image) }}">
                                    <button type="submit" class="btn btn-primary text-uppercase w-100 py-2 fw-bold rounded-0 small">{{ $data->button_text }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1 order-2 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <p class="small fw-bold text-secondary text-uppercase vertical-text">Share <i class="fa fa-long-arrow-down mt-2"></i></p>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u={{ route('experiences.index') }}" target="_blank" class="rounded-circle border-secondary text-secondary link-share link-share-facebook m-1"><i class="fa fa-facebook"></i></a>
                        {{-- <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//twitter.com/intent/tweet?text={{$data->title}} - Experience at Nandini Jungle by Hanging gardens ({{ Str::limit($data->excerpt,50) }}...Read more on our website!): {{route('experiences.index')}}" target="_blank" class="rounded-circle border-secondary text-secondary link-share link-share-twitter m-1"><i class="fa fa-twitter"></i></a> --}}
                    </div>
                </div>

                @if ($key % 2 == 0)
                    <div class="col-12 col-md-6 order-3">
                    @else
                        <div class="col-12 col-md-6 order-1">
                @endif

                <div class="h-100 slider">

                    @foreach ($data->images as $subdata)
                        @if ($subdata->is_active == '1')
                            <div class="ratio ratio-4x3">
                                <img src="{{ asset('storage/' . $subdata->image) }}" alt="{{ $setting->meta_title . ' - ' . $subdata->title }}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        @else
                        @endif
                    @endforeach

                </div>
            </div>
            </div>
            </div>
            </div>
        @endforeach
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center fst-italic">
                    <p class="mb-2">Make your dream wedding come true.</p>
                    <p class="mb-2">Celebrate the magic of love in the heart of mystical Ubud jungle</p>
                    <p>Let the magic, be magical!</p>
                </div>
            </div>
        </div>
    </section>
</x-desktop>
