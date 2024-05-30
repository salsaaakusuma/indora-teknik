@foreach ($dtBare as $data)

<div class="modal fade" id="modalHapusBarangRTR{{ $data->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusBarangRTR">Hapus Barang {{$data->barke->resi}}</h5>
      </div>
      <div class="modal-body">
        Anda yakin akan menghapus Barang Retur {{$data->barke->barsto->nama_barang}} dengan resi {{$data->barke->resi}}?<br>
        Data Yang Terhapus Tidak Dapat Kembali.
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <form action="/barang-retur/{{ $data->id }}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">
          </form>
      </div>
    </div>
  </div>
</div>

@endforeach