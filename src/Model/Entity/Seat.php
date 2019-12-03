<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seat Entity
 *
 * @property string $id
 * @property string $row
 * @property int $hall_id
 * @property string $reserve
 *
 * @property \App\Model\Entity\Hall $hall
 */
class Seat extends Entity
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
        'row' => true,
        'hall_id' => true,
        'reserve' => true,
        'hall' => true
    ];
}
