@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Testimonials</h1>
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
					<th scope='col'>Poste</th>
					<th scope='col'>Quote</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td scope='row'>{{ $testimonial->id }}</td>
						<td>{{ $testimonial->nom }}</td>
						<td>{{ $testimonial->poste }}</td>
						<td>{{ $testimonial->quote }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $testimonial)
                                    <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                                        @csrf
                                        @method('delete')
                                        <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                    </form>      
                                @endcan
                                @can('update', $testimonial)
                                    <a class='btn btn-primary mx-1' href='{{ route('testimonial.edit', $testimonial->id) }}' role='button'>Edit</a>     
                                @endcan
                                <a class='btn btn-primary mx-1' href='{{ route('testimonial.show', $testimonial->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
