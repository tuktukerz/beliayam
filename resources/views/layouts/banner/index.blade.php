@section('title', 'Banner - Jual Ayam.com')
@extends('layouts.admin.master')
@section('banner', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Section Banner</h3>
                    <p class="text-subtitle text-muted">
                        Berikut adalah detail dari site jual ayam.com
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Section Banner
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
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Banner 1</label>
                                                <div>
                                                    <img class="w-90 active"
                                                         src="{{ asset('storage/banner/' . $sectionBanner->banner1) }}"
                                                         data-bs-slide-to="0" width="300" height="300">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Banner 2</label>
                                                <div>
                                                    <img class="w-90 active"
                                                         src="{{ asset('storage/banner/' . $sectionBanner->banner2) }}"
                                                         data-bs-slide-to="0" width="300" height="300">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Banner 3</label>
                                                <div>
                                                    <img class="w-90 active"
                                                         src="{{ asset('storage/banner/' . $sectionBanner->banner3) }}"
                                                         data-bs-slide-to="0" width="300" height="300">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('banner.edit', $sectionBanner->id) }}"
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
