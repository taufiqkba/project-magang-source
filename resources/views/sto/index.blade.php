@extends('layouts.main')

@section('main-content')
    <h6 class="mb-0 text-uppercase">Data STO (Sentra Telepon Otomat)</h6>
    <hr />
    <div class="row">
        <div class="col">
            <a href="{{ route('sto.create') }}" class="btn btn-primary my-2"><i class='bx bx-add-to-queue'></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if (session()->has('message'))
                <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-white">{{ session('message') }}</h6>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('message-delete'))
                <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-white">{{ session('message-delete') }}</h6>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stos as $sto)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sto->name }}</td>
                                <td>{{ $sto->area }}</td>
                                <td>
                                    <form action="{{ route('sto.destroy', $sto) }}" class="d-inline-block m-1 btn-delete"
                                        method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('are you sure?')">
                                            <i class="bx bx-trash mx-1"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
