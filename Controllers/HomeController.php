<?php
    namespace controllers;

    use Controllers\AlexController;

    class HomeController{

        public function Index($message = ""){

            //$vinylsController = new VinylsController();
            //$vinylsController->ShowListView();
            //$vinylsController->ShowAddView();
            //$vinylsController->ShowArticlesView();

            $controller = new AlexController();
            $controller->ShowAddView();
            //require_once(ROOT.FRONT_ROOT."alex-add.php");
        }
    }
?>