
</div>
</div>
<div class="wui-overlay"></div>


<style>

    /* side menu */
    .wui-side-menu {
        position:fixed;
        top:0;
        left:0;
        width:220px;
        height:100%;
        backface-visibility:hidden;
        z-index:3;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-transition: webkit-transform 220ms ease-in-out;
        transition: transform 220ms ease-in-out;
    }
    .wui-side-menu.open {-webkit-transform: translateX(0);transform: translateX(0);}
    .wui-side-menu.open ~ .content .side-menu-trigger {display:none;}
    .wui-side-menu.open {box-shadow: 2px 0 16px 0 rgba(0,0,0,0.3);}
    .wui-side-menu .header,
    .wui-content-header {vertical-align:baseline;line-height:50px;}
    .wui-side-menu-pin-trigger,
    .wui-side-menu-trigger {width:50px;height:50px;text-align:center;display: inline-block;font-size:18px;line-height: 50px;}

    .wui-side-menu .wui-side-menu-pin-trigger    {display:none;float: right;}
    .wui-side-menu .wui-side-menu-pin-trigger i  {-webkit-transition:all 0.22s ease-out;-moz-transition:all 0.22s ease-out;
        -o-transition:all 0.22s ease-out;     transition:all 0.22s ease-out;}
    .wui-side-menu .wui-side-menu-items {overflow-y:auto;height: calc(100% - 50px);}
    .wui-side-menu .wui-side-menu-item {
        display:block;
        width:100%;
        padding:15px 12px ;
        border-left:5px solid transparent;
    }
    .wui-side-menu .wui-side-menu-item {height:50px}
    .wui-side-menu .wui-side-menu-item i.box-ico {margin-right:4px;}

    /* overlay */
    .wui-overlay {position:absolute;top:0;left:0;right:0;bottom:0;z-index:2;background-color: rgba(0, 0, 0, 0.1);opacity:0.5;display:none;}
    .wui-side-menu.open ~ .wui-overlay, .wui-overlay.active {display:block;}

    /* content */
    .wui-content {z-index:1;position:absolute;top:0;right:0;bottom:0;left:0;
        -webkit-transition:all 0.22s ease-out;-moz-transition:all 0.22s ease-out;
        -o-transition:all 0.22s ease-out;transition:all 0.22s ease-out;padding:0 10px;}
    .wui-content .wui-side-menu-trigger {margin-left:-10px;}
    @media only screen and (min-width:768px){
        .wui-side-menu .wui-side-menu-pin-trigger {display:inline-block;}
        .wui-side-menu.open {box-shadow: initial;}
        .wui-side-menu.open ~ .wui-overlay {display:none;}
        .wui-side-menu.open ~ .wui-content .wui-side-menu-trigger {display:none;}
        .wui-side-menu.open:not(.pinned) ~ .wui-overlay {display:block;}
        .wui-side-menu.open:not(.pinned) {box-shadow: 2px 0 16px 0 rgba(0,0,0,0.3);}
        .wui-side-menu.open.pinned ~ .wui-content {left:220px;}
    }
    ul.wui-side-menu-items {list-style: none;padding:0}

    .wui-side-menu {background-color: #292e34;color:#ddd;}
    .wui-side-menu .wui-side-menu-trigger:hover,
    .wui-side-menu-item:hover,
    .wui-side-menu-pin-trigger:hover
    {color: #fff;background-color: #383f45;}

    .wui-side-menu a
    {color:#ccc;text-decoration:none}
    .wui-side-menu .wui-side-menu-item.active
    {border-left-color: #158439; color:#158439}
    .wui-content a {color:#000;}


    /* demo */
    body {margin:0; font-family:'arial';font-weight:100;}
    *, *:after, *:before {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
    #events {background-color:#ccc;}

</style>

<script>
    /* Kristuff.WebUI.SideMenu */
    (function (window, undefined) {
        'use strict';
        // responsive pinnable sidemenu component
        var sideMenu = function (el) {
            var htmlSideMenu = el, htmlSideMenuPinTrigger = {}, htmlSideMenuPinTriggerImage = {}, htmlOverlay = {};
            var init = function () {
                htmlSideMenuPinTrigger = el.querySelector('.wui-side-menu-pin-trigger');
                htmlSideMenuPinTriggerImage = htmlSideMenuPinTrigger.querySelector('i.fa');
                htmlOverlay = document.querySelector('.wui-overlay');
                Array.prototype.forEach.call(document.querySelectorAll('.wui-side-menu-trigger'), function (elmt, i) {
                    elmt.addEventListener('click', function (e) {
                        e.preventDefault();
                        toggleMenuState();
                    }, false);
                });
                htmlSideMenuPinTrigger.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleMenuPinState();
                }, false);
                htmlOverlay.addEventListener("click", function (e) {
                    htmlSideMenu.classList.remove('open');
                }, false);
                window.addEventListener("resize", checkIfNeedToCloseMenu, false);
                checkIfNeedToCloseMenu();
            };
            var toggleMenuState = function () {
                htmlSideMenu.classList.toggle('open');
                menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
            };
            var toggleMenuPinState = function () {
                htmlSideMenu.classList.toggle('pinned');
                htmlSideMenuPinTriggerImage.classList.toggle('fa-rotate-90');
                if (htmlSideMenu.classList.contains('pinned') !== true) {
                    htmlSideMenu.classList.remove('open');
                }
                menuPinStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('pinned'));
            };
            var checkIfNeedToCloseMenu = function () {
                var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                if (width <= 767 && htmlSideMenu.classList.contains('open') === true) {
                    htmlSideMenu.classList.remove('open');
                    menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
                }
                if (width > 767 && htmlSideMenu.classList.contains('pinned') === false) {
                    htmlSideMenu.classList.remove('open');
                    menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
                }
            };
            var menuStateChanged = function (element, state) {
                var evt = new CustomEvent('menuStateChanged', { detail: { open: state} });
                element.dispatchEvent(evt);
            };
            var menuPinStateChanged = function (element, state) {
                var evt = new CustomEvent('menuPinStateChanged', { detail: { pinned: state} });
                element.dispatchEvent(evt);
            };
            init();
            return {
                htmlElement: htmlSideMenu,
                toggleMenuState: toggleMenuState,
                toggleMenuPinState: toggleMenuPinState
            };
        };

        window.SideMenu = sideMenu;
    })(window);


    var documentReady = function (fn) {
        if (document.readyState != 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    };

    documentReady(function() {
        var sample = new SideMenu(document.querySelector('.wui-side-menu'))
        sample.htmlElement.addEventListener('menuPinStateChanged', function(e) {
            document.querySelector('#events').innerHTML += 'menuPinStateChanged , menu pinned? => '
                + e.detail.pinned + '<br>';
        }, false);
        sample.htmlElement.addEventListener('menuStateChanged', function(e) {
            document.querySelector('#events').innerHTML += 'menuStateChanged , menu open? => '
                + e.detail.open + '<br>';
        }, false);
    });


</script>

<style>
    .box{
        padding: 20px 10px;
        max-width: 1000px;
        margin: 0 auto;
    }
</style>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

</body>
</html>
