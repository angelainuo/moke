<!DOCTYPE html>


<html>
<head>
	<meta charset=utf-8"utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css"/>
	<!-- <link rel="stylesheet" type="text/css" href="static/css/reset.css"  > -->
	<title>学堂在线-最大的中文慕课(MOOC)平台</title>
	<style>
	body{
		font-size:100%;
	}
		.headerimg{
			width:100%;
			height:auto;
			margin-bottom:20px;
		}
		.inputlo{
			padding-top: 10px !important;
			padding-bottom: 10px !important;
			box-shadow: 0 0 0 60px #fff inset !important;
			text-align:center;
			outline: none;
			-webkit-appearance: none;
			-webkit-tap-highlight-color: rgba(255,255,255,0);
			line-height: 50px;
			padding: 0.5em 0.8em;
			font-size: 1em;
			height:50px;
			margin-left:5%;
			width:90%;
			margin-bottom:20px;
			border-radius: 0.2857rem;
			background: #ffffff;
			border: 1px solid rgba(39,41,43,0.15);
		}
		.inputlo2{
			padding-top: 10px !important;
			padding-bottom: 10px !important;
			box-shadow: 0 0 0 60px #fff inset !important;
			-webkit-text-fill-color: #333;
			text-align:center;
			outline: none;
			-webkit-appearance: none;
			-webkit-tap-highlight-color: rgba(255,255,255,0);
			line-height: 50px;
			padding: 0.5em 0.8em;
			font-size: 1em;
			height:50px;
			margin-left:5%;
			width:60%;
			margin-bottom:20px;
			border-radius: 0.2857rem;
			background: #ffffff;
			border: 1px solid rgba(39,41,43,0.15);

		}
		.inputlo3{
			padding-top: 10px !important;
			padding-bottom: 10px !important;
			box-shadow: 0 0 0 60px #fff inset !important;
			-webkit-text-fill-color: #333;
			text-align:center;
			outline: none;
			-webkit-appearance: none;
			-webkit-tap-highlight-color: rgba(255,255,255,0);
			line-height: 50px;
			padding: 0.5em 0.8em;
			font-size: 1em;
			height:50px;
			margin-left:5%;
			width:90%;
			margin-bottom:20px;
			border-radius: 0.2857rem;
			background: #ffffff;
			border: 1px solid rgba(39,41,43,0.15);
			position:relative;
		}
		.thirdpartlog{
				text-align:center;
				outline: none;
				line-height: 30px;
				padding: 0.5em 0.8em;
				font-size: 1em;
				height:30px;
				margin:0 auto;
				display:none;
				width:80%;
				color:white;
				margin-bottom:20px;
				border-radius: 0.2857rem;

		}
		.register_Uid_Text{
			min-height:0;
			text-align:center;
			color:#8040ff;
			margin-bottom:20px;
		}
		.thirdpartlog.weixin{
			background:#16a41b url("static/images/phone/weixinlog.png")/*tpa=https://www.xuetangx.com/static/images/phone/weixinlog.png*//*tpa=https://www.xuetangx.com/static/images/phone/weixinlog.png*/ no-repeat 18% center;
		}
		.thirdpartlog.qq{
			background:#3667c3 url("static/images/phone/qqlog.png")/*tpa=https://www.xuetangx.com/static/images/phone/qqlog.png*//*tpa=https://www.xuetangx.com/static/images/phone/qqlog.png*/ no-repeat 18% center;
		}
		.thirdpartlog.weibo{
			background:#ce2432 url("static/images/phone/weibolog.png")/*tpa=https://www.xuetangx.com/static/images/phone/weibolog.png*//*tpa=https://www.xuetangx.com/static/images/phone/weibolog.png*/ no-repeat 18% center;
		}
			.ssbbmit12{
				background:#8040ff;
				color:white;
				border-radius: 0.2857rem;
				text-align:center;
				height:50px;

				font-weight:bold;
				font-size:1em;
				line-height:40px;
				margin-left:5%;
				width:90%;
			}
			.llbel{
				margin:0px 0px 20px 5%;
				font-size:0.8em;
				width:90%;
			}
			.llbel a{
				color:blue;
				float:right;
				display:block;
				margin-bottom:20px;
			}
			.agreement {
				text-align: center;
				padding-top: 20px;
				margin-bottom:50px;
				font-size:0.8em;
				}
				.agreement a{
					color:blue;

				}
				#fuck2{
					position:relative;
				}
				.phoneCode{
					background: #8040ff;
					color:white;
					font-size:1em;
					width:28%;
					line-height:50px;
					text-align:center;
					margin-right:5%;
					border-radius: 0.2857rem;
					float:right;
					height:50px;
				}
				.CodeImg{
					display: block;
					position: absolute;
					right: 7%;
					top: 5px;
					width: 68px;
					height: 40px;
				}
				.phoneCode.disble{
					background: #dcddde;
					color: rgba(0,0,0,0.4);
					cursor: default;
					opacity: .3;
				}
				.error{
					color:red;
					text-align:center;
					margin:0px 5% 30px;
					font-size:1em;
					height:30px;
				}
				.g_modal_footer{
					text-align: center;
					width: 80%;
					display:none;
					height:40px;
					margin: 0 auto;
					left: 40px;
					border-bottom: 1px dotted #c1c1c1;
					padding: 10px 0 25px;
				}
				.g_modal_footer .g_modal_party_title{
					float: left;
					line-height: 38px;
					font-size: 16px;
					color: #4b4b4b;
				}
				.g_modal_footer .g_modal_party{
					float:right;
				}
				.g_modal_footer .g_modal_party .login_vendor{
					display: inline-block;
					width: 38px;
					height: 38px;
					font-family: "xt";
					-webkit-font-smoothing: antialiased;
					-webkit-text-stroke-width: 0.2px;
					font-smoothing: antialiased;
					text-stroke-width: 0.2px;
					font-size: 1.875rem;
					border-radius: 50%;
					line-height: 38px;
					margin-left: 20px;
				}
				.g_modal_footer .g_modal_party .login_vendor a{
					display: block;
					width: 38px;
					height: 38px;
					border: 1px solid #ce2432;
					border-radius: 25px;
					color: #ce2432;
				}
				.g_modal_footer .g_modal_party .login_vendor:nth-of-type(2) a{
					border: 1px solid #3498db;
					border-radius: 25px;
					color: #3498db;
				}
				header{
			display:none;
		}
		#footer_bootstrap{
			display:none;
		}
				@media screen and (min-width: 1024px) {
		    article{
		    	width:520px;
		    	margin:0 auto;
		    }
		    .error{
		    	margin-bottom:10px!important;
		    }
		    header{
		    	display:block;
		    	padding:5px 0;
		    	background:rgba(51,51,51,0.96);
		    }
		    header .logo{
		    	width:1024px;
		    	margin:0 auto;
		    }
		    header .logo img{
		    	display:block;
		    }
		    .headerimg{
		    	display:none;
		    }
		    article{
		    	margin-top:5%;
		    	padding-bottom:20px;
		    }
		    #footer_bootstrap{
		    	display:block;
		    }
		    .ssbbmit12{
		    	cursor:pointer;
		    }
		    ::-webkit-input-placeholder {
		　　color: #D6D0CA !important;
		　　}
		　　input:-moz-placeholder {
		　　color: #D6D0CA !important;
		　　}
		　　input::-moz-placeholder {
		　　     color: #D6D0CA !important;
		　　}
		　　input:-ms-input-placeholder {
			　　color: #D6D0CA !important;
			}
			.agreement_text{
				display:none;
			}
		}
	</style>
	<script>window.register_type = 'None'</script>
</head>
<body>

<header>
	<div class="logo">
	<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIgAAAAmCAYAAAAfrNPMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjFDM0U0OTAwMjU0MTExRTU5MDc5OTAwQUNFNThFNjk0IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjFDM0U0OTAxMjU0MTExRTU5MDc5OTAwQUNFNThFNjk0Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjM0QUU1RjUyNTMzMTFFNTkwNzk5MDBBQ0U1OEU2OTQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjM0QUU1RjYyNTMzMTFFNTkwNzk5MDBBQ0U1OEU2OTQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz630kE8AAAVo0lEQVR42uxcCVhV1dpe5zCLgMwOqKmUFuINxdQUNcQo/UnT8i+tm0OpmXavc/rfvN4sK/NxzImM8te6ZWWampWBoqLeAs0QRZxFBgVBmQ9w4L7f7lu02Z19OAdturf1PN+zD2uveX3rW+83bAy1tbUmIcRVUAboO9BRppMGg6FG/MwJ/RvxuBN0t4ruALUAeWMMpeKP9OulWv1UANoK+guo4y3usyNoMmgL92MxXb9+3fuPHfqNMEhNTU1prfWUDloACmtkP525fqq1TjCOMvk7MzPT548d+o0wyOnTp/86derUkG+++WZUTk7Oa2VlZQnYrHKdfTwKmgRq1kDbnqAJoBQdZqhAP4nUH/U7e/bsUBqHPQyCYk1B3zG9oMofC7rA1FOV/zaX/dzG9Rmpar+TKv9zbvuAKi9IVXZCI/djkWrcLW/B/k7gtg5aeCfnkNwgg0Ccj8efhAdcQB4g33vvvbftwYMHH83Ly1tbXV2dZWGP6bSvBt2uabM96E3QT6QStYP2Yg8dOjSif//+t1E/3B/1a6Rx2ClBDGazOYfKV1VV7ZaZRUVFs1Rzi5L5KJtLeRUVFV/bssC5ubkxsp3y8vKRMr+ysvI45aG9SzIPbQ6SZfPz859oxGY64NDkUX20n4Ysh5tlEIxPOZxYj7e07zDefXJbNOMYwoyz1VFTh0CpiUmAOQrAJLn4+aW7u/v8bdu2hYeFhT3crFmzR4xGoyfy3UDPgiaisf4AlNRhV/z9LTOb7LC4sLBwS2pq6rbBgwcfKi0tLeM+Kul1I0/GADwe583KdnR0dEH/7ZA/mvPCZVk3N7doOt3EhNgAZ1AhL8x6LvIq6p7VtP83PG4D05GkK6Q8BweHh5DvrCxUTY2Unk1lnyjbT5b19PQcSGtCPIa2/6aVeng8YmFaYSjrx22dRrknbViKb1DnhM4aheBB+yGysrI+5jypCFAfHlzUgTAhniXMVGPogX26pJUgDSVaHK+YmJh2uAqmmUymNFm/uLhYmTCdVpmH9yfPnDkza+jQoR2oHte3mmyVIGCAd2pvUVJLhrqTUlNz/RY1X6ZtG/21u1VjxyZP01sjSOs4lkYn5dqj/Eu2to31H+lo58GlE1+5ffv2ItDa5OTkc926dfuUuc6gflKCxJgTHh7+Fa1JYyWFXgJ3Z0KSKb+zs7Nfw2JU2FO/adOmt/n4+CgnH9KtwMLiXnFycvLCgl4ERnrH3vG1aNFiDOq3xXr8pG0cruteXl7z9caDg3XkypUrn9nSDzDcYR3pQWaCkXxNxvLeibNnz+6FRDXTb19f3764GSLpd0FBQVxJScklSEkHrOs9uCL3DR8+fKu9EqReunbt2kBV/Ue1efTb3jZtlSCY0ARZbs2aNa2Q5W4PZWRkDFb1c4+2fWxSEkvBJHvbJpL1CatYwk3qslFRUcSIxxm4l2/YsCHMjr6cdLDHaon5cJjb4OdQIsCGurXCtfOcXIPLly//mfPp+vPh38JR/E7Tt99++xVOnXKtPfXUU7dNnDjxUXvqQ7qtOHbs2DiWIOcsvF8IXBNIkoQ0NmRNY9z0nZVmO/PCrklJSVHqY6MKLR1wEoLyj927d7+MRwif9iWYz/e0xywJ2uGxlItuB9542wZ8RrhjPGOP5YMGDaLNJxNDIaRUW9k3xnZG1oHUaKEek54W87uRICqNywXXzdP23t0nT54k7cmVyaiDt+idM6TBJnvaRvmtqvouDWzmCBIcClgpK0sIDg721FylXWW70DretGUNNTijQv64evXqUjD842wA3YrfX8p3YJYLMl9Nv1sJotK4xM6dO3e5uLjcr1cQOKk/MMFEEseESaHyfXn+/PkSWd8K3pKgMtfZ2VlRkdeuXTtUr8L48eM3AnfcDgbJU9e3ZmPBYyNdOTSuefPmjQOoL9JgDGOTJk3kxtuk9qJ/CK+6rXXgvqogqVYOGzZsLGDGENbKfjxtRiNJlrbatupaIUCFRjwgwop/RaOdOxakjb31RowYkcP+pHppz549XhEREUuxEE+wSL144sSJuV26dNlpywaq1kbZIayNw7hx49x1RZrR6MTlqm2Y60o8JteBEoPBbfHixRdZBQ5XbXZH1Thasuos02XUO6Nte8qUKUtR9v979uzpM3r06D0oI/Ly8laMGjXqwpgxY5bj3SZZduXKlR+C+btgbbImTZoU1ZAvhkTdKdAH7Csh87jh57hiqF1unyyy77Epv0ajZvncJMMdJKYgoHbx4sV5PXr0CGKxb5/qVll5wJ4rBpjmJVss2KThgAFOyHrcV5it/WBeK/SMh8SvALzbuFzu3LlzA9XvJEGabpTtQXMKVL+D5IxwZFFtVFW+g+l/OS8fdeMJIIF2gRsLbmLDyPn2IOh/QMQ8ftaMgLh/q6y0RerZ8w102QunmmwaBS1btux++PDhrjrlpmJe5/UaSU9PX968eXMCp7SpiuQJCAh4Em37o+1i3O2KldLDw+NPUBWPQxI0iBUAHl+dPn3623FxcW/iBN8p80+dOpXv5+e3RP6NqzPA29v7CZYmR8F8e1TXz0Er/Ef79xC3OXfhwoVXVQC5VoVx/oVxP8FqL7kktrFrgtTwaLo3O8XHx8fg7psJ1XEjBvEdJl2pw7RmUALoGfLD2CJB8PBiv0g8MbOOT6aS+qX+aRwJCQkPQdzdyQyrZwd5+lYZmwgINrCfBDQ9mcj66CFN7TidmTKP1UMPa+NWmz6oHE7p52oJwodVtueRnJzcR7XG69Tv9AAwuT6wpjcY2KZkZ2dHkOWZAXE9Y2VaWlqYyuhGwPQLta/MMTY2NgNEal4869TOAHV0H3bt1KlTBNSfXuDi7jhhjjz4+5jeBGenW1sBvH8Dj04WJlKNgR/FhPefPn364AsvvJAM/byMcQFJjWomXePa6tWrP3Nzc0u11v9zzz13WJ689evXP6tXDpt0yoqk2o9HqM4GE9AjXJBp4f0lrFkXK8MrsQK+63Bg27Zt6wyA6KveOysW1CcBUj1ZAnUFQN8n3924ccNHjb9CQkJSIRWvQRr6os4QnrMJkmojAPkq+mMpeUFBD7OTzcAnwJm51G/s2LEdAe4m4b7arhcWYEmCaKREKcTvTqiXU6g9vl48uB/lxNXGinagh0EzQctBTtacdIzQdUmldiY1UNaapNpK0kJL0tNN0s/SezCdTc5ACxKkXgK4DFe5M9bYaCqYTZKNTOwkQXAVxWPvPsXevHvs2DF3ZgJn8vWQJ1e9T3RwX3nllbvZNeJgKWCIRFMiaCGI/CpNWHKQY8578ODB7WmT0el+NajUYZAalEvKyMh4nv0xPtyOEZvvBooCvQzaA7oOqpVkXidybBTVup5RDYM0NhFu8teS9EPxFeNvgXx/LQZhYx0BzgA+iL48Dy/sB4Uk/J0wqToGR33wIVFepVANPUsqvejLNIdEPotZMv58QmBu586d5AV9f9myZe1Hjhz5JMDNSCxUJTu5qsnRBUZ5b/PmzRsnT558hn0x5dh4staNYE9mH2tGpLJKsa8x/huM9a9kGAQFqfJMjWiHrsbHdI0wNTX+rNpSzMtzVpr6AGuWbke/8zUm87qYEFdX13Dte6Qv0P5hTRsReDygKUfjjWTGMfAc8gGw4wAnNgwZMuT2Pn36vIe23DEniqt5XokTqYsvBEDMycl5A9fAV6QW6QV8gQ6BxpHNhMWzZ+fOnVurNts5ODg4iBnNAUzhDhoD2geqUUsJlbS4rs3LfkM0KuAGk76oHTTmNd3ednDSht8SVy7asUeC2Ns+roTpFgxlCxqocwTKwIzIyMi2fM3TDeG8Zs2ae3ATbAZTFsmyBjkwcNKkwMDATQxUnQBQ2kdHR/f19/fvCzAYAa7ysACy/glaAa5L0552bPKdrIaO4kGoOBzrDwmRWyTiM66ItPs6itmuTqKfusyBM6JDxCJxzt6NTUxMHASwRdeYCAoK6gzwm/j4449/a9HPYCVBs2uFE9vzZo1/2IzDAwYMyNJ7D42tN4Bkc/rdu3fvT5KSkobb0z4YLDUqKipD02YI2uykLYv5uGF90qdNm3aBzoAFLzsdeA+o2U2WLl3aoU2bNv51DAJ0OwEaS6ymsOJLgOhpunLlyvs6dOgQ07Rp0wdIDGn63gWagPxMvkbILjBYwxTlJSbxxemrYsuUf4r9B8+K4sSZwjcimK6t+lpClVlkOD8r7pIOKzuTswq7OLI5vboR7Rj1PKV2pirWTPSSo/gxcszUkO/GktJiYZ0cdOCDgcdjy7oqWqs1X4yZT13pgQMHCsPCwj7E788AUr2XL18+rHXr1k85Ozt35rIPAjF3xzOzokrcCWlQxxyV1SIts1C8M2eL2PZRirjGXGsCIxFoJaNPK4VBy8WHnq5iEJjFA9IlsZHMITQmdNNNbCxdpy7MKMVgfrP4eVK1hoFNt6BN802sn3pcFr2YQsc9Tfp4IQDqeWCM1RBhkbjHpqpEnQODyzoP0JmrYrrLJHFf8P+JNWAOCukj13cFmIMYa79kDlw1i1F2HTEH/V1Urthkfgvpex5zqPgvTY3x5tby/VXm7u5+0qqu5SIIm+RpsAktdoI0s1+4Jua0myNWmVaLv0ju//qk8r4htE/q9wxm8o0UU4o8MhkHgzbzVUOe13S8+0CjIbyGvAq2+cSw2Z+uAYq3+JrLjibXADm6ANrIXxRH2gKeMexMC2CjVQLyv+A6rop5+oc40ACWZimE1VCmSjX2UNbkSKMgqUofqm0D3c5aHp3e13mtZ/E+LUYbZRbWgdaRQjXIyUn78S7K3WC3xjOg9iByI7yN/Hyu489rE8zqL5kU3mfN737OOwKKu/XxIEvFQKmJ0G8tc4Dy+L355EuKN1PBM1VrxV7KL18lvrHR/kFm6ljW4z/D409klsBmpi5ZssQN78ax+Xi71jEpP8hiIyHp/SfJX8OvJ7FrfZe08+BdCbSRKWylPIC/szkCzMR1xvK7h6XphduU2sA21RiI8cwUvY5rmdwWlRx5FkbjRr0TPCb6YO15jpmNtbQmxBwcfa6MkaZbXFwcgqcP6Ay3c0oGjYECWXVeLutgHunsQqnm8mdV3ya9/4sySM06cUK+K1imxEG4MeO44Z2J6yyytf/58+cHYVNyeLLnaZJ79+6lPg0y8IjUSC2DkJeYrcb0/l+QhIFxcXE9eOOukZGNjHpkBKMyO3bsiJKMPGzYsCA++f5paWkT2FiWxBbMR+nvkpISkigBGzZs6KXSLt3JNED2LtpIaIkkhXxlH2QQo3ED7z34w3RqCojB8P7SrFmzLH4fwwYt6i8eCkRrtlA7Iv8l9iqTVhqAfXqLN38x1SODG3tv6e8A8nSz+kvfxwTQfKVG/IsyyP5Z4gHzOnFNShDQKJYe98s6p18W99sxBMPx48efUkVMrZCaR0MMghM7WjrASOSbTKbhqhPfmiWCevOUVFRU5MuuiV0of1kddyoZRNWno1pq4bTeL5lSai4W+nDGur4t66WkpIzQk6hoj2xStefOnXtCpXlR/l7Kv3DhgrK+wIpDWZomqxkEjLVQwYC5uY9pLM5Osn/jLwl4IhaJhB3fi0dqakUBT+ZdMMUAqMDRrAqXvvGVOGAPHsJik8lf0VycnJyushpni/1AuWa8vLzoYCSj7gLkHS4oKHjr7NmzJh3c4+fh4UFu/39gE1OysrIacuvXaSfYFLoSW0h3iRUtoxInWa5BbWBgYKaeRZmNlRQRX6By9An5xWOTJk2UfE9Pz3x+72GpHVdXV7MF1VzU02KgsgbT3fUz80jlkFXiADEJmKGYwdfHDkahGIfKq8TB2H2izJ4Gu3Xr9ibAFwHS6mbNms3BHOqFzRkIZVp2wilfxNHp9/Pza280GvvjqnnM19d3JrS0fE0bDizSCdgFoe6XqPOasB7A/FP3bUnJFUWsODq2tQK+fVu0aPEaM5ehZcuWq/jKk+/pqnLk8SgGODDt3RrJcpkZpwMzSnuWVtmNMQYpyc3NbSbdEOj8In91PwMUrh7cLUpVxCRHLomJ/Hczo+GHWMhSk9hjp79kNDbvQWzYLtynq2gt6FNQlhCZzPi9kRfN/om6FBsbG08xpmTLyc/Pn08BSCAK6JUaDW2AsqFgPMIag3Cnl/Fa3UUbiZNp138fWLZsWRL1CQah/24wk6LPKdRQ4ypYiTzCBfMh8lPwmz6BmMLzpQh3GtMhvuI/ZZf+bLybSloa2W5w1X7C+QR0R2C8yjfLmOeWxvguqhow99/gCGfSCprfpBbTHDQa9CGoUOt/Sf37j7GYNjBHKwqKIcS9adOm0BkzZgTQCeHhPNKrVy83jOkDbRgjJMaZ9PR0JagnISEhGn9fqBcRZTZ/L/s4f/78sxLdQ+wvAwj0gBTYYeHLvF06GERowicNANEPEvDU+Ldq2Ws7lLHAsY4dO3okJiZGMmAlDaU1+g79ARNXKy4ISJcmBETVUYiYT0/Kp++p1XMnX1tISEhTSxhEjlvt9Zb1HGNiYjpOnDgRUjW4I8RmKMRSGDgvRMXZ5HQbwkR1CGAROv4InTa8kbGKi5+AFn1HG2FZXRMVZZXiQOg/bBfZAG8lR44cicrOzjZBm6FvU2uAIyJbtWrlhcXNOXToUDlO/sTZs2e/MnDgwLaQMqajR4/moWw2+5FqIyMjE/z9/XuuWLGiE7SAIJywa4MGDar70r1du3bvvvjiiwfDw8MDAPTSoemUgP4MZmw5YMCANljQSvRz5fXXX1dEPd7FQyL1ZOOaklatWtWTTy9Fq9f2798/HuvcY968ea2BYcoXLlyYiOvNG4xZsW/fvpTU1NSeFHYIKu7Xr9/+RYsWheMKcezevXsRxpEDKdQrIyNDaR9zL/P29p6MMku6du3acvfu3RcxFgp+qsS8ZmGua3v37t0qKSkpC7/P87zF+vXrX8davQvGqzduCp/UjlsGBzkyKRFlWGRXNNIlNDS0j4+PT2+AmB5gmJ9EhYFZMpB/F/tyRmBDPiKp4eMuvuKNPwEEcIcFg5y5okokF5SKPd9nif2T3xepZ/MUs7498a4y+LZW5eswcr42z5HzzDp+EekPqbEAco38zqxp00Fl1q6xMiZ1OTphFJPbBie9GFfNQDDHaHK7L1iwoDU2sdLC+B1UALSW/67VzEMGPlVr8uXcLeWr+7E2bt1EzEIiyZeChI4dO/Y0VLyPwenXrUaUqa4YNdWsE6VFK8THx+eLZ8b3VcIQ/bh9J/FflHA9fK250gogCR/7vc/LwJ5d7z59+rQ5fvz4M7i/vlYHIeswiLlslUhMf0k8/2i3OrOumx0+oP+4FB0d3WLz5s2RuE6G40oYzDEZLv9JczTwJvtAJN5NQUYUYARQRD4KkbdE9DOvE1dzF4sli4YrPglfLm8QfyShutKdRf3QhN9k+rcAAwB+9kTDpSUnTAAAAABJRU5ErkJggg==" />
	</div>
</header>
<article>
<img class="headerimg" src="static/images/new_header/register_header_daytime.b861bd5c9ec3.gif"  >

<a data-click="onClick" data-block="REGISTER" data-description="TOLOGIN#WEIXIN" href="http://bad_redirect" class="thirdpartlog weixin">&nbsp&nbsp&nbsp&nbsp  使用微信一键登录</a>
<a data-click="onClick" data-block="REGISTER" data-description="TOLOGIN#QQ" href="http://bad_redirect" class="thirdpartlog qq">&nbsp&nbsp&nbsp&nbsp  使用QQ一键登录</a>
<a data-click="onClick" data-block="REGISTER" data-description="TOLOGIN#WEIBO" href="http://bad_redirect" class="thirdpartlog weibo">&nbsp&nbsp&nbsp&nbsp  使用微博一键登录</a>

<div class="g_modal_footer">
			<p class="g_modal_party_title">第三方账号登录</p>
			<div class="g_modal_party">
				<div class="login_vendor"><a href="http://bad_redirect" id="loginWeibo" data-url="/login/weibo/" title="新浪微博" data-click="onClick" data-block="LOGIN" data-description="TOLOGIN#WEIBO">r</a></div>
				<div class="login_vendor"><a href="http://bad_redirect" id="loginQq" data-url="/login/qq/" title="QQ" data-click="onClick" data-block="LOGIN" data-description="TOLOGIN#QQ">p</a></div>
			</div>
		</div>

<div id="registerUidText" class="register_Uid_Text"></div>
<div class="llbel"><label>注册学堂在线账号</label><a data-click="onClick" data-block="REGISTER" data-description="1" href="account_login.htm"   id="to-login">已有账号，立即登录</a></div>
<form id="ssbbmit12">
<input id="acount" class="inputlo" data-click="onClick" data-block="REGISTER" data-description="2" placeholder="请输入您的邮箱或手机号"  autocomplete="off" />
<input id="name" class="inputlo" data-click="onClick" data-block="REGISTER" data-description="3" maxlength=16 placeholder="起个霸气的用户名，最多16个字符" autocomplete="off" />
<input id="password" class="inputlo" data-click="onClick" data-block="REGISTER" data-description="4" type="type" placeholder="填写密码"  autocomplete="off" />

<div style="display:none;" id="fuck2">
	<input data-click="onClick" data-description="CAPTCHA#1" id="phoneCode2"  class="inputlo3" data-block="REGISTER" placeholder="填写图片验证码"/>
	<img src="sms_validate_image/-7013900.gif"   class="CodeImg" data-phonecode="" name="validate" data-click="onClick" data-block="REGISTER" data-description="CAPTCHA"/>
</div>
<div style="display:none;" id="fuck">
	<input id="phoneCode" maxlength=8 data-click="onClick" data-block="REGISTER" data-description="TOVERCODE#1" class="inputlo2" placeholder="填写验证码"/>
	<div class="phoneCode" data-phonecode="/phone/validate" name="validate" data-click="onClick" data-block="REGISTER" data-description="TOVERCODE">获取验证码</div>
</div>

<div class="error"></div>

<input data-block="REGISTER" type="submit" data-description="SUBMIT" data-url="/unify_create_account" class="ssbbmit12" value="注册">
</form>
<p class="agreement"><span class="agreement_text">用户注册即代表同意学堂在线<a href="tos.htm"   target="_blank" data-click="onClick" data-block="REGISTER" data-element="6#1">《服务条款》</a>和</span><a href="tos.htm#honor"   target="_blank" data-click="onClick" data-block="REGISTER" data-element="6#2">《荣誉制度》</a></p>
</article>
<footer id="footer_bootstrap">
    <div class="copyright wrap">
        <div class="cf">
            <div class="text fl">
                <p>Copyright  2013-2014 北京慕华信息科技有限公司</p>
                <p><a href="javascript:if(confirm('http://www.miibeian.gov.cn/'))window.location='http://www.miibeian.gov.cn/'"   title="京ICP备14019655号" target="_blank">京ICP备14019655号</a> | 京公网安备 11010802017721</p>
            </div>
            <div class="edx_logo cf fr">
                <a href="javascript:if(confirm('http://openedx.org/'))window.location='http://openedx.org/'"   target="_blank"><img src="static/images/edx_logo.262fca70a49b.png"  ></a>
            </div>
        </div>
    </div>
</footer>
<script id="requirejs" src="static/js/lib/require.2d213b58c463.js"   ></script>

    <script src="static/xuetangx/js/mobileRegist.05ee8711bc01.js"  ></script>
    <script src="static/js/appSrc/analyticsmobile.5a80ba06ca14.js"  ></script>

</body>
</html>
