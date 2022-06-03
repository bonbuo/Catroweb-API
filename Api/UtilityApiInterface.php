<?php
/**
 * UtilityApiInterface
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
use OpenAPI\Server\Model\SurveyResponse;

/**
 * UtilityApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface UtilityApiInterface
{

    /**
     * Operation healthGet
     *
     * Health Check
     *
     * @param  int     $responseCode
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function healthGet(int &$responseCode, array &$responseHeaders): void;


    /**
     * Operation surveyLangCodeGet
     *
     * Get survey link for given language code.
     *
     * @param  string $lang_code  2 letter Language-Code is based on ISO693-1 (e.g. German &#x3D; de, English &#x3D; en, Russian &#x3D; ru) (required)
     * @param  string $flavor   (optional, default to '')
     * @param  int     $responseCode
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ?object
     */
    public function surveyLangCodeGet(string $lang_code, string $flavor, int &$responseCode, array &$responseHeaders): ?object;

}
