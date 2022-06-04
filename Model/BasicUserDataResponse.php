<?php
/**
 * BasicUserDataResponse.
 *
 * PHP version 8.1.1
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
 * The version of the OpenAPI document: v1.1.7
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
 * Class representing the BasicUserDataResponse model.
 *
 * @author  OpenAPI Generator team
 */
class BasicUserDataResponse
{
  /**
   * Unique ID of the user.
   *
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $id = null;

  /**
   * Nickname of the user.
   *
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $username = null;

  /**
   * The profile picture of the user in data URI scheme.
   *
   * @SerializedName("picture")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $picture = null;

  /**
   * An introduction of the user.
   *
   * @SerializedName("about")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $about = null;

  /**
   * A short description about the project the user is currently working on.
   *
   * @SerializedName("currentlyWorkingOn")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $currently_working_on = null;

  /**
   * Amount of projects of the user.
   *
   * @SerializedName("projects")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $projects = null;

  /**
   * Amount of users that follow this user.
   *
   * @SerializedName("followers")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $followers = null;

  /**
   * Amount of users followed by this user.
   *
   * @SerializedName("following")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $following = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = $data['id'] ?? null;
    $this->username = $data['username'] ?? null;
    $this->picture = $data['picture'] ?? null;
    $this->about = $data['about'] ?? null;
    $this->currently_working_on = $data['currently_working_on'] ?? null;
    $this->projects = $data['projects'] ?? null;
    $this->followers = $data['followers'] ?? null;
    $this->following = $data['following'] ?? null;
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
   * @param string|null $id Unique ID of the user
   *
   * @return $this
   */
  public function setId(string $id = null): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @param string|null $username Nickname of the user
   *
   * @return $this
   */
  public function setUsername(string $username = null): self
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets picture.
   */
  public function getPicture(): ?string
  {
    return $this->picture;
  }

  /**
   * Sets picture.
   *
   * @param string|null $picture the profile picture of the user in data URI scheme
   *
   * @return $this
   */
  public function setPicture(string $picture = null): self
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Gets about.
   */
  public function getAbout(): ?string
  {
    return $this->about;
  }

  /**
   * Sets about.
   *
   * @param string|null $about an introduction of the user
   *
   * @return $this
   */
  public function setAbout(string $about = null): self
  {
    $this->about = $about;

    return $this;
  }

  /**
   * Gets currently_working_on.
   */
  public function getCurrentlyWorkingOn(): ?string
  {
    return $this->currently_working_on;
  }

  /**
   * Sets currently_working_on.
   *
   * @param string|null $currently_working_on a short description about the project the user is currently working on
   *
   * @return $this
   */
  public function setCurrentlyWorkingOn(string $currently_working_on = null): self
  {
    $this->currently_working_on = $currently_working_on;

    return $this;
  }

  /**
   * Gets projects.
   */
  public function getProjects(): ?int
  {
    return $this->projects;
  }

  /**
   * Sets projects.
   *
   * @param int|null $projects Amount of projects of the user
   *
   * @return $this
   */
  public function setProjects(int $projects = null): self
  {
    $this->projects = $projects;

    return $this;
  }

  /**
   * Gets followers.
   */
  public function getFollowers(): ?int
  {
    return $this->followers;
  }

  /**
   * Sets followers.
   *
   * @param int|null $followers Amount of users that follow this user
   *
   * @return $this
   */
  public function setFollowers(int $followers = null): self
  {
    $this->followers = $followers;

    return $this;
  }

  /**
   * Gets following.
   */
  public function getFollowing(): ?int
  {
    return $this->following;
  }

  /**
   * Sets following.
   *
   * @param int|null $following Amount of users followed by this user
   *
   * @return $this
   */
  public function setFollowing(int $following = null): self
  {
    $this->following = $following;

    return $this;
  }
}
