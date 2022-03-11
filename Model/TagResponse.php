<?php
/**
 * TagResponse.
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
 * The version of the OpenAPI document: v1.0.73
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
 * Class representing the TagResponse model.
 *
 * @author  OpenAPI Generator team
 */
class TagResponse
{
  /**
   * The internal title of the title.
   *
   * @var string|null
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $id;

  /**
   * The translated text of the project tag.
   *
   * @var string|null
   * @SerializedName("text")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $text;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->text = isset($data['text']) ? $data['text'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param string|null $id The internal title of the title
   *
   * @return $this
   */
  public function setId(string $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets text.
   */
  public function getText(): ?string
  {
    return $this->text;
  }

  /**
   * Sets text.
   *
   * @param string|null $text the translated text of the project tag
   *
   * @return $this
   */
  public function setText(string $text = null)
  {
    $this->text = $text;

    return $this;
  }
}
