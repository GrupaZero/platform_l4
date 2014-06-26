/**
 * Serialize form to object
 * @returns {{}}
 */
$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

var Loading = {
    loadingContainer: '.loading',
    loadingMinHeight: 200,
    start: function (container) {
        var me = this;
        var destHtml = $(container);
        if (destHtml.length > 0) {
            var loading = $(me.loadingContainer);
            loading.css('top', destHtml.offset().top + 'px');
            loading.css('left', destHtml.offset().left + 'px');
            loading.css('width', destHtml.width() + 'px');
            loading.css('height', me.loadingMinHeight + 'px');
        }
    },
    stop: function () {
        var me = this;
        $(me.loadingContainer).removeAttr('style');
    }
};
