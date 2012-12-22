<?php

class CategoriasController extends ControladorSeguro
{	
	public function actionIndex()
	{
		$categorias = Categoria::model()->findAll();
		$this->render('index', array('categorias' => $categorias,));
	}
}