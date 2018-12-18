
<?php 
$info = $this->session->flashdata('info');
if (!empty($info))
{
	echo $info;
}
?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/jadwal/simpan" 
	onsubmit="return cekform();">

	<div class="control-group">		
		<label class="control-label">kode matakuliah</label>
		<div class="controls">
			<input type="text" name="kode" id="kode" placeholder="kode" class="span1" value="<?php echo $kode;?>">
		</div>
	</div>

	<div class="control-group">		
		<label class="control-label">nama matakuliah</label>
		<div class="controls">
			<input type="text" name="matkul" id="matkul" placeholder="nama matakuliah" class="span3" value="<?php echo $matkul;?>">
		</div>
	</div>

	<div class="control-group">		
		<label class="control-label">jadwal matakuliah</label>
		<div class="controls">
			<input type="text" name="jadwal" id="jadwal" placeholder="jadwal matakuliah" class="span3" value="<?php  $jadwal;?>">
		</div>
	</div>

	<div class="control-group">		
		<label class="control-label">dosen</label>
		<div class="controls">
			<input type="text" name="dosen" id="dosen" placeholder="dosen" class="span3" value="<?php echo $dosen;?>">
		</div>
	</div>
	<br>
	<div>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit"  class="btn btn-primary btn-small">simpan</button>
	</div>
</form>
