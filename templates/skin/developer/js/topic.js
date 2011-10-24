var lsTopicNew;
var lsTopicNewClass = new Class({
                                           
        Implements: Options,

		options: {
			img: {
				path: 		'images/',			
				loadTopics: 'load.gif', 
			},
			classes: {
				visible: 	'lsTopicNew_visible',
				hidden:  	'lsTopicNew_hidden'
			}
		},
		
        initialize: function(options){         
                this.setOptions(options);
				this.docScroller = new Fx.Scroll(document.getDocument());	
        },
       
        searchTopic: function(topicText) {          
                $$('.topic').setStyle('display', 'none');
				$$('.pagination').setStyle('display', 'none');
                this.topicText=topicText;
                                        
                JsHttpRequest.query(
                        'POST '+DIR_WEB_ROOT+'/include/ajax/searchTopics.php',                       
                        { topicText: topicText,  security_ls_key: LIVESTREET_SECURITY_KEY },
                        function(result, errors) {     
                                if (!result) {
                	msgErrorBox.alert('Error','Please try again later');           
        		}
				else
				{
        		if (result.bStateError) {
                	msgErrorBox.alert(result.sMsgTitle,result.sMsg);
        		} else {
							var aTotal = result.aTotal;
							if(aTotal > 0){
								$$('.resultsLabel').setStyle('display', 'block');
								$$('.resultsLabel').set('html','Znaleziono '+aTotal+' podobnych do twojej sugestii, możesz je zobaczyć poniżej.<br /> Możesz zagłosować na nich, albo stworzyć własną, jeżeli uważasz że jest ona unikalna.');
								var aHtml = result.aHtml;
								 $$('.resultsTopic').set('html',aHtml);
								 $$('.resultsTopic').setStyle('display', 'block');
							}
							else
							{
								$$('.resultsTopic').setStyle('display', 'none');
								$$('.resultsLabel').set('html','Nie znaleziono podobnych sugestii!');
							}
						}  
				}
                        },
                        true
                );             
        },
		
	injectTopic: function(idTopic,sHtml) {
		var newTopic = new Element('div',{'id': 'topic_id_'+idTopic,'class':'topic'});
		newTopic.set('html',sHtml);		
			var divChildren = $('topic_new');
			newTopic.inject(divChildren,'before');	
	},	
	
	injectAnswer: function(idTopic,sHtml) {
		var newAnswer = new Element('div',{'class':'answer-block','id':'ans_'+idTopic});
		newAnswer.set('html',sHtml);		
			var divChildren = $('info_'+idTopic);
			newAnswer.inject(divChildren,'before');	
	},	
	
	responseNewTopic: function(selfIdTopic) {
		var thisObj=this;			
		(function(){		
		JsHttpRequest.query(        	
        	'POST '+DIR_WEB_ROOT+'/include/ajax/topicResponse.php',
        	{selfIdTopic: selfIdTopic, security_ls_key: LIVESTREET_SECURITY_KEY },
        	function(result, errors) {        		
            	if (!result) {
                	msgErrorBox.alert('Error','Please try again later');           
        		}      
        		if (result.bStateError) {
                	msgErrorBox.alert(result.sMsgTitle,result.sMsg);
        		} else {   
        			var aTpc=result.html;         			
        			if (aTpc) {
						$$('.topic').setStyle('display', 'block');
						thisObj.enableFormTopic();  
						thisObj.injectTopic(selfIdTopic,aTpc);
						thisObj.scrollToTopic(selfIdTopic);
        			}
        		}                           
	        },
        	true
       );
       }).delay(1000);
	},
	
	responseNewAnswer: function(selfIdTopic) {
		var thisObj=this;			
		(function(){		
		JsHttpRequest.query(        	
        	'POST '+DIR_WEB_ROOT+'/include/ajax/answerResponse.php',
        	{selfIdTopic: selfIdTopic, security_ls_key: LIVESTREET_SECURITY_KEY },
        	function(result, errors) {        		
            	if (!result) {
                	msgErrorBox.alert('Error','Please try again later');           
        		}      
        		if (result.bStateError) {
                	msgErrorBox.alert(result.sMsgTitle,result.sMsg);
        		} else {   
        			var aAns=result.html;         			
        			if (aAns) {
						thisObj.enableFormAnswer(selfIdTopic);
						$('answer_block_'+selfIdTopic).setStyle('display','none');
						if($('ans_'+selfIdTopic)){
							$('ans_'+selfIdTopic).dispose();
						}
						thisObj.injectAnswer(selfIdTopic,aAns);
						$('status_'+selfIdTopic).set('html','<img src=\"'+DIR_STATIC_SKIN+'/images/'+result.aStatus+'.png\" />');
						$('status_'+selfIdTopic).setStyle('display','block');
						thisObj.scrollToTopic(selfIdTopic);
        			}
        		}                           
	        },
        	true
       );
       }).delay(1000);
	},
	
	scrollToTopic: function(idTopic) {
		this.docScroller.setOptions({ 
			duration:500, 
			offset: {
        		'x': 0,
        		'y': 0
   			}
 		}); 		
 		var cmt=$('topic_id_'+idTopic);
 		var deltaY=cmt.getDimensions().height/2-window.getSize().y/2;
 		if (deltaY>0) {
 			deltaY=0;
 		}
		this.docScroller.start(0,cmt.getPosition().y+deltaY);
		$$('.resultsTopic').setStyle('display', 'none');
		$$('.resultsLabel').setStyle('display', 'none');
		$('adv_form').setStyle('display', 'none');
		$('topic_title').setProperty('value', '');
		$('topic_text').setProperty('value', '');
	},
	
	addTopic: function(formObj) {
		var thisObj=this;
		formObj=$(formObj);			
		JsHttpRequest.query(
        	'POST '+aRouter.topic+'ajaxaddtopic/',
        	{ params: formObj, security_ls_key: LIVESTREET_SECURITY_KEY },
        	function(result, errors) {
            	if (!result) {
					thisObj.enableFormTopic();  
                	msgErrorBox.alert('Error','Please try again later');  
                	return;         
        		}      
        		if (result.bStateError) {  
					thisObj.enableFormTopic();  
                	msgErrorBox.alert(result.sMsgTitle,result.sMsg);
        		} else {
        			thisObj.responseNewTopic(result.sTopicId);        			   								
        		}                           
	        },
        	true
      	);
      	$('topic_text').addClass('loader');		
      	$('topic_text').setProperty('readonly',true);		
	},
	enableFormTopic: function() {
		$('topic_text').removeClass('loader');
		$('topic_text').setProperty('readonly',false);
	},
	
	enableFormAnswer: function(idTopic) {
		$('answer_text_'+idTopic).removeClass('loader');
		$('answer_text_'+idTopic).setProperty('readonly',false);
	},
	
	addAnswer: function(formObj,idTopic) {
		var thisObj=this;
		formObj=$(formObj);			
		JsHttpRequest.query(
        	'POST '+aRouter.topic+'ajaxaddanswer/',
        	{ params: formObj, security_ls_key: LIVESTREET_SECURITY_KEY },
        	function(result, errors) {
				if(!result){
					thisObj.responseNewAnswer(idTopic);  
				}else{
        		if (result.bStateError) {  
					thisObj.enableFormAnswer(idTopic);    
                	msgErrorBox.alert(result.sMsgTitle,result.sMsg);
        		}}                           
	        },
        	true
      	);
      	$('answer_text_'+idTopic).addClass('loader');		
      	$('answer_text_'+idTopic).setProperty('readonly',true);		
	},
});

window.addEvent('domready', function() {       
      lsTopicNew=new lsTopicNewClass();
});