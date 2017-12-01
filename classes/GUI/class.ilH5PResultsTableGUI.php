<?php

require_once "Services/Table/classes/class.ilTable2GUI.php";
require_once "Customizing/global/plugins/Services/Repository/RepositoryObject/H5P/classes/class.ilH5PPlugin.php";
require_once "Services/UIComponent/AdvancedSelectionList/classes/class.ilAdvancedSelectionListGUI.php";

/**
 *
 */
class ilH5PResultsTableGUI extends ilTable2GUI {

	/**
	 * @var ilH5PContent[]
	 */
	protected $contents;
	/**
	 * @var ilCtrl
	 */
	protected $ctrl;
	/**
	 * @var int
	 */
	protected $obj_id;
	/**
	 * @var ilH5PPlugin
	 */
	protected $pl;
	/**
	 * @var array
	 */
	protected $results;


	/**
	 * @param ilObjH5PGUI $a_parent_obj
	 * @param string      $a_parent_cmd
	 */
	public function __construct(ilObjH5PGUI $a_parent_obj, $a_parent_cmd) {
		parent::__construct($a_parent_obj, $a_parent_cmd);

		global $DIC;

		$this->ctrl = $DIC->ctrl();
		$this->obj_id = $this->getParentObject()->object->getId();
		$this->pl = ilH5PPlugin::getInstance();

		$this->getResults();

		$this->setTitle($this->txt("xhfp_results"));

		$this->setColumns();

		$this->setFormAction($this->ctrl->getFormAction($a_parent_obj));

		$this->setRowTemplate("results_list_row.html", $this->pl->getDirectory());

		$this->setData($this->results);
	}


	/**
	 *
	 */
	protected function getResults() {
		$this->contents = $h5p_contents = ilH5PContent::getContentsByObjectId($this->obj_id);

		$this->results = [];

		$h5p_results = ilH5PResult::getResultsByObjectId($this->obj_id);

		foreach ($h5p_results as $h5p_result) {
			$user_id = $h5p_result->getUserId();

			if (!isset($this->results[$user_id])) {
				$this->results[$user_id] = [
					"user_id" => $user_id
				];
			}

			$this->results[$user_id]["content_" . $h5p_result->getContentId()] = ($h5p_result->getScore() . "/" . $h5p_result->getMaxScore());
		}
	}


	/**
	 *
	 */
	protected function setColumns() {
		$this->addColumn($this->lng->txt("user"));

		foreach ($this->contents as $h5p_content) {
			$this->addColumn($h5p_content->getTitle());
		}

		$this->addColumn($this->lng->txt("actions"));
	}


	/**
	 * @param array $result
	 */
	protected function fillRow($result) {
		$parent = $this->getParentObject();

		$user = new ilObjUser($result["user_id"]);

		$this->tpl->setVariable("USER", $user->getFullname());

		$this->tpl->setCurrentBlock("contentBlock");
		foreach ($this->contents as $h5p_content) {
			$content_id = "content_" . $h5p_content->getContentId();

			if (isset($result[$content_id])) {
				$this->tpl->setVariable("POINTS", $result[$content_id]);
			} else {
				$this->tpl->setVariable("POINTS", $this->txt("xhfp_no_result"));
			}
			$this->tpl->parseCurrentBlock();
		}

		$actions = new ilAdvancedSelectionListGUI();
		$actions->setListTitle($this->lng->txt("actions"));

		$actions->addItem($this->lng->txt("delete"), "", $this->ctrl->getLinkTarget($parent, ilObjH5PGUI::CMD_DELETE_RESULTS_CONFIRM));

		$this->tpl->setVariable("ACTIONS", $actions->getHTML());
	}


	/**
	 * @param string $a_var
	 *
	 * @return string
	 */
	protected function txt($a_var) {
		return $this->pl->txt($a_var);
	}
}
