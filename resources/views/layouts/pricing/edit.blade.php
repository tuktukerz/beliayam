@section('title', 'Edit Pricing - Jual Ayam.com')
@extends('layouts.admin.master')
@section('pricing', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Pricing</h3>
                    <p class="text-subtitle text-muted">
                        Edit Pricing
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Pricing
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
                                <form class="form" action="{{ route('pricing.update', $pricing->id )}}"
                                      method="POST" enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Province</label>
                                                <input type="text" class="form-control" name="province"
                                                       placeholder="Province" value="{{ $pricing->province }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price"
                                                       placeholder="Price" value="{{ $pricing->price }}">
                                            </div>
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
