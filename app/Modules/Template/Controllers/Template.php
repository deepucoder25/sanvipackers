<?php

namespace Modules\Template\Controllers;

use App\Controllers\BaseController;
use Config\Site;

class Template extends BaseController
{
    /**
     * Merges CI3 compatibility variables ($comp, $company3, $phone, etc.)
     */
    private static function prepareData(array $data): array
    {
        $site = config('Site');
        $comp = $site->getComp();

        // Merge $comp variables directly into data array (CI3 pattern)
        $data['site'] = $site;
        $data['comp'] = $comp;
        foreach ($comp as $k => $v) {
            if (!isset($data[$k])) {
                $data[$k] = $v;
            }
        }
        $data['data'] = $data;
        return $data;
    }

    /**
     * Layout 1: Header + Navigation + Slider + Body + Footer (Used for Homepage)
     */
    public static function layout1(array $data = []): string
    {
        $data = self::prepareData($data);

        return view('Modules\Template\Views\header', $data)
            . view('Modules\Template\Views\navigation', $data)
            . view('Modules\Template\Views\slider', $data)
            . view('Modules\Template\Views\body', $data)
            . view('Modules\Template\Views\footer', $data);
    }

    /**
     * Layout 2: Header + Navigation + Body + Footer (Used for Inner Pages)
     */
    public static function layout2(array $data = []): string
    {
        $data = self::prepareData($data);

        return view('Modules\Template\Views\header', $data)
            . view('Modules\Template\Views\navigation', $data)
            . view('Modules\Template\Views\body', $data)
            . view('Modules\Template\Views\footer', $data);
    }
}
