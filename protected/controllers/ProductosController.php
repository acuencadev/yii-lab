<?php

class ProductosController extends ControladorSeguro
{
	public function actionIndex()
	{
		$productos = Producto::model()->findAll();
		$this->render('index', array('productos' => $productos,));
	}
}