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
    <h4 class="fw-bold py-3 mb-4"> Tambah Barang Masuk <span class="text-muted fw-light">/Stock-in</span></h4>
  
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            <form action="{{ route('store.barmas') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Masuk</label>
                <div class="col-sm-10">
                  <input type="date" id="tgl_barmas" name="tgl_barmas" class="form-control form-control @error('tgl_barmas') is-invalid @enderror" value="{{ old('tgl_barmas') }}" placeholder="Tanggal Masuk"/>
                  @error('tgl_barmas')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Barang</label>
                <div class="col-sm-10">
                    <select name="id_barsto" class="form-control form-control @error('id_barsto') is-invalid @enderror selectnama" value="{{ old('id_barsto') }}" placeholder="Pilih Nama Barang">
                        <option value=""></option>
                        @foreach ($dtBarsto as $item)
                          <option value={{$item->id}}>{{$item->nama_barang}}</option>
                        @endforeach
                    </select>
                    @error('id_barsto')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Resi Barang</label>
                <div class="col-sm-10">
                  <input type="text" id="resi_barmas" name="resi_barmas" class="form-control form-control @error('resi_barmas') is-invalid @enderror" value="{{ old('resi_barmas') }}" placeholder="Resi Barang"/>
                  @error('resi_barmas')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Jumlah Barang</label>
                <div class="col-sm-10">
                  <input type="number" id="jmlh_barmas" name="jmlh_barmas" class="form-control form-control @error('jmlh_barmas') is-invalid @enderror" value="{{ old('jmlh_barmas') }}" placeholder="Jumlah Barang"/>
                  @error('jmlh_barmas')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              {{-- <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Bukti Foto</label>
                <div class="col-sm-10">
                  <input type="file" id="foto_barmas" name="foto_barmas" class="form-control form-control @error('foto_barmas') is-invalid @enderror" value="{{ old('foto_barmas') }}" placeholder=""/>
                    @error('foto_barmas')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div> --}}
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <a href="/barang-masuk" class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm">Back</a>
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

@push('scripts')
<script>
$(document).ready(function() {
  $('.selectnama').select2();
});
</script>
@endpush