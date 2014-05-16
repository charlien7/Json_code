<?php echo form_input('title','','id="title_input"'); ?><br>
Category
<?php 
    foreach ($categories as $c)
    {
        echo '<input type="checkbox" id="categories[]" name="categories[]" value="'.$c['id'].'">';
        echo $c['title'].'&nbsp';
        }
?>

    <?php
        echo form_submit('Submit',"Submit");
        echo form_close();
    ?>