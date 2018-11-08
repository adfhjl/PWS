        $(function () {
            $(".ui-sortable").sortable({
                revert: true,
                connectWith: ".ui-sortable"
            });
            $("ul, li").disableSelection();
        });
