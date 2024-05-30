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
  <li class="menu-item active">
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
    <h4 class="fw-bold py-3 mb-4"> Tambah Barang Retur <span class="text-muted fw-light">/Return-item</span></h4>
  
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            <form action="{{ route('store.bare') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Retur</label>
                <div class="col-sm-10">
                  <input type="date" id="tgl_bare" name="tgl_bare" class="form-control form-control @error('tgl_bare') is-invalid @enderror" value="{{ old('tgl_bare') }}" placeholder="Tanggal Retur"/>
                    @error('tgl_bare')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Resi</label>
                <div class="col-sm-10">
                    <select name="id_barke" id="id_barke" class="form-control resibare @error('id_barke') is-invalid @enderror" value="{{ old('id_barke') }}" placeholder="Pilih Nama Barang">
                        <option value=""></option>
                        @foreach ($dtBarke as $item)
                          <option value={{$item->id}}>{{$item->resi}}</option>
                        @endforeach
                    </select>
                        @error('id_barke')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Nama Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Nama Barang" id="nama_barang"
                  disabled />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Jumlah Barang</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" placeholder="Jumlah Barang" id="jmlh_barke"
                  disabled />
                </div>
              </div>
              {{-- <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Bukti Foto</label>
                <div class="col-sm-10">
                  <input type="file" id="foto_bare" name="foto_bare" class="form-control form-control @error('foto_bare') is-invalid @enderror" value="{{ old('foto_bare') }}" placeholder=""/>
                        @error('foto_bare')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
              </div> --}}
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <a href="/barang-retur" class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm">Back</a>
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
      $('.resibare').select2();

      // autofill
      $('#id_barke').change(function() {
                var id = $(this).val();
                console.log(id);
                // Kirim permintaan AJAX ke server
                $.ajax({
                    url: '{{ route('get.retur') }}',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    success: function(response) {
                      console.log(response)
                        // Tampilkan data yang diterima dari server
                        $('#nama_barang').val(response[0]);
                        $('#jmlh_barke').val(response[1]);
                    }
                });
            });
    });
</script>
@endpush
