<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Berkas Mahasiswa</h4>
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
								<a href="#">Home</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Berkas Mahasiswa</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>#</th>
					                                <th>NIM</th>
					                                <th>Nama</th>
					                                <th>Transkrip</th>
					                                <th>Sertifikat</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody id="show_data">
												
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
				$(document).ready(function() {
					tampil_data();
					function tampil_data(){
		            $.ajax({
		                type  : 'GET',
		                url   : '<?php echo base_url()?>/berkas/show_berkas',
		                async : true,
		                dataType : 'json',
		                success : function(data){
		                    var html = '';
		                    var i;
		                    for(i=0; i<data.length; i++){
		                        html += '<tr>'+
		                                '<td>'+(i+1)+'</td>'+
		                                '<td>'+data[i].nip_nim+'</td>'+
		                                '<td>'+data[i].nama+'</td>'+
		                                '<td>'+data[i].transkrip+'</td>'+
		                                '<td>'+data[i].sertifikat+'</td>'+
		                                '<td>'+
		                                    // '<a href="'+link+'" class="btn btn-primary btn-xs"><i class="fa fa-wrench"></i></a>'+' '+
		                                    '<div class="btn btn-group"><a href="javascript:;" data-toggle="tooltip" class="btn btn-primary btn-xs show_file_1" data-original-title="Edit Task" data="'+data[i].id+'"><i class="fa fa-file"></i> Transkrip</a>'+
		                                    '<a href="javascript:;" data-toggle="tooltip" class="btn btn-success btn-xs show_file_2" data-original-title="Edit Task" data="'+data[i].id+'"><i class="fa fa-file"></i> Sertifikat</a>'+
		                                '</td>'+
		                                '</tr>';
		                    }
		                    $('#show_data').html(html);
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
				
				//GET show File
		        $(document).on('click','.show_file_1',function(){
		            var id=$(this).attr('data');
		            $.ajax({
		                type : "GET",
		                url  : "<?php echo base_url('berkas/get_berkas')?>",
		                dataType : "JSON",
		                data : {id:id},
		                success: function(data){
		                        var pdf = '<?php echo base_url("public/uploads")?>'+'/'+data.transkrip;
		                        window.open(pdf);
		                        return false; 
		                    // });
		                }
		            });
		            return false;
		        });

		        //GET show File
		        $(document).on('click','.show_file_2',function(){
		            var id=$(this).attr('data');
		            $.ajax({
		                type : "GET",
		                url  : "<?php echo base_url('berkas/get_berkas')?>",
		                dataType : "JSON",
		                data : {id:id},
		                success: function(data){
		                        var pdf = '<?php echo base_url("public/uploads")?>'+'/'+data.sertifikat;
		                        window.open(pdf);
		                        return false; 
		                    // });
		                }
		            });
		            return false;
		        });
			        

				});
			</script>

<?= $this->endSection() ?>