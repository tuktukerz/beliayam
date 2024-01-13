@section('title', 'Detail Site Identity - Jual Ayam.com')
@extends('layouts.admin.master')
@section('pricing', 'active')
@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Semua Pricing</h3>
                        <p class="text-subtitle text-muted">
                            Berikut adalah semua list pricing.
                        </p>
                        {{-- <a href="{{ route('pricing.create') }}" class="btn icon icon-left btn-primary mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-edit">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                </path>
                            </svg> Tambah Pricing
                        </a> --}}
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
                                            <form action="{{ route('pricing.destroy', $item->id) }}" method="post">
                                                @csrf @method('DELETE')
                                                <a href="{{ route('pricing.edit', $item->id) }}"
                                                    class="badge bg-warning">Edit</a>
                                                <button type="submit" class="badge bg-danger"
                                                    onclick="return confirm('apakah anda mau menghapus data ini ?')">Delete</button>
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
