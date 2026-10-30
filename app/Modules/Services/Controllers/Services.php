<?php

namespace Modules\Services\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;
use Modules\Services\Models\ServiceModel;

class Services extends BaseController
{
    public function index(): string
    {
        $serviceModel = new ServiceModel();

        $data['title']       = "Our Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Explore safe, reliable and affordable packing, moving, car transport, and warehouse services from " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\services';
        $data['services']    = $serviceModel->getAll();

        return Template::layout2($data);
    }

    public function detail(string $slug): string
    {
        $serviceModel = new ServiceModel();
        $service = $serviceModel->getBySlug($slug);

        if (!$service) {
            // Check fallback by first available service
            $all = $serviceModel->getAll();
            $service = $all[0] ?? [
                'title' => 'Relocation Services',
                'desc' => 'Professional relocation solutions across India.',
                'features' => ['Fast Moving', 'Insured Transit']
            ];
        }

        $data['title']       = $service['title'] . " | " . $this->comp['company3'];
        $data['description'] = $service['desc'] . " Reliable service provided by " . $this->comp['company3'] . ".";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\service_detail';
        $data['service']     = $service;
        $data['allServices'] = $serviceModel->getAll();

        return Template::layout2($data);
    }

    // CI3 method shortcuts
    public function homeShifting(): string
    {
        return $this->detail('household-moving');
    }

    public function office(): string
    {
        return $this->detail('office-relocation');
    }

    public function bike(): string
    {
        return $this->detail('vehicle-transportation');
    }

    public function car(): string
    {
        return $this->detail('vehicle-transportation');
    }

    public function packingMoving(): string
    {
        return $this->detail('packing-moving');
    }

    public function loadingUnloading(): string
    {
        return $this->detail('loading-unloading');
    }

    public function storage(): string
    {
        return $this->detail('warehouse-storage');
    }
}
