<?php

namespace Modules\About\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;

class About extends BaseController
{
    public function index(): string
    {
        $data['title']       = "About Us | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . ", our legacy, infrastructure, expert team, mission, and vision in the packing and moving industry.";
        $data['page']        = 'about';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\about';

        return Template::layout2($data);
    }

    public function choose(): string
    {
        $data['title']       = "Why Choose Us | " . $this->comp['company3'];
        $data['description'] = "Discover why customers trust " . $this->comp['company3'] . " for safe, reliable, and transparently priced shifting, vehicle transport, and corporate relocation services.";
        $data['page']        = 'why-choose-us';
        $data['module']      = 'whychooseus';
        $data['view_file']   = 'Modules\WhyChooseUs\Views\why_choose_us';

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

    public function testimonials(): string
    {
        $data['title']       = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . " home shifting, vehicle transportation, and office relocation services.";
        $data['page']        = 'testimonials';
        $data['module']      = 'about';
        $data['view_file']   = 'Modules\About\Views\testimonials';

        return Template::layout2($data);
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
