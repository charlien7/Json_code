<?php
// RFC4627-compliant header
header('Content-type: application/json'); ?>
<script type="text/javascript">
     var jsonData = <?php echo json_encode($response); ?>
   </script>

<?php
// Encode data
if(isset($response)) {
	echo json_encode($response);
}
else { echo json_encode(array('error' => true)); }
	




?>