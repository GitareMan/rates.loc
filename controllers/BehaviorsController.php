<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;



/**
 * Default controller for the `rates` module
 */
class BehaviorsController extends Controller
{
   public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    
                    
                     [
                        'allow' => true,
                        'controllers' => ['site'],
                        'actions' => ['login'],
                        'roles' => ['?']
                    ],
                    
                    [
                    
                        'allow' => true,
                        'actions' => ['index','search']
                        
                    
                    ],
                
                
                   /* 
                   
                    [
                    
                        'allow' => true,
                        'controllers' => ['site'],
                        'actions' => ['index']
                        
                    
                    ],
                    
                
                    [
                        'allow' => true,
                        'controllers' => ['site'],
                        'actions' => ['login'],
                        'verbs' => ['GET','POST'],
                        'roles' => ['?']
                    ],
                    
                    [
                        'allow' => true,
                        'controllers' => ['site'],
                        'actions' => ['logout'],
                        'verbs' => ['POST'],
                        'roles' => ['@']
                    ],
                    
                    [
                        'allow' => true,
                        'controllers' => ['api'],
                        'actions' => ['index'],
                        'matchCallback' => function ($rule, $action) {
                            return date('d-m') == '14-01';
                        }
                        
                    ]
         
                    */
                    
                ]
            ]
        
        ];
   
   }
     
}
