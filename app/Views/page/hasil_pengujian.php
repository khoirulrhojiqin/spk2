<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<style type="text/css">
	.table-head-bg-*states;
</style>
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Hasil Pengujian</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Hasil Pengujian</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<?php 
						$id = session()->get('prodi');
       					$nama = session()->get('nama');
       					$db = \Config\Database::connect();  
       					$query = $db->query("
					        SELECT nama, n_akhir 
					        FROM (SELECT nama, n_akhir FROM m_pm_rank where prodi='$id' and nama='$nama'
					        ORDER BY n_akhir DESC LIMIT 2) AS Emp 
					        ORDER BY n_akhir LIMIT 2;
				        ");
				        $nama='';
				        foreach ($query->getResult() as $d) {
				        $nama .=$d->nama;
				        }

				        if ($nama=='') { ?>
				        	<div class="col-sm-12 col-lg-12">
							<div class="card p-3">
								<div class="d-flex align-items-center">
									<span class="stamp stamp-md bg-danger mr-3">
										<i class="flaticon-error"></i>
									</span>
									<div>
										<!-- <h5 class="mb-1"><b id="huruf"></b></h5> -->
										<small class="text-muted">Maaf anda gagal seleksi asisten dosen, silahkan coba lagi lain waktu</small>
									</div>
								</div>
							</div>
							</div>
				        <?php }else{ ?>
				        	<div class="col-sm-12 col-lg-12">
							<div class="card p-3">
								<div class="d-flex align-items-center">
									<span class="stamp stamp-md bg-success mr-3">
										<i class="flaticon-success"></i>
									</span>
									<div>
										<h5 class="mb-1"><b id="huruf"></b></h5>
										<small class="text-muted">Selamat anda lulus seleksi asisten dosen</small>
									</div>
								</div>
							</div>
							</div>
				        <?php } ?>
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Rekapitulasi Penilaian</h4>
										<!-- <div class="btn btn-group"> -->
											
										<!-- </div> -->
									</div>
									<!-- <div class="d-flex align-items-center">
										<h4 class="card-title">Hitung Hasil</h4>
										<a href="" type="button" class="btn btn-primary btn-round ml-auto">
											<i class="fa fa-plus"></i>
											Hitung Hasil
										</a>
									</div> -->
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="hasil_saw display table table-bordered table-bordered-bd-success table-hover table-head-bg-success mt-4">
											<thead>
												<tr>
													<th style="text-align: center;">#</th>
					                                <th style="text-align: center;">Prodi</th>
					                                <th style="text-align: center;">Nama</th>
					                                <th style="text-align: center;">Rank %</th>
												</tr>
											</thead>
											<tbody >
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<!-- <div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Hasil Profile Matching</h4>
									</div>
								</div> -->
								<div class="card-body">
									
									<div class="table-responsive">
										<table id="add-row" class="cf_sf_hasil display table table-hover table-head-bg-success table-bordered-bd-success mt-4" >
											<thead>
												<tr>
													<th>#</th>
					                                <th>Prodi</th>
					                                <th>Nama</th>
					                                <th>Administrasi</th>
					                                <th>Kompetensi</th>
					                                <th>mengajar</th>
					                                <th>wawancara</th>
					                                <th>Nilai akhir</th>
												</tr>
											</thead>
											<tbody >
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<!-- <div class="col-md-12">
							<div class="card"> -->
								<!-- <div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Kesimpulan</h4>
									</div>
								</div> -->
								
						<!-- 	</div>
						</div> -->


					</div>
				</div>
			</div>
			<script src="<?php echo site_url('assets/js/core/jquery.3.2.1.min.js')?>"></script>
			<script src="<?php echo site_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>
			<script type="text/javascript">
			$(document).ready(function(){
			$.ajax({
				    type: 'POST',
				    url: '<?php echo base_url('hasil/get_nilai_perangkingan')?>',
				    success: function(result) {
				    	// console.log()
				    	var newData = JSON.parse(result)
				        var data = newData.data[0][0]+ ' dan ' +newData.data[1][0];
				        // var data = newData.data2[0][1];
				        $("#huruf").html(data);
				        // $("#angka").html(data2);
				    }
				});
			});

			$(document).ready(function(){
              var table = $('.hasil_saw').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false, 
                "paging":   false,
                "bLengthChange": false,
                "info":     false,
                "searching" : false,
                "ajax": {

                    "url": "<?php echo base_url('hasil/get_saw')?>",
                    "type": "POST",
                    // "data": function(data){
                    //   data.tgl=$('input[name=tgl2]').val();
                    // }
                },
                // "createdRow": function( row, data, dataIndex ) {
                //  if ( data[2] == "Total") {        
                //        $(row).addClass('colors2');
                //      }
                //      // else if ( data[0] == "Sumbagut") {        
                //      //   $(row).addClass('colors2');
                //      // }
                //   },
                "deferRender": true,
                });
             $.fn.dataTable.ext.errMode = 'none';
          	});

          	$(document).ready(function(){
              var table = $('.cf_sf_hasil').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false, 
                "paging":   false,
                "bLengthChange": false,
                "info":     false,
                "searching" : false,
                "ajax": {

                    "url": "<?php echo base_url('hasil/get_pm')?>",
                    "type": "POST"
                },
                "deferRender": true,
                });
             $.fn.dataTable.ext.errMode = 'none';
          	})
			</script>
			

<?= $this->endSection() ?>