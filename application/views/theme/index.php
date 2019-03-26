<?php $this->load->view('theme/header'); ?>

<?php if (isset($notice)) : ?>
    <?php echo $notice; ?>
<?php else : ?>
    <div id="notices"></div>
<?php endif; ?>

<section id="main-content">
    <div class="row">
        <div class="twelve columns">
            <?= $view_content ?>
        </div>
    </div>
</section>

<?php $this->load->view('theme/footer'); ?>