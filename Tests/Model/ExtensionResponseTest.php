<?php
/**
 * ExtensionResponseTest.
 *
 * PHP version 8.1.1
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
 * The version of the OpenAPI document: v1.1.17
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * ExtensionResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description ExtensionResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\ExtensionResponse
 *
 * @internal
 */
class ExtensionResponseTest extends TestCase
{
  protected ExtensionResponse|MockObject $object;

  /**
   * Setup before running any test case.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    $this->object = $this->getMockBuilder(ExtensionResponse::class)->getMockForAbstractClass();
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * @group integration
   *
   * @small
   */
  public function testTestClassExists(): void
  {
    $this->assertTrue(class_exists(ExtensionResponse::class));
    $this->assertInstanceOf(ExtensionResponse::class, $this->object);
  }

  /**
   * Test attribute "id".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyId(): void
  {
    $this->markTestSkipped('Test for property id not implemented');
  }

  /**
   * Test attribute "text".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyText(): void
  {
    $this->markTestSkipped('Test for property text not implemented');
  }
}
