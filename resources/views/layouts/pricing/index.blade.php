@section('title', 'Detail Site Identity - Jual Ayam.com')
@extends('layouts.admin.master')
@section('pricing', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Site Identity</h3>
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
                                Site Identity
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
                                                <label for="disabledInput">Sumatera</label>
                                                <p class="form-control-static" id="staticInput">
                                                    {{ $pricing->p_sumatera }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Jabodetabek</label>
                                                <p class="form-control-static">
                                                    {{ $pricing->p_jabodetabek }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Jawa Tengah</label>
                                                <p class="form-control-static">
                                                    {{ $pricing->p_jateng }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Jatim</label>
                                                <p class="form-control-static">
                                                    {{ $pricing->p_jatim }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Sulawesi</label>
                                                <p class="form-control-static">
                                                    {{ $pricing->p_sulawesi }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Kalimantan</label>
                                                <p class="form-control-static">
                                                    {{ $pricing->p_kalimantan }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Papua</label>
                                                <p class="form-control-static">
                                                    {{ $pricing->p_papua }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('pricing.edit', $pricing->id) }}"
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
