<?php
/**
 * UserApiInterface
 * PHP version 7.1.3.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.74
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\RegisterRequest;
use OpenAPI\Server\Model\ResetPasswordRequest;
use OpenAPI\Server\Model\UpdateUserRequest;

/**
 * UserApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface UserApiInterface
{
  /**
   * Sets authentication method PandaAuth.
   *
   * @param string $value value of the PandaAuth authentication method
   */
  public function setPandaAuth($value);

  /**
   * Operation userDelete.
   *
   * Delete user account
   *
   * @param \int   $responseCode    The HTTP response code to return
   * @param \array $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function userDelete(&$responseCode, array &$responseHeaders);

  /**
   * Operation userGet.
   *
   * Get your private user data
   *
   * @param \int   $responseCode    The HTTP response code to return
   * @param \array $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\ExtendedUserDataResponse
   */
  public function userGet(&$responseCode, array &$responseHeaders);

  /**
   * Operation userIdGet.
   *
   * Get public user data
   *
   * @param \string $id              (required)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\BasicUserDataResponse
   */
  public function userIdGet(string $id, &$responseCode, array &$responseHeaders);

  /**
   * Operation userPost.
   *
   * Register
   *
   * @param \OpenAPI\Server\Model\RegisterRequest $register_request (required)
   * @param \string                               $accept_language  (optional)
   * @param \int                                  $responseCode     The HTTP response code to return
   * @param \array                                $responseHeaders  Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\JWTResponse
   */
  public function userPost(RegisterRequest $register_request, string $accept_language = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation userPut.
   *
   * Update User
   *
   * @param \OpenAPI\Server\Model\UpdateUserRequest $update_user_request (required)
   * @param \string                                 $accept_language     (optional)
   * @param \int                                    $responseCode        The HTTP response code to return
   * @param \array                                  $responseHeaders     Additional HTTP headers to return with the response ()
   *
   * @return \array
   */
  public function userPut(UpdateUserRequest $update_user_request, string $accept_language = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation userResetPasswordPost.
   *
   * Request email to reset password
   *
   * @param \OpenAPI\Server\Model\ResetPasswordRequest $reset_password_request (required)
   * @param \string                                    $accept_language        (optional)
   * @param \int                                       $responseCode           The HTTP response code to return
   * @param \array                                     $responseHeaders        Additional HTTP headers to return with the response ()
   *
   * @return \array
   */
  public function userResetPasswordPost(ResetPasswordRequest $reset_password_request, string $accept_language = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation usersSearchGet.
   *
   * Search for users
   *
   * @param \string $query           (required)
   * @param \int    $limit           (optional, default to 20)
   * @param \int    $offset          (optional, default to 0)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\BasicUserDataResponse[]
   */
  public function usersSearchGet(string $query, int $limit = 20, int $offset = 0, &$responseCode, array &$responseHeaders);
}
