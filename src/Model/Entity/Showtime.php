<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Showtime Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $screentime
 * @property int $movie_id
 * @property int $hall_id
 * @property int $cinema_id
 *
 * @property \App\Model\Entity\Movie $movie
 * @property \App\Model\Entity\Hall $hall
 * @property \App\Model\Entity\Cinema $cinema
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Showtime extends Entity
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
        'date' => true,
        'screentime' => true,
        'movie_id' => true,
        'hall_id' => true,
        'cinema_id' => true,
        'movie' => true,
        'hall' => true,
        'cinema' => true,
        'tickets' => true
    ];
}
