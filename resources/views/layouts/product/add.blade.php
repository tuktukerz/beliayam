@section('title', 'Product - beliayam.com')
@extends('layouts.admin.master')
@section('product', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Product</h3>
                    <p class="text-subtitle text-muted">
                        Tambah Data Product
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('product.index') }}">Product</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tambah Product
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{route('product.store')}}" class="form" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Product Name"
                                                   name="name" value="{{old('name')}}" required>
                                        </div>
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control" placeholder="Product Price"
                                                   name="price" value="{{old('price')}}" required>
                                        </div>
                                        @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Satuan</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect" name="piece" required>
                                                        <option value="" disabled>Pilih Satuan</option>
                                                        <option value="pcs">Pcs</option>
                                                        <option value="pax">Pax</option>
                                                        <option value="kg">Kg</option>
                                                        <option value="ekor">Ekor</option>
                                                        <option value="box">Box</option>
                                                        <option value="ton">Ton</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            @error('piece')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Tampilkan Harga</label>
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="basicSelect" name="is_show" required>
                                                            <option value="" disabled>Pilih On / Off</option>
                                                            <option value="true">On
                                                            </option>
                                                            <option value="false">Off
                                                            </option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                @error('is_show')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-3">
                                                <label>Image</label>
                                                <small>Mohon untuk mengunggah gambar dibawah 5 MB</small>
                                                <input class="form-control form-control" type="file" name="productImage"
                                                       accept="image/jpeg,image/jpg,image/png,">
                                            </div>
                                            @error('productImage')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan Data</button>
                                            <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('dist') }}/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{ asset('dist') }}/assets/js/pages/form-select.js"></script>

    @endsection
