<?php
/**
 * NotificationsApiInterfaceTest
 * PHP version 8.1.1.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.1.19
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * NotificationsApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Api\NotificationsApiInterface
 *
 * @internal
 */
class NotificationsApiInterfaceTest extends WebTestCase
{
  private static ?KernelBrowser $client = null;

  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    if (null === self::$client) {
      self::$client = static::createClient();
    }
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
    static::ensureKernelShutdown();
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * Test case for notificationIdReadPut.
   *
   * Mark specified notification as read.
   */
  public function testNotificationIdReadPut(): void
  {
    $client = self::$client;

    $path = '/notification/{id}/read';
    $pattern = '{id}';
    $data = $this->genTestData('\d+');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('PUT', $path);
    $this->markTestSkipped('Test for notificationIdReadPut not implemented');
  }

  /**
   * Test case for notificationsCountGet.
   *
   * Count the number of unseen notifications.
   */
  public function testNotificationsCountGet(): void
  {
    $client = self::$client;

    $path = '/notifications/count';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for notificationsCountGet not implemented');
  }

  /**
   * Test case for notificationsGet.
   *
   * Get user notifications -- StatusCode: 501 - Not yet implemented.
   */
  public function testNotificationsGet(): void
  {
    $client = self::$client;

    $path = '/notifications';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for notificationsGet not implemented');
  }

  /**
   * Test case for notificationsReadPut.
   *
   * Mark all notifications as read.
   */
  public function testNotificationsReadPut(): void
  {
    $client = self::$client;

    $path = '/notifications/read';

    $crawler = $client->request('PUT', $path);
    $this->markTestSkipped('Test for notificationsReadPut not implemented');
  }

  /**
   * @return mixed
   */
  protected function genTestData(string $regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
