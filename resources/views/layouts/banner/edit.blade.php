@section('title', 'Edit Banner - beliayam.com')
@extends('layouts.admin.master')
@section('mrchnt', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Site Identity</h3>
                    <p class="text-subtitle text-muted">
                        Edit Site Identity
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('banner.index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Site Identity
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('banner.update', $banner->id )}}"
                                      method="POST" enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-3">
                                                <label>Image</label>
                                                <br>
                                                <img class="img-fluid"
                                                     src="{{ asset('storage/banner/' . $banner->image . '?ver=' . strtotime($banner->updated_at)) }}"
                                                     data-bs-slide-to="0" width="300">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Image</label>
                                                <small>Mohon untuk mengunggah gambar dibawah 5 MB</small>
                                                <input class="form-control form-control" type="file"
                                                       name="image" accept="image/jpeg,image/jpg,image/png,">
                                            </div>
                                            @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12 d-flex justify-content-start mt-3">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan
                                                Data
                                            </button>
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
    @endsection
