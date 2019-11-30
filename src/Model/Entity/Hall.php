<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hall Entity
 *
 * @property int $id
 * @property string $name
 * @property int $totalseat
 *
 * @property \App\Model\Entity\Seat[] $seats
 * @property \App\Model\Entity\Showtime[] $showtimes
 */
class Hall extends Entity
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
        'name' => true,
        'totalseat' => true,
        'seats' => true,
        'showtimes' => true
    ];
}
