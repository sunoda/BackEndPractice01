@extends ('layouts/nav')

@section ('content')

<section class="features3 cid-rS2V3O4k3t" id="features3-4">
    <div class="container" style="padding:200px 0 100px">
        <div class="media-container-row">

            @foreach ($news_data as $item)
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src={{$item -> img}} alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                {{$item -> title}}
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                {{$item -> content}}
                            </p>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="https://mobirise.co" class="btn btn-primary display-4">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
