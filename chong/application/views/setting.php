

<?php echo $this->session->userdata('username') ?>

<form action="<?= base_url(); ?>Setting/update_user_name" method="post">
    <input type="hidden" id="user_id" name="user_id" value="<?php echo $this->session->userdata('user_id') ?>"/>
    <input type="text" id="edit_name" name="edit_name"/>

    <input type="submit" name="submit" id="edit"/>

</form>