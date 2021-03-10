<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>
            <div class="modal-body">
            <form action="{{ route('suratkeluar.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="surat_masuk">Tanggal Surat</label>
                        <input name="tanggal_surat" type="date" class="form-control w-100 p-3" id="surat_masuk" aria-describedby="surat_masuk" placeholder="Tanggal Surat" >
                    </div>
                    <div class="form-group">
                        <label for="surat_masuk">Jenis Surat</label>
                        <input name="tanggal_surat" type="text" class="form-control w-100 p-3" id="surat_masuk" aria-describedby="surat_masuk" placeholder="Tanggal Surat" >
                    </div>
                    <div class="form-group">
                        <label for="surat_masuk">No Surat</label>
                        <input name="no_surat" type="text" class="form-control w-100 p-3" id="surat_masuk" aria-describedby="surat_masuk" placeholder="No Suratt" >
                    </div>  
                    <div class="form-group">
                        <label for="surat_masuk">Perihal</label>
                        <input name="prihal" type="text" class="form-control w-100 p-3" id="surat_masuk" aria-describedby="surat_masuk" placeholder="Perihal" >
                    </div>   
                    <div class="form-group">
                        <label for="surat_masuk">Instansi</label>
                        <input name="instansi" type="text" class="form-control w-100 p-3" id="surat_masuk" aria-describedby="surat_masuk" placeholder="Instansi" >
                    </div>
             </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Submit</button>
                </form>
          </div>
        </div>
      </div>
    </div>
</div>