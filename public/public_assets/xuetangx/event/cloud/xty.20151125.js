define(['appCommon'], function(){

	var logoList = [
		// 高校
		[
			{"name": "清华", "url": "partner/logo-list_03.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_03.jpg*/},
			{"name": "复旦", "url": "partner/logo-list_07.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_07.jpg*/},
			{"name": "南京大学", "url": "partner/logo-list_09.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_09.jpg*/},
			{"name": "西安交大", "url": "partner/logo-list_11.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_11.jpg*/},
			{"name": "中国科大", "url": "partner/logo-list_18.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_18.jpg*/},
			{"name": "哈工大", "url": "partner/logo-list_19.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_19.jpg*/},
			{"name": "南开大学", "url": "partner/logo-list_149.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_149.jpg*/},
			{"name": "中南大学", "url": "partner/logo-list_116.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_116.jpg*/},
			{"name": "山东大学", "url": "partner/logo-list_115.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_115.jpg*/},
			{"name": "解放军信息工程大学", "url": "partner/logo-list_92.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_92.jpg*/},
			{"name": "东南大学", "url": "partner/logo-list_20.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_20.jpg*/},
			{"name": "华南理工", "url": "partner/logo-list_21.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_21.jpg*/},
			{"name": "北京理工", "url": "partner/logo-list_121.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_121.jpg*/},
			{"name": "浙江大学管理学院", "url": "../../images/d800f0a4c0fc8c7572e8cb27c81d1ebe.zhedaguanli.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/d800f0a4c0fc8c7572e8cb27c81d1ebe.zhedaguanli.jpg*/},
			{"name": "重庆大学", "url": "partner/logo-list_93.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_93.jpg*/},
			{"name": "中国农业大学", "url": "partner/logo-list_137.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_137.jpg*/},
			{"name": "兰州大学", "url": "partner/logo-list_22.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_22.jpg*/},
			{"name": "东北大学", "url": "partner/logo-list_28.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_28.jpg*/},
			{"name": "北京科技大学", "url": "partner/logo-list_120.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_120.jpg*/},
			{"name": "云南大学", "url": "partner/logo-list_29.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_29.jpg*/},
			{"name": "苏州大学", "url": "partner/logo-list_30.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_30.jpg*/},
			{"name": "南京航空航天大学", "url": "partner/logo-list_31.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_31.jpg*/},
			{"name": "中国地质大学", "url": "partner/logo-list_136.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_136.jpg*/},
			{"name": "中国矿业大学", "url": "partner/logo-list_32.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_32.jpg*/},
			{"name": "中南财经政法大学", "url": "../../images/97a97234814fe3c011043bd926a461bd.zhongnan.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/97a97234814fe3c011043bd926a461bd.zhongnan.jpg*/},
			{"name": "北京舞蹈学院", "url": "partner/logo-list_117.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_117.jpg*/},
			{"name": "四川农业大学", "url": "partner/logo-list_78.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_78.jpg*/},
			{"name": "河北工业大学", "url": "partner/logo-list_91.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_91.jpg*/},
			{"name": "福州大学", "url": "partner/logo-list_41.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_41.jpg*/},
			{"name": "华北电力大学 ", "url": "partner/logo-list_108.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_108.jpg*/},
			{"name": "燕山大学 ", "url": "partner/logo-list_168.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_168.jpg*/},
			{"name": "首都医科大学 ", "url": "../../images/8f2c5f8e4720a7ce6cf0c2ad2de95b9e.shouyike.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/8f2c5f8e4720a7ce6cf0c2ad2de95b9e.shouyike.jpg*/},
	        {"name": "河北大学 ", "url": "partner/logo-list_130.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_130.jpg*/},
			{"name": "石河子大学 ", "url": "partner/logo-list_167.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_167.jpg*/},
	        {"name": "扬州大学 ", "url": "partner/logo-list_134.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_134.jpg*/},
			{"name": "海南大学", "url": "partner/logo-list_103.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_103.jpg*/},
			{"name": "贵州大学", "url": "partner/logo-list_40.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_40.jpg*/},
			{"name": "青海大学", "url": "partner/logo-list_39.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_39.jpg*/},
			{"name": "江西财经大学", "url": "partner/logo-list_38.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_38.jpg*/},
			{"name": "兰州财经大学", "url": "partner/logo-list_166.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_166.jpg*/},
	        {"name": "西南石油大学", "url": "partner/logo-list_80.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_80.jpg*/},
	        {"name": "浙江理工大学", "url": "../../images/9e8ff11a472b9030f6be11be32dc6e3e.zhejiangligong.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/9e8ff11a472b9030f6be11be32dc6e3e.zhejiangligong.jpg*/},
			{"name": "四川师范大学", "url": "partner/logo-list_79.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_79.jpg*/},
			{"name": "浙江工商大学", "url": "partner/logo-list_112.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_112.jpg*/},
	        {"name": "云南民族大学", "url": "../../images/cad00e5f8eef1efa4ed9c7bacdd06203.yunnanda.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/cad00e5f8eef1efa4ed9c7bacdd06203.yunnanda.jpg*/},
			{"name": "广西民族大学", "url": "partner/logo-list_127.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_127.jpg*/},
			{"name": "西南科技大学", "url": "partner/logo-list_90.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_90.jpg*/},
			{"name": "湖北工业大学", "url": "../../images/0d5dedcb912af7dc7be326573a37df3a.hubei.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/0d5dedcb912af7dc7be326573a37df3a.hubei.jpg*/},
			{"name": "内蒙古师范大学", "url": "partner/logo-list_71.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_71.jpg*/},
			{"name": "北京联合大学", "url": "partner/logo-list_88.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_88.jpg*/},
			{"name": "贵州师范大学", "url": "partner/logo-list_113.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_113.jpg*/},
			{"name": "河北科技大学", "url": "partner/logo-list_131.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_131.jpg*/},
			{"name": "浙江农林大学", "url": "../../images/8a728ad923aae6f65af31c31df99b5e7.zhejiangnongye.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/8a728ad923aae6f65af31c31df99b5e7.zhejiangnongye.jpg*/},
			{"name": "山东理工大学", "url": "partner/logo-list_142.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_142.jpg*/},
			{"name": "山西农业大学", "url": "partner/logo-list_151.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_151.jpg*/},
			{"name": "太原科技大学", "url": "partner/logo-list_153.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_153.jpg*/},
			{"name": "齐鲁工业大学", "url": "partner/logo-list_42.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_42.jpg*/},
			{"name": "湖北经济学院", "url": "../../images/ab3b0f6f077dc908cb47166bf201c75b.hubeijingji.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/ab3b0f6f077dc908cb47166bf201c75b.hubeijingji.jpg*/},
			{"name": "浙江外国语学院", "url": "partner/logo-list_163.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_163.jpg*/},
	        {"name": "浙江科技学院", "url": "partner/logo-list_164.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_164.jpg*/},
	        {"name": "湖北文理学院", "url": "partner/logo-list_154.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_154.jpg*/},
			{"name": "成都学院", "url": "partner/logo-list_48.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_48.jpg*/},
			{"name": "邯郸学院", "url": "partner/logo-list_128.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_128.jpg*/},
			{"name": "贵州理工学院", "url": "partner/logo-list_69.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_69.jpg*/},
			{"name": "保定学院", "url": "partner/logo-list_107.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_107.jpg*/},
			{"name": "汉口学院", "url": "partner/logo-list_106.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_106.jpg*/},
			{"name": "武昌理工学院", "url": "../../images/8a8df6d13830681e5703fef8cbe3c777.wuchangligong.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/8a8df6d13830681e5703fef8cbe3c777.wuchangligong.jpg*/},
			{"name": "四川旅游学院", "url": "partner/logo-list_81.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_81.jpg*/},
			{"name": "河北传媒学院", "url": "partner/logo-list_129.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_129.jpg*/},
			{"name": "三亚学院", "url": "partner/logo-list_49.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_49.jpg*/},
			{"name": "吉林大学继续教育学院", "url": "partner/logo-list_109.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_109.jpg*/},
			{"name": "广西科技大学继续教育学院", "url": "partner/logo-list_126.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_126.jpg*/},
			{"name": "芜湖职业技术学院", "url": "partner/logo-list_132.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_132.jpg*/},
			{"name": "温州大学瓯江学院", "url": "partner/logo-list_50.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_50.jpg*/},
			{"name": "成都东软学院", "url": "partner/logo-list_89.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_89.jpg*/},
			{"name": "南宁学院高博软件学院", "url": "partner/logo-list_58.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_58.jpg*/},
	        {"name": "重庆广播电视大学", "url": "partner/logo-list_122.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_122.jpg*/},
			{"name": "四川信息职业技术学院", "url": "../../images/0cc3b4444fba352a187680c841b9c95e.wuhanxinxi.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/0cc3b4444fba352a187680c841b9c95e.wuhanxinxi.jpg*/},
			{"name": "武汉信息传播职业技术学院", "url": "partner/logo-list_82.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_82.jpg*/},
			{"name": "武汉职业技术学院", "url": "partner/logo-list_152.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_152.jpg*/},
			{"name": "江苏工程职业技术学院", "url": "../../images/1830ebe69eace2c52be9c9d19b4ce6fa.jiangsugongcheng.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/1830ebe69eace2c52be9c9d19b4ce6fa.jiangsugongcheng.jpg*/},
			{"name": "四川长江职业技术学院", "url": "partner/logo-list_162.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_162.jpg*/},
	        {"name": "山东商业职业技术学院", "url": "partner/logo-list_104.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_104.jpg*/},
			{"name": "绵阳职业技术学院", "url": "partner/logo-list_114.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_114.jpg*/},
			{"name": "内江职业技术学院", "url": "partner/logo-list_123.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_123.jpg*/},
			{"name": "浙江工商职业技术学院", "url": "../../images/850e348a7f112528ac84c46753f6ebcb.zhejianggongshang.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/850e348a7f112528ac84c46753f6ebcb.zhejianggongshang.jpg*/},
			{"name": "石家庄工商职业学院", "url": "../../images/d3176a3b630640236f3efde9b33f986f.shijiazhuang.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/d3176a3b630640236f3efde9b33f986f.shijiazhuang.jpg*/},
			{"name": "四川希望汽车职业学院 ", "url": "partner/logo-list_110.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_110.jpg*/},
			{"name": "重庆公共运输职业学院 ", "url": "../../images/23f48b4ad5078f4a5e58d3a30a70f7e2.chongqinggonggong.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/23f48b4ad5078f4a5e58d3a30a70f7e2.chongqinggonggong.jpg*/},
			{"name": "西安铁路职业技术学院 ", "url": "partner/logo-list_161.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_161.jpg*/}
		],

		// 公司机构
		[
			{"name": "IBM中国研究院", "url": "partner/logo-list_160.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_160.jpg*/},
			{"name": "纽约金融学院", "url": "../../images/4952da131faad923fbb2ada5235c1f84.niuyue.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/4952da131faad923fbb2ada5235c1f84.niuyue.jpg*/},
	        {"name": "中文在线", "url": "partner/logo-list_138.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_138.jpg*/},
			{"name": "中国创业学院", "url": "partner/logo-list_139.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_139.jpg*/},
			{"name": "国家节能中心", "url": "partner/logo-list_105.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_105.jpg*/},
			{"name": "中国重汽集团", "url": "partner/logo-list_148.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_148.jpg*/},
			{"name": "邢台经济开发区", "url": "partner/logo-list_155.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_155.jpg*/},
	        {"name": "上海青浦消防", "url": "partner/logo-list_144.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_144.jpg*/},
			{"name": "立课", "url": "partner/logo-list_05.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_05.jpg*/},
			{"name": "清华同方", "url": "partner/logo-list_52.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_52.jpg*/},
			{"name": "华北计算技术研究所", "url": "partner/logo-list_72.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_72.jpg*/},
			{"name": "昆明医科大学第一附属医院", "url": "partner/logo-list_158.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_158.jpg*/},
	        {"name": "百知教育", "url": "partner/logo-list_60.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_60.jpg*/},
			{"name": "典课网", "url": "partner/logo-list_61.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_61.jpg*/},
			{"name": "慧矩标准培训中心", "url": "partner/logo-list_157.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_157.jpg*/},
	        {"name": "亚太管理学院", "url": "partner/logo-list_159.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_159.jpg*/},
	        {"name": "理想工场", "url": "partner/logo-list_68.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_68.jpg*/},
	        {"name": "上海港湾集团", "url": "partner/logo-list_156.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_156.jpg*/},
	        {"name": "学学堂", "url": "../../images/8102bdbedc4dc17ca7d34d168f5dc611.xuexuetang.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/8102bdbedc4dc17ca7d34d168f5dc611.xuexuetang.jpg*/},
	        {"name": "创e+大学生创业服务平台", "url": "../../images/a9a30290df1356c6bd0771d54f991131.chuange.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/a9a30290df1356c6bd0771d54f991131.chuange.jpg*/}
		],

		// 中小学
		[
			{"name": "北京五中", "url": "partner/logo-list_59.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_59.jpg*/},
			{"name": "北京市171中学", "url": "partner/logo-list_51.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_51.jpg*/},
			{"name": "北师大实验中学", "url": "partner/logo-list_70.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_70.jpg*/},
			{"name": "上海奉贤中学", "url": "partner/logo-list_124.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_124.jpg*/},
			{"name": "苏州工业园区外国语学校", "url": "../../images/3176bfd6c4d5a183ae5bfc3dd1306da4.suzhou.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/3176bfd6c4d5a183ae5bfc3dd1306da4.suzhou.jpg*/},
			{"name": "怡海教育", "url": "../../images/456b267db993f76b0380f407424f15a8.yihai.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/456b267db993f76b0380f407424f15a8.yihai.jpg*/},
			{"name": "牛顿在线", "url": "../../images/2fdc0472a885d7d63320687504f87749.niudun.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/2fdc0472a885d7d63320687504f87749.niudun.jpg*/}
		],

		// 联盟
		[
			{"name": "贵州省高校MOOC平台", "url": "../../images/128edee4faa57404646b5e13284e0117.guizhou.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/128edee4faa57404646b5e13284e0117.guizhou.jpg*/},
			{"name": "河北省高校MOOC平台", "url": "../../images/49fea3e3bc45f128f53da0f6e8651e27.hebei.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/49fea3e3bc45f128f53da0f6e8651e27.hebei.jpg*/},
			{"name": "辽宁省高校MOOC平台", "url": "../../images/b1a899c10a69098126ab86afe133e15d.liaoning.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/b1a899c10a69098126ab86afe133e15d.liaoning.jpg*/},
			{"name": "陕西省高校MOOC平台", "url": "../../images/3acac8a62074625c9348b499dfc6cb8c.shanxi.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/3acac8a62074625c9348b499dfc6cb8c.shanxi.jpg*/},
			{"name": "四川省高校MOOC平台", "url": "../../images/7538dfeb319adcbaf7983ad7bf0350cf.sichuan.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/7538dfeb319adcbaf7983ad7bf0350cf.sichuan.jpg*/},
			{"name": "云南省高校MOOC平台", "url": "../../images/cb35fa433c3d7ed4e4f7ff2262ee6b11.yunnan.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/images/cb35fa433c3d7ed4e4f7ff2262ee6b11.yunnan.jpg*/},
			{"name": "北京数字学校", "url": "partner/logo-list_62.jpg"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_62.jpg*/},
			{"name": "365大学", "url": "partner/logo-list_125.jpg.png"/*tpa=https://storage.xuetangx.com/public_assets/xuetangx/event/cloud/partner/logo-list_125.jpg*/}
		]
		
	];

	var $block = $(".partner .block"),
		preventCalculate = false

	$.each(logoList,function(index){
		var str = "",
			i = 0
		for (; i < logoList[index].length; i++) {
			str += '\
				<li class="col-md-6 col-xs-12">\
				<img src="'+ logoList[index][i].url +'" alt="'+ logoList[index][i].name +'">\
				</li>';
		}
		$block.eq(index).find(".list").html(str)
	})


	makeScroll()

	var lastSt = 0,
		direDown = true;
	$(window).on('scroll',function(){
		var st = $(this).scrollTop();

		if(st > lastSt){
			direDown = true;
		}else{
			direDown = false;
		}
		lastSt = st;
		// 顶部banner的缓冲动作
		if (st > 101) {
			$('#banner')[0].style.transform = 'translateY('+(st-101)*0.3+'px)';
		}else{
			$('#banner')[0].style.transform = 'translateY(0px)';
		}

		if (st > 650 && direDown) {
			$('#xypt').children().addClass('up1');
		}

		if (st < 1100 && !direDown) {
			$('#xypt').children().removeClass('up1');
		}

		if (st > 1030 && direDown) {
			$('#dsjfw').children().addClass('up2');
			$('#reg_btn').removeClass('margint0');
		}

		if (st < 1430 && !direDown) {
			$('#dsjfw').children().removeClass('up2');
			$('#reg_btn').addClass('margint0');
		}
	})

	function makeScroll(){
		var $doc = $(document),
			$body = $("html,body"),
			$wrap = $(".partner"),
			$block = $wrap.find(".block"),
			$nav = $wrap.find("nav"),
			$navwrap = $nav.find(".nav-wrap"),
			$target = $nav.find("a"),
			OFFSET = 45,
			CLASSFIXED = "fixed"

		$target.on("click",function(){
			var $this = $(this),
				index = $this.closest("li").index()

			setTabCurrent(index)
			preventCalculate = true
			$body.animate({scrollTop: $block.eq(index).offset().top - OFFSET}, "swing", function(){
				preventCalculate = false
			})
		})

		$doc.on("scroll",function(){
			var top = document.body.scrollTop,
				fixedTop = $nav.offset().top

			if( top > fixedTop ){
				$navwrap.addClass(CLASSFIXED)
			}else{
				$navwrap.removeClass(CLASSFIXED)
			}

			// 计算tab位置
			!preventCalculate && setTabCurrent( calculatePosition(top) )
		})
	}

	function setTabCurrent( index ){
		var CLASSCURRENT = "current"
		$(".partner nav").find("a").removeClass(CLASSCURRENT).eq(index).addClass(CLASSCURRENT)
	}

	function calculatePosition( top ){
		var index = 0,
			posArr = [],
			OFFSET = 100
		posArr = $block.find("label").map(function(){
			return $(this).offset().top
		})
		top += OFFSET
		if( posArr.length ){
			$.each(posArr,function(i,v){
				if( top >= v && top <= ( posArr[i+1] || Infinity)){
					index = i
					return false
				}
			})
		}
		return index
	}
});