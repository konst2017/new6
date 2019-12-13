<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Interview;
use frontend\models\Golosow;
use frontend\models\Wopr;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use frontend\models\BlogList;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
   public function actions()
{
    return [  
	
			            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        'captcha' => [
            'class' => 'yii\captcha\CaptchaAction',
            'minLength'=>3,
            'maxLength'=>4,
            'height'=>40,
            'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
        ],
        //...
    ];
}

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
			$this->layout = 'main_';
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
			
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
   

    /**
     * Displays contact page.
     *
     * @return mixed
     */
   
     public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

public function actionbackend()
    {
        return $this->render('backend');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
	 
	  public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

     return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
  
  }


  public function actionInterview()
{
    $model = new Interview();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        Yii::$app->session->setFlash(
            'success',
            'Спасибо, что уделили время. В ближайшее время будут опубликованы результаты.'
        );
       // return $this->redirect(Url::home());
    }

    $this->detachBehaviors('accessOnce');

    return $this->render('interview', ['model' => $model,]);
}


public function actionIndex()
    {
		$model = new Golosow();
		 $hits = Wopr::find()->limit(6)->all();
        return $this->render('wiw',compact('model','hits'));
    }

public function actionWiw(){

   $model = new Golosow();
  
		$hits = Wopr::find()->limit(6)->all();
      
  
	
	  return $this->render('wiw', compact('model','hits')); 
 
}
public function actionRezgol(){

   $model = new Golosow();
  
		$hits = Wopr::find()->limit(6)->all();
      
  // $hitsc = Yii::$app->db->createCommand('SELECT count(naim) as cnt  FROM golosow')->asArray()->queryAll();
	//$hitsc = Golosow::find()->count();
//$hitsc=Golosow::find()->select('count(*) as cnt')->asArray()->one();
//SELECT count(naim) as cnt,naim,otw  FROM golosow group by naim,otw;
$sql ='SELECT count(naim) as cnt,naim,otw  FROM golosow group by naim,otw';
//$hitsc = Golosow::find()->select('count(naim) as cnt,naim,otw')->groupby(naim,otw)->all();
 $hitsc = Golosow::findBySql($sql)->all();     
	  return $this->render('rezgol', compact('model','hits','hitsc')); 
 
}
 public function actionDob(){
     
		
		$model = new Golosow();
  $hits = Wopr::find()->limit(100)->all();
	
		
                $name2 = Yii::$app->request->post('name2');
				 $name1 = Yii::$app->request->post('name1');
       
      
      $posts = Yii::$app->db->createCommand("INSERT INTO golosow(naim,otw) values('{$name2}','{$name1}')")
           ->execute();

        return $this->render('dob',['name1'=>$name1,'name2'=>$name2,'hits'=>$hits,'model'=>$model]);
 
    }
public function actionKoment()

{
    
$array = BlogList::getAll();
        return $this->render('komment',['varInView' => $array]);

}
public function actionFil()

{
    return $this->render('fil');
}

}
