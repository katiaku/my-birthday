<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Birthday Entity
 *
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate $day
 *
 * @property \App\Model\Entity\User $user
 */
class Birthday extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'title' => true,
        'user_id' => true,
        'day' => true,
        'user' => true,
        'birthday_item' => true,
        'birthday_guest' => true
    ];
}
