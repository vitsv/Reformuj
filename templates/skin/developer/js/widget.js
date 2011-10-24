function ins_html(sHtml){document.write(sHtml);}
var refWidgetCl = new Class({
	 Implements: Options,
        options: {           
        },
        initialize: function(options){         
                this.setOptions(options);                      
        },
    inject_box: function() {
	this.inject_style();
		//wstawiam przycisk
		 ins_html('<span><a id=\"ui-ref-but\" onclick=\"myRefWidget.showBox(); return false;\" href=\"#\"><img src=\"http://localhost/ls/widzet/feedback.png\" /></a></span>');
		//wstawiam formularz
		ins_html('<div style=\"width: 600px; height: auto;display: none;\" id=\"ui-ref-face\"><a id=\"ui-ref-but-close\" onclick=\"myRefWidget.closeBox(); return false;\" href=\"#\"><span style=\"display: none;\">Close</span></a><div id=\"ui-ref-head\"><div id=\"ref-container\"><div id=\"ref-head\"><h1>Zostaw swoja sugestie:</h1><div id="feedback-con"></div></div></div></div></div><div style=\"display: none;\" onclick=\"myRefWidget.closeBox(); return false;\" id=\"ui-ref-dark\"></div>');
		 
		
        },
	inject_style: function(){
	ins_html('<style type=\"text/css\">    a#ui-ref-but {        position: fixed !important;        top: 159px !important;        right: 0;        background-color: #5A7BC1;         z-index: 100001 !important;                border-top: solid 2px white;        border-right: medium 0px -moz-use-text-color;        border-bottom: solid 2px white;        border-left: solid 2px white;                border-radius: 10px;        border-top-right-radius: 0;        border-bottom-right-radius: 0;                -moz-border-radius: 10px;        -moz-border-radius-topright: 0;        -moz-border-radius-bottomright: 0;                -webkit-border-radius: 10px;        -webkit-border-top-right-radius: 0;        -webkit-border-bottom-right-radius: 0;                background-image: none !important;    }        a#ui-ref-but img {        padding: 6px 2px 6px 0px;        border: 0px !important;    }        a#ui-ref-but:hover {        background-color: #f45c5c;        padding-right:2px;        cursor: pointer;    }        * html a#ui-ref-but {        position: absolute !important;        background-image: none !important;    } ');
	ins_html('#ref-container{background:rgba(82,82,82,0.7);height:340px;padding:10px;border-radius:8px;-moz-border-radius:8px;-webkit-border-radius:8px;-webkit-background-clip: padding-box; _zoom:1}#ref-head {background-color: #ffffff;border: solid 2px #aaa;height:336px;font-size: 12px;font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif;padding: 0px;margin: 0px;}#ref-head h1 {padding-top: 10px;padding-bottom: 10px;padding-left: 20px;font-size: 15px;font-weight: bold;color: white;margin: 0px;}#ref-head h1, #ref-head #p_bottom {background:-moz-linear-gradient(left center , #B8C6DF 0%, #6D88B7 100%) repeat scroll 0 0 transparent;}#ui-ref-dark {background-color:#000000;height:100%;left:0;opacity:0.5;position:absolute;top:0;width:100%;z-index:100002;}#ui-ref-face, #ui-ref-dark {position:fixed;}#ui-ref-face {background-color:transparent;display:block;margin:-2em auto 0;position:fixed;text-align:left;z-index:100003;}#ui-ref-but-close {background-color:transparent;background-position:0 0;background-repeat:no-repeat;color:#0066CC;cursor:pointer;height:32px;position:absolute;right:15px;top:12px;width:32px;}a#ui-ref-but-close {background-image:url(\"http://localhost/ls/templates/skin/developer/images/close_box.png\");} #feedback-con {height: 250px;width:auto;background:#ffffff;}</style>');
	},
	get_sc_width: function() {
        var myWidth = 0;
        if( typeof( window.innerWidth ) == 'number' )             myWidth = window.innerWidth;
        else if( document.documentElement && document.documentElement.clientWidth )             myWidth = document.documentElement.clientWidth;
        else if( document.body && document.body.clientWidth)             myWidth = document.body.clientWidth;
        return myWidth;
    },
	
    get_sc_height: function() {
        var myHeight = 0;
        if( typeof( window.innerHeight ) == 'number' )             myHeight = window.innerHeight;
        else if( document.documentElement && document.documentElement.clientHeight )             myHeight = document.documentElement.clientHeight;
        else if( document.body && document.body.clientHeight)             myHeight = document.body.clientHeight;
        return myHeight;
    },
    showBox: function(){
	if (document.getElementById("feedback-con").innerHTML == "") {
		    document.getElementById("feedback-con").innerHTML = "<iframe src=\"http://localhost/ls/widget/"+_ref_param['project_id']+"\" width=\"590\" height=\"275\" align=\"left\" style=\"border: 0; position:relative;\" frameborder=\"0\" scrolling=\"no\">Frame error</iframe>";
		}
	 var l = this.get_sc_width()/2 - 350;
     var t = this.get_sc_height()/2 - 100;
        document.getElementById('ui-ref-face').style.top  = t+'px';
        document.getElementById('ui-ref-face').style.left = l+'px'; 
		
       document.getElementById('ui-ref-face').style.display='block';
		 document.getElementById('ui-ref-dark').style.display='block';
	},
	closeBox: function(){
		document.getElementById('ui-ref-face').style.display='none';
		document.getElementById('ui-ref-dark').style.display='none';
	}
});
      var myRefWidget =new refWidgetCl();
	  myRefWidget.inject_box();
	  