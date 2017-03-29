var footer = '.app-common-footer';
var footerSpacer = '.app-common-footer-spacer';

$(document).ready(function () {
    window.setTimeout(1000, updateFooterSize());
});

$(window).resize(function () {
    updateFooterSize();
});

function updateFooterSize() {
    $(footer).css('width', $(window).width() - 32);
    $(footerSpacer).css('height', $(footer).height() + 64);
}
