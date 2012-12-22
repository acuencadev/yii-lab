<?php

class CategoriasController extends ControladorSeguro
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$model = new Categoria('search');
		$model->unsetAttributes();
		if (isset($_GET['Categoria']))
			$model->attributes=$_GET['Categoria'];
		$this->render('index', array('model' => $model,));
	}
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionCreate()
	{
		$model=new Categoria;
		$this->performAjaxValidation($model);

		if(isset($_POST['Categoria']))
		{
			$model->attributes=$_POST['Categoria'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$this->performAjaxValidation($model);

		if(isset($_POST['Categoria']))
		{
			$model->attributes=$_POST['Categoria'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}
	
	public function loadModel($id)
	{
		$model=Categoria::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La categoría solicitada no existe.');
		return $model;
	}
	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='categoria-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}