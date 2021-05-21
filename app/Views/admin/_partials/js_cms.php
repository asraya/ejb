<script src="<?php echo base_url() ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>/assets/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/datatables/dataTables.bootstrap4.min.js"></script>
    
    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url() ?>/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url() ?>/froala_editor/js/froala_editor.pkgd.min.js"></script>

    <?= $this->section('script') ?>
    <script src="<?php echo base_url() ?>/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>

<!-- CMS -->
        <script type="text/javascript">
$(document).ready( function ()
{
	 table = $('#cms_table').DataTable({
		"order" : [],
		"processing" : true,
		"serverSide" : true,
		"ajax" : {
			"url" : "<?php echo site_url('cms/table_data'); ?>",
			"type" : "POST",
            "data" : {"csrf_test_name" : $('input[name=csrf_test_name]').val()},
            "data" : function(data){
                data.csrf_test_name = $('input[name=csrf_test_name]').val();
                data.Type = $('#Type').val();
            },
            "dataSrc" :  function(response){
                $('input[name=csrf_test_name]').val(response.csrf_test_name);
                return response.data;
            }
		},
		"columnDefs" : [{
			"targets" : [],
			"orderable" : false
		}]
        
	});
    $('#Type').change(function(){
 table.draw();
 })

 
});

function cms_edit(id)
    {
        save_method = 'update';
        $('#form_create')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        
        $.ajax({
            url : "<?php echo site_url('Cms/edit')?>/" + id,
            type: "GET",
            dataType: "JSON",
            data : {"csrf_test_name" : $('input[name=csrf_test_name]').val()
            },
            "dataSrc" :  function(response){
                $('input[name=csrf_test_name]').val(response.csrf_test_name);
                return response.data;
            },
            success: function(data)
            {
                data.csrf_test_name = $('input[name=csrf_test_name]').val();
                $('input[name=csrf_test_name').val(data.csrf_test_name);

                $('[name="id"]').val(data.id);
                $('[name="app_name"]').val(data.app_name);
                $('[name="app_slug"]').val(data.app_slug);
                $('[name="link"]').val(data.link);
                $('[name="image"]').val(data.image);
                $('[name="description"]').val(data.description);

                $('[name="updated_by"]').val(data.updated_by);

                $('#modal-cms').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                iziToast.error({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                        title: 'Error get data from ajax',
                        message: "success update",
                        position: 'topRight'
                        
                });
                // alert('Error get data from ajax');
            }
           
        });
    }

    function ajax_save()
    {
        $('#btn_save').text('saving...'); //change button text
        $('#btn_save').attr('disabled',true); //set button disable 
        var url;
     
        if(save_method == 'add') {
            url = "<?php echo site_url('CarManagement/store')?>";
        } else {
            url = "<?php echo site_url('CarManagement/update')?>";
        }
     
        // ajax adding data to database
        var formData = new FormData($('#form_create')[0]);
        // formData.append('content', CKEDITOR.instances['content'].getData());

        $.ajax({
            url : url,
            type: "POST",
            data: formData, //$('#form_blog').serialize(),
            contentType : false, 
            processData : false,
            dataType: "JSON",

            // "dataSrc" :  function(response){
            //     $('input[name=csrf_test_name]').val(response.csrf_test_name);
            //     return response.data;
            // },
            success: function(data)
            {
                // data.csrf_test_name = $('input[name=csrf_test_name]').val();
                // $('input[name=csrf_test_name').val(csrf.csrf_test_name);

                if(data.status) //if success close modal and reload ajax table
                {
                    iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                        title: 'Data Successfully Added',
                        message: "success added",
                        position: 'topRight'
                        
                    });
                    $('#modal-cms').modal('hide');
                    reload_table();
                }else{
                    
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                
                }
                $('#btn_save').text('Save'); //change button text
                $('#btn_save').attr('disabled',false); //set button enable 
     
     
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                iziToast.error({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                        title: 'Error Adding / Update Data',
                        message: "success",
                        position: 'topRight'
                        
                });
                // alert('Error adding / update data');
                $('#btn_save').text('Save'); //change button text
                $('#btn_save').attr('disabled',false); //set button enable 
     
            }
        });
    }
    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }

    function ajax_delete(id)
    {

        iziToast.question({
            timeout: 20000,
            close: false,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Hey',
            message: 'Are you sure about that?',
            position: 'center',
            buttons: [
                ['<button><b>YES</b></button>', function (instance, toast) {
                    $.ajax({
                        url : "<?php echo site_url('CarManagement/delete')?>/"+id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {
                            //if success reload ajax table

                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                    title: 'Data Successfully Deleted',
                                    message: "success",
                                    position: 'topRight'
                                    
                            });
                            $('#modal-cms').modal('hide');
                            reload_table();
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            iziToast.warning({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                    title: 'Error deleting data',
                                    message: "success",
                                    position: 'topRight'
                                    
                            });
                            // alert('Error deleting data');
                        }
                    });

                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
         
                }, true],
                ['<button>NO</button>', function (instance, toast) {
         
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
         
                }],
            ],
            onClosing: function(instance, toast, closedBy){
                console.info('Closing | closedBy: ' + closedBy);
            },
            onClosed: function(instance, toast, closedBy){
                console.info('Closed | closedBy: ' + closedBy);
            }
        });
       
    }
</script>
