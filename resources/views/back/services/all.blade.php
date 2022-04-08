@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Services</h1>
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
					<th scope='col'>Icone</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Description</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td scope='row'>{{ $service->id }}</td>
						<td><img src="{{ asset($service->icone) }}" style="width: 50px" alt=""></td>
						<td>{{ $service->nom }}</td>
						<td>{{ $service->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('service.edit', $service->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-1' href='{{ route('service.show', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
