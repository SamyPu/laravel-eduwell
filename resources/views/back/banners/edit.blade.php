@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Banner Edit</h3>
        </div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul class='mb-0'>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='row match-height'>
            <div class='col-12'>
                <div class='card'>
                    <div class='card-content'>
                        <div class='card-body'>
                            <form class='form' action='{{ route('banner.update', $banner->id) }}' method='post'>
                                @csrf
                                <div class='row'>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-titre-column'>titre</label>
											<input type='text' id='first-titre-column' class='form-control' name='titre' value='{{ $banner->titre }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-soustitre-column'>soustitre</label>
											<input type='text' id='first-soustitre-column' class='form-control' name='soustitre' value='{{ $banner->soustitre }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-button-column'>button</label>
											<input type='text' id='first-button-column' class='form-control' name='button' value='{{ $banner->button }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-image-column'>image</label>
											<input type='text' id='first-image-column' class='form-control' name='image' value='{{ $banner->image }}'>
										</div>
									</div>
                                    <div class='col-12 d-flex justify-content-end'> {{-- edit_blade_anchor --}}
                                       <button type='submit' class='btn btn-primary me-1 mb-1'>Submit</button>
                                        <button type='reset' class='btn btn-light-secondary me-1 mb-1'>Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
