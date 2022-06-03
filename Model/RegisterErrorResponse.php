<?php
/**
 * RegisterErrorResponse
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
 * Class representing the RegisterErrorResponse model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class RegisterErrorResponse 
{
        /**
     * @var string|null
     * @SerializedName("email")
     * @Assert\Choice({ "Email already in use", "Email invalid", "Email missing" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $email;

    /**
     * @var string|null
     * @SerializedName("username")
     * @Assert\Choice({ "Username too short", "Username too long", "Username already in use", "Username missing", "Username must not contain an email address" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $username;

    /**
     * @var string|null
     * @SerializedName("password")
     * @Assert\Choice({ "Password too short", "Password too long", "Password contains invalid chars", "Password missing" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $password;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->email = $data['email'] ?? null;
        $this->username = $data['username'] ?? null;
        $this->password = $data['password'] ?? null;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail(string $email = null): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets username.
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Sets username.
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername(string $username = null): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Sets password.
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword(string $password = null): self
    {
        $this->password = $password;

        return $this;
    }
}


