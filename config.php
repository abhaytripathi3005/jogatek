<?php

/**
 * JogaTek website config & SEO (JogaTek pages only — no TekSathi URLs).
 */

define('BASE_PATH', realpath(__DIR__));
define('BASE_URL', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/');

define('SITE_NAME', 'JogaTek');
define('COMPANY_NAME', 'Jogaapp Technologies Pvt. Ltd.');
define('SITE_EMAIL', 'info@jogatek.com');
define('SITE_PHONE', '+91 7317855235');
define('SEO_DEFAULT_IMAGE', 'assets/images/hero.png');

$seo = [
    'default' => [
        'title' => 'JogaTek | Website, Mobile App & Software Development Company',
        'description' => 'JogaTek (Jogaapp Technologies) builds mobile apps, websites, web applications, and enterprise software with QA, cloud deployment, and ongoing support.',
        'keywords' => 'software development company, website development company, mobile app development, web application development, SaaS development, cloud deployment, IT company India, JogaTek',
        'robots' => 'index, follow',
    ],

    'home' => [
        'title' => 'JogaTek | Website, Mobile App & Software Development Company',
        'description' => 'JogaTek by Jogaapp Technologies Pvt. Ltd. is a software development company building scalable websites, mobile apps, SaaS platforms, and enterprise digital solutions.',
        'keywords' => 'software development company, mobile app development company, website development services, web application development, enterprise software development, IT services India, Jogaapp Technologies',
        'image' => 'assets/images/hero.png',
    ],

    'about-us' => [
        'title' => 'About Us | JogaTek – Software Development Company',
        'description' => 'Learn about JogaTek (Jogaapp Technologies Pvt. Ltd.) — a premium software company building scalable mobile apps, web platforms, and enterprise digital products.',
        'keywords' => 'about JogaTek, Jogaapp Technologies, software company India, digital product development company',
        'image' => 'assets/images/about-jogatek.png',
    ],

    'why-choose-us' => [
        'title' => 'Why Choose Us | JogaTek',
        'description' => 'Discover why businesses trust JogaTek for reliable delivery, skilled developers, transparent communication, and long-term digital product success.',
        'keywords' => 'why choose JogaTek, trusted software development partner, reliable IT company, digital growth partner',
        'image' => 'assets/images/why-choose-us.png',
    ],

    'our-process' => [
        'title' => 'Our Development Process | JogaTek',
        'description' => 'See how JogaTek plans, designs, develops, tests, and delivers high-quality software projects with a proven, transparent development process.',
        'keywords' => 'software development process, agile development, project delivery methodology, JogaTek process',
        'image' => 'assets/images/process.png',
    ],

    'industries' => [
        'title' => 'Industries We Serve | JogaTek',
        'description' => 'JogaTek builds custom software for startups, enterprises, e-commerce, education, healthcare, and more — tailored solutions for every business domain.',
        'keywords' => 'industry software solutions, startup software, enterprise software industries, custom business software',
        'image' => 'assets/images/industries.png',
    ],

    'technologies' => [
        'title' => 'Technologies We Use | JogaTek',
        'description' => 'Explore the modern technologies used by JogaTek including Flutter, React, PHP, Node.js, AI integrations, cloud infrastructure, DevOps, and scalable software development solutions.',
        'keywords' => 'software tech stack, React development, Flutter app development, Laravel development, cloud technologies',
        'image' => 'assets/images/company.png',
    ],

    'testimonials' => [
        'title' => 'Client Testimonials | JogaTek',
        'description' => 'Read what clients say about working with JogaTek on mobile apps, websites, and enterprise software projects.',
        'keywords' => 'JogaTek reviews, client testimonials, software development feedback, customer success stories',
        'image' => 'assets/images/testimonials.png',
    ],

    'portfolio' => [
        'title' => 'Software Development Portfolio | Mobile Apps, Websites & SaaS Projects – JogaTek',
        'description' => 'Explore JogaTek portfolio — real mobile app, website, and web application projects that deliver measurable business results.',
        'keywords' => 'software development portfolio, mobile app portfolio, SaaS projects, website development portfolio, healthcare software, club management software, booking platform',
        'image' => 'assets/images/portfolio.png',
    ],

    'contact-us' => [
        'title' => 'Contact Us | Start Your Project – JogaTek',
        'description' => 'Contact JogaTek for mobile app development, website development, enterprise software, and IT consulting. Get a free project consultation today.',
        'keywords' => 'hire software developers, website development company, mobile app company, contact JogaTek, project enquiry, IT consultation India',
        'image' => 'assets/images/contact.png',
    ],

    'faq' => [
        'title' => 'Website Development & Software FAQ | JogaTek',
        'description' => 'Find answers about website development, mobile apps, software pricing, hosting, domain, support, maintenance, and development services at JogaTek.',
        'keywords' => 'JogaTek FAQ, software development questions, project pricing FAQ, hiring developers FAQ',
        'image' => 'assets/images/faq.png',
    ],

    'career' => [
        'title' => 'Careers | Join JogaTek Team',
        'description' => 'Explore career opportunities at JogaTek. We are hiring developers, designers, and tech professionals in Lucknow and remote roles.',
        'keywords' => 'software developer jobs, Flutter jobs, PHP developer jobs, React jobs, IT jobs India, JogaTek careers',
        'image' => 'assets/images/career.png',
    ],

    'job-apply' => [
        'title' => 'Apply for a Job | JogaTek Careers',
        'description' => 'Apply for open positions at JogaTek. Submit your application for developer, designer, and technology roles.',
        'keywords' => 'job application JogaTek, apply developer job, tech job application',
        'image' => 'assets/images/job-apply.png',
        'robots' => 'noindex, follow',
    ],

    'startup-solutions' => [
        'title' => 'Startup Solutions | JogaTek',
        'description' => 'Launch and scale your startup faster with JogaTek MVP development, product engineering, and cost-effective software solutions for founders.',
        'keywords' => 'startup software development, MVP development, startup IT partner, product engineering startup',
        'image' => 'assets/images/startup-solutions.png',
    ],

    'enterprise-solutions' => [
        'title' => 'Enterprise Solutions | JogaTek',
        'description' => 'JogaTek builds scalable enterprise software, automation systems, and secure digital platforms for large organizations and growing businesses.',
        'keywords' => 'enterprise software development, business automation, scalable enterprise systems, corporate IT solutions',
        'image' => 'assets/images/enterprise-solutions.png',
    ],

    'privacy-policy' => [
        'title' => 'Privacy Policy | JogaTek',
        'description' => 'Read JogaTek privacy policy to understand how we collect, use, and protect your personal information on our website and services.',
        'keywords' => 'JogaTek privacy policy, data protection, user privacy, website privacy policy',
        'image' => 'assets/images/privacy-policy.png',
    ],

    'terms-and-conditions' => [
        'title' => 'Terms & Conditions | JogaTek',
        'description' => 'Read JogaTek terms and conditions covering website usage, service agreements, intellectual property, and user responsibilities.',
        'keywords' => 'JogaTek terms and conditions, website terms, service agreement, legal terms',
        'image' => 'assets/images/terms.png',
    ],

    '404' => [
        'title' => 'Page Not Found | JogaTek',
        'description' => 'The page you are looking for could not be found. Return to JogaTek homepage or contact us for assistance.',
        'keywords' => '404 page not found',
        'robots' => 'noindex, nofollow',
    ],

    'services' => [
        'title' => 'Software Development Services | Website, Mobile App & Web Development – JogaTek',
        'description' => 'Explore JogaTek services — mobile app development, website development, web applications, QA testing, cloud deployment, dedicated developers, and maintenance support.',
        'keywords' => 'IT services, software development services, mobile app company, website development company, web application development, JogaTek services',
        'image' => 'assets/images/web-app.png',
    ],

    'services/mobile-app' => [
        'title' => 'Mobile App Development | Android & iOS – JogaTek',
        'description' => 'Professional mobile app development for Android and iOS. JogaTek builds scalable, user-friendly native and cross-platform mobile applications.',
        'keywords' => 'mobile app development, Android app development, iOS app development, Flutter app development, mobile application company',
        'image' => 'assets/images/mobile-app.png',
    ],

    'services/website-development' => [
        'title' => 'Website Development Services | JogaTek',
        'description' => 'Modern, responsive, SEO-friendly website development by JogaTek. Fast, secure, and high-performance business websites tailored to your brand.',
        'keywords' => 'website development, business website design, responsive website, SEO friendly website development',
        'image' => 'assets/images/website-development.png',
    ],

    'services/web-applications' => [
        'title' => 'Web Application Development | JogaTek',
        'description' => 'Custom web application development — dashboards, SaaS platforms, portals, and business tools built for performance, security, and scale.',
        'keywords' => 'web application development, custom web apps, SaaS development, business web portals',
        'image' => 'assets/images/web-app.png',
    ],

    'services/qa-testing-automation' => [
        'title' => 'QA Testing & Automation | JogaTek',
        'description' => 'Reliable QA testing and test automation services to ensure bug-free, secure, and high-quality software before launch.',
        'keywords' => 'QA testing services, software testing, test automation, quality assurance company',
        'image' => 'assets/images/qa-testing.png',
    ],

    'services/maintenance-support' => [
        'title' => 'Software Maintenance & Support | JogaTek',
        'description' => 'Ongoing software maintenance and support — updates, bug fixes, performance optimization, and reliable post-launch care for your applications.',
        'keywords' => 'software maintenance, application support, bug fixing services, post launch support',
        'image' => 'assets/images/maintenance-support.png',
    ],

    'services/cloud-deployment' => [
        'title' => 'Cloud & Deployment Services | JogaTek',
        'description' => 'Scalable cloud infrastructure setup, DevOps, and deployment services on AWS, Azure, and modern hosting platforms.',
        'keywords' => 'cloud deployment, DevOps services, AWS deployment, cloud infrastructure, server setup',
        'image' => 'assets/images/cloud-deployment.png',
    ],

    'services/dedicated-developers' => [
        'title' => 'Hire Dedicated Developers | JogaTek',
        'description' => 'Hire skilled dedicated developers from JogaTek — full-time remote developers for mobile, web, and backend projects at flexible engagement terms.',
        'keywords' => 'hire dedicated developers, remote developers India, dedicated programmer, offshore developers',
        'image' => 'assets/images/dedicated-developers.png',
    ],

    'engagement-models' => [
        'title' => 'Engagement Models | JogaTek',
        'description' => 'Flexible software engagement models — fixed cost, hourly hiring, dedicated team, staff augmentation, and maintenance contracts.',
        'keywords' => 'software engagement models, hiring models IT, dedicated team outsourcing, fixed cost development',
        'image' => 'assets/images/engagement-models.png',
    ],

    'engagement-models/fixed-cost' => [
        'title' => 'Fixed Cost Projects | JogaTek',
        'description' => 'Fixed cost software development with clear scope, timeline, and budget. Predictable delivery for defined project requirements.',
        'keywords' => 'fixed cost software development, fixed price IT project, scoped development contract',
        'image' => 'assets/images/fixed-cost.png',
    ],

    'engagement-models/hourly-hiring' => [
        'title' => 'Hourly Hiring | JogaTek',
        'description' => 'Flexible hourly hiring for developers and IT resources. Pay only for the hours you need with transparent billing.',
        'keywords' => 'hourly developer hiring, pay per hour IT, flexible developer hiring',
        'image' => 'assets/images/hourly-hiring.png',
    ],

    'engagement-models/dedicated-team' => [
        'title' => 'Dedicated Development Team | JogaTek',
        'description' => 'Build a dedicated development team with JogaTek — skilled developers working exclusively on your product long-term.',
        'keywords' => 'dedicated development team, offshore dedicated team, remote dev team India',
        'image' => 'assets/images/dedicated-team.png',
    ],

    'engagement-models/staff-augmentation' => [
        'title' => 'Staff Augmentation | JogaTek',
        'description' => 'Extend your in-house team with JogaTek staff augmentation — skilled developers integrated into your workflow quickly.',
        'keywords' => 'IT staff augmentation, team extension services, augment development team',
        'image' => 'assets/images/staff-augmentation.png',
    ],
    'website-plans' => [
    'title' => 'Affordable Website Plans with Hosting & Domain | JogaTek',

    'description' => 'Get professional business website plans with hosting, domain, SSL, support, and maintenance included. JogaTek offers affordable static websites, dynamic websites, admin panel websites, and custom website development solutions for startups, clinics, shops, salons, and companies.',

    'keywords' => 'affordable website plans, website plans India, monthly website plans, website with hosting and domain, business website package, static website pricing, dynamic website pricing, website AMC, website maintenance plan, custom website development, admin panel website, startup website package, SEO friendly website, website development company India, cheap business website India, subscription website plans, professional website design, hosting included website plan',

    'image' => 'assets/images/website-plans.png',
],

    'engagement-models/maintenance-contracts' => [
        'title' => 'Maintenance Contracts | JogaTek',
        'description' => 'Long-term maintenance contracts for software updates, security patches, monitoring, and reliable ongoing system support.',
        'keywords' => 'software maintenance contract, AMC IT services, ongoing system maintenance',
        'image' => 'assets/images/maintenance-contracts.png',
    ],
];

/** Pages not listed in sitemap.xml */
$seo_exclude_from_sitemap = ['default', '404', 'job-apply'];

$sitemap_urls = [];
foreach (array_keys($seo) as $pageKey) {
    if (in_array($pageKey, $seo_exclude_from_sitemap, true)) {
        continue;
    }
    $sitemap_urls[] = $pageKey === 'home' ? '' : $pageKey;
}

/** Breadcrumb display names (BreadcrumbList schema) */
$breadcrumb_labels = [
    'home' => 'Home',
    'about-us' => 'About Us',
    'why-choose-us' => 'Why Choose Us',
    'our-process' => 'Our Process',
    'industries' => 'Industries',
    'technologies' => 'Technologies',
    'testimonials' => 'Testimonials',
    'portfolio' => 'Portfolio',
    'contact-us' => 'Contact Us',
    'faq' => 'FAQ',
    'career' => 'Careers',
    'job-apply' => 'Apply for a Job',
    'startup-solutions' => 'Startup Solutions',
    'enterprise-solutions' => 'Enterprise Solutions',
    'privacy-policy' => 'Privacy Policy',
    'terms-and-conditions' => 'Terms & Conditions',
    '404' => 'Page Not Found',
    'services' => 'Our Services',
    'services/mobile-app' => 'Mobile App Development',
    'services/website-development' => 'Website Development',
    'services/web-applications' => 'Web Applications',
    'services/qa-testing-automation' => 'QA Testing & Automation',
    'services/maintenance-support' => 'Maintenance & Support',
    'services/cloud-deployment' => 'Cloud & Deployment',
    'services/dedicated-developers' => 'Dedicated Developers',
    'engagement-models' => 'Engagement Models',
    'engagement-models/fixed-cost' => 'Fixed Cost Projects',
    'engagement-models/hourly-hiring' => 'Hourly Hiring',
    'engagement-models/dedicated-team' => 'Dedicated Team',
    'engagement-models/staff-augmentation' => 'Staff Augmentation',
    'engagement-models/maintenance-contracts' => 'Maintenance Contracts',
    'website-plans' => 'Website Plans',
];

function get_page()
{
    $path = parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', PHP_URL_PATH);
    $path = trim((string) $path, '/');

    $base = trim(parse_url(BASE_URL, PHP_URL_PATH) ? parse_url(BASE_URL, PHP_URL_PATH) : '', '/');
    if ($base !== '' && strpos($path, $base) === 0) {
        $path = trim(substr($path, strlen($base)), '/');
    }

    $path = str_replace('index.php', '', $path);
    $path = trim($path, '/');

    return $path === '' ? 'home' : $path;
}

/** Active class for top-level nav item (li.dropdown or li) */
function nav_menu_active($section)
{
    $page = get_page();

    if ($section === 'home') {
        return $page === 'home' ? ' active' : '';
    }

    if ($section === 'services') {
        return ($page === 'services' || strpos($page, 'services/') === 0) ? ' active' : '';
    }

    if ($section === 'engagement') {
        return ($page === 'engagement-models' || strpos($page, 'engagement-models/') === 0) ? ' active' : '';
    }

    if ($section === 'portfolio') {
        return $page === 'portfolio' ? ' active' : '';
    }

    if ($section === 'company') {
        $companyPages = ['about-us', 'why-choose-us', 'our-process', 'industries', 'technologies', 'testimonials'];
        return in_array($page, $companyPages, true) ? ' active' : '';
    }

    return '';
}

/** Active class for a nav link matching current page slug */
function nav_link_active($pageSlug)
{
    return get_page() === $pageSlug ? ' active' : '';
}

function get_seo_meta()
{
    global $seo;

    $page = get_page();
    $defaults = $seo['default'];
    $pageMeta = isset($seo[$page]) ? $seo[$page] : [];

    $meta = array_merge($defaults, $pageMeta);
    $meta['page'] = $page;
    $meta['image'] = isset($meta['image']) ? $meta['image'] : SEO_DEFAULT_IMAGE;

    if (strpos($meta['image'], 'http') !== 0) {
        $meta['image_url'] = rtrim(BASE_URL, '/') . '/' . ltrim($meta['image'], '/');
    } else {
        $meta['image_url'] = $meta['image'];
    }

    return $meta;
}

function get_canonical_url()
{
    $page = get_page();

    if ($page === 'home') {
        return rtrim(BASE_URL, '/');
    }

    return rtrim(BASE_URL, '/') . '/' . $page;
}

function seo_escape($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function get_breadcrumb_items()
{
    global $breadcrumb_labels;

    $page = get_page();
    $base = rtrim(BASE_URL, '/');
    $currentUrl = get_canonical_url();

    $items = [
        ['name' => 'Home', 'url' => $base],
    ];

    if ($page === 'home') {
        return $items;
    }

    if ($page === 'job-apply') {
        $items[] = ['name' => 'Careers', 'url' => $base . '/career'];
        $items[] = ['name' => $breadcrumb_labels['job-apply'], 'url' => $currentUrl];
        return $items;
    }

    if ($page === 'services') {
        $items[] = ['name' => 'Services', 'url' => $currentUrl];
        return $items;
    }

    if (strpos($page, 'services/') === 0) {
        $items[] = ['name' => 'Services', 'url' => $base . '/services'];
        $items[] = [
            'name' => isset($breadcrumb_labels[$page]) ? $breadcrumb_labels[$page] : 'Service',
            'url' => $currentUrl,
        ];
        return $items;
    }

    if (strpos($page, 'engagement-models/') === 0) {
        $items[] = ['name' => 'Engagement Models', 'url' => $base . '/engagement-models'];
        $items[] = [
            'name' => isset($breadcrumb_labels[$page]) ? $breadcrumb_labels[$page] : 'Engagement Model',
            'url' => $currentUrl,
        ];
        return $items;
    }

    $label = isset($breadcrumb_labels[$page]) ? $breadcrumb_labels[$page] : SITE_NAME;
    $items[] = ['name' => $label, 'url' => $currentUrl];

    return $items;
}

function get_organization_schema()
{
    global $seo;

    $siteUrl = rtrim(BASE_URL, '/');

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'legalName' => COMPANY_NAME,
        'alternateName' => COMPANY_NAME,
        'url' => $siteUrl,
        'logo' => $siteUrl . '/assets/images/jogatek-logo.png',
        'description' => $seo['home']['description'],
        'email' => SITE_EMAIL,
        'telephone' => SITE_PHONE,
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Lucknow',
            'addressRegion' => 'Uttar Pradesh',
            'addressCountry' => 'IN',
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'contactType' => 'sales',
            'email' => SITE_EMAIL,
            'telephone' => SITE_PHONE,
            'availableLanguage' => ['English', 'Hindi'],
        ],
        'sameAs' => [],
    ];
}

function get_website_schema()
{
    global $seo;

    $siteUrl = rtrim(BASE_URL, '/');

    return [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => SITE_NAME,
        'alternateName' => COMPANY_NAME,
        'url' => $siteUrl,
        'description' => $seo['home']['description'],
        'inLanguage' => 'en-IN',
        'publisher' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'legalName' => COMPANY_NAME,
            'url' => $siteUrl,
            'logo' => $siteUrl . '/assets/images/jogatek-logo.png',
            'email' => SITE_EMAIL,
            'telephone' => SITE_PHONE,
        ],
    ];
}

function get_breadcrumb_schema()
{
    $items = get_breadcrumb_items();
    $listElements = [];

    foreach ($items as $index => $item) {
        $listElements[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $item['name'],
            'item' => $item['url'],
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $listElements,
    ];
}

/**
 * WebP + fallback image (logo ke liye use mat karo).
 *
 * @param string $file e.g. hero.png or assets/images/hero.png
 * @param string $alt
 * @param string $extraAttrs optional extra attributes for <img>
 */
function picture_img($file, $alt, $extraAttrs = '')
{
    $file = ltrim(str_replace('\\', '/', (string) $file), '/');
    if (strpos($file, 'assets/images/') !== 0) {
        $file = 'assets/images/' . $file;
    }

    $webp = preg_replace('/\.[^.]+$/', '.webp', $file);
    $base = rtrim(BASE_URL, '/');
    $webpUrl = $base . '/' . $webp;
    $imgUrl = $base . '/' . $file;
    $webpPath = BASE_PATH . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $webp);
    $imgPath = BASE_PATH . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $file);
    $altEsc = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $extra = trim((string) $extraAttrs);

    // Auto-detect image dimensions to avoid Cumulative Layout Shift (CLS)
    $dimensions = '';
    if (is_file($imgPath)) {
        $size = @getimagesize($imgPath);
        if ($size && isset($size[0], $size[1])) {
            $dimensions = ' width="' . $size[0] . '" height="' . $size[1] . '"';
        }
    }

    // Auto-inject loading="lazy" unless it is a hero image or explicitly overridden
    $lazy = '';
    if (strpos($extra, 'loading=') === false && strpos($file, 'hero') === false) {
        $lazy = ' loading="lazy"';
    }

    $extraHtml = ($extra !== '' ? ' ' . $extra : '') . $dimensions . $lazy;

    echo '<picture>', "\n";
    if (is_file($webpPath)) {
        echo '    <source srcset="', htmlspecialchars($webpUrl, ENT_QUOTES, 'UTF-8'), '" type="image/webp">', "\n";
    }
    echo '    <img src="', htmlspecialchars($imgUrl, ENT_QUOTES, 'UTF-8'), '" alt="', $altEsc, '"', $extraHtml, '>', "\n";
    echo '</picture>';
}

?>
