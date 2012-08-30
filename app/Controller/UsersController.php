<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
    public $helpers = array('Html', 'Session','Form','Paginator');
    public $uses = array();
public  function  index(){
    $this->User->recursive=0;
    $this->paginate();

    $user=$this->User->find('all',array('conditions'=>array('id'=>1)));

$this->set('users',$user);

}
}
