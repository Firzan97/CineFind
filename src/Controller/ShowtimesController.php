<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Showtimes Controller
 *
 * @property \App\Model\Table\ShowtimesTable $Showtimes
 *
 * @method \App\Model\Entity\Showtime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShowtimesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Movies', 'Halls', 'Cinemas']
        ];
        $showtimes = $this->paginate($this->Showtimes);

        $this->set(compact('showtimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Showtime id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $showtime = $this->Showtimes->get($id, [
            'contain' => ['Movies', 'Halls', 'Cinemas', 'Tickets']
        ]);

        $this->set('showtime', $showtime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $showtime = $this->Showtimes->newEntity();
        if ($this->request->is('post')) {
            $showtime = $this->Showtimes->patchEntity($showtime, $this->request->getData());
            if ($this->Showtimes->save($showtime)) {
                $this->Flash->success(__('The showtime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The showtime could not be saved. Please, try again.'));
        }
        $movies = $this->Showtimes->Movies->find('list', ['limit' => 200]);
        $halls = $this->Showtimes->Halls->find('list', ['limit' => 200]);
        $cinemas = $this->Showtimes->Cinemas->find('list', ['limit' => 200]);
        $this->set(compact('showtime', 'movies', 'halls', 'cinemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Showtime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $showtime = $this->Showtimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $showtime = $this->Showtimes->patchEntity($showtime, $this->request->getData());
            if ($this->Showtimes->save($showtime)) {
                $this->Flash->success(__('The showtime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The showtime could not be saved. Please, try again.'));
        }
        $movies = $this->Showtimes->Movies->find('list', ['limit' => 200]);
        $halls = $this->Showtimes->Halls->find('list', ['limit' => 200]);
        $cinemas = $this->Showtimes->Cinemas->find('list', ['limit' => 200]);
        $this->set(compact('showtime', 'movies', 'halls', 'cinemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Showtime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $showtime = $this->Showtimes->get($id);
        if ($this->Showtimes->delete($showtime)) {
            $this->Flash->success(__('The showtime has been deleted.'));
        } else {
            $this->Flash->error(__('The showtime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
