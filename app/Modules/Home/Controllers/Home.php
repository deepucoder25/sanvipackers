<?php

namespace Modules\Home\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;
use Modules\Services\Models\ServiceModel;

class Home extends BaseController
{
    public function index(): string
    {
        $serviceModel = new ServiceModel();

        $data['title']       = $this->comp['company3'] . ", " . $this->comp['phone'];
        $data['description'] = "Your trusted partner for hassle-free, secure relocations. Efficient home and office moving services with competitive pricing. Contact " . $this->comp['company3'] . " at " . $this->comp['phone'] . ".";
        $data['page']        = 'home';
        $data['module']      = 'home';
        $data['view_file']   = 'Modules\Home\Views\home';
        $data['services']    = $serviceModel->getAll();

        return Template::layout1($data);
    }
}
