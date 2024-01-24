@section('title', 'Content - beliayam.com')
@extends('layouts.admin.master')
@section('contentView', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Content</h3>
                    <p class="text-subtitle text-muted">
                        Tambah Data Content
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Content</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tambah Content
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
                                <form action="{{route('content.store')}}" class="form" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect" name="type" required>
                                                        <option value="">Select Type</option>
                                                        <option value="value">Value</option>
                                                        <option value="support">Support</option>
                                                        <option value="howto">How To</option>
                                                        <option value="customer">Customer</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            @error('value')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title"
                                                    name="title" value="{{old('title')}}">
                                            </div>
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" placeholder="Description" name="description"
                                                    value="{{old('description')}}">
                                            </div>
                                            @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-3">
                                                <label>Image</label>
                                                <input class="form-control form-control" type="file" name="imageFile"
                                                    accept="image/jpeg,image/jpg,image/png,">
                                            </div>
                                            @error('imageFile')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan Data</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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