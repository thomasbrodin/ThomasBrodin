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
					from : { val : '{"path" : "M13.4,19.9v-8H48v8H35v38.7h-8.7V19.9H13.4z"}' },
					to : { val : '{"path" : "M12.2,15.1V4.8h44.3v10.3H39.9V65H28.8V15.1H12.2z"}' }
				}
			},
			{
				el : 'path#T_blue',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t-2 2"}', before : '{ "opacity" : 1 }' }
				}
			},
			{
				el : 'path#T_red',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t-4 3"}', before : '{ "opacity" : 1 }' }
				}
			},
			{
				el : 'path#T_green',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t9 0"}', before : '{ "opacity" : 1 }' }
				}
			}
		]
	},
};