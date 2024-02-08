@section('title', 'SEO - beliayam.com')
@extends('layouts.admin.master')
@section('seo', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit SEO</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('seo.index') }}">SEO</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit SEO
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
                                <form action="{{ route('seo.update', $seo->id) }}" class="form" method="post"
                                      enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="col">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Page</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect" name="page"
                                                            required>
                                                        <option value="" disabled>Select Type</option>
                                                        <option value="home" @selected($seo->page == 'home')>Home
                                                        </option>
                                                        <option value="about" @selected($seo->page ==
                                                            'about')>About
                                                        </option>
                                                        <option value="product" @selected($seo->page ==
                                                            'product')>Product
                                                        </option>
                                                        <option value="tos" @selected($seo->page ==
                                                            'tos')>Terms Of Service
                                                        </option>
                                                        <option value="privacy" @selected($seo->page ==
                                                            'privacy')>Privacy
                                                        </option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            @error('page')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title"
                                                       name="title" value="{{ $seo->title }}">
                                            </div>
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" class="form-control" placeholder="Title"
                                                       name="keywords" value="{{ $seo->keywords }}">
                                            </div>
                                            @error('keywords')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" placeholder="Description"
                                                          name="description"
                                                          rows="5">{{ $seo->description }}</textarea>
                                            </div>
                                            @error('description')
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
