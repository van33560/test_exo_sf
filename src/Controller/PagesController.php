<?php


namespace App\Controller;
//pas encore expliqués
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
//je crée une class controller attention elle doit avoir le meme nom que le fichier qui le contient
//il faut donner des nom differents pour les autres fichiers
//le nom de la class dans un controller est fixée par le mot controller
class PagesController
{
    /**cette annotation permet de creer une route c'est a dire une nouvelle url sur notre site celle -ci est appelée dans l'annotation le nom de la route doit etre unique
     * @Route("/contact", name="page_contact")
     */
//ce qui permet de relier la route a la fonction est le fait que celle ci est et doit etre  au dessus
    public function contact(){
//le var_dump permet de verifier l'affiche du texte
        var_dump('affichage de la page ');
        die;
    }
    
    /**
     * @Route("/name", name = "page_name")
     */
//fonction public name request permet de recupere le info de la variable
    public function name (Request $request){
        //j'instancie une variable et j'utilise les proprietés de symfony pour récuperer les données de l'url qui m'interessent
        $name =($request->query->get('firstname'));

        var_dump($name);
        die;
    }
}