		<?php if ($this->session->flashdata('SuccessLogin')) { ?>
      <script>
      	swal("Success", "login Success", "success");
      </script>

    <?php } else if ($this->session->flashdata('FailedLogin')){ ?>
    	<script type="text/javascript">
    		swal("Failed", "Failed to login", "error");
    	</script>
    <?php } ?>