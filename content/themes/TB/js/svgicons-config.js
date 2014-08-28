var templateUrl = object_name.templateUrl;
var svgIconConfig = {
	
	hamburgerCross : {
		url : ""+templateUrl+"/img/hamburger.svg",
		animation : [
			{
				el : 'path:nth-child(1)',
				animProperties : {
					from : { val : '{"path" : "M3.2,12.9h33.6"}' },
					to : { val : '{"path" : "M10.6,10.5l19,19"}' }
				}
			},
			{
				el : 'path:nth-child(2)',
				animProperties : {
					from : { val : '{"transform" : "s1 1", "opacity" : 1}', before : '{"transform" : "s0 0"}' },
					to : { val : '{"opacity" : 0}' }
				}
			},
			{
				el : 'path:nth-child(3)',
				animProperties : {
					from : { val : '{"path" : "M3.2,27.2h33.6"}' },
					to : { val : '{"path" : "M10.6,29.5l19-19"}' }
				}
			}
		]
	},
	TLogo : {
		url : ""+templateUrl+"/img/T.svg",
		animation : [
			{
				el : 'path#dot',
				animProperties : {
					from : { val : '{"transform" : "s1 1", "opacity" : 1}', before : '{"transform" : "s0 0"}' },
					to : { val : '{"opacity" : 0}' }
				}
			},
			{
				el : 'path#T_black',
				animProperties : {
					from : { val : '{"transform" : "s1 1", "opacity" : 1}', before : '{"transform" : "s0 0"}' },
					to : { val : '{"opacity" : 0}' }
				}
			},
			{
				el : 'polygon#T_blue',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t-4 -4"}', before : '{ "opacity" : 1 }' }
				}
			},
			{
				el : 'polygon#T_red',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t1 1"}', before : '{ "opacity" : 1 }' }
				}
			},
			{
				el : 'polygon#T_green',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t7 7"}', before : '{ "opacity" : 1 }' }
				}
			}
		]
	},
};