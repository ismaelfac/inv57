<?php

namespace App\Http\Controllers;

use App\Providers\HttpRequestsProvider as ClientHttp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\ModelsProperties\Property;
use PHPUnit\Framework\MockObject\Stub\Exception;

class PropertiesWasiController extends Controller
{
	/**
	 * Create a new user instance.
	 *
	 * @param  array  $Properties_wasi
	 * @return \App\Properties
	 */
	public static function create_Wasi(array $properties_wasi)
	{	
		//dd($properties_wasi);	
		for ($i = 0; $i <= sizeof($properties_wasi); $i++) {
			dd($properties_wasi);
			$property = Property::create([
				'id_property' => ((string)$properties_wasi[$i]['id_property']),
				'id_company' => ((string)$properties_wasi[$i]['id_company']),
				'id_user_wasi' => $properties_wasi[$i]['id_user'],
				'id_client' => 1,
				'for_sale' => ($properties_wasi[$i]['for_sale'] == "false" ? false : true),
				'for_rent' => ($properties_wasi[$i]['for_rent'] == "false" ? false : true),
				'for_transfer' => ($properties_wasi[$i]['for_transfer'] == "false" ? false : true),
				'id_property_type' => ((int)$properties_wasi[$i]['id_property_type']),
				'country_id' => self::getCountryAtributte($properties_wasi[$i]['country_label']),
				'departament_id' => self::getDepartamentAtributte($properties_wasi[$i]['region_label']),
				'municipality_id' => self::getMunicipalityAtributte($properties_wasi[$i]['city_label']),
				'location_id' => $properties_wasi[$i]['id_location'],
				'iso_currency' => $properties_wasi[$i]['iso_currency'],
				'title' => $properties_wasi[$i]['title'],
				'address' => $properties_wasi[$i]['address'],
				'area' => $properties_wasi[$i]['area'],
				'id_unit_area' => $properties_wasi[$i]['id_unit_area'],
				'unit_area_label' => $properties_wasi[$i]['unit_area_label'],
				'built_area' => $properties_wasi[$i]['built_area'],
				'maintenance_fee' => $properties_wasi[$i]['maintenance_fee'],
				'sale_price' => $properties_wasi[$i]['sale_price'],
				'rent_price' => $properties_wasi[$i]['rent_price'],
				'bedrooms' => $properties_wasi[$i]['bedrooms'],
				'bathrooms' => $properties_wasi[$i]['bathrooms'],
				'garages' => $properties_wasi[$i]['garages'],
				'floor' => $properties_wasi[$i]['floor'],
				'social_stratum_id' => (((int)$properties_wasi[$i]['stratum'] == 0) ? 9 : (int)$properties_wasi[$i]['stratum']),
				'observations' => $properties_wasi[$i]['observations'],
				'video' => $properties_wasi[$i]['video'],
				'property_condition_id' => ((int)$properties_wasi[$i]['id_property_condition']),
				'status_on_page_id' => ((int)$properties_wasi[$i]['id_status_on_page']),
				'latitude' => ((string)$properties_wasi[$i]['latitude']),
				'longitude' => ((string)$properties_wasi[$i]['longitude']),
				'building_date' => $properties_wasi[$i]['building_date'],
				'visits' => $properties_wasi[$i]['visits'],
				'create_wasi' => $properties_wasi[$i]['created_at'],
				'reference' => $properties_wasi[$i]['reference'],
				'comment' => $properties_wasi[$i]['comment'],
				'rents_type_id' => ((int)$properties_wasi[$i]['id_rents_type']),
				'zip_code' => $properties_wasi[$i]['zip_code'],
				'availability_id' => ((int)$properties_wasi[$i]['id_availability']),
				'availability_label' => $properties_wasi[$i]['availability_label'],
				'publish_on_map_id' => ((int)$properties_wasi[$i]['id_publish_on_map']),
				'publish_on_map_label' => $properties_wasi[$i]['publish_on_map_label'],
				'main_image' => (empty($properties_wasi[$i]['main_image']['id_image']) ? "" : ((string)$properties_wasi[$i]['main_image']['id_image'])),
				'galleries' => ((string)$properties_wasi[$i]['galleries'][0]['id']),
				'features' => self::setFeatures($properties_wasi[$i]['features']),
				'user_id' => 1
			]);
			dd(sizeof($properties_wasi[$i]['galleries'][0]));
			$galleries = (sizeof($properties_wasi[$i]['galleries'][0]) == 1) ? '' : self::CreateGalleries($properties_wasi[$i]['galleries'][0]);
				
				//dd($property);
		}
	}

	public static function getClientPropertiesWasiAttribute($property_id)
	{
		dd($property_id);
	}
	public static function getPropertiesWasiAttribute()
	{
		try {
			$propertiesWasi = self::getDataWasi('property/search');
			Property::getPropertiesWasiAttribute($propertiesWasi);
		} catch (Exception $e) {
			Log::emergency('Error al obtener la propiedad de wasi');
		}
	}

	public static function getDataWasi($url)
	{
		try {
			$client = new ClientHttp('');
			$data = $client->get($url);
			return $data;
		} catch (Exception $e) {
			Log::emergency('No hay respuesta del API Wasi');
		}
	}
	public static function setGalleries(array $galleries_inv)
	{
		try {
			dd("Galerias" . $galleries_inv);
		} catch (Exception $e) {
			Log::warning('Error al guardar en el modelo de Galerias');
		}
	}
	public static function CreateGalleries(array $galleries)
	{
		try {
			for ($j = 0; $j <= sizeof($galleries); $j++) {
				$long = sizeof($galleries);
				if ($long > 0) {
					$galleries_inv = Gallery::create([
						'id' => $galleries[$j]['id'],
						'property_id' => $galleries['id'],
						'url' => $galleries[$j]['url'],
						'description' => $galleries[$j]['description'],
						'position' => $galleries[$j]['position']
					]);
					//Log::info('galeria de wasi armada:'.$galleries_inv);
				} else {
					$galleries_inv = Gallery::create([
						'property_id' => $galleries[0]['id']
					]);
					Log::info('sin galeria de wasi:' . $galleries_inv);
					return $galleries_inv;
				}
			}
		} catch (Exception $e) {
			Log::warning('Error al cargar los datos de galeria de wasi');
		}
	}
	public static function setFeatures($features)
	{
		try {
			$internal = (empty($features['internal']) ? null : self::addFeatures($features['internal']));
			$external = (empty($features['external']) ? null : self::addFeatures($features['external']));
			return ([
				'internal' => $internal,
				'external' => $external
			]);
		} catch (Exception $e) {
			Log::warning('Error al recibir el pais de wasi');
		}
	}
	public static function addFeatures($typeFeature)
	{
		$result_feature = [];
		$long = sizeof($typeFeature);
		for ($i = 0; $i < $long; $i++) {
			$features_list = [];
			$features_list = array_add($features_list, 'id', $typeFeature[$i]['id']);
			$features_list = array_add($features_list, 'name', $typeFeature[$i]['nombre']);
			$result_feature = array_add($result_feature, $i, $features_list);
			unset($features_list);
		}
		return ($result_feature);
	}

	public function getProperties(Request $request)
	{
		//dd($request);
		$regQty = 6;
		$page = $request->get('page', 1);
		$criteria = self::getSearchCriteriaProperties($request);
		$properties = self::getLatestProperties($regQty, $page, $criteria);
		$count = $properties['total_prop'];
		$totalPages = self::getQtyOfPages($count, $regQty);
		return view(
			'website.properties',
			array(
				'properties' => $properties['properties'],
				'totalProperties' => $count,
				'totalPages' => $totalPages,
				'currentPage' => $page,
			)
		);
	}
	static function getQtyOfPages($count, $regQty = 5)
	{
		return $count % $regQty == 0 ? $count / $regQty : floor($count / $regQty) + 1;
	}
	public static function getLatestProperties($qty = 5, $page = 1, $criteria = null)
	{
		$client = new ClientHttp(''); //Credenciales de acceso a la plataforma Wasi
		$searchArray = array(
			'id_availability' => 1,
			'take' => $qty,
			'scope' => 1,
			'skip' => ($page - 1) * $qty
		);
		if ($criteria != null) {
			$searchArray = array_merge($searchArray, $criteria);
		}
		$data = $client->get('property/search', $searchArray);
		//dd($data);
		$properties = [];
		for ($i = 0; $i < sizeof($data) - 2; $i++) {
			if (gettype($data[$i]) == 'array') {
				$data[$i]['latitude'] = (float)$data[$i]['latitude'];
				$data[$i]['longitude'] = (float)$data[$i]['longitude'];
				$data[$i]['unit_area_label'] = self::getUnitAreaLabel($data[$i]['id_unit_area']);
				$data[$i]['unit_built_area_label'] = self::getUnitAreaLabel($data[$i]['id_unit_built_area']);
				if (in_array($data[$i]['galleries'][0], [0])) {
					$data[$i]['image'] = isset($data[$i]['galleries']) && sizeof($data[$i]['galleries']) >= 0 ? $data[$i]['galleries'][0][0]['url'] : '';
				}
				if (in_array($data[$i]['galleries'][0], [0])) {
					$data[$i]['image_description'] = isset($data[$i]['galleries']) && sizeof($data[$i]['galleries']) > 0 ? $data[$i]['galleries'][0][0]['description'] : '';
				}
				$properties[$i] = $data[$i];
			}
		}
		return array('properties' => $properties, 'total_prop' => $data['total']);
	}
	public static function formatForMap($properties)
	{
		$formattedProperties = [];
		foreach ($properties as $key => $property) {
			$formattedProperties[$key] = array(
				'id' => $property['id_property'],
				'title' => $property['title'],
				'latitude' => $property['latitude'],
				'longitude' => $property['longitude'],
				'image' => ($property['image']) ? $property['image'] : '',
				'description' => $property['address'] . '<br>' . $property['region_label'] . ', ' . $property['city_label'] . ', ' . $property['country_label'],
				'link' => 'propiedades/propiedad/' . $property['id_property'],
				'map_marker_icon' => 'images/markers/coral-marker-residential.png',
			);

		}
		return $formattedProperties;
	}
	static function getUnitAreaLabel($label)
	{
		$unit = '';
		switch ($label) {
			case '1':
				$unit = 'm2';
				break;
			case '2':
				$unit = 'cuadras';
				break;
			case '3':
				$unit = 'hectáreas';
				break;
			case '4':
				$unit = 'varas';
				break;
		}
		return $unit;
	}
	public static function getPropertyTypesByPurpose($purpose)
	{
		$client = new ClientHttp('');
		$data = $client->get('property-type/all', array(
			'quantity' => true,
			'scope' => 1,
			$purpose => true
		));
		$ptypes = [];
		for ($i = 0; $i < sizeof($data) - 1; $i++) {
			if (gettype($data[$i]) == 'array') {
				$ptypes[$i] = $data[$i];
			}
		}
		return $ptypes;
	}
	public static function getPropertiesPurpose()
	{
		$ppurpose = [
			'Venta',
			'Alquiler',
			'Transferencia'
		];
		return $ppurpose;
	}
	public static function getAllPropertyTypes()
	{
		$client = new ClientHttp('');
		$data = $client->get('property-type/all', array(
			'quantity' => true,
			'scope' => 1,
		));
		$pptypes = [];
		for ($i = 0; $i < sizeof($data) - 1; $i++) {
			if (gettype($data[$i]) == 'array') {
				$pptypes[$i] = $data[$i];
			}
		}
		return $pptypes;
	}
	public static function getPriceRange()
	{
		$client = new ClientHttp('');
		$data = $client->get('property/price-range');
		return $data;
	}
	public static function getAreaRange()
	{
		$client = new ClientHttp('');
		$data = $client->get('property/area-range');
		return $data;
	}
	public static function getSearchCriteriaProperties(Request $request)
	{
		$searchArray = array(
			'match' => $request->input('location', ''),
			'id_property_type' => $request->input('search_prop_type', 0),
			'for_sale' => $request->input('search_status') == 'Venta',
			'for_rent' => $request->input('search_status') == 'Alquiler',
			'bathrooms' => $request->input('search_bathrooms', 0),
			'min_bedrooms' => $request->input('search_bedrooms', 0),
			'min_built_area' => $request->input('search_minarea', 0),
			'min_area' => $request->input('search_minarea', 0),
			'max_built_area' => $request->input('search_maxarea', 0),
			'max_area' => $request->input('search_maxarea', 0),
			'min_price' => $request->input('search_minprice', 0),
			'max_price' => $request->input('search_maxprice', 0),
			'id_city' => $request->get('id_city', 0),
			'id_region' => $request->get('id_region', 0)
		);
		return $searchArray;
	}
	public function searchProperties(Request $request)
	{
		return $this->getProperties($request);
	}
	public function getPropertyTypeLabel($idPropertyType)
	{
		$data = self::getAllPropertyTypes();
		$index = array_search($idPropertyType, array_column($data, 'id_property_type'));
		return $data[$index]['nombre'];
	}
	public function getProperty($idProperty)
	{
		$client = new ClientHttp('');
		$property = $client->get('property/get/' . $idProperty);
		$property['property_type_label'] = $this->getPropertyTypeLabel($property['id_property_type']);
		$property['unit_area_label'] = self::getUnitAreaLabel($property['id_unit_area']);
		$property['unit_built_area_label'] = self::getUnitAreaLabel($property['id_unit_built_area']);
		$property['latitude'] = (float)$property['latitude'];
		$property['longitude'] = (float)$property['longitude'];
		$property['image'] = isset($property['galleries']) && sizeof($property['galleries']) > 0 ? $property['galleries'][0][0]['url'] : '';
		$property['image_description'] = isset($property['galleries']) && sizeof($property['galleries']) > 0 ? $property['galleries'][0][0]['description'] : '';
		$user = $client->get('user/get/' . $property['id_user']);
		$similarProperties = self::getLatestProperties(6, 1, array(
			'id_property_type' => $property['id_property_type'],
			'id_region' => $property['id_region'],
		))['properties'];
		return view(
			'properties.property-detail.property-detail-content',
			array(
				'property' => $property,
				'realtor' => $user,
				'similarProperties' => $similarProperties,
			)
		);
	}
}
