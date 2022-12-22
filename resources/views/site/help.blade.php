@extends('layouts.appPortal')

@section('content')

<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s">مركز المساعدة</h1>
                                <div class="screen-img">
                                    <img src="{{ asset('public/web-assets/img/gallery/screen.png' ) }}" alt="" class=" w-50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="faq-section section-padding40">
        <div class="container">

            <div class="row justify-content-center">
                @foreach($allCat as $data)
                <div class="col-lg-10">
                    <div class="section-tittle">
                        <h2> {{ $data->name_ar}}</h2>
                    </div>
                    <div class="collapse-wrapper">
                        <div class="accordion" id="accordion_{{ $data->id}}">
                            <!-- single-one -->

                            @foreach($data->child as $child)
                            <div class="card">
                                <div class="card-header" id="heading_">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed" 
                                        data-toggle="collapse" data-target="#collapse_"
                                         aria-expanded="false" aria-controls="collapse_"> 
                                         {{ $child->name_ar }}</a>
                                    </h2>
                                </div>
                              
                            </div>
                            @endforeach


                        </div>


                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection