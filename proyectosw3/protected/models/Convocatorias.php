<?php

/**
 * This is the model class for table "convocatorias".
 *
 * The followings are the available columns in table 'convocatorias':
 * @property integer $idConvocatoria
 * @property string $nombre
 * @property string $estado
 * @property string $tipo
 * @property string $fechaApertura
 * @property string $fechaCierre
 * @property string $anexos
 * @property string $programa
 * @property string $entidad
 * @property string $areaTematica
 * @property string $programaNacional
 * @property string $objetivo
 * @property string $remitente
 * @property string $fechaPublicacionAdjudicacion
 * @property string $fechaEntregaDocumento
 * @property string $contactoProceso
 * @property double $cuantia
 *
 * The followings are the available model relations:
 * @property Formularios[] $formularioses
 * @property Participantes[] $participantes
 * @property Postulaciones[] $postulaciones
 * @property Rubros[] $rubroses
 */
class Convocatorias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idConvocatoria, nombre, estado, tipo, fechaApertura, fechaCierre, anexos, programa, entidad, areaTematica, programaNacional, objetivo, remitente, fechaPublicacionAdjudicacion, fechaEntregaDocumento, contactoProceso, cuantia', 'required'),
			array('idConvocatoria', 'numerical', 'integerOnly'=>true),
			array('cuantia', 'numerical'),
			array('nombre, estado, tipo, programa, entidad, areaTematica, programaNacional, objetivo', 'length', 'max'=>60),
			array('remitente', 'length', 'max'=>500),
			array('contactoProceso', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idConvocatoria, nombre, estado, tipo, fechaApertura, fechaCierre, anexos, programa, entidad, areaTematica, programaNacional, objetivo, remitente, fechaPublicacionAdjudicacion, fechaEntregaDocumento, contactoProceso, cuantia', 'safe', 'on'=>'search'),
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
			'formularioses' => array(self::HAS_MANY, 'Formularios', 'convocatoria'),
			'participantes' => array(self::HAS_MANY, 'Participantes', 'convocatoria'),
			'postulaciones' => array(self::HAS_MANY, 'Postulaciones', 'convocatoria'),
			'rubroses' => array(self::HAS_MANY, 'Rubros', 'convocatoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idConvocatoria' => 'Id Convocatoria',
			'nombre' => 'Nombre',
			'estado' => 'Estado',
			'tipo' => 'Tipo',
			'fechaApertura' => 'Fecha Apertura',
			'fechaCierre' => 'Fecha Cierre',
			'anexos' => 'Anexos',
			'programa' => 'Programa',
			'entidad' => 'Entidad',
			'areaTematica' => 'Area Tematica',
			'programaNacional' => 'Programa Nacional',
			'objetivo' => 'Objetivo',
			'remitente' => 'Remitente',
			'fechaPublicacionAdjudicacion' => 'Fecha Publicacion Adjudicacion',
			'fechaEntregaDocumento' => 'Fecha Entrega Documento',
			'contactoProceso' => 'Contacto Proceso',
			'cuantia' => 'Cuantia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idConvocatoria',$this->idConvocatoria);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('fechaApertura',$this->fechaApertura,true);
		$criteria->compare('fechaCierre',$this->fechaCierre,true);
		$criteria->compare('anexos',$this->anexos,true);
		$criteria->compare('programa',$this->programa,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('areaTematica',$this->areaTematica,true);
		$criteria->compare('programaNacional',$this->programaNacional,true);
		$criteria->compare('objetivo',$this->objetivo,true);
		$criteria->compare('remitente',$this->remitente,true);
		$criteria->compare('fechaPublicacionAdjudicacion',$this->fechaPublicacionAdjudicacion,true);
		$criteria->compare('fechaEntregaDocumento',$this->fechaEntregaDocumento,true);
		$criteria->compare('contactoProceso',$this->contactoProceso,true);
		$criteria->compare('cuantia',$this->cuantia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convocatorias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
