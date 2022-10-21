<?php
/**
 * UpdateProjectRequestTest.
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
 * UpdateProjectRequestTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description UpdateProjectRequest
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\UpdateProjectRequest
 *
 * @internal
 */
class UpdateProjectRequestTest extends TestCase
{
  protected UpdateProjectRequest|MockObject $object;

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
    $this->object = $this->getMockBuilder(UpdateProjectRequest::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(UpdateProjectRequest::class));
    $this->assertInstanceOf(UpdateProjectRequest::class, $this->object);
  }

  /**
   * Test attribute "name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyName(): void
  {
    $this->markTestSkipped('Test for property name not implemented');
  }

  /**
   * Test attribute "description".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyDescription(): void
  {
    $this->markTestSkipped('Test for property description not implemented');
  }

  /**
   * Test attribute "credits".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyCredits(): void
  {
    $this->markTestSkipped('Test for property credits not implemented');
  }

  /**
   * Test attribute "private".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyPrivate(): void
  {
    $this->markTestSkipped('Test for property private not implemented');
  }

  /**
   * Test attribute "screenshot".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyScreenshot(): void
  {
    $this->markTestSkipped('Test for property screenshot not implemented');
  }
}
