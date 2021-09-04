<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrderProducts Controller
 *
 * @property \App\Model\Table\OrderProductsTable $OrderProducts
 * @method \App\Model\Entity\OrderProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderProducts = $this->paginate($this->OrderProducts);

        $this->set(compact('orderProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderProduct = $this->OrderProducts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orderProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderProduct = $this->OrderProducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderProduct = $this->OrderProducts->patchEntity($orderProduct, $this->request->getData());
            if ($this->OrderProducts->save($orderProduct)) {
                $this->Flash->success(__('The order product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order product could not be saved. Please, try again.'));
        }
        $this->set(compact('orderProduct'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderProduct = $this->OrderProducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderProduct = $this->OrderProducts->patchEntity($orderProduct, $this->request->getData());
            if ($this->OrderProducts->save($orderProduct)) {
                $this->Flash->success(__('The order product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order product could not be saved. Please, try again.'));
        }
        $this->set(compact('orderProduct'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderProduct = $this->OrderProducts->get($id);
        if ($this->OrderProducts->delete($orderProduct)) {
            $this->Flash->success(__('The order product has been deleted.'));
        } else {
            $this->Flash->error(__('The order product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
