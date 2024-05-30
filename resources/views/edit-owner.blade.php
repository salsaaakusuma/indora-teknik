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
  <li class="menu-item active">
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
    <h4 class="fw-bold py-3 mb-4"> Edit Profil Owner</h4>
  
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
              @foreach ($dtOwner as $data)
            <form action="{{ route('update.owner', $data->id_owner) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="row mb-3">
                <label for="nameWithTitle" class="form-label">Nama Owner</label>
                <div class="col-sm-10">
                    <input type="text" id="nama_owner" name="nama_owner" class="form-control @error('nama_owner') is-invalid @enderror" placeholder="Nama Owner" value="{{ old('nama_owner', $data->nama_owner) }}">
                        @error('nama_owner')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="emailWithTitle" class="form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="text" id="email_owner" name="email_owner" class="form-control @error('email_owner') is-invalid @enderror" placeholder="e-mail" value="{{ old('email_owner', $data->email_owner) }}"/>
                        @error('email_owner')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="dobWithTitle" class="form-label">No. HP</label>
                <div class="col-sm-10">
                    <input type="number" id="no_hp" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="No. HP" value="{{ old('no_hp', $data->no_hp) }}"/>
                        @error('no_hp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="dobWithTitle" class="form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat', $data->alamat) }}"/>
                        @error('alamat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-12">
                  <a href="/profil-owner" class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm">Back</a>
                  <button type="submit" class="d-none d-sm-inline-block btn rounded-pill btn-primary shadow-sm">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('modal.logout')
    @endforeach
</div>  
@endsection