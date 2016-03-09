<?php

class DefaultController extends Controller {

    public function actionIndex() {

        $albums = BaseModel::getAll('Albums', array(
                    "order" => "date_entered DESC",
                    "limit" => 20,
        ));
        //pre($albums,true);
        $this->render('index',array('albums'=>$albums));
    }

}
