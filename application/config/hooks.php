<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['pre_controller'][] = array(  
        'class' => 'Nxm',  
        'function' => 'tut',  
        'filename' => 'Nxm.php',  
        'filepath' => 'hooks',  
        );

$hook['pre_controller'][] = array(  
        'class' => 'Exm',  
        'function' => 'tut',  
        'filename' => 'exm.php',  
        'filepath' => 'hooks',  
        );
?>