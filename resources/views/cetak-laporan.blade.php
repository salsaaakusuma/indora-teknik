<!DOCTYPE html>
<html>
<head>
	<title>Indora Teknik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 10pt;
		}
	</style>
	<center>
      <h5>Laporan Penjualan Indora Teknik {{$bulan}} </h4>
        <br>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				        <th>Id</th>
                <th>Tanggal</th>
                <th>Resi</th>
                <th>Seller</th>
                <th>Item</th>
                <th>Qyt</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Omset</th>
                <th>Base Price</th>
                <th>Marketplace Fee</th>
                <th>Packing</th>
                <th>Profit</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody class="table-my-0">
            @foreach ($cetakLaporan as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->tgl_barke->format('d M Y') }}</td>
              <td>{{ $item->resi }}</td>
              <td>{{ $item->seller }}</td>
              <td>{{$item->barsto->nama_barang}}</td>
              <td>{{ $item->jmlh_barke }} </td>
              <td>{{ formatRupiah($item->harga_keluar) }}</td>
              <td>{{ formatRupiah($item->barsto->harga_beli) }} </td>
              <td>{{ formatRupiah($item->omset) }} </td>
              <td>{{ formatRupiah($item->base_prize) }}</td>
              <td>{{ formatRupiah($item->marketplace_fee) }}</td>
              <td>Rp {{ $item->packing }}</td>
              <td>{{ formatRupiah($item->profit) }} </td>
              <td>{{ $item->status }} </td>
            </tr>
            @endforeach
          </tbody>
	</table>

  <table class='table table-borderless'>
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>Total Barang Terjual</strong></th>
        <th>{{ $jmlh_barang }}</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>Total Omset</strong></th>
        <th>{{ formatRupiah($jmlh_omset) }} </th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>Total Profit</strong></th>
        <th>{{ formatRupiah($jmlh_profit) }}</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
  </table>
 
    <script type="text/javascript">
            window.print();
    </script>

</body>
</html>



