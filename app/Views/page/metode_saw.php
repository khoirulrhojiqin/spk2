<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
<style type="text/css">
	.ui-autocomplete-input {
  /*border: none; */
  /*font-size: 14px;*/
  /*width: 300px;*/
  /*height: 24px;*/
  /*margin-bottom: 5px;*/
  /*padding-top: 2px;
  border: 1px solid #DDD !important;
  padding-top: 0px !important;*/
  z-index: 1511;
  position: relative;
}
.ui-menu .ui-menu-item a {
  font-size: 12px;
}
.ui-autocomplete {
  position: fixed;
  top: 100%;
  left: 0;
  z-index: 1051 !important;
  float: left;
  display: none;
  min-width: 160px;
  width: 160px;
  padding: 4px 0;
  margin: 2px 0 0 0;
  list-style: none;
  background-color: #ffffff;
  border-color: #ccc;
  border-color: rgba(0, 0, 0, 0.2);
  border-style: solid;
  border-width: 1px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;
}
.ui-menu-item > a.ui-corner-all {
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 18px;
    color: #555555;
    white-space: nowrap;
    text-decoration: none;
}
.ui-state-hover, .ui-state-active {
      color: #ffffff;
      text-decoration: none;
      background-color: #0088cc;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      background-image: none;
}

</style>
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
								<a href="#">SAW</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Alternatif</h4>
										<!-- <div class="btn btn-group"> -->
											<button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addRowModal">
												<i class="fa fa-plus"></i>
												Add Alternatif
											</button>&nbsp;
											<div id="btn_next"> </div>
											<!-- <a href="<?php //echo base_url('/saw/result_saw')?>" type="button" class="btn btn-success">
												<i class="fas fa-angle-double-right"></i>
												Hitung Hasil
											</a> -->
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
									<!-- Modal AddData-->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Alternatif
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- <p class="small">Create a new row using this form, make sure you fill them all</p> -->
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name Mahasiswa</label>
																	<input id="addName" name="addName" type="text" class="form-control" placeholder="nama" required>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>IPK (K01)</label>
																		<select name="addIpk" id="addIpk" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <!-- <option value="5">3.51 - 4.00</option>
							                                                <option value="4">3.01 - 3.50</option>
							                                                <option value="3">2.53 - 3.00</option>
							                                                <option value="2">2.04 - 2.50</option>
							                                                <option value="1">1.01 - 2.00</option> -->
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nilai Matkul (K02)</label>
																		<select name="addMatkul" id="addMatkul" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <!-- <option value="5">A</option>
							                                                <option value="4">A-</option>
							                                                <option value="3">B</option>
							                                                <option value="2">B-</option>
							                                                <option value="1">C</option> -->
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Sertifikat (K03)</label>
																		<select name="addSertifikat" id="addSertifikat" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="3">Ada</option>
							                                                <option value="0">Tidak Ada</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Kompetensi (K04)</label>
																		<select name="addKompetensi" id="addKompetensi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Pengalaman (K05)</label>
																		<select name="addSuara" id="addSuara" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Penguasaan Materi (K06)</label>
																		<select name="addPeng_materi" id="addPeng_materi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Penyampaian Materi (K07)</label>
																		<select name="addPeny_materi" id="addPeny_materi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Sikap (K08)</label>
																		<select name="addSikap" id="addSikap" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Interaksi (K09)</label>
																		<select name="addInteraksi" id="addInteraksi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Teamwork (K10)</label>
																		<select name="addKomitmen" id="addKomitmen" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Suara (K11)</label>
																		<select name="addKonsisten" id="addKonsisten" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Karakter (K12)</label>
																		<select name="addKarakter" id="addKarakter" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<!-- <div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Position</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Office</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="fill office">
																</div>
															</div> -->
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal EditData -->
									<div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Edit</span> 
														<span class="fw-light">
															User
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- <p class="small">Create a new row using this form, make sure you fill them all</p> -->
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="editId" name="editId" type="hidden" class="form-control" readonly>
																	<input id="editName" name="editName" type="text" class="form-control" placeholder="nama" required>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>IPK (K01)</label>
																		<select name="editIpk" id="editIpk" class="form-control" required>
							                                                <option>-Pilih-</option>
							                                                <option value="5">3.51 - 4.00</option>
							                                                <option value="4">3.01 - 3.50</option>
							                                                <option value="3">2.53 - 3.00</option>
							                                                <option value="2">2.04 - 2.50</option>
							                                                <option value="1">1.01 - 2.00</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nilai Matkul (K02)</label>
																		<select name="editMatkul" id="editMatkul" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">A</option>
							                                                <option value="4">A-</option>
							                                                <option value="3">B</option>
							                                                <option value="2">B-</option>
							                                                <option value="1">C</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Sertifikat (K03)</label>
																		<select name="editSertifikat" id="editSertifikat" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="3">Ada</option>
							                                                <option value="0">Tidak Ada</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Kompetensi (K04)</label>
																		<select name="editKompetensi" id="editKompetensi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Pengalaman (K05)</label>
																		<select name="editSuara" id="editSuara" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Penguasaan Materi (K06)</label>
																		<select name="editPeng_materi" id="editPeng_materi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Penyampaian Materi (K07)</label>
																		<select name="editPeny_materi" id="editPeny_materi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Sikap (K08)</label>
																		<select name="editSikap" id="editSikap" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Interaksi (K09)</label>
																		<select name="editInteraksi" id="editInteraksi" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Teamwork (K10)</label>
																		<select name="editKomitmen" id="editKomitmen" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Suara (K11)</label>
																		<select name="editKonsisten" id="editKonsisten" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Karakter (K12)</label>
																		<select name="editKarakter" id="editKarakter" class="form-control" required>
							                                                <option >-Pilih-</option>
							                                                <option value="5">Sangat Baik</option>
							                                                <option value="4">Baik</option>
							                                                <option value="3">Cukup</option>
							                                                <option value="2">Kurang</option>
							                                                <option value="1">Sangat Kurang</option>
							                                             </select>
																</div>
															</div>

														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="editRowButton" class="btn btn-primary">Edit</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									

									<div class="table-responsive">
										<button style="float: right;" class="btn btn-default ml-auto btn-xs btn-border" id="reset_saw">
												<i class="fa fa-trash"></i>
												Reset
										</button><br>
										<table id="add-row" class="display table table-striped table-hover table-head-bg-primary mt-4" >
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
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody id="show_data">
												<!-- <?php //$i=1; foreach($user as $row): ?>
												<tr>
													<td><?php //echo$i++?></td>
					                                <td><?php //echo $row->nama; ?></td>
					                                <td><?php //echo $row->username; ?></td>
					                                <td><?php //echo $row->role; ?></td>
					                                <td><?php //echo $row->status; ?></td>
					                                <td><?php //echo $row->role_id; ?></td>
					                                <td><?php //echo $row->aktif; ?></td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>

															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
												<?php //endforeach; ?> -->
											</tbody>
										</table>
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
					$("#addName").autocomplete({
			              source: "<?php echo base_url('/pm/get_mahasiswa/?');?>"
			            });
				});

				document.getElementsByName("addName")[0].addEventListener('change', doThing);
					function doThing(){
		                var id=$(this).val();
		                $.ajax({
		                    url : "<?php echo site_url('/pm/get_sub_category');?>",
		                    method : "POST",
		                    data : {id: id},
		                    async : true,
		                    dataType : 'json',
		                    success: function(data){
		                        // alert(data);
		                        var html = '';
		                        var html2 = '';
		                        var i;
		                        for(i=0; i<data.length; i++){
		                        	if (data[i].n_matkul==5) {
		                        		var matkul = 'A+'; 
		                        	}else if (data[i].n_matkul==4) {
		                        		var matkul = 'A';
		                        	}else if (data[i].n_matkul==3) {
		                        		var matkul = 'A-';
		                        	}else if (data[i].n_matkul==2) {
		                        		var matkul = 'B+';
		                        	}else if (data[i].n_matkul==1) {
		                        		var matkul = 'B';
		                        	}
		                            html += '<option value='+data[i].n_ipk+'>'+data[i].n_ipk+'</option>';
		                            html2 += '<option value='+data[i].n_matkul+'>'+matkul+'</option>';
		                        }
		                        $('#addIpk').html(html);
		                        $('#addMatkul').html(html2);
		 
		                    }
		                });
		                return false;
		            }; 
				// let result = document.getElementById('addMatkul')
				// let select = document.getElementById('addIpk')
			
				// function load(nilai){
				// 	// for(i=0; i< nilai; i++){
				// 		if ($('#addIpk').val()=='5') {
				// 			result.innerHTML += "<option value='5'>A</option>"
				// 		}else if ($('#addIpk').val()=='4'){
				// 			result.innerHTML += "<option value='4'>A-</option>"
				// 		}else if ($('#addIpk').val()=='3'){
				// 			result.innerHTML += "<option value='3'>B</option>"
				// 		}else if ($('#addIpk').val()=='2'){
				// 			result.innerHTML += "<option value='2'>B-</option>"
				// 		}else if ($('#addIpk').val()=='1'){
				// 			result.innerHTML += "<option value='1'>C</option>"
				// 		}else{

				// 		}
						
				// 	// }
				// }
				
				// select.addEventListener('change', function(){
				// 	let nilai = select.value
				// 	result.innerHTML = ""
				// 	load(nilai)
				// })
			</script>
			<script type="text/javascript">
				$(document).ready(function() {
					tampil_data();
					function tampil_data(){
		            $.ajax({
		            	processing: true,
               			serverSide: true,
		                type  : 'GET',
		                url   : '<?php echo base_url()?>/Saw/show_saw_normalisasi',
		                async : true,
		                dataType : 'json',
		                success : function(data){
		                    var html = '';
		                    var html2 = '';
		                    var i;
		                    for(i=0; i<data.length; i++){
		                    // var link = '<?php //echo base_url()?>menu/menu/roleAccess/'+data[i].id;
		                        html += '<tr>'+
		                                '<td>'+(i+1)+'</td>'+
		                                '<td>'+data[i].alternatif+'</td>'+
		                                '<td>'+data[i].k1+'</td>'+
		                                '<td>'+data[i].k2+'</td>'+
		                                '<td>'+data[i].k3+'</td>'+
		                                '<td>'+data[i].k4+'</td>'+
		                                '<td>'+data[i].k5+'</td>'+
		                                '<td>'+data[i].k6+'</td>'+
		                                '<td>'+data[i].k7+'</td>'+
		                                '<td>'+data[i].k8+'</td>'+
		                                '<td>'+data[i].k9+'</td>'+
		                                '<td>'+data[i].k10+'</td>'+
		                                '<td>'+data[i].k11+'</td>'+
		                                '<td>'+data[i].k12+'</td>'+
		                                '<td>'+
		                                    // '<a href="'+link+'" class="btn btn-primary btn-xs"><i class="fa fa-wrench"></i></a>'+' '+
		                                    '<div class="btn btn-group"><a href="javascript:;" data-toggle="tooltip" class="btn btn-link btn-primary btn-xs item_edit" data-original-title="Edit Task" data="'+data[i].id_normalisasi+'"><i class="fa fa-edit"></i></a>'+
		                                    
		                                    '<a href="javascript:;" data-toggle="tooltip" class="btn btn-link btn-danger btn-xs item_hapus" data-original-title="Remove" data="'+data[i].id_normalisasi+'"><i class="fa fa-times"></i></a></div>'+
		                                '</td>'+
		                                '</tr>';
		                          
		                    }
		                    if (data.length>0) {
		                    	html2 += '<a href="<?php echo base_url('/saw/result_saw')?>" type="button" class="btn btn-success"><i class="fas fa-angle-double-right"></i>Hitung Hasil</a>';
		                    }
		                    
		                    $('#show_data').html(html);
		                    $('#btn_next').html(html2);
		                    $('#add-row').dataTable({
		                        "searching": false,
		                        "paging":   false,
		                        "bLengthChange": false,
		                        // "info":     false,
		                        "ordering": false,
		                    });
		                    $.fn.dataTable.ext.errMode = 'none';

		                }
		 
		            });
		        }
				
					$('#addRowButton').click(function(){
		            var name=$('#addName').val();
		            var ipk=$('#addIpk').val();
		            var matkul=$('#addMatkul').val();
		            var sertifikat=$('#addSertifikat').val();
		            var kompetensi=$('#addKompetensi').val();
		            var suara=$('#addSuara').val();
		            var peng_materi=$('#addPeng_materi').val();
		            var peny_materi=$('#addPeny_materi').val();
		            var sikap=$('#addSikap').val();
		            var interaksi=$('#addInteraksi').val();
		            var komitmen=$('#addKomitmen').val();
		            var konsisten=$('#addKonsisten').val();
		            var karakter=$('#addKarakter').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('/saw/simpan_kriteria')?>",
		                dataType : "JSON",
		                data : {alternatif:name, k1:ipk, k2:matkul, k3:sertifikat, k4:kompetensi, k5:suara, k6:peng_materi, k7:peny_materi, k8:sikap, k9:interaksi, k10:komitmen, k11:konsisten, k12:karakter},
		                success: function(data){
		                	if (data=='gagal') {
		                		$('#addRowModal').modal('hide');
		                		$.notify({
									icon: 'flaticon-add-user',
									title: 'Gagal',
									message: 'Gagal menambahkan!',
								},{
									type: 'danger',
									placement: {
										from: "top",
										align: "right"
									},
									time: 1000,
								});
		                	}else{
		                		$('#addName').val("");$('#addIpk').val("");$('#addMatkul').val("");$('#addSertifikat').val("");$('#addKompetensi').val("");$('#addSuara').val("");$('#addPeng_materi').val("");$('#addPeny_materi').val("");$('#addSikap').val("");$('#addInteraksi').val("");$('#addKomitmen').val("");$('#addKonsisten').val("");$('#addKarakter').val("");
			                    $('#addRowModal').modal('hide');
			                    tampil_data();
			                    $.notify({
									icon: 'flaticon-add-user',
									title: 'Success',
									message: 'Berhasil menambahkan!',
								},{
									type: 'info',
									placement: {
										from: "top",
										align: "right"
									},
									time: 1000,
								});
		                	}
		                }
		            });
		            return false;
		       		});

		       		//GET HAPUS
			        $(document).on('click', '.item_hapus', function(){
			          var id = $(this).attr('data');
			          swal({
			              title: "Kamu Yakin?",
			              text: "Data akan terhapus.",
			              icon: "warning",
			              buttons: true,
			              dangerMode: true,
			            })
			            .then((willDelete) => {
			              if (willDelete) {
			                  $.ajax({
			                      url : "<?php echo base_url(); ?>/saw/hapus_kriteria",
			                      method :"POST",
			                      data : {id:id},
			                      success : function(data){
			                          
			                          swal("Data berhasil dihapus!", {
			                          icon: "success",
			                          });
			                              tampil_data();
			                      },
			            
			                    })
			                  
			              } else {
			                swal("Hapus dibatalkan!");
			              }
			            });
			        });
			        //GET UPDATE
			        $('#show_data').on('click','.item_edit',function(){
			            var id=$(this).attr('data');
			            $.ajax({
			                type : "GET",
			                url  : "<?php echo base_url()?>/saw/get_kriteria",
			                dataType : "JSON",
			                data : {id:id},
			                success: function(data){
			                    $.each(data,function(id, menu){
			                        $('#editRowModal').modal('show');
			                        $('[name="editId"]').val(data.id_normalisasi);
			                        $('[name="editName"]').val(data.alternatif);
			                        $('[name="editIpk"]').val(data.k1).selected = 'selected';
			                        $('[name="editMatkul"]').val(data.k2).selected = 'selected';
			                        $('[name="editSertifikat"]').val(data.k3).selected = 'selected';
			                        $('[name="editKompetensi"]').val(data.k4).selected = 'selected';
			                        $('[name="editSuara"]').val(data.k5).selected = 'selected';
			                        $('[name="editPeng_materi"]').val(data.k6).selected = 'selected';
			                        $('[name="editPeny_materi"]').val(data.k7).selected = 'selected';
			                        $('[name="editSikap"]').val(data.k8).selected = 'selected';
			                        $('[name="editInteraksi"]').val(data.k9).selected = 'selected';
			                        $('[name="editKomitmen"]').val(data.k10).selected = 'selected';
			                        $('[name="editKonsisten"]').val(data.k11).selected = 'selected';
			                        $('[name="editKarakter"]').val(data.k12).selected = 'selected';
			                    });
			                }
			            });
			            return false;
			        });
			        //Update User
			        $('#editRowButton').on('click',function(){
			            var id = $('#editId').val();
			            var name = $('#editName').val();
			            var k1 = $('#editIpk').val();
			            var k2 = $('#editMatkul').val();
			            var k3 = $('#editSertifikat').val();
			            var k4 = $('#editKompetensi').val();
			            var k5 = $('#editSuara').val();
			            var k6 = $('#editPeng_materi').val();
			            var k7 = $('#editPeny_materi').val();
			            var k8 = $('#editSikap').val();
			            var k9 = $('#editInteraksi').val();
			            var k10 = $('#editKomitmen').val();
			            var k11 = $('#editKonsisten').val();
			            var k12 = $('#editKarakter').val();
			            $.ajax({
			                type : "POST",
			                url  : "<?php echo base_url('/saw/update_kriteria')?>",
			                dataType : "JSON",
			                data : {id:id, name:name, k1:k1, k2:k2, k3:k3, k4:k4, k5:k5, k6:k6, k7:k7, k8:k8, k9:k9, k10:k10, k11:k11, k12:k12},
			                success: function(data){
			                    // $('[name="editId"]').val("");
			                    // $('[name="editName"]').val("");
			                    // $('[name="editRole"]').val("");
			                    // $('[name="editUsername"]').val("");
			                    $('#editRowModal').modal('hide');
			                    tampil_data();
			                    $.notify({
									icon: 'flaticon-add-user',
									title: 'Success',
									message: 'Edit Berhasil!',
								},{
									type: 'info',
									placement: {
										from: "top",
										align: "right"
									},
									time: 1000,
								});
			                }
			            });
			            return false;
			        });
			        //GET UPDATE Pass
			        // $('#show_data').on('click','.item_edit_pass',function(){
			        //     var id=$(this).attr('data');
			        //     $.ajax({
			        //         type : "GET",
			        //         url  : "<?php //echo base_url('/user/get_user')?>",
			        //         dataType : "JSON",
			        //         data : {id:id},
			        //         success: function(data){
			        //             $.each(data,function(id, menu){
			        //                 $('#editPassRowModal').modal('show');
			        //                 $('[name="editPassId"]').val(data.id);
			        //             });
			        //         }
			        //     });
			        //     return false;
			        // });
			        //Update Password
			     //    $('#editPassRowButton').on('click',function(){
			     //        var id = $('#editPassId').val();
			     //        var pass = $('#editPass').val();
			     //        $.ajax({
			     //            type : "POST",
			     //            url  : "<?php //echo base_url('/user/update_password')?>",
			     //            dataType : "JSON",
			     //            data : {id:id , pass:pass},
			     //            success: function(data){
			     //                $('[name="editId"]').val("");
			     //                $('[name="editPass"]').val("");
			     //                $('#editPassRowModal').modal('hide');
			     //                tampil_data();
			     //                $.notify({
								// 	icon: 'flaticon-add-user',
								// 	title: 'Success',
								// 	message: 'Berhasil mengganti password!',
								// },{
								// 	type: 'info',
								// 	placement: {
								// 		from: "top",
								// 		align: "right"
								// 	},
								// 	time: 1000,
								// });
			     //            }
			     //        });
			     //        return false;
			     //    });
			        // Reset saw
			        $('#reset_saw').on('click',function(){
			          swal({
			              title: "Kamu Yakin?",
			              text: "Data akan direset.",
			              icon: "warning",
			              buttons: true,
			              dangerMode: true,
			            })
			            .then((willDelete) => {
			              if (willDelete) {
			                  $.ajax({
			                      url : "<?php echo base_url(); ?>/saw/reset_data",
			                      method :"POST",
			                      // data : {id:id},
			                      success : function(data){
			                          
			                          swal("Data berhasil dihapus!", {
			                          icon: "success",
			                          });
			                              tampil_data();
			                      },
			            
			                    })
			                  
			              } else {
			                swal("Reset dibatalkan!");
			              }
			            });
			            });

				});
			</script>

<?= $this->endSection() ?>