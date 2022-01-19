@extends('layouts.main')

@section('main-content')
    <h6 class="mb-0 text-uppercase">Data Mitra</h6>
    <hr />
    <div class="row">
        <div class="col">
            <a href="{{ route('mitra.create') }}" class="btn btn-primary my-2"><i class='bx bx-add-to-queue'></i></a>
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
                            <th>Address</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mitras as $mitra)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mitra->name }}</td>
                                <td>{{ $mitra->address }}</td>
                                <td>{{ $mitra->created_at->translatedFormat(' jS F Y') }}</td>
                                <td>
                                    {{-- <a href="" class="btn btn-sm btn-success"><i class='bx bx-info-circle mx-1'></i></a> --}}
                                    {{-- <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> --}}
                                    <form action="{{ route('mitra.destroy', $mitra) }}"
                                        class="d-inline-block m-1 btn-delete" method="POST">
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
