<?php
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_kategori',$attributes); 
                echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered table-condensed'>
                  <tbody>
                    <input type='hidden' name='id' value='$s[id_kategori]'>
                    <tr><th width='120px' scope='row'>Kode</th> <td><input type='text' class='form-control' name='a' value='$s[kd_kategori]'> </td></tr>
                    
                    <tr><th scope='row'>Nama kategori</th>        <td><input type='text' class='form-control' name='b' value='$s[nm_kategori]'></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url()."".$this->uri->segment(1)."/kategori'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
              </div>";
              echo form_close();
            echo "</div>";
            
