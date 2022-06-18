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
								<a href="#">Nilai Akhir</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Nilai Akhir</h4>
										<!-- <div class="btn btn-group"> -->
											<a href="<?=base_url('/pm/cf_sf')?>" type="button" class="btn btn-primary ml-auto">
												<i class="fas fa-angle-double-left"></i>
												Kembali
											</a>&nbsp;
											<button class="btn btn-success" id="simpan_data">
												<i class="fas fa-save"></i>
												Save Rank
											</button>
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
													<!-- <th>#</th> -->
					                                <th>Nama</th>
					                                <th>NCF 20%</th>
					                                <th>NSF 10%</th>
					                                <th>N Total 30%</th>
					                                <th>NCF 20%</th>
					                                <th>NSF 8%</th>
					                                <th>N Total 28%</th>
					                                <th>NCF 20%</th>
					                                <th>NSF 13%</th>
					                                <th>N Total 33%</th>
					                                <th>NCF 5%</th>
					                                <th>NSF 4%</th>
					                                <th>N Total 9%</th>
												</tr>
											</thead>
											<tbody >
											</tbody>
											<tfoot>
												<tr>
													<td></td>
													<td colspan="3">Berkas Administrasi</td>
													<td colspan="3">Tes Kompetensi</td>
													<td colspan="3">Tes Mengajar</td>
													<td colspan="3">Tes Wawancara</td>
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
										<h4 class="card-title">Perangkingan</h4>
									</div>
								</div>
								<div class="card-body">
									
									<div class="table-responsive">
										<table id="add-row" class="cf_sf_hasil display table table-hover table-head-bg-success table-bordered-bd-success mt-4" >
											<thead>
												<tr>
													<!-- <th>#</th> -->
					                                <th>Nama</th>
					                                <th>N Administrasi</th>
					                                <th>N Kompetensi</th>
					                                <th>N Mengajar</th>
					                                <th>N Wawancara</th>
					                                <th>Nilai Akhir</th>
												</tr>
											</thead>
											<tbody >
											</tbody>
											<!-- <tfoot>
												<tr>
													<td></td>
													<td colspan="2">Berkas Administrasi</td>
													<td colspan="2">Tes Kompetensi</td>
													<td colspan="2">Tes Mengajar</td>
													<td colspan="2">Tes Wawancara</td>
												</tr>
											</tfoot> -->
										</table>
									</div>
								</div>
							</div>
						</div>


						<!-- <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Kesimpulan</h4>
									</div>
								</div>
								
							</div>
						</div> -->
						<div class="card-body">
									<div class="col-sm-6 col-md-6">
										<div class="card card-stats card-success card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-success"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															
															<p class="card-category" id="huruf"></p>
															<h4 class="card-title" id="angka"></h4>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


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

                    "url": "<?php echo base_url('pm/get_nilai_akhir')?>",
                    "type": "POST",
                    // "dataType": 'json',
                    // "success": function(data){
                    //   // var rep = JSON.parse(data.data);
                  	 //  // alert(rep.name);
                    //   console.log(data);
                    // }
                },
                // "createdRow": function( row, data2, dataIndex ) {
                // console.log(data2[0]);
                 // if ( data[2] == "Total") {        
                 //       $(row).addClass('colors2');
                 //     }
                 //     // else if ( data[0] == "Sumbagut") {        
                 //     //   $(row).addClass('colors2');
                 //     // }
                  // },
                "deferRender": true,
                });
             $.fn.dataTable.ext.errMode = 'none';
          	});

          	$(document).ready(function(){
	          	$.ajax({
				    type: 'POST',
				    url: '<?php echo base_url('pm/get_nilai_perangkingan')?>',
				    success: function(result) {
				    	var newData = JSON.parse(result)
				        var data = newData.data2[0][0];
				        var data2 = newData.data2[0][1];
				        $("#huruf").html(data);
				        $("#angka").html(data2);
				    }
				});
              var table = $('.cf_sf_hasil').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false, 
                "paging":   false,
                "bLengthChange": false,
                "info":     false,
                "searching" : false,
                "ajax": {

                    "type": "POST",
                    "url": "<?php echo base_url('pm/get_nilai_perangkingan')?>",
                    "dataType": 'json',
         //             "success": function(result) {
				     //    var data = jQuery.parseJSON(JSON.stringify(result.data2[0][0]));
				     //    console.log(data);
				     // }
                    
                },
               
                });
             $.fn.dataTable.ext.errMode = 'none';

             $('#simpan_data').on('click',function(){
		          swal({
		              title: "Simpan Data ?",
		              // text: "Simpan Data ?",
		              icon: "info",
		              buttons: true,
		              dangerMode: false,
		            })
		            .then((willSave) => {
		              if (willSave) {
		                  $.ajax({
		                      url : "<?php echo base_url(); ?>/pm/simpan_data",
		                      method :"POST",
		                      // data : {id:id},
		                      success : function(data){
		                          
		                          swal("Data berhasil disimpan!", {
		                          icon: "success",
		                          });
		                              // tampil_data();
		                      },
		            
		                    })
		                  
		              } else {
		                swal("Simpan dibatalkan!");
		              }
		            });
		            });

          	})
			</script>
			

<?= $this->endSection() ?>