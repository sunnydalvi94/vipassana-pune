<?php if(isset($form_no)){ ?>
Your <?php if(isset($org_short_name)){echo $org_short_name; } else{ echo "MES EBSM";} ?> admission form with form no. <?php echo($form_no);?> has been submitted successfully!<?php } ?>