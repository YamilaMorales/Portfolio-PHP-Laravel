@extends('layouts.template')

@section('content')


<section id="portfolio" class="portfolio section-bg">

    <div class="container">

        <div class="section-title">
            <h2>Proyectos</h2>
            <p>Aquí encontrarás todos mis proyectos realizados.</p>
        </div>

        <div class="row" data-aos="fade-up">

            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container " data-aos="fade-up" data-aos-delay="100">

            @foreach ($proyectos as $proyecto)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app box " style="height:400PX;">
                <div class="portfolio-wrap ">
                    <h5 class="p-3 d-block  text-center"> {{$proyecto->nombre}}</h5>

                    <img src="{{ asset('storage').'/'.$proyecto->imagen }}" class=" img-fluid" height="600px;" width="" alt="">
                    <p class="p-3 d-block ">{{$proyecto->descripcion}}</p>
                    <div class="portfolio-links">
                        
                     <a  target="_blank" href="{{ $proyecto->url }}" data-gallery="portfolioGallery" class="" title="Ver repositorio"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>


    </div>
</section><!-- End Portfolio Section -->


@endsection