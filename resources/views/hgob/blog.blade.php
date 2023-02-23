@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('blog.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('blog.index') }}" />
@endsection

@push('css')
<style>
    .active>.page-link,
    .page-link.active {
        z-index: 3;
        background-color: #e4c568;
        border-color: #e4c568;
    }

    .page-link {
        color: #000;
    }

    .page-link:hover {
        color: #000
    }

</style>
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
                <div class="col-12 text-center">
                    <h1 class="underline fw-bold text-uppercase">Blog</h1>
                    Learn more about the hidden gems in Bali, attractions to visit and our other insider tips to guide your getaway in Bali.
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
                            <div class="ratio ratio-1x1">
                                <img src="{{asset('storage/'.$data->cover_image)}}" class="w-100 object-fit-cover object-position-center" alt="{{$setting.' - '.$data->title}}">
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 ps-md-3 d-flex flex-column justify-content-between">
                            <div>
                                <h1 class="fs-4 fw-bold">
                                    <a href="{{route('blog.show',[$data->slug])}}" class="link-dark text-decoration-none">{{$data->title}}</a>
                                </h1>
                                <h6 class="text-muted">Posted on {{date('M d, Y', strtotime($data->updated_at))}}</h6>
                                {{ Str::limit($data->excerpt, 250) }}
                            </div>
                            <div class="text-end">
                                <a href="{{route('blog.show',[$data->slug])}}" class="link-dark text-decoration-none">Read more <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="col-12 mt-3">
                                {{ $blog_list->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>