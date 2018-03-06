var OA_slots = OA_slots || {};
var _enst = '';
OA_slots['zone:170'] = OA_slots['zone:170'] || [];
_enst += '<div style="text-align:center;">\n<script async src="//pagead2.googlesyndication.';
_enst += 'com/pagead/js/adsbygoogle.js"></script>\n<!-- Collectibles RON Adsense Backfill T';
_enst += 'hird-party 728x90 -->\n<ins class="adsbygoogle"\n     style="display:inline-block;';
_enst += 'width:728px;height:90px"\n     data-ad-client="ca-pub-7865546952023728"\n     data';
_enst += '-ad-slot="4079945241"></ins>\n<script>\n(adsbygoogle = window.adsbygoogle || []).p';
_enst += 'ush({});\n</script>\n</div>';
OA_slots['zone:170'].push(_enst);

function fill_iframe(ifrm, content) {
	var iframe = ifrm.contentWindow || ifrm.contentDocument;
	iframe.document.open();
	iframe.document.write('<html><head></head><body style="margin:0;background-color:transparent">');
	iframe.document.write(content);
	iframe.document.close();
}

function fill_spot(el, content) {
	if (el != null && el.tagName == 'IFRAME') {
		fill_iframe(el, content);
	} else if (el != null && el.tagName == 'DIV') {
		if (content.indexOf('googlesyndication') >= 0) {
			var g_ins = content.match(/(\<ins [\s\S]+<\/ins\>)/);
			if (g_ins) {
				el.innerHTML = g_ins[1];
				(function(d, t) {
					var g = d.createElement(t);
					g.type = 'text/javascript';
					var code = '(adsbygoogle = window.adsbygoogle || []).push({});';
					try {
						g.appendChild(d.createTextNode(code));
						d.body.appendChild(g);
					} catch (e) {
						g.text = code;
						d.body.appendChild(g);
					}

					var g = d.createElement(t);
					g.type = 'text/javascript';
					g.async = true;
					g.src = '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
					d.body.appendChild(g);
				}(document, 'script'));
			} else {
				var ifrm = document.createElement('iframe');
				ifrm.style.cssText='overflow:hidden;border:0;position:relative;width:100%;height:100%';
				ifrm.setAttribute('scrolling', 'no');
				el.appendChild(ifrm);
				fill_iframe(ifrm, content);
			}
		} else el.innerHTML = content;
	}
}

function fill_spots() {
	if (typeof(OA_slots) != 'undefined') for (var id in OA_slots) {
		for (var i=0, len=OA_slots[id].length; i<len; i++) {
			var content = OA_slots[id][i];
			var el = document.querySelector('[data-rcgad-slot="' + id + '"]');
			// clear rcgad attr to skip element in the next iteration
			if (el != null) {
				el.removeAttribute('data-rcgad-slot');
				fill_spot(el, content);
			} else {
				// no spot found! report
				var r=new XMLHttpRequest();
				r.open('POST','/nospot.php');
				r.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				r.send('problem=NOSPOT&uri=' + window.location + '&z=' + id);
			}
		}
	}
	// report remaining empty spots
	while (el = document.querySelector('[data-rcgad-slot]')) {
		var id = el.getAttribute('data-rcgad-slot');
		var r=new XMLHttpRequest();
		r.open('POST','/nospot.php');
		r.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		r.send('problem=EMPTYSPOT&uri=' + window.location + '&z=' + id);
		el.removeAttribute('data-rcgad-slot');
	}
}

if (document.addEventListener) {
	document.addEventListener('DOMContentLoaded', fill_spots);
} else if (document.attachEvent) {
	document.attachEvent('onreadystatechange', function(){
		if (document.readyState === 'complete'){fill_spots()}
	});
}
