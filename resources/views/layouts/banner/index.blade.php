@section('title', 'Banner - beliayam.com')
@extends('layouts.admin.master')
@section('banner', 'active')
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
                    <h3>Detail Section Banner</h3>
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
                                Section Banner
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-responsive"
                           id="table1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sectionBanner as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img class="img-fluid"
                                     src="{{ asset('storage/banner/' . $item->image . '?ver=' . strtotime($item->updated_at)) }}"
                                     data-bs-slide-to="0" width="300">
                            </td>
                            <td>
                                <a href="{{ route('banner.edit', $item->id) }}"
                                   class="badge bg-warning">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    @endsection
