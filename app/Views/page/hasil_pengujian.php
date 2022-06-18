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

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Hasil SAW</h4>
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
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Hasil Profile Matching</h4>
									</div>
								</div>
								<div class="card-body">
									
									<div class="table-responsive">
										<table id="add-row" class="cf_sf_hasil display table table-hover table-head-bg-success table-bordered-bd-success mt-4" >
											<thead>
												<tr>
													<th>#</th>
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