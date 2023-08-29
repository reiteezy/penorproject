<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;


class UserController extends Controller
{ //user list
    public function index() {
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'ASC')->findAll();
        return view('user_view', $data);
    }
    //user form
    public function create(){
        return view('add_user');
      
}
    //insert data in database
    public function store(){
        $userModel = new UserModel();
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'contact_no' => $this->request->getVar('contact_no'),
            'birthday' => $this->request->getVar('birthday'),
            'address' => $this->request->getVar('address'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }
    //view single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
    //update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'contact_no' => $this->request->getVar('contact_no'),
            'birthday' => $this->request->getVar('birthday'),
            'address' => $this->request->getVar('address'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list')); 
    }
    //delete user data
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }
}