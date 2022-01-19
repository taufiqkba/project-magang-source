@extends('layouts.main')

@section('main-content')

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg8">
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="/assets/images/avatars/avatar-1.png" alt="Admin"
                                    class="rounded-circle p-1 bg-danger" width="110">
                                <div class="">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-dark">{{ $user->email }}</p>
                                    <p class="text-dark">{{ $user->user_id }}</p>
                                    <span class="text-light badge bg-danger font-14">
                                        {{ auth()->user()->is_admin == 1 ? 'Admin' : 'User' }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-secondary text-light"><b>Change Profile</b></div>
                        <div class="card-body">
                            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ old('name', $user->name) }}" />
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="email" id="email" class="form-control"
                                            value="{{ old('email', $user->email) }}" />
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">User ID</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control"
                                            value="{{ old('user_id', $user->user_id) }}" disabled />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Registered Account</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control"
                                            value="{{ old('created_at', $user->created_at->translatedFormat('l, jS F Y')) }}"
                                            disabled />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-danger px-4">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    {{-- <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="/assets/images/avatars/avatar-1.png" alt="Admin"
                                    class="rounded-circle p-1 bg-danger" width="110">
                                <div class="">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-dark">{{ $user->email }}</p>
                                    <p class="text-dark">{{ $user->user_id }}</p>
                                    <span class="text-light badge bg-danger font-14">
                                        {{ auth()->user()->is_admin == 1 ? 'Admin' : 'User' }}</span>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-secondary text-light"><b>Change Password</b></div>
                        <div class="card-body">
                            <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Old Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" name="current_password" id="current_password"
                                            class="form-control" />
                                        @error('current_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">New Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" name="password" id="passowrd" class="form-control" />
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Confirm New Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control" />
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-danger px-4">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
