<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Postulaciones', 'url'=>array('index')),
	array('label'=>'Manage Postulaciones', 'url'=>array('admin')),
);
?>

<h1>Create Postulaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>