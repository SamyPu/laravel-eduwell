@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banners</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>titre</th>
					<th scope='col'>soustitre</th>
					<th scope='col'>button</th>
					<th scope='col'>image</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td scope='row'>{{ $banner->id }}</td>
						<td>{{ $banner->titre }}</td>
						<td>{{ $banner->soustitre }}</td>
						<td>{{ $banner->button }}</td>
						<td>{{ $banner->image }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
								<a class='btn btn-primary mx-1' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                            </div> {{-- all_button_anchor --}} 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
