<?php

namespace Modules\Services\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;

class Services extends BaseController
{
    /**
     * Master list of all relocation services (replaces Model)
     */
    public static function getServicesList(): array
    {
        return [
            [
                'slug'       => 'household-moving',
                'title'      => 'Household Moving',
                'icon'       => 'bi-house-heart-fill',
                'tag'        => 'Doorstep',
                'tagIcon'    => 'bi-door-open-fill',
                'chip1_icon' => 'bi-shield-check text-danger',
                'chip1_text' => 'Zero Damage Move',
                'chip2_icon' => 'bi-box-seam text-warning',
                'chip2_text' => '5-Layer Bubble Pack',
                'desc'       => 'Complete door-to-door home relocation with 5-layer bubble packaging, specialized wardrobe boxes, and careful furniture assembly.',
                'features'   => [
                    'Zero damage guarantee on glassware & delicate decor',
                    'Customized wooden crating for crockery & LED TVs',
                    'Dismantling & reassembly of beds, almirahs & modular furniture',
                    'Complete unpacking & organized room-by-room setup at destination'
                ]
            ],
            [
                'slug'       => 'office-relocation',
                'title'      => 'Office Relocation',
                'icon'       => 'bi-buildings-fill',
                'tag'        => 'Corporate',
                'tagIcon'    => 'bi-briefcase-fill',
                'chip1_icon' => 'bi-clock-history text-danger',
                'chip1_text' => 'Zero Downtime',
                'chip2_icon' => 'bi-server text-warning',
                'chip2_text' => 'IT & Server Care',
                'desc'       => 'Minimal downtime workplace shifting, server racks handling, modular workstation relocation, and confidential files archiving.',
                'features'   => [
                    'Weekend & overnight moves ensuring zero business interruption',
                    'Antistatic bubble packing for servers, routers & workstations',
                    'Dedicated corporate logistics coordinator & floor manager',
                    'Confidential document tagging, sealing & chain of custody'
                ]
            ],
            [
                'slug'       => 'vehicle-transportation',
                'title'      => 'Car & Bike Shifting',
                'icon'       => 'bi-car-front-fill',
                'tag'        => 'GPS Live',
                'tagIcon'    => 'bi-geo-alt-fill',
                'chip1_icon' => 'bi-truck text-danger',
                'chip1_text' => 'Covered Trailers',
                'chip2_icon' => 'bi-shield-fill-check text-warning',
                'chip2_text' => 'Transit Insured',
                'desc'       => 'Dedicated enclosed multi-car carriers and customized wooden crating for sports bikes with transit tracking from start to finish.',
                'features'   => [
                    'Enclosed hydraulic car carrier trailers with wheel lock clamps',
                    'Sturdy custom wooden crating for super-bikes & scooters',
                    'Pre-dispatch digital photographic scratch & condition report',
                    'Real-time GPS tracking & 100% all-India transit insurance cover'
                ]
            ],
            [
                'slug'       => 'warehouse-storage',
                'title'      => 'Warehouse Storage',
                'icon'       => 'bi-archive-fill',
                'tag'        => 'Secure',
                'tagIcon'    => 'bi-lock-fill',
                'chip1_icon' => 'bi-camera-video-fill text-danger',
                'chip1_text' => '24/7 CCTV Monitored',
                'chip2_icon' => 'bi-fire text-warning',
                'chip2_text' => 'Pest & Fire Safe',
                'desc'       => '24x7 CCTV monitored, moisture-controlled short and long-term storage facilities with flexible monthly billing plans.',
                'features'   => [
                    '24/7 CCTV monitored secure compound with access control',
                    'Moisture-controlled, pest-treated clean private storage bays',
                    'Flexible short-term & long-term monthly storage plans',
                    'Barcode inventory management for fast recall and retrieval'
                ]
            ],
            [
                'slug'       => 'packing-moving',
                'title'      => 'Packing & Moving',
                'icon'       => 'bi-box-seam-fill',
                'tag'        => 'Safe Pack',
                'tagIcon'    => 'bi-patch-check-fill',
                'chip1_icon' => 'bi-box2-heart-fill text-danger',
                'chip1_text' => 'Heavy Duty Cartons',
                'chip2_icon' => 'bi-tags-fill text-warning',
                'chip2_text' => 'Item Label Tagging',
                'desc'       => 'Heavy duty double-wall corrugated cartons, air bubble rolls, foam corners, stretch wrap, and edge protectors for total safety.',
                'features'   => [
                    '5-layer heavy duty corrugated carton boxes & foam edge guards',
                    'Multi-ply bubble wrap, stretch film & specialized tape sealing',
                    'Color-coded box labeling & itemized packing list generation',
                    'Moisture & dust-proof mattress covers and sofa slipcovers'
                ]
            ],
            [
                'slug'       => 'loading-unloading',
                'title'      => 'Loading & Unloading',
                'icon'       => 'bi-truck-front-fill',
                'tag'        => 'Equipped',
                'tagIcon'    => 'bi-gear-fill',
                'chip1_icon' => 'bi-wrench-adjustable text-danger',
                'chip1_text' => 'Hydraulic Equipment',
                'chip2_icon' => 'bi-people-fill text-warning',
                'chip2_text' => 'Trained Ground Crew',
                'desc'       => 'Trained, background-checked ground crew equipped with hydraulic lifters, ramps, dollies, and safety belts for heavy equipment.',
                'features'   => [
                    'Heavy lifter dollies, hydraulic tailgates & mechanical ramps',
                    'Police-verified, courteous and fully uniformed handling staff',
                    'Protective doorway blankets, stair runners & floor shields',
                    'Balanced cargo weight distribution inside vehicles'
                ]
            ],
        ];
    }

    /**
     * Services Listing Overview Page
     */
    public function index(): string
    {
        $data['title']       = "Our Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Explore safe, reliable and affordable packing, moving, car transport, and warehouse services from " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\services';
        $data['services']    = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Household Moving & Home Shifting Page
     */
    public function household_moving(): string
    {
        $data['title']       = "Household Moving & Home Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Complete door-to-door home relocation with 5-layer bubble packaging, specialized wardrobe boxes, and careful furniture assembly by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['serviceSlug'] = 'household-moving';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\household_moving';
        $data['allServices'] = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Office Relocation & Corporate Shifting Page
     */
    public function office_relocation(): string
    {
        $data['title']       = "Office Relocation & Corporate Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Minimal downtime workplace shifting, server racks handling, modular workstation relocation, and confidential files archiving by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['serviceSlug'] = 'office-relocation';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\office_relocation';
        $data['allServices'] = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Car & Bike Transportation Page
     */
    public function vehicle_transportation(): string
    {
        $data['title']       = "Car & Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Dedicated enclosed multi-car carriers and customized wooden crating for sports bikes with live GPS tracking by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['serviceSlug'] = 'vehicle-transportation';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\vehicle_transportation';
        $data['allServices'] = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Warehouse & Household Goods Storage Page
     */
    public function warehouse_storage(): string
    {
        $data['title']       = "Secure Warehouse & Goods Storage Facility | " . $this->comp['company3'];
        $data['description'] = "24x7 CCTV monitored, moisture-controlled short and long-term storage facilities with flexible monthly billing plans by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['serviceSlug'] = 'warehouse-storage';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\warehouse_storage';
        $data['allServices'] = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Professional Packing & Moving Page
     */
    public function packing_moving(): string
    {
        $data['title']       = "Professional Packing & Moving Services | " . $this->comp['company3'];
        $data['description'] = "Heavy duty double-wall corrugated cartons, air bubble rolls, foam corners, stretch wrap, and edge protectors by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['serviceSlug'] = 'packing-moving';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\packing_moving';
        $data['allServices'] = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Loading & Unloading Services Page
     */
    public function loading_unloading(): string
    {
        $data['title']       = "Safe Loading & Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Trained, background-checked ground crew equipped with hydraulic lifters, ramps, dollies, and safety belts by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['serviceSlug'] = 'loading-unloading';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\loading_unloading';
        $data['allServices'] = self::getServicesList();

        return Template::layout2($data);
    }

    /**
     * Dynamic URL Slug Router & Fallback
     */
    public function detail(string $slug): string
    {
        switch ($slug) {
            case 'household-moving':
            case 'household_moving':
            case 'home-relocation':
            case 'home-shifting':
                return $this->household_moving();

            case 'office-relocation':
            case 'office_relocation':
            case 'corporate-relocation':
                return $this->office_relocation();

            case 'vehicle-transportation':
            case 'vehicle_transportation':
            case 'car-transportation':
            case 'bike-transportation':
            case 'car-bike-shifting':
                return $this->vehicle_transportation();

            case 'warehouse-storage':
            case 'warehouse_storage':
            case 'storage-services':
            case 'warehousing':
                return $this->warehouse_storage();

            case 'packing-moving':
            case 'packing_moving':
            case 'packing-and-moving':
                return $this->packing_moving();

            case 'loading-unloading':
            case 'loading_unloading':
            case 'loading-and-unloading':
                return $this->loading_unloading();

            default:
                return $this->household_moving();
        }
    }

    // CI3 method shortcuts
    public function homeShifting(): string
    {
        return $this->household_moving();
    }

    public function office(): string
    {
        return $this->office_relocation();
    }

    public function bike(): string
    {
        return $this->vehicle_transportation();
    }

    public function car(): string
    {
        return $this->vehicle_transportation();
    }

    public function packingMoving(): string
    {
        return $this->packing_moving();
    }

    public function loadingUnloading(): string
    {
        return $this->loading_unloading();
    }

    public function storage(): string
    {
        return $this->warehouse_storage();
    }
}
