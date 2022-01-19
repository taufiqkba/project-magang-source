@extends('layouts.main')

@section('main-content')
    @can('admin')
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Mitra</p>
                                <h4 class="my-1 text-danger">{{ $mitras->count() }}</h4>
                                {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                <i class='bx bxs-building'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total STO</p>
                                <h4 class="my-1 text-success">{{ $stos->count() }}</h4>
                                {{-- <p class="mb-0 font-13">-4.5% from last week</p> --}}
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                <i class='bx bxs-bar-chart-alt-2'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Users</p>
                                <h4 class="my-1 text-warning">{{ $users->count() }}</h4>

                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                                <i class='bx bxs-group'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital</p>
                                @can('admin')
                                    <h4 class="my-1">{{ $baonlines->count() }}</h4>
                                @endcan

                                @can('user')
                                    <h4 class="my-1">{{ $baonline->count() }}</h4>
                                @endcan

                            </div>
                            <div class="widgets-icons bg-light-info text-primary ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital Approved</p>
                                <h4 class="my-1">{{ $baapproves->count() }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital Need Approverd</p>
                                <h4 class="my-1">{{ $baneedapproves->count() }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital Reject</p>
                                <h4 class="my-1">{{ $barejects->count() }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <!--end row-->

    @can('user')
        {{-- Dashboard User --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital</p>
                                @can('admin')
                                    <h4 class="my-1">{{ $baonlines->count() }}</h4>
                                @endcan

                                @can('user')
                                    <h4 class="my-1">{{ $baonline->count() }}</h4>
                                @endcan

                            </div>
                            <div class="widgets-icons bg-light-info text-primary ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital Approved</p>
                                <h4 class="my-1">{{ $baapprove->count() }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital Need Approverd</p>
                                <h4 class="my-1">{{ $baneedapprove->count() }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total BA Digital Reject</p>
                                <h4 class="my-1">{{ $bareject->count() }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="bx bxs-news"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    {{-- End Dashboard user --}}
@endsection
