<?php $this->load->view('admin/v_up'); ?>
    <?php echo $error;?>

        <?php echo form_open_multipart('upload/do_upload');?>

        <input type="file" name="userfile" size="20" />

        <br /><br />

        <input type="submit" value="upload" />

        </form>
<?php $this->load->view('admin/v_down'); ?>