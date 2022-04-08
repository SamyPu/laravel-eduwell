@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Service</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Icone</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Description</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>{{ $service->id }}</td>
					<td><img src="{{ asset($service->icone) }}" style="width: 50px" alt=""></td>
					<td>{{ $service->nom }}</td>
					<td>{{ $service->description }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('service.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
