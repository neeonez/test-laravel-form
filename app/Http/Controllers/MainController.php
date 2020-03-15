<?php

namespace App\Http\Controllers;

use illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Main controller
 */
class MainController extends PageController
{
	/**
	 * Index page
	 * 
	 * @param Request $Request The request object
	 * @return View
	 */
    public function index(Request $request)
    {
		$data = [];
		$number = $request->session()->get('number');

		if ($number !== null) $data['number'] = $number;

		return view('index', compact('data'));
	}

	/**
	 * Store the value
	 * @param Request $Request The request object
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function save(Request $request)
    {
		$validatedData = $request->validateWithBag ('number', [
			'number' => 'required|numeric',
		]);

		$number = $request->input('number');
		$request->session()->put('number', $number);

		return redirect()->back()->withSuccess('The number was saved!');
	}
}
