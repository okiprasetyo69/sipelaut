<section id="content">
     <div class="container">
          <div class="section">
            <!--DataTables example-->
            <h4 class="header" align="center"> <b>Report Rekapitulasi Hotel</b> </h4>
            <div class="row">
              <h5 class="header">Cari Data Rekapitulasi : </h5> 
              <div class="input-field col s2">
                 <button class="btn waves-effect waves-light red darken-1"> + </button>
                 <button class="btn waves-effect waves-light purple darken-4"> - </button> 
              </div>
              <div class="input-field col s2">
                  <button class="btn waves-effect waves-light light-blue darken-4">Export PDF</button>
              </div>
              <div class="input-field col s4">
                  <button class="btn waves-effect waves-light orange darken-4">Export Excel</button>
              </div>
            </div>           
            <div class="row">
              <div class="input-field col s2">
                <select>
                  <option value="" disabled selected>-- Pilih Nama WP --</option>
                  <option value="1">Option 1</option> 
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>             
              </div>
              <div class="input-field col s2">
                  <input type="text" class="datepicker">
                  <label for="image_url">Tanggal Awal</label>
              </div>
               <div class="input-field col s2">
                  <input type="text" class="datepicker">
                  <label for="image_url">Tanggal Akhir</label>
              </div>
              <div class="input-field col s2">
                  <input type="text" class="validate">
                  <label for="image_url">Masa Pajak</label>
              </div>
              <div class="input-field col s2">
                  <input type="text" class="validate">
                  <label for="image_url">Tahun Pajak</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s2">
                  <button class="btn waves-effect waves-light orange darken-1">Cari Data</button>
              </div>
            </div>
            <hr>
            <div id="table-datatables">
              <div class="row">
                <div class="col s12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Wajib Pajak</th>
                            <th>Lapor Pajak</th>
                            <th>Pajak Pada Bill</th>
                            <th>Kurang Bayar</th>
                            <th>Lebih Bayar</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>                 
                    <tbody id="showdata">
                       
                        
                    </tbody>
                  </table>
                </div>
            </div> 
            <br>
          </div> 
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
