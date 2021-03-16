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
    <style>
    .box{
        color: #000;
        padding: 5px;
        display: none;
        margin-top: 5px;
    }
    .red{ background: #fff; }
    .green{ background: #fff; }
    .blue{ background: #fff; }
</style>
    <script>
$(document).ready(function(){
    
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
    <script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('user_id');
            const name = $(this).data('name');
            const jenis_kelamin = $(this).data('jenis_kelamin');
            const tempat_lahir = $(this).data('tempat_lahir');
            const tanggal_lahir = $(this).data('tanggal_lahir');
            const pangkat = $(this).data('pangkat');
            const nrp = $(this).data('nrp');
            const asal_polda = $(this).data('asal_polda');
            const category_trainer = $(this).data('category_trainer');
            const no_telepon = $(this).data('no_telepon');
            const email = $(this).data('email');
            const password = $(this).data('password');
            
            // Set data to Form Edit
            $('.user_id').val(id);
            $('.jenis_kelamin').val(jenis_kelamin);
            $('.tempat_lahir').val(tempat_lahir);
            $('.tanggal_lahir').val(tanggal_lahir);
            $('.pangkat').val(pangkat);
            $('.nrp').val(nrp);
            $('.asal_polda').val(asal_polda);
            $('.category_trainer').val(category_trainer);
            $('.no_telepon').val(no_telepon);
            $('.email').val(email);
            $('.password').val(password);
            // $('.penguji_name').val(name).trigger('change');
            $('.upload_kta').val(name).trigger('change');

            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
       // get Delete Product
       $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.pengujiID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
         
    });

</script>

    <style>
        .ck-editor__editable_inline{
            min-height: 200px;
        }
    </style>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
       <script>
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor3' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor4' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor5' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor6' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
   
<script>
$.ajax({
    url: "",
    type: 'POST',
    data: form_data,
    dataType: 'json',
    success: function(msg) {
        if(msg.res  == 1)
        {
            $(".success").show();
            $(".failiour").hide();
        }
        else
        {
            $(".failiour").show();
            $(".success").hide();
        }


    }
});
</script>
    
    