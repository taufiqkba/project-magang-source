@extends('layouts.main')

@section('main-content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Form Teknisi</h6>
            <hr />
            <a href="{{ route('user.index') }}" class="btn btn-secondary mb-2"><b><i class="bx bx-arrow-back"></i></b></a>
            <div class="card border-top border-0 border-4 border-danger shadow">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">Teknisi Registration</h5>
                        </div>
                        <hr />
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @method("POST")
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name"
                                        autofocus>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Mitra</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="mitra_id" name="mitra_id" required>
                                        <option selected disabled>Select Mitra</option>
                                        @foreach ($mitras as $mitra)
                                            <option value="{{ $mitra->id }}">{{ $mitra->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('mitra_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">STO</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="sto_id" name="sto_id" required>
                                        <option selected disabled>Select STO</option>
                                        @foreach ($stos as $sto)
                                            <option value="{{ $sto->id }}">{{ $sto->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('sto_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="is_admin" name="is_admin" required>
                                        <option selected disabled>Select Role</option>
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    @error('is_admin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Confirm Password">
                                    @error('confirm_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-danger px-5">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
