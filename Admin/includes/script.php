
<?php if(isset($_SESSION['message'])){
?>
<script>
    Swal.fire("<?= $_SESSION['message'] ?>");

</script>
<?php
unset($_SESSION['message']);
} ?>




