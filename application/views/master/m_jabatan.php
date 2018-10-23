<?php

/* 
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : 
 * Email : 
 * Website : www.usahadong.com
 * Description : 
 * ***************************************************************
 */

?>
 <!-- DATA TABES SCRIPT -->
    <script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.min.js');?>" type="text/javascript"></script>
	
<div class="container-fluid">

  <div class="table-responsive col-lg-11">
   <!-- Content Header (Page header) -->
        
          
               
<section class="content  ">
    <div class="form-group col-lg-12">
            
<div class="form-group col-lg-8  ">
        
                <div class="panel panel-default">
                <div class="panel-body ">
                   <div class="form-group col-lg-10">
                      <h3>List Jabatan</h3>
                      
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                                <tr>
                                    <td>No </td><td > Kode jabatan</td><td >Nama jabatan</td><td>Keterangan</td><td>Tanggal Berlaku</td><td>Tanggal Berakhir</td><td> Action</td>
                                </tr>     
                          </thead>
                          <tbody>
                             <?php     
                                    $no=1;
                                    foreach($data as $baris){
                                        
                                        
                                        $noa=$no++;
                                        echo"
                                            <tr><td>$noa</td>
                                                <td>$baris->idjabatan</td>
                                                <td>$baris->namajabatan</td>
                                                <td>$baris->keterangan</td>
                                                <td>$baris->validfrom</td>
                                                <td>$baris->validto</td>
                                                   
                                                   ";
                                                 echo "<td align='center'>   
                                                        <a href=\"".base_url()."master/m_Editjabatan/".$baris->idjabatan."\">
                                                        Edit</a>
                                                       </td> 
                                               ";
                                        echo"                                            </tr>     
                                            ";    
                                    }
                                    
                              ?>
                              
                          </tbody>    
                      </table>
                       <div class="col-lg-12" align="right">
                        
                     </div>
                  </div> 
                </div> 
              </div>
</div>    
<div class="form-group col-lg-4 ">
        
                <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Input Kode Jabatan</h4> 
                    <hr>   
                    <?php
                                    $attributes = array('role' => 'form', 'idjabatan' => 'formadd');
                                    echo form_open('master/simpanJabatan',$attributes); 
                   ?>   <?php echo validation_errors('<div class="alert alert-danger col-md-12"><button class="close" data-dismiss="alert" type="button">×</button>','</div>'); ?>
                        <div class="form-group col-lg-12">
                            <label for="txtnojabatan">No Kode jabatan</label>
                            <input type="text" class="form-control"
                                   id="txtnojabatan" name="txtnojabatan" disabled="">
                        </div>
                                        
                        <div class="form-group col-lg-12">
                            <label for="txtnamajabatan">Nama jabatan</label>
                            <input type="text" class="form-control"                                id="txtnamajabatan" name="txtnamajabatan" placeholder="Masukan nama kode jabatan">
                        </div>
                       
                        
                        <div class="form-group col-lg-12">
                            <label for="txtketerangan">Keterangan</label>
                            <textarea class="form-control" rows="1" cols="20" name="txtketerangan" id="txtketerangan" placeholder="Keterangan tentang Jabatan"></textarea>
                        </div>
                          <div class="form-group col-lg-6">
                  <label for="validfrom">Tanggal Berlaku</label>
                        <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                 <span class="input-group-addon" id=".input-group.date"><i class="glyphicon glyphicon-calendar"></i></span>  
                                <input class="form-control" type="text" name="txttglberlaku" id="txttglberlaku">                         
                        </div>
                </div>
        
                <div class="form-group col-lg-6">
                  <label for="validfrom">Tanggal Berakhir</label>
                        <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                 <span class="input-group-addon" id=".input-group.date"><i class="glyphicon glyphicon-calendar"></i></span>  
                                <input class="form-control" type="text" name="txttglberakhir" id="txttglberakhir">                         
                        </div>
                </div>
                        <div class="form-group col-lg-12">
                           <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    
                        
                </div> 
              </div>
</div>    
                        
</div>                        
                        <script src="<?=base_url('assets/plugins/jQuery/jquery.js');?>" type="text/javascript"></script>
                          
                        <script src="<?=base_url('assets/plugins/datepicker/bootstrap-datepicker3.js');?>" type="text/javascript"></script>
                        <script>
                           //options method for call datepicker
                           $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
                        </script> 
 </section>             
 <br>