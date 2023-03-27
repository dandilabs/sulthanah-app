@extends('layouts.home')
@section('title', 'Contact')
@section('content')
<div class="section-header">
    <h1>Contact Information</h1>
</div>
@if(Session::has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

<div class="section-body">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $result => $hasil)
                <tr>
                    <td>{{ $result + $data->firstitem() }}</td>
                    <td>{{ $hasil->email }}</td>
                    <td>{{ $hasil->subject }}</td>
                    <td>{{ $hasil->notelp }}</td>
                    <td>{{ $hasil->message }}</td>
                    <td>
                        <form action="{{ route('contact.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('contact.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-pen"></i> Edit
                            </a>
                            <button href="" class="btn btn-sm btn-danger" onclick="myFunction('Yakin akan menghapus data?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
