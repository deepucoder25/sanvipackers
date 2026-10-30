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
        'company3'      => 'Sanvi Packers',
        'companydomain' => 'sanvipackers.com',
        'phone'         => '+91 70217 10594',
        'phonehtml'     => 'href="tel:+917021710594"',
        'mail'          => 'info@sanvipackers.com',
        'mailhtml'      => 'mailto:info@sanvipackers.com',
        'replyToMail'   => 'info@sanvipackers.com',
        'whatsapp'      => '7021710594',
        'whatsapphtml'  => 'https://wa.me/917021710594',
        'address'       => 'Room Number: 28, Shiv Darshan Society, Gokul Nagar, Kandivali East, Mumbai-400101',
        'address1'      => 'Room Number: 28, Shiv Darshan Society, Gokul Nagar,',
        'address2'      => 'Kandivali East, Mumbai-400101, Maharashtra, India',
        'addressRegion' => 'Mumbai',
        'postalCode'    => '400101',
        'companystate'  => 'Maharashtra',
        'themeColor'    => '#0284c7',

        'experience'    => '15+',
        'startYear'     => '2010',

        // Schema / Rich Snippets (Google SEO)
        'sku'           => 'SPM28957',
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
