<?php

namespace Modules\City\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;

class City extends BaseController
{
    private $allStates = [
        ['slug' => 'delhi',           'name' => 'Delhi',           'code' => 'DL', 'cities_count' => '40+'],
        ['slug' => 'maharashtra',     'name' => 'Maharashtra',     'code' => 'MH', 'cities_count' => '65+'],
        ['slug' => 'uttar-pradesh',   'name' => 'Uttar Pradesh',   'code' => 'UP', 'cities_count' => '85+'],
        ['slug' => 'bihar',           'name' => 'Bihar',           'code' => 'BR', 'cities_count' => '45+'],
        ['slug' => 'west-bengal',     'name' => 'West Bengal',     'code' => 'WB', 'cities_count' => '40+'],
        ['slug' => 'gujarat',         'name' => 'Gujarat',         'code' => 'GJ', 'cities_count' => '50+'],
        ['slug' => 'karnataka',       'name' => 'Karnataka',       'code' => 'KA', 'cities_count' => '45+'],
        ['slug' => 'tamil-nadu',      'name' => 'Tamil Nadu',      'code' => 'TN', 'cities_count' => '48+'],
        ['slug' => 'telangana',       'name' => 'Telangana',       'code' => 'TS', 'cities_count' => '35+'],
        ['slug' => 'rajasthan',       'name' => 'Rajasthan',       'code' => 'RJ', 'cities_count' => '42+'],
        ['slug' => 'madhya-pradesh',  'name' => 'Madhya Pradesh',  'code' => 'MP', 'cities_count' => '50+'],
        ['slug' => 'punjab',          'name' => 'Punjab',          'code' => 'PB', 'cities_count' => '32+'],
        ['slug' => 'haryana',         'name' => 'Haryana',         'code' => 'HR', 'cities_count' => '30+'],
        ['slug' => 'kerala',          'name' => 'Kerala',          'code' => 'KL', 'cities_count' => '30+'],
        ['slug' => 'jharkhand',       'name' => 'Jharkhand',       'code' => 'JH', 'cities_count' => '28+'],
        ['slug' => 'odisha',          'name' => 'Odisha',          'code' => 'OD', 'cities_count' => '30+'],
        ['slug' => 'chhattisgarh',    'name' => 'Chhattisgarh',    'code' => 'CG', 'cities_count' => '25+'],
        ['slug' => 'uttarakhand',     'name' => 'Uttarakhand',     'code' => 'UK', 'cities_count' => '22+'],
        ['slug' => 'assam',           'name' => 'Assam',           'code' => 'AS', 'cities_count' => '24+'],
        ['slug' => 'goa',             'name' => 'Goa',             'code' => 'GA', 'cities_count' => '15+'],
        ['slug' => 'jammu-and-kashmir','name'=> 'Jammu and Kashmir','code' => 'JK', 'cities_count' => '18+'],
    ];

    /**
     * All States Listing Page (/city or /states)
     */
    public function index(): string
    {
        $data = [
            'page'        => 'city',
            'module'      => 'city',
            'title'       => "All India Service " . $this->comp['company3'],
            'description' => $this->comp['company3'] . " is best packers and movers service provider across India.",
            'view_file'   => 'Modules\City\Views\states',
            'states'      => $this->allStates,
        ];

        return Template::layout2($data);
    }

    /**
     * State Cities Listing Page (/city/bihar, /city/delhi, etc.)
     */
    public function state(string $stateSlug): string
    {
        $stateSlug = strtolower(trim($stateSlug));
        $stateName = ucwords(str_replace('-', ' ', $stateSlug));

        // Load state data array file if available
        $dataFile = APPPATH . "Modules/City/Views/data/{$stateSlug}.php";
        $cities = [];
        if (file_exists($dataFile)) {
            include $dataFile; // sets $cities array
        }

        // Fallback default cities if array file is minimal
        if (empty($cities)) {
            $cities = [
                ['nm' => $stateName . ' Central'],
                ['nm' => $stateName . ' City'],
                ['nm' => $stateName . ' North'],
                ['nm' => $stateName . ' South'],
            ];
        }

        $data = [
            'page'        => 'city',
            'module'      => 'city',
            'title'       => $this->comp['company3'] . " in " . $stateName,
            'description' => $this->comp['company3'] . " in " . $stateName . ". Top rated packers and movers services.",
            'view_file'   => 'Modules\City\Views\city_list',
            'stateSlug'   => $stateSlug,
            'stateName'   => $stateName,
            'cities'      => $cities,
            'allStates'   => $this->allStates,
        ];

        return Template::layout2($data);
    }

    /**
     * Dedicated City Shifting Page (/city/bihar/patna, etc.)
     */
    public function cityDetail(string $stateSlug, string $citySlug): string
    {
        $stateSlug = strtolower(trim($stateSlug));
        $citySlug  = strtolower(trim($citySlug));
        $stateName = ucwords(str_replace('-', ' ', $stateSlug));
        $cityName  = ucwords(str_replace('-', ' ', $citySlug));

        // Load state data for nearby cities
        $dataFile = APPPATH . "Modules/City/Views/data/{$stateSlug}.php";
        $nearbyCities = [];
        if (file_exists($dataFile)) {
            include $dataFile;
            $nearbyCities = array_slice($cities ?? [], 0, 8);
        }

        $data = [
            'page'         => 'city',
            'module'       => 'city',
            'title'        => "Best Packers and Movers in {$cityName}, {$stateName} | " . $this->comp['company3'],
            'description'  => "Hire top-rated packers and movers in {$cityName}, {$stateName}. " . $this->comp['company3'] . " offers reliable household shifting and vehicle transport services at affordable rates.",
            'view_file'    => 'Modules\City\Views\city_view',
            'stateSlug'    => $stateSlug,
            'citySlug'     => $citySlug,
            'stateName'    => $stateName,
            'cityName'     => $cityName,
            'nearbyCities' => $nearbyCities,
        ];

        return Template::layout2($data);
    }
}
