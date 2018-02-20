$(document).ready(function() {
	$("textarea").textcomplete([{
		match: /\B:([\-+\w]{1,})$/,
		search: function (term, callback) {
			var results0 = [], results1 = [], results2 = [], results3 = [];
			$.each(window.emojis, function (basename, data) {
				var pos = data.s.indexOf(term);
				if (pos === 1) {
					results0.push(basename);
				} else if (pos > 1) {
					results1.push(basename);
				} else if ((data.a !== null) && (data.a.indexOf(term) > -1)) {
					results2.push(basename);
				} else if ((data.k !== null) && (data.k.join(' ').toLowerCase().indexOf(term) > -1)) {
					results3.push(basename);
				}
			});

			var sortByLength = function (a, b) {
				if (a.length < b.length) {
					return -1;
				}
				if (b.length < a.length) {
					return 1;
				}
				return 0;
			};
			if (term.length >= 3) {
				results0.sort(sortByLength);
				results1.sort(sortByLength);
				results2.sort(sortByLength);
				results3.sort();
			}
			var allResults = results0.concat(results1).concat(results2).concat(results3);
			callback(allResults);
		},
		template: function (basename) {
			return '<img class="emojione" src="https://cdn.jsdelivr.net/emojione/assets/3.1/png/32/' + basename + '.png"><span class="emojicode" title="'+window.emojis[basename].s+' ('+window.emojis[basename].k+')">' + window.emojis[basename].s + '</span>';
		},
		replace: function (basename) {
			return window.emojis[basename].s + ' ';
		},
		index: 1
	}
	], {
		maxCount: 250,
		placement: 'top',
		dropdownClassName: 'dropdown-menu-emoji'
	});
});
