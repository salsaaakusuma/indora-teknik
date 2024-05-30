@extends('index')

@section('sidebar')
  @include('layout.sidebar')
  <!-- Dashboard -->
  <li class="menu-item">
    <a href="/" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="/profil-owner" class="menu-link">
      <i class="menu-icon tf-icons bx bx-user" ></i>
      <div data-i18n="Analytics">Profile Owner</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Info</span>
  </li>
  <li class="menu-item">
    <a href="/informasi-toko" class="menu-link">
      <i class="menu-icon tf-icons bx bx-store"></i>
      <div data-i18n="Analytics">Informasi Toko</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="/barang-stok" class="menu-link">
      <i class="menu-icon tf-icons bx bx-basket"></i>
      <div data-i18n="Analytics">Barang dan Stok</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Penjualan</span>
  </li>
  <li class="menu-item">
    <a href="/barang-masuk" class="menu-link">
      <i class="menu-icon tf-icons bx bx-log-in"></i>
      <div data-i18n="Analytics">Barang Masuk</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="/barang-keluar" class="menu-link">
      <i class="menu-icon tf-icons bx bx-log-out"></i>
      <div data-i18n="Analytics">Barang Keluar</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="/barang-retur" class="menu-link">
      <i class="menu-icon tf-icons bx bx-repost"></i>
      <div data-i18n="Analytics">Barang Retur</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Report</span>
  </li>
  <li class="menu-item active">
    <a href="/laporan" class="menu-link">
      <i class="menu-icon tf-icons bx bxs-report"></i>
      <div data-i18n="Analytics">Laporan Bulanan</div>
    </a>
  </li>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">

    <div class="col-lg-3 mb-4 order-0">
      <h6>Cari Data Barang </h6>
          <form action="" class="d-flex" method="GET">
            <input type="month" id="cari_laporan" name="cari_laporan" class="form-control datepicker" placeholder="Cari" autocomplete="off"/>
            <button class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm" type="submit">Search</button>
          </form>
    </div>

    <div class="col-lg-4 mb-4 ">
      <h6>Cetak Laporan Bulanan</h6>
          <form action="" class="d-flex" method="GET">
            <input type="month" id="bln_cetak" name="bln_cetak" class="form-control" placeholder="Cari" autocomplete="off"/>
            <a href="/cetak-laporan" onclick="this.href='/cetak-laporan/'+ document.getElementById('bln_cetak').value" target="_blank" class="btn rounded-pill btn-dark shadow-sm">Cetak</a>
            <a href="/laporan" type="button" class="btn rounded-pill btn-outline-dark shadow-sm">Refresh</a>
          </form>
    </div>

    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <h5 class="card-header">Daftar Barang</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Resi</th>
                <th>Seller</th>
                <th>Item</th>
                <th>Qyt</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Omset</th>
                <th>Base Price</th>
                <th>Marketplace Fee</th>
                <th>Packing</th>
                <th>Profit</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($dtLaporan as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tgl_barke->format('d-m-Y') }}</td>
                <td>{{ $item->resi }}</td>
                <td>{{ $item->seller }}</td>
                <td>{{$item->barsto->nama_barang}}</td>
                <td><span class="badge bg-label-secondary me-1"> {{ $item->jmlh_barke }} </span></td>
                <td><span class="badge bg-label-success me-1">{{ formatRupiah($item->harga_keluar) }}</span></td>
                <td><span class="badge bg-label-info me-1">{{ formatRupiah($item->barsto->harga_beli) }} </span></td>
                <td><span class="badge bg-label-warning me-1">{{ formatRupiah($item->omset) }} </span></td>
                <td>{{ formatRupiah($item->base_prize) }}</td>
                <td>{{ formatRupiah($item->marketplace_fee) }}</td>
                <td>Rp {{ $item->packing }}</td>
                <td><span class="badge bg-label-danger me-1">{{ formatRupiah($item->profit) }} </span></td>
                <td><span class="badge bg-label-primary me-1">{{ $item->status }} </span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
          <div class="col card-footer text-left">
            {{ $dtLaporan->withQueryString()->links() }}
        </div>
      </div>
    </div>

  </div>
@include('modal.logout')
</div>
@endsection


