/**
 * Created by mengxiangkun on 16/8/23.
 */
// JavaScript Document
//alert("fuck");
require(['appCommon','jquery'],function (appCommon) {

    appCommon(function () {
        $(document).ready(function(){


            $("#bodyPart ul li").mouseover(function(){
                $(this).css("background","#F6F6F6");
                $(this).css("cursor","pointer");
                $("span",this).css("background","#FF6600");
                $("span",this).css("color","#fff");
            })

            $("#bodyPart ul li").mouseout(function(){
                $(this).css("background","");
                $("span",this).css("background","");
                $("span",this).css("color","#FF6600");
            })

            /*$("ul li:eq(0)").click(function(){
             //alert("jump")
             $("ul a").click()
             })	*/
        })
    })
});

