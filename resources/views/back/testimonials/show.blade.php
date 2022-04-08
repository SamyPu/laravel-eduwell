@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Testimonial</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Poste</th>
					<th scope='col'>Quote</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>{{ $testimonial->id }}</td>
					<td>{{ $testimonial->nom }}</td>
					<td>{{ $testimonial->poste }}</td>
					<td>{{ $testimonial->quote }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('testimonial.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
