<?php
/**
 * Модуль управления рейтингами и силой 
 *
 */
class ModuleRating extends Module {

	/**
	 * Инициализация модуля
	 *
	 */
	public function Init() {		
		
	}
	/**
	 * Расчет рейтинга при голосовании за комментарий
	 *
	 * @param ModuleUser_EntityUser $oUser
	 * @param CommentEntity_TopicComment $oComment
	 */
	public function VoteComment(ModuleUser_EntityUser $oUser, ModuleComment_EntityComment $oComment, $iValue) {
		/**
		 * Устанавливаем рейтинг комментария
		 */
		$oComment->setRating($oComment->getRating()+$iValue);
		/**
		 * Начисляем силу автору коммента, используя логарифмическое распределение
		 */		
		$skill=$oUser->getSkill();
		$iMinSize=0.004;
		$iMaxSize=0.5;
		$iSizeRange=$iMaxSize-$iMinSize;
		$iMinCount=log(0+1);
		$iMaxCount=log(500+1);
		$iCountRange=$iMaxCount-$iMinCount;
		if ($iCountRange==0) {
			$iCountRange=1;
		}		
		if ($skill>50 and $skill<200) {
			$skill_new=$skill/70;
		} elseif ($skill>=200) {
			$skill_new=$skill/10;
		} else {
			$skill_new=$skill/130;
		}
		$iDelta=$iMinSize+(log($skill_new+1)-$iMinCount)*($iSizeRange/$iCountRange);
		/**
		 * Сохраняем силу
		 */
		$oUserComment=$this->User_GetUserById($oComment->getUserId());
		$iSkillNew=$oUserComment->getSkill()+$iValue*$iDelta;
		$iSkillNew=($iSkillNew<0) ? 0 : $iSkillNew;
		$oUserComment->setSkill($iSkillNew);
		$this->User_Update($oUserComment);
		return $iValue;
	}
	/**
	 * Расчет рейтинга и силы при гоосовании за топик
	 *
	 * @param ModuleUser_EntityUser $oUser
	 * @param ModuleTopic_EntityTopic $oTopic
	 * @param unknown_type $iValue
	 */
	public function VoteTopic(ModuleUser_EntityUser $oUser, ModuleTopic_EntityTopic $oTopic, $iValue) {
		$skill=$oUser->getSkill();
		/**
		 * Устанавливаем рейтинг топика
		 */
		$iDeltaRating=$iValue;
		if ($skill>=100 and $skill<250) {
			$iDeltaRating=$iValue*2;
		} elseif ($skill>=250 and $skill<400) {
			$iDeltaRating=$iValue*3;
		} elseif ($skill>=400) {
			$iDeltaRating=$iValue*4;
		}
		$oTopic->setRating($oTopic->getRating()+$iDeltaRating);
		/**
		 * Начисляем силу и рейтинг автору топика, используя логарифмическое распределение
		 */			
		$iMinSize=0.1;
		$iMaxSize=8;
		$iSizeRange=$iMaxSize-$iMinSize;
		$iMinCount=log(0+1);
		$iMaxCount=log(500+1);
		$iCountRange=$iMaxCount-$iMinCount;
		if ($iCountRange==0) {
			$iCountRange=1;
		}		
		if ($skill>50 and $skill<200) {
			$skill_new=$skill/70;
		} elseif ($skill>=200) {
			$skill_new=$skill/10;
		} else {
			$skill_new=$skill/100;
		}
		$iDelta=$iMinSize+(log($skill_new+1)-$iMinCount)*($iSizeRange/$iCountRange);
		/**
		 * Сохраняем силу и рейтинг
		 */
		$oUserTopic=$this->User_GetUserById($oTopic->getUserId());
		$iSkillNew=$oUserTopic->getSkill()+$iValue*$iDelta;
		$iSkillNew=($iSkillNew<0) ? 0 : $iSkillNew;
		$oUserTopic->setSkill($iSkillNew);
		$oUserTopic->setRating($oUserTopic->getRating()+$iValue*$iDelta/2.73);
		$this->User_Update($oUserTopic);
		return $iDeltaRating;
	}
	/**
	 * Расчет рейтинга и силы при голосовании за блог
	 *
	 * @param ModuleUser_EntityUser $oUser
	 * @param ModuleBlog_EntityBlog $oBlog
	 * @param unknown_type $iValue
	 */
	public function VoteBlog(ModuleUser_EntityUser $oUser, ModuleBlog_EntityBlog $oBlog, $iValue) {		
		/**
		 * Устанавливаем рейтинг блога, используя логарифмическое распределение
		 */		
		$skill=$oUser->getSkill();	
		$iMinSize=1.13;
		$iMaxSize=15;
		$iSizeRange=$iMaxSize-$iMinSize;
		$iMinCount=log(0+1);
		$iMaxCount=log(500+1);
		$iCountRange=$iMaxCount-$iMinCount;
		if ($iCountRange==0) {
			$iCountRange=1;
		}		
		if ($skill>50 and $skill<200) {
			$skill_new=$skill/20;
		} elseif ($skill>=200) {
			$skill_new=$skill/10;
		} else {
			$skill_new=$skill/50;
		}
		$iDelta=$iMinSize+(log($skill_new+1)-$iMinCount)*($iSizeRange/$iCountRange);
		/**
		 * Сохраняем рейтинг
		 */
		$oBlog->setRating($oBlog->getRating()+$iValue*$iDelta);
		return $iValue*$iDelta;
	}
	/**
	 * Расчет рейтинга и силы при голосовании за пользователя
	 *
	 * @param ModuleUser_EntityUser $oUser
	 * @param ModuleUser_EntityUser $oUserTarget
	 * @param unknown_type $iValue
	 */
	public function VoteUser(ModuleUser_EntityUser $oUser, ModuleUser_EntityUser $oUserTarget, $iValue) {		
		/**
		 * Начисляем силу и рейтинг юзеру, используя логарифмическое распределение
		 */			
		$skill=$oUser->getSkill();
		$iMinSize=0.42;
		$iMaxSize=3.2;
		$iSizeRange=$iMaxSize-$iMinSize;
		$iMinCount=log(0+1);
		$iMaxCount=log(500+1);
		$iCountRange=$iMaxCount-$iMinCount;
		if ($iCountRange==0) {
			$iCountRange=1;
		}		
		if ($skill>50 and $skill<200) {
			$skill_new=$skill/40;
		} elseif ($skill>=200) {
			$skill_new=$skill/2;
		} else {
			$skill_new=$skill/70;
		}
		$iDelta=$iMinSize+(log($skill_new+1)-$iMinCount)*($iSizeRange/$iCountRange);
		/**
		 * Сохраняем силу и рейтинг
		 */		
		$iRatingNew=$oUserTarget->getRating()+$iValue*$iDelta;		
		//$iSkillNew=$oUserTarget->getSkill()+$iValue*$iDelta/3.67;
		//$iSkillNew=($iSkillNew<0) ? 0 : $iSkillNew;		
		//$oUserTarget->setSkill($iSkillNew);
		$oUserTarget->setRating($iRatingNew);
		///$this->User_Update($oUserTarget);
		return $iValue*$iDelta;
	}
}
?>