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
            <i class="menu-icon tf-icons bx bx-user"></i>
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
        <h4 class="fw-bold py-3 mb-4"> Tambah Barang Keluar <span class="text-muted fw-light">/Stock-out</span></h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('store.barke') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Keluar</label>
                                <div class="col-sm-10">
                                    <input type="date" id="tgl_barke" name="tgl_barke" class="form-control form-control @error('tgl_barke') is-invalid @enderror" value="{{ old('tgl_barke') }}"
                                        placeholder="Tanggal Keluar" />
                                            @error('tgl_barke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Resi</label>
                                <div class="col-sm-10">
                                    <input type="text" id="resi" name="resi" class="form-control form-control @error('resi') is-invalid @enderror" value="{{ old('resi') }}"
                                        placeholder="Resi" />
                                            @error('resi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Seller</label>
                                <div class="col-sm-10">
                                    <input type="text" id="seller" name="seller" class="form-control form-control @error('seller') is-invalid @enderror" value="{{ old('seller') }}"
                                        placeholder="Seller" />
                                            @error('seller')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select name="id_barsto" id="id_barsto" class="form-control form-control @error('id_barsto') is-invalid @enderror namabarke" value="{{ old('id_barsto') }}"
                                        placeholder="Pilih Nama Barang">
                                        <option selected disabled>-- Pilih Barang --</option>
                                        @foreach ($dtBarsto as $item)
                                            <option value={{ $item->id }}>{{ $item->nama_barang }}</option>
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
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Jumlah Item</label>
                                <div class="col-sm-10">
                                    <input type="number" id="jmlh_barke" name="jmlh_barke" class="form-control form-control @error('jmlh_barke') is-invalid @enderror" value="{{ old('jmlh_barke') }}"
                                        placeholder="Jumlah Item" />
                                            @error('jmlh_barke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Harga Jual</label>
                                <div class="col-sm-10">
                                    <input type="number" id="harga_keluar" name="harga_keluar" class="form-control form-control @error('harga_keluar') is-invalid @enderror" value="{{ old('harga_keluar') }}"
                                        placeholder="Harga Jual" />
                                            @error('harga_keluar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Harga Beli</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Harga Beli" name= "harga_beli" id="harga_beli"
                                        readonly/>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <a href="/barang-keluar"
                                        class="d-none d-sm-inline-block btn rounded-pill btn-dark shadow-sm">Back</a>
                                    <button type="submit"
                                        class="d-none d-sm-inline-block btn rounded-pill btn-primary shadow-sm">Save</button>
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
        // select2
        $(document).ready(function() {
            $('.namabarke').select2();

            // autofill
            $('#id_barsto').change(function() {
                var id = $(this).val();
                console.log(id);
                // Kirim permintaan AJAX ke server
                $.ajax({
                    url: '{{ route('get.harga.barke') }}',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        // Tampilkan data yang diterima dari server
                        $('#harga_beli').val(response);
                    }
                });
            });
        });
    </script>
@endpush
