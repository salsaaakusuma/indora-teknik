<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> 
    
    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

     <!-- Script Detail Data -->

     {{-- barang masuk --}}
     <script>
        $('#modalDetailBarangMSK').on('show.bs.modal', function (event){
            var button = $(event.relatedTarget)
            var tgl_barmas = button.data('tgl_barmas')
            var resi_barmas = button.data('resi_barmas')
            var jmlh_barmas = button.data('jmlh_barmas')
            var id_barsto = button.data('id_barsto')
            var foto_barmas = button.data('foto_barmas')
    
            var modal =$(this)
            modal.find('.modal-body #tgl_barmas').text(tgl_barmas);
            modal.find('.modal-body #resi_barmas').text(resi_barmas);
            modal.find('.modal-body #jmlh_barmas').text(jmlh_barmas);
            modal.find('.modal-body #id_barsto').text(id_barsto);
            modal.find('.modal-body #foto_barmas').html(`<img src="/storage/foto-barmas/${foto_barmas}" width="180px">`);
        })
    </script>

    {{-- barang keluar --}}
    <script>
        $('#modalDetailBarangKLR').on('show.bs.modal', function (event){
            var button = $(event.relatedTarget)
            var tgl_barke = button.data('tgl_barke')
            var resi = button.data('resi')
            var seller = button.data('seller')
            var id_barsto = button.data('id_barsto')
            var jmlh_barke = button.data('jmlh_barke')
            var harga_keluar = button.data('harga_keluar')
            var harga_beli = button.data('harga_beli')
            var omset = button.data('omset')
            var base_prize = button.data('base_prize')
            var marketplace_fee = button.data('marketplace_fee')
            var packing = button.data('packing')
            var profit = button.data('profit')

            var modal =$(this)
            modal.find('.modal-body #tgl_barke').text(tgl_barke);
            modal.find('.modal-body #resi').text(resi);
            modal.find('.modal-body #seller').text(seller);
            modal.find('.modal-body #id_barsto').text(id_barsto);
            modal.find('.modal-body #jmlh_barke').text(jmlh_barke);
            modal.find('.modal-body #harga_keluar').text(harga_keluar);
            modal.find('.modal-body #harga_beli').text(harga_beli);
            modal.find('.modal-body #omset').text(omset);
            modal.find('.modal-body #base_prize').text(base_prize);
            modal.find('.modal-body #marketplace_fee').text(marketplace_fee);
            modal.find('.modal-body #packing').text(packing);
            modal.find('.modal-body #profit').text(profit);
        })
    </script>

    {{-- barang retur --}}
    <script>
        $('#modalDetailBarangRTR').on('show.bs.modal', function (event){
            var button = $(event.relatedTarget)
            var id_barke = button.data('id_barke')
            var tgl_bare = button.data('tgl_bare')
            var nama_barang = button.data('nama_barang')
            var jmlh_barang = button.data('jmlh_barang')
            var foto_bare = button.data('foto_bare')
    
            var modal =$(this)
            modal.find('.modal-body #id_barke').text(id_barke);
            modal.find('.modal-body #tgl_bare').text(tgl_bare);
            modal.find('.modal-body #nama_barang').text(nama_barang);
            modal.find('.modal-body #jmlh_barang').text(jmlh_barang);
            modal.find('.modal-body #foto_bare').html(`<img src="/storage/foto-bare/${foto_bare}" width="180px">`);
        })
    </script>

<script type="text/javascript">
    window.setTimeout(function() {
      $("#alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 1000);
  </script>

 @stack('scripts')
    