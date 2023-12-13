<?php 

	class leomanagewidgetswidgetModuleFrontController extends ModuleFrontController
	{
		public function init() {
			parent::init();

			  require_once( $this->module->getLocalPath().'leomanagewidgets/leotempcp.php' );
		}

		public function initContent()
		{
			parent::initContent();
	 		$module = new Leotempcp();
	 		echo $module->renderwidget();
			die;
		}
	}
?>