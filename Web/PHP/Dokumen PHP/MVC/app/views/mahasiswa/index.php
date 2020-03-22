 <div class="container mt-5">
     <div class="row">
         <div class="col-lg-6">
             <?php Flasher::flash(); ?>
         </div>
     </div>
     <div class="row">
         <div class="col-lg-6">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                 Tambah Data Mahasiswa
             </button>
             <br>
             <br>
             <h3>Daftar Mahasiswa</h3>
             <ul class="list-group">
                 <?php foreach ($data['mhs'] as $mhs) : ?>
                     <li class="list-group-item"><?= $mhs['nama']; ?>
                         <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?')">Hapus</a>
                         <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah badge badge-success float-right ml-1" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                         <a href=" <?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
                     </li>
                 <?php endforeach; ?>
             </ul>



         </div>
     </div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                 <button type="button" class="close0" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                     <div class="form-group">
                         <label for="nama">Nama</label>
                         <input type="text" class="form-control" id="nama" name="nama">
                         <div class="form-group">
                             <label for="nim">NIM</label>
                             <input type="number" class="form-control" id="nim" name="nim">
                             <label for="email">Email</label>
                             <input type="email" class="form-control" id="email" name="email">
                         </div>
                         <div class="form-group">
                             <label for="jurusan">Jurusan</label>
                             <select class="form-control" id="jurusan" name="jurusan">
                                 <option value="Teknik Informatika">Teknik Informatika</option>
                                 <option value="Teknik Industri">Teknik Industri</option>
                                 <option value="Teknik Kimia">Teknik Kimia</option>
                                 <option value="Teknik Mesin">Teknik Mesin</option>
                                 <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                             </select>
                         </div>


                     </div>


                     <div class="modal-footer">
                         <button type="button" class="tombolTambahData btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Tambah Data</button>
                 </form>
             </div>
         </div>
     </div>
 </div>