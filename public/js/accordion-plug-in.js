! function(n) {
    n.fn.accordion = function(l) {
        function a(a) {
            var s = n(a).next(l.answerClass);
            "none" == s.css("display") ? e(s) : c(s)
        }

        function e(a) {
            if (0 == l.mutually_exclusive) a.slideDown(l.delay, l.easing, l.callback_down), l.current_counter++, l.current_counter == Number(i) && u.html(l.collapse_all);
            else {
                var e;
                o.each(function(a, c) {
                    e = n(c).next(l.ansClass), "none" != e.css("display") && e.hide(l.delay)
                }), a.slideDown(l.delay, l.easing, l.callback_down), l.current_counter = 1
            }
        }

        function c(n) {
            n.slideUp(l.delay, l.easing, l.callback_up), l.current_counter--, Number(l.current_counter) < Number(i) && u.html(l.expand_all)
        }

        function s() {
            0 == l.mutually_exclusive ? o.each(function(a, c) {
                var s = n(c).next(l.answerClass);
                "none" == s.css("display") && e(s)
            }) : (o.next(l.ansClass).slideDown(l.delay, l.easing, l.callback_down), u.html(l.collapse_all), l.current_counter = i)
        }

        function t() {
            0 == l.mutually_exclusive ? o.each(function(a, e) {
                var s = n(e).next(l.answerClass);
                "none" != s.css("display") && c(s)
            }) : (o.next(l.ansClass).slideUp(l.delay, l.easing, l.callback_up), u.html(l.expand_all), l.current_counter = 0)
        }
        var l = n.extend({
                current_counter: 0,
                expand_all: "(+) Expand All",
                collapse_all: "(-) Collapse All",
                questionClass: ".accordion-head",
                ansClass: ".accordion-panel",
                expandAllClass: ".accordion-butn",
                easing: "",
                mutually_exclusive: !1,
                delay: 600,
                callback_down: function() {},
                callback_up: function() {}
            }, l),
            u = this.find(l.expandAllClass),
            o = this.find(l.questionClass),
            i = o.length;
        u.html(l.expand_all), o.each(function(l, e) {
            n(e).on("click", function() {
                a(this)
            })
        }), u.on("click", function() {
            l.current_counter < Number(i) ? s() : t()
        })
    }
}(jQuery);