<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\Slider;
use app\modules\admin\models\Stat;
use app\modules\admin\models\Meet;
use app\modules\admin\models\Services;
use app\modules\admin\models\News;
use app\modules\admin\models\Message;
use app\modules\admin\models\Price;
use app\modules\admin\models\Call;
use app\modules\admin\models\ProjectCategory;
use app\modules\admin\models\ProjectImg;
use app\modules\admin\models\Section;

class BusenesController extends Controller
{
    public function actionIndex()
    {   
        $sliders = Slider::find()->all();
        $stat = Stat::findone(1);
        $call = Call::findone(1);
        $meets = Meet::find()->all();
        $section1 = Section::findOne(1);
        $section2 = Section::findOne(2);
        $section3 = Section::findOne(3);
        $services = Services::find()->all();
        $news = News::find()->all();
        $prices = Price::find()->all();
        $p_category = ProjectCategory::find()->all();
        $p_img = ProjectImg::find()->all();
        $message = new Message();

        if(isset($_GET['sendM'])){
            $message->time = date('Y:m:d H:i:s');
            $message->name = $_GET['name'];
            $message->email = $_GET['email'];
            $message->message = $_GET['message'];
            $message->save();
            return $this->redirect('./');
        }



        return $this->render('index',[
            'sliders'=>$sliders,
            'stat'=>$stat,
            'meets'=>$meets,
            'services'=>$services,
            'news'=>$news,
            'message'=>$message,
            'prices'=>$prices,
            'call'=>$call,
            'p_category'=>$p_category,
            'p_img'=>$p_img,
            'section1'=>$section1,
            'section2'=>$section2,
            'section3'=>$section3,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



}
