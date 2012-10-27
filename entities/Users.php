<?php

	/** @Entity
  	* @Table(name="users")
 	**/
class Users{
 	/** @Id @Column(type="integer") @GeneratedValue */
 	protected $id;
 	
 	/** @Column(name="name", type="string")*/
 	 private $name;
 	 
 	 /** @Column(name="last_name", type="string")*/
 	 private $last_name;
 	 
 	 /** @Column(name="role", type="string", columnDefinition="ENUM('worker','client','manager')")*/
 	 private $role;
 	 
 	 /** @Column(name="login", type="string", unique=true)*/
 	 private $login;
 	 
 	 /** @Column(name="password", type="string")*/ 
 	 private $password;
 	 
 	 /** @Column(name="phone", type="string")*/
 	 private $phone;
 	 
 	 /** @Column(name="email", type="string", unique=true)*/
 	 private $email;
 	 
 	 
 	 public function getId(){
 	 	return $this->id;
 	 }
 	 public function getName(){
 	 	return $this->name;
 	 }
 	 
 	 public function getLastName(){
 	 	return $this->last_name;
 	 }
 	 
 	 public function setName($name){
 	 	$this->name = $name;
 	 }
 	 
 	 public function setLastName($last_name){
 	 	$this->last_name = $last_name;
 	 }
 	 
 	 public function setRole($role){
 	 	$this->role = $role;
 	 }
 	 
 	 public function setLogin($login){
 	 	$this->login = $login;
 	 }
 	 
 	 public function setPassword($password){
 	 	$this->password = $password;
 	 }
 	 
 	 public function setPhone($phone){
 	 	$this->phone = $phone;
 	 }
 	 
 	 public function setEmail($email){
 	 	$this->email = $email;
 	 }
 }
 ?>