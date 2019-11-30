<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movie Entity
 *
 * @property int $id
 * @property string $title
 * @property string $budget
 * @property string $rating
 * @property string $description
 * @property string $genre
 * @property string $length
 * @property string $image
 *
 * @property \App\Model\Entity\Showtime[] $showtimes
 */
class Movie extends Entity
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
        'title' => true,
        'budget' => true,
        'rating' => true,
        'description' => true,
        'genre' => true,
        'length' => true,
        'image' => true,
        'showtimes' => true
    ];
}
