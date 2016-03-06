<?php
class DashboardController extends Controller
{
    /**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
	
	public function beforeAction()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('/admin/login'));
		}
	}

	public function actionIndex()
	{
		$this->render('index');
	}
    
}