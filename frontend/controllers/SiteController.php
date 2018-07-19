<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use common\models\ForgotPasswordTokens;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\LoginForm;
use common\models\Slider;
use common\models\Subscribe;
use common\models\ContactUs;
use yii\helpers\ArrayHelper;
use common\models\Principals;
use common\models\About;
use common\models\ContactPage;
use common\models\PrivateLabelGallery;
use common\models\PrivateLabelHowItWorks;
use common\models\PrivateLabelBenefits;
use common\models\PrivateLabelOurProcess;
use common\models\Testimonials;
use common\models\PrivateLabelLogos;
use common\models\Showrooms;
use common\models\Product;
use common\models\FromOurBlog;
use common\models\CmsMetaTags;
use common\models\AboutSisterConcern;
use common\models\MapLocations;
use common\models\LatestUpdates;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
//    public password;

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'login-signup', 'blog', 'products', 'verification', 'send-response-mail'],
                'rules' => [
                    [
                        'actions' => ['signup', 'login-signup', 'blog', 'products', 'verification', 'send-response-mail'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'signup', 'login-signup', 'blog', 'products', 'verification', 'send-response-mail'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        Yii::$app->session['orderid'] = '';
        $sliders = Slider::find()->where(['status' => 1])->all();
        $our_collections = \common\models\ShopByCategory::find()->all();
        $latest_updates = LatestUpdates::find()->orderBy(['id' => SORT_DESC])->limit(2)->all();
        $shop_collections = \common\models\ShopCollections::find()->all();
        return $this->render('index', [
                    'sliders' => $sliders,
                    'our_collections' => $our_collections,
                    'latest_updates' => $latest_updates,
                    'shop_collections' => $shop_collections,
        ]);
    }

    public function actionProducts() {
        return $this->render('products', [
        ]);
    }

    public function actionBlog() {
        return $this->render('blog', [
        ]);
    }

    public function actionContact() {
        return $this->render('contact');
    }

    public function actionLoginSignup($go = NULL) {
        if (!Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
        }
        $model_login = new LoginForm();
        $model = new SignupForm();
        return $this->render('login-signup', [
                    'model_login' => $model_login,
                    'model' => $model,
                    'go' => $go,
        ]);
    }

    public function actionTermsCondition() {
        $model = Principals::findOne(1);
        $meta_tags = CmsMetaTags::find()->where(['id' => 9])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('terms_condition', [
                    'model' => $model,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    public function actionPrivacyPolicy() {
        $model = Principals::findOne(1);
        $meta_tags = CmsMetaTags::find()->where(['id' => 1])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('privacy_policy', [
                    'model' => $model,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    public function actionReturnPolicy() {
        $model = Principals::findOne(1);
        return $this->render('return_policy', [
                    'model' => $model,
        ]);
    }

    public function actionPaymentPolicy() {
        $model = Principals::findOne(1);
        return $this->render('payment_policy', [
                    'model' => $model,
        ]);
    }

    public function actionFaq() {
        $model = Principals::findOne(1);
        $meta_tags = CmsMetaTags::find()->where(['id' => 8])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('faq', [
                    'model' => $model,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin($go = NULL) {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model_login = new LoginForm();
        if ($model_login->load(Yii::$app->request->post()) && $model_login->login()) {
            if ($go) {
                return $this->redirect($go);
            } else {
                return $this->goBack();
            }
//            return $this->goBack();
        } else {
            $model_login->password = '';
            return $this->render('login-signup', [
                        'model_login' => $model_login,
            ]);
        }
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup($go = NULL) {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($user = $model->signup()) {
                //$this->sendResponseMail($model);
                if (Yii::$app->getUser()->login($user)) {
                    $this->Emailregister($user);
                    $this->Emailverification($user);
                    if ($go) {
                        return $this->redirect($go);
                    } else {
                        return $this->goHome();
                    }
                }
            }
        }
        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    public function actionVerification($verify) {
        $data = base64_decode($verify);
        $values = explode('_', $data);

        $model = User::find()->where(['id' => $values[0]])->one();

        if (!empty($model)) {
            $model->email_verification = 1;
            $model->save();
            return $this->redirect(array('site/login'));
        } else {
            return $this->redirect(array('site/index'));
        }
    }

    public function Emailverification($user) {
        $token = $user->id . '_' . 123456;
        $val = base64_encode($token);

        $message = Yii::$app->mailer->compose('email_varification', ['model' => $user, 'val' => $val]) // a view rendering result becomes the message body here
                ->setFrom('no-replay@coralperfumes.com')
                ->setTo($user->email, $val)
                ->setSubject('Email Verification');
        $message->send();
        return TRUE;
    }

    public function Emailregister($user) {
        $message = Yii::$app->mailer->compose('new_registration', ['user' => $user])
                ->setFrom('operations@coralperfumes.com')
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('New User Registration');
        $message->send();
    }

    public function Emailregister1($user) {
        $subject = "New User Registration";
        $to = "operations@coralperfumes.com";

        $message = "<html><head></head>
        <body>
        <p><b>" . $user->first_name . "</b> is registered as new user. </p>
        <table>
        <tr>
        <th>Name</th>
        <th>:-</th>

        <td>" . $user->first_name . "</td>
        </tr>

        <tr>
        <tr>
        <th>Contact Number</th>
        <th>:-</th>

        <td>" . $user->mobile_no . "</td>
        </tr>

        <tr>

        <th>Email Id</th>
        <th>:-</th>
        <td>" . $user->email . "</td>
        </tr>

        <tr>


        <tr>


        </table>
        </body>
        </html>";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@coralperfumes.com";
        mail($to, $subject, $message, $headers);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();
        Yii::$app->session['orderid'] = '';
        return $this->goHome();
    }

    /**
     * This function send contact message to admin.
     */
    public function sendContactMail($model) {

        $subject = "Enquiry From Coral Perfume";
        $to = "info@coralperfumes.com";

        $message = "<html>
<head>

</head>
<body>
<p><b>Enquiry Received From Website</b></p>
<table>
<tr>
<th>Name</th>
<th>:-</th>

<td>" . $model->first_name . ' ' . $model->last_name . "</td>
</tr>

<tr>
<tr>
<th>Contact Number</th>
<th>:-</th>

<td>" . $model->country_code . $model->mobile_no . "</td>
</tr>

<tr>

<th>Email Id</th>
<th>:-</th>
<td>" . $model->email . "</td>
</tr>
<tr>

<th>Reason for Contact</th>
<th>:-</th>
<td>" . $model->reason . "</td>
</tr>
<tr>


<tr>


</table>
</body>
</html>
";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@coralperfumes.com";
        mail($to, $subject, $message, $headers);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $about = About::find()->where(['id' => 1])->one();
        $meta_tags = CmsMetaTags::find()->where(['id' => 2])->one();
        $sisterconcerns = AboutSisterConcern::find()->where(['status' => '1'])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('about', [
                    'about' => $about,
                    'sisterconcerns' => $sisterconcerns,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    /**
     * Displays private label page.
     *
     * @return mixed
     */
    public function actionPrivateLabel() {
        $gallery = PrivateLabelGallery::find()->where(['id' => 1])->one();
        $how_it_works = PrivateLabelHowItWorks::find()->where(['status' => 1])->all();
        $benefits = PrivateLabelBenefits::find()->where(['status' => 1])->all();
        $process = PrivateLabelOurProcess::find()->where(['status' => 1])->all();
        $testimonials = Testimonials::find()->where(['status' => 1])->all();
        $contact = ContactPage::find()->where(['id' => 1])->one();
        $logos = PrivateLabelLogos::find()->where(['status' => 1])->all();
        $contact_us = new ContactUs;
        $meta_tags = CmsMetaTags::find()->where(['id' => 5])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);

        return $this->render('privatelabel', [
                    'gallery' => $gallery,
                    'how_it_works' => $how_it_works,
                    'benefits' => $benefits,
                    'process' => $process,
                    'testimonials' => $testimonials,
                    'contact' => $contact,
                    'logos' => $logos,
                    'contact_us' => $contact_us,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    /*
     * private label contact us page
     */

    public function actionContactus() {
        $model = new ContactUs();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if (isset($_POST['g-recaptcha-response']))
                $captcha = $_POST['g-recaptcha-response'];
            if ($captcha) {
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $this->sendContactMail($model);
                }
            }
            return $this->redirect('private-label');
        }
    }

    /**
     * Displays showrooms page.
     *
     * @return mixed
     */
    public function actionShowrooms() {
        $meta_tags = CmsMetaTags::find()->where(['id' => 6])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        $showrooms = Showrooms::find()->where(['status' => 1])->all();
        return $this->render('showrooms', [
                    'showrooms' => $showrooms,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
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
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
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

    public function actionForgot() {
//        $this->layout = 'adminlogin';
        $model = new User();
        if ($model->load(Yii::$app->request->post())) {

            $check_exists = User::find()->where(['email' => $model->email])->one();
            if (!empty($check_exists)) {

                $token_value = $this->tokenGenerator();
                $token = $check_exists->id . '_' . $token_value;
                $val = yii::$app->EncryptDecrypt->Encrypt('encrypt', $token);
                $token_model = new ForgotPasswordTokens();
                $token_model->user_id = $check_exists->id;
                $token_model->token = $token_value;
                $token_model->save();
                $this->sendMail($val, $check_exists);
                Yii::$app->getSession()->setFlash('success', 'A verification email has been sent to ' . $check_exists->email . ', please check the spam box if you cannot find the mail in your inbox. ');
            } else {
                Yii::$app->getSession()->setFlash('error', 'Invalid Email');
            }
            return $this->render('forgot-password', [
                        'model' => $model,
            ]);
        } else {
            return $this->render('forgot-password', [
                        'model' => $model,
            ]);
        }
    }

    public function tokenGenerator() {

        $length = rand(1, 1000);
        $chars = array_merge(range(0, 9));
        shuffle($chars);
        $token = implode(array_slice($chars, 0, $length));
        return $token;
    }

    public function sendMail($val, $model) {
        $message = $this->renderPartial('forgot_mail', [
            'model' => $model,
            'val' => $val,
        ]);
        echo $message;
        exit;
        $message = Yii::$app->mailer->compose('forgot_mail', ['model' => $model, 'val' => $val]) // a view rendering result becomes the message body here
                ->setFrom('no-replay@coralperfumes.com')
                ->setTo($model->email)
                ->setSubject('Change Password');
        $message->send();
        return TRUE;
    }

    public function actionNewPassword($token) {
//        $this->layout = 'adminlogin';
        $data = yii::$app->EncryptDecrypt->Encrypt('decrypt', $token);
        $values = explode('_', $data);
        $token_exist = ForgotPasswordTokens::find()->where("user_id = " . $values[0] . " AND token = " . $values[1])->one();
        if (!empty($token_exist)) {
            $model = User::find()->where("id = " . $token_exist->user_id)->one();
            if (Yii::$app->request->post()) {
                if (Yii::$app->request->post('new-password') == Yii::$app->request->post('confirm-password')) {
                    Yii::$app->getSession()->setFlash('success', 'password changed successfully');
                    $model->password_hash = Yii::$app->security->generatePasswordHash(Yii::$app->request->post('confirm-password'));
//                   echo $model->password_hash;exit;
                    $model->update();
                    $token_exist->delete();
                    $this->redirect('index');
                } else {
                    Yii::$app->getSession()->setFlash('error', 'password mismatch  ');
                }
            }
            return $this->render('new-password', [
                        'model' => $model
            ]);
        } else {
//			Yii::$app->getSession()->setFlash('error', 'Password Token not Found');
            $this->redirect('error');
        }
    }

    public function actionChangepassword() {
        $model = User::findOne(Yii::$app->user->identity->id);
        if (Yii::$app->request->post()) {
            if (Yii::$app->getSecurity()->validatePassword(Yii::$app->request->post('old-password'), $model->password_hash)) {
                if (Yii::$app->request->post('new-password') == Yii::$app->request->post('confirm-password')) {
                    $model->password_hash = Yii::$app->security->generatePasswordHash(Yii::$app->request->post('confirm-password'));
//                   echo $model->password_hash;exit;
                    $model->update();
                    Yii::$app->getSession()->setFlash('success', 'password changed successfully');
                    $this->redirect('index');
                } else {
                    Yii::$app->getSession()->setFlash('error', 'password mismatch  ');
                }
            } else {
                Yii::$app->getSession()->setFlash('error', 'Incorrect Password ');
            }
        }
        return $this->render('resetPassword', [
                    'model' => $model
        ]);
    }

    public function actionOurBlog() {
        $meta_tags = CmsMetaTags::find()->where(['id' => 10])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        $model = FromOurBlog::find()->where(['status' => 1])->all();
        return $this->render('blog', [
                    'model' => $model,
                    'meta_title' => $meta_tags->meta_title,
        ]);
    }

    public function actionBlogDetail($id = null) {
//                if (empty($id)) {
//                        $model = FromOurBlog::find()->where(['status' => 1])->all();
//                } else {
//                        $model = FromOurBlog::find()->where(['canonical_name' => $id, 'status' => 1])->one();
//                        if (!empty($model)) {
//                                if (!empty($model->meta_keyword))
//                                        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $model->meta_keyword]);
//                                if (!empty($model->meta_description))
//                                        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $model->meta_description]);
//                                return $this->render('blog-detail', [
//                                            'model' => $model
//                                ]);
//                        } else {
//                                return $this->render('blog', [
//                                            'model' => $model
//                                ]);
//                        }
//                }
        return $this->render('blog-detail', [
        ]);
    }

    public function actionError() {
        return $this->render('error');
    }

    public function actionCategoryDetail() {
        return $this->render('mens-product');
    }

    public function actionProductDetail() {
        return $this->render('product-detail');
    }

}
