<?php
/**
 * MediaFileResponse.
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
 * The version of the OpenAPI document: v1.0.74
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
 * Class representing the MediaFileResponse model.
 *
 * @author  OpenAPI Generator team
 */
class MediaFileResponse
{
  /**
   * @var int|null
   * @SerializedName("id")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $id;

  /**
   * @var string|null
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * @var string[]|null
   * @SerializedName("flavors")
   * @Assert\All({
   *     @Assert\Type("string")
   * })
   * @Type("array<string>")
   */
  protected $flavors;

  /**
   * @var string[]|null
   * @SerializedName("packages")
   * @Assert\All({
   *     @Assert\Type("string")
   * })
   * @Type("array<string>")
   */
  protected $packages;

  /**
   * @var string|null
   * @SerializedName("category")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $category;

  /**
   * @var string|null
   * @SerializedName("author")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $author;

  /**
   * @var string|null
   * @SerializedName("extension")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $extension;

  /**
   * @var string|null
   * @SerializedName("download_url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $download_url;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->flavors = isset($data['flavors']) ? $data['flavors'] : null;
    $this->packages = isset($data['packages']) ? $data['packages'] : null;
    $this->category = isset($data['category']) ? $data['category'] : null;
    $this->author = isset($data['author']) ? $data['author'] : null;
    $this->extension = isset($data['extension']) ? $data['extension'] : null;
    $this->download_url = isset($data['download_url']) ? $data['download_url'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @return $this
   */
  public function setId(int $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets flavors.
   *
   * @return string[]|null
   */
  public function getFlavors(): ?array
  {
    return $this->flavors;
  }

  /**
   * Sets flavors.
   *
   * @param string[]|null $flavors
   *
   * @return $this
   */
  public function setFlavors(array $flavors = null)
  {
    $this->flavors = $flavors;

    return $this;
  }

  /**
   * Gets packages.
   *
   * @return string[]|null
   */
  public function getPackages(): ?array
  {
    return $this->packages;
  }

  /**
   * Sets packages.
   *
   * @param string[]|null $packages
   *
   * @return $this
   */
  public function setPackages(array $packages = null)
  {
    $this->packages = $packages;

    return $this;
  }

  /**
   * Gets category.
   */
  public function getCategory(): ?string
  {
    return $this->category;
  }

  /**
   * Sets category.
   *
   * @return $this
   */
  public function setCategory(string $category = null)
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Gets author.
   */
  public function getAuthor(): ?string
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @return $this
   */
  public function setAuthor(string $author = null)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets extension.
   */
  public function getExtension(): ?string
  {
    return $this->extension;
  }

  /**
   * Sets extension.
   *
   * @return $this
   */
  public function setExtension(string $extension = null)
  {
    $this->extension = $extension;

    return $this;
  }

  /**
   * Gets download_url.
   */
  public function getDownloadUrl(): ?string
  {
    return $this->download_url;
  }

  /**
   * Sets download_url.
   *
   * @return $this
   */
  public function setDownloadUrl(string $download_url = null)
  {
    $this->download_url = $download_url;

    return $this;
  }
}
