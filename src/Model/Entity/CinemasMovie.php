<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CinemasMovie Entity
 *
 * @property int $id
 * @property int $movie_id
 * @property int $cinema_id
 *
 * @property \App\Model\Entity\Movie $movie
 * @property \App\Model\Entity\Cinema $cinema
 */
class CinemasMovie extends Entity
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
        'movie_id' => true,
        'cinema_id' => true,
        'movie' => true,
        'cinema' => true
    ];
}
