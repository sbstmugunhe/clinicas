<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Unidade Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slogan
 * @property string $nuit
 * @property string $email
 * @property \Cake\I18n\FrozenDate $data_fundacao
 * @property int $categorie_id
 * @property int $distrito_id
 * @property int $numero_camas
 * @property string $endereco
 * @property string $comentarios
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Distrito $distrito
 */
class Unidade extends Entity
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
        'slogan' => true,
        'nuit' => true,
        'email' => true,
        'data_fundacao' => true,
        'categorie_id' => true,
        'distrito_id' => true,
        'numero_camas' => true,
        'endereco' => true,
        'comentarios' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'distrito' => true
    ];
}
