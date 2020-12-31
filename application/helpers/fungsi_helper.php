<?php 

function check_already_login()
{

  $ci =& get_instance();
  $user_session = $ci->session->userdata('email');
  if ($user_session) {
    redirect('C_dashboard');
  }

}


function check_not_login()
{

  $ci =& get_instance();
  $user_session = $ci->session->userdata('email');
  if (!$user_session) {
    redirect('C_auth');
  }

}

//untuk para admin
function check_dc(){

  $ci =& get_instance();
  $ci->load->library('fungsi');
  if ($ci->fungsi->user_login()->intLevel !=3) {
    redirect('C_auth');
  }
}

//untuk para admin
function check_admin(){

  $ci =& get_instance();
  $ci->load->library('fungsi');
  if ($ci->fungsi->user_login()->intLevel !=4) {
    redirect('Dashboard_MNG/mng');
  }
}

//untuk cek admin utama
function cekadminutama(){

  $ci =& get_instance();
  $ci->load->library('fungsi');
  if ($ci->fungsi->user_login()->intLevel !=1) {
    redirect('dashboard');
  }
}

//alur dashboard
function index_dashboard(){

  $ci =& get_instance();
  $ci->load->library('fungsi');
  if ($ci->fungsi->user_login()->intLevel ==4) {
    redirect('Dashboard_ADM/adm');
  }else if($ci->fungsi->user_login()->intLevel ==2){
    redirect('Dashboard_MNG/mng');
  }
  else if($ci->fungsi->user_login()->intLevel ==3){
    redirect('Dashboard_DC/dc');
  }
}




//untuk para admin
function check_manager(){

  $ci =& get_instance();
  $ci->load->library('fungsi');
  if ($ci->fungsi->user_login()->intLevel !=2) {
    redirect('dashboard');
  }
}
