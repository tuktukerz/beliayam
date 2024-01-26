@section('title', 'SEO - beliayam.com')
@extends('layouts.admin.master')
@section('seo', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Semua SEO</h3>
                    <p class="text-subtitle text-muted">
                        Berikut adalah semua list SEO.
                    </p>
                    <a href="{{ route('seo.create') }}" class="btn icon icon-left btn-primary mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                            </path>
                        </svg>
                        Tambah SEO
                    </a>
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
                                <form action="{{ route('seo.destroy', $item->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <a href="{{ route('seo.edit', $item->id) }}"
                                       class="badge bg-warning">Edit</a>
                                    <button type="submit" class="badge bg-danger"
                                            onclick="return confirm('apakah anda mau menghapus data ini ?')">Delete
                                    </button>
                                </form>
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
