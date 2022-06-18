<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">SAW</h4>
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
								<a href="#">SAW Result</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Hasil Normalisasi</h4>
										<!-- <div class="btn btn-group"> -->
											<a href="<?=base_url('/saw/index')?>" type="button" class="btn btn-primary ml-auto">
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
												<?php $i=1; foreach($get_saw->getResult() as $row): ?>
												<tr>
													<td><?php echo$i++?></td>
					                                <td><?php echo $row->alternatif; ?></td>
					                                <td><?php echo round($row->k1,2); ?></td>
					                                <td><?php echo round($row->k2,2); ?></td>
					                                <td><?php echo round($row->k3,2); ?></td>
					                                <td><?php echo round($row->k4,2); ?></td>
					                                <td><?php echo round($row->k5,2); ?></td>
					                                <td><?php echo round($row->k6,2); ?></td>
					                                <td><?php echo round($row->k7,2); ?></td>
					                                <td><?php echo round($row->k8,2); ?></td>
					                                <td><?php echo round($row->k9,2); ?></td>
					                                <td><?php echo round($row->k10,2); ?></td>
					                                <td><?php echo round($row->k11,2); ?></td>
					                                <td><?php echo round($row->k12,2); ?></td>
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
										<h4 class="card-title">Hasil Perangkingan</h4>
									</div>
								</div>
								<div class="card-body">
									<?php

									$ad_k1 = 0.12; $ad_k2 = 0.11; $ad_k3 = 0.07; 
									$komp_k1 = 0.15; $komp_k2 = 0.08; $komp_k3 = 0.05; 
									$meng_k1 = 0.1; $meng_k2 = 0.07; $meng_k3 = 0.10; $meng_k4 = 0.06;
									$wan_k1 = 0.06; $wan_k2 = 0.03;  

									?>
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover table-head-bg-success mt-4" >
											<thead>
												<tr>
													<th>#</th>
					                                <th>Alternatif</th>
					                                <th>Rank %</th>
												</tr>
											</thead>
											<tbody >
												<?php 
												// $db = \Config\Database::connect();  
											 //    $tmp = $db->table('m_saw_rank');
											 //    $tmp->truncate(); 

												$i=1; foreach($get_saw->getResult() as $row): 
												$hsl = (($ad_k1*$row->k1)+($ad_k2*$row->k2)+($ad_k3*$row->k3)+($komp_k1*$row->k4)+($komp_k2*$row->k5)+($komp_k3*$row->k6)+($meng_k1*$row->k7)+($meng_k2*$row->k8)+($meng_k3*$row->k9)+($meng_k4*$row->k10)+($wan_k1*$row->k11)+($wan_k2*$row->k12));
												$h = (round($hsl,2)*100).'%';
												
												$tertinggi[] = $hsl.$row->alternatif;

												// Insert rank
											      // $dx = array(
											      //    'nama' => $row->alternatif,
											      //    'rank' => $h
											      //  );
											      //  $result_set = $tmp->insert($dx);

											      // End insert
												?>
												<tr>
													<td><?php echo$i++?></td>
					                                <td><?php echo $row->alternatif; ?></td>
					                                <td><?php echo $h;?></td>
												</tr>
												<?php endforeach; ?>

												<?php 
												// $this->session = \Config\Services::session();
												// $this->session->set('r',$b);
												// $s_max = $this->session->get("r");
												?> 
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
															<?php $str = max($tertinggi); 
																// $numbers = preg_replace('/[^0-9.]/', '', $str);
																// $letters = preg_replace('/[^a-zA-Z ]/', '', $str);

																// print_r($tertinggi);

																$max_1 = $max_2 = 0;
																for ($i=0; $i<count($tertinggi); $i++) {
																    if ($tertinggi[$i] > $max_1) {
																      $max_2 = $max_1;
																      $max_1 = $tertinggi[$i];
																    } else if ($tertinggi[$i] > $max_2 && $tertinggi[$i] != $max_2) {
																      $max_2 = $tertinggi[$i];
																    }
																}

																$n_max1 = preg_replace('/[^0-9.]/', '', $max_1);
																$n_max2 = preg_replace('/[^0-9.]/', '', $max_2);
																if ($n_max1 == $n_max2) {
																	$numbers = preg_replace('/[^0-9.]/', '', $max_1.''.$max_2);
																	$letters = preg_replace('/[^a-zA-Z ]/', '', $max_1.' dan '.$max_2);
																}else{
																	$numbers = preg_replace('/[^0-9.]/', '', $str);
																	$letters = preg_replace('/[^a-zA-Z ]/', '', $str);
																}
																
															 ?>
															<p class="card-category"><?=$letters?></p>
															<h4 class="card-title"><?=(round($numbers,2)*100).'%'?></h4>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						<!-- 	</div>
						</div> -->


					</div>
				</div>
			</div>
			<script src="<?php echo site_url('assets/js/core/jquery.3.2.1.min.js')?>"></script>
			<script src="<?php echo site_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>
			<script type="text/javascript">
				$(document).ready(function(){
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
			                      url : "<?php echo base_url(); ?>/saw/simpan_data",
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

				});
			</script>

<?= $this->endSection() ?>