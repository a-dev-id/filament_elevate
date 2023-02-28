@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('weddings.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Elevate Bali by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('weddings.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript">
    $('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		arrows: false,
		cssEase: 'linear',
		draggable: false,
		pauseOnDotsHover: false,
		pauseOnHover: false,
		pauseOnFocus: false
	});
</script>
@endpush

<x-elevate-bali>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{asset('storage/'.$setting->banner_image)}}" alt="{{$setting->title}}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>
    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section>

        @foreach ($wedding_list as $data)
        <div class="py-5 bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-1">
                        <div class="pb-4 border-bottom border-dark">
                            <h2 class="fs-1 mb-3">{{$data->title}}</h2>
                        </div>
                        <div class="py-3 h-100">
                            {{$data->excerpt}}
                        </div>
                        <div class="pt-4 border-top border-dark">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <button class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0 me-2" data-bs-toggle="modal" data-bs-target="#{{$data->slug}}">View Details</button>
                                </div>
                                <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn btn-primary text-uppercase w-100 py-2 fw-bold rounded-0 small">Inquire Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-1 order-2 d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column align-items-center">
                            <p class="small fw-bold text-secondary text-uppercase vertical-text">Share <i class="fa fa-long-arrow-down mt-2"></i></p>
                            <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u={{route('weddings.index')}}" target="_blank" class="rounded-circle border-secondary text-secondary link-share link-share-facebook m-1"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order-3">
                        <div class="h-100 slider">
                            <div class="ratio ratio-4x3">
                                <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{$data->title}}" class="w-100 object-fit-cover object-position-center h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="{{$data->slug}}" tabindex="-1" aria-labelledby="{{$data->slug}}-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-uppercase" id="{{$data->slug}}-label">{{$data->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {!! $data->description !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-primary text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary text-uppercase py-2 fw-bold rounded-0 small">Inquire Now</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </section>
</x-elevate-bali>