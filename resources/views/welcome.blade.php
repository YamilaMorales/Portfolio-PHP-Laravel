@extends('layouts.template')

@section('content')


<section id="portfolio" class="portfolio section-bg">

    <div class="container">

        <div class="section-title">
            <h2>Proyectos</h2>
            <p>Aquí encontrarás todos mis proyectos realizados.</p>
        </div>

      

        <div class="row portfolio-container " data-aos="fade-up" data-aos-delay="100" >

            @foreach ($proyectos as $proyecto)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app box " >
                <div class="portfolio-wrap" style="height: 450px;">
                    <h5 class="p-3 d-block  text-center"> {{$proyecto->nombre}}</h5>

                    <img src="{{ asset('storage').'/'.$proyecto->imagen }}" class="img-fluid img img-thumbnail" alt="">
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