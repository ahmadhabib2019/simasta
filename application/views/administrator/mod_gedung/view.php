            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Gedung </h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_gedung'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Kode Gedung</th>
                        <th>Nama Gedung</th>
                        <th>Jumlah Lantai</th>
                        <th>Panjang</th>
                        <th>Tinggi</th>
                        <th>Lebar</th>
                        <th>Aktif</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $r){
                    echo "<tr><td>$no</td>
                              <td class='info'>$r[kode_gedung]</td>
                              <td>$r[nama_gedung]</td>
                              <td>$r[jumlah_lantai] Lantai</td>
                              <td>$r[panjang] Meter</td>
                              <td>$r[tinggi] Meter</td>
                              <td>$r[lebar] Meter</td>
                              <td>$r[aktif]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_gedung/$r[id_gedung]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_gedung/$r[id_gedung]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                              </tr>";
                      $no++;
                      }
                  ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>