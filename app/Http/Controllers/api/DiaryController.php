<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
	public function index() {
		$diaries = Diary::all();
    return response()->json($diaries);
	}
}
