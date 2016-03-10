<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		// $albums = BaseModel::getAll('Albums', array(
  //                   "order" => "date_entered DESC"
  //       ));
        $albums = new CActiveDataProvider('Albums', array(
						    'criteria'=>array(
						        'condition'=>'status = 1 AND deleted = 0',
						        'order'=>'date_entered DESC'
						    ),
						    'countCriteria'=>array(
						        'condition'=>'status = 1 AND deleted = 0',
						        // 'order' and 'with' clauses have no meaning for the count query
						    ),
						    'pagination'=>array(
						        'pageSize'=>15,
						    ),
						));
        // pre($albums,true);
        $this->render('index',array('albums'=>$albums));
	}

	public function actionDetail($album)
	{
		$album = Albums::model()->findByPk($album);
		$song_list = [];
		foreach($album->tracks as $track){
			$list['title'] = $track->song_name;
			$list['mp3'] = base_url().'/'.$track->path;
			array_push($song_list, $list);
		}
		$song_list = json_encode($song_list, true);
		// pre($album->tracks,true);
		$this->render('view', array('album' => $album,'song_list' => $song_list));
	}
}