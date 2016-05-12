<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Anketa;

class UnosAnketeController extends Controller {
	
	public function __construct() {
		$this->middleware('auth');
	}
	
	public function index() {
		$ankete = DB::table('ankete')->get();
		return view('unosankete', ['ankete'=> $ankete]);
	}
}