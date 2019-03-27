<?php $this->load->view('theme/header'); ?>

<?php if (isset($notice)) : ?>
    <?php echo $notice; ?>
<?php else : ?>
    <div id="notices"></div>
<?php endif; ?>

<?= $view_content ?>

<?php $this->load->view('theme/footer'); ?>