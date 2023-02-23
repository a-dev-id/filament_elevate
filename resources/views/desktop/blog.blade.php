@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('blog.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('blog.index') }}" />
@endsection

@push('css')
<style>
    .page-link {
        color: #000000;
    }

</style>
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
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @foreach ($blog_list as $data)
                    <div class="row border-bottom py-3">
                        <div class="col-12 col-lg-3 col-md-4">
                            <div class="ratio ratio-4x3">
                                <img src="{{ asset('storage/' . $data->cover_image) }}" alt="{{ $setting->title . ' - ' . $data->title }}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 ps-md-3 d-flex flex-column justify-content-between">
                            <div>
                                <h1 class="fs-4 fw-bold">
                                    <a href="{{ route('blog.show', [$data->slug]) }}" class="link-dark text-decoration-none">{{ $data->title }}</a>
                                </h1>
                                {{-- <h6 class="text-muted mb-3">Posted on Jan 11, 2023</h6> --}}
                                {{ Str::limit($data->excerpt, 150) }}
                            </div>
                            <div class="text-end">
                                <a href="{{ route('blog.show', [$data->slug]) }}" class="link-dark text-decoration-none">Read more <i class="fa fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="col-12 mt-3">
                    {{ $blog_list->links() }}
                </div>
            </div>
        </div>
    </section>

</x-desktop>