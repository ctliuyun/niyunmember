<?php

class loginmodel extends CI_Model {

public function __construct() {
$this->load->database();
}

public function user_creat() {

/* $serv_id = "uuid()";
  $data = array(
  'serv_id' => $serv_id,
  'user_login' => trim($this->input->post('userlogin')),
  'user_passwd' => md5(trim($this->input->post('passwd'))),
  'user_email' => trim($this->input->post('email')),
  'user_create_date' => date('Y-m-d H:i:s')
  ); */
/*
  $this->db->set('serv_id', "uuid()");
  $this->db->set('user_login', trim($this->input->post('userlogin')));
  $this->db->set('user_passwd', md5(trim($this->input->post('passwd'))));
  $this->db->set('user_email', date('Y-m-d H:i:s'));
  return $this->db->insert('niyun_users');
 */


$sql = "INSERT INTO niyun_users (serv_id,user_login,user_passwd,user_email,user_create_date) VALUES (uuid(), '";
$sql.=trim($this->input->post('userlogin'))."','";
$sql.=md5(trim($this->input->post('passwd')))."','";
$sql.=trim($this->input->post('email'))."','";
$sql.=date('Y-m-d H:i:s')."')";

return $this->db->query($sql);

// return $this->db->insert('niyun_users', $data);
}
public function user_login() {

$sql = "SELECT * FROM niyun_users WHERE (user_login = ? or user_email =? ) AND user_passwd = ? ";


return $this->db->query($sql, array(trim($this->input->post('loginemail')), trim($this->input->post('loginemail')), trim($this->input->post('passwd'))));



}
}
?>
