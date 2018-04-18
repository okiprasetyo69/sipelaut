<section id="content">
     <div class="container">
          <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header" align="center"> <b>Data Rekapitulasi Jenis Pajak Hotel</b> </h4>
              <button class="waves-effect waves-light btn modal-trigger" data-target="modalobjekpajak">Tambah</button>
              &nbsp; &nbsp;
              <button class="btn waves-effect waves-light light-blue darken-4">Report</button>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col s12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Wajib Pajak</th>
                            <th>Jenis Pajak</th>
                            <th>Kode Bill</th>
                            <th>Tanggal Invoice</th>
                            <th>Omset Pada Bill</th>
                            <th>Tanggal Rekapitulasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>                 
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div> 
            <br>
          </div> 
        </div>
    </div>
    

  <!-- Modal Structure -->
  <div id="modalobjekpajak" class="modal">
    <div class="modal-content">
      <h4>Tambah Data Rekapitulasi Bill Hotel</h4>

      <div class="row">
        <form class="col s12">
          <div class="row modal-form-row">
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>-- Pilih Nama Wajib Pajak --</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <div class="row modal-form-row">
                <div class="input-field col s12">
                  <input id="image_url" type="text" class="validate" value="Hotel" readonly="true">
                  <label for="image_url">Jenis Pajak</label>
                </div>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <div class="row modal-form-row">
                <div class="input-field col s12">
                  <input id="image_url" type="text" class="validate">
                  <label for="image_url">Kode Bill</label>
                </div>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <div class="row modal-form-row">
                <div class="input-field col s12">
                  <input id="image_url" type="text" class="datepicker">
                  <label for="image_url">Tanggal Invoice</label>
                </div>
               </div>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s12">
              <div class="row modal-form-row">
                <div class="input-field col s12">
                  <input id="image_url" type="text" class="validate">
                  <label for="image_url">Omset Pada Bill</label>
                </div>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <div class="row modal-form-row">
                <div class="input-field col s12">
                  <input id="image_url" type="text" class="datepicker">
                  <label for="image_url">Tanggal Rekap Bill</label>
                </div>
               </div>
            </div>
          </div>              
        </form>
      </div>
    </div>

    <div class="modal-footer">
        <button class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class=" modal-action modal-close waves-effect waves-green btn-flat">Simpan</button>
     
    </div>
  </div>
    
</section>
<script type="text/javascript">
     $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
  });
</script>