<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Keihis Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Kamokus
 *
 * @method \App\Model\Entity\Keihi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Keihi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Keihi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Keihi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Keihi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Keihi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Keihi findOrCreate($search, callable $callback = null)
 */
class KeihisTable extends Table
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

        $this->table('keihis');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Kamokus', [
            'foreignKey' => 'kamoku_id',
            'joinType' => 'INNER'
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->requirePresence('tekiyou', 'create')
            ->notEmpty('tekiyou');

        $validator
            ->integer('kingaku')
            ->requirePresence('kingaku', 'create')
            ->notEmpty('kingaku');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['kamoku_id'], 'Kamokus'));

        return $rules;
    }
}
