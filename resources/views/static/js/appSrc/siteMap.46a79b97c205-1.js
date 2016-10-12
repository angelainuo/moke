define("css!alert",[],function(){}),define("alert",["require","exports","module","jquery","support/transitionend","css!alert"],function(a,b,c){var d=a("jquery");return a("support/transitionend"),a("css!alert"),function(a){function b(){if(i.addClass("alertM_out"),d.support.transition)for(var a=0,b=g.length;b>a;a++)i[0].addEventListener(g[a],function(){d(this).remove(),e.closeFn()},!1);else i.remove(),e.closeFn()}if(d("#alert_cover").length)return!1;var e=d.extend({titleHTML:"",mainHTML:"",type:"succ",tip:0,isClose:1,isDoBtn:1,doHTML:"确定",style:"",id:"",closeFn:function(){},doFn:function(){}},a||{}),f=d("body"),g=(d(window),["transitionend","webkitTransitionEnd","otransitionend","oTransitionEnd"]),h="";h=e.tip?'<div id="alert_cover"><div class="alert_cell"><div id="alertM" class="alertM_in '+e.id+'" style="'+e.style+'"><div class="alertM_bg '+("succ"http://www.xuetangx.com/static/js/appSrc/==e.type?"succ":"err")+'"><h6 class="h6" style="height:50px; line-height:50px; color:#fff; font-size:18px; text-indent:20px;"><div class="title">提示信息</div><i class="alert_close"></i></h6><div class="alertM_main alertM_tip" style="padding:20px 0;"><p>'+e.mainHTML+"</p></div></div></div></div></div>":'<div id="alert_cover"><div class="alert_cell"><div id="alertM" class="alertM_in '+e.id+'" style="'+e.style+'"><div class="alertM_bg '+("succ"http://www.xuetangx.com/static/js/appSrc/==e.type?"succ":"err")+'"><h6 class="h6"><div class="title">'+e.titleHTML+"</div>"+(e.isClose?'<i class="alert_close"></i>':"")+'</h6><div class="alertM_main">'+e.mainHTML+"</div>"+(e.isDoBtn?'<div class="alertM_bottom"><button>'+e.doHTML+"</button></div>":"")+"</div></div></div></div>";var i=d(h),j=i.find(".h6").eq(0),k=j.find(".alert_close"),l=i.find(".alertM_bottom").eq(0).find("button");i.appendTo(f),d("#alertM").on("click",function(a){a.stopPropagation()}),k.add(i).on("click",function(){var a=e.closeFn();0!=a&&b()}),l.on("click",function(){var a=e.doFn();0!=a&&b()}),c.exports.remove=b}}),require(["appCommon","alert"],function(a){a(function(){$(function(){})})}),define("appSrc/siteMap",function(){}),function(a){var b=document,c="appendChild",d="styleSheet",e=b.createElement("style");e.type="text/css",b.getElementsByTagName("head")[0][c](e),e[d]?e[d].cssText=a:e[c](b.createTextNode(a))}('#alert_cover{background-color:rgba(0,0,0,.5);width:100%;height:100%;position:fixed;text-align:center;top:0;left:0;display:table;-webkit-animation:fade .3s;-moz-animation:fade .3s;animation:fade .3s;z-index:151;-webkit-transition:background-color .3s;-moz-transition:background-color .3s;transition:background-color .3s}#alert_cover .alert_cell{display:table-cell;vertical-align:middle}#alertM{display:inline-block;background:rgba(0,0,0,.3);border-radius:1%;transition-property:opacity,transform;-webkit-transition-property:opacity,-webkit-transform;-moz-transition-property:opacity,-moz-transform;-ms-transition-property:opacity,-ms-transform;-o-transition-property:opacity,-o-transform;transition-duration:.3s;-webkit-transition-duration:.3s;-moz-transition-duration:.3s;-o-transition-duration:.3s;-ms-transition-duration:.3s;-webkit-animation:show_in .3s;-ms-animation:show_in .3s;-moz-animation:show_in .3s;-o-animation:show_in .3s;animation:show_in .3s;padding:8px;text-align:left}.alertM_out{background-color:transparent!important}.alertM_out #alertM{-webkit-transform:scale(2)!important;-moz-transform:scale(2)!important;-o-transform:scale(2)!important;-ms-transform:scale(2)!important;transform:scale(2)!important;opacity:0!important}#alertM .alertM_bg{background:#fff}#alertM .succ .alertM_tip{background:url("../../images/alert/ok.png"/*tpa=http://www.xuetangx.com/static/images/alert/ok.png*/) no-repeat 20px center}#alertM .succ .alertM_tip p{color:#333;font-size:16px;padding:0 50px 0 70px;text-align:center}#alertM .err .alertM_tip{background:url("../../images/alert/fail.png"/*tpa=http://www.xuetangx.com/static/images/alert/fail.png*/) no-repeat 20px center}#alertM .err .alertM_tip p{color:#333;font-size:16px;padding:0 50px 0 70px;text-align:center}#alertM .h6{position:relative;min-height:50px}#alertM .h6 .alert_close{position:absolute;right:8px;top:8px;display:block;width:30px;height:30px;background:url("../../images/alert/close.png"/*tpa=http://www.xuetangx.com/static/images/alert/close.png*/) no-repeat;cursor:pointer;transition:all .5s;-webkit-transition:all .5s;-o-transition:all .5s;-ms-transition:all .5s;-moz-transition:all .5s}#alertM .h6 .alert_close:hover{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}#alertM .succ .h6{margin:0;background:#4db59c}#alertM .err .h6{margin:0;background:#ff802b}#alertM .alertM_main{padding:0 40px}#alertM .alertM_bottom{padding:30px 0;text-align:center}#alertM .alertM_bottom button{display:inline-block;border:none;cursor:pointer;color:#fff;font-size:16px;padding:5px 10px;transition:all .3s;-webkit-transition:all .3s;-moz-transition:all .3s;-ms-transition:all .3s;-o-transition:all .3s}#alertM .succ .alertM_bottom button{background:#4db59c}#alertM .err .alertM_bottom button{background:#ff802b}#alertM .succ .alertM_bottom button:hover{background:#236051}#alertM .err .alertM_bottom button:hover{background:#b24b06}@-webkit-keyframes show_in{0%{-webkit-transform:scale(2);opacity:0}100%{-webkit-transform:scale(1);opacity:1}}@-moz-keyframes show_in{0%{-moz-transform:scale(2);opacity:0}100%{-moz-transform:scale(1);opacity:1}}@keyframes show_in{0%{-webkit-transform:scale(2);-moz-transform:scale(2);-ms-transform:scale(2);-o-transform:scale(2);transform:scale(2);opacity:0}100%{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes fade{0%{background-color:transparent}100%{background-color:rgba(0,0,0,.5)}}@-moz-keyframes fade{0%{background-color:transparent}100%{background-color:rgba(0,0,0,.5)}}@keyframes fade{0%{background-color:transparent}100%{background-color:rgba(0,0,0,.5)}}');