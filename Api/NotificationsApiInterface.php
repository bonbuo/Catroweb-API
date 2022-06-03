<?php
/**
 * NotificationsApiInterface
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.1.3
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\NotificationResponse;
use OpenAPI\Server\Model\NotificationsCountResponse;

/**
 * NotificationsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface NotificationsApiInterface
{

    /**
     * Sets authentication method PandaAuth
     *
     * @param string $value Value of the PandaAuth authentication method.
     *
     * @return void
     */
    public function setPandaAuth($value);

    /**
     * Operation notificationIdReadPut
     *
     * Mark specified notification as read
     *
     * @param  int $id   (required)
     * @param  string $accept_language   (optional, default to 'en')
     * @param  int     $responseCode
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function notificationIdReadPut(int $id, string $accept_language, int &$responseCode, array &$responseHeaders): void;


    /**
     * Operation notificationsCountGet
     *
     * Count the number of unseen notifications
     *
     * @param  int     $responseCode
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ?object
     */
    public function notificationsCountGet(int &$responseCode, array &$responseHeaders): ?object;


    /**
     * Operation notificationsGet
     *
     * Get user notifications -- StatusCode: 501 - Not yet implemented
     *
     * @param  string $accept_language   (optional, default to 'en')
     * @param  int $limit   (optional, default to 20)
     * @param  int $offset   (optional, default to 0)
     * @param  string $attributes   (optional, default to '')
     * @param  string $type   (optional, default to 'all')
     * @param  int     $responseCode
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ?iterable
     */
    public function notificationsGet(string $accept_language, int $limit, int $offset, string $attributes, string $type, int &$responseCode, array &$responseHeaders): ?iterable;


    /**
     * Operation notificationsReadPut
     *
     * Mark all notifications as read
     *
     * @param  int     $responseCode
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function notificationsReadPut(int &$responseCode, array &$responseHeaders): void;

}
