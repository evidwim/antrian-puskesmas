<style type="text/css">
	.row{
		margin-top: 10px;
	}
</style>
<form action="<?php echo base_url('admin/Antrian_poli/save') ?>" method="post">
	<div class ="row">
		<div class ="col-md-2">
			<label>Pilih Poli</label>		
		</div>

		<div class="col-md-5">
			<select name="id_poli" id="id_poli" class="form-control" onchange="noAntrian(this.value)">
				<option value=""> pilih </option>
				<?php foreach ($getPoli as $row ) {
				?>
					<option value="<?php echo $row->id_poli; ?>"> <?php echo $row->kode_poli; ?> </option>
				<?php } ?>
			</select>
		</div>
	</div>

	<div class ="row">
		<div class ="col-md-2">
			<label>No antrian poli</label>		
		</div>

		<div class="col-md-5">
			<input type="text" name="no_antrian_poli2" id="no_antrian_poli2" value="" disabled="" class="form-control">
			<input type="hidden" name="no_antrian_poli" id="no_antrian_poli" value="" class="form-control">
		</div>
	</div>

	<div class ="row">
		<div class ="col-md-2">
			<label>Pilih Pasien</label>		
		</div>

		<div class="col-md-5">
			<select name="id_pasien" id="id_pasien" class="form-control">
				<?php foreach ($getPasien as $row ) {
				?>	
				<option value="<?php echo $row->id_pasien; ?>"> <?php echo $row->nama; ?> </option>
			<?php } ?>
			</select>
		</div>
	</div>
	<div class="row text-right">
		<div class="col-md-7">
			<input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-primary">
		</div>
	</div>
</form>

<script type="text/javascript">
	
</script>

