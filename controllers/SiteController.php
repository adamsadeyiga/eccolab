<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;

class SiteController extends  Controller
{
    public static function home(){
        $params = [
            'name' => "Yigatech"
        ];
        return parent::render('home', $params);
        //return Application::$app->router->renderView('home', $params);
    }
    public static function contact(Request $request, Response $response){
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return  $response->redirect('/contact');
            }
        }
        return parent::render('contact', ['model' => $contact]);
        //return Application::$app->router->renderView('contact');
    }

}