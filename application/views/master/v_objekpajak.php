<section id="content">
     <div class="container">
          <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header" align="center"> <b>Data Objek Pajak</b> </h4>
              <button class="waves-effect waves-light btn modal-trigger" data-target="modalobjekpajak">Tambah</button>
              &nbsp; &nbsp;
              <button class="btn waves-effect waves-light light-blue darken-4">Report</button>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col s12">
                  <table id="tblobjpajak" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama WP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="showdata_objpajak">
                        
                       
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
      <h4>Tambah Data Objek Pajak</h4>

      <div class="row">
        <form class="col s12">
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="image_url" type="text" class="validate">
              <label for="image_url">Nama Wajib Pajak</label>
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
     $(document).ready(function() {
         
         tampil_data_objpajak();
         
         $('#tblobjpajak').DataTables();

         function tampil_data_objpajak(){
            $.ajax({
                url: '<?php echo base_url() ?>index.php/objekpajak/getAllData',
                type: 'ajax',
                dataType: 'JSON',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].nama_wp+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+''+
                                        '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].nama_wp+'">Hapus</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#showdata_objpajak').html(html);
                }
                
            });
            
         }
     });
</script>