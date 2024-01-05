@section('title', 'Tambah Merchants - Tracking Apps Warjali')
@extends('layouts.admin.master')
@section('mrchnt', 'active')
@section('mrchnt_add', 'active')
@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tambah Merchants</h3>
                        <p class="text-subtitle text-muted">
                            Tambah Data Merchants
                        </p>
                        {{-- iferrors --}}
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                <p>
                                    {{ session()->get('error') }}
                                </p>
                            </div>
                        @endif
                        {{-- <p class="btn btn-danger"> </p> --}}
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Merchants</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Tambah Merchants
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
                                    <form class="form" action="{{ route('merchents.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                          <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Unit Bisnis</label>
                                                    <fieldset class="form-group" required>
                                                        <select name="bissunes_unit" class="form-select" id="basicSelect">
                                                                <option value="1">Warjali</option>
                                              					<option value="2">Nasional</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Area</label>
                                                    <fieldset class="form-group" required>
                                                        <select name="area_id" class="form-select" id="basicSelect">
                                                            @foreach ($area as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama_area }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Jenis Usaha</label>
                                                    <fieldset class="form-group" required>
                                                        <select name="bissunes_type_id" class="form-select"
                                                            id="basicSelect">
                                                            @foreach ($bissunesType as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Nama Usaha</label>
                                                    <input type="text" class="form-control" placeholder="Nama Usaha"
                                                        name="bissunesName" value="{{ old('bissunesName') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Nama Pemilik Usaha</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Nama Pemilik Usaha" name="bissunesOwnerName"
                                                        value="{{ old('bissunesOwnerName') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Alamat Usaha</label>
                                                    <input type="text" class="form-control" name="bissunesAddress"
                                                        placeholder="Alamat Usaha" value="{{ old('bissunesAddress') }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Langitude</label>
                                                    <input type="text" class="form-control" name="langitude"
                                                        placeholder="Lang" value="{{ old('langitude') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input type="text" class="form-control" name="longitude"
                                                        placeholder="Longitude" value="{{ old('longitude') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Lama Berjualan</label>
                                                    <input type="text" class="form-control" name="sellingLong"
                                                        placeholder="Lama Berjualan" value="{{ old('sellingLong') }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Omzet</label>
                                                    <input type="text" id="email-id-column" class="form-control"
                                                        name="revenue" value="{{ old('revenue') }}" placeholder="Omzet">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Link Menu Makanan</label>
                                                    <input type="text" id="email-id-column" class="form-control"
                                                        name="foodLink" placeholder="Link Menu Makanan"
                                                        value="{{ old('foodLink') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>No HP</label>
                                                    <input type="number" id="email-id-column" class="form-control"
                                                        name="no_hp" placeholder="nomer handphone"
                                                        value="{{ old('no_hp') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Menu Andalan</label>
                                                    <textarea class="form-control" rows="3" name="mainstayMenu" required>{{ old('mainstayMenu') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Kebutuhan Pokok</label>
                                                    <textarea class="form-control" rows="3" name="basicNeeds" required>{{ old('basicNeeds') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>id Jurnal</label>
                                                    <input type="text" id="id-jurnal-id-column" class="form-control"
                                                        name="idJurnal" placeholder="masukan id jurnal"
                                                        value="{{ old('idJurnal') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-3">
                                                    <label>Foto Usaha</label>
                                                    <input class="form-control form-control" type="file"
                                                        name="file" accept="image/jpeg,image/jpg,image/png,">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan
                                                    Data</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
