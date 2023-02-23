@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('story.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('story.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-hanging-gardens-of-bali>
    <!-- Content -->
    <section class="header-image">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" class="w-100 vh-100" alt="{{ $setting->meta_title }}">
    </section>

    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <h1 class="underline fw-bold text-uppercase text-center">{{$setting->title}}</h1>
                    <div class="mt-4">
                        <img src="{{asset('images/story-1.jpg')}}" class="float-start me-4 mb-4" style="height: 300px;" alt="Story - Hanging Garden Of Bali">
                        {!! $setting->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>