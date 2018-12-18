
<?php 
$info = $this->session->flashdata('info');
if (!empty($info))
{
	echo $info;
}
?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/matakuliah/simpan" 
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
		<label class="control-label">semester</label>
		<div class="controls">
			<input type="text" name="smstr" id="smstr" placeholder="semester" class="span1" value="<?php echo $smstr;?>">
		</div>
	</div>
	<br>
	<div>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit"  class="btn btn-primary btn-small">simpan</button>
	</div>



</form>
