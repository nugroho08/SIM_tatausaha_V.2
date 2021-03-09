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
                <form action="{{ route('suratkeluar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal_surat">Tanggal Surat</label>
                        <input name="tanggal_surat" type="date" class="form-control w-100 p-3" placeholder="Tanggal Surat" >
                    </div>
                    <div class="form-group">
                        <label for="jenis_surat">Jenis Surat</label>
                        <input name="jenis_surat" type="text" class="form-control w-100 p-3" placeholder="Jenis Surat" >
                    </div>
                    <div class="form-group">
                        <label for="no_surat">Nomor Surat</label>
                        <input name="no_surat" type="text" class="form-control w-100 p-3" placeholder="Nomor Surat" >
                    </div>  
                    <div class="form-group">
                        <label for="prihal">Prihal</label>
                        <input name="prihal" type="text" class="form-control w-100 p-3" placeholder="Perihal" >
                    </div>  
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <input name="tujuan" type="text" class="form-control w-100 p-3" placeholder="Tujuan" >
                    </div>    
                    <div class="form-group">
                        <label for="pengantar">Pengantar</label>
                        <input name="pengantar" type="text" class="form-control w-100 p-3" placeholder="Pengantar" >
                    </div>
                    <div class="form-group ">
                    <label for="file_pendukung" class="col-sm-2 col-form-label">File Pendukung</label>
                    <div class="col-sm-10">
                        <input name="file_pendukung" type="file" id="input-file-now" class="dropify" />
                        <small>Masukan file dalam bentuk .zip/.rar</small>                                                 
                    </div>
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
