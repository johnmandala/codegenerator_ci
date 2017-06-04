<?php

/**
 *
 */
class CodeGenerator extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('CodeGeneratorLibrary');
  }

  public function index()
  {
    # code...
    $this->load->view('ClassGenerator/index');
  }

  public function generate_class_name()
  {
    # code...
    $class_name = $this->input->post('nama_kelas');
    $status_fungsi = $this->input->post('status_fungsi');
    $function_name = $this->input->post('nama_fungsi');
    $this->codegeneratorlibrary->generate_class($class_name , $function_name , $status_fungsi);
  }


}

?>
