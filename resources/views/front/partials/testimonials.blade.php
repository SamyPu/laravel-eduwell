<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titres[2]->nom }}</h6>
                    <h4>{!! $titres[2]->description !!}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                    @foreach ($testimonials as $testimonial)
                    @if ($testimonial->status == 1)
                        <div class="item">
                            <p>“{{ $testimonial->quote }}”</p>
                            <h4>{{ $testimonial->nom }}</h4>
                            <span>{{ $testimonial->poste }}</span>
                            <img src="{{ asset('images/quote.png') }}" alt="">
                        </div> 
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>