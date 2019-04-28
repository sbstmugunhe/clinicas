<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string $name
 * @property string $area_trabalho
 * @property string $residencia
 * @property string $genero
 * @property int $idade
 * @property int $contacto
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Tratamento[] $tratamentos
 */
class Paciente extends Entity
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
        'area_trabalho' => true,
        'residencia' => true,
        'genero' => true,
        'idade' => true,
        'contacto' => true,
        'created' => true,
        'modified' => true,
        'tratamentos' => true
    ];
}
