@extends('layouts.main')

@section('main-content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Form STO</h6>
            <hr />
            <a href="{{ route('sto.index') }}" class="btn btn-secondary mb-2"><b><i class="bx bx-arrow-back"></i></b></a>
            <div class="card border-top border-0 border-4 border-danger shadow">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-buildings me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">STO Registration</h5>
                        </div>
                        <hr />
                        <form action="{{ route('sto.store') }}" method="POST" enctype="multipart/form-data">
                            @method("POST")
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">STO Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="STO Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Scope Area</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="area" name="area" rows="3"></textarea>
                                    @error('address')
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
