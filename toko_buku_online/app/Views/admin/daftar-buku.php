<?= $this->extend('Admin/template') ?>

<?= $this->section('main')?>
<div class="container">
        <h1>Daftar Buku</h1>
        <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi-plus-circle-fill"></i> Tambah
          </button>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                        <?php foreach($data->getKolomTabel() as $kolom): ?>
                            <th scope="col">
                                <?php echo $kolom; ?>
                            </th>
                       <?php endforeach; ?>
                       <th>Aksi</th>
                    </tr>
                  </thead>
                 <tbody>
    <?php $no = 0; ?>
    <?php foreach($data->getData() as $buku): ?>
        <tr>
            <td><?php echo ++$no; ?></td>
            <td><?php echo $buku->getJudul(); ?></td>
            <td><?php echo $buku->getPengarang(); ?></td>
            <td><?php echo $buku->getPenerbit(); ?></td>
            <td><?php echo $buku->getTahun(); ?></td>
            <td>
                <a href="/index.php/edit?id=<?php echo $buku->getId();?>" class="btn btn-success">
                    <i class="bi-pencil-square"></i>Edit</a>
                <button class="btn btn-danger" data-bs-toggle="modal" 
                data-bs-target="#hapusModal" data-bs-id=<?php echo $buku->getId(); ?>>
                    <i class="bi-trash"></i> Hapus</button>
                 </td>
                 </tr>
                 
                <?php endforeach; ?>
              </tbody>
            </div>
           </div>
         </div>

        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
       <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/buku/simpan" id="formTambah" method="POST">
          <div class="mb-3">
            <label for="judul">judul</label>
            <input type="text" name="judul" id="judul" class="form-control">
          </div>
          <div class="mb-3">
            <label for="judul">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="form-control">
          </div>
          <div class="mb-3">
            <label for="judul">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control">
          </div>
          <div class="mb-3">
            <label for="judul">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy">
        </i> Simpan</button>

      </div>
    </div>
  </div>
</div>
          <div class="modal fade" id="hapusModal" tabindex="-1" 
              aria-labelledby="hapusModalLabel" aria-hidden="true">
             <div class="modal-dialog">
            <div class="modal-content">
          <div class="modal-header">
        <h1 class="modal-title fs-5" id="hapusModal">konformasi hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/index.php/buku/hapus" method="POST" id="formHapus">
          <input type="hidden" name="id_hapus" id="hidden_id">
        </form>
        <P>Apakah anda yakin ingin menghapus data dengan id <span
          id="text_id">...</span>?<p>
        </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"><i 
        class="bi bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

    <script>
      const hapusModal = document.getElementById('hapusModal')
      if (hapusModal) {
        hapusModal.addEventListener('show.bs.modal', event => {
      // Button that triggered the modal
      const button = event.relatedTarget
      // Extract info from data-bs-* attributes
      const id = button.getAttribute('data-bs-id')
      // If necessary, you could initiate an Ajax request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      const hidden_id = hapusModal.querySelector('#hidden_id')
      const text_id = hapusModal.querySelector('#text_id')

      hidden_id.value = id;
      text_id.textContent = id;
      })
     }
    </script>

<?= $this->endsection();?>
    