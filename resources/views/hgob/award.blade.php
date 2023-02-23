@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('awards.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('awards.index') }}" />
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
                    <h1 class="underline fw-bold text-uppercase">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">

                @foreach ($award_list as $data)
                <div class="col-12 py-4 border-bottom">
                    <h3 class="text-uppercase">{{$data->title}}</h3>
                    <h5 class="text-gold">{{$data->subtitle}}</h5>
                    <div class="d-inline-flex">
                        <img src="{{asset('storage/'.$data->cover_image)}}" class="me-4" style="width: 150px; object-position: center; object-fit: contain;" alt="{{$setting->title.' - '.$data->title}}">
                        <div class="text-start">
                            {{ $data->excerpt }}
                        </div>
                    </div>
                    <button type="button" class="btn btn-link float-end link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#{{'award-'.$data->id}}">Read more <i class="fas fa-long-arrow-alt-right ms-2"></i></button>
                </div>
                <div class="modal fade" id="{{'award-'.$data->id}}" tabindex="-1" aria-labelledby="{{'award-'.$data->id}}-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold text-uppercase" id="{{'award-'.$data->id}}-label">Award</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{asset('storage/'.$data->cover_image)}}" class="mb-3" style="width: 150px; object-position: center; object-fit: contain;" alt="{{$data->title}}">
                                <h3 class="text-uppercase">{{$data->title}}</h3>
                                <h5 class="text-gold mb-3">{{$data->subtitle}}</h5>
                                {!! $data->description !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 mt-3">
                    {{ $award_list->links() }}
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>