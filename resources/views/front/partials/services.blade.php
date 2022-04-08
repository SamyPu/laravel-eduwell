<section class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titres[0]->nom }}</h6>
                    <h4>{!! $titres[0]->description !!}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    @foreach ($services as $service)
                        <div class="item">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{ asset($service->icone) }}" alt="">
                                </div>
                                <h4>{{ $service->nom }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>