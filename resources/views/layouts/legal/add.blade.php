@section('title', 'Legal - beliayam.com')
@extends('layouts.admin.master')
@section('legal', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Legal</h3>
                    <p class="text-subtitle text-muted">
                        Tambah Data Legal
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('legal.index') }}">Legal</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tambah Legal
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
                        <div class="card-legal">
                            <div class="card-body">
                                <form action="{{ route('legal.store') }}" class="form" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect" name="type"
                                                            required>
                                                        <option value="" disabled>Select Type</option>
                                                        <option value="tos">Syarat & Ketentuan Pengguna</option>
                                                        <option value="privacy">Kebijakan Privasi</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            @error('type')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title" required
                                                       name="title" value="{{ old('title') }}">
                                            </div>
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" placeholder="Description"
                                                          name="description"
                                                          rows="5">{{ old('description') }}</textarea>
                                            </div>
                                            @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
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

    <script src="{{ asset('dist') }}/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{ asset('dist') }}/assets/js/pages/form-select.js"></script>

    @endsection
