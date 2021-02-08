<?php
/**
 * ProjectUploadRequest.
 *
 * PHP version 7.1.3
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
 * The version of the OpenAPI document: v1.0.55
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the ProjectUploadRequest model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectUploadRequest
{
  /**
   * Checksum of the *.catrobat file.
   *
   * @var string
   * @SerializedName("checksum")
   * @Assert\NotNull
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $checksum;

  /**
   * *.catrobat file.
   *
   * @var UploadedFile
   * @SerializedName("file")
   * @Assert\NotNull
   * @Assert\Type("UploadedFile")
   * @Type("UploadedFile")
   */
  protected $file;

  /**
   * The flavor of this project.
   *
   * @var string|null
   * @SerializedName("flavor")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $flavor;

  /**
   * Indicates whether a program should be private from the start.
   *
   * @var bool|null
   * @SerializedName("private")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $private;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->checksum = isset($data['checksum']) ? $data['checksum'] : null;
    $this->file = isset($data['file']) ? $data['file'] : null;
    $this->flavor = isset($data['flavor']) ? $data['flavor'] : null;
    $this->private = isset($data['private']) ? $data['private'] : null;
  }

  /**
   * Gets checksum.
   */
  public function getChecksum(): string
  {
    return $this->checksum;
  }

  /**
   * Sets checksum.
   *
   * @param string $checksum Checksum of the *.catrobat file
   *
   * @return $this
   */
  public function setChecksum(string $checksum)
  {
    $this->checksum = $checksum;

    return $this;
  }

  /**
   * Gets file.
   */
  public function getFile(): UploadedFile
  {
    return $this->file;
  }

  /**
   * Sets file.
   *
   * @param UploadedFile $file *.catrobat file
   *
   * @return $this
   */
  public function setFile(UploadedFile $file)
  {
    $this->file = $file;

    return $this;
  }

  /**
   * Gets flavor.
   */
  public function getFlavor(): ?string
  {
    return $this->flavor;
  }

  /**
   * Sets flavor.
   *
   * @param string|null $flavor the flavor of this project
   *
   * @return $this
   */
  public function setFlavor(string $flavor = null)
  {
    $this->flavor = $flavor;

    return $this;
  }

  /**
   * Gets private.
   */
  public function isPrivate(): ?bool
  {
    return $this->private;
  }

  /**
   * Sets private.
   *
   * @param bool|null $private indicates whether a program should be private from the start
   *
   * @return $this
   */
  public function setPrivate(bool $private = null)
  {
    $this->private = $private;

    return $this;
  }
}
