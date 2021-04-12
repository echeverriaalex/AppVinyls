<?php
    namespace controllers;

    class HomeController{

        public function Index($message = ""){

            $vinylsController = new VinylsController();
            //$vinylsController->ShowListView();
            $vinylsController->ShowAddView();
            //$vinylsController->ShowArticlesView();
        }
    }
?>