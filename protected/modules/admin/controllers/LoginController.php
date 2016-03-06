<?php

class LoginController extends Controller {

    public $layout = '//layouts/login_main';
    public $defaultAction = 'login';

    /**
     * Displays the login page
     */
    public function actionLogin() {
        if (Yii::app()->user->isGuest) {
            $model = new UserLogin;
            if (isset($_POST['UserLogin'])) {
                $model->attributes = $_POST['UserLogin'];
                if ($model->validate()) {
                    $this->redirect(array("/admin/albums"));
                }
            }
            $this->render('index', array('model' => $model));
        } else {
            $user_id = Yii::app()->user->id;
            if ($user_id != '') {
                $this->redirect(array("/admin/albums"));
            } else
                $this->redirect(Yii::app()->controller->module->returnUrl);
        }
    }

}
