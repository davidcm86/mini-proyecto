<?php
App::uses('AppController', 'Controller');
class PagesController extends AppController {

	public $scaffold;


 	public $components = array('Paginator', 'RequestHandler');
	public $uses = array('Ciudad', 'Deporte', 'InstalacionesDeportiva');

/**
 * index
 * Permite buscar polideportivos atendiendo a una ciudad y deporte
 * 
 * @access public
 *
 * @return mixed Value.
 */
	public function index () {
		$condicionesInstalacionesDeportiva = array();
		if ($this->request->is('post')) {
			// guardamos las condiciones de búsqueda
			if(!empty($this->request->data['InstalacionesDeportiva']['ciudad'])){
				$this->request->data['InstalacionesDeportiva']['ciudad_id'] = $this->__recuperarIdCiudad($this->request->data['InstalacionesDeportiva']['ciudad']);
				$condicionesInstalacionesDeportiva['InstalacionesDeportiva.ciudad_id'] = $this->request->data['InstalacionesDeportiva']['ciudad_id'];
			}
			if(!empty($this->request->data['InstalacionesDeportiva']['deporte'])){
				$condicionesInstalacionesDeportiva['InstalacionesDeportiva.deporte_id'] = $this->request->data['InstalacionesDeportiva']['deporte'];
			}
			// guardamos el data que nos viene desde la vista
			$this->Session->write('datosInstalacionesDeportiva', $this->request->data['InstalacionesDeportiva']);
		} else {
			// si vamos a paginar...
			$condicionesInstalacionesDeportiva = $this->Session->read('condicionesInstalacionesDeportiva');
			if(!empty($condicionesInstalacionesDeportiva)){
				$this->request->data['InstalacionesDeportiva'] = $this->Session->read('datosInstalacionesDeportiva');
			}
		}
		// guardamos la condiciones de la búsqueda para la paginación
		$this->Session->write('condicionesInstalacionesDeportiva', $condicionesInstalacionesDeportiva);
		if (!empty($this->request->data)) {
			// realizamos la consulta con la paginación
			$this->paginate = array(
				'conditions' => array(
					'ciudad_id' => $this->request->data['InstalacionesDeportiva']['ciudad_id'], 
					'deporte_id' => $this->request->data['InstalacionesDeportiva']['deporte']),
				'limit' => 2,
				'order' => 'InstalacionesDeportiva.nombre DESC'
			);
			$this->set('instalacionesDeportivas',  $this->paginate('InstalacionesDeportiva'));
		}
		// enviamos el combo de deportes
		$deportes = $this->Deporte->find('list', array(
			'field' => array('deporte', 'deporte')
			)
		);
		$this->set('deportes', $deportes);
	}

/**
 * buscar_ciudades
 * Permite buscar ciudades mediante autocomplete
 * 
 * @access public
 *
 * @return mixed Value.
 */
	public function buscar_ciudades() {
		$ciudades = array();
		if (!empty($this->request->query('term'))) {
			$ciudades = $this->Ciudad->find('list', array(
				'recursive' => -1,
				'conditions' => array('ciudad LIKE' => '%' . $this->request->query('term') . '%'),
				'fields' => array('ciudad')
				)
			);
			$this->set(compact('ciudades'));
        	$this->set('_serialize', 'ciudades');
		}
	}

/**
 * __recuperarIdCiudad
 * Busca el id de la ciudad
 * 
 * @param mixed $nombreCiudad Description.
 *
 * @access private
 *
 * @return mixed Value.
 */

	private function __recuperarIdCiudad($nombreCiudad) {
		$nombreCiudad = strtolower($nombreCiudad); 
		$ciudadId = $this->Ciudad->find('first', array(
			'conditions' => array('ciudad LIKE' => '%' . $nombreCiudad . '%'),
			'fields' => array('id')
			)
		);
		return $ciudadId['Ciudad']['id'];
	}
}
