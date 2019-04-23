<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Distritos Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\HasMany $Unidades
 *
 * @method \App\Model\Entity\Distrito get($primaryKey, $options = [])
 * @method \App\Model\Entity\Distrito newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Distrito[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Distrito|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Distrito|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Distrito patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Distrito[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Distrito findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DistritosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('distritos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Unidades', [
            'foreignKey' => 'distrito_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('comentarios')
            ->allowEmpty('comentarios');

        return $validator;
    }
}
