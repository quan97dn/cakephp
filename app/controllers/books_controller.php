<?php 
	class BooksController extends AppController {

		public $name = "Books";

		function index() {
			$this->set("data", $this->Book->find("all"));
			$this->set("count", $this->Book->getNumRows());
			$this->set("title_for_layout", "Show List Books");
			$this->set("menu", array(0, 0));
		}
		
		function view($id = NULL) {
			$this->set("data", $this->Book->read(NULL, $id));
			$this->set("title_for_layout", "View");
		}

		function add() {
			if(!empty($this->data)) {
				if($this->Book->save($this->data)) {
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
				$this->data = $this->Book->read(NULL, $id);
			}
			else {
				if($this->Book->save($this->data)) {
					$this->Session->setFlash('Update Complete !');
					$this->redirect(array("action" => "index"));
				}
			}
			$this->set("title_for_layout", "Edit");
		}

		function delete($id = NULL) {
			$this->Book->delete($id);
			$this->Session->setFlash('Delete Complete !');
			$this->redirect(array("action" => "index"));
			$this->set("title_for_layout", "Delete");
		}

	}
 ?>