@section('title', 'Detail Merchants - Tracking Apps Warjali')
@extends('layouts.admin.master')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Merchants</h3>
                    <p class="text-subtitle text-muted">
                        Berikut adalah detail merchants.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Merchants</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Detail Merchants
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                      	<div class="col-md-6 col-12">
                                              <div class="form-group">
                                                  <label for="disabledInput">Unit Bisnis</label>
                                                  <p class="form-control-static">
                                                      @if($merchents->bissunes_unit == 1)
                                                          Warjali
                                                      @elseif($merchents->bissunes_unit == 2)
                                                          Nasional
                                                      @else
                                                          Unit Bisnis Belum Di set
                                                      @endif
                                                  </p>
                                              </div>
                                          </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Jenis Usaha</label>
                                                <p class="form-control-static" id="staticInput">
                                                    {{ $merchents->bissunesType->name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Nama Usaha</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->bissunesName }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Nama Pemilik Usaha</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->bissunesOwnerName }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Nomer Handpone</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->no_hp }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Alamat Usaha</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->bissunesAddress }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Langitude</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->langitude }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Logitude</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->longitude }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Lama Berjualan</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->sellingLong }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Omzet</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->revenue }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Menu Andalan</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->mainstayMenu }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Kebutuhan Pokok</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->basicNeeds }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Area</label>
                                                <p class="form-control-static">
                                                    {{ $merchents->area->kode_area }}
                                                    -
                                                    {{ $merchents->area->nama_area }}
                                                </p>
                                            </div>
                                        </div>
                                      	<div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Link Gambar Menu Makanan</label> <br>
                                                <a href="{{ $merchents->foodLink }}" target="_blank"
                                                    class="form-control-static">
                                                    Link Menu Makanan
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">QR Code</label><br>
                                                <img class="w-100 active"
                                                    src="{{ asset('images/qr/' . $merchents->qr) }}"
                                                    data-bs-slide-to="0" width="300" height="300">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Foto Usaha</label>
                                                @if ($merchents->bissunesPhoto == null)
                                                <p class="form-control-static">
                                                    Tidak Ada Foto
                                                </p>
                                                @else
                                                <div>
                                                    <img class="w-100 active"
                                                        src="{{ asset('images/merchents/' . $merchents->bissunesPhoto) }}"
                                                        data-bs-slide-to="0" width="300" height="300">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Riwayat Visitor</h3>
            <p class="text-subtitle text-muted">
                Berikut adalah riwayat Visitor
            </p>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Visitor</th>
                                <th>PIC Visitor</th>
                                <th>Jarak</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merchents->historyMerchents as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ number_format($item->distance,2) }} M</td>
                                <td>{{ $item->note }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </section>
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Riwayat Transaksi</h3>
            <p class="text-subtitle text-muted">
                Berikut adalah riwayat transaksi
            </p>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table2">
                        <thead>
                            <tr>
                                <th>Tgl. transaksi</th>
                                <th>No. transaksi</th>
                                <th>Tgl. jatuh tempo</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($merchentTransaction == null)
                            <tr>
                                <td colspan="5" class="text-center">
                                    Ada Transaksi
                                </td>
                            </tr>
                            @else
                            @foreach (optional($merchentTransaction)->transaction_data->transaction_list as $item)
                            <tr>
                                <td>{{ $item->transaction_date }}</td>
                                <td>
                                    <p class="text-primary lh-sm m-0 fw-semibold">{{ $item->transaction_no }}</p>
                                    <p class="fs-8 lh-sm m-0 fw-light">{{ $item->transaction_description }}</p>
                                </td>
                                <td>{{ $item->transaction_due_date }}</td>
                                @if ($item->transaction_status == 'Paid')
                                <td>
                                    <span class="badge bg-success">Paid</span>
                                </td>
                                @else
                                <td>
                                    <span class="badge bg-secondary">Closed</span>
                                </td>
                                @endif
                                <td>{{ $item->total }}</td>
                            </tr>
                            @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </section>
    </div>
    @endsection