<?php



//Aca se crea el bloque
class block_profe extends block_list {
	public function init() {
		$this->title = get_string('Proyectos Alumnos', 'block_profe');
	}
	//con esto nuestro bloque desplegara algo
	public function get_content() {
		if ($this->content !== null) {
    return $this->content;
  }
 //agrega un link a una p�gina de moodle dentro del bloque
  $this->content         = new stdClass;
  $this->content->items  = array();
  $this->content->icons  = array();
  $this->content->footer = '';
 //Los links se a�aden a las pesta�as del bloque de la vista profesor
 
  //pesta�a crear proyecto
  $this->content->items[] = html_writer::tag('a', 'Crear Proyectos', array('href' => 'http://localhost/moodle/local/profesorCrearProyectos/index.php'));
  $this->content->icons[] = html_writer::empty_tag('img', array('src' => '', 'class' => 'icon'));
  //pesta�a ver proyecto
  $this->content->items[] = html_writer::tag('a', 'Ver proyectos', array('href' => 'http://localhost/moodle/local/profesorVerProyectos/index.php'));
  $this->content->icons[] = html_writer::empty_tag('img', array('src' => '', 'class' => 'icon'));
  //pesta�a asignar proyectos
  $this->content->items[] = html_writer::tag('a', 'Asignar proyectos', array('href' => 'http://localhost/moodle/local/profesorAsignarProyectos/index.php'));
  $this->content->icons[] = html_writer::empty_tag('img', array('src' => '', 'class' => 'icon'));
  //pesta�a reunion
  $this->content->items[] = html_writer::tag('a', 'Reunion', array('href' => 'http://localhost/moodle/local/profesorReunion/index.php'));
  $this->content->icons[] = html_writer::empty_tag('img', array('src' => '', 'class' => 'icon'));
  
 
  return $this->content;
	}
	
	public function specialization() {
		if (isset($this->config)) {
			if (empty($this->config->title)) {
				$this->title = get_string('defaulttitle', 'block_profe');
			} else {
				$this->title = $this->config->title;
			}
	
			if (empty($this->config->text)) {
				$this->config->text = get_string('defaulttext', 'block_profe');
			}
		}
	}
	//permite la creacion de multiples bloques en un mismo curso
	public function instance_allow_multiple() {
		return true;
	}
}



