# OpenAPIServer
API for the Catrobat Share Platform

This [Symfony](https://symfony.com/) bundle is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v1.1.19
- Build package: org.openapitools.codegen.languages.PhpSymfonyServerCodegen
For more information, please visit [https://share.catrob.at](https://share.catrob.at)

## Requirements

PHP 8.0 and later

## Installation & Usage

To install the dependencies via [Composer](http://getcomposer.org/), add the following repository to `composer.json` of your Symfony project:

```json
{
    "repositories": [{
        "type": "path",
        "url": "//Path to your generated openapi bundle"
    }],
}
```

Then run:

```
composer require GIT_USER_ID/GIT_REPO_ID:dev-master
```

to add the generated openapi bundle as a dependency.

## Tests

To run the unit tests for the generated bundle, first navigate to the directory containing the code, then run the following commands:

```
composer install
./vendor/bin/phpunit
```


## Getting Started

Step 1: Please follow the [installation procedure](#installation--usage) first.

Step 2: Enable the bundle in the bundle configuration:

```php
// app/config/bundles.php
return [
    // ...
    OpenAPI\Server\OpenAPIServerBundle::class => ['all' => true],
];
```

Step 3: Register the routes:

```yaml
# app/config/routes.yaml
open_api_server:
    resource: "@OpenAPIServerBundle/Resources/config/routing.yaml"
```

Step 4: Implement the API calls:

```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface // An interface is autogenerated
{

    /**
     * Implementation of AuthenticationApiInterface#authenticationDelete
     */
    public function authenticationDelete(string $x_refresh, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // Other operation methods ...
}
```

Step 5: Tag your API implementation:

```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\AuthenticationApi:
        tags:
            - { name: "open_api_server.api", api: "authentication" }
    # ...
```

Now you can start using the bundle!


## Documentation for API Endpoints

All URIs are relative to *https://share.catrob.at/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApiInterface* | [**authenticationDelete**](docs/Api/AuthenticationApiInterface.md#authenticationdelete) | **DELETE** /authentication | Expires refresh token
*AuthenticationApiInterface* | [**authenticationGet**](docs/Api/AuthenticationApiInterface.md#authenticationget) | **GET** /authentication | Check token
*AuthenticationApiInterface* | [**authenticationOauthPost**](docs/Api/AuthenticationApiInterface.md#authenticationoauthpost) | **POST** /authentication/oauth | OAuth Login
*AuthenticationApiInterface* | [**authenticationPost**](docs/Api/AuthenticationApiInterface.md#authenticationpost) | **POST** /authentication | Login
*AuthenticationApiInterface* | [**authenticationRefreshPost**](docs/Api/AuthenticationApiInterface.md#authenticationrefreshpost) | **POST** /authentication/refresh | Refresh token
*AuthenticationApiInterface* | [**authenticationUpgradePost**](docs/Api/AuthenticationApiInterface.md#authenticationupgradepost) | **POST** /authentication/upgrade | Upgrade a deprecated token to JWT
*MediaLibraryApiInterface* | [**mediaFileIdGet**](docs/Api/MediaLibraryApiInterface.md#mediafileidget) | **GET** /media/file/{id} | Get the information of a specific media file
*MediaLibraryApiInterface* | [**mediaFilesGet**](docs/Api/MediaLibraryApiInterface.md#mediafilesget) | **GET** /media/files | Get *all* content of the media library.
*MediaLibraryApiInterface* | [**mediaFilesSearchGet**](docs/Api/MediaLibraryApiInterface.md#mediafilessearchget) | **GET** /media/files/search | Search for mediafiles associated with keywords
*MediaLibraryApiInterface* | [**mediaPackageNameGet**](docs/Api/MediaLibraryApiInterface.md#mediapackagenameget) | **GET** /media/package/{name} | Get media-library asstes of a named package
*NotificationsApiInterface* | [**notificationIdReadPut**](docs/Api/NotificationsApiInterface.md#notificationidreadput) | **PUT** /notification/{id}/read | Mark specified notification as read
*NotificationsApiInterface* | [**notificationsCountGet**](docs/Api/NotificationsApiInterface.md#notificationscountget) | **GET** /notifications/count | Count the number of unseen notifications
*NotificationsApiInterface* | [**notificationsGet**](docs/Api/NotificationsApiInterface.md#notificationsget) | **GET** /notifications | Get user notifications -- StatusCode: 501 - Not yet implemented
*NotificationsApiInterface* | [**notificationsReadPut**](docs/Api/NotificationsApiInterface.md#notificationsreadput) | **PUT** /notifications/read | Mark all notifications as read
*ProjectsApiInterface* | [**projectIdCatrobatGet**](docs/Api/ProjectsApiInterface.md#projectidcatrobatget) | **GET** /project/{id}/catrobat | Download the .catrobat (&#x3D;zip) file of a project
*ProjectsApiInterface* | [**projectIdDelete**](docs/Api/ProjectsApiInterface.md#projectiddelete) | **DELETE** /project/{id} | Delete a project
*ProjectsApiInterface* | [**projectIdGet**](docs/Api/ProjectsApiInterface.md#projectidget) | **GET** /project/{id} | Get the information of a project
*ProjectsApiInterface* | [**projectIdPut**](docs/Api/ProjectsApiInterface.md#projectidput) | **PUT** /project/{id} | Update details of a project
*ProjectsApiInterface* | [**projectIdRecommendationsGet**](docs/Api/ProjectsApiInterface.md#projectidrecommendationsget) | **GET** /project/{id}/recommendations | Get recommended projects related to the specific project
*ProjectsApiInterface* | [**projectIdReportPost**](docs/Api/ProjectsApiInterface.md#projectidreportpost) | **POST** /project/{id}/report | Report a project -- StatusCode: 501 - Not yet implemented
*ProjectsApiInterface* | [**projectsCategoriesGet**](docs/Api/ProjectsApiInterface.md#projectscategoriesget) | **GET** /projects/categories | Get default number of projects per category (Most downloaded etc.)
*ProjectsApiInterface* | [**projectsExtensionsGet**](docs/Api/ProjectsApiInterface.md#projectsextensionsget) | **GET** /projects/extensions | Get all possible project extensions. Extensions are automatically added to projects based on their bricks.
*ProjectsApiInterface* | [**projectsFeaturedGet**](docs/Api/ProjectsApiInterface.md#projectsfeaturedget) | **GET** /projects/featured | Get the currently featured projects
*ProjectsApiInterface* | [**projectsGet**](docs/Api/ProjectsApiInterface.md#projectsget) | **GET** /projects | Get projects
*ProjectsApiInterface* | [**projectsPost**](docs/Api/ProjectsApiInterface.md#projectspost) | **POST** /projects | Upload a catrobat project
*ProjectsApiInterface* | [**projectsSearchGet**](docs/Api/ProjectsApiInterface.md#projectssearchget) | **GET** /projects/search | Search for projects associated with a keywords
*ProjectsApiInterface* | [**projectsTagsGet**](docs/Api/ProjectsApiInterface.md#projectstagsget) | **GET** /projects/tags | Get all possible project tags. Some Tags will only be availabe during events.
*ProjectsApiInterface* | [**projectsUserGet**](docs/Api/ProjectsApiInterface.md#projectsuserget) | **GET** /projects/user | Get the projects of the logged in user
*ProjectsApiInterface* | [**projectsUserIdGet**](docs/Api/ProjectsApiInterface.md#projectsuseridget) | **GET** /projects/user/{id} | Get the public projects of a given user
*SearchApiInterface* | [**searchGet**](docs/Api/SearchApiInterface.md#searchget) | **GET** /search | Search for projects, users,..
*UserApiInterface* | [**userDelete**](docs/Api/UserApiInterface.md#userdelete) | **DELETE** /user | Delete user account
*UserApiInterface* | [**userGet**](docs/Api/UserApiInterface.md#userget) | **GET** /user | Get your private user data
*UserApiInterface* | [**userIdGet**](docs/Api/UserApiInterface.md#useridget) | **GET** /user/{id} | Get public user data
*UserApiInterface* | [**userPost**](docs/Api/UserApiInterface.md#userpost) | **POST** /user | Register
*UserApiInterface* | [**userPut**](docs/Api/UserApiInterface.md#userput) | **PUT** /user | Update User
*UserApiInterface* | [**userResetPasswordPost**](docs/Api/UserApiInterface.md#userresetpasswordpost) | **POST** /user/reset-password | Request email to reset password
*UserApiInterface* | [**usersSearchGet**](docs/Api/UserApiInterface.md#userssearchget) | **GET** /users/search | Search for users
*UtilityApiInterface* | [**healthGet**](docs/Api/UtilityApiInterface.md#healthget) | **GET** /health | Health Check
*UtilityApiInterface* | [**surveyLangCodeGet**](docs/Api/UtilityApiInterface.md#surveylangcodeget) | **GET** /survey/{lang_code} | Get survey link for given language code.


## Documentation For Models

 - [BaseUser](docs/Model/BaseUser.md)
 - [BasicUserDataResponse](docs/Model/BasicUserDataResponse.md)
 - [DryRun](docs/Model/DryRun.md)
 - [ExtendedUserDataResponse](docs/Model/ExtendedUserDataResponse.md)
 - [ExtendedUserDataResponseAllOf](docs/Model/ExtendedUserDataResponseAllOf.md)
 - [ExtensionResponse](docs/Model/ExtensionResponse.md)
 - [FeaturedProjectResponse](docs/Model/FeaturedProjectResponse.md)
 - [JWTResponse](docs/Model/JWTResponse.md)
 - [LoginRequest](docs/Model/LoginRequest.md)
 - [MediaCategoryResponse](docs/Model/MediaCategoryResponse.md)
 - [MediaFileResponse](docs/Model/MediaFileResponse.md)
 - [MediaPackageResponse](docs/Model/MediaPackageResponse.md)
 - [NotificationContent](docs/Model/NotificationContent.md)
 - [NotificationResponse](docs/Model/NotificationResponse.md)
 - [NotificationsCountResponse](docs/Model/NotificationsCountResponse.md)
 - [OAuthLoginRequest](docs/Model/OAuthLoginRequest.md)
 - [ProjectReportRequest](docs/Model/ProjectReportRequest.md)
 - [ProjectResponse](docs/Model/ProjectResponse.md)
 - [ProjectsCategory](docs/Model/ProjectsCategory.md)
 - [RefreshRequest](docs/Model/RefreshRequest.md)
 - [RegisterErrorResponse](docs/Model/RegisterErrorResponse.md)
 - [RegisterRequest](docs/Model/RegisterRequest.md)
 - [ResetPasswordErrorResponse](docs/Model/ResetPasswordErrorResponse.md)
 - [ResetPasswordRequest](docs/Model/ResetPasswordRequest.md)
 - [SearchResponse](docs/Model/SearchResponse.md)
 - [SurveyResponse](docs/Model/SurveyResponse.md)
 - [TagResponse](docs/Model/TagResponse.md)
 - [UpdateProjectErrorResponse](docs/Model/UpdateProjectErrorResponse.md)
 - [UpdateProjectFailureResponse](docs/Model/UpdateProjectFailureResponse.md)
 - [UpdateProjectRequest](docs/Model/UpdateProjectRequest.md)
 - [UpdateUserErrorResponse](docs/Model/UpdateUserErrorResponse.md)
 - [UpdateUserRequest](docs/Model/UpdateUserRequest.md)
 - [UpdateUserRequestAllOf](docs/Model/UpdateUserRequestAllOf.md)
 - [UpgradeTokenRequest](docs/Model/UpgradeTokenRequest.md)
 - [UploadErrorResponse](docs/Model/UploadErrorResponse.md)


## Documentation For Authorization


## PandaAuth

- **Type**: HTTP basic authentication


## Author

webmaster@catrobat.org

