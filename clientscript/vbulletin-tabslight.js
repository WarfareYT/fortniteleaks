/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.5
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2017 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| #        www.vbulletin.com | www.vbulletin.com/license.html        # ||
|| #################################################################### ||
\*======================================================================*/
vB_XHTML_Ready.subscribe(init_tabslight);function init_tabslight(){var A=YAHOO.util.Dom.getElementsByClassName("tabslight","dl",document.body);for(var B=0;B<A.length;B++){if(YAHOO.util.Dom.hasClass(A[B],"js")){new TabsLightJS(A[B])}}}function TabsLightJS(B){this.tabset=YAHOO.util.Dom.get(B);this.tabsetid=B.id;this.selected_index=null;this.tabs=this.tabset.getElementsByTagName("dd");for(var A=0;A<this.tabs.length;A++){this.init_tab(A)}}TabsLightJS.prototype.init_tab=function(B){var A=this.tabs[B].getElementsByTagName("a")[0];A.index=B;YAHOO.util.Event.on(A,"click",this.click_tab,this,true);if(YAHOO.util.Dom.hasClass(this.tabs[B],"selected")){this.selected_index=B}else{YAHOO.util.Dom.setStyle(this.tabsetid+B,"display","none")}};TabsLightJS.prototype.click_tab=function(B){var A=YAHOO.util.Event.getTarget(B);YAHOO.util.Event.stopEvent(B);if(this.selected_index!=A.index){YAHOO.util.Dom.removeClass(this.tabs[this.selected_index],"selected");YAHOO.util.Dom.setStyle(this.tabsetid+this.selected_index,"display","none");this.selected_index=A.index;YAHOO.util.Dom.addClass(this.tabs[this.selected_index],"selected");YAHOO.util.Dom.setStyle(this.tabsetid+this.selected_index,"display","");if(!YAHOO.util.Dom.hasClass(this.tabs[this.selected_index],"notabfocus")){try{YAHOO.util.Dom.get(this.tabsetid+this.selected_index).getElementsByTagName("input")[0].focus();if(YAHOO.util.Dom.get(this.tabsetid+this.selected_index).getElementsByTagName("input")[0].type!="file"){YAHOO.util.Dom.get(this.tabsetid+this.selected_index).getElementsByTagName("input")[0].click()}}catch(B){}}}};