<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
            <small>to manage <?= $title; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Siswa</li>
            <li><?= $title; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Detail Siswa</h3>
            </div>
<div class="box-body">
<?= $this->session->flashdata('message') ?>
<form  method="post" action="" enctype ="multipart/form-data" id="posts">
<table class="table table-striped table-hover">
<tr>
		<td>NoFormulir</td>
		<td>:</td>
		<td><input type="text" name="noformulir" value="<?= $getsiswabyId['noformulir'] ?>"  class="form-control"readonly></td>
	</tr>
<tr>
		<td>Nama Siswa*</td>
		<td>:</td>
		<td><input type="text" name="namasiswa" value="<?= $getsiswabyId['namasiswa'] ?>" class="form-control"readonly></td>
	</tr> 
<tr>
	<td>Foto</td>
		<td>:</td>
	<td><img src="<?= base_url('assets/images/siswa/'.$getsiswabyId['image']) ?>"class="img img-responsive"width="100px"> </td>
</tr>
<tr>
		<td>Nama Berkas*</td>
		<td>:</td>
		<td><input type="text" name="nama" value="" class="form-control">
        <?= form_error('nama', '<span class="help-block">','</small>') ?>
        </td>
	</tr>   
<td>Berkas*</td>
		<td>:</td>
	<td>
<input type="file" name="image"required>
</td>
</tr>

	<tr>
		<td></td>
		<td></td>
		<td>
        <input class="form-control" type="hidden" name="user_id" value="<?= $user['id']; ?>" />
		<input type="submit" value="Simpan" name="submit"class="btn btn-success">&nbsp;
		<a href="<?= base_url('ppdb/siswa_berkas_add/'.$getsiswabyId['id']) ?>"><span class="btn btn-warning">Batal</span>&nbsp;
		<a href="<?= base_url('ppdb/siswa_berkas') ?>"><span class="btn btn-primary">Kembali</span></a>
		</td>
	</tr>
</table>
</form>
            </div>
    
        <!-- /.box-body -->
        <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Rincian Berkas Siswa</h3>
      </div>
      <div class="box-body">
      <div class="row">
      <?php foreach ($getsiswaberkas as $dt) :?>
      <div class="col-md-3">
      <?php 
                $id = $dt['id'];
                $nama = $dt['nama'];
                $gambar = $dt['gambar'];
                $siswa = $dt['siswa'];
                ?>
               <a href="<?= base_url('assets/images/siswa_berkas/'.$gambar) ?>" target="new">
                <img src="<?= base_url('assets/images/siswa_berkas/'.$gambar) ?>" class="img-fluid" alt="$nama" height="150px"><br>    
                <?= $nama ?>
                </a>
                
                <a href="<?= base_url('ppdb/hapusberkas/' . $dt['id'].'/'.$siswa); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ? data tidak dapat dikembalikan lagi...');">Hapus</a>
                
                </div>
            <?php endforeach; ?>   
        </div>    
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->