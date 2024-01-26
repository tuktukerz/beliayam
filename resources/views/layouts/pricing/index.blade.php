@section('title', 'Detail Site Identity - beliayam.com')
@extends('layouts.admin.master')
@section('pricing', 'active')
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
                    <h3>Semua Pricing</h3>
                    <p class="text-subtitle text-muted">
                        Berikut adalah semua list pricing.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('pricing.index') }}">Pricing</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                List Pricing
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
                            <th>Province</th>
                            <th>Price</th>
                            <th>Island</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pricings as $item)
                        @php
                        $formattedNumber = number_format($item->price);

                        // Add the Rupiah symbol
                        $formattedNumber = 'Rp ' . $formattedNumber;
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->province }}</td>
                            <td>
                                {{ $formattedNumber }}
                            </td>
                            <td>
                                {{ $item->island }}
                            </td>
                            <td>
                                <a href="{{ route('pricing.edit', $item->id) }}"
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
