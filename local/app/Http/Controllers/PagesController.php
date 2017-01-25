<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    
	public function getIndex(){

		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.index')->withPosts($posts);
		}

	public function getAbout(){

		$Fname = 'Riki';
		$Lname =  'Pogi';
		$full = $Fname . " " . $Lname;
		$email = "Rtnolasco@hotmail.com";
		
		$data = [];
		$data['email'] = $email;
		$data['full'] = $full;

		
		return view('pages.about')->withData($data);
		}

    public function getContact(){
    	return view('pages.contact');}

    //
}
