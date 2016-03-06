<?php

class AlbumsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','manage','delete','addtrack','addadditionalrow'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Albums;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Albums']))
		{
			$model->attributes=$_POST['Albums'];
			$model->album_image = uploadImage($_FILES['Albums']['name']['album_image'], $_FILES['Albums']['type']['album_image'], $_FILES['Albums']['tmp_name']['album_image'],$_POST['Albums']['album_name'], 'albums');

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Albums']))
		{
			$model->attributes=$_POST['Albums'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionAddtrack($album)
	{
		$album = $this->loadModel($album);
		$genres = CHtml::listData(BaseModel::getAll('Genres'),'id','genre');
		$track = array();
		$track[] = new Tracks;
		if (isset($_POST['Tracks'])) {
            foreach ($_POST['Tracks'] as $i => $single) {
                $model = new Tracks();
                $model->attributes = $single;
                $model->album = $album->id;
                $model->save();	
            }
            // $this->redirect(array("view",'id'=>$album));
        }
        
        $this->render('add-track',array('album' => $album,'track' => $track,'genres' => $genres));
	}

	/**
     * Adds an Additional model to the batch form
     * The post data received is from the AJAX call of the Add Another Button
     * @throws HttpException
     */
    public function actionAddadditionalrow()
    {



        if(Yii::app()->request->isAjaxRequest) {
        	$tracks = $_POST['Tracks'];
            if (empty($tracks) || !is_array($tracks)) {
                throw new HttpException(500, 'An internal server error has occured.');
            }
            
            $model = array();
            $album = $tracks[0]['album'];
            $genres = CHtml::listData(BaseModel::getAll('Genres'),'id','genre');
            //creating existing model instances + setting attributes
            foreach ($tracks as $i => $single) {
                $model[$i] = new Tracks();
                $model[$i]->setAttributes($single);
            }
            //end of creating existing model instances + setting attributes
            
            //creating an additional empty model instance
            $model[] = new Tracks();
            
            // it has to be renderAjax in order to include the script validation files
            echo $this->renderPartial('additional-track', array("model" => $model,'album' => $album,'genres' => $genres));
            exit;

        } else {
            throw new HttpException(404, 'Unable to resolve the request: address/add-additional-row');
        }
    }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('manage'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->redirect(array('manage'));
	}

	/**
	 * Manages all models.
	 */
	public function actionManage()
	{
		$model=new Albums('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Albums']))
			$model->attributes=$_GET['Albums'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Albums the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Albums::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Albums $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='albums-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	protected function gridAddTrack($data)
	{
		return "<a href='".base_url()."/admin/albums/addtrack?album=".$data->id."'>Add Tracks</a>";
	}
}
