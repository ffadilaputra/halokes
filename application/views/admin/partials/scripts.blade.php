<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ base_url('assets/ckeditor/')}}ckeditor.js"></script>
<script src="{{ base_url('assets/js/rupiah.js') }}"></script>

<script>
  CKEDITOR.replace('editor' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>',
});
</script>
<script>
    $(document).ready(()=> {
      $('#main').DataTable();
    });
    $('.input-group.date').datepicker({
      format: "yyyy-m-d",
      clearBtn: true,
      language: "id",
      calendarWeeks: true
    });

    // if input checkbox all clicked
    $('#checkAll').click(function(){
      if($(this).prop("checked") ==  true){
        $('.checkbox-name').attr('checked',true)
      } else {
        $('.checkbox-name').attr('checked',false)
      }
    })
 </script>
 <script>
     function showField(name){
      if(name == 'Lainnya' ){
        document.getElementById('other').innerHTML = '<br><input class="form-control" type="text" name="pekerjaan">'
      }else{
        document.getElementById('other').innerHTML = ''
      }
    }
 </script>
