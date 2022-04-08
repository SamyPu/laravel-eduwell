@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Service Create</h3>
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
                            <form class='form' action='{{ route('service.store') }}' method='post'>
                                @csrf
                                <div class='row'>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-icone-column'>Icone</label>
                                            <select name="icone" id="first-icone-column" class='form-control'>
                                                <option value="">Choissisez une icone</option>
                                                <option value="images/service-icon-01.png">images/service-icon-01.png</option>
                                                <option value="images/service-icon-02.png">images/service-icon-02.png</option>
                                                <option value="images/service-icon-03.png">images/service-icon-03.png</option>
                                                <option value="images/service-icon-04.png">images/service-icon-04.png</option>
                                            </select>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-nom-column'>Nom</label>
											<input type='text' id='first-nom-column' class='form-control' name='nom'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-description-column'>Description</label>
											<input type='text' id='first-description-column' class='form-control' name='description'>
										</div>
									</div>
                                    <div class='col-12 d-flex justify-content-end'> {{-- create_blade_anchor --}}
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
