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
    <h4 class="fw-bold py-3 mb-4"> Tambah Barang <span class="text-muted fw-light">/Stock</span></h4>
  
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            <form action="{{ route('store.barsto') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori Barang</label>
                <div class="col-sm-10">
                    <input type="text" id="kategori_barang" name="kategori_barang" class="form-control form-control @error('kategori_barang') is-invalid @enderror" value="{{ old('kategori_barang') }}" placeholder="Kategori"/>
                    @error('kategori_barang')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" id="nama_barang" name="nama_barang" class="form-control form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang') }}" placeholder="Nama Barang"/>
                    @error('nama_barang')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Stok Barang</label>
                <div class="col-sm-10">
                    <input type="number" id="stok_barang" name="stok_barang" class="form-control form-control @error('stok_barang') is-invalid @enderror" value="{{ old('stok_barang') }}" placeholder="Jumlah Stok"/>
                    @error('stok_barang')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Harga Beli</label>
                <div class="col-sm-10">
                    <input type="number" id="harga_beli" name="harga_beli" class="form-control form-control @error('harga_beli') is-invalid @enderror" value="{{ old('harga_beli') }}" placeholder="Harga Beli"/>
                    @error('harga_beli')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Harga Jual</label>
                <div class="col-sm-10">
                    <input type="number" id="harga_jual" name="harga_jual" class="form-control form-control @error('harga_jual') is-invalid @enderror" value="{{ old('harga_jual') }}" placeholder="Harga Jual"/>
                    @error('harga_jual')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <a href="/barang-stok" class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm">Back</a>
                  <button type="submit" class="d-none d-sm-inline-block btn rounded-pill btn-primary shadow-sm">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@include('modal.logout')
</div>  
@endsection