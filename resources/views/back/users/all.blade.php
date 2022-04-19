@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>users</h1>
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
                    
                    <th scope='col'>name</th>
                    <th scope='col'>email</th>
                    <th scope='col'>password</th>
                    <th scope='col'>role_id</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope='row'>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->role->role }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('user.destroy', $user->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('user.edit', $user->id) }}' user='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('user.read', $user->id) }}' user='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
