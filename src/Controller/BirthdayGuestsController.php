<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BirthdayGuests Controller
 *
 * @property \App\Model\Table\BirthdayGuestsTable $BirthdayGuests
 * @method \App\Model\Entity\BirthdayGuest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BirthdayGuestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Birthdays', 'Users'],
        ];
        $birthdayGuests = $this->paginate($this->BirthdayGuests);

        $this->set(compact('birthdayGuests'));
    }

    /**
     * View method
     *
     * @param string|null $id Birthday Guest id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $birthdayGuest = $this->BirthdayGuests->get($id, [
            'contain' => ['Birthdays', 'Users'],
        ]);

        $this->set(compact('birthdayGuest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $birthdayGuest = $this->BirthdayGuests->newEmptyEntity();
        if ($this->request->is('post')) {
            $birthdayGuest = $this->BirthdayGuests->patchEntity($birthdayGuest, $this->request->getData());
            if ($this->BirthdayGuests->save($birthdayGuest)) {
                $this->Flash->success(__('The birthday guest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The birthday guest could not be saved. Please, try again.'));
        }
        $birthdays = $this->BirthdayGuests->Birthdays->find('list', ['limit' => 200])->all();
        $users = $this->BirthdayGuests->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('birthdayGuest', 'birthdays', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Birthday Guest id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $birthdayGuest = $this->BirthdayGuests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $birthdayGuest = $this->BirthdayGuests->patchEntity($birthdayGuest, $this->request->getData());
            if ($this->BirthdayGuests->save($birthdayGuest)) {
                $this->Flash->success(__('The birthday guest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The birthday guest could not be saved. Please, try again.'));
        }
        $birthdays = $this->BirthdayGuests->Birthdays->find('list', ['limit' => 200])->all();
        $users = $this->BirthdayGuests->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('birthdayGuest', 'birthdays', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Birthday Guest id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $birthdayGuest = $this->BirthdayGuests->get($id);
        if ($this->BirthdayGuests->delete($birthdayGuest)) {
            $this->Flash->success(__('The birthday guest has been deleted.'));
        } else {
            $this->Flash->error(__('The birthday guest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
