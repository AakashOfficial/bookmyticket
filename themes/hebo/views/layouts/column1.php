<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body">
	<div class="container" id="section_main">
		<div id="content">
			<!-- Include flash message page -->
			<?php require_once('tpl_setflash.php')?>

			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</section>
<?php $this->endContent(); ?>
