<?php
    namespace controllers;

    use Controllers\VinylsControllers;

    class HomeController{

        public function Index($message = ""){

            $vinylsController = new VinylsControllers();
            $vinylsController->ShowListView();
        }
    }
?>