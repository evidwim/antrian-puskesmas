<!-- jQuery -->

<script type="text/javascript" src="<?php echo base_url('assets/admin/sb_admin/js/jquery.js') ?>"></script> 
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
       $('.<?php echo isset($active)?$active:'dash';?>').addClass('active');
    });

    function noAntrian(id_poli){
		// alert(id_poli);?
		if(id_poli!=""){
			$.ajax({

				url: "<?php echo base_url('admin/Antrian_poli/getNoAntrian'); ?>",
				type : "POST",
				data : "id_poli="+id_poli,
				datatype: "json",
				success:function(response){
					console.log(response);
					// alert(data);
					var output = JSON.parse(response);
					if(output.no > output.maks){
						$("#no_antrian_poli2").val('Data Sudah Penuh');
						// $("#simpan").toggle('slow');
						$("#simpan").prop("disabled",true);
					}else{

						$("#no_antrian_poli").val(output.no_hasil);
						$("#no_antrian_poli2").val(output.no_hasil);
						$("#simpan").prop("disabled",false);
					}
				} // Munculkan alert error
			});
		}else{
			$("#no_antrian_poli").val("");
			$("#no_antrian_poli2").val("");
		}
	}
</script>
<!-- Bootstrap Core JavaScript -->

