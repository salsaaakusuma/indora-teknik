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
  <li class="menu-item active">
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
  <li class="menu-item">
    <a href="/laporan" class="menu-link">
      <i class="menu-icon tf-icons bx bxs-report"></i>
      <div data-i18n="Analytics">Laporan Bulanan</div>
    </a>
  </li>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">

    <div class="col-lg-5 mb-4 ">
      <h6>Cari Berdasarkan Resi & Nama Barang</h6>
          <form action="" class="d-flex" method="GET">
            <input type="text" id="searchInput" class="form-control" placeholder="Cari" autocomplete="off"/>
            <button class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm" type="button" id="searchButton">Search</button>
            <a href="/barang-keluar" type="button" class="d-none d-sm-inline-block btn rounded-pill btn-outline-dark shadow-sm">Refresh</a>
          </form>
    </div>
    
    @if (session('succes'))
      <div id="alert" class="alert alert-success">
        {{session('succes')}}
      </div>
    @endif
    @if (session('error'))
      <div id="alert" class="alert alert-danger">
        {{session('error')}}
      </div>
    @endif
    
    <div class="col-lg-12 md-6 mb-4 order-0">
      <div class="card">

      <div class="row">  
        <div class="col mb-0">
          <h5 class="card-header">Daftar Barang Keluar</h5>
        </div>
        <div class="col card-header text-right">
          <span style="float: right">
          <a href="/tambah-barang-keluar/create" class="d-none d-sm-inline-block btn rounded-pill btn-primary shadow-sm"> Tambah Barang Keluar</a>
          </span>
        </div>
      </div>


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
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($dtBarke as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{($item->tgl_barke->format('d M Y')) }}</td>
                <td>{{ $item->resi }}</td>
                <td>{{ $item->seller }}</td>
                <td>{{ \Illuminate\Support\Str::limit($item->barsto->nama_barang, 17), '...' }}</td>
                <td><span class="badge bg-label-secondary me-1"> {{ $item->jmlh_barke }}</span></td>
                <td><span class="badge bg-label-success me-1">{{ formatRupiah($item->harga_keluar) }}</span></td>
                <td><span class="badge bg-label-info me-1">{{ formatRupiah($item->barsto->harga_beli) }} </span></td>
                <td><span class="badge bg-label-danger me-1">{{ $item->status }}</span></td>
                <td><div>
                  <div class="btn-group">
                    <button type="button" class="btn rounded-pill btn-secondary dropdown-toggle hide-arrow" data-bs-toggle="dropdown"aria-expanded="false">
                      Aksi
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#modalHapusBarangKLR{{ $item->id }}">Hapus</a>
                        <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#modalDetailBarangKLR"
                                    data-tgl_barke="{{($item->tgl_barke->format('l, d M Y')) }}"
                                    data-resi="{{ $item->resi }}"
                                    data-seller="{{ $item->seller }}"
                                    data-id_barsto="{{ $item->barsto->nama_barang }}"
                                    data-jmlh_barke="{{ $item->jmlh_barke }}"
                                    data-harga_keluar="{{ formatRupiah($item->harga_keluar) }}"
                                    data-harga_beli="{{ formatRupiah($item->barsto->harga_beli) }}"
                                    data-omset="{{ formatRupiah($item->omset) }}"
                                    data-base_prize="{{ formatRupiah($item->base_prize) }}"
                                    data-marketplace_fee="{{ formatRupiah($item->marketplace_fee) }}"
                                    data-packing="{{ $item->packing }}"
                                    data-profit="{{ formatRupiah($item->profit) }}"
                        >Detail</a>
                      </li>
                    </ul>
                  </div>
                </div>
                @include('modal.barang-keluar.hapus-barang-keluar')
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="col card-footer text-left">
            {{ $dtBarke->withQueryString()->links() }}
        </div>
        </div>
      </div>
      @include('modal.barang-keluar.detail-barang-keluar')
      </div>

  </div>
@include('modal.logout')
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const rows = document.querySelectorAll('.table tbody tr');

    searchButton.addEventListener('click', function() {
      const keyword = searchInput.value.trim().toLowerCase();

      rows.forEach(function(row) {
        const no = row.querySelector('td:nth-child(1)').textContent.trim().toLowerCase();
        const resi = row.querySelector('td:nth-child(3)').textContent.trim().toLowerCase();
        const namaBarang = row.querySelector('td:nth-child(4)').textContent.trim().toLowerCase();
        const jumlahBarang = row.querySelector('td:nth-child(5)').textContent.trim().toLowerCase();

        if (no.includes(keyword) || resi.includes(keyword) || namaBarang.includes(keyword) || jumlahBarang.includes(keyword)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  });
</script>
@endpush
