<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\Table;

/**
 * Birthdays Controller
 *
 * @property \App\Model\Table\BirthdaysTable $Birthdays
 * @method \App\Model\Entity\Birthday[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BirthdaysController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $birthdays = $this->paginate($this->Birthdays);

        $this->set(compact('birthdays'));

        $this->viewBuilder()->setOption('serialize', ['birthdays']);

        $this->Birthdays->find('all', ['contain' => ['BirthdayItems', 'BirthdayGuests']]);

        // Obtener todos los Birthdays entre dos fechas concretas
        $this->Birthdays->find('all')
            ->where(['created >=' => '01-01-2023'], ['created <=' => '31-03-2023'])
            ->contain(['BirthdayItems', 'BirthdayGuests']);

        // Obtener todos los Birthdays mayores que una fecha dada o menores que una fecha dada
        $this->Birthdays->find('all')
            ->where('OR' => ['created >=' => '01-01-2023'], ['created <=' => '31-03-2023'])
            ->contain(['BirthdayItems', 'BirthdayGuests']);

        // Obtener todos los Birthdays con un Guest determinado
        $this->Birthdays->findAllByBirthdayGuest('Ann Smith'); // cambiar

        // Obtener todos los Birthdays con un Item determinado
        $this->Birthdays->findAllByBirthdayItem('Lego City'); // cambiar

        // Obtener todos los Birthdays sin Items
        $this->Birthdays->findAllByBirthdayItem(null); // cambiar

        // Obtener todos los BirthdayItems y BirthdayGuests para un Birthday determinado
        $this->Birthdays->findById('2')
            ->contain(['BirthdayItems', 'BirthdayGuests']);

        // Obtener el último Birthday creado por un User determinado
        $this->Birthdays->findAllByUser('John Doe')->find('recent'); // cambiar a ->first() y el orden
    }

    /**
     * View method
     *
     * @param string|null $id Birthday id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $birthday = $this->Birthdays->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('birthday'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $birthday = $this->Birthdays->newEmptyEntity();
        if ($this->request->is('post')) {
            $birthday = $this->Birthdays->patchEntity($birthday, $this->request->getData());
            if ($this->Birthdays->save($birthday)) {
                $this->Flash->success(__('The birthday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The birthday could not be saved. Please, try again.'));
        }
        $users = $this->Birthdays->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('birthday', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Birthday id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $birthday = $this->Birthdays->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $birthday = $this->Birthdays->patchEntity($birthday, $this->request->getData());
            if ($this->Birthdays->save($birthday)) {
                $this->Flash->success(__('The birthday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The birthday could not be saved. Please, try again.'));
        }
        $users = $this->Birthdays->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('birthday', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Birthday id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $birthday = $this->Birthdays->get($id);
        if ($this->Birthdays->delete($birthday)) {
            $this->Flash->success(__('The birthday has been deleted.'));
        } else {
            $this->Flash->error(__('The birthday could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
