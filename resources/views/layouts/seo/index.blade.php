@section('title', 'SEO - beliayam.com')
@extends('layouts.admin.master')
@section('seo', 'active')
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
                    <h3>Semua SEO</h3>
                    <p class="text-subtitle text-muted">
                        Berikut adalah semua list SEO Page
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('seo.index') }}">SEO</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                List SEO
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Page</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($seo as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->page }}</td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                {{ $item->keywords }}
                            </td>
                            <td>
                                {{ $item->description }}
                            </td>
                            <td>
                                <a href="{{ route('seo.edit', $item->id) }}"
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
