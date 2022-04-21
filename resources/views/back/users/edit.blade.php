@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>user Edit</h3>
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
                            <form class='form' action='{{ route('user.update', $user->id) }}' method='post'>
                                @csrf
                                @method('PUT')
                                <div class='row'>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-name-column'>name</label>
											<input type='text' id='first-name-column' class='form-control' name='name' value='{{ $user->name }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-email-column'>email</label>
											<input type='text' id='first-email-column' class='form-control' name='email' value='{{ $user->email }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-password-column'>password</label>
											<input type='text' id='first-password-column' class='form-control' name='password' value='{{ $user->password }}'>
										</div>
									</div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='first-role-column'>role_id</label>
                                            <select class='form-control' name='role_id'>
                                                @foreach ($roles as $role)
                                                    <option value='{{ $role->id }}' {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->role }}</option>
                                                @endforeach
                                            </select>
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
