<?php

/**
 * This is the model class for table "tbl_producto".
 *
 * The followings are the available columns in table 'tbl_producto':
 * @property integer $id
 * @property string $descripcion
 * @property integer $categoria_id
 * @property integer $existencia
 * @property string $precio
 */
class Producto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, categoria_id, existencia, precio', 'required'),
			array('categoria_id, existencia', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>50),
			array('precio', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, categoria_id, existencia, precio', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descripcion' => 'Descripcion',
			'categoria_id' => 'Categoria',
			'existencia' => 'Existencia',
			'precio' => 'Precio',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('categoria_id',$this->categoria_id);
		$criteria->compare('existencia',$this->existencia);
		$criteria->compare('precio',$this->precio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}