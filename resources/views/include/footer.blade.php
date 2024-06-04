<footer class="app-footer"> <!--begin::To the end-->
    <div class="float-end d-none d-sm-inline">{{date("d/m/Y H:i:s")}}</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
        2024
    </strong>
    All rights reserved.
    <!--end::Copyright-->
</footer> <!--end::Footer-->
</div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="/docs/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
const Default = {
    scrollbarTheme: "os-theme-light",
    scrollbarAutoHide: "leave",
    scrollbarClickScroll: true,
};
document.addEventListener("DOMContentLoaded", function() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (
        sidebarWrapper &&
        typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
    ) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
            },
        });
    }
});
</script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
</body><!--end::Body-->
</html>