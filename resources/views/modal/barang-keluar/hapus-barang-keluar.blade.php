@foreach ($dtBarke as $data)

<div class="modal fade" id="modalHapusBarangKLR{{ $data->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusBarangKLR">Hapus Barang {{ $data->resi }}</h5>
      </div>
      <div class="modal-body">
        Anda yakin akan menghapus Barang Keluar {{$data->barsto->nama_barang}} Dengan Resi {{$data->resi}}?<br>
        Data Yang Terhapus Tidak Dapat Kembali.
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <form action="/barang-keluar/{{ $data->id }}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">
          </form>
      </div>
    </div>
  </div>
</div>


@endforeach