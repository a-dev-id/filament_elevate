@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mgallery',[$setting->slug]) }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mgallery',[$setting->slug]) }}" />
@endsection

@section('contact_active', 'active')

<x-hanging-gardens-of-bali-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-1">
                        <a href="{{route('mindex')}}" class="link-dark"><i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="col-11 ps-1">
                        <h1>{{$setting->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid contact py-2">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('images/hanginggarden-logo.png')}}" alt="{{config('app.name')}} - Logo" class="img-logo my-3" style="width:70%">
                    <iframe src="https://maps.google.com/maps?q=Nandini+Bali+Jungle+Resort+and+Spa&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="my-3"></iframe>
                    <ul class="list-unstyled">
                        <li class="my-1"><i class="fa fa-map-marker me-1"></i> Desa Buahan, Payangan, Bali 80571, Indonesia</li>

                        <li class="my-1"><i class="fa fa-phone me-1"></i> <a href="https://wa.me/628113800988" class="link-dark">+6281 1380 0988</a></li>

                        <li class="my-1"><i class="fa fa-envelope me-1"></i> <a href="mailto:reservations@hanginggardensofbali.com" class="link-dark">reservations@hanginggardensofbali.com</li>
                    </ul>
                </div>
            </div>
        </div>
</x-hanging-gardens-of-bali-mobile>