<?php namespace App\Http\Controllers;

use View;
use App\City;
use Validator;
use Illuminate\Http\Request;

class CityController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [];
		$url['add_url'] = 'city/add';

		$data['city'] = City::orderBy('created_at', 'DESC')->paginate(10);
		return View('city/list', $data)->nest('panel', 'sections.panel', $url);
	}

	public function add()
	{
		$data = [];
		$url['back_url'] = 'city';

		$data['city'] = City::orderBy('created_at', 'DESC')->paginate(10);
		return View('city/add', $data)->nest('panel', 'sections.panel', $url);
	}
	
	public function process(Request $request)
	{
		$oValidator = Validator::make($request->all(), [
                                    'name' => 'required|unique:city|max:255',
        ]);
        if ($oValidator->fails()) {
            return redirect('city/add')
                        ->withErrors($oValidator)
                        ->withInput();
        }
        $oCity = new City;
        $oCity->name = $request->name;
        $oCity->save();

        $request->session()->flash('notify', ['type' =>'Success', 'text' =>'Данные успешно сохранены!']);
        return redirect('city');
	}

	public function update(Request $request)
	{
		$data = [];
		$url['back_url'] = 'city';

		$data['city'] = City::find($request->id);
		return View('city/update', $data)->nest('panel', 'sections.panel', $url);
	}

	public function save(Request $request)
	{
		$oValidator = Validator::make($request->all(), [
                                    'name' => 'required|unique:city|max:255',
        ]);
        if ($oValidator->fails()) {
            return redirect('city/' . $request->id)
                        ->withErrors($oValidator)
                        ->withInput();
        }
        $oCity = City::find($request->id);
        $oCity->name = $request->name;
        $oCity->save();

        $request->session()->flash('notify', ['type' =>'Success', 'text' =>'Данные успешно обновлены!']);
        return redirect('city');
	}

	public function remove(Request $request)
	{
        $oCity = City::find($request->id);
        $oCity->delete();

        $request->session()->flash('notify', ['type' =>'Success', 'text' =>'Данные успешно удалены!']);
        return redirect('city');
	}
}
