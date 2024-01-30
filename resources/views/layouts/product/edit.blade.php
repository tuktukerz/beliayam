@section('title', 'Edit - beliayam.com')
@extends('layouts.admin.master')
@section('product', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Product</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('product.index') }}">Product</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Product
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
                                <form action="{{ route('product.update', $product->id) }}" class="form" method="post"
                                      enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control" placeholder="Title"
                                                   name="name" value="{{ $product->name }}">
                                        </div>
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" placeholder="Description"
                                                   name="price"
                                                   value="{{ $product->price}}">
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
                                                        <option value="">Pilih Satuan</option>
                                                        <option value="pcs" @selected($product->piece ==
                                                            'pcs')>Pcs
                                                        </option>
                                                        <option value="pax" @selected($product->piece ==
                                                            'pax')>Pax
                                                        </option>
                                                        <option value="kg" @selected($product->piece ==
                                                            'kg')>Kg
                                                        </option>
                                                        <option value="ekor" @selected($product->piece == 'ekor')>Ekor
                                                        </option>
                                                        <option value="box" @selected($product->piece == 'box')>Box
                                                        </option>
                                                        <option value="ton" @selected($product->piece == 'ton')>Ton
                                                        </option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            @error('value')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <img
                                            src="{{ asset('storage/product/' . $product->image . '?ver=' . strtotime($product->updated_at)) }}" height="300">
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
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Ubah Data</button>
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
