<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

	<!--FontAwesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  fixed-top elegant-color ">
		<a class="navbar-brand strong ml-5 pl-5" href="#"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_header.png" alt=""> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">

			<?php
			$this->widget('zii.widgets.CMenu', array(
				'encodeLabel' => false,
				'htmlOptions' => array('class' => 'navbar-nav mr-auto'),
				'items' => array(
					array(
						'label' => '<i class="fas fa-clipboard-list"></i> Productos',
						'visible' => !Yii::app()->user->isGuest,
						'url' => array('/product/index'),
						'itemOptions' => array('class' => 'nav-item '),
						'linkOptions' => array('class' => 'nav-link '),
					)
				),
			));
			?>

			<?php
			$this->widget('zii.widgets.CMenu', array(
				'encodeLabel' => false,
				'htmlOptions' => array('class' => 'navbar-nav ml-auto nav-flex-icons'),
				'items' => array(
					array(
						'label' => Yii::app()->user->name . ' <b class="caret"></b>',
						'visible' => !Yii::app()->user->isGuest,
						'url' => '#',
						'submenuOptions' => array('class' => 'dropdown-menu dropdown-primary'),
						'items' => array(
							array(
								'label' => '<i class="fas fa-sign-out-alt"></i> Cerrar sesión',
								'url' => array('/site/logout'),
								'linkOptions' => ['class' => 'dropdown-item'],
							)
						),
						'itemOptions' => array('class' => 'nav-item dropdown'),
						'linkOptions' => array('class' => 'nav-link dropdown-toggle', 'data-toggle' => 'dropdown'),
					),
					array(
						'label' => '<i class="fas fa-sign-in-alt"></i> Iniciar sesión',
						'url' => ['site/login'],
						'linkOptions' => ['class' => ' btn btn-light btn-sm waves-effect'],
						'visible' => Yii::app()->user->isGuest
					)
				),
			));
			?>

		</div>
	</nav>

</head>

<body>

	<div class="container  mt-5 mb-5" id="page"><br><br>

		<?php if (isset($this->breadcrumbs)) : ?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links' => $this->breadcrumbs,
			)); ?>

		<?php endif ?>

		<?php echo $content; ?>

		<div class="clear"></div>

	</div>

	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/mdb.min.js"></script>
	<!-- Your custom scripts (optional) -->
	<script type="text/javascript"></script>
	<script>
		$('.dropdown-toggle').dropdown()
	</script>

</body>

</html>