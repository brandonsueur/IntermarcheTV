<?php
namespace App\Model\Table;

use App\Model\Entity\Produit;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produits Model
 *
 */
class ProduitsTable extends Table
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

        $this->table('produits');
        $this->displayField('name');
        $this->primaryKey('id');

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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('img', 'create')
            ->notEmpty('img');

        $validator
            ->requirePresence('prix_base', 'create')
            ->notEmpty('prix_base');

        $validator
            ->requirePresence('prix_fin', 'create')
            ->notEmpty('prix_fin');

        $validator
            ->requirePresence('avantage', 'create')
            ->notEmpty('avantage');

        return $validator;
    }
}
