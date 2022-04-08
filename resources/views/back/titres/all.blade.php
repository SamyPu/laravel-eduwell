@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Titres</h1>
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
					<th scope='col'>Nom</th>
					<th scope='col'>Description</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($titres as $titre)
                    <tr>
                        <td scope='row'>{{ $titre->id }}</td>
						<td>{{ $titre->nom }}</td>
						<td>{{ $titre->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
								<a class='btn btn-primary mx-1' href='{{ route('titre.edit', $titre->id) }}' role='button'>Edit</a>
                            </div> {{-- all_button_anchor --}} 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
