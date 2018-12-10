<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\HttpRequestsProvider as ClientHttp;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\PropertiesController as PropertiesController;
use App\Property;
use App\PropertiesType;

class PortalController extends Controller
{
	protected $user = array();
	protected $properties = array();
	protected $firstFiveProperties = array();
	private $count = 0;

	public function __construct()
	{

	}

	function getProperties()
	{
		//$properties = PropertiesController::getProperties();
		$properties = PropertiesController::getLatestProperties(50)['properties'];
		return $properties;
	}
	function index()
	{
		$properties_wasi = $this->getProperties();
        //dd($properties_wasi);
        //PropertiesController::create_Wasi($properties, 30);
		return view('admin2.modules.portal', array(
			'user' => $this->user,
			'properties' => $properties_wasi,
			'firstFiveProperties' => array_slice($properties_wasi, 1, 5),
			'nextSixProperties' => array_slice($properties_wasi, 5, 6),
				//'mapProperties'       => $mapProperties,
			'propertyTypes' => PropertiesController::getAllPropertyTypes(),
			'propertyPurposes' => PropertiesController::getPropertiesPurpose(),
			'priceRanges' => PropertiesController::getPriceRange()
		));
	}
	public function create()
	{
		return view('admin.modules.portalwasi.crud');
	}
}
