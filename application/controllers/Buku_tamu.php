<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Buku_tamu extends CI_Controller {

public function index()
{
    $this->template->load('buku_tamu_template','buku_tamu_content');      
}
        
}
        
    /* End of file  Buku_tamu.php */
        
                            