<?php
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_tracer_alumni',$attributes); 
                echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$s[id_traceralumni]'>
                    <tr><th width='140px' scope='row'>Nama</th> <td><input type='text' class='form-control' name='a' value='$s[nama]'> </td></tr>
                    <tr><th scope='row'>Email</th>  <td><input type='email' class='form-control' name='f' value='$s[email]'></td></tr>
                    <tr><th scope='row'>No Hp</th>  <td><input type='number' class='form-control' name='g' value='$s[no_hp]'></td></tr>
                    <tr><th scope='row'>Alamat</th>    <td><input type='text' class='form-control' name='e' value='$s[alamat]'></td></tr>

                    <tr><th scope='row'>Tahun Lulus</th>       <td><input type='number' class='form-control' name='b' value='$s[tahun_lulus]'></td></tr>
                    <tr><th scope='row'>Tahun Masuk</th>    <td><input type='number' class='form-control' name='c' value='$s[tahun_masuk]'></td></tr>
                    <tr><th scope='row'>Tempat Bekerja</th>    <td><textarea class='form-control' name='d'>$s[tempat_bekerja]</textarea></td></tr>
                    <tr><th scope='row'>Alamat Kantor</th>    <td><input type='text' class='form-control' name='j' value='$s[alamat_kantor]'></td></tr>
                    <tr><th scope='row'>Jabatan / Pekerjaan</th>  <td><textarea class='form-control' name='h'>$s[jabatan_pekerjaan]</textarea></td></tr>
                    <tr><th scope='row'>Keterangan</th>           <td><textarea class='form-control' name='i'>$s[keterangan]</textarea></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url()."".$this->uri->segment(1)."/tracer_alumni'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
              </div>";
              echo form_close();
            echo "</div>";
            
