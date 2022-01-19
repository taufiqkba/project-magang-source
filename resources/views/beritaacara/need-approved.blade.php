@extends('layouts.main')

@section('main-content')
    <h6 class="mb-0 text-uppercase">BA DIGITAL </h6>
    <hr />
    {{-- <div class="row">
        <div class="col">
            <a href="{{ route('baonline.create') }}" class="btn btn-primary my-2"><i class='bx bx-add-to-queue'></i></a>
        </div>
    </div> --}}
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
                @can('admin')
                    <table id="table" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>Teknisi</th>
                            <th>Mitra</th> --}}
                                <th>STO</th>
                                <th>No WO</th>
                                <th>No INET</th>
                                <th>Status</th>
                                <th>Service</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>Customer Email</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($baonlines as $bao)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $bao->user->name }}</td>
                                <td>{{ $bao->mitra->name }}</td> --}}
                                    <td>{{ $bao->sto->name }}</td>
                                    <td>{{ $bao->cust_wo }}</td>
                                    <td>{{ $bao->cust_inet }}</td>
                                    <td>
                                        @if ($bao->status_id == 1)
                                            <span class="badge bg-success">Approved</span>
                                        @elseif($bao->status_id == 2)
                                            <span class="badge bg-warning">Need Approve</span>
                                        @else
                                            <span class="badge bg-danger">Rejected</span>
                                        @endif
                                    </td>
                                    <td>{{ $bao->cust_service }}</td>
                                    <td>{{ $bao->cust_name }}</td>
                                    <td>{{ $bao->cust_phone }}</td>
                                    <td>{{ $bao->cust_email }}</td>
                                    <td>{{ $bao->created_at }}</td>
                                    <td>

                                        {{-- <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> --}}
                                        @if ($bao->status_id == 1)
                                            <a href="{{ route('baonline.show', $bao) }}" class="btn btn-sm btn-info"><i
                                                    class='bx bx-info-circle mx-1'></i></a>
                                        @elseif($bao->status_id == 3)
                                            <a href="{{ route('baonline.show', $bao) }}" class="btn btn-sm btn-info"><i
                                                    class='bx bx-info-circle mx-1'></i></a>
                                            <a href="{{ route('status.approve-reject', $bao->id) }}"
                                                class="btn btn-sm btn-success" type="submit">
                                                <i class='bx bx-message-square-check mx-1'></i>
                                            </a>
                                        @else
                                            <a href="{{ route('baonline.show', $bao) }}" class="btn btn-sm btn-info"><i
                                                    class='bx bx-info-circle mx-1'></i></a>
                                            @can('admin')
                                                <a href="{{ route('status.approve', $bao->id) }}" class="btn btn-sm btn-success"
                                                    type="submit">
                                                    <i class='bx bx-message-square-check mx-1'></i>
                                                </a>
                                                <a href="{{ route('status.reject', $bao->id) }}" class="btn btn-sm btn-danger"
                                                    type="submit">
                                                    <i class='bx bx-window-close mx-1'></i>
                                                </a>
                                            @endcan
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endcan

                @can('user')
                    <table id="table" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>Teknisi</th>
                        <th>Mitra</th> --}}
                                <th>STO</th>
                                <th>No WO</th>
                                <th>No INET</th>
                                <th>Status</th>
                                <th>Service</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>Customer Email</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($baneedapprove as $bao)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $bao->user->name }}</td>
                            <td>{{ $bao->mitra->name }}</td> --}}
                                    <td>{{ $bao->sto->name }}</td>
                                    <td>{{ $bao->cust_wo }}</td>
                                    <td>{{ $bao->cust_inet }}</td>
                                    <td>
                                        @if ($bao->status_id == 1)
                                            <span class="badge bg-success">Approved</span>
                                        @elseif($bao->status_id == 2)
                                            <span class="badge bg-warning">Need Approve</span>
                                        @else
                                            <span class="badge bg-danger">Rejected</span>
                                        @endif
                                    </td>
                                    <td>{{ $bao->cust_service }}</td>
                                    <td>{{ $bao->cust_name }}</td>
                                    <td>{{ $bao->cust_phone }}</td>
                                    <td>{{ $bao->cust_email }}</td>
                                    <td>{{ $bao->created_at }}</td>
                                    <td>

                                        {{-- <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> --}}
                                        @if ($bao->status_id == 1)
                                            <a href="{{ route('baonline.show', $bao) }}" class="btn btn-sm btn-info"><i
                                                    class='bx bx-info-circle mx-1'></i></a>
                                        @elseif($bao->status_id == 3)
                                            <a href="{{ route('baonline.show', $bao) }}" class="btn btn-sm btn-info"><i
                                                    class='bx bx-info-circle mx-1'></i></a>
                                            <a href="{{ route('status.approve-reject', $bao->id) }}"
                                                class="btn btn-sm btn-success" type="submit">
                                                <i class='bx bx-message-square-check mx-1'></i>
                                            </a>
                                        @else
                                            <a href="{{ route('baonline.show', $bao) }}" class="btn btn-sm btn-info"><i
                                                    class='bx bx-info-circle mx-1'></i></a>
                                            @can('admin')
                                                <a href="{{ route('status.approve', $bao->id) }}" class="btn btn-sm btn-success"
                                                    type="submit">
                                                    <i class='bx bx-message-square-check mx-1'></i>
                                                </a>
                                                <a href="{{ route('status.reject', $bao->id) }}" class="btn btn-sm btn-danger"
                                                    type="submit">
                                                    <i class='bx bx-window-close mx-1'></i>
                                                </a>
                                            @endcan
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endcan
            </div>
        </div>
    </div>

@endsection
