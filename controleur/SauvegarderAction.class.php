<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Candidat.class.php');
require_once('./modele/classes/Employeur.class.php');
require_once('./modele/CandidatDAO.class.php');
require_once('./modele/EmployeurDAO.class.php');

class SauvegarderAction implements Action {
    public function execute() {

        if (!ISSET($_SESSION)) session_start();
        if(isset($_SESSION['role']) && $_SESSION['role'] == 'employeur') {
            $Employeur = new Employeur();
            $Employeur->setNomUser($_SESSION['connecte']);
            $Employeur->setNomEntr($_REQUEST['nomEntreprise']);
            $Employeur->setCourriel($_REQUEST['courriel']);
            $Employeur->setTelephone($_REQUEST['telephone']);
            $EmployeurDAO = new EmployeurDAO();
            $EmployeurDAO->update($Employeur);
        } else  {
            $Candidat = new Candidat();
            $Candidat->setNomUser($_SESSION['connecte']);
            $Candidat->setNom($_REQUEST['nom']);
            $Candidat->setPrenom($_REQUEST['prenom']);
            $Candidat->setCourriel($_REQUEST['courriel']);
            
            if(isset($_FILES['fileToUpload'])){
                $errors= array();
                $file_name = $_FILES['fileToUpload']['name'];
                $file_size =$_FILES['fileToUpload']['size'];
                $file_tmp =$_FILES['fileToUpload']['tmp_name'];
                $file_type=$_FILES['fileToUpload']['type'];
                //$file_ext=strtolower(end(explode('.',$file_name)));

                $expensions= array("jpeg","jpg","png", "pdf", "txt");

                /*if(in_array($file_ext,$expensions)=== false){
                   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                }*/

                if($file_size > 4097152){
                   $errors[]='File size must be excately 4 MB';
                }

                if(empty($errors)==true){
                   move_uploaded_file($file_tmp,"cv/".$file_name);
                   $Candidat->setCv("cv/" . $file_name);
                   echo "Success";
                }else{
                   print_r($errors);
                }
             }
            /*
            $target_dir = "cv/";
            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
            
            if(isset($_REQUEST["fileToUpload"])) {
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 900000) {
                    $_REQUEST['messageFichier'] = "Le fichier est trop grand.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($fileType != "doc" && $fileType != "docx" && $fileType != "pdf") {
                    $_REQUEST['messageFichier'] = "Le type de fichier n'est pas valide.";
                    $uploadOk = 0;
                }
                if ($uploadOk == 1) {
                    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                        $_REQUEST['messageFichier'] = "Votre cv a été ajouté avec succès.";
                        $Candidat->setCv($target_file);
                    } else {
                        $_REQUEST['messageFichier'] = "Il y a eu une erreur lors du téléversement.";
                    }
                }               
            }            
             */
            $CandidatDAO = new CandidatDAO();
            $CandidatDAO->update($Candidat);
        }
        return "profil";
    }
}
