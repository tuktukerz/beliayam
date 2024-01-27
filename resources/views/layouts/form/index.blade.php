@section('title', 'Detail Site Identity - beliayam.com')
@extends('layouts.admin.master')
@section('formOrder', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Link Form Order</h3>
                    <p class="text-subtitle text-muted">
                        Berikut adalah link form order.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('form.index') }}">Form Order Link</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Order Link
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="disabledInput">Google Form Embed HTML</label>
                            <div>
                                <a href="{{ $form?->link }}" target="_blank">
                                    {{ $form?->link }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('form.edit', $form->id) }}" class="btn btn-primary me-1 mb-1">Ubah
                        Data</a>
                </div>
            </div>
        </section>
    </div>
    @endsection
