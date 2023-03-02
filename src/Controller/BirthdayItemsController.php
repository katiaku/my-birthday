<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BirthdayItems Controller
 *
 * @property \App\Model\Table\BirthdayItemsTable $BirthdayItems
 * @method \App\Model\Entity\BirthdayItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BirthdayItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Birthdays'],
        ];
        $birthdayItems = $this->paginate($this->BirthdayItems);

        $this->set(compact('birthdayItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Birthday Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $birthdayItem = $this->BirthdayItems->get($id, [
            'contain' => ['Birthdays'],
        ]);

        $this->set(compact('birthdayItem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('BirthdayItems');
        $birthdayItem = $this->BirthdayItems->newEmptyEntity();
        if ($this->request->is('post')) {
            $birthdayItem = $this->BirthdayItems->patchEntity($birthdayItem, $this->request->getData());
            if ($this->BirthdayItems->save($birthdayItem)) {
                $this->Flash->success(__('The birthday item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The birthday item could not be saved. Please, try again.'));
        }
        $birthdays = $this->BirthdayItems->Birthdays->find('list', ['limit' => 200])->all();
        $this->set(compact('birthdayItem', 'birthdays'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Birthday Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $birthdayItem = $this->BirthdayItems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $birthdayItem = $this->BirthdayItems->patchEntity($birthdayItem, $this->request->getData());
            if ($this->BirthdayItems->save($birthdayItem)) {
                $this->Flash->success(__('The birthday item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The birthday item could not be saved. Please, try again.'));
        }
        $birthdays = $this->BirthdayItems->Birthdays->find('list', ['limit' => 200])->all();
        $this->set(compact('birthdayItem', 'birthdays'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Birthday Item id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $birthdayItem = $this->BirthdayItems->get($id);
        if ($this->BirthdayItems->delete($birthdayItem)) {
            $this->Flash->success(__('The birthday item has been deleted.'));
        } else {
            $this->Flash->error(__('The birthday item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
