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
				el : 'polygon:nth-child(1)',
				animProperties : {
					from : { val : '{"fill" : "#333333"}' },
					to : { val : '{"fill" : "#FF0000"}' }
				}
			},
			{
				el : 'polygon:nth-child(2)',
				animProperties : {
					from : { val : '{"fill" : "#6B6B6B"}' },
					to : { val : '{"fill" : "#FF0000"}' }
				}
			},
			{
				el : 'polygon:nth-child(3)',
				animProperties : {
					from : { val : '{"fill" : "#545454"}' },
					to : { val : '{"fill" : "#FF0000"}' }
				}
			}
		]
	},

};