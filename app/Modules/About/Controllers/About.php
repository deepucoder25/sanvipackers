<?php

namespace Modules\About\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;

class About extends BaseController
{
    public function index(): string
    {
        $data['title']       = "About Us | " . $this->comp['company3'];
        $data['description'] = "About " . $this->comp['company3'] . " — ISO 9001:2015 Certified and IBA Approved relocation company providing safe household shifting, office relocation, vehicle transport, and warehousing across 500+ Indian cities.";
        $data['page']        = 'about';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\about';

        return Template::layout2($data);
    }

    public function choose(): string
    {
        $data['title']       = "Why Choose Us | " . $this->comp['company3'];
        $data['description'] = "Why Choose " . $this->comp['company3'] . " — Because the transportation of your belongings is about more than just transport. ISO 9001:2015 Certified and IBA Approved relocation across 500+ Indian cities.";
        $data['page']        = 'why-choose-us';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\choose';

        return Template::layout2($data);
    }

    public function faqs(): string
    {
        $data['title']       = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about packing and shifting charges, transit insurance, delivery timeline, tracking, and restricted items at " . $this->comp['company3'] . ".";
        $data['page']        = 'faqs';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\faqs';

        return Template::layout2($data);
    }

    public function testimonials()
    {
        return redirect()->to(site_url('reviews'), 301);
    }

    public function privacy(): string
    {
        $data['title']       = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "How " . $this->comp['company3'] . " handles and protects your personal data during your relocation.";
        $data['page']        = 'privacy';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\privacy';

        return Template::layout2($data);
    }

    public function terms(): string
    {
        $data['title']       = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "The terms and conditions governing our relocation services at " . $this->comp['company3'] . ".";
        $data['page']        = 'terms';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\terms';

        return Template::layout2($data);
    }
}
