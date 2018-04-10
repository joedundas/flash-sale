<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Address' => $baseDir . '/app/models/Address.php',
    'ApiCalls' => $baseDir . '/app/models/ApiCalls.php',
    'ArrayUtilities' => $baseDir . '/app/controllers/ArrayUtilities.php',
    'AuthenticationController' => $baseDir . '/app/controllers/AuthenticationController.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CacheController' => $baseDir . '/app/controllers/CacheController.php',
    'CacheControllerInterface' => $baseDir . '/app/controllers/CacheControllerInterface.php',
    'Companies' => $baseDir . '/app/database/migrations/2018_03_27_161519_companies.php',
    'CompaniesController' => $baseDir . '/app/controllers/CompaniesController.php',
    'Company' => $baseDir . '/app/models/Company.php',
    'CompanyRoles' => $baseDir . '/app/models/CompanyRoles.php',
    'CompanyRolesController' => $baseDir . '/app/controllers/CompanyRolesController.php',
    'CreateAddresses' => $baseDir . '/app/database/migrations/2018_03_16_155255_create_addresses.php',
    'CreateCompanyRoles' => $baseDir . '/app/database/migrations/2018_04_10_164030_create_company_roles.php',
    'CreatePermissions' => $baseDir . '/app/database/migrations/2018_04_10_164434_create_permissions.php',
    'CreatePhoneNumbers' => $baseDir . '/app/database/migrations/2018_03_16_160215_create_phone_numbers.php',
    'CreateRoles' => $baseDir . '/app/database/migrations/2018_04_10_164205_create_roles.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2016_11_26_223753_create_users_table.php',
    'DataTransferPacket' => $baseDir . '/app/library/DataTransferPacket.php',
    'DataTransferPacketInterface' => $baseDir . '/app/library/DataTransferPacketInterface.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'DependencyInjection' => $baseDir . '/app/library/DependencyInjection.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'IsOnUsersCalendarScope' => $baseDir . '/app/models/GlobalScopes/Calendar/IsOnUsersCalendarScope.php',
    'IsOnUsersCalendarTrait' => $baseDir . '/app/models/GlobalScopes/Calendar/IsOnUsersCalendarTrait.php',
    'IsUsersConnectionScope' => $baseDir . '/app/models/GlobalScopes/Connections/IsUsersConnectionScope.php',
    'IsUsersConnectionTrait' => $baseDir . '/app/models/GlobalScopes/Connections/IsUsersConnectionTrait.php',
    'IsUsersEventTagDefinitionScope' => $baseDir . '/app/models/GlobalScopes/Calendar/IsUsersEventTagDefinitionScope.php',
    'IsUsersEventTagDefinitionTrait' => $baseDir . '/app/models/GlobalScopes/Calendar/IsUsersEventTagDefinitionTrait.php',
    'JoinConnectionToUserScope' => $baseDir . '/app/models/GlobalScopes/Connections/JoinConnectionToUserScope.php',
    'JoinConnectionToUserTrait' => $baseDir . '/app/models/GlobalScopes/Connections/JoinConnectionToUserTrait.php',
    'JoinToEventScope' => $baseDir . '/app/models/GlobalScopes/Calendar/JoinToEventScope.php',
    'JoinToEventTrait' => $baseDir . '/app/models/GlobalScopes/Calendar/JoinToEventTrait.php',
    'Normalizer' => $vendorDir . '/patchwork/utf8/src/Normalizer.php',
    'RegistrationController' => $baseDir . '/app/controllers/RegistrationController.php',
    'SeedRoles' => $baseDir . '/app/database/seeds/SeedRoles.php',
    'SeedUsers' => $baseDir . '/app/database/seeds/SeedUsers.php',
    'SelectsAndJoinsScope' => $baseDir . '/app/models/GlobalScopes/CompanyRoles/SelectsAndJoinsScope.php',
    'SelectsAndJoinsTrait' => $baseDir . '/app/models/GlobalScopes/CompanyRoles/SelectsAndJoinsTrait.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'TextProcessor' => $baseDir . '/app/controllers/TextProcessor.php',
    'Token' => $baseDir . '/app/library/Token.php',
    'User' => $baseDir . '/app/models/User.php',
    'UserController' => $baseDir . '/app/controllers/UserController.php',
    'ValidationController' => $baseDir . '/app/controllers/ValidationController.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
