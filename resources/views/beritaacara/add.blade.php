@extends('layouts.main')

@section('main-content')
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h6 class="mb-0 text-uppercase">New BA Digital</h6>
            <hr />
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-news me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">BA Digital</h5>
                    </div>
                    <hr>
                    <form class="row g-3" action="{{ route('baonline.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method("POST")
                        <div class="col-md-6">
                            <label for="cust_wo" class="form-label">Customer WO</label>
                            <input type="number" class="form-control" id="cust_wo" name="cust_wo" required autofocus>
                            @error('cust_wo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="cust_inet" class="form-label">Customer INET</label>
                            <input type="number" class="form-control" id="cust_inet" name="cust_inet" required>
                            @error('cust_inet')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="cust_name" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="cust_name" name="cust_name" required>
                            @error('cust_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="cust_email" class="form-label">Customer Email</label>
                            <input type="email" class="form-control" id="cust_email" name="cust_email" required>
                            @error('cust_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="cust_phone" class="form-label">Customer Phone</label>
                            <input type="number" class="form-control" id="cust_phone" name="cust_phone" required>
                            @error('cust_phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="cust_service" class="form-label">Customer Service</label>
                            <select id="cust_service" class="form-select" name="cust_service" required>
                                <option selected disabled>Choose Service</option>
                                <option value="2P [Inet + Voice]">2P [Inet + Voice]</option>
                                <option value="2P [Inet + Voice]">2P [Inet + TV]</option>
                                <option value="3P [Inet + Voice]">3P [Inet + Voice + TV]</option>
                            </select>
                            @error('cust_service')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="cust_address" class="form-label">Address</label>
                            <textarea class="form-control" id="cust_address" name="cust_address" placeholder="Address..."
                                rows="3" required></textarea>
                            @error('cust_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-photo-album me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Evident</h5>
                        </div>
                        <hr>
                        <span class="text-danger mb-0">*Accepted format picture: JPG,JPEG,PNG. Max: 5MB</span>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_depan_odp" class="form-label">Front ODP Image</label>
                                <input class="form-control" type="file" id="image_depan_odp" name="image_depan_odp"
                                    required>
                                @error('image_depan_odp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_dalam_odp" class="form-label">Inside ODP Image</label>
                                <input class="form-control" type="file" id="image_dalam_odp" name="image_dalam_odp"
                                    required>
                                @error('image_dalam_odp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_label_dc" class="form-label">Label Precon/DC Image</label>
                                <input class="form-control" type="file" id="image_label_dc" name="image_label_dc"
                                    required>
                                @error('image_label_dc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_redaman" class="form-label">Redaman Image</label>
                                <input class="form-control" type="file" id="image_redaman" name="image_redaman" required>
                                @error('image_redaman')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_ont" class="form-label">ONT Image</label>
                                <input class="form-control" type="file" id="image_ont" name="image_ont" required>
                                @error('image_ont')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_stb" class="form-label">STB Image</label>
                                <input class="form-control" type="file" id="image_stb" name="image_stb" required>
                                @error('image_stb')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_teknisi_pelanggan" class="form-label">Teknisi with Customer
                                    Image</label>
                                <input class="form-control" type="file" id="image_teknisi_pelanggan"
                                    name="image_teknisi_pelanggan" required>
                                @error('image_teknisi_pelanggan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image_rumah_pelanggan" class="form-label">Customer House Image</label>
                                <input class="form-control" type="file" id="image_rumah_pelanggan"
                                    name="image_rumah_pelanggan" required>
                                @error('image_rumah_pelanggan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
