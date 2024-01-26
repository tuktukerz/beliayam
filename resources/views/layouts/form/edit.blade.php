@section('title', 'Edit Form Order - beliayam.com')
@extends('layouts.admin.master')
@section('formOrder', 'active')
@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Form Order</h3>
                        <p class="text-subtitle text-muted">
                            Edit Form Order
                        </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit Form Order
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" action="{{ route('form.update', $formOrder->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label>Google Form Embed HTML</label>
                                                    <textarea type="text" class="form-control" name="link" placeholder="Google Form Link" rows="5" required>{{ $formOrder->link }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-start mt-3">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan
                                                    Data
                                                </button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset
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
