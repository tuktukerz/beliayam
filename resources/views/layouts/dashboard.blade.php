@section('title', 'Dashboard - Beli ayam.com')
@extends('layouts.admin.master')
@section('dashboard', 'active')
@section('content')

    <div id="main-content">
        <div class="page-content">

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Dashboard</h3>
                            <p class="text-subtitle text-muted">
                                Data Dashboard pada bulan ini
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Dashboard
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6 text-center">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Unique Visitor</h6>
                                                <h6 class="font-extrabold mb-0">{{ $visitor->unique_visitors }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6 text-center">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Visit</h6>
                                                <h6 class="font-extrabold mb-0">{{ $visitor->total_visit }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="col-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Top 3 Visited Page</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <!-- Table with outer spacing -->
                                                <div class="table-responsive">
                                                    <table class="table table-lg">
                                                        <thead>
                                                            <tr>
                                                                <th>Page</th>
                                                                <th>Total Visit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($topPage as $top)
                                                                <tr>
                                                                    <td class="text-bold-500">
                                                                        {{ $top->page == '/' ? 'home' : $top->page }}</td>
                                                                    <td>{{ $top->total_visited }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        @endsection
