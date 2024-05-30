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
  <li class="menu-item active">
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

    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.468114848586!2d112.75694391478366!3d-7.413329575067052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e5fce9cc181f%3A0x8055e19bf2427f4f!2sIndora%20Teknik!5e0!3m2!1sen!2sid!4v1680151687622!5m2!1sen!2sid"
       frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- Profil Toko -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-12 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
                <div class="card-body">
                  <h5 class="card-title text-primary">Profile Toko</h5>
                  <p class="mb-4">
                    Indora Teknik merupakan toko perkakas dan suku cadang yang menyediakan kompresor, jet cleanser, kompor, gilingan daging dan lain-lain. 
                    Toko Indora Teknik bertempat di Jl. Ir. Juanda, Area Sawah, Damarsi, Kec. Buduran, Kab. Sidoarjo. Toko Indora Teknik beroperasi dari hari 
                    Senin – Sabtu pada pukul 08.00 – 16.00 WIB.
                  </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Profil Toko -->

    <!-- Marketplace -->
    <div class="row mb-5">
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
          <img class="card-img-top" src="../assets/img/marketplace/lazada.jpeg" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Lazada</h5>
            <a href="https://www.lazada.co.id/shop/indora-teknik/?path=index.htm" target="_blank" class="btn btn-outline-primary">Marketplace</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
            <img class="card-img-top" src="../assets/img/marketplace/tokped.jpeg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Tokopedia</h5>
              <a href="https://www.tokopedia.com/indorateknik" target="_blank" class="btn btn-outline-primary">Marketplace</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card h-100">
              <img class="card-img-top" src="../assets/img/marketplace/shopee.jpeg" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Shopee</h5>
                <a href="https://shopee.co.id/indora_teknik" target="_blank" class="btn btn-outline-primary">Marketplace</a>
              </div>
            </div>
          </div>
    <!-- Marketplace -->

  </div>
@include('modal.logout')
</div>
@endsection


