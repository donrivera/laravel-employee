<?php

namespace App\Modules\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Modules\User\Libraries\ResponseHelper;
use App\Modules\User\Contracts\UserServiceInterface;
use URL;
use Hash;

 
class UserController extends Controller
{
    public function __construct(UserServiceInterface $user)
	{
        
        $this->user=$user;
       
    }
    public function test()
    {
        return $this->user->test();
    }
    public function index()
    {
        //View All Users
        return $this->user->view();
    }
    public function show($id)
    {
        //View User Per ID
        return $this->user->findById($id);
        
    }   
    public function authCheck()
    {
        //Return if Auth is Expired
        return $this->user->authCheck();
    }
    public function logOut()
    {   //Unset Auth 
        return $this->user->logOut();
    }
    public function store(Request $request)
    {
        $validate=$this->validate($request, 
            [
                'firstname'   => 'required',
                'lastname'    => 'required',
                'address'     => 'required',
                'postcode'    => 'required',
                'contact'     => 'required',
                'username'    => 'required',
                'email'       => 'required',
                'password'    => 'required|min:6'
            ]);
        
        return ($validate)?$this->user->store($request):ResponseHelper::jsonFailed("false");

        
    }
    public function update(Request $request,$id)
    {  
        
        $validate=$this->validate($request, 
            [
                'firstname'   => 'required',
                'lastname'    => 'required',
                'address'     => 'required',
                'postcode'    => 'required',
                'contact'     => 'required',
                'username'    => 'required',
                'email'       => 'required',
                'password'    => 'required|min:6'
            ]);
        
        //echo "test";
        return ($validate)?$this->user->update($request,$id):ResponseHelper::jsonFailed("false");
    }
    public function destroy($id)
    {
        //View User Per ID
        return $this->user->destroy($id);
        
    }   
}