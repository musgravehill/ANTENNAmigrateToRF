var _edit = false;
var _editId = false;
var _key = false;

$(function() {
	var form = '<div id="comment_form">' + $('#comment_form').html() + '</div>';
	var url = location.protocol + '//' + location.host + '/cms/plugins/comments/comments.php';
	var max_file_size = maxFileSize;

	$('a#rulescomments').live('click', function() {
		$.getJSON(url, 'getrules=1', function(json) {
			console.log(json);
			if (json.success) modal.open(json.text, {width: '450px'});
		});
		return false;
	});

	var progressHandler = function(e) {
		var percent = parseInt(e.loaded * 100 / e.total)

		$('#attachProgress').html(percent + '%');

	}

	function clearFileInputField(Id) {
		document.getElementById(Id).innerHTML = document.getElementById(Id).innerHTML;
	}

	$('#attachComment').live('change', function(e) {
		var maxMb = 2;
		var maxImageSize = maxMb * 1024 * 1024;
		var maxPx = 3000;
		var error = 'Изображение {name} слишком большое. Попробуйте уменьшить его.';

		var self = this;
		for (var i = 0, length = this.files.length; i < length; i++) {
			var file = this.files[i];

			if (file) {
				if (file.type == 'image/jpeg') {
					if (file.size > maxImageSize) {
						alert(error.replace("{name}", file.name));
						clearFileInputField('inputsFiles');
						return false;
					} else {
						var reader = new FileReader();
						var image = new Image();
						$('#send').attr('disabled', 1);
						reader.readAsDataURL(file);
						reader.onload = function (_file) {
							image.src = _file.target.result;
							image.onload = function () {
								$('#send').removeAttr('disabled');
								if (this.width > maxPx || this.height > maxPx) {
									alert(error.replace("{name}", file.name));
									clearFileInputField('inputsFiles');

									return false;
								}
							}
						}
					}
				}
			}
		}
	});

	//Добавить комментарий
	$('div#comments form#comments').live('submit', function() {
		$('div#comments div.errors').html('');

		if (!$('#commentsrules').prop('checked') && _key == '') {
			$('div#comments div.errors').html('<ul><li>Вы согласны с правилами публикации комментариев?</li></ul>');
			return false;
		}
		//var data = $('form#comments').serialize();


		//_data += '&' + data + '&ref=' + encodeURIComponent(location.pathname + location.search);

		var formdata = new FormData(this);
		formdata.append('ref', encodeURIComponent(location.pathname + location.search));
		formdata.append(_edit ? 'edit' : 'comment', 1)
		if (_edit) {
			formdata.append('id', _editId);
		}
		if (_key) {
			formdata.append(_key, 'true');
		}

		var fileInput = $('#attachComment');



		if (fileInput.length > 0) {
			for (var i = 0, length = fileInput[0].files.length; i < length; i++) {
				var file = fileInput[0].files[i];
				if (file) {

					if (file.size > max_file_size) {
						alert('Слишком большой файл. Максимальный размер файла: ' + (max_file_size / 1024 / 1024) + ' Mb.');
						return false;
					}
				}
			}
		}

		$.ajax({
			url: url, 
			data: formdata,
			type: 'post',
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'json',
			xhr: function() {
				var myXhr = $.ajaxSettings.xhr();
				if (myXhr.upload) {
					myXhr.upload.addEventListener('progress', progressHandler, false);
				}
				return myXhr;
			},
			success: function(json) {;
				if (!json.success) {
					if (_edit) {
						alert(json.error);
					} else {
						var errors = '<ul>';
						$(json.errors).each(function(key, val) {
							errors += '<li>' + val + '</li>';
						});
						$('div#comments div.errors').html(errors + '</ul>');
					}

				} else {

					if (_edit) {
						$('#commentslist').find('div.comment' + json.id + ' div.text').html(json.text);
						appendForm($('#comments'), form);
						$('input#root').val('0');
						alert(json.message);
					} else {

						$('textarea#msg').val('');
						$('input#answer').val('');
                        if (json.guestmessage) {
                            popup.show(json.guestmessage, 'success', 'topRight', 5500);
                        }
						var root = parseInt($('input#root').val());
						var newText = json.newcomment;
						if (root == 0) {
							if ($('#commentslist div.comment:last').length != 0)
								$('#commentslist div.comment:last').after(newText);
							else
								$('#commentslist').html(newText);
						} else {
							$('#commentslist').find('div#' + root).after(newText);
							appendForm($('#comments'), form);
						}

						if (json.donate) {
							$('#donate').click();
						}
					}
					resetAllButtons();
					$('b.haventcom').remove();
				}
				_edit = false;
				$('#attachProgress').html('');
			}
		});

		return false;
	});


	//Ответить на комментарий
	$(this).on('click', '#commentslist div.answer, #commentslist div.cancel', function() {

		var toggled = $(this).data('toggled');
		$(this).data('toggled', !toggled);

		if (!toggled) {
			appendForm($(this).parent(), form);
			$('input#root').val($(this).parent().parent().attr('id'));
			resetAllButtons();
			$(this).attr('class', 'cancel');
			$(this).text('Отменить');
			$(this).attr('title', 'Отменить ответ на данное сообщение');
		} else {
			appendForm($('#comments'), form);
			$('input#root').val('0');
			$(this).text('Ответить');
			$(this).attr('class', 'answer');
			$(this).attr('title', 'Ответить на данное сообщение');
		}
	});


	$(this).on('click', '#commentslist div.editcomment span.edt', function() {
		var thisObj = $(this);
		var toggled = thisObj.data('toggled');
		thisObj.data('toggled', !toggled);
		if (!toggled) {
			var objBut = $(this);
			var objAppend = $(this).parent().parent().parent();
			var id = objAppend.attr('id');

			$.getJSON(url, 'get=true&id=' + id, function(json) {
				if (!json.success) {
					alert(json.error);
				} else {
					appendForm(objAppend, form);
					$('input#root').val(id);
					$('#comment_form textarea#msg').val(json.text);
					if ($('#norder').length > 0) $('#norder').val(json.norder);
					_editId = json.id;
					_edit = true;
					objBut.text('[отменить]');
					thisObj.data('toggled', true);
					$('#comment_form').find('input#rules').parent().hide();
				}
			});
		} else {
			appendForm($('#comments'), form);
			resetAllButtons();
			$('input#root').val('0');
			$('#comment_form').find('input#rules').parent().show();
		}
	});

	$(this).on('click', '#commentslist div.editcomment span.dlt', function() {
		if (confirm('Вы действительно хотите удалить этот комментарий?')) {
			var objBut = $(this);
			var objAppend = $(this).parent().parent().parent();
			var id = objAppend.attr('id');

			$.getJSON(url, 'delete=true&id=' + id, function(json) {
				if (!json.success) {
					alert(json.error);
				} else {
					objAppend.remove();
					if ($('#commentslist div.comment').length == 0) $('#commentslist').prepend('<b class="haventcom">Статью еще никто не комментировал. Вы можете стать первым</b>');
					alert(json.message);
				}

			});
		}
	});


	$(this).on('click', '#commentslist div.paginator span.page', function() {
		var page = $(this).attr('id');
		var data = 'paginator=true&page=' + page + '&url=' + encodeURIComponent(location.pathname);
		$.getJSON(url, data, function(json) {
			$('#commentslist').html(json.comments + json.paginator);
		});
	});


	$(this).on('click', '#commentslist div.elements img', function() {
		var vote = ($(this).attr('class') == 'up') ? true : false;
		var id = $(this).parent().parent().attr('id');
		var ratObj = $(this).parent().find('span.rating');

		$.getJSON(url, 'rating=true&id=' + id + '&vote=' + vote, function(json) {
			if (!json.success) {
				alert(json.error);
			} else {
				ratObj.html(json.rating);
			}
		});
	});

	$('div.toTop').click(function() {
		$('html, body').scrollTop(0);
	});

	if (typeof(countComments) != 'undefined') $('span#count_comments').html(countComments);

});





function appendForm(obj, form) {
	$('#comment_form').remove();
	obj.append(form)
}

function appendComment(data, root) {
	var margin = 0;

	if (root != 0) {
		var currentMargin = $('#commentslist').find('div#' + root).css('margin-left').replace('px', '');
		margin = parseInt(currentMargin) + 20;
	}

	var result = '<div style="margin-left: ' + margin + 'px" class="comment" id="' + data.id + '">';

	result += '<div class="title">';
	result += '<img src="' + data.avatar + '" width="48">';
	result +=  (data.user_id != 'null') ? '<a href="http://' + location.host + '/cms/profile/' + data.user_id + '/">' + data.name + '</a>' : data.name;
	result += ' <span class="date">' + data.date + '</span>';
	result += '</div>';
	result += '<div class="text">' + data.text + '</div>';
	result += '<div class="answer" title="Ответить на данное сообщение">Ответить</div>';

	if (data.premoder) result += '<br><sub>Это сообщение появится после проверки модератором</sub>';

	result += '</div>';

	return result;
}

function resetAllButtons() {
	$('#commentslist div.cancel').text('Ответить');
	$('#commentslist div.cancel').attr('class', 'answer');
	$('#commentslist div.cancel').attr('title', 'Ответить на данное сообщение');

	$('#commentslist div.editcomment span.edt').text('[редактировать]');
	_edit = false;
}

function selText(tag1, tag2) {
	var memo = $('div#comments textarea#msg');
	var range = memo.caret();
	var value = memo.val();

	var lenTag2 = (range.text.length > 0) ? 0 : tag2.length;

	var before = value.substring(0, range.start);
	var after = value.substring(range.end, value.length);

	memo.val(before + tag1 + range.text + tag2 + after);
	memo.focus();

	memo.caret(memo.val().length - after.length - lenTag2, memo.val().length - after.length - lenTag2);
}