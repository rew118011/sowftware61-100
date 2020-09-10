<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report extends CI_Controller {

     public function __construct(){
         parent::__construct();
         echo "Constructor"."</br>";
     }
	public function index()
	{
		echo "Report Index";
    }
    public function _hello()
	{
		echo "</br>"."Hell Wold";
	}
    public function shoname($name="john",$lastname="wick")
	{
        echo "My name is ".$name." ".$lastname;
        $this->_hello();
    }
    public function shoview()
	{
        $this->load->view("hello_view");
        $this->load->view("hello_view");
        $this->load->view("hello_view");
    }
    public function shouser()
	{
        $data["name"]="Mario";
        $data["lastname"]="MaoLoer";
        $data["age"]=18;
        $this->load->view("user_page",$data);
    }
    public function getuser($p1=null,$p2=null,$p3=null)
	{
        $data["name"]=$p1;
        $data["lastname"]=$p2;
        $data["age"]=$p3;
        $this->load->view("user_page",$data);
    }
    public function shobooks()
	{
        $data["books"]=array("Java","Kotlin","PHP");
        $this->load->view("books_page",$data);
	}
}
