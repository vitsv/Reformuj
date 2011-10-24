<?php
/**
 * Класс обработки URL'ов вида /widget/
 *
 */
class ActionWidget extends Action {
	
	/**
	 * Инизиализация экшена
	 *
	 */
	public function Init() {
		/**
		 * Достаём текущего пользователя
		 */
		$this->oUserCurrent=$this->User_GetUserCurrent();	
	}
	
	/**
	 * Регистрируем евенты, по сути определяем УРЛы вида /blog/.../
	 *
	 */
	protected function RegisterEvent() {							
		$this->AddEventPreg('/^[\w\-\_]+$/i','/^(page(\d+))?$/i','EventShowTopics');	
	}
		
	
	/**********************************************************************************
	 ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
	 **********************************************************************************
	
	/**
	 * Показ всех топиков
	 *
	 */
	protected function EventShowTopics() {
		$sBlogUrl=$this->sCurrentEvent;				
		/**
		 * Проверяем есть ли блог с таким УРЛ
		 */		
		if (!($oBlog=$this->Blog_GetBlogByUrl($sBlogUrl))) {
			return parent::EventNotFound();
		}
		/**
		 * Определяем права на отображение закрытого блога
		 */	
		if($oBlog->getType()=='close' 
			and (!$this->oUserCurrent 
				or !in_array(
						$oBlog->getId(),
						$this->Blog_GetAccessibleBlogsByUser($this->oUserCurrent)
					)
				)
			) {
			$bCloseBlog=true;
		} else {
			$bCloseBlog=false;
		}	
		if (!$bCloseBlog) {
		$aFilter=array(
			'topic_publish' => 1,
			'blog_id' => $oBlog->getId(),	
			'order' => 'topic_rating DESC',
		);
		$aResult=$this->Topic_GetTopicsByFilter($aFilter,1,5);
		$aTopics=$aResult['collection'];
		//usort($aTopics, array("ModuleTopic", "cmp"));
		/**
		 * Загружаем переменные в шаблон
		 */
		$this->Viewer_Assign('aTopics',$aTopics);
		}
		$aFilter=array(			
			'topic_publish' => 1,
			'blog_id' => $oBlog->getId(),			
		);	
		$iCountTopics = $this->Topic_GetCountTopicsByFilter($aFilter);
		$this->Viewer_Assign('iCountTopics',$iCountTopics);
		$this->Viewer_Assign('oBlogId',$oBlog->getId());
		$this->Viewer_Assign('oBlogFullURL',$oBlog->getUrlFull());
		/**
		 * Устанавливаем шаблон вывода
		 */
		$this->SetTemplateAction('widget');
	}	
	

	
	/**
	 * Выполняется при завершении работы экшена
	 *
	 */
	public function EventShutdown() {		

	}
}
?>