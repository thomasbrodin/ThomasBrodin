var templateUrl = script_vars.themeUrl;
var svgIconConfig = {
	
	hamburgerCross : {
		url : ""+templateUrl+"/img/hamburger.svg",
		animation : [
			{
				el : 'path:nth-child(1)',
				animProperties : {
					from : { val : '{"path" : "M3.2,12.9h33.6" }', before : '{ "stroke-width" : 1}' },
					to : { val : '{"path" : "M10.6,10.5l19,19" }', after : '{ "stroke-width" : 1.5}' }
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
					from : { val : '{"path" : "M3.2,27.2h33.6"}' , before : '{ "stroke-width" : 1}' },
					to : { val : '{"path" : "M10.6,29.5l19-19"}' , after : '{ "stroke-width" : 1.5}' }
				}
			}
		]
	},
	TLogo : {
		url : ""+templateUrl+"/img/T.svg",
		animation : [
			{
				el : 'polygon#black',
				animProperties : {
					from : { val : '{"transform" : "s1 1", "opacity" : 1}', before : '{"transform" : "s0 0"}' },
					to : { val : '{"opacity" : 0.3}' }
				}
			},
			{
				el : 'polygon#red',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t-3 3"}', before : '{ "opacity" : 1 }' }
				}
			},
			{
				el : 'polygon#green',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t3 3"}', before : '{ "opacity" : 1 }' }
				}
			},
			{
				el : 'polygon#blue',
				animProperties : {
					from : { val : '{"transform" : "t0 0"}', after : '{ "opacity" : 0 }' },
					to : { val : '{"transform" : "t-3 -3"}', before : '{ "opacity" : 1 }' }
				}
			}
		]
	},
	scrollArrow : {
		url : ""+templateUrl+"/img/arrow.svg"},
};