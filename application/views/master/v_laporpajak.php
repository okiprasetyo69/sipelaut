<section id="content">
     <div class="container">
          <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header" align="center"> <b>Data Lapor Pajak </b> </h4>
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
                            <th>Total Lapor</th>
                            <th>Masa Pajak</th>
                            <th>Tanggal Lapor</th>
                            <th> Aksi </th>
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
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
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
      <h4>Tambah Data Lapor Pajak</h4>

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
                 <select>
                    <option value="" disabled selected>-- Pilih Jenis Pajak --</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
            </div>
          </div>
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="image_url" type="text" class="validate">
              <label for="image_url">Total Lapor</label>
            </div>
          </div>
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <select>
                    <option value="" disabled selected> -- Pilih Masa Pajak --</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
            </div>
          </div>
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="image_url" type="text" class="datepicker">
              <label for="image_url">Tanggal Lapor</label>
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

  //    $('.timepicker').pickatime({
  //       default: 'now', // Set default time: 'now', '1:30AM', '16:30'
  //       fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
  //       twelvehour: false, // Use AM/PM or 24-hour format
  //       donetext: 'OK', // text for done-button
  //       cleartext: 'Clear', // text for clear-button
  //       canceltext: 'Cancel', // Text for cancel-button
  //       autoclose: false, // automatic close timepicker
  //       ampmclickable: true, // make AM PM clickable
  //       aftershow: function(){} //Function for after opening timepicker
  // });
</script>