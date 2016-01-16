<?php
//Define Namespace 
// This is my App boundary 
namespace App\Http\Controllers; 

//Importing base controller class
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//define my local class 

class FriendController extends Controller{

	public function getIndex(){
		 return view('friend.index',['names' => ['Piusha','Kalyana','Namal']]);
	}

	public function showSelectedFriend($friendId){
		return "This is selcted Frined Id -->".$friendId;
	}
}