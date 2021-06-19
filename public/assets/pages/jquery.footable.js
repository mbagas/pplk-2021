/**
 * Theme: Ubold Dashboard
 * Author: Coderthemes
 * Foo table
 */

jQuery(function($){
    $('#footable_1').footable();
    $('#footable_2').footable({
        "paging": {
            "enabled": true
        },
        "filtering": {
            "enabled": true
        }
    });
    $('#footable_3').footable({
        "paging": {
            "enabled": true
        },
        "sorting": {
            "enabled": true
        }
    });
});