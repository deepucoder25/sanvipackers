<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Site company configuration accessible in all controllers ($this->comp['company3'], etc.)
     *
     * @var array<string, mixed>
     */
    public $comp = [];

    /**
     * Database connection instance accessible in all controllers ($this->db)
     * Configured once in app/Config/Database.php
     *
     * @var \CodeIgniter\Database\BaseConnection|null
     */
    public $db = null;

    /**
     * Helpers loaded automatically for all controllers.
     *
     * @var list<string>
     */
    protected $helpers = ['url', 'html', 'form'];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload company details ($this->comp) exactly like CI3
        $site = config('Site');
        if ($site && method_exists($site, 'getComp')) {
            $this->comp = $site->getComp();
        } else {
            $this->comp = [
                'company3'      => 'QuickRelocation',
                'companydomain' => 'quickrelocation.com',
                'phone'         => '+91 98765 43210',
                'phonehtml'     => 'href="tel:+919876543210"',
                'mail'          => 'info@relocationservices.com',
                'mailhtml'      => 'mailto:info@relocationservices.com',
                'whatsapphtml'  => 'https://wa.me/919876543210',
                'address'       => 'Plot No. 42, Transport Nagar, Mumbai - 400705, Maharashtra, India',
                'address1'      => 'Plot No. 42, Transport Nagar',
                'address2'      => 'Mumbai - 400705, Maharashtra, India',
                'facebookhtml'  => '#',
                'twitterhtml'   => '#',
                'instagramhtml' => '#',
                'linkedinhtml'  => '#',
                'youtubehtml'   => '#',
            ];
        }

        // Single database connection point - configured in app/Config/Database.php
        try {
            $this->db = \Config\Database::connect();
        } catch (\Throwable $e) {
            $this->db = null;
        }
    }
}
