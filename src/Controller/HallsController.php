<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Halls Controller
 *
 * @property \App\Model\Table\HallsTable $Halls
 *
 * @method \App\Model\Entity\Hall[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HallsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $halls = $this->paginate($this->Halls);

        $this->set(compact('halls'));
    }

    /**
     * View method
     *
     * @param string|null $id Hall id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $hall = $this->Halls->get($id, [
            'contain' => ['Seats', 'Showtimes']
        ]);

        $this->set('hall', $hall);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hall = $this->Halls->newEntity();
        if ($this->request->is('post')) {
            $hall = $this->Halls->patchEntity($hall, $this->request->getData());
            if ($this->Halls->save($hall)) {
                $this->Flash->success(__('The hall has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hall could not be saved. Please, try again.'));
        }
        $this->set(compact('hall'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hall id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hall = $this->Halls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hall = $this->Halls->patchEntity($hall, $this->request->getData());
            if ($this->Halls->save($hall)) {
                $this->Flash->success(__('The hall has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hall could not be saved. Please, try again.'));
        }
        $this->set(compact('hall'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hall id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hall = $this->Halls->get($id);
        if ($this->Halls->delete($hall)) {
            $this->Flash->success(__('The hall has been deleted.'));
        } else {
            $this->Flash->error(__('The hall could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function buy($id=null)
    {
        $this->loadModel('Seats');

        $ticket=$this->loadModel('Tickets');
        
        // $seat=$this->get($id);
        // $ticket=$this->get($id);
        $totalprice=0;
        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            //ambik data form daripada hall view
            $data=$this->request->getData();

            //pecahkan data daripada hall view
            $hallBuy=$data["hallid"];
            $seatBuy= $data["Seat"];
            $quantityBuy=$data["Quantity"];
             $a=explode(",",$seatBuy);
           //cari array hall based on data yang diisi di hall view
           $hall = $this->Halls->get($data["hallid"], [
            'contain' => ['Seats', 'Showtimes']
        ]);
          
          $count=0;
          $count2=0;
          for($i=0;$i<count($a);$i++)
        {
          foreach($hall->seats as $seat):
            if($seat->id==$a[$i])
            {

                $seat->reserve="yes";
                $this->Seats->save($seat);
                $count++;
                $count2++;
            }
    endforeach;
        }

          $this->loadModel("Showtimes");
          $showtime=$this->Showtimes->get($hall->id,[
            'contain'=>['Tickets']
        ]);
          
          foreach($showtime->tickets as $ticket):
            $price=15*$count;
            $totalprice=$totalprice+$price;
            
            $ticket->quantity-$count;
            $this->Tickets->save($ticket);
            $count=0;
          endforeach;
          
          $this->loadModel("Cinemas");
          $cinema=$this->Cinemas->get($showtime->id);
        
          $this->loadModel("Movies");
          $movie=$this->Movies->get($showtime->movie_id);



          $this->set('totalprice', $totalprice);
          $this->set('price', $price);
          $this->set('count',$count);
          $this->set('seat',$seatBuy);
          $this->set('showtime',$showtime);
          $this->set('cinema',$cinema);
          $this->set('movie',$movie);
          $this->set('count2',$count2);
      }
    }
}
