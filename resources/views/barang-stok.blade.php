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
  <li class="menu-item active">
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

    @can('create', App\Models\Barsto::class)
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <a href="/tambah-barang-stok/create" class="d-none d-sm-inline-block btn rounded-pill btn-primary shadow-sm"> Tambah Barang</a>
    </div>
    @endcan
    
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
          <h5 class="card-header">Daftar Barang Indora</h5>
        </div>
        <div class="col card-header text-right">
          <span style="float: right">
            <form action="" class="d-flex" method="GET">
              <input class="form-control me-2" type="search" name="cari_barsto" placeholder="Cari Barang" aria-label="Search" />
              <button class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm" type="submit">Search</button>
              <a href="/barang-stok" type="button" class="d-none d-sm-inline-block btn rounded-pill btn-outline-dark shadow-sm">Refresh</a>
            </form>
          </span>
        </div>
      </div>


        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
              <th>No</th>
              <th>Kategori Barang</th>
              <th>Nama Barang</th>
              <th>Stok Barang</th>
              <th>Harga Jual</th>
              <th>Harga Beli</th>
              @can('create', App\Models\Barsto::class)
              <th></th>
              @endcan
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach ($dtBarsto as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->kategori_barang }}</td>
              <td><strong>{{ $item->nama_barang }}</strong></td>
              <td><span class="badge bg-label-secondary me-1">{{ $item->stok_barang }}</span></td>
              <td><span class="badge bg-label-success me-1">{{ formatRupiah($item->harga_jual) }} </span></td>
              <td><span class="badge bg-label-info me-1">{{ formatRupiah($item->harga_beli) }} </span></td>
              <td><div>
                  @can('create', App\Models\Barsto::class)
                  <div class="btn-group">
                    <button type="button" class="btn rounded-pill btn-secondary dropdown-toggle hide-arrow" data-bs-toggle="dropdown"aria-expanded="false">
                      Aksi
                    </button>
                    <ul class="dropdown-menu">
                      @can('create', App\Models\Barsto::class)
                      <li>
                        <a class="dropdown-item" href="/barang-stok/{{$item->id}}/edit">Edit</a>
                        <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#modalHapusBarang{{ $item->id }}">Hapus</a>
                      </li>
                      @endcan
                    </ul>
                  </div>
                  @endcan
                  @include('modal.barang.hapus-barang')
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
            <div class="col card-footer text-left">
                {{ $dtBarsto->withQueryString()->links() }}
            </div>
        </div>
      </div>
      </div>

  </div>
@include('modal.logout')
</div>
@endsection


