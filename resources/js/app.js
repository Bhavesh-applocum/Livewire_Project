import './bootstrap';

$(".single-select2").each(function () {
    var $select = $(this);
    var $wrapper = $select.closest(".select-wrapper");
    $select.select2({
        width: "100%",
        // add search if select has data-search="1"
        minimumResultsForSearch: $select.data("search") ? 1 : -1,
        dropdownParent: $wrapper,
    });
    // .on("select2:closing", function (e) {
    //     e.preventDefault();
    //     setTimeout(function () {
    //         $(".select2-dropdown").slideUp(200, function () {
    // $('#select2-drop-mask').select2("close");
    //         });
    //     }, 0);
    // });
});