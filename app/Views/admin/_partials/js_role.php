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

        <script type="text/javascript">
$(document).ready( function () {
	var table = $('#role_table').DataTable({
		"order" : [],
		"processing" : true,
		"serverSide" : true,
		"ajax" : {
			"url" : "<?php echo site_url('Role/table_data'); ?>",
			"type" : "POST",
            "data" : {"csrf_test_name" : $('input[name=csrf_test_name]').val()},
            "data" : function(data){
                data.csrf_test_name = $('input[name=csrf_test_name]').val();
                data.user_id = $('#user_id').val();
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
    $('#user_id').change(function(){
 table.draw();
});

function ajax_edit_role(Id)
    {
        save_method = 'update';
        $('#form_create')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        
        $.ajax({
            url : "<?php echo site_url('backend/cms_news/edit')?>/" + id,
            type: "GET",
            dataType: "JSON",
            data : {"csrf_test_name" : $('input[name=csrf_test_name]').val()},

            success: function(data)
            {
                // $('input[name=csrf_test_name]').val(data.csrf_test_name);
                $('[name="id"]').val(data.id);                
                $('[name="title"]').val(data.title);
                $('[name="link"]').val(data.link);
                $('[name="description"]').val(data.description);
                
                $('#modal-create').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title
                
            },
            // "dataSrc" :  function(response){
            //     $('input[name=csrf_test_name]').val(response.csrf_test_name);
            //     return response.data;
            // },
            error: function (jqXHR, textStatus, errorThrown)
            {
                iziToast.error({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                        title: 'Error get data from ajax',
                        message: 'success',
                        position: 'topRight'
                        
                });
                // alert('Error get data from ajax');
            }
        });
    }
});

</script>