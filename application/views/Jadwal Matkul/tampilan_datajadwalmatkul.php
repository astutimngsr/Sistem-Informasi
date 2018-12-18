<script type="text/javascript">
			$(function() {
				//initiate dataTables plugin
				var oTable1 = 
				$('#sample-table-2').dataTable( {
					"aoColumns": false }
					  null, null,null, null,
					  { "bSortable": false } 
					 ] } );
			})
			
				
		</script>



<p>
	<a href="<?php echo base_url();?>index.php/jadwal/tambah" class="btn btn-primary btn-small">tambah data</a>
</p>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>no</th>
			<th>kode matakuliah</th>
			<th>nama matakuliah</th>
			<th>jadwal matakuliah</th>
			<th>dosen</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php $no = 1; foreach ($data->result() as $row) { ?>
		
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->kode_mk; ?></td>
				<td><?php echo $row->nama_mk; ?></td>
				<td><?php echo $row->Jadwal; ?></td>
				<td><?php echo $row->Dosen; ?></td>


				<td>
					<a href="<?php echo base_url()?>index.php/jadwal/edit/<?php echo $row->kode_mk; ?>">edit</a>
					<a href="<?php echo base_url()?>index.php/jadwal/delete/<?php echo $row->kode_mk; ?>" onclick="return confirm('anda yakin ingin menghapus data ini?');  ">delete</a>
					
					</a>
				</td>
			 
		</tr>
		<?php }?>
	</tbody>
</table>