<?php 
/******************************************************
 *  Leo Prestashop Theme Framework for Prestashop 1.5.x
 *
 * @package   leotempcp
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 * ******************************************************/

class LeoWidgetSlideshow extends LeoWidgetBase {

		public $widget_name = 'slideshow';
		public $for_module = 'manage';
		public function getWidgetInfo(){
			return  array('label' => $this->l('Slideshow'), 'explain' => $this->l('Create Slideshow')) ;
		}

		public function renderForm( $args, $data ){	
			global $currentIndex;
			$this->checkFolderImage();
			$helper = $this->getFormHelper();
			$items = '';
			$slide_edit = '';
			if($data['params'] && isset($data['params']['leoslide']) && $data['params']['leoslide']){
				$slides  = $data['params']['leoslide'];
				$items = $this->getSlide($slides);
				if(Tools::getValue('id_slide')){
					$id_slide = Tools::getValue('id_slide');
					$slide_edit    = $items[$id_slide] ? $items[$id_slide] : '';
				}

			}
			$this->fields_form[1]['form'] = array(
	            'legend' => array(
	                'title' => $this->l('Carousel Form.'),
	            ),
	            'input' => array(
	                array(
	                    'type'  => 'text',
	                    'label' => $this->l('Image Size Width'),
	                    'name'  => 'img_width',
	                    'default'=> 1170,
	                ),
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Image size Height'),
	                    'name'  => 'img_height',
	                    'default'=> 400,
	                ),
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Thumb Size Width'),
	                    'name'  => 'thumb_width',
	                    'default'=> 100,
	                ),
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Thumb size Height'),
	                    'name'  => 'thumb_height',
	                    'default'=> 100,
	                ),
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Interval'),
	                    'name'  => 'interval',
	                    'default'=> 400,
	                ),
					array(
						'type' 		=> 'slide',
						'name' 		=> 'slide',
						'lang'		=> true,
						'tree' 		=> '',
						'default'	=> '',
					)
	            ),
	      		 'buttons' => array(
                            array(
                                'title' => $this->l('Save And Stay'),
                                'icon' => 'process-icon-save',
                                'class' => 'pull-right',
                                'type' => 'submit',
                                'name' => 'saveandstayleotempcp'
                            ),
                            array(
                                'title' => $this->l('Save'),
                                'icon' => 'process-icon-save',
                                'class' => 'pull-right',
                                'type' => 'submit',
                                'name' => 'saveleotempcp'
                            ),
                        )
	        );
			$images = array();
			$thums = array();
			$images = LeoWidgetBase::getImageList( _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/image');
			$thums = LeoWidgetBase::getImageList( _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/thum');
			$iso = Context::getContext()->language->iso_code;					
			$helper->tpl_vars = array(
	                'fields_value' => $this->getConfigFieldsValues( $data  ),
	                'languages' => Context::getContext()->controller->getLanguages(),
	                'id_lang_default' => Configuration::get('PS_LANG_DEFAULT'),
					'iso_code' => Context::getContext()->language->iso_code,
					'iso'		=> file_exists(_PS_CORE_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en',
					'path_css' 	=> _THEME_CSS_DIR_,
					'ad' 		=> __PS_BASE_URI__.basename(_PS_ADMIN_DIR_),
					'images'	=> $images,
					'thums'		=> $thums,
					'items'		=> $items,
					'slide_edit'	=> $slide_edit,
					'url'		=> AdminController::$currentIndex.'&id_leowidgets='.Tools::getValue('id_leowidgets').'&updateleowidgets&token='.Tools::getValue('token').'&conf=4',
					'pathimg'	=> 	__PS_BASE_URI__.'themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/image/',
					'paththum'	=> 	__PS_BASE_URI__.'themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/thum/',
        	); 
			return  $helper->generateForm( $this->fields_form );

		}

		public function renderContent( $args, $setting ){
			$t  = array(
				'img_width'=> 1170,
				'img_height'=> 400,
				'thumb_width'=> 100,
				'thumb_height'=> 100,
				'interval'=> 400,
			);
			$items = array();
			$setting = array_merge( $t, $setting );
			if($setting['leoslide']){
				$items = $setting['leoslide'];
				$slides = $this->getSlide($items);
				
			}
			$setting['iso_code'] 		= Context::getContext()->language->iso_code;
			$setting['pathimg'] 		= __PS_BASE_URI__.'themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/image/';
			$setting['paththum'] 		= __PS_BASE_URI__.'themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/thum/';
			$setting['iso_code'] 		= Context::getContext()->language->iso_code;
			$setting['slides'] 			= $slides;
			$output = array('type'=>'slideshow','data' => $setting);

			return $output;	
		}
		
		public function getSlide($slides){
			$datas = array();
			foreach($slides as $slide){
				if($slide){
					$data = Tools::jsonDecode($slide, true);
					$data['slide'] = $slide;
				}
			$datas[$data['id_slide']] = $data;	
			}
			return $datas;			
		}
		
		public function checkFolderImage()
		{
			$pathimg 		= __PS_BASE_URI__.'themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/image/';
			$paththum 		= __PS_BASE_URI__.'themes/'._THEME_NAME_.'/img/modules/'.$this->name.'/thum/';
			if(file_exists($pathimg) && is_dir($pathimg) && file_exists($paththum) && is_dir($paththum))
				return ;
				@mkdir(_PS_ALL_THEMES_DIR_.$this->themeName.'/img/modules/', 0777, true);
				@mkdir(_PS_ALL_THEMES_DIR_.$this->themeName.'/img/modules/'.$this->name.'/', 0777, true);
				@mkdir($pathimg, 0777, true);    
				@mkdir($paththum, 0777, true);    
		}
}
?>