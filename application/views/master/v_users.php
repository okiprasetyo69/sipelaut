<section id="content">
     <div class="container">
          <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header" align="center"> <b>Data User System</b> </h4>
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
                            <th>Nama User</th>
                            <th>Jabatan</th>
                            <th>Password</th>
                            <th>Aksi</th>
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
    

  <!-- Modal Structure -->
  <div id="modalobjekpajak" class="modal">
    <div class="modal-content">
      <h4>Tambah Data User</h4>

      <div class="row">
        <form class="col s12">
            <div class="row modal-form-row">
                <div class="input-field col s12">
                <input id="image_url" type="text" class="validate">
                <label for="image_url">Nama User</label>
                </div>
            </div>
            <div class="input-field col s12">
                 <select>
                    <option value="" disabled selected>-- Pilih Jabatan --</option>
                    <option value="1">Sys Admin</option>
                    <option value="2">Kasi</option>
                    <option value="3">Staff</option>
                  </select>
            </div>
            <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="image_url" type="text" class="validate">
              <label for="image_url">Password</label>
            </div>
          </div>
          <div class="row modal-form-row">
                <label>Pilih Foto

                </label>
                <div class = "file-field input-field">
                  <div class = "btn">
                     <span>Browse</span>
                     <input type = "file" />
                  </div>
                  <div class = "file-path-wrapper">
                     <input class = "file-path validate" type = "text" placeholder = "Upload file foto" />
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
  $(function(){

    showAllUsers();
    function showAllUsers(){
      $.ajax({
        type:'ajax',
        url: '<?php echo base_url()?>users/showAllUsers',
        async: false,
        dataType: 'json',
        succes: function(data){
          var html = '';
          var i;
          for(i = 0; i<data.length; i++){
            html += '<td>'+data[i].nama+'</td>'+
                            '<td>'+data[i].jabatan+'</td>'+
                             '<td>'+data[i].passwords+'</td>'+
                             '<td>'+data[i].photo+'/td>'+
                             '<td>'+
                                 '<a href="javascript:;" class="btn light-green darken-2"> Edit </a>'+
                                '<a href="javascript:;" class="btn deep-orange accent-4"> Delete </a>'+
                             '</td>'+
                         '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function() {
         alert('Could not get Data from Database');
        }

      });
    }
    
    //function showAllUsers

    // function showAllUsers(){
    //   $.ajax({
    //     type:'ajax',
    //     url:'<?php echo base_url() ?>users/showAllUsers',
    //     async: false,
    //     dataType: 'json',
    //     succes: function(data){
    //       console.log(data);
    //         var html = '';
    //         var i;
    //         for(i=0; i<data.length; i++){
    //           html +=  '<tr>'+
    //                         '<td>'+data[i].id+'</td>'+
    //                         '<td>'+data[i].nama+'</td>'+
    //                         '<td>'+data[i].jabatan+'</td>'+
    //                         '<td>'+data[i].passwords+'</td>'+
    //                         '<td>'+data[i].photo+'/td>'+
    //                         '<td>'+
    //                             '<a href="javascript:;" class="btn light-green darken-2"> Edit </a>'+
    //                             '<a href="javascript:;" class="btn deep-orange accent-4"> Delete </a>'+
    //                         '</td>'+
    //                     '</tr>';
    //        }
    //        $('#showdata').html(html);
    //     },
    //     error: function(){
    //       alert('Could not Get Data From Database');
    //     }

    //   });

    // }

  });
</script>