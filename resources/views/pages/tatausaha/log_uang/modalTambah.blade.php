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
                <form action="{{ route('loguang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control w-100 p-3" name="status">
                                <option>Pilih</option>
                                <option value="uang masuk">Uang Masuk</option>
                                <option value="uang keluar">Uang Keluar</option>
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="jumlah_uang">Jumlah Uang</label>
                        <input name="jumlah_uang" type="number" class="form-control w-100 p-3" placeholder="Jumlah Uang" >
                    </div>  
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input name="tanggal" type="date" class="form-control w-100 p-3" placeholder="Tanggal" >
                    </div>  
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control w-100 p-3" placeholder="Keterangan" >
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