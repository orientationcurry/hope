<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Blogposts Controller
 *
 * @property \App\Model\Table\BlogpostsTable $Blogposts
 * @method \App\Model\Entity\Blogpost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogpostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $blogposts = $this->paginate($this->Blogposts);

        $this->set(compact('blogposts'));
    }

    /**
     * View method
     *
     * @param string|null $id Blogpost id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogpost = $this->Blogposts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('blogpost'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogpost = $this->Blogposts->newEmptyEntity();
        if ($this->request->is('post')) {
            $blogpost = $this->Blogposts->patchEntity($blogpost, $this->request->getData());
            if ($this->Blogposts->save($blogpost)) {
                $this->Flash->success(__('The blogpost has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blogpost could not be saved. Please, try again.'));
        }
        $this->set(compact('blogpost'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blogpost id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogpost = $this->Blogposts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogpost = $this->Blogposts->patchEntity($blogpost, $this->request->getData());
            if ($this->Blogposts->save($blogpost)) {
                $this->Flash->success(__('The blogpost has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blogpost could not be saved. Please, try again.'));
        }
        $this->set(compact('blogpost'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blogpost id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogpost = $this->Blogposts->get($id);
        if ($this->Blogposts->delete($blogpost)) {
            $this->Flash->success(__('The blogpost has been deleted.'));
        } else {
            $this->Flash->error(__('The blogpost could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
