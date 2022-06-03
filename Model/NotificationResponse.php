<?php
/**
 * NotificationResponse
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
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

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the NotificationResponse model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class NotificationResponse 
{
        /**
     * Id of the notification
     *
     * @var int|null
     * @SerializedName("id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $id;

    /**
     * Notification Type
     *
     * @var string|null
     * @SerializedName("type")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type;

    /**
     * Seen status of the notification
     *
     * @var bool|null
     * @SerializedName("seen")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $seen;

    /**
     * @var \OpenAPI\Server\Model\NotificationContent[]|null
     * @SerializedName("content")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\NotificationContent")
     * })
     * @Type("array<OpenAPI\Server\Model\NotificationContent>")
     */
    protected ?array $content;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->seen = $data['seen'] ?? null;
        $this->content = $data['content'] ?? null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id  Id of the notification
     *
     * @return $this
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets type.
     *
     * @param string|null $type  Notification Type
     *
     * @return $this
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets seen.
     *
     * @return bool|null
     */
    public function isSeen(): ?bool
    {
        return $this->seen;
    }

    /**
     * Sets seen.
     *
     * @param bool|null $seen  Seen status of the notification
     *
     * @return $this
     */
    public function setSeen(bool $seen = null): self
    {
        $this->seen = $seen;

        return $this;
    }

    /**
     * Gets content.
     *
     * @return \OpenAPI\Server\Model\NotificationContent[]|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * Sets content.
     *
     * @param \OpenAPI\Server\Model\NotificationContent[]|null $content
     *
     * @return $this
     */
    public function setContent(array $content = null): self
    {
        $this->content = $content;

        return $this;
    }
}


