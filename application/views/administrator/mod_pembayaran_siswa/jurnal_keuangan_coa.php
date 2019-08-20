            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jurnal Keuangan COA </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <form action='' method='POST'>
                <?php 
                    echo "<table class='table table-bordered'>
                      <thead>
                      <tr bgcolor='#e3e3e3'>
                        <th width='40px'>No</th>
                        <th>Kode</th>
                        <th>Nama Coa</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                        <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>";

                    $tampil = $this->db->query("SELECT * FROM rb_keuangan_coa ORDER BY id_coa ASC");
                    $no = 1;
                    foreach ($tampil->result_array() as $r) {
                    $kr1 = $this->db->query("SELECT sum(a.total_bayar) as total FROM `rb_keuangan_bayar` a JOIN rb_keuangan_jenis b ON a.id_keuangan_jenis=b.id_keuangan_jenis where b.id_coa='$r[id_coa]'")->row_array();
                    $kpr = $this->db->query("SELECT sum(a.jumlah_pesan*a.harga_pesan) as total FROM `rb_koperasi_pembelian_detail` a JOIN rb_koperasi_pembelian b ON a.id_pembelian=b.id_pembelian where b.id_coa='$r[id_coa]'")->row_array();
                    $kpr1 = $this->db->query("SELECT sum((a.jumlah_jual*a.harga)-a.diskon) as total FROM `rb_koperasi_penjualan_detail` a JOIN rb_koperasi_penjualan b ON a.id_penjualan=b.id_penjualan where b.id_coa='$r[id_coa]'")->row_array();
                    
                    echo "<tr class='success'><td>$no</td>
                              <td>$r[kode_coa]</td>
                              <td>$r[nama_coa]</td>
                              <td>Rp ".rupiah($db1['debit']+$kpr['total'])."</td>
                              <td>Rp ".rupiah($kr1['total']+$kr2['kredit']+$kpr1['total'])."</td>
                              <td style='font-weight:bold'>Rp ".number_format(($kr1['total']+$kpr1['total'])-($kpr['total']))."</td>
                          </tr>";
                      $no++;
                        $subcoa = $this->db->query("SELECT * FROM rb_keuangan_sub_coa where id_coa='$r[id_coa]' ORDER BY id_sub_coa ASC");
                        foreach ($subcoa->result_array() as $row) {
                          $krs1 = $this->db->query("SELECT sum(a.total_bayar) as total FROM `rb_keuangan_bayar` a JOIN rb_keuangan_jenis b ON a.id_keuangan_jenis=b.id_keuangan_jenis where b.id_coa='$r[id_coa]' AND b.id_sub_coa='$row[id_sub_coa]'")->row_array();
                          
                          $kprs = $this->db->query("SELECT sum(a.jumlah_pesan*a.harga_pesan) as total FROM `rb_koperasi_pembelian_detail` a JOIN rb_koperasi_pembelian b ON a.id_pembelian=b.id_pembelian where b.id_coa='$r[id_coa]' AND b.id_sub_coa='$row[id_sub_coa]'")->row_array();
                          $kprs1 = $this->db->query("SELECT sum((a.jumlah_jual*a.harga)-a.diskon) as total FROM `rb_koperasi_penjualan_detail` a JOIN rb_koperasi_penjualan b ON a.id_penjualan=b.id_penjualan where b.id_coa='$r[id_coa]' AND b.id_sub_coa='$row[id_sub_coa]'")->row_array();

                          echo "<tr><td>-</td>
                                <td>$row[kode_sub_coa]</td>
                                <td>$row[nama_sub_coa]</td>
                                <td>Rp ".rupiah($dbs1['debit']+$kprs['total'])."</td>
                                <td>Rp ".rupiah($krs1['total']+$krs2['kredit']+$kprs1['total'])."</td>
                                <td style='font-weight:bold'>Rp ".rupiah(($krs1['total']+$kprs1['total'])-($kprs['total']))."</td>
                            </tr>";
                        }
                      }
                  ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
              </form>
            </div>