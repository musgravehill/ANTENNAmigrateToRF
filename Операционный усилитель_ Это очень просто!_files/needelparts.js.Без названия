var needElparts = (function () {
	var enabled = nE;
	var addButton = nEAddButton;
	var id = nEID;
	
	if (addButton && enabled) {
		$(document).ready(function() {
			var link = '/cms/elparts_add/' + id + '/';
			var buttonAddOnPage = $('<div class="text-center" style="margin: 25px 0;"><div class="buy-pcb"><a href="' + link + '" target="_blank" style="text-decoration: none;"><span class="buy_pcb" style="background: red;">Создать список радиоэлементов к статье</span></a></div></div>');

			var tags = $('ul.tags').length > 0;
			buttonAddOnPage.insertAfter(tags ? 'ul.tags' : '.main_content > *:last');
		});
	}
})();

$(document).ready(function() {
	var difficult = neDifficult;
	
	if (location.pathname.indexOf('electronic_news') === -1) {
		var _seller = nePCB;
				
		/*var _cads = ['Sprint-Layout', 'Eagle', 'Altium Designer (P-CAD)', 'DipTrace', 'ExpressPCB'];
	
		for (var i = 0, length = _cads.length; i < length; i++) {
			var _cad = _cads[i];
			var _break = false;

			$('.tags a.ourtag').each(function(i, el) {
				if ($(el).text() == _cad) {
					_seller = true;
					_break = true;
					return false;
				}
			});

			if (_break) break;
		}*/
		
		if (_seller || difficult >= 2) {
			if (_seller) {
				var txt = 'Заказать печатную плату к данной статье';
				var act = '';
			} else {
				var txt = 'Заказать разработку печатной платы к данной статье';
				var act = '/#tab2';
			}
			var _buy = $('<div class="buy-pcb"><span class="buy_pcb" id="buyPCB">' + txt + '</span></div>');

			var tags = $('ul.tags').length > 0;


			if (tags) {
				_buy.insertAfter('ul.tags');
			} else {
				_buy.insertAfter('.main_content > *:last');
			}

			$('#buyPCB').live('click', function() {
				location.href = 'http://megapcb.com' + act;
			});

		}
	}
});
