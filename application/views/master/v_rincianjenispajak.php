<section id="content">
     <div class="container">
          <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header" align="center"> <b>Data Rincian Jenis Pajak Hotel</b> </h4>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>                 
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
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
      <h4>Tambah Data Rincian</h4>

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
