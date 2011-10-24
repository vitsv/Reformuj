<?php


/**
 * Класс обработки УРЛа вида /comments/
 *
 */
class ActionBlogs extends Action {	
	
	/**
	 * Главное меню
	 *
	 * @var unknown_type
	 */
	protected $sMenuHeadItemSelect='blogs';
	
	public function Init() {		
	}
	
	protected function RegisterEvent() {	
		$this->AddEventPreg('/^(page(\d+))?$/i','EventShowBlogs');								
	}
		
	
	/**********************************************************************************
	 ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
	 **********************************************************************************
	 */	
	
	
	protected function EventShowBlogs() {		
		/**
		 * Передан ли номер страницы
		 */			
		$iPage=	preg_match("/^\d+$/i",$this->GetEventMatch(2)) ? $this->GetEventMatch(2) : 1;
		/**
		 * Получаем список блогов
		 */
		$aResult=$this->Blog_GetBlogsRating($iPage,Config::Get('module.blog.per_page'));	
		$aBlogs=$aResult['collection'];				
		/**
		 * Формируем постраничность
		 */		
		$aPaging=$this->Viewer_MakePaging($aResult['count'],$iPage,Config::Get('module.blog.per_page'),4,Router::GetPath('blogs'));	
		/**
		 * Загружаем переменные в шаблон
		 */					
		$this->Viewer_Assign('aPaging',$aPaging);					
		$this->Viewer_Assign("aBlogs",$aBlogs);
		$this->Viewer_AddHtmlTitle($this->Lang_Get('blog_menu_all_list'));
		/**
		 * Устанавливаем шаблон вывода
		 */
		$this->SetTemplateAction('index');				
	}
	
	/**
	 * Выполняется при завершении работы экшена
	 *
	 */
	public function EventShutdown() {		
		/**
		 * Загружаем в шаблон необходимые переменные
		 */
		//$this->Viewer_Assign('sMenuHeadItemSelect',$this->sMenuHeadItemSelect);	
	}
}
?>