<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $username
 * @property string|null $email
 * @property string $password
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $token
 * @property \Cake\I18n\FrozenTime|null $token_expires
 * @property string|null $api_token
 * @property \Cake\I18n\FrozenTime|null $activation_date
 * @property string|null $secret
 * @property bool|null $secret_verified
 * @property \Cake\I18n\FrozenTime|null $tos_date
 * @property bool $active
 * @property bool $is_superuser
 * @property string|null $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Post[] $posts
 * @property \Cake\ORM\Entity[] $social_accounts
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'email' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'token' => true,
        'token_expires' => true,
        'api_token' => true,
        'activation_date' => true,
        'secret' => true,
        'secret_verified' => true,
        'tos_date' => true,
        'active' => true,
        'is_superuser' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'posts' => true,
        'social_accounts' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];

    public const FIELD_ID = 'id';
    public const FIELD_USERNAME = 'username';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_FIRST_NAME = 'first_name';
    public const FIELD_LAST_NAME = 'last_name';
    public const FIELD_TOKEN = 'token';
    public const FIELD_TOKEN_EXPIRES = 'token_expires';
    public const FIELD_API_TOKEN = 'api_token';
    public const FIELD_ACTIVATION_DATE = 'activation_date';
    public const FIELD_SECRET = 'secret';
    public const FIELD_SECRET_VERIFIED = 'secret_verified';
    public const FIELD_TOS_DATE = 'tos_date';
    public const FIELD_ACTIVE = 'active';
    public const FIELD_IS_SUPERUSER = 'is_superuser';
    public const FIELD_ROLE = 'role';
    public const FIELD_CREATED = 'created';
    public const FIELD_MODIFIED = 'modified';
    public const FIELD_POSTS = 'posts';
    public const FIELD_SOCIAL_ACCOUNTS = 'social_accounts';
}
