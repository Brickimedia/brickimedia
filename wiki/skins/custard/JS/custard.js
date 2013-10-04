/*
 * jQuery Function Toggle Plugin
 * Copyright 2011, Felix Kling
 * Dual licensed under the MIT or GPL Version 2 licenses.
 */
(function($) {
    $.fn.funcToggle = function(type, data) {
        var dname = "jqp_eventtoggle_" + type + (new Date()).getTime(),            
            funcs = Array.prototype.slice.call(arguments, 2),
            numFuncs = funcs.length,
            empty = function() {},
            false_handler = function() {return false;};

        if(typeof type === "object") {
            for( var key in type) {
                $.fn.funcToggle.apply(this, [key].concat(type[key]));
            }
            return this;
        }
        if($.isFunction(data) || data === false) {
            funcs = [data].concat(funcs);
            numFuncs += 1;
            data = undefined;
        }
        
        funcs = $.map(funcs, function(func) {
            if(func === false) {
                return false_handler;
            }
            if(!$.isFunction(func)) {
                return empty;
            }
            return func;
        });

        this.data(dname, 0);
        this.bind(type, data, function(event) {
            var data = $(this).data(),
                index = data[dname];
            funcs[index].call(this, event);
            data[dname] = (index + 1) % numFuncs;
        });
        return this;
    };
}(jQuery));

/**************************************\
|---Custard Skin  JavaScript Scripts---|
|--Written for use on Brickimedia.org--|
\**************************************/
$(document).ready(function () {

    $('#toolbar .toggle').funcToggle('click', function () {
        $('#toolbar .notice').each(function () {
            if ($(this).text().length > 0) {
                $(this).slideDown(500, 'linear');
            }
        });
    }, function () {
        $('#toolbar .notice').each(function () {
            if ($(this).text().length > 0) {
                $(this).slideUp(500, 'linear');
            }
        });
    });

});
