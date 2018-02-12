<?php return [
    /**
     * The below list has been "purloined" from the Django registration project:
     * @see https://github.com/ubernostrum/django-registration/blob/master/registration/validators.py
     *
     * It is a large but non-exhaustive list of names which users probably should not be able
     * to register with due to various risks which can be read up on James Bennett's article:
     * @see https://www.b-list.org/weblog/2018/feb/11/usernames/
     * and Geoffrey Thomas's blog post:
     * @see https://ldpreload.com/blog/names-to-reserve.
     *
     * All credit to the ideas goes to the aforementioned, all I have done is apply it to
     * Laravel in the PHP language.
     */
    'reserved_list' => [
        // Hostnames with special/reserved meaning.
        'special_hostnames' => [
            'autoconfig',     // Thunderbird autoconfig
            'autodiscover',   // MS Outlook/Exchange autoconfig
            'broadcasthost',  // Network broadcast hostname
            'isatap',         // IPv6 tunnel autodiscovery
            'localdomain',    // Loopback
            'localhost',      // Loopback
            'wpad',           // Proxy autodiscovery
        ],
        // Common protocol hostnames.
        'protocol_hostnames' => [
            'ftp',
            'imap',
            'mail',
            'news',
            'pop',
            'pop3',
            'smtp',
            'usenet',
            'uucp',
            'webmail',
            'www',
        ],
        // Email addresses known used by certificate authorities during verification.
        'cc_addresses' => [
            'admin',
            'administrator',
            'hostmaster',
            'info',
            'is',
            'it',
            'mis',
            'postmaster',
            'root',
            'ssladmin',
            'ssladministrator',
            'sslwebmaster',
            'sysadmin',
            'webmaster',
        ],
        // RFC-2142-defined names not already covered.
        'RFC_2142' => [
            'abuse',
            'marketing',
            'noc',
            'sales',
            'security',
            'support',
        ],
        // Common no-reply email addresses.
        'noreply_addresses' => [
            'mailer-daemon',
            'nobody',
            'noreply',
            'no-reply',
        ],
        'sensitive_filenames' => [
            'clientaccesspolicy.xml', // Silverlight cross-domain policy file.
            'crossdomain.xml',        // Flash cross-domain policy file.
            'favicon.ico',
            'humans.txt',
            'keybase.txt',            // Keybase ownership-verification URL.
            'robots.txt',
            '.htaccess',
            '.htpasswd',
        ],
        // Other names which could be problems depending on URL/subdomain structure.
        'other_sensitive_names' => [
            'account',
            'accounts',
            'blog',
            'buy',
            'clients',
            'contact',
            'contactus',
            'contact-us',
            'copyright',
            'dashboard',
            'doc',
            'docs',
            'download',
            'downloads',
            'enquiry',
            'faq',
            'help',
            'inquiry',
            'license',
            'login',
            'logout',
            'me',
            'myaccount',
            'payments',
            'plans',
            'portfolio',
            'preferences',
            'pricing',
            'privacy',
            'profile',
            'register',
            'secure',
            'settings',
            'signin',
            'signup',
            'ssl',
            'status',
            'subscribe',
            'terms',
            'tos',
            'user',
            'users',
            'weblog',
            'work',
        ]
    ]

];