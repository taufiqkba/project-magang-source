@extends('layouts.main')

@section('main-content')

    <div class="col">
        <h6 class="mb-0 text-uppercase">BA ONLINE</h6>
        <hr />
        <div class="my-1">
            <a href="{{ route('baonline.index') }}" class="btn btn-primary">Back</a>
            @can('admin')
                @if ($baonlines->status_id == 1)

                @elseif($baonlines->status_id == 3)
                    <a href="{{ route('status.approve-reject', $baonlines->id) }}" class="btn btn-success" type="submit">
                        <i class='bx bx-message-square-check mx-1'></i>
                    </a>
                @else
                    <a href="{{ route('status.approve', $baonlines->id) }}" class="btn btn-success" type="submit">
                        <i class='bx bx-message-square-check mx-1'></i>
                    </a>
                    <a href="{{ route('status.reject', $baonlines->id) }}" class="btn btn-danger" type="submit">
                        <i class='bx bx-window-close mx-1'></i>
                    </a>
                @endif
            @endcan
        </div>

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-danger" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#dangerhome" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-news font-18 me-1'></i>
                                </div>
                                <div class="tab-title">BA DIGITAL</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#dangerprofile" role="tab"
                            aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-photo-album font-18 me-1'></i>
                                </div>
                                <div class="tab-title">EVIDENT</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#dangercontact" role="tab"
                            aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-wifi-2 font-18 me-1'></i>
                                </div>
                                <div class="tab-title">CHECK SPECS</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content py-3">
                    <div class="tab-pane fade show active" id="dangerhome" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Data BA</div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>Mitra</td>
                                                    <th>{{ $baonlines->mitra->name }}</th>
                                                </tr>
                                                <tr>
                                                    <td>STO</td>
                                                    <th>{{ $baonlines->sto->name }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Teknisi Name</td>
                                                    <th>{{ $baonlines->user->name }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Customer WO</td>
                                                    <th>{{ $baonlines->cust_wo }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Customer INET</td>
                                                    <th>{{ $baonlines->cust_inet }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Customer Service</td>
                                                    <th>{{ $baonlines->cust_service }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Date Created</td>
                                                    <th>{{ $baonlines->created_at }}</th>
                                                </tr>

                                            </thead>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Customer Data</div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>Name</td>
                                                    <th>{{ $baonlines->cust_name }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <th>{{ $baonlines->cust_email }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <th>{{ $baonlines->cust_phone }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <th>{{ $baonlines->cust_address }}</th>
                                                </tr>

                                            </thead>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Location</div>
                                    <div class="card-body">
                                        <div id="marker-map" class="gmaps"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dangerprofile" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">Front ODP Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_depan_odp) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">Inside ODP Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_dalam_odp) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">Label DC Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_label_dc) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">Redaman Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_redaman) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">ONT Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_ont) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">STB Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_stb) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">Teknisi with Customer Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_teknisi_pelanggan) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header">Customer House Image</div>
                                    <div class="card-body">
                                        <img class="img-fluid" style="width: 700px; height: 400px;"
                                            src="{{ asset('storage/' . $baonlines->image_rumah_pelanggan) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dangercontact" role="tabpanel">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Services</td>
                                                <th>{{ $baonlines->cust_service }}</th>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <th><button class="btn btn-success ">SPEK</button></th>
                                            </tr>
                                            <tr>
                                                <td>Usage Desc</td>
                                                <th>Fiber Tech, Rx Power: -19.56 dBm, OLT -Rx Power: -23.323</th>
                                            </tr>
                                            <tr>
                                                <td>Register Voice</td>
                                                <th><button class="btn btn-success ">REGISTERED</button></ </tr>
                                            <tr>
                                                <td>Last Update</td>
                                                <th>{{ $baonlines->created_at }}</th>
                                            </tr>

                                        </thead>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
