var lsTopicNew;
var lsTopicNewClass = new Class({   
        searchTopic: function(topicText) {          
                $$('.ref-feedback').setStyle('display', 'none');
                this.topicText=topicText;
                                        
                JsHttpRequest.query(
                        'POST '+DIR_WEB_ROOT+'/include/ajax/searchTopics_w.php',                       
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
								$$('.resultsLabel').set('html','Nie znaleziono podobnych sugestii! Możesz dodać swoją, jest ona unikalna!');
							}
						}  
				}
                        },
                        true
                );             
        },
		addTopic: function(formObj) {
		var thisObj=this;
		formObj=$(formObj);			
		JsHttpRequest.query(
        	'POST '+DIR_WEB_ROOT+'/topic/ajaxaddtopic/',
        	{ params: formObj, security_ls_key: LIVESTREET_SECURITY_KEY },
        	function(result, errors) {
            	if (!result) {
                	return;         
        		}      
        		if (result.bStateError) {  
					thisObj.enableFormTopic();  
        		} else {
        			  $('finput').setStyle('display', 'none');    	
					  $('succes').set('html','Dziękujemy za zgłoszenie sugestii, przygotujemy odpowiedź jak najszybciej.<br />Szczegóły sugestii oraz komentarzy innych użytkowników dla twojej sugestii zobaczysz <a href=\"'+project_url+result.sTopicId+'.html\" target=\"_blank\">tutaj</a>.<br />Zobaczyć wszyskite sugestie o naszym projekcie można <a href=\"'+project_url+'\" target=\"_blank\">tutaj</a>');
					  $('succes').setStyle('display', 'block');
        		}                           
	        },
        	true
      	);	
	},
});

window.addEvent('domready', function() {       
      lsTopicNew=new lsTopicNewClass();
});