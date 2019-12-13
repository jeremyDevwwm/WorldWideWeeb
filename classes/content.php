<?php

    class Content {
        public $id;
        public $titre;
        public $image;
        public $contenu;
        public $date_creation;

        public function __constructor($id,$ttr,$img,$cntnt,$dateCre){
            $this->id = $id;
            $this->titre = $ttr;
            $this->image = $img;
            $this->contenu = $cntnt;
            $this->date_creation = $dateCre;
        }

        public function getContent(){
            return 'SELECT titre, image, contenu, date_creation FROM articles';
        }
    }

?>