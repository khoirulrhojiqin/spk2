<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<style type="text/css">
	.table-head-bg-*states;
</style>
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Profile Matching</h4>
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
								<a href="#">Metode Pengujian</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Selisih CF & SF</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Selisih GAP</h4>
										<!-- <div class="btn btn-group"> -->
											<a href="<?=base_url('/pm/selisih_pm')?>" type="button" class="btn btn-primary ml-auto">
												<i class="fas fa-angle-double-left"></i>
												Kembali
											</a>&nbsp;
											<a href="<?=base_url('/pm/nilai_akhir')?>" type="button" class="btn btn-success">
												<i class="fas fa-angle-double-right"></i>
												Nilai Akhir
											</a>
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
										<table id="add-row" class="cf_sf display table table-bordered table-bordered-bd-success table-hover table-head-bg-success mt-4">
											<thead>
												<tr>
													<th rowspan="3">#</th>
					                                <th rowspan="3">Alternatif</th>
					                                <th colspan="12" style="text-align: center;">Kriteria</th>
												</tr>
												<tr>
													<th>C</th>
					                                <th>C</th>
					                                <th>S</th>
					                                <th>C</th>
					                                <th>C</th>
					                                <th>S</th>
					                                <th>S</th>
					                                <th>C</th>
					                                <th>C</th>
					                                <th>C</th>
					                                <th>C</th>
					                                <th>S</th>
												</tr>
												<tr>
													<th>K01</th>
					                                <th>K02</th>
					                                <th>K03</th>
					                                <th>K04</th>
					                                <th>K05</th>
					                                <th>K06</th>
					                                <th>K07</th>
					                                <th>K08</th>
					                                <th>K09</th>
					                                <th>K10</th>
					                                <th>K11</th>
					                                <th>K12</th>
												</tr>
											</thead>
											<tbody >
												
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td colspan="3">Berkas Administrasi</td>
													<td colspan="3">Tes Kompetensi</td>
													<td colspan="4">Tes Mengajar</td>
													<td colspan="2">Tes Wawancara</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Nilai CF & SF</h4>
									</div>
								</div>
								<div class="card-body">
									
									<div class="table-responsive">
										<table id="add-row" class="cf_sf_hasil display table table-hover table-head-bg-success table-bordered-bd-success mt-4" >
											<thead>
												<tr>
													<!-- <th>#</th> -->
					                                <th>Nama</th>
					                                <th>Nilai Core Factor</th>
					                                <th>Nilai Secondary Factor</th>
					                                <th>Nilai Core Factor</th>
					                                <th>Nilai Secondary Factor</th>
					                                <th>Nilai Core Factor</th>
					                                <th>Nilai Secondary Factor</th>
					                                <th>Nilai Core Factor</th>
					                                <th>Nilai Secondary Factor</th>
												</tr>
											</thead>
											<tbody >
											</tbody>
											<tfoot>
												<tr>
													<td></td>
													<td colspan="2">Berkas Administrasi</td>
													<td colspan="2">Tes Kompetensi</td>
													<td colspan="2">Tes Mengajar</td>
													<td colspan="2">Tes Wawancara</td>
												</tr>
											</tfoot>
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
              var table = $('.cf_sf').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false, 
                "paging":   false,
                "bLengthChange": false,
                "info":     false,
                "searching" : false,
                "ajax": {

                    "url": "<?php echo base_url('pm/get_cf_sf')?>",
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

                    "url": "<?php echo base_url('pm/get_cf_sf_hasil')?>",
                    "type": "POST"
                },
                "deferRender": true,
                });
             $.fn.dataTable.ext.errMode = 'none';
          	})
			</script>
			

<?= $this->endSection() ?>