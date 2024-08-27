  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="keluar.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
    <div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../keluar.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

 <div class="modal fade" id="resetPoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda Yakin Untuk Mereset Point Siswa?<br>Semua Point Dan Data Pelanggaran Akan Di RESET.</div>
        <div class="modal-footer">
          <form method="POST" action="">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" type="submit" name="resetpoint">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Ubah -->
<div class="modal fade" id="modalubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBAH DATA SISWA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Total Point:</label>
            <input type="text" class="form-control" id="recipient-name" value="" disabled="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tambah Point:</label>
            <input type="text" class="form-control" id="recipient-name" name="tambahpoint">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kurangi Point:</label>
            <input type="text" class="form-control" id="recipient-name" name="kurangpoint">
          </div>
          <div class="form-group">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="ubahsiswa">Ubah</button>
      </div>
    </div>
  </div>
</div>

<!-- <modal delete -->


  <!-- modal tambah -->
  
  <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="" method="POST">
      <div class="modal-body">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">NISN :</label>
            <input type="text" class="form-control" name="nisn" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">NAMA :</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
      
        <div class="form-group">
            <label for="message-text" class="col-form-label">KELAS :</label>
             <select class="form-control" name="kelas">
                  <option >Pilih Kelas</option>
                  <option value="XI - AP ">XI - AP </option>
                  <option value="XI - AK 1">XI - AK 1</option>
                  <option value="XI - AK 2">XI - AK 2</option>
                  <option value="XI - PM 1">XI - PM 1</option>
                  <option value="XI - PM 2">XI - PM 2</option>
                  <option value="XI - RPL 1">XI - RPL 1</option> 
                  <option value="XI - RPL 2">XI - RPL 2</option>                   
              </select>
            
          </div>
            <div class="form-group">
            <label for="message-text" class="col-form-label">Hak Akses :</label>
             <select class="form-control" name="hak_akses">
                  
                  <option value="Siswa">Siswa</option>
                  <option value="OSIS">OSIS</option>
                  <option value="MPK">MPK</option>                   
              </select>
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">PASSWORD :</label>
            <input type="password" class="form-control" name="password" required>
          </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button name="tambahuser" type="submit" class="btn btn-success">Tambahkan </button>

            </form>

      </div>
    </div>
    </div>
  </div>

