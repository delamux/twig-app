<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property int $post_id
 * @property string|null $comment
 *
 * @property \App\Model\Entity\Post $post
 */
class Comment extends Entity
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
        'post_id' => true,
        'comment' => true,
        'post' => true
    ];

    public const FIELD_ID = 'id';
    public const FIELD_POST_ID = 'post_id';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_POST = 'post';
}
