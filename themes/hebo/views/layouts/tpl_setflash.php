<?php if(Yii::app()->user->hasFlash('success')) { ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php } elseif(Yii::app()->user->hasFlash('error')) { ?>
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo Yii::app()->user->getFlash('error'); ?>
        </div>
<?php } elseif(Yii::app()->user->hasFlash('info')) { ?>
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo Yii::app()->user->getFlash('info'); ?>
	</div>
<?php } elseif(Yii::app()->user->hasFlash('msg')) { ?>
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo Yii::app()->user->getFlash('msg'); ?>
	</div>
<?php }?>


<script type="text/javascript">
	//setTimeout(function () {$('.alert').css('display', 'none');}, 10000);
</script>

<?php
	Yii::app()->clientScript->registerScript(
		'myHideEffect',
		'$(".alert").animate({opacity: 1.0}, 10000).fadeOut("slow");',
		CClientScript::POS_READY
	);
?>
