<?php
/**
 * JWTResponse
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
 * Class representing the JWTResponse model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class JWTResponse 
{
        /**
     * @var string|null
     * @SerializedName("token")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $token;

    /**
     * @var string|null
     * @SerializedName("refresh_token")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $refresh_token;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->token = $data['token'] ?? null;
        $this->refresh_token = $data['refresh_token'] ?? null;
    }

    /**
     * Gets token.
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets token.
     *
     * @param string|null $token
     *
     * @return $this
     */
    public function setToken(string $token = null): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Gets refresh_token.
     *
     * @return string|null
     */
    public function getRefreshToken(): ?string
    {
        return $this->refresh_token;
    }

    /**
     * Sets refresh_token.
     *
     * @param string|null $refresh_token
     *
     * @return $this
     */
    public function setRefreshToken(string $refresh_token = null): self
    {
        $this->refresh_token = $refresh_token;

        return $this;
    }
}


