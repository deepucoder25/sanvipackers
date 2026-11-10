<?php
/**
 * City Dynamic Content File
 * Defines modular variables for city relocation pages with dynamic city, state, company, and phone replacement.
 */

// Safe fallback assignments
$cName  = !empty($cityName) ? $cityName : (!empty($city) ? $city : 'Your City');
$sName  = !empty($stateName) ? $stateName : '';
$cComp  = !empty($company3) ? $company3 : 'Sanvi Packers and Movers';
$cPhone = !empty($phone) ? $phone : '+91 99304 44433';

// 1. Main Heading & Intro Paragraphs
$city_main_title = "Reliable Packers and Movers in {$cName} for Safe and Affordable Relocation";

$city_intro_p1 = "Looking for reliable packers and movers in {$cName}? {$cComp} deliver complete relocation services across India. We have more than 10 years of experience in the moving industry, and we know how important it is to pack, handle and transport your goods. The services provided by us include household relocation, office relocation, auto relocation, warehouse relocation, packing and moving, loading and unloading. Proper packing material including corrugated cartons, multi-layer bubble wrap, foam sheets, stretch film, protective covers etc., is used by us to protect the furniture, electrical appliances, electronic gadgets, fragile goods and other household goods.";

$city_intro_p2 = "As per the needs of the cargo and requirement of transportation, Tata Ace trucks, pickup vans, mini trucks, closed body trucks, container vehicles and car carriers are hired by us. Irrespective of whether you want to relocate a 1BHK flat or a large house or office, our experienced moving experts will plan the work accordingly. The cost of local shifting for a 1BHK flat in {$cName} may start at around Rs.3,000 to Rs.5,000, Rs.5,000 to Rs.9,000 for a 2BHK and Rs.8,000 to Rs.15,000 or more for a 3BHK.";

$city_intro_p3 = "These costs will depend on the number of cargo, distance in kilometers, packing needs, type of transport vehicle and other services required. A 100% Free Doorstep Survey of your belongings is done by us to provide an appropriate quotation for our Zero Hidden Charges Guarantee. We will consider local roads, traffic conditions, narrow residential lanes, highway connections, toll plazas and proper routes for transporting your belongings from pickup location to delivery point.";

$city_intro_p4 = "Our GPS enabled tracking service along with regular updates about your shipment will allow customers to track their shipment during transportation. Besides, we also offer All India complete Insurance service and IBA approved service where required. Our experienced employees maintain a polite and friendly behavior, listen to your instructions and take care of your goods during the packing, loading, transportation and unloading process. We always maintain focus on organized moving service, clear communication and reliable customer support from your very first inquiry to last delivery.";

// 2. Why People Choose Our Moving Company
$city_why_choose_title = "Why People Choose Our Moving Company {$cComp} For Relocating";
$city_why_choose_intro = "Choosing a moving company is an important task since your household belongings and business needs proper care. Here is why you should choose our relocation services:";

$city_why_choose_points = [
    [
        'title' => '10+ Years of Industry Experience',
        'desc'  => 'Experience in handling various household, office and automobile shifting needs.',
        'icon'  => 'bi-award-fill',
    ],
    [
        'title' => '100% Free Doorstep Survey',
        'desc'  => 'We do a survey of your shipment before preparing a quotation.',
        'icon'  => 'bi-clipboard2-check-fill',
    ],
    [
        'title' => 'Zero Hidden Charges Guarantee',
        'desc'  => 'We prepare transparent quotations according to the agreed upon service requirements.',
        'icon'  => 'bi-shield-check',
    ],
    [
        'title' => 'All-India Comprehensive Insurance',
        'desc'  => 'Insurance services for eligible shipments, subject to policy terms and coverage.',
        'icon'  => 'bi-shield-lock-fill',
    ],
    [
        'title' => 'Verified Movers',
        'desc'  => 'Our moving professionals are verified before assigning them to the relocation tasks.',
        'icon'  => 'bi-person-check-fill',
    ],
    [
        'title' => 'IBA Approved',
        'desc'  => 'We provide IBA approved shifting services, wherever applicable, subject to relevant approval and documentation.',
        'icon'  => 'bi-patch-check-fill',
    ],
    [
        'title' => 'GPS-Enabled Tracking',
        'desc'  => 'Tracking facility during transportation of your goods.',
        'icon'  => 'bi-geo-alt-fill',
    ],
    [
        'title' => 'Suitable Transport Vehicles',
        'desc'  => 'Various kinds of transport vehicles for household goods, office equipment and automobiles.',
        'icon'  => 'bi-truck',
    ],
    [
        'title' => 'Customer Support',
        'desc'  => 'Support in booking, packing schedule, transportation updates and delivery coordination.',
        'icon'  => 'bi-headset',
    ],
];

// 3. Our Process for Safe and Hassle-Free House Shifting
$city_process_title = "Our Process for Safe and Hassle-Free House Shifting in {$cName}";
$city_process_intro = "We follow an organized process, so that our customers can know what to expect in each stage of their relocation.";

$city_process_steps = [
    [
        'step'  => '01',
        'title' => 'Enquiry and Free Doorstep Survey',
        'desc'  => 'Reach out to us and give us your pickup location, destination, desired shifting date and shipment information. We will arrange a free doorstep survey to estimate the quantity of your belongings and packing needs.',
        'icon'  => 'bi-clipboard2-data-fill',
    ],
    [
        'step'  => '02',
        'title' => 'Transparent Quotation and Shifting Schedule',
        'desc'  => 'After doing the inspection and calculating the approximate transportation distance, we will prepare the quotation. Your estimated charges, selected services and shifting schedule will be discussed before booking.',
        'icon'  => 'bi-file-earmark-text-fill',
    ],
    [
        'step'  => '03',
        'title' => 'Professional Packing and Organized Loading',
        'desc'  => 'On your shifting day, our staff will come equipped with required packing materials. Your furniture, electrical appliances, cartons and fragile belongings will be packed separately and loaded into suitable vehicles.',
        'icon'  => 'bi-box-seam-fill',
    ],
    [
        'step'  => '04',
        'title' => 'GPS Tracking of Your Shipment and Regular Updates',
        'desc'  => 'After loading, the vehicle will travel on the planned highway route towards the destination location. You will get updates of your shipment through GPS enabled tracking and coordination services.',
        'icon'  => 'bi-geo-fill',
    ],
    [
        'step'  => '05',
        'title' => 'Safe Delivery, Unloading and Final Assistance',
        'desc'  => 'Once the vehicle arrives at the destination location, our team will unload the goods and assist in positioning the items at agreed locations.',
        'icon'  => 'bi-house-check-fill',
    ],
];

// 4. Case Study: 2BHK Flat Shifting
$city_case_study_title = "Case Study: 2BHK Flat Shifting in {$cName}";
$city_case_study_p1    = "A family who wants to shift from a 2BHK flat in {$cName} to another city. The family wants to transport beds, wardrobes, refrigerator, washing machine, kitchen utensils, clothes and several cartons of their belongings.";
$city_case_study_p2    = "Our team will start with a doorstep survey of the shipment to learn about the quantity of belongings and packing needs. On the shifting day, the staff will arrive with cartons, multi-layer bubble wraps and furniture covers. Fragile kitchenware will be packed separately, while furniture and electrical appliances will be packed with protective wrapping.";
$city_case_study_p3    = "After the packing is done, the goods will be loaded in suitable vehicles. The shipment will travel through the planned highway route, and the family will be getting updates of the shipment. Once the vehicle reaches the destination, our team will unload the goods and assist in positioning of items inside the new house.";

// 5. Frequently Asked Questions
$city_faqs_title = "Frequently Asked Questions About Hiring Packers and Movers in {$cName}";
$city_faqs = [
    [
        'q' => "Do {$cComp} offer a free doorstep survey?",
        'a' => "Yes, we offer a 100% free doorstep survey to inspect your belongings, understand your shifting requirements and prepare a suitable quotation.",
    ],
    [
        'q' => "Can I track my household goods during transportation?",
        'a' => "Yes, with our GPS-enabled tracking service and coordination, you can get updates of your shipment during transportation.",
    ],
    [
        'q' => "Do you provide insurance for inter-city household shifting?",
        'a' => "Yes, we offer insurance services for eligible shipments throughout India. Terms and conditions of coverage and claim are dependent on the applicable insurance policy.",
    ],
];

// 6. Contact CTA
$city_cta_title = "Contact {$cComp} for a Free Quotation in {$cName}";
$city_cta_desc  = "Shifting your household, office, car or bike? Contact {$cComp} for shifting services. Call Us Now: {$cPhone}";

// HTML block helpers for backward-compatibility or single-variable output
$htmlcontent = "
    <p class='mb-3'>{$city_intro_p1}</p>
    <p class='mb-3'>{$city_intro_p2}</p>
    <p class='mb-3'>{$city_intro_p3}</p>
    <p class='mb-0'>{$city_intro_p4}</p>
";
