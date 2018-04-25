<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Produits Controller
 *
 * @property \App\Model\Table\ProduitsTable $Produits
 */
class ProduitsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }


    public $paginate = [
    'limit' => 10
    ];
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
        'maxLimit' =>  '10'
        ];

        $this->paginate = [
        'maxLimit' =>  '10'
        ];
        $this->set('produits', $this->paginate($this->Produits));
        $this->set('_serialize', ['produits']);
        /*

         */
    }

    /**
     * View method
     *
     * @param string|null $id Produit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produit = $this->Produits->get($id, [
            'contain' => []
            ]);
        $this->set('produit', $produit);
        $this->set('_serialize', ['produit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        if ($this->request->session()->read('Auth.User.role')) {

            $produit = $this->Produits->newEntity();

            if ($this->request->is('post')) {
                include 'function.php';
                $produit = $this->Produits->patchEntity($produit, $this->request->data);

                $produit->prix_base = $this->request->data(['prix_base']);
                $produit->prix_fin = $this->request->data(['prix_fin']);

                $Pourcent =  Pourcentage($produit->prix_base, $produit->prix_fin);

                $produit->promo = $Pourcent;
            }

            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('Votre ticket est bien save'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Il y a eu un problème'));
            }

            $this->set(compact('produit'));
            $this->set('_serialize', ['produit']);
        }else{
            echo 'ERROR!!! <a href="http://127.0.0.1/cakephp/users/login"> Se connecter</a>';
            die();
        }

    }

    /**
     * Edit method
     *
     * @param string|null $id Produit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if ($this->request->session()->read('Auth.User.role') == 'admin') {
            $produit = $this->Produits->get($id, [
                'contain' => []
                ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $produit = $this->Produits->patchEntity($produit, $this->request->data);
                if ($this->Produits->save($produit)) {
                    $this->Flash->success(__('The produit has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The produit could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('produit'));
            $this->set('_serialize', ['produit']);
        }else{
            echo 'ERROR!!! <a href="http://127.0.0.1/cakephp/users/login"> Se connecter</a>';
            die();
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Produit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produit = $this->Produits->get($id);
        if ($this->Produits->delete($produit)) {
            $this->Flash->success(__('The produit has been deleted.'));
        } else {
            $this->Flash->error(__('The produit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
