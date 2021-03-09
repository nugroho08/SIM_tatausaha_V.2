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
                    <form action="{{ route('pegawai.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control w-100 p-3" placeholder="Nama" >
                        </div>
                        <div class="form-group">
                            <label for="jk">Instansi</label>
                            <input type="text" name='instansi' class="form-control w-100 p-3" placeholder="Instansi">
                        </div>
                        <div class="form-group">
                            <label for="ttl">Alamat</label>
                            <input name="alamat" type="text" class="form-control w-100 p-3" placeholder="Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="alamat">No. Handphone</label>
                            <input name="no_hp" type="number" class="form-control w-100 p-3" placeholder="No. Handphone" >
                        </div>
                        <div class="form-group">
                            <label for="nama_orangtua">Suhu Tubuh</label>
                            <input name="nama_orangtua" type="text" class="form-control w-100 p-3" placeholder="Suhu Tubuh" >
                        </div>   
                        <div class="form-group">
                            <label for="status">Keperluan</label>
                            <input name="status" type="text" class="form-control w-100 p-3" placeholder="Keperluan" >
                        </div> 
                        <div class="form-group">
                            <label for="jabatan">Tanggal Kunjungan</label>
                            <input name="jabatan" type="date" class="form-control w-100 p-3" placeholder="Tanggal Kunjungan" >
                        </div>  
                        <div class="form-group">
                            <label for="jumlah_tanggungan">Pesan</label>
                            <input name="jumlah_tanggungan" type="text" class="form-control w-100 p-3" placeholder="Pesan" >
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk">Kesan</label>
                            <input name="tanggal_masuk" type="text" class="form-control w-100 p-3" placeholder="Kesan" >
                        </div>  
                        
                        <div class="form-group row">
                            <label for="bukti_kunjungan" class="col-sm-2 col-form-label">Bukti Kunjungan</label>
                            <div class="col-sm-10">
                                <input name="bukti_kunjungan" type="file" id="input-file-now" class="dropify" />                                                   
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
    </div>
    <!-- end script modal -->

    