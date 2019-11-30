<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cinemas Controller
 *
 * @property \App\Model\Table\CinemasTable $Cinemas
 *
 * @method \App\Model\Entity\Cinema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CinemasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cinemas = $this->paginate($this->Cinemas);

        $this->set(compact('cinemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cinema = $this->Cinemas->get($id, [
            'contain' => ['Showtimes']
        ]);

        $this->set('cinema', $cinema);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cinema = $this->Cinemas->newEntity();
        if ($this->request->is('post')) {
            $cinema = $this->Cinemas->patchEntity($cinema, $this->request->getData());
            if ($this->Cinemas->save($cinema)) {
                $this->Flash->success(__('The cinema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cinema could not be saved. Please, try again.'));
        }
        $this->set(compact('cinema'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cinema = $this->Cinemas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cinema = $this->Cinemas->patchEntity($cinema, $this->request->getData());
            if ($this->Cinemas->save($cinema)) {
                $this->Flash->success(__('The cinema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cinema could not be saved. Please, try again.'));
        }
        $this->set(compact('cinema'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cinema = $this->Cinemas->get($id);
        if ($this->Cinemas->delete($cinema)) {
            $this->Flash->success(__('The cinema has been deleted.'));
        } else {
            $this->Flash->error(__('The cinema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
