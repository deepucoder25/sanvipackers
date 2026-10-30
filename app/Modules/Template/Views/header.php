<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= esc($title ?? '') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $url = "https://" . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? '');
    if (!empty($url) && $url == site_url('home')) {
        $url = site_url();
    } else {
        $url = strtolower($url);
    }

    $stateCodes = [
        'Andhra Pradesh' => 'AP', 'Arunachal Pradesh' => 'AR', 'Assam' => 'AS', 'Bihar' => 'BR',
        'Chhattisgarh' => 'CG', 'Goa' => 'GA', 'Gujarat' => 'GJ', 'Haryana' => 'HR',
        'Himachal Pradesh' => 'HP', 'Jharkhand' => 'JH', 'Karnataka' => 'KA', 'Kerala' => 'KL',
        'Madhya Pradesh' => 'MP', 'Maharashtra' => 'MH', 'Manipur' => 'MN', 'Meghalaya' => 'ML',
        'Mizoram' => 'MZ', 'Nagaland' => 'NL', 'Odisha' => 'OR', 'Punjab' => 'PB',
        'Rajasthan' => 'RJ', 'Sikkim' => 'SK', 'Tamil Nadu' => 'TN', 'Telangana' => 'TG',
        'Tripura' => 'TR', 'Uttar Pradesh' => 'UP', 'Uttarakhand' => 'UK', 'West Bengal' => 'WB',
        'Delhi' => 'DL', 'Jammu and Kashmir' => 'JK', 'Ladakh' => 'LA', 'Puducherry' => 'PY',
        'Chandigarh' => 'CH', 'Andaman and Nicobar Islands' => 'AN', 'Lakshadweep' => 'LD',
        'Dadra and Nagar Haveli and Daman and Diu' => 'DN'
    ];
    $stateName = !empty($state) ? (string)$state : (!empty($companystate) ? (string)$companystate : '');
    $stateShortCode = !empty($stateName) && isset($stateCodes[$stateName]) ? $stateCodes[$stateName] : '';
    ?>
    <meta name="description" content="<?= esc($description ?? '') ?>" />
    <meta name="keywords" content="<?= esc($keywords ?? '') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link rel="canonical" href="<?= esc($url ?? '') ?>" />
    <meta name="author" content="<?= esc($company3 ?? '') ?>" />
    <meta name="copyright" content="<?= esc($company3 ?? '') ?>" />
    <meta name="reply-to" content="<?= esc($replyToMail ?? ($mail ?? '')) ?>" />
    <meta name="og_title" property="og:title" content="<?= esc($title ?? '') ?>">
    <meta property="og:type" content="website">
    <meta name="og_site_name" property="og:site_name" content="<?= esc($company3 ?? '') ?>" />
    <meta property="og:image" content="<?= esc($img ?? '') ?>" />
    <meta name="og_url" property="og:url" content="<?= esc($url ?? '') ?>" />
    <meta property="og:description" content="<?= esc($description ?? '') ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="<?= esc($themeColor ?? '') ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= esc($themeColor ?? '') ?>">
    <meta name="allow-search" content="yes" />
    <meta name="geo.region" content="<?= !empty($stateShortCode) ? ('IN-' . esc($stateShortCode)) : '' ?>">
    <meta name="geo.placename" content="<?= esc($city ?? '') ?>">
    <meta name="revisit-after" content="weekly" />
    <meta name="distribution" content="global" />
    <meta name="language" content="en" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/favicon.png') ?>">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/logo/favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/logo/favicon.png') ?>">

    <!-- Schema 1: Organization -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "<?= esc($company3 ?? '') ?>",
      "url": "<?= base_url() ?>",
      "logo": "<?= base_url('assets/img/logo/logo.webp') ?>"
    }
    </script>

    <!-- Schema 2: LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "<?= esc($company3 ?? '') ?>",
      "url": "<?= esc($url ?? '') ?>",
      "image": ["<?= base_url('assets/img/logo/favicon.webp') ?>"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= esc($address1 ?? '') ?>",
        "addressLocality": "<?= esc($address2 ?? '') ?>",
        "postalCode": "<?= esc($postalCode ?? '') ?>",
        "addressRegion": "<?= esc($addressRegion ?? '') ?>",
        "addressCountry": "India"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= esc($ratingValue ?? '') ?>",
        "ratingCount": "<?= esc($ratingCount ?? '') ?>",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [{
        "@type": "Review",
        "datePublished": "<?= esc($datePublished ?? '') ?>",
        "reviewBody": "<?= esc($reviewBody ?? '') ?>",
        "author": {
          "@type": "Person",
          "name": "<?= esc($reviewperson ?? '') ?>"
        }
      }],
      "paymentAccepted": ["Cash", "Master Card", "Visa Card", "Debit Cards", "Cheques", "Credit Card"],
      "priceRange": "1500 - 180000",
      "telephone": "<?= esc($phone ?? '') ?>",
      "email": "<?= esc($mail ?? '') ?>"
    }
    </script>

    <!-- Schema 3: Product / Service -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Product",
      "sku": "<?= esc($sku ?? '') ?>",
      "mpn": "<?= esc($mpn ?? '') ?>",
      "name": "<?= !empty($productname) ? esc($productname) : (!empty($city) ? ('Packers and Movers Services in ' . esc($city)) : '') ?>",
      "image": "<?= esc($img ?? '') ?>",
      "description": "<?= esc($description ?? '') ?>",
      "url": "<?= esc($url ?? '') ?>",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= esc($ratingValue ?? '') ?>",
        "ratingCount": "<?= esc($ratingCount ?? '') ?>"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "<?= esc($ratingValue ?? '') ?>",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "<?= esc($company3 ?? '') ?>"
        }
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1500.00",
        "highPrice": "180000.00",
        "priceCurrency": "INR",
        "priceValidUntil": "<?= date('Y-m-t') ?>",
        "availability": "https://schema.org/InStock",
        "url": "<?= esc($url ?? '') ?>"
      },
      "brand": {
        "@type": "Brand",
        "name": "<?= esc($company3 ?? '') ?>",
        "image": "<?= esc($img ?? '') ?>"
      }
    }
    </script>

    <!-- Bootstrap 5 CSS CDN & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
