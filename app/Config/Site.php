<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Site extends BaseConfig
{
    /**
     * Single Unified Company Configuration (CI3 $comp format)
     * Ab aapko 2 jagah define karne ki bilkul zaroorat nahi hai.
     * Sirf is EK jagah details change kijiye, pure project (Controller, Views, Header, Footer, Schema) me apply ho jayega!
     */
    public $comp = [
        'company3'      => 'QuickRelocation',
        'companydomain' => 'quickrelocation.com',
        'phone'         => '+91 98765 43210',
        'phonehtml'     => 'href="tel:+919876543210"',
        'mail'          => 'info@relocationservices.com',
        'mailhtml'      => 'mailto:info@relocationservices.com',
        'replyToMail'   => 'info@relocationservices.com',
        'whatsapp'      => '919876543210',
        'whatsapphtml'  => 'https://wa.me/919876543210',
        'address'       => 'Plot No. 42, Transport Nagar, Mumbai - 400705, Maharashtra, India',
        'address1'      => 'Plot No. 42, Transport Nagar',
        'address2'      => 'Mumbai - 400705, Maharashtra, India',
        'addressRegion' => 'Mumbai',
        'postalCode'    => '400705',
        'companystate'  => 'Maharashtra',
        'themeColor'    => '#0284c7',

        'experience'    => '25+',
        'startYear'     => '1998',

        // Schema / Rich Snippets (Google SEO)
        'sku'           => 'PM28957',
        'mpn'           => 'SPM28957',
        'ratingValue'   => '4.9',
        'ratingCount'   => '39850',
        'datePublished' => '2026-08-02',
        'reviewBody'    => 'Best Packing And Moving Company in India.',
        'reviewperson'  => 'Arshad Ali',

        'tagline'       => 'Safe, Fast & Insured Relocation Services Across India',
        'workingHours'  => 'Mon - Sat: 9:00 AM - 8:00 PM',
        'facebookhtml'  => '#',
        'twitterhtml'   => '#',
        'instagramhtml' => '#',
        'linkedinhtml'  => '#',
        'youtubehtml'   => '#',
    ];

    /**
     * Return exact $comp array
     */
    public function getComp(): array
    {
        return $this->comp;
    }

    /**
     * Dynamic getter: agar koi code $site->name ya $site->phone access kare
     * toh wo bhi isi $this->comp array se dynamically return ho jayega.
     */
    public function __get($key)
    {
        if ($key === 'name') {
            return $this->comp['company3'] ?? '';
        }
        if ($key === 'email') {
            return $this->comp['mail'] ?? '';
        }
        return $this->comp[$key] ?? null;
    }

    public function __isset($key)
    {
        if ($key === 'name') {
            return isset($this->comp['company3']);
        }
        if ($key === 'email') {
            return isset($this->comp['mail']);
        }
        return isset($this->comp[$key]);
    }
}
