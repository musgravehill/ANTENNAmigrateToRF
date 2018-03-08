@charset "UTF-8";
/* CSS Document */

.bbcode_container {
	margin:20px;
	margin-top:5px;
	display:block;
}

.bbcode_container .bbcode_desc {
	margin-bottom:2px;
	font-size:11px;
}
/*text-align should alwais be LTR for the CODE blocks*/
.bbcode_container div.bbcode_code,
.bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:scroll;
	direction:ltr;
	background:#f2f6f8 none repeat-x  ;
	font-size:12px;	
}

.bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;	
}

.bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

.bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #f2f6f8 none   ;
	border-radius: 5px;
	border: 1px solid #417394;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}

.bbcode_container .bbcode_quote_container {
	background: transparent url(images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

.bbcode_quote div.quote_container {
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.bbcode_quote .bbcode_postedby img {
	position: relative;
	top: 1px;
}

.bbcode_container div.bbcode_quote.printable {
	background:none;
	border:none;
}

.bbcode_container div.bbcode_quote div.message {
	/*font-style:italic;*/
	padding:8px 0px;
}

/* fix the bug where li's in quotes are floated */
.bbcode_container div.bbcode_quote div.message ol>li, .bbcode_container div.bbcode_quote div.message ul>li{
	float: none;
}

/* from components.css */
.bbcode_postedby {
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.bbcode_postedby img {
	margin:0;
}


/* CSS Document */
.popupmenu {
	*z-index:999;
	position: relative;
}

.popupmenu a.popupctrl {
	background-image:url(images/misc/black_downward_arrow.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:15px;
	_padding-right:25px;
}

.popupmenu a.popupctrl.nogadget {
	padding-right:0;
	background-image:none;
}

.popupgroup .popupmenu a.popupctrl {
	font-size:11px;
	padding:2px 4px;
	border: 0;
	background-color:transparent;
	text-decoration:none;
	padding-right:15px;
	margin-left:5px;
}

.popupgroup .popupmenu:hover a.popupctrl {
	border:0;
	background-color:transparent;
}

/* see PopupMenu.set_control_style() */
.popupgroup .popupmenu {
	float:left;
}

.blockfoot .popupctrl {
	text-decoration:none;
	padding:2px 6px;
	padding-right:15px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.blockhead .popupctrl {
	color: #ffffff;
}

.blockhead .popupctrl:hover {
	color: #ffffff;
}

.popupbody {
	font:   normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color: #3E3E3E;
	padding:2px;
	background:#E1E1E1 none   ;
	border: 1px solid #E1E1E1;
	position:absolute;
	z-index:1000;
	top:1.5em;
	left:0;
	display:none;
	min-width:200px;
}

.popupmenu:hover ul.popuphover {
	display:block;
}

.popupbody li {
	border-top:solid 1px #E1E1E1;
}

.popupbody > li:first-child {
	border-top:none;
}

.popupbody li a,
.popupbody li label {
	display:block;
	color: #3E3E3E;
	background:#FFC973 none   ;
	padding:6.235px 10px;
	text-decoration:none;
	text-align:left;
	white-space:nowrap;
}

.popupbody li > a:hover,
.popupbody li > label:hover {
	color:#3E3E3E;
	background:#FFE173 none   ;
}

.memberaction_body.popupbody li a:hover {
	color:#3E3E3E;
	background-color:#FFE173;
}

/* vbmenu_hilite and vbmenu_option are for the ajax popup menus (tags) */

.popupbody li.vbmenu_hilite a {
	color:#3E3E3E;
	background:#FFE173 none   ;
}

.popupbody li.vbmenu_option > a:hover {
	color:#3E3E3E;
	background:#FFE173 none   ;
}

.popupbody li.vbmenu_hilite, li.vbmenu_option {
	float: none;
	display:list-item;
	width: 100%;
}

.popupbody li input.searchbox {
	width:180px;
	padding:0px;
	font-size:13px;
	font-style:italic;
	color:#777777;
}

.popupbody li input.searchbox:focus {
	font-style:normal;
	color:#3e3e3e;
}

.popupbody li.formsubmit {
	text-align:right;
	padding:0px;
	background:#E1E1E1 none   ;
}

.popupbody li.formsubmit .submitoptions {
	float:left;
	text-align:left;
}

.popupbody li.formsubmit .submitoptions label {
	display:block;
}

.popupbody li.formsubmit.jumptopage > label {
	display:inline;
	background:none;
}

.popupbody li.formsubmit input[type="submit"],
.popupbody li.formsubmit input[type="reset"],
.popupbody li.formsubmit input[type="button"] {
	font:12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding:2px;
	padding-bottom:1px;
}

.popupbody li.formsubmit input[type="submit"]:hover,
.popupbody li.formsubmit input[type="reset"]:hover,
.popupbody li.formsubmit input[type="button"]:hover {
	color:#417394;
}

.blockhead .popupmenu,
.blocksubhead .popupmenu {
	display:block;
	float: right;
	clear: left;
	text-transform: none;
}

/* MEMBER ACTION DROP-DOWN */
.memberaction.popupmenu {
	position: relative;
	top: 0;
	display: inline-block;
}
.postdetails .memberaction.popupmenu {
	position: static; /* Opera 10.10 Fix */
}
.memberaction.popupmenu a.popupctrl {
	background: none;
	padding: 0;
}
.memberaction_body.popupbody {
	width: 280px;
	background: #FFC973;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	-moz-box-shadow: 0px 4px 7px #000000;
	-webkit-box-shadow: 0px 4px 7px #000000;
	box-shadow: 0px 4px 7px #000000;
}
.memberaction_body.popupbody li {
	border: none;
	width: 140px;
}
.memberaction_body.popupbody li.left {
	float: left;
	clear: left;
}
.memberaction_body.popupbody li.right {
	float: right;
	clear: right;
}

.memberaction_body.popupbody li .siteicon_profile { 
	background:url(images/site_icons/profile.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_forum { 
	background:url(images/site_icons/forum.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_message { 
	background:url(images/site_icons/message.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_blog { 
	background:url(images/site_icons/blog.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_homepage { 
	background:url(images/site_icons/homepage.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_article { 
	background:url(images/site_icons/article.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_add { 
	background:url(images/site_icons/add.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_email { 
	background:url(images/site_icons/email.png) left 2px no-repeat; 
}

.memberaction_body.popupbody li > a {
	padding: 4px;
	padding-left:20px;
}
.memberaction_body.popupbody hr {
	float: left;
	height: 96px;
	width: 0;
	display: inline;
}

.popupbody li.formsubmit .submitoptions label, 
.popupbody li.formsubmit .advancedsearchlink a {
	background:transparent;
	color: #3E3E3E;
}


/* CSS Document */
img {
border:0;
}
.postbit {
	padding:10px;
	border-top:solid 1px #6b91ab;
	margin-bottom:10px;
}

#postlist {
	padding-top:1em;
	padding-bottom:10px;
	list-style-type:none;
	padding-left:0;
	padding-right:0;
}

#postlist .postbit {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

#postlist .header {
	border-bottom:1px solid #cedfeb;
}

#postlist .postbit .username {
	font-size:19px;
}

#postlist .postbit .datetime {
	float:right;
}

#postlist .postbit .content {
	padding-top:10px;
}

#postlist .postbit .attachments {
	float:right;
	margin-left:10px;
}

#postlist .postbit .title {
	overflow:hidden;
}

a.maxperpage {
	float:right;
	font-size:11px;

}


/* CSS Document */

/*THIS*/

html {
	background:#FF9E00 none   ;
	
}

/* REVERSE SOME YUI RESET STUFF */
em {}
strong {}

/* BASIC PAGE ELEMENTS */

body {
	width:auto;
	min-width:650px;
	max-width:auto;
	margin: 0px 35px 0px 35px;
	font-size:13px;
	color:#3e3e3e;
	line-height:1.230;
}

a:active, a:focus {
	outline: 0;
}

body a {
	color:#BF8830;
	text-decoration:none;
}
body a:hover,
body a:hover .time,
body a:hover .shade,
body a:hover .understate {
	color:#FFC900;
	text-decoration:underline;
}

body a.understate,
body a .understate {
	color:inherit;
	text-decoration:none;
	*clear:expression(style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

.body_wrapper {
	padding: 10px 20px 10px 20px;
	background: #FFC973 none   ;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

input,
textarea,
button,
select {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.button {
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #a8a8a8;
	color:#FFFFFF;
	background:#BF8830 url(images/gradients/generic_button.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.button:hover {
	background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
	color: #FFFFFF;
}
body,
legend {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.shade {
	color:#777777;
}

.time {
	color:#3e3e3e;
}

.nocss_label {
	display:none;
}

.normal {
	font-size:13px;
	font-weight:normal;
}

/* BLOCK STUFF */

.block {
	clear:both;
}

.blockhead {
	font:  normal 12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color:#ffffff;
	background:#BFA130 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	padding:4px 10px 4px 10px;
	border:1px solid #BFA130;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
}

.blockhead h2 {
	font-weight:bold;
}

.blockhead a { color:#ffffff; }
.blockhead a:hover { color:#ffffff; }

.blockhead img {
	margin-bottom: -4px;
}

.blocksubhead {
	font:  normal 12px ;
	color:#3e3e3e;
	background:#FFB640 none repeat-x  ;
	padding:4px 10px 4px 10px;
	border-top:1px solid #cecece;
}



.blocksubhead img {
	vertical-align:middle;
}

.blocksubhead a { color:#417394; text-decoration:none; }
.blocksubhead a:hover { color:#417394; }

.blockhead_info, .blocksubhead_info {
	float:right;
	font-weight:normal;
}

/*.blockhead + */.blockbody { /* not sure why I had this .blockhead + .blockbody selector... need to look out for breakage */
	background:#FFC973 none no-repeat  ;
	padding-left:0px;
	padding-right:0px;
}

.blockrow {
	background:none none   ;
	padding:5px 10px 5px 10px;
	border:  ;
	color:;
	font:    ;
}

.blockrow a { color:#BF8830; }
.blockrow a:hover { color:; }

.blockfoot, .blocksubfoot {
	display:block;
	clear:both;
	background:#FFC973 none   ;
	padding:5px 0px 5px 0px;
	border:0  rgb(102, 204, 0);
	color:;
	font:    ;

}

.blockfoot a { color:; }
.blockfoot a:hover { color:; }

.blockfootpad {
	clear:both;
	padding:5px 0px 5px 0px;
}

.blocksubfoot {
	text-align:right;
}
/* END BLOCK STUFF */

/* WYSIWYG */
.wysiwyg_block {
	margin-bottom: 10px;
}

.wysiwyg_block .formcontrols .blockrow {
	border-top: 0;
}

/* CSS TABLE STUFF */
.table { display:table; table-layout:fixed; }
.thead { width:100%; padding:0; display: table-row; }
.tr    { display:table-row; }
.td    { display:table-cell; }

/* PAGINATION LINKS */

.pagination span {
	display: block;
	float: left;
	clear: right;
}

.pagination span a {
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border: 1px solid #cedfeb;
	height: 15.99px;
	padding: 2px 4px;
	margin-left: 1px;
	background:#f2f6f8 none   ;
	text-decoration:none;
	color: #417394;
}

.pagination span a:hover {
	border: 1px solid #417394;
}

.pagination span.prev_next a, .pagination span.first_last a {
	position: relative;
	top: -2px;
}

.pagination span.prev_next a img, .pagination span.first_last a img {
	position: relative;
	display: inline;
	top: 3px;
}
.pagination dt.label {
	display:none;
}

.pagination span.selected a {
	background: #759fbb url(images/buttons/newbtn_middle.png) repeat-x  ;
	color: #ffffff;
	border: 1px solid #417394;
	height: 15.99px;
	font-weight:bold;
	padding: 2px 4px;
	margin-left: 1px;
}

.pagination .separator,
.pagination .elipsis {
	background: none;
	border: 0;
}

.pagination .separator:hover {
	border: 0;
}

.pagination li.jumptopage {
	text-align:center;
}


.pagination span a.popupctrl {
	height: 15.99px;
	background: #f2f6f8 url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-right: 4px;
	padding-left: 18px;
}

.pagination .popupmenu:hover a.popupctrl {
	border: 1px solid #417394;
	color: #3e3e3e;
}

/* TEXT CONTROLS */

.cke_skin_kama .cke_dialog_contents a.cke_dialog_ui_button_ok,
.cke_skin_kama .cke_dialog_contents a.cke_dialog_ui_button_cancel,
.textcontrols a,
a.textcontrol {
	position:relative;
	padding: 3px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	line-height: 1.230;
	text-decoration:none;
	border: 1px solid #a8a8a8;
	color: #FFFFFF;
	background:#BF8830 url(images/gradients/generic_button.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.cke_skin_kama .cke_dialog_footer_buttons span.cke_dialog_ui_button {
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color: #FFFFFF;
}

.textcontrols a img,
a.textcontrol img {
	position:absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover img,
a:hover.textcontrol img {
	position: absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover,
a:hover.textcontrol {
	background:#efefef url(images/gradients/generic_button.png) repeat-x  ;
	text-decoration:none;
	color: #417394;
}

.textcontrols a:hover,
a:hover.textcontrol {
	text-decoration:none;
}

.blockhead a.textcontrol {
	float:right;
	font:  bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: -4.5px;
	text-transform: none;
}

.blockhead a.textcontrol:hover {
	color: #417394;
}

/* FORUMJUMP (navpopup) */

.navpopupmenu {
	text-align:right;
	float: right;
	display:block;
	padding: 0;
	padding-top: 3px;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 0;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu a.textcontrol, .navpopupmenu a.popupctrl, .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	text-decoration:none;
	color: #FFFFFF;
	border: 1px solid #a8a8a8;
	background: #BF8830 url(images/gradients/generic_button.png) repeat-x top left;
	_background-image: none;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

.navpopupmenu a.textcontrol:hover, .navpopupmenu a.popupctrl:hover, .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
        background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
        color: #417394;
        _background-image: none;
}

.navpopupmenu .popupctrl .ctrlcontainer {
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
	white-space:nowrap;
}

.navpopupbody {
	width:auto;
	max-height:350px;
	text-align:left;
	*overflow:auto;
	overflow-y:scroll;
	left:auto;
	right:0;
}

.navpopupbody li {
	overflow:hidden;
	min-width: 200px;
}

.navpopupbody li.optionlabel {
	text-align:center;
	font-weight:bold;
	color: #3E3E3E;
}

/**
* Not pretty, but it works...
*/

.navpopupbody .d1  a { text-indent:20px; }
.navpopupbody .d2  a { text-indent:40px; }
.navpopupbody .d3  a { text-indent:60px; }
.navpopupbody .d4  a { text-indent:80px; }
.navpopupbody .d5  a { text-indent:100px; }
.navpopupbody .d6  a { text-indent:120px; }
.navpopupbody .d7  a { text-indent:140px; }
.navpopupbody .d8  a { text-indent:160px; }
.navpopupbody .d9  a { text-indent:180px; }
.navpopupbody .d10 a { text-indent:200px; }
.navpopupbody .d11 a { text-indent:220px; }
.navpopupbody .d12 a { text-indent:240px; }
.navpopupbody .d13 a { text-indent:260px; }
.navpopupbody .d14 a { text-indent:280px; }
.navpopupbody .d15 a { text-indent:300px; }
.navpopupbody .d16 a { text-indent:320px; }
.navpopupbody .d17 a { text-indent:340px; }
.navpopupbody .d18 a { text-indent:360px; }
.navpopupbody .d19 a { text-indent:380px; }
.navpopupbody .d20 a { text-indent:400px; }

/* LEFT / RIGHT DT+DD */

dl.stats.totals {
	float:right;
	padding:5px;
}

dl.stats dt {
	display:inline;
	color:#777777;
}
dl.stats dt:after {
	content:":";
}
dl.stats dd {
	display:inline;
}

/* BLOCK STATS */
dl.statsblock dt {
	display:block;
	float:left;
	clear:left;
	width:25%;
}

dl.statsblock dd {
	display:block;
	float:left;
	margin-left:10px;
}

/* LIGHT-TABS */

dl.tabslight {
	border-bottom:solid 1px #6b91ab;
	padding-left:20px;
	margin-bottom:1em;
	height:26;
	margin-top:15px;
}

dl.tabslight dt {
	display:none;
}

dl.tabslight dd {
	float:left;
}

dl.tabslight dd a {
	font-size:11px;
	font-weight:bold;
	color:#3e3e3e;
	text-decoration:none;
	text-align:center;

	padding:0 10px;
	min-width:55px;
	height:25px;
	line-height:25px;
	display:block;

	border:1px solid #6b91ab;
	background-color:#FFB640;

	margin-left:-1px;
	margin-bottom:-1px;

	-moz-border-radius-topleft:5px;
	-moz-border-radius-topright:11px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-top-right-radius:11px;
	border-top-left-radius:3px;
	border-top-right-radius:11px;
}

html>/**/body dl.tabslight dd.selected a,
html>/**/body dl.tabslight dd.selected a:hover {
	position:relative;
	border-bottom: 1px solid transparent;
	background:#f1f3f8 none   ;
}
* dl.tabslight dd.selected a, * dl.tabslight dd.selected a:hover {
	border-bottom: 1px solid transparent;
	background:#f1f3f8 none   ;
}

dl.tabslight dd a:hover {
	color:#FFC900;
	background:#f1f3f8 none   ;
}

/* COLUMN SORT LINKS */

.columnsort a,
.columnsort span {
	display:block;
	text-decoration:none;
	white-space:nowrap;
	text-align: left;
}

.columnsort a:hover {
	background-color:#FFE173;
	text-decoration:none;
	color:inherit;
}

tr.columnsort th {
	white-space:nowrap;
}

/* MISC */

div.collapse {
	position:relative;
}

a.collapse {
	float:right;
	right:10px;
	top:20px;
	position:absolute;
}

.blockhead a.collapse {
	top: 10px;
}

#forumrules {
	margin-bottom: 10px;
	border-bottom: 1px solid #c4c4c4;
	border-left: 1px solid #c4c4c4;
	border-right: 1px solid #c4c4c4;
	border-top: 1px solid rgb(255, 255, 255);
	background: rgb(255, 255, 255) url(images/gradients/gradient-greytowhite.png) repeat-x  ;
}

#forumrules ul.youcandoblock {
	float:left;
	width:55%;
	overflow:hidden;
	margin: 0 10px 10px 0;
}

#forumrules ul.bbcodeblock {
	float:right;
	width:42%;
	text-align:right;
	overflow:hidden;
}

#forumrules .rules_link {
	margin-top: 10px;
	width: 42%;
	padding-left: 55%;
}

.errorblock ul.blockrow.error > li {
	border-bottom:solid 1px #cedfeb;
	padding-bottom:10px;
	margin-bottom:10px;
}

.errorblock ul.blockrow.error li:last-child {
	border-bottom:none;
	padding-bottom:0;
	margin-bottom:0;
}

blockquote.preview {
	font:   13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

blockquote.preview ul, blockquote.preview ol, blockquote.preview dl {
	margin:0 40px;
}

blockquote.preview.forumcontent {
	font:   13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}

blockquote.preview .bbcode_container div.bbcode_code,
blockquote.preview .bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:auto;
	direction:ltr;
	background:#f2f6f8 none repeat-x  ;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

blockquote.preview fieldset.postattachlist {
	background:#FFC973 none   ;
	border-top:solid 1px #cedfeb;
	padding-bottom:1em;
}

blockquote.preview .bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #f2f6f8 none   ;
	border-radius: 5px;
	border: 1px solid #417394;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}


blockquote.preview .bbcode_container .bbcode_quote_container {
	background: transparent url(images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

blockquote.preview .bbcode_quote div.quote_container {
	border-top: 1px solid #fafafa;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.attachments {
	border: 1px solid #cecece;
	background: #ececec none   ;
	margin: 20px 30px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
	font-size: 12px;
}

.attachments fieldset {
	margin: 5px 0;
}

.attachments img.inlineimg {
	position: relative;
	top: 2px;
}


blockquote.preview .signature {
	margin-top:1.5em;
	border-top:1px solid #dddddd;
	padding-top:0.5em;
}

.commalist li {
	display:inline-block;
}

.standard_error {
	max-width:600px;
	margin:0 auto;
	padding:4em 0 6em;
}

.hidden {
	display: none !important;
}

/* Auto-clearing of floats */
.floatcontainer:after,
.formcontrols .blockrow:after,
dl.stats:after {
	content:".";
	display:block;
	height:0;
	clear:both;
	visibility:hidden;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:inline-block;
	font-weight:normal;
}
/* IE-Mac hide \*/
* html .floatcontainer,
.formcontrols .blockrow,
dl.stats {
	height:1%;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:block;
}
.floatcontainer.hidden {
	display:none;
}
/* End IE-Mac hide */


/* INLINEMOD */

#inlinemod_formctrls {
	float:right;
}

#inlinemod_formctrls .popupctrl {
	top: -5px;
	position: inherit;
	text-decoration:none;
	background: #BF8830 url(images/gradients/generic_button.png) repeat-x top left;
	padding-right: 0;
	color: #FFFFFF;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	float: left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

#inlinemod_formctrls a.popupctrl:hover {
	background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
	color: #417394;
}

#inlinemod_formctrls a.popupctrl span.ctrlcontainer {
	display:inline-block;
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-top: 3.3333333333333px;
	padding-right: 5px;
	padding-bottom: 3.3333333333333px;
	padding-left: 15px;
	font-size: 11px;
	float: left;
}

#inlinemod_formctrls .popupbody {
	left:auto;
	right:0px;
}


/* FORUM DISABLED */
div.forum_disabled {
	text-align:center;
	color:red;
	background-color:white;
	padding:10px;
	font-size:20px;
}

/**
* UN-RESET
*
* These definitions are designed to undo the effects of YUI Reset, but only when contained within a *.reset element.
* Code is based on YUI Base
*/

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
/**
 * YUI Base
 * @module base
 * @namespace yui-
 * @requires reset, fonts
*/

.restore body {
	/* For breathing room between content and viewport. */
	margin:10px;
}

.restore h1 {
	/* 18px via YUI Fonts CSS foundation. */
	font-size: 138.5%;
}

.restore h2 {
	/* 16px via YUI Fonts CSS foundation. */
	font-size: 123.1%;
}

.restore h3 {
	/* 14px via YUI Fonts CSS foundation. */
	font-size: 108%;
}

.restore h1,
.restore h2,
.restore h3 {
	/* Top & bottom margin based on font size. */
	margin: 1em 0;
}

.restore h1,
.restore h2,
.restore h3,
.restore h4,
.restore h5,
.restore h6,
.restore strong,
.restore dt {
	/* Bringing boldness back to headers and the strong element. */
	font-weight: bold;
}
.restore optgroup {
	font-weight:normal;
}

.restore abbr,
.restore acronym {
	/* Indicating to users that more info is available. */
	border-bottom: 1px dotted #000;
	cursor: help;
}

.restore em {
	/* Bringing italics back to the em element. */
	font-style: italic;
}

.restore del {
	/* Striking deleted phrases. */
	text-decoration: line-through;
}

.restore blockquote,
.restore ul,
.restore ol,
.restore dl {
	/* Giving blockquotes and lists room to breath. */
	margin: 1em;
}

.restore ol,
.restore ul,
.restore dl {
	/* Bringing lists on to the page with breathing room. */
	margin-left: 2em;
}

.restore ol > li,
.restore ol.decimal > li {
	list-style:decimal outside;
}

.restore ol.upper-roman > li {
	list-style:upper-roman outside;
}

.restore ol.lower-roman > li {
	list-style:lower-roman outside;
}

.restore ol.upper-alpha > li {
	list-style:upper-alpha outside;
}

.restore ol.lower-alpha > li {
	list-style:lower-alpha outside;
}

.restore ul > li {
	/* Giving UL's LIs generated disc markers. */
	list-style: disc outside;
}

.restore dl dd {
	/* Giving UL's LIs generated numbers. */
	margin-left: 1em;
}

.restore th,
.restore td {
	/* Borders and padding to make the table readable. */
	border: 1px solid #000000;
	padding: 0.5em;
}

.restore th {
	/* Distinguishing table headers from data cells. */
	font-weight: bold;
	text-align: center;
}

.restore caption {
	/* Coordinated margin to match cell's padding. */
	margin-bottom: .5em;
	/* Centered so it doesn't blend in to other content. */
	text-align: center;
}

.restore sup {
	/* to preserve line-height and selector appearance */
	vertical-align: super;
}

.restore sub {
	/* to preserve line-height and selector appearance */
	vertical-align: sub;
}

.restore p,
.restore fieldset,
.restore table,
.restore pre {
	/* So things don't run into each other. */
	margin-bottom: 1em;
}
/* Opera requires 1px of passing to render with contemporary native chrome */
.restore button,
.restore input[type="checkbox"],
.restore input[type="radio"],
.restore input[type="reset"],
.restore input[type="submit"] {
	padding:1px;
}

.restore li > p {
	margin-bottom: 0em;
}

.unread {
	font-weight:bold;
}

/* Cloud tags */
li.tag {
	display:inline;
	margin-right:5px;
}

li.tag label.mine {
	font-weight:bold;
}

li.tag a {
	text-decoration:none;
}

li.taglevel1 {
	font-size:9px;
}

li.taglevel2 {
	font-size:12px;
}

li.taglevel3 {
	font-size:15px;
}

li.taglevel4 {
	font-size:18px;
}

li.taglevel5 {
	font-size: 21px;
}

li.tag.option {
	padding:10px;
}

/* Tag Controls */
/* Tagging Controls */

#thread_tags_list input#tag_add_input {
	display:block;
	width:90%;
	margin-top:2px;
	margin-bottom:0.5em;
}

#thread_tags_list  .description {
	color:#777777;
}

#thread_tags_list  .actionbuttons {
	text-align:right;
	margin-bottom:1em;
}

#tag_edit_list {
	list-style:none;
	margin:0;
	padding:0;
}

#tag_edit_list li {
	float:left;
	display:block;
	width:100px;
}

#tag_edit_list li.mine {
	font-weight:bold;
}

/* We don't use class="inlineimg" in vB4
img.inlineimg {
	padding:0 10px;
}
*/


/* Social Bookmarks */

#social_bookmarks_list li {
	display:block;
	float:left;
	padding-left:10px;
}

/* Imagereg */
#imagereg {
	vertical-align:middle;
	margin-bottom:5px;
}


#wol_navpopup.navpopupmenu {
	margin-bottom:6px;
}
.navlinks {
	background: #FFB640 none   ;
	border-top: 1px solid #e7e7e7;
	padding: 10px 0;
	text-align: center;
	color: #5d5d5d;
	font-size: 13px;
        margin-top: 20px;
        margin-bottom: 20px;
width:100%;
clear:both;
}

.clear, .cleardiv {
	clear: both;
}

#ajax_post_errors {
	position:absolute;
	width:420px;
	z-index:500;
	padding:2px;
	background-color:#FFFFFF;
	-moz-border-radius-topright:5px;
	-moz-border-radius-topleft:5px;
	-webkit-border-top-right-radius:5px;
	-webkit-border-top-left-radius:5px;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
}

#ajax_post_errors .blockrow {
	border-bottom:1px solid #c4c4c4;
	border-left:1px solid #c4c4c4;
	border-right:1px solid #c4c4c4;
}
#ajax_post_errors .blockfoot {
	text-align:center;
}

#ajax_post_errors_message ol {
	margin:1em;
	margin-left:2em;
}

#ajax_post_errors_message ol.numeric li,
#ajax_post_errors_message ol li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:decimal;
}

.highlight {
	color: #417394;
	background: #FFEB90 none repeat-x  ;
}

/* Facebook Section */
label#fb_pulishlabel {
	font-size:12px;
	font-weight: normal;
	margin-right: 10px;
	vertical-align: middle;
}

#fb_likeframe {
	border: none;
	overflow: hidden;
	height: 27px;
	width: 260px;
	vertical-align: text-bottom;
}
#pagetitle #fb_likeframe {
	float: right;
}
.blogbit #fb_likeframe {
	margin-top: 7px;
}

/* Fix for Facebook Connect rtl scrollbar */


#recaptcha_area {
	direction:ltr;
	display:inline;
}

#recaptcha_widget_div {
	float:left;
}

.member_blockrow .error 
{ 
        padding:4px 10px 4px 10px; 
}  

div.cms_table {
	overflow:auto;
	overflow-y:hidden;
	padding:1px;
}

table.cms_table_grid,
table.wysiwyg_cms_table_grid {
	border-collapse: collapse;
	margin-bottom:0;
}

td.cms_table_grid_td,
td.wysiwyg_cms_table_grid_td {
	border: 3px solid #999999;
}

table.cms_table_outer_border,
table.wysiwyg_cms_table_outer_border {
	border-collapse: collapse;
	border: 3px solid #999999;
}

td.cms_table_td,
td.cms_table_outer_border_td {
	border:none;
}

.content img {
	max-width: 100%;
}


/* CSS Document */

/**
* CHROME: HEADER, NAVBAR, BREADCRUMB, FOOTER
*/

/*************************************************/
/* HEADER */

.above_body {
	background:#000000 url(images/gradients/gradient-grey-down.png) repeat-x  ;
	margin: 0px 0px 10px 0px;
	padding: 0px 0px 0px 0px;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}

.doc_header {
	border:  ;
	color:#a8a8a8;
	font:normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	position:relative;
	min-height:35px;
}
.doc_header a { color:; }
.doc_header a:hover { color:; }
.doc_header hr { display: none; }
.logo-image {
        float: left;
        clear: right;
        min-height: 2em;
        height: auto !important;
        padding:    ;
}

.toplinks {
	position:absolute;
	right:20px;
	top:0;
	color:#ffffff;
	font: normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	text-align:right;
	background: none   ;
}

.toplinks ul.isuser li#fb_headerbox.hidden,
.toplinks ul.nouser li#fb_headerbox.hidden {
	display: none;
}
.toplinks ul.isuser li#fb_headerbox a,
.toplinks ul.nouser li#fb_headerbox a {
	padding-top: 0;
	background: none;
	cursor: pointer;
}
	li#fb_headerbox a#fb_link {
		position: relative;
	}
	li#fb_headerbox a#fb_link #fb_squarepic{
		position:absolute;
		right:-6px;
		top:5px;
		z-index:1;
		border:1px solid #B3CCE7;
		padding:1px;
	}
	li#fb_headerbox a#fb_link #fb_icon{
		position:absolute;
		right:10px;
		top:1px;
		z-index:2;
	}

.toplinks ul.isuser, .toplinks ul.nouser {
	display:block;
	float: right;
	clear: left;
	list-style: none;
}

.toplinks ul.isuser li {
	display:inline;
	position: relative; 
	color: #a8a8a8;
	float: right;
	clear: left;
	padding-right: 10px;
        background:;
}

.toplinks ul.isuser .popupbody li {
	display:block;
	float: none;
	clear: none;
	padding:0;
	margin:0;
}

.toplinks ul.isuser li.welcomelink {
	display: block;
	float: right;
	clear: left;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	color: #FFFFFF;
}

.toplinks ul.isuser li.logoutlink {
	top: 0;
}

.toplinks ul.isuser li a {
	display: block;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	font-weight:bold;
	color:#ffffff;
}

.toplinks ul.isuser li li a {
	float: none;
	margin-left: 0;
}

.toplinks ul.isuser li.welcomelink a {
	display:inline;
	float: none;
	clear: none;
	margin-left: 0;
}

.toplinks ul.isuser li a:hover {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	background: #FFC900;
	color:rgb(255, 255, 255);
}

.toplinks ul.nouser li {
	display:inline;
}

.toplinks ul.nouser li a {
	display: block;
	float: right;
	clear: left;
	color:#ffffff;
	position: relative;
	padding: 6px 10px 0 10px;
	background: #FFC900;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-right-radius:5px;
	height:20px;
	font-weight:bold;
	font-size:12px;
	margin-right: 10px;
}

.toplinks ul.nouser li a:hover {
	background: #FFC900;
	color:rgb(255, 255, 255);
}

.toplinks ul.isuser li.popupmenu, .toplinks ul.isuser .notifications, .toplinks ul.isuser .nonotifications  {
	color: #000000;
	position: relative;
}

.toplinks ul.isuser li.popupmenu ul li {
	position: relative;
	top: 0;
	margin: 0;
	text-align: left;
}

.toplinks ul.isuser .notifications .popupbody {
	background: #FFC900;
	border: 1px solid #FFC900; /* makes it look consistent with the popup background */
}

.toplinks ul.isuser .notifications .popupbody li a{
	color: #000000;
	background:#FFC973 none   ;
	padding: 0 5px;
	font-weight: normal;
	border-top:1px solid #FFC900; /* makes it look consistent with the popup background */
	text-align: left;
	padding-left: 30px;
	line-height: 26px;
}

.toplinks ul.isuser .notifications .popupbody li a span {
	position: absolute;
	line-height: 26px;
	left: 5px;
}

.toplinks ul.isuser .notifications .popupbody li a:hover {
	color: #000000;
	background:#FFE173 none   ;
	text-decoration: underline;
}

.toplinks form {
	min-width: 220px;
	display:block;
	margin-right: 10px;
	text-align: left;
	float: right;
	clear: left;
}

.toplinks .logindetails {
	padding: 0 10px;
	text-align: center;
	background: #FFC900;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-right-radius:5px;
	height:26px;
}

.toplinks form input {
	margin: 3px 0 0;
	vertical-align: baseline;
	font-size: 11px;
	padding: 1px;
	border: 0;
}

.toplinks form input.textbox {
	color: #000000;
}

.toplinks form input.default-value {
	color: #777777;
}

.toplinks .remember {
	margin: -3.3333333333333px 0 0 20px;
	font-size: 10px;
	color: #FFFFFF;
}

.toplinks .remember input {
	vertical-align: baseline;
}

.toplinks ul.isuser .notifications .popupbody li{
	border-top:1px solid #FFC900;
}

.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}

.notifications a.popupctrl:link, .notifications a.popupctrl:visited,
.toplinks a:link, .toplinks a:visited {
	color: #ffffff;
	text-decoration:none;
}

.notifications {
	font-size:11px;
	color: #ffffff;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	border-bottom-right-radius: 5px;

}

.notifications a {
	text-decoration:none;
}

.notifications .popupbody {
	color:#000000;
	background: #FFC973 none   ;
}

.header hr,
.header h2 {
	display:none;
}

/*************************************************/
/* NAVBAR */

.navbar {
	position:relative;
	height: 53px;
	background:#A66600 none   ;
	margin:10px 0px 0px 0px;
	color:rgb(255, 255, 255);
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	border:0px solid rgb(255, 255, 255);
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}
.navbar a { color:rgb(255, 255, 255); }
.navbar a:hover { color:rgb(255, 255, 255); }

.navtabs {
	background:#FFC900 url(images/buttons/newbtn_middle.png) repeat-x  ;
	padding: 0px 0px 0px 20px;
	height: 26px;
}

.navtabs li:first-child {
	border-left: 1px solid #5a7f97;
}

.navtabs ul {
/*	height: 26px; */
	position:absolute;
	top:26px;
	left:0px;
	width:100%;
	border-top:1px solid #5a7f97;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
	margin-right:-80px;
/* This is to fix RTL menu issue under Opera */
	direction:ltr;
}

.navtabs li {
	float:left;
	border-right: 1px solid #5a7f97;
}

.navtabs ul li:first-child {
	margin-left: 20px;
	border-left: 0;
}

#navtabs .popupmenu ul li:first-child {
	margin-left: 0px;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}

.navtabs li a {
	height:26px;
	line-height:26px;
	padding:0 10px;
}

.navtabs li a.navtab {
	border-top: 1px solid #Cedfeb;
	border-left: 1px solid #Cedfeb;
	display:block;
	background:#FFC900 url(images/buttons/newbtn_middle.png) repeat-x  ;
	min-width:60px;
	width:auto !important;
	width:60px;
	text-align:center;
	color: #ffffff;
	font:  bold 12px Arial, Calibri, Verdana, Geneva, sans-serif;
	text-decoration:none;
	line-height:26px;
	padding: 0 10px;
}

.navtabs li a.navtab:hover {
	background:#BF8830 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x   0 -4px;
	color:#000000;
}

.navtabs li.selected {
	height:26px;
	color:#000000;
}

.navtabs li.selected a.navtab {
	color:#000000;
	background:#BF8830 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x  ;
	position:relative;
	top:-4px;
	padding-top:4px;
	z-index:10;
}

.navtabs > ul.floatcontainer li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	line-height: 26px;
}

.navtabs > ul.floatcontainer li a {
	color:rgb(255, 255, 255);
	padding:2px 5px;
}

.navtabs > ul.floatcontainer ul.popupbody a {
    line-height: 26px;
}

.navbar_advanced_search li {
	height: 26px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:rgb(255, 255, 255);
}

.navbar_advanced_search li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs > ul.floatcontainer li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs > ul.floatcontainer .popupbody li a {
	text-indent: 0;
	color: #000000;
	background: #FFC973 none   ;
	padding:0px 10px;
}

.navtabs > ul.floatcontainer .popupbody li a:hover {
	color: #000000;
	background: #FFE173 none   ;
}

.navtabs > ul.floatcontainer li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border-radius:3px;
	border:solid 1px transparent;
	background:transparent url(images/misc/arrow.png) no-repeat right center;
	padding-right:15px;
	color: rgb(255, 255, 255);
}


.navtabs li a.navtab.popupctrl img {
	padding-bottom:3px;
	vertical-align:middle;
}

.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #FFC900 url(images/misc/arrow.png) right center no-repeat ;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius:5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-right-radius:5px;
	border-bottom-left-radius: 5px;
}

.toplinks .nonotifications a.popupctrl {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: transparent url(images/misc/arrow.png) no-repeat right center;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active , .toplinks .notifications a.popupctrl.active{
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #FFC900 url(images/misc/arrow.png) no-repeat right center;
}

.toplinks .notifications a.popupctrl:hover {
	padding-top: 3px;
}

.navtabs > ul.floatcontainer li:hover a.popupctrl {
	border-color:#A66600;
	background-color:#FFC900;
	text-decoration:none;
}

.navtabs > ul.floatcontainer li:hover a.popupctrl.active,
.navtabs > ul.floatcontainer li a.popupctrl.active {
	border-color:#FFC900;
	background-color:#FFC900;
	color:rgb(255, 255, 255);
	border-radius: 3px 3px 0px 0px;
	text-decoration:none;
}

.navtabs .popupbody {
	border: 1px solid #FFC900;
	background: #FFC900;
	width: auto;
}

.navtabs .popupbody li {
	float:none;
	border-top: 1px solid #FFC900;
}

#navtabs .popupmenu ul, #navtabs .popupmenu ul li a {
	height: auto;
}

.nonotifications div.popupbody {
	min-width: 170px;
	width: auto !important;
	width: 170px;
	background: #FFC900;
	border: 1px solid #FFC900;
}

.nonotifications .popupbody p {
	color: #000000;
	background: #FFC973 none   ;
	text-align: left;
	border-top: 1px solid #FFC900;
	padding: 0;
	text-indent: 5px;
	line-height: 26px;
	display:block;
}

.toplinks .nonotifications .popupbody a {
	color: #000000;
	background: #FFC973 none   ;
	float: none;
	clear: none;
	padding: 0 5px;
	margin-left: 0;
	text-align: left;
	line-height: 26px;
}

.toplinks .nonotifications .popupbody a:hover {
	color: #000000;
	background:#FFE173 none   ;
	text-decoration: underline;
	padding: 0 5px;
}

.globalsearch {
	position:absolute;
	width:180px;
	right: 20px;
	top: 0px;
	float: right;
	clear: left;
	text-align:right;
	line-height: 1.0em;
	display:block;
}

.navbar_search {
	position:relative;
	width: 180;
	right: -20px;
	display:block;
}

.navbar_search input {
	font-size: 11px;
	vertical-align:middle;
	padding: 1px;
	border:1px solid #6B91AB;
}

.globalsearch .textboxcontainer {
	height: 26px;
	border-left:1px solid #5a7f97;
	display:inline-block;
	float: left;
	text-align:center;
}

.globalsearch .textboxcontainer span {
	border-top: 1px solid #Cedfeb;
	border-left: 1px solid #Cedfeb;
	display: inline-block;
	height: 22px;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 3px;
	margin-bottom: 1px;
	width: 147px;
}

.globalsearch input.textbox {
	width: 120px;
}

.toplinks form input.loginbutton {
	font-size: 11px;
	padding: 0 5px;
	border:solid 1px rgb(65,93,141);
}

.globalsearch .buttoncontainer {
	height: 26px;
	border-left:1px solid #5a7f97;
	display:inline-block;
	border-right:1px solid #5a7f97;
	width: 25px;
	overflow: hidden;
	float: right;
}

.globalsearch .buttoncontainer span{
	border-top: 1px solid #Cedfeb;
	border-left: 1px solid #Cedfeb;
	height: 23px;
	padding-left: 4px;
	padding-top: 2.5px;
	display:inline-block;
}

.globalsearch .searchbutton {
	border: 0;
	padding: 0;
	width: 22px;
	margin-top: -2px;
	margin-left: -2px;
}

/*************************************************/
/* BREADCRUMB */

.breadcrumb .navbit {
	float:left;
	background-image:url(images/misc/navbit-arrow-right.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit:first-child {
	padding-left:0;
}

.breadcrumb .navbit.lastnavbit {
	background: transparent;
}

.breadcrumb .navbit.lastnavbit span {
	float:left;
	background: transparent;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit > a, .breadcrumb .lastnavbit > span {
	display:block;
	padding:2px 4px;
	float:left;
	background-color:transparent;
	border:1px solid transparent;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;	
	border-radius:5px;	
}

.breadcrumb .navbit a {
	text-decoration:none;
}

.breadcrumb hr {
	display:none;
}

/*************************************************/
/* PAGE TITLE */
	
#pagetitle {
	padding:0px 0px 0px 0px;
	clear:both;
	padding-top: 5px;
	background: none   ;
	border:  ;
}
#pagetitle a { color:; }
#pagetitle a:hover { color:; }

#pagetitle h1 {
	color: inherit;
	font:normal normal bold 14px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

#pagetitle .description {
	color: inherit;
	font-size: 11.05px;
}

/*************************************************/
/* NEW CONTENT LINK */
.newcontent_textcontrol {
	background: #BF8830 url(images/buttons/newbtn_middle.png) repeat-x left top;
	_background-image: none;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	-moz-box-shadow: 0 3px 8px #000000;
	-webkit-box-shadow: 0 3px 8px #000000;
	box-shadow: 0 3px 8px #000000;
	font:   normal 14px Arial, sans-serif;
	color: rgb(255, 255, 255);
	padding: 4px 15px 4px 15px;
	border: 0  ;
	display:block;
	float: left;
	clear: right;
}

.newcontent_textcontrol span {
	font:  normal 14px Arial, sans-serif;
	font-size:15px;
	font-weight:bold;
	display:inline;
}

.newcontent_textcontrol:hover {
	background: #FFC900 url(images/buttons/newbtn_middle.png) repeat-x left top;
	color: rgb(255, 255, 255);
	text-decoration: none;
}


/*************************************************/
/* FOOTER */

.footer {
	clear:both;
	margin-top:15px;
	text-align:right;
	display:block;
	/*width: 100%; VBIV-10173*/

	-moz-box-shadow: -2px 2px 2px #000000;
	-webkit-box-shadow: -2px 2px 2px #000000;
	box-shadow: -2px 2px 2px #000000;

	background:#A66600 none   ;
	padding:5px 0px 5px 0px;
	border:1px solid #425769;
	color:;
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}
.footer a { color:rgb(255, 255, 255); }
.footer a:hover { color:rgb(255, 255, 255); }


.footer_copyright,
.footer_morecopyright {
	padding-bottom:5px;
	color:#FFC973;
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: 10px;
	text-align:center;
	display:block;
}

.footer_time {
	color:#FFC973;
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding-top:10px;
	text-align:center;
}

.footer_select {
	float:left;
	text-align:left;
	margin-left: 10px;
	margin-top: 0;
}

.footer_links {
	margin-right: 10px;
	margin-top: 2px;
}

.footer_links li {
	display:inline;
	margin-left:5px;
}

.below_body .time {
	color: #FFB640;
}

.notices {
	background: #FFC973;
	margin: 5px 0;
}

.notices li {
	background: #FFE173 none   ;
	font-size: 12px;
	color: #3e3e3e;
	padding:5px 10px;
	margin-bottom:5px;

	-moz-box-shadow: -2px 2px 2px ;
	-webkit-box-shadow: -2px 2px 2px ;
	box-shadow: -2px 2px 2px ;

	text-align: left;
	clear:both;
}

.breadcrumb .navbithome {
	float: left;
	padding: 3.5px 0;
}
/* end styles for template: navbar */

/*************************************************/
/* ADS GLOBAL */
.ad_global_header {
}
#ad_global_header1 {
	float:left;
	clear:right;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_header2 {
	float:left;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_below_navbar {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_above_footer {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
	text-align:left;
	clear:both;
}
#ad_board_below_whats_going_on {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
	text-align:left;
}
#ad_thread_first_post_content {
	float:right;
	margin:0 0 0 0;
}
#ad_thread_last_post_content {
	float:right;
	margin:0 0 0 0;
	z-index: 1000;
}
.google_adsense_footer {
	clear:both;
}