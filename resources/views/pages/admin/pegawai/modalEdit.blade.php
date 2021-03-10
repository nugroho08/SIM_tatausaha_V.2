<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                            <label for="nip">NIP</label>
                            <input name="nip" type="text" class="form-control" placeholder="NIP" >
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama" >
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis kelamin</label>
                            <select class="form-control" name="jk">
                                <option value="pilih" selected>Pilih</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ttl">tanggal lahir</label>
                            <input name="ttl" type="date" class="form-control" placeholder="Tanggal lahir" >
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control" placeholder="Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="nama_orangtua">Nama orang tua</label>
                            <input name="nama_orangtua" type="text" class="form-control" placeholder="Nama Orang tua" >
                        </div>   
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input name="status" type="text" class="form-control" placeholder="Status" >
                        </div> 
                        <div class="form-group">
                            <label for="jumlah_tanggungan">Jumlah tanggungan</label>
                            <input name="jumlah_tanggungan" type="number" class="form-control" placeholder="Jumlah tanggungan" >
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk">Tanggal masuk</label>
                            <input name="tanggal_masuk" type="date" class="form-control" placeholder="Tanggal masuk" >
                        </div>  
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" >
                        </div>  
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan terakhir</label>
                            <input name="pendidikan_terakhir" type="text" class="form-control" placeholder="Pendidikan terakhir" >
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
                <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Update Data</button>
            </div>
        </div>
    </div>
</div>
    