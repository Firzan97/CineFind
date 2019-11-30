<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seats Controller
 *
 * @property \App\Model\Table\SeatsTable $Seats
 *
 * @method \App\Model\Entity\Seat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Halls']
        ];
        $seats = $this->paginate($this->Seats);

        $this->set(compact('seats'));
    }

    /**
     * View method
     *
     * @param string|null $id Seat id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seat = $this->Seats->get($id, [
            'contain' => ['Halls']
        ]);

        $this->set('seat', $seat);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seat = $this->Seats->newEntity();
        if ($this->request->is('post')) {
            $seat = $this->Seats->patchEntity($seat, $this->request->getData());
            if ($this->Seats->save($seat)) {
                $this->Flash->success(__('The seat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seat could not be saved. Please, try again.'));
        }
        $halls = $this->Seats->Halls->find('list', ['limit' => 200]);
        $this->set(compact('seat', 'halls'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seat = $this->Seats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seat = $this->Seats->patchEntity($seat, $this->request->getData());
            if ($this->Seats->save($seat)) {
                $this->Flash->success(__('The seat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seat could not be saved. Please, try again.'));
        }
        $halls = $this->Seats->Halls->find('list', ['limit' => 200]);
        $this->set(compact('seat', 'halls'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seat = $this->Seats->get($id);
        if ($this->Seats->delete($seat)) {
            $this->Flash->success(__('The seat has been deleted.'));
        } else {
            $this->Flash->error(__('The seat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
