<?php

class CodeGeneratorLibrary
{

  public function generate_class($class_name, $nama_fungsi , $status_fungsi)
  {
    # Nama Folder Project
    $nama_folder_project = 'codeigniter_project';
    $dir_path = $_SERVER["DOCUMENT_ROOT"]."/".$nama_folder_project."/application/controllers/";

    if ($status_fungsi == '+') {
      $nilai_fungsi = 'public';
    } elseif ($status_fungsi == '-') {
      $nilai_fungsi = 'private';
    } else {
      $nilai_fungsi = 'protected';
    }

    $file = fopen($dir_path.$class_name.'.php','w');


    #Biarkan Dempet
    $cd = '
<?php

##>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
### Class CodeGenerator Generated ClassName='.$class_name.'
### Buat sesuatu yang "KEREN" di sini
##>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

class '.$class_name.' extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    #Relasi Model Generate Di Sini
  }

  public function index()
  {
    #Isi Code Disini
  } #batas fungsi index

  '.$nilai_fungsi.' function '.$nama_fungsi.'(){
    #Isi Code Disini
  } #batas fungsi '.$nama_fungsi.'


} #batas class '.$class_name.'

?>';

    fwrite($file,$cd);
    echo 'Class Sudah Dibuat Name_Class = '.$class_name;
    fclose($file);
  } #batas fungsi generate class



}

?>
