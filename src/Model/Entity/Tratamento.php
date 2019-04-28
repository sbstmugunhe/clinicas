<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tratamento Entity
 *
 * @property int $id
 * @property int $contadormensal
 * @property int $unidade_id
 * @property int $user_id
 * @property int $paciente_id
 * @property int $diagnostico_id
 * @property string $tratam
 * @property string $obs
 * @property string $situacaovacinacao
 * @property string $situacaopaciente
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Diagnostico $diagnostico
 */
class Tratamento extends Entity
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
        'contadormensal' => true,
        'unidade_id' => true,
        'user_id' => true,
        'paciente_id' => true,
        'diagnostico_id' => true,
        'tratam' => true,
        'obs' => true,
        'situacaovacinacao' => true,
        'situacaopaciente' => true,
        'created' => true,
        'modified' => true,
        'unidade' => true,
        'user' => true,
        'paciente' => true,
        'diagnostico' => true
    ];
}
