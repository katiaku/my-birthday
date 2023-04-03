<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $userName
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenDate $birthDate
 * @property string $color
 * @property bool $is_active
 *
 * @property \App\Model\Entity\BirthdayGuest[] $birthday_guests
 * @property \App\Model\Entity\Birthday[] $birthdays
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
     * @var array<string, bool>
     */
    protected $_accessible = [
        'firstName' => true,
        'lastName' => true,
        'userName' => true,
        'email' => true,
        'password' => true,
        'birthDate' => true,
        'color' => true,
        'is_active' => true,
        'birthday_guests' => true,
        'birthdays' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
