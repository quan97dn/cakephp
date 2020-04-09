<?php
	class PloaisController extends AppController {

		public $name = "Ploais";

		function index() {
			$this->set("data", $this->Ploai->find("all"));
			$this->set("count", $this->Ploai->getNumRows());
			$this->set("title_for_layout", "Show List Clfys");
			$this->set("menu", array(0, 1));
		}
		
		function view($id = NULL) {
			$this->set("data", $this->Ploai->read(NULL, $id));
			$this->set("title_for_layout", "View");
		}

		function add() {
			if(!empty($this->data)) {
				if($this->Ploai->save($this->data)) {
					$this->Session->setFlash('Add Complete !');
					$this->redirect(array("action" => "index"));
				}
				else {
					$this->Session->setFlash('Add Failed !');
				}
			}
			$this->set("title_for_layout", "Add");
		}

		function edit($id = NULL) {
			if(empty($this->data)) {
				$this->data = $this->Ploai->read(NULL, $id);
			}
			else {
				if($this->Ploai->save($this->data)) {
					$this->Session->setFlash('Update Complete !');
					$this->redirect(array("action" => "index"));
				}
			}
			$this->set("title_for_layout", "Edit");
		}

		function delete($id = NULL) {
			$this->Ploai->delete($id);
			$this->Session->setFlash('Delete Complete !');
			$this->redirect(array("action" => "index"));
			$this->set("title_for_layout", "Delete");
		}
	}
 ?>