<?php
 class Template{
 protected$_ci=&get_instance();
 }
 function display($tamplate,$data,null)
 {
 $data['content']=$this->_ci->load->view($tamplate, $data,true,null);
 $this->ci-.load->view('template/template.php'.$data)
 }