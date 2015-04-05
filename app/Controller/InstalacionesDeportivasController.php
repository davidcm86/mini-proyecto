<?php
App::uses('AppController', 'Controller');
/**
 * InstalacionesDeportivas Controller
 *
 * @property InstalacionesDeportiva $InstalacionesDeportiva
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InstalacionesDeportivasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InstalacionesDeportiva->recursive = 0;
		$this->set('instalacionesDeportivas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InstalacionesDeportiva->exists($id)) {
			throw new NotFoundException(__('Invalid instalaciones deportiva'));
		}
		$options = array('conditions' => array('InstalacionesDeportiva.' . $this->InstalacionesDeportiva->primaryKey => $id));
		$this->set('instalacionesDeportiva', $this->InstalacionesDeportiva->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InstalacionesDeportiva->create();
			if ($this->InstalacionesDeportiva->save($this->request->data)) {
				$this->Session->setFlash(__('The instalaciones deportiva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instalaciones deportiva could not be saved. Please, try again.'));
			}
		}
		$ciudads = $this->InstalacionesDeportiva->Ciudad->find('list');
		$deportes = $this->InstalacionesDeportiva->Deporte->find('list');
		$tipoInstalacions = $this->InstalacionesDeportiva->TipoInstalacion->find('list');
		$this->set(compact('ciudads', 'deportes', 'tipoInstalacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InstalacionesDeportiva->exists($id)) {
			throw new NotFoundException(__('Invalid instalaciones deportiva'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InstalacionesDeportiva->save($this->request->data)) {
				$this->Session->setFlash(__('The instalaciones deportiva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instalaciones deportiva could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InstalacionesDeportiva.' . $this->InstalacionesDeportiva->primaryKey => $id));
			$this->request->data = $this->InstalacionesDeportiva->find('first', $options);
		}
		$ciudads = $this->InstalacionesDeportiva->Ciudad->find('list');
		$deportes = $this->InstalacionesDeportiva->Deporte->find('list');
		$tipoInstalacions = $this->InstalacionesDeportiva->TipoInstalacion->find('list');
		$this->set(compact('ciudads', 'deportes', 'tipoInstalacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InstalacionesDeportiva->id = $id;
		if (!$this->InstalacionesDeportiva->exists()) {
			throw new NotFoundException(__('Invalid instalaciones deportiva'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InstalacionesDeportiva->delete()) {
			$this->Session->setFlash(__('The instalaciones deportiva has been deleted.'));
		} else {
			$this->Session->setFlash(__('The instalaciones deportiva could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
