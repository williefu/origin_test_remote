<!doctype html>
<html><head><style>
body{margin:0;font-size:0;line-height:0;}
a img{border:none}
</style></head>
<body>

<script type="text/javascript">
(function() {	
	var emcOriginScript	= document.createElement('script'),
		emcLocation		= document.getElementsByTagName('script')[document.getElementsByTagName('script').length - 1],
		emcOriginConfig	= 'http://local.origin_prod/index.php?option=com_emc_origin&view=nova&format=raw&id=38';
		emcOriginScript.src	= 'http://local.origin_prod/components/com_emc_origin/assets/js/emcOrigin.js',
		emcOriginScript.id	= 'emcOriginScript',
		window.emcOriginFlag	= (typeof window.emcOriginFlag === 'undefined')? true: false;
		
		emcOriginParams27 = {
			'emcOriginDomain':		'local.origin_prod',
			'bgHex':				'#fff',
			'auto':					'0',
			'close':				'0',
			'hover':				'0',
			'clickthru1':			'/',
			'clickthru2':			'/',
			'clickthru3':			'/',
			'clickthru4':			'/',
			'clickthru5':			'/'
		};
		if(typeof emcOriginParamsOverride != 'undefined') {
			for(var i in emcOriginParamsOverride) {
				if(emcOriginParamsOverride[i]) {
					emcOriginParams27[i]	= emcOriginParamsOverride[i];
				}
			}
		}
		
		if(window.emcOriginFlag) emcLocation.parentNode.insertBefore(emcOriginScript, emcLocation);
		
		if(emcOriginScript.addEventListener) {
			document.getElementById('emcOriginScript').addEventListener('load', function(){emcOriginInit(emcLocation)}, false);
		} else if (emcOriginScript.readyState) {
			emcOriginScript.onreadystatechange = function() {
				if(emcOriginScript.readyState === 'loaded') {
					emcOriginInit(emcLocation);
				}
			};
		}
		
		function emcOriginInit(emcLocation) {
			if(top === self) {
				emcOriginCreate.init(emcOriginConfig, emcOriginParams27, emcLocation);
			} else {
				iframeNode		= document.createElement('iframe');
				iframeNode.style.display = 'none';
				iframeNode.name = encodeURIComponent(JSON.stringify(emcOriginParams27));
				iframeNode.src	= 'http://' + document.referrer.split('/')[2] + '/emcOriginIframe/emcOriginIframe.html?'+encodeURIComponent(emcOriginConfig);
				
				//frameElement.name = 'emcOriginAd38';
				//document.body.appendChild(iframeNode);
			}						
		}
})();
</script>

</body>
</html>