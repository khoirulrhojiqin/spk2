<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
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
								<a href="#">Selisih GAP</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Selisih Value</h4>
										<!-- <div class="btn btn-group"> -->
											<a href="<?=base_url('/pm/index')?>" type="button" class="btn btn-primary ml-auto">
												<i class="fas fa-angle-double-left"></i>
												Kembali
											</a>&nbsp;
											<a href="<?=base_url('/pm/cf_sf')?>" type="button" class="btn btn-success">
												<i class="fas fa-angle-double-right"></i>
												CF dan SF
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
										<table id="add-row" class="display table table-striped table-hover table-head-bg-success mt-4" >
											<thead>
												<tr>
													<th>#</th>
					                                <th>Alternatif</th>
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
												<?php $i=1; foreach($get_pm->getResult() as $row): ?>
												<tr>
													<td><?php echo$i++?></td>
					                                <td><?php echo $row->alternatif; ?></td>
					                                <td><?php echo $row->k1; ?></td>
					                                <td><?php echo $row->k2; ?></td>
					                                <td><?php echo $row->k3; ?></td>
					                                <td><?php echo $row->k4; ?></td>
					                                <td><?php echo $row->k5; ?></td>
					                                <td><?php echo $row->k6; ?></td>
					                                <td><?php echo $row->k7; ?></td>
					                                <td><?php echo $row->k8; ?></td>
					                                <td><?php echo $row->k9; ?></td>
					                                <td><?php echo $row->k10; ?></td>
					                                <td><?php echo $row->k11; ?></td>
					                                <td><?php echo $row->k12; ?></td>
												</tr>
												<?php endforeach; ?>
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
										<h4 class="card-title">Nilai Gap</h4>
									</div>
								</div>
								<div class="card-body">
									
									<div class="table-responsive">
										<table id="add-row" class="pm_gap display table table-striped table-hover table-head-bg-success mt-4" >
											<thead>
												<tr>
													<th>#</th>
					                                <th>Alternatif</th>
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

              var table = $('.pm_gap').DataTable({
              // "scrollX": true,
                // dom: 'lBfrtip',
                // buttons: [
                //   'copy',
                //     {
                //     extend: 'csv',
                //     filename: 'Revenue_Classification'+date,
                //     text: '<i class="fa fa-download"></i> CSV'
                //     }
                // ],
                "processing": true,
                "serverSide": true,
                "ordering": false, 
                "paging":   false,
                "bLengthChange": false,
                "info":     false,
                "searching" : false,
                // oLanguage: {
                            
                //             sProcessing: '<div class="spinners"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></div>'},

                "ajax": {

                    "url": "<?php echo base_url('pm/selisih_pm_gap')?>",
                    "type": "POST",
                    // "data": function(data){
                    //   data.tgl=$('input[name=tgl2]').val();
                    //   data.kategori=$('#kategori').val();
                    //   data.regional=$('#regional').val();
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
                  // "rowsGroup": [1],
                "deferRender": true,
                });
             $.fn.dataTable.ext.errMode = 'none';
          })
			</script>
			

<?= $this->endSection() ?>