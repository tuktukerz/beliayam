@section('title', 'Detail Site Identity - beliayam.com')
@extends('layouts.admin.master')
@section('mrchnt', 'active')
@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Detail Site Identity</h3>
                        <p class="text-subtitle text-muted">
                            Berikut adalah detail dari site beliayam.com
                        </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Site Identity
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
                                    <form class="form">
                                        <div class="row">
                                            <div class="col">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Title</label>
                                                        <p class="form-control-static" id="staticInput">
                                                            {{ $siteIdentity->title }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Description</label>
                                                        <p class="form-control-static" id="staticInput">
                                                            {{ $siteIdentity->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Address</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->address }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Phone</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->phone }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Email</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->email }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Footer Desc</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->footer_desc }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Google Play Link</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->google_play }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">App Store Link</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->app_store }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Instagram Link</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->instagram }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Twitter Link</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->twitter }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Google Map Link</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->google_map }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="disabledInput">Youtube Link</label>
                                                        <p class="form-control-static">
                                                            {{ $siteIdentity->youtube }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="disabledInput">Logo Light</label>
                                                    <div class="bg-secondary col-6 rounded">
                                                        <img class="w-90 active"
                                                            src="{{ asset('storage/logo/' . $siteIdentity->logo_light . '?ver=' . strtotime($siteIdentity->updated_at)) }}"
                                                            data-bs-slide-to="0" width="300" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="disabledInput">Logo Black</label>
                                                    <div>
                                                        <img class="w-90 active"
                                                            src="{{ asset('storage/logo/' . $siteIdentity->logo_black . '?ver=' . strtotime($siteIdentity->updated_at)) }}"
                                                            data-bs-slide-to="0" width="300" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="disabledInput">Advertisement</label>
                                                    <div>
                                                        <img class="w-90 active"
                                                            src="{{ asset('storage/ad/' . $siteIdentity->ad . '?ver=' . strtotime($siteIdentity->updated_at)) }}"
                                                            data-bs-slide-to="0" width="300" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('site-identity.edit', $siteIdentity->id) }}"
                                            class="btn btn-primary me-1 mb-1">Ubah Data</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
