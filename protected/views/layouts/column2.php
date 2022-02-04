<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-5 last">
	<div id="sidebar">
		<?php
		$this->beginWidget('zii.widgets.CPortlet', array(

			'htmlOptions' => array('class' => 'float-right',),
		));
		$this->widget('zii.widgets.CMenu', array(
			'items' => $this->menu,
			'htmlOptions' => array('class' => 'breadcrumb float-right border'),
			'itemCssClass' => 'm-1'

		));
		$this->endWidget();
		?>

	</div><!-- sidebar -->
</div>
<div class="span-19">
	<div id="content"><br>
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<?php $this->endContent(); ?>