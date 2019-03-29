<?php $this->load->view('theme/header'); ?>

<?php if (isset($notice)) : ?>
    <?php echo $notice; ?>
<?php else : ?>
    <div id="notices"></div>
<?php endif; ?>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="ibox ">
			<?= $view_content ?>
		</div>
	</div>
</div>

<?php $this->load->view('theme/footer'); ?>