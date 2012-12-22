<?php

class ControladorSeguro extends Controller
{
	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete'
		);
	}
	
	public function accessRules()
	{
		return array(
			array('deny',
				'users' =>array('?'),
			),
		);
	}
}