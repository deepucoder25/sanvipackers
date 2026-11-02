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

    /**
     * 404 Error Page Handler
     * Automatically invoked by CodeIgniter 4 whenever an invalid URL or route is requested.
     */
    public function error_404(string $message = ''): string
    {
        $site = config('Site');
        $comp = $site ? $site->getComp() : [];

        $data = [
            'title'       => "404 - Page Not Found | " . ($comp['company3'] ?? 'Sanvi Packers and Movers'),
            'description' => "Sorry, the page you are looking for does not exist, has been removed, or is temporarily unavailable.",
            'page'        => '404',
            'module'      => 'template',
            'view_file'   => 'Modules\Template\Views\error_404',
            'errorMessage'=> $message,
        ];

        // Ensure HTTP 404 Not Found header is returned
        if (function_exists('response')) {
            response()->setStatusCode(404);
        }

        return self::layout2($data);
    }
}
