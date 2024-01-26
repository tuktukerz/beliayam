@section('title', 'Edit Site Identity - beliayam.com')
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
                                    <a href="/">Home</a>
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
                    <div class="col">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" action="{{ route('site-identity.update', $siteIdentity->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Your Site Title"
                                                            value="{{ $siteIdentity->title }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input type="text" class="form-control" name="description"
                                                            placeholder="Your site description."
                                                            value="{{ $siteIdentity->description }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control" name="address"
                                                            placeholder="123 Main Street, City, Country"
                                                            value="{{ $siteIdentity->address }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            placeholder="+1234567890" value="{{ $siteIdentity->phone }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email"
                                                            placeholder="info@example.com"
                                                            value="{{ $siteIdentity->email }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Google Play Link</label>
                                                        <input type="text" class="form-control" name="google_play"
                                                            placeholder="Google Play Link"
                                                            value="{{ $siteIdentity->google_play }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>App Store Link</label>
                                                        <input type="text" class="form-control" name="app_store"
                                                            placeholder="App Store Link"
                                                            value="{{ $siteIdentity->app_store }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Instagram Link</label>
                                                        <input type="text" class="form-control" name="instagram"
                                                            placeholder="Your Instagram Link"
                                                            value="{{ $siteIdentity->instagram }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Twitter Link</label>
                                                        <input type="text" class="form-control" name="twitter"
                                                            placeholder="Your Twitter LInk"
                                                            value="{{ $siteIdentity->twitter }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Google Map Link</label>
                                                        <input type="text" class="form-control" name="google_map"
                                                            placeholder="https://maps.google.com"
                                                            value="{{ $siteIdentity->google_map }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <label>Youtube Link</label>
                                                        <input type="text" class="form-control" name="youtube"
                                                            placeholder="Your Youtube Channel Link"
                                                            value="{{ $siteIdentity->youtube }}">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label>Logo (Light)</label>
                                                        <input class="form-control" type="file" name="logoLight">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label>Logo (Black)</label>
                                                        <input class="form-control" type="file" name="logoBlack">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label>Advertisement</label>
                                                        <input class="form-control" type="file" name="adFile">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-start mt-3">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save
                                                        Data</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
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
