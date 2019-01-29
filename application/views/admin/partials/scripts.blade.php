<!-- jQuery -->
<script src="<?= base_url('assets/sb-admin/') ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url('assets/sb-admin/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/sb-admin/') ?>js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/sb-admin/') ?>js/dataTables.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="{{ base_url('assets/ckeditor/')}}ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>',
});
</script>

<script>
    $(document).ready(()=> {
      $('#main').DataTable();
    })
 </script>

 <script>
function print() {
		const filename  = 'ThisIsYourPDFFilename.pdf';
		html2canvas(document.querySelector('#nodeToRenderAsPDF')).then(canvas => {
			let pdf = new jsPDF('p', 'mm', 'a4');
			pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 211, 298);
			pdf.save(filename);
		});
	}
 </script>
