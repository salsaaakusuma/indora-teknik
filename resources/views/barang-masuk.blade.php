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
  <li class="menu-item active">
    <a href="/barang-masuk" class="menu-link ">
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
      <form action="" class="d-flex">
        <input type="text" id="searchInput" class="form-control" placeholder="Cari" autocomplete="off" />
        <button class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm" type="button" id="searchButton">Search</button>
        <a href="/barang-masuk" type="button" class="d-none d-sm-inline-block btn rounded-pill btn-outline-dark shadow-sm">Refresh</a>
      </form>
    </div>

    @if (session('success'))
      <div id="alert" class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    @if (session('error'))
      <div id="alert" class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif
    
    <div class="col-lg-12 md-6 mb-4 order-0">
      <div class="card">

        <div class="row">  
          <div class="col mb-0">
            <h5 class="card-header">Daftar Barang Masuk</h5>
          </div>
          <div class="col card-header text-right">
            <span style="float: right">
              <a href="/tambah-barang-masuk/create" class="d-none d-sm-inline-block btn rounded-pill btn-primary shadow-sm">Tambah Barang Masuk</a>
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
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($dtBarmas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tgl_barmas->format('d M Y') }}</td>
                <td>{{ $item->resi_barmas }}</td>
                <td>{{ $item->barsto->nama_barang }}</td>
                <td><span class="badge bg-label-info me-1">{{ $item->jmlh_barmas }}</span></td>
                <td>
                  <div>
                    <div class="btn-group">
                      <button type="button" class="btn rounded-pill btn-secondary dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                        Aksi
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#modalHapusBarangMSK{{ $item->id }}">Hapus</a>
                          <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#modalDetailBarangMSK"
                            data-tgl_barmas="{{ $item->tgl_barmas->format('l, d M Y') }}"
                            data-resi_barmas="{{ $item->resi_barmas }}"
                            data-jmlh_barmas="{{ $item->jmlh_barmas }}"
                            data-id_barsto="{{ $item->barsto->nama_barang }}"
                            data-foto_barmas="{{ $item->foto_barmas }}"
                          >Detail</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  @include('modal.barang-masuk.hapus-barang-masuk')
                </td>
                @include('modal.barang-masuk.detail-barang-masuk')
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="col card-footer text-left">
            {{ $dtBarmas->withQueryString()->links() }}
          </div>
        </div>
      </div>
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