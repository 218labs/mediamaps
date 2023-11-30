<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories/table' => [[['_route' => 'categories.table', '_controller' => 'App\\Controller\\Admin\\CategoryController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories/create' => [[['_route' => 'categories.create', '_controller' => 'App\\Controller\\Admin\\CategoryController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compaigns' => [[['_route' => 'compaigns', '_controller' => 'App\\Controller\\Admin\\CompaignController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compaigns/table' => [[['_route' => 'compaigns.table', '_controller' => 'App\\Controller\\Admin\\CompaignController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compaigns/export' => [[['_route' => 'compaigns.export', '_controller' => 'App\\Controller\\Admin\\CompaignController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compaigns/create' => [[['_route' => 'compaigns.create', '_controller' => 'App\\Controller\\Admin\\CompaignController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/countries' => [[['_route' => 'countries', '_controller' => 'App\\Controller\\Admin\\CountryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/countries/table' => [[['_route' => 'countries.table', '_controller' => 'App\\Controller\\Admin\\CountryController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/countries/create' => [[['_route' => 'countries.create', '_controller' => 'App\\Controller\\Admin\\CountryController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cronjobs' => [[['_route' => 'cronjobs', '_controller' => 'App\\Controller\\Admin\\CronJobsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/cronjobs/table' => [[['_route' => 'cronjobs.table', '_controller' => 'App\\Controller\\Admin\\CronJobsController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/file/upload' => [[['_route' => 'file.upload', '_controller' => 'App\\Controller\\Admin\\FileController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/admin/geographical_systems' => [[['_route' => 'geographical_systems', '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/geographical_systems/table' => [[['_route' => 'geographical_systems.table', '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/geographical_systems/create' => [[['_route' => 'geographical_systems.create', '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/image/upload' => [[['_route' => 'image.upload', '_controller' => 'App\\Controller\\Admin\\ImageController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/admin/interest' => [[['_route' => 'interests', '_controller' => 'App\\Controller\\Admin\\InterestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/interest/table' => [[['_route' => 'interests.table', '_controller' => 'App\\Controller\\Admin\\InterestController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/interest/create' => [[['_route' => 'interests.create', '_controller' => 'App\\Controller\\Admin\\InterestController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/languages' => [[['_route' => 'languages', '_controller' => 'App\\Controller\\Admin\\LanguageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/languages/table' => [[['_route' => 'languages.table', '_controller' => 'App\\Controller\\Admin\\LanguageController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/languages/create' => [[['_route' => 'languages.create', '_controller' => 'App\\Controller\\Admin\\LanguageController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/links' => [[['_route' => 'link', '_controller' => 'App\\Controller\\Admin\\LinkController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/links/check' => [[['_route' => 'check', '_controller' => 'App\\Controller\\Admin\\LinkController::check'], null, ['GET' => 0], null, false, false, null]],
        '/admin/links/table' => [[['_route' => 'link.table', '_controller' => 'App\\Controller\\Admin\\LinkController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/links/export' => [[['_route' => 'link.export', '_controller' => 'App\\Controller\\Admin\\LinkController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/links/create' => [[['_route' => 'link.create', '_controller' => 'App\\Controller\\Admin\\LinkController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/mail/history' => [[['_route' => 'mail.history', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/mail/history/table' => [[['_route' => 'mail.history.table', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/media' => [[['_route' => 'media', '_controller' => 'App\\Controller\\Admin\\MediaController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/media/table' => [[['_route' => 'media.table', '_controller' => 'App\\Controller\\Admin\\MediaController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/media/export' => [[['_route' => 'media.export', '_controller' => 'App\\Controller\\Admin\\MediaController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/media/create' => [[['_route' => 'media.create', '_controller' => 'App\\Controller\\Admin\\MediaController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/media/search' => [[['_route' => 'media.search', '_controller' => 'App\\Controller\\Admin\\MediaController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/media/stats' => [[['_route' => 'media.stats', '_controller' => 'App\\Controller\\Admin\\MediaController::getWebsiteStats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reporting' => [[['_route' => 'reporting', '_controller' => 'App\\Controller\\Admin\\ReportingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/media-countries' => [[['_route' => 'reporting.media-countries', '_controller' => 'App\\Controller\\Admin\\ReportingController::mediaCountries'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/medias-per-country' => [[['_route' => 'reporting.medias_per_country', '_controller' => 'App\\Controller\\Admin\\ReportingController::mediasPerCountry'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/medias-per-category' => [[['_route' => 'reporting.medias_per_category', '_controller' => 'App\\Controller\\Admin\\ReportingController::visitesPerDirection'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/links-per-media' => [[['_route' => 'reporting.links_per_media', '_controller' => 'App\\Controller\\Admin\\ReportingController::linksPerMedia'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/medias-per-language' => [[['_route' => 'reporting.medias_per_language', '_controller' => 'App\\Controller\\Admin\\ReportingController::mediasPerLanguage'], null, ['GET' => 0], null, false, false, null]],
        '/reporting/map' => [[['_route' => 'reporting.map', '_controller' => 'App\\Controller\\Admin\\ReportingController::map'], null, ['GET' => 0], null, false, false, null]],
        '/admin/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/settings/table' => [[['_route' => 'settings.table', '_controller' => 'App\\Controller\\Admin\\SettingController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/settings/create' => [[['_route' => 'setting.create', '_controller' => 'App\\Controller\\Admin\\SettingController::create'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/table' => [[['_route' => 'users.table', '_controller' => 'App\\Controller\\Admin\\UserController::table'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'user.create', '_controller' => 'App\\Controller\\Admin\\UserController::create'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/services' => [[['_route' => 'services', '_controller' => 'App\\Controller\\Front\\HomeController::services'], null, ['GET' => 0], null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\Front\\HomeController::pricing'], null, ['GET' => 0], null, false, false, null]],
        '/customers' => [[['_route' => 'customers', '_controller' => 'App\\Controller\\Front\\HomeController::customers'], null, ['GET' => 0], null, false, false, null]],
        '/ressources' => [[['_route' => 'ressources', '_controller' => 'App\\Controller\\Front\\HomeController::ressources'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\Front\\HomeController::contact'], null, ['GET' => 0], null, false, false, null]],
        '/password/reset' => [[['_route' => 'password.reset', '_controller' => 'App\\Controller\\Front\\PasswordResetController::reset'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Front\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\Front\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/oauth/connect/azure' => [[['_route' => 'connect_azure_start', '_controller' => 'App\\Controller\\Front\\Security\\ConnectAzureController::connectAction'], null, null, null, false, false, null]],
        '/oauth/check-azure' => [
            [['_route' => 'connect_azure_check', '_controller' => 'App\\Controller\\Front\\Security\\ConnectAzureController::connectCheckAction'], null, null, null, false, false, null],
            [['_route' => 'azure_login'], null, null, null, false, false, null],
        ],
        '/oauth/login' => [[['_route' => 'hwi_oauth_connect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\LoginController::connectAction'], null, null, null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/webpush' => [[['_route' => 'bentools_webpush.subscription', '_controller' => 'BenTools\\WebPushBundle\\Action\\RegisterSubscriptionAction'], null, ['POST' => 0, 'DELETE' => 1], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategories/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:53)'
                                .'|lete(*:64)'
                            .')'
                            .'|update(*:78)'
                            .'|store(*:90)'
                        .')'
                        .'|o(?'
                            .'|mpaigns/([^/]++)/(?'
                                .'|de(?'
                                    .'|tails(*:132)'
                                    .'|lete(*:144)'
                                .')'
                                .'|update(*:159)'
                                .'|store(*:172)'
                            .')'
                            .'|untries/([^/]++)/(?'
                                .'|de(?'
                                    .'|tails(*:211)'
                                    .'|lete(*:223)'
                                .')'
                                .'|update(*:238)'
                                .'|store(*:251)'
                            .')'
                        .')'
                        .'|ronjobs/([^/]++)/change\\-status(*:292)'
                    .')'
                    .'|geographical_systems/([^/]++)/(?'
                        .'|update(*:340)'
                        .'|store(*:353)'
                        .'|delete(*:367)'
                    .')'
                    .'|interest/([^/]++)/(?'
                        .'|de(?'
                            .'|tails(*:407)'
                            .'|lete(*:419)'
                        .')'
                        .'|update(*:434)'
                        .'|store(*:447)'
                    .')'
                    .'|l(?'
                        .'|anguages/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:491)'
                                .'|lete(*:503)'
                            .')'
                            .'|update(*:518)'
                            .'|store(*:531)'
                        .')'
                        .'|inks/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:567)'
                                .'|lete(*:579)'
                            .')'
                            .'|s(?'
                                .'|creen(*:597)'
                                .'|tore(*:609)'
                            .')'
                            .'|update(*:624)'
                        .')'
                        .'|ogs(?'
                            .'|(?:/([^/]++)(?:/([^/]++))?)?(*:667)'
                            .'|/([^/]++)/([^/]++)/table(*:699)'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ail/history/([^/]++)/(?'
                            .'|resend(*:743)'
                            .'|show(*:755)'
                        .')'
                        .'|edia/([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:791)'
                                .'|lete(*:803)'
                            .')'
                            .'|update(*:818)'
                            .'|store(*:831)'
                        .')'
                    .')'
                    .'|settings/([^/]++)/(?'
                        .'|update(*:868)'
                        .'|store(*:881)'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|de(?'
                            .'|tails(*:917)'
                            .'|lete(*:929)'
                        .')'
                        .'|update(*:944)'
                        .'|store(*:957)'
                    .')'
                .')'
                .'|/password/new/([^/]++)(*:989)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1025)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1065)'
                    .'|wdt/([^/]++)(*:1086)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1133)'
                            .'|router(*:1148)'
                            .'|exception(?'
                                .'|(*:1169)'
                                .'|\\.css(*:1183)'
                            .')'
                        .')'
                        .'|(*:1194)'
                    .')'
                .')'
                .'|/oauth/connect/(?'
                    .'|([^/]++)(*:1231)'
                    .'|service/([^/]++)(*:1256)'
                    .'|registration/([^/]++)(*:1286)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        53 => [[['_route' => 'categories.details', '_controller' => 'App\\Controller\\Admin\\CategoryController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        64 => [[['_route' => 'categories.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        78 => [[['_route' => 'categories.update', '_controller' => 'App\\Controller\\Admin\\CategoryController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        90 => [[['_route' => 'categories.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CategoryController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        132 => [[['_route' => 'compaigns.details', '_controller' => 'App\\Controller\\Admin\\CompaignController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        144 => [[['_route' => 'compaigns.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CompaignController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        159 => [[['_route' => 'compaigns.update', '_controller' => 'App\\Controller\\Admin\\CompaignController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        172 => [[['_route' => 'compaigns.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CompaignController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        211 => [[['_route' => 'countries.details', '_controller' => 'App\\Controller\\Admin\\CountryController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        223 => [[['_route' => 'countries.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CountryController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'countries.update', '_controller' => 'App\\Controller\\Admin\\CountryController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        251 => [[['_route' => 'countries.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\CountryController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        292 => [[['_route' => 'cronjobs.change_status', '_controller' => 'App\\Controller\\Admin\\CronJobsController::changeStatus'], ['id'], ['GET' => 0], null, false, false, null]],
        340 => [[['_route' => 'geographical_systems.update', '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        353 => [[['_route' => 'geographical_systems.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        367 => [[['_route' => 'geographical_systems.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [[['_route' => 'interests.details', '_controller' => 'App\\Controller\\Admin\\InterestController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        419 => [[['_route' => 'interests.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\InterestController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        434 => [[['_route' => 'interests.update', '_controller' => 'App\\Controller\\Admin\\InterestController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        447 => [[['_route' => 'interests.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\InterestController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        491 => [[['_route' => 'languages.details', '_controller' => 'App\\Controller\\Admin\\LanguageController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        503 => [[['_route' => 'languages.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\LanguageController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        518 => [[['_route' => 'languages.update', '_controller' => 'App\\Controller\\Admin\\LanguageController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        531 => [[['_route' => 'languages.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\LanguageController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        567 => [[['_route' => 'link.details', '_controller' => 'App\\Controller\\Admin\\LinkController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        579 => [[['_route' => 'link.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\LinkController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        597 => [[['_route' => 'link.screen', '_controller' => 'App\\Controller\\Admin\\LinkController::screen'], ['id'], ['GET' => 0], null, false, false, null]],
        609 => [[['_route' => 'link.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\LinkController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        624 => [[['_route' => 'link.update', '_controller' => 'App\\Controller\\Admin\\LinkController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        667 => [[['_route' => 'logs', 'entity_name' => null, 'entity_id' => null, '_controller' => 'App\\Controller\\Admin\\LogController::index'], ['entity_name', 'entity_id'], ['GET' => 0], null, false, true, null]],
        699 => [[['_route' => 'logs.table', 'entity_name' => null, 'entity_id' => null, '_controller' => 'App\\Controller\\Admin\\LogController::table'], ['entity_name', 'entity_id'], ['GET' => 0], null, false, false, null]],
        743 => [[['_route' => 'mail.history.resend', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::resend'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        755 => [[['_route' => 'mail.history.show', '_controller' => 'App\\Controller\\Admin\\MailHistoryController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        791 => [[['_route' => 'media.details', '_controller' => 'App\\Controller\\Admin\\MediaController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        803 => [[['_route' => 'media.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\MediaController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        818 => [[['_route' => 'media.update', '_controller' => 'App\\Controller\\Admin\\MediaController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        831 => [[['_route' => 'media.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\MediaController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        868 => [[['_route' => 'setting.update', '_controller' => 'App\\Controller\\Admin\\SettingController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        881 => [[['_route' => 'setting.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\SettingController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        917 => [[['_route' => 'user.details', '_controller' => 'App\\Controller\\Admin\\UserController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        929 => [[['_route' => 'user.delete', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        944 => [[['_route' => 'user.update', '_controller' => 'App\\Controller\\Admin\\UserController::update'], ['id'], ['GET' => 0], null, false, false, null]],
        957 => [[['_route' => 'user.store', 'id' => 0, '_controller' => 'App\\Controller\\Admin\\UserController::store'], ['id'], ['POST' => 0], null, false, false, null]],
        989 => [[['_route' => 'password.new', '_controller' => 'App\\Controller\\Front\\PasswordResetController::new'], ['token'], null, null, false, true, null]],
        1025 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1065 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1086 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1133 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1169 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1183 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1194 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1231 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController::redirectToServiceAction'], ['service'], null, null, false, true, null]],
        1256 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], ['service'], null, null, false, true, null]],
        1286 => [
            [['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], ['key'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
