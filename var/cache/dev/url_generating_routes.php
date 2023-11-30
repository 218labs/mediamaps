<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'categories' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/categories']], [], [], []],
    'categories.table' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::table'], [], [['text', '/admin/categories/table']], [], [], []],
    'categories.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'categories.create' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::create'], [], [['text', '/admin/categories/create']], [], [], []],
    'categories.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'categories.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\CategoryController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'categories.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'compaigns' => [[], ['_controller' => 'App\\Controller\\Admin\\CompaignController::index'], [], [['text', '/admin/compaigns']], [], [], []],
    'compaigns.table' => [[], ['_controller' => 'App\\Controller\\Admin\\CompaignController::table'], [], [['text', '/admin/compaigns/table']], [], [], []],
    'compaigns.export' => [[], ['_controller' => 'App\\Controller\\Admin\\CompaignController::export'], [], [['text', '/admin/compaigns/export']], [], [], []],
    'compaigns.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompaignController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compaigns']], [], [], []],
    'compaigns.create' => [[], ['_controller' => 'App\\Controller\\Admin\\CompaignController::create'], [], [['text', '/admin/compaigns/create']], [], [], []],
    'compaigns.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CompaignController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compaigns']], [], [], []],
    'compaigns.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\CompaignController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compaigns']], [], [], []],
    'compaigns.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\CompaignController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/compaigns']], [], [], []],
    'countries' => [[], ['_controller' => 'App\\Controller\\Admin\\CountryController::index'], [], [['text', '/admin/countries']], [], [], []],
    'countries.table' => [[], ['_controller' => 'App\\Controller\\Admin\\CountryController::table'], [], [['text', '/admin/countries/table']], [], [], []],
    'countries.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CountryController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/countries']], [], [], []],
    'countries.create' => [[], ['_controller' => 'App\\Controller\\Admin\\CountryController::create'], [], [['text', '/admin/countries/create']], [], [], []],
    'countries.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CountryController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/countries']], [], [], []],
    'countries.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\CountryController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/countries']], [], [], []],
    'countries.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\CountryController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/countries']], [], [], []],
    'cronjobs' => [[], ['_controller' => 'App\\Controller\\Admin\\CronJobsController::index'], [], [['text', '/admin/cronjobs']], [], [], []],
    'cronjobs.change_status' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CronJobsController::changeStatus'], [], [['text', '/change-status'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/cronjobs']], [], [], []],
    'cronjobs.table' => [[], ['_controller' => 'App\\Controller\\Admin\\CronJobsController::table'], [], [['text', '/admin/cronjobs/table']], [], [], []],
    'file.upload' => [[], ['_controller' => 'App\\Controller\\Admin\\FileController::upload'], [], [['text', '/admin/file/upload']], [], [], []],
    'geographical_systems' => [[], ['_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::index'], [], [['text', '/admin/geographical_systems']], [], [], []],
    'geographical_systems.table' => [[], ['_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::table'], [], [['text', '/admin/geographical_systems/table']], [], [], []],
    'geographical_systems.create' => [[], ['_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::create'], [], [['text', '/admin/geographical_systems/create']], [], [], []],
    'geographical_systems.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/geographical_systems']], [], [], []],
    'geographical_systems.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/geographical_systems']], [], [], []],
    'geographical_systems.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\GeographicalSystemController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/geographical_systems']], [], [], []],
    'image.upload' => [[], ['_controller' => 'App\\Controller\\Admin\\ImageController::upload'], [], [['text', '/admin/image/upload']], [], [], []],
    'interests' => [[], ['_controller' => 'App\\Controller\\Admin\\InterestController::index'], [], [['text', '/admin/interest']], [], [], []],
    'interests.table' => [[], ['_controller' => 'App\\Controller\\Admin\\InterestController::table'], [], [['text', '/admin/interest/table']], [], [], []],
    'interests.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\InterestController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/interest']], [], [], []],
    'interests.create' => [[], ['_controller' => 'App\\Controller\\Admin\\InterestController::create'], [], [['text', '/admin/interest/create']], [], [], []],
    'interests.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\InterestController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/interest']], [], [], []],
    'interests.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\InterestController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/interest']], [], [], []],
    'interests.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\InterestController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/interest']], [], [], []],
    'languages' => [[], ['_controller' => 'App\\Controller\\Admin\\LanguageController::index'], [], [['text', '/admin/languages']], [], [], []],
    'languages.table' => [[], ['_controller' => 'App\\Controller\\Admin\\LanguageController::table'], [], [['text', '/admin/languages/table']], [], [], []],
    'languages.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LanguageController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/languages']], [], [], []],
    'languages.create' => [[], ['_controller' => 'App\\Controller\\Admin\\LanguageController::create'], [], [['text', '/admin/languages/create']], [], [], []],
    'languages.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LanguageController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/languages']], [], [], []],
    'languages.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\LanguageController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/languages']], [], [], []],
    'languages.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\LanguageController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/languages']], [], [], []],
    'link' => [[], ['_controller' => 'App\\Controller\\Admin\\LinkController::index'], [], [['text', '/admin/links']], [], [], []],
    'check' => [[], ['_controller' => 'App\\Controller\\Admin\\LinkController::check'], [], [['text', '/admin/links/check']], [], [], []],
    'link.table' => [[], ['_controller' => 'App\\Controller\\Admin\\LinkController::table'], [], [['text', '/admin/links/table']], [], [], []],
    'link.export' => [[], ['_controller' => 'App\\Controller\\Admin\\LinkController::export'], [], [['text', '/admin/links/export']], [], [], []],
    'link.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LinkController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/links']], [], [], []],
    'link.screen' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LinkController::screen'], [], [['text', '/screen'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/links']], [], [], []],
    'link.create' => [[], ['_controller' => 'App\\Controller\\Admin\\LinkController::create'], [], [['text', '/admin/links/create']], [], [], []],
    'link.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LinkController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/links']], [], [], []],
    'link.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\LinkController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/links']], [], [], []],
    'link.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\LinkController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/links']], [], [], []],
    'logs' => [['entity_name', 'entity_id'], ['entity_name' => null, 'entity_id' => null, '_controller' => 'App\\Controller\\Admin\\LogController::index'], [], [['variable', '/', '[^/]++', 'entity_id', true], ['variable', '/', '[^/]++', 'entity_name', true], ['text', '/admin/logs']], [], [], []],
    'logs.table' => [['entity_name', 'entity_id'], ['entity_name' => null, 'entity_id' => null, '_controller' => 'App\\Controller\\Admin\\LogController::table'], [], [['text', '/table'], ['variable', '/', '[^/]++', 'entity_id', true], ['variable', '/', '[^/]++', 'entity_name', true], ['text', '/admin/logs']], [], [], []],
    'mail.history' => [[], ['_controller' => 'App\\Controller\\Admin\\MailHistoryController::index'], [], [['text', '/admin/mail/history']], [], [], []],
    'mail.history.resend' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MailHistoryController::resend'], [], [['text', '/resend'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/mail/history']], [], [], []],
    'mail.history.show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MailHistoryController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/mail/history']], [], [], []],
    'mail.history.table' => [[], ['_controller' => 'App\\Controller\\Admin\\MailHistoryController::table'], [], [['text', '/admin/mail/history/table']], [], [], []],
    'media' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::index'], [], [['text', '/admin/media']], [], [], []],
    'media.table' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::table'], [], [['text', '/admin/media/table']], [], [], []],
    'media.export' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::export'], [], [['text', '/admin/media/export']], [], [], []],
    'media.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MediaController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media']], [], [], []],
    'media.create' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::create'], [], [['text', '/admin/media/create']], [], [], []],
    'media.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MediaController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media']], [], [], []],
    'media.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\MediaController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media']], [], [], []],
    'media.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\MediaController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media']], [], [], []],
    'media.search' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::search'], [], [['text', '/admin/media/search']], [], [], []],
    'media.stats' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::getWebsiteStats'], [], [['text', '/admin/media/stats']], [], [], []],
    'reporting' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::index'], [], [['text', '/admin/reporting']], [], [], []],
    'reporting.media-countries' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::mediaCountries'], [], [['text', '/reporting/media-countries']], [], [], []],
    'reporting.medias_per_country' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::mediasPerCountry'], [], [['text', '/reporting/medias-per-country']], [], [], []],
    'reporting.medias_per_category' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::visitesPerDirection'], [], [['text', '/reporting/medias-per-category']], [], [], []],
    'reporting.links_per_media' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::linksPerMedia'], [], [['text', '/reporting/links-per-media']], [], [], []],
    'reporting.medias_per_language' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::mediasPerLanguage'], [], [['text', '/reporting/medias-per-language']], [], [], []],
    'reporting.map' => [[], ['_controller' => 'App\\Controller\\Admin\\ReportingController::map'], [], [['text', '/reporting/map']], [], [], []],
    'settings' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::index'], [], [['text', '/admin/settings']], [], [], []],
    'settings.table' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::table'], [], [['text', '/admin/settings/table']], [], [], []],
    'setting.create' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::create'], [], [['text', '/admin/settings/create']], [], [], []],
    'setting.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/settings']], [], [], []],
    'setting.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\SettingController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/settings']], [], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/admin/users']], [], [], []],
    'users.table' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::table'], [], [['text', '/admin/users/table']], [], [], []],
    'user.details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'user.create' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::create'], [], [['text', '/admin/user/create']], [], [], []],
    'user.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'user.store' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\UserController::store'], [], [['text', '/store'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'user.delete' => [['id'], ['id' => 0, '_controller' => 'App\\Controller\\Admin\\UserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\Front\\HomeController::index'], [], [['text', '/']], [], [], []],
    'services' => [[], ['_controller' => 'App\\Controller\\Front\\HomeController::services'], [], [['text', '/services']], [], [], []],
    'pricing' => [[], ['_controller' => 'App\\Controller\\Front\\HomeController::pricing'], [], [['text', '/pricing']], [], [], []],
    'customers' => [[], ['_controller' => 'App\\Controller\\Front\\HomeController::customers'], [], [['text', '/customers']], [], [], []],
    'ressources' => [[], ['_controller' => 'App\\Controller\\Front\\HomeController::ressources'], [], [['text', '/ressources']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\Front\\HomeController::contact'], [], [['text', '/contact']], [], [], []],
    'password.reset' => [[], ['_controller' => 'App\\Controller\\Front\\PasswordResetController::reset'], [], [['text', '/password/reset']], [], [], []],
    'password.new' => [['token'], ['_controller' => 'App\\Controller\\Front\\PasswordResetController::new'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/password/new']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\Front\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\Front\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'connect_azure_start' => [[], ['_controller' => 'App\\Controller\\Front\\Security\\ConnectAzureController::connectAction'], [], [['text', '/oauth/connect/azure']], [], [], []],
    'connect_azure_check' => [[], ['_controller' => 'App\\Controller\\Front\\Security\\ConnectAzureController::connectCheckAction'], [], [['text', '/oauth/check-azure']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'hwi_oauth_service_redirect' => [['service'], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController::redirectToServiceAction'], [], [['variable', '/', '[^/]++', 'service', true], ['text', '/oauth/connect']], [], [], []],
    'hwi_oauth_connect_service' => [['service'], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], [], [['variable', '/', '[^/]++', 'service', true], ['text', '/oauth/connect/service']], [], [], []],
    'hwi_oauth_connect_registration' => [['key'], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], [], [['variable', '/', '[^/]++', 'key', true], ['text', '/oauth/connect/registration']], [], [], []],
    'hwi_oauth_connect' => [[], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\LoginController::connectAction'], [], [['text', '/oauth/login/']], [], [], []],
    'azure_login' => [[], [], [], [['text', '/oauth/check-azure']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'bentools_webpush.subscription' => [[], ['_controller' => 'BenTools\\WebPushBundle\\Action\\RegisterSubscriptionAction'], [], [['text', '/webpush/']], [], [], []],
];
