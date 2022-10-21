<?php

/**
 * UtilityController
 * PHP version 8.1.1.
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
 * The version of the OpenAPI document: v1.1.17
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Controller;

use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use OpenAPI\Server\Api\UtilityApiInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UtilityController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class UtilityController extends Controller
{
  /**
   * Operation healthGet.
   *
   * Health Check
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function healthGetAction(Request $request)
  {
    // Handle authentication

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];

      $handler->healthGet($responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 204:
          $message = 'System is alive and healthy!';
          break;
      }

      return new Response(
        '',
        $responseCode,
        array_merge(
          $responseHeaders,
          [
            'X-OpenAPI-Message' => $message,
          ]
        )
      );
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation surveyLangCodeGet.
   *
   * Get survey link for given language code.
   *
   * @param Request $request   the Symfony request to handle
   * @param mixed   $lang_code
   *
   * @return Response the Symfony response
   */
  public function surveyLangCodeGetAction(Request $request, $lang_code)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $flavor = $request->query->get('flavor', '');
    $platform = $request->query->get('platform', '');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $lang_code = $this->deserialize($lang_code, 'string', 'string');
      $flavor = $this->deserialize($flavor, 'string', 'string');
      $platform = $this->deserialize($platform, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($lang_code, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($flavor, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Choice(['', 'android', 'ios']);
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($platform, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->surveyLangCodeGet($lang_code, $flavor, $platform, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
        case 200:
          $message = 'OK';
          break;
        case 400:
          $message = 'Bad request (Invalid, or missing parameters)';
          break;
        case 404:
          $message = 'Not found';
          break;
        case 406:
          $message = 'Not acceptable - client must accept application/json as content type';
          break;
      }

      return new Response(
        null !== $result ? $this->serialize($result, $responseFormat) : '',
        $responseCode,
        array_merge(
          $responseHeaders,
          [
            'Content-Type' => $responseFormat,
            'X-OpenAPI-Message' => $message,
          ]
        )
      );
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Returns the handler for this API controller.
   *
   * @return UtilityApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('utility');
  }
}
