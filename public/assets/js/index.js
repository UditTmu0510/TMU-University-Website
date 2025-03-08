let path = "https://test.tmuhospital.com/assets/json/menubarData.json",
    domainName = "";
try {
    (domainName = window.location.hostname),
        "localhost" == domainName || "127.0.0.1" == domainName ? ((domainName += ":8000"), (path = "http://" + domainName + "/assets/json/menubarData.json")) : (path = "https://" + domainName + "/assets/json/menubarData.json");
} catch (e) {
    console.error("Error fetching the domain name:", e);
}
function checkAndApplyAlignment() {
    setTimeout(function () {
        let e;
        (e = document.querySelectorAll("#menubar__content ul")).forEach((e) => {
            e.scrollHeight <= e.clientHeight ? (e.style.alignContent = "center") : (e.style.alignContent = "normal");
        });
    }, 10);
}
document.querySelectorAll(".navbar .nav-item.dropdown").forEach(function (e) {
    e.addEventListener("mouseover", function (e) {
        let t = this.querySelector(".dropdown-menu");
        t.classList.add("show");
    }),
        e.addEventListener("mouseout", function (e) {
            let t = this.querySelector(".dropdown-menu");
            t.classList.remove("show");
        });
}),
    window.innerWidth > 1024 && document.querySelector("#main--menubar").addEventListener("click", checkAndApplyAlignment);
const customMainMenubar = document.getElementById("main--menubar");
function showMenubar() {
    resetMainMenubar(), showBanner();
    let e = document.body;
    e && e.classList.add("stop-body-scroll"), (document.getElementById("menubar-back-button").style.display = "none"), customMainMenubar.classList.add("menubar-viewer");
}
function showBanner() {
    let e = document.getElementById("nav-banner");
    e.classList.add("super-active"), e.classList.add("w-100");
    let t = document.getElementById("main--menubar").querySelector("div>.university-nav");
    t && t.classList.add("sw-none");
}
function hideBanner() {
    let e = document.getElementById("nav-banner"),
        t = document.getElementById("main--menubar").querySelector("div>.university-nav");
    t && t.classList.remove("sw-none"), e.classList.contains("super-active") && (e.classList.remove("super-active"), e.classList.remove("w-100"));
}
function removeSuperActiveClass() {
    document.querySelectorAll("#menubar__submenu_courses, #menubar__submenu_content, #menubar--subcategories").forEach(function (e) {
        e.classList.contains("super-active") && e.classList.remove("super-active");
    });
}
function closeMenubar() {
    document.getElementById("close-btn-container");
    let e = document.body;
    e && e.classList.remove("stop-body-scroll"), customMainMenubar.classList.remove("menubar-viewer");
}
async function showSubCategories(e) {
    try {
        let t = document.getElementById("menubar--subcategories");
        t.innerHTML = "";
        let n;
        if (cachedData) n = cachedData;
        else {
            let s = await fetch(path);
            n = await s.json();
        }
        let l = "";
        if (n[e] && "object" == typeof n[e]) {
            let a = n[e],
                r = window.innerWidth;
            for (let o in a)
                a[o].link
                    ? (l += `<li><a href="${a[o].link}" class="additional-link">${o}</a></li>`)
                    : r > 1024
                    ? (l += `<li class="underline__effect" onclick="openSubMenuContent('${e}','${o}',this)">${o}</li>`)
                    : (l += `<li class="underline__effect" onclick="openSubMenuContentMobile('${e}','${o}')">${o}</li>`);
            t.innerHTML = `<ul>${l}</ul>`;
        }
    } catch (c) {
        console.error(c);
    }
}
function showMenuContent(e, t) {
    if ((hideBanner(), innerWidth <= 480)) {
        handleMainMenubar(e, t);
        return;
    }
    showSubCategories(e, t);
    let n = t.parentElement.querySelectorAll("li"),
        s = document.getElementById("menubar--subcategories");
    if (
        (document.getElementById("menubar__submenu_content").classList.remove("super-active"),
        document.getElementById("menubar__submenu_courses").classList.remove("super-active"),
        t.querySelector("h1").classList.contains("underline__effect_permanent"))
    ) {
        t.querySelector("h1").classList.remove("underline__effect_permanent"), t.querySelector("h1").classList.add("underline__effect"), s.classList.remove("super-active"), showBanner();
        return;
    }
    n.forEach((e) => {
        let t = e.querySelector("h1");
        t.classList.contains("underline__effect_permanent") && (t.classList.remove("underline__effect_permanent"), t.classList.add("underline__effect"));
    }),
        t.querySelector("h1").classList.add("underline__effect_permanent"),
        t.querySelector("h1").classList.remove("underline__effect"),
        s.classList.add("super-active");
}
async function openSubMenuContent(e, t, n) {
    try {
        let s = document.getElementById("menubar__submenu_content");
        if (((s.innerHTML = ""), document.getElementById("menubar__submenu_courses").classList.remove("super-active"), n.classList.contains("underline__effect_permanent"))) {
            n.classList.remove("underline__effect_permanent"), n.classList.add("underline__effect"), s.classList.remove("super-active");
            return;
        }
        let l = "",
            a = await fetch(path),
            r = await a.json();
        for (let o in r[e][t]) r[e][t][o].link ? (l += `<li><a href="${r[e][t][o].link}" class="additional-link">${o}</a></li>`) : (l += `<li class='underline__effect' onclick="showSubMenuCourse('${e}','${t}','${o}',this)">${o}</li>`);
        (s.innerHTML = `<ul>${l}</ul>`), s.classList.add("super-active");
        let c = n.parentElement.querySelectorAll("li");
        c.forEach((e) => {
            e.classList.contains("underline__effect_permanent") && (e.classList.remove("underline__effect_permanent"), e.classList.add("underline__effect"));
        }),
            n.classList.add("underline__effect_permanent"),
            n.classList.remove("underline__effect");
    } catch (u) {
        console.error(u);
    }
}
async function showSubMenuCourse(e, t, n, s) {
    try {
        let l = document.getElementById("menubar__submenu_courses");
        if (((l.innerHTML = ""), s.classList.contains("underline__effect_permanent"))) {
            s.classList.remove("underline__effect_permanent"), s.classList.add("underline__effect"), l.classList.remove("super-active");
            return;
        }
        let a = "",
            r = await fetch(path),
            o = await r.json();
        if (o[e] && o[e][t] && o[e][t][n]) {
            let c = o[e][t][n];
            for (let u in c) c[u].link ? (a += `<li><a href="${c[u].link}" class="additional-link">${u}</a></li>`) : (a += `<li class='underline__effect' onclick='showSubSubMenuCourse(value, menu, subMenu, course, this)'>${u}</li>`);
            (l.innerHTML = `<ul>${a}</ul>`), l.classList.add("super-active");
            let d = s.parentElement.querySelectorAll("li");
            d.forEach((e) => {
                e.classList.contains("underline__effect_permanent") && (e.classList.remove("underline__effect_permanent"), e.classList.add("underline__effect"));
            }),
                s.classList.add("underline__effect_permanent"),
                s.classList.remove("underline__effect");
        }
    } catch (m) {
        console.error(m);
    }
}
async function showSubMenuCourseMobile(e, t, n) {
    try {
        let s = customMainMenubar.querySelector(".left-section > ul");
        s.innerHTML = "";
        let l = "",
            a = await fetch(path),
            r = await a.json();
        if (r[e] && r[e][t] && r[e][t][n]) {
            let o = r[e][t][n];
            for (let c in o)
                o[c].link
                    ? (l += `<li><a href="${o[c].link}" class="additional-link">${c}</a><i class="bi bi-arrow-right-short"></i></i></li>`)
                    : (l += `<li class='underline__effect' onclick='showSubSubMenuCourse(value, menu, subMenu, course)'>${c}</li>`);
            s.innerHTML = l;
            let u = document.getElementById("menubar-back-button"),
                d = document.getElementById("back-button-text");
            if (((d.textContent = n), (u.style.display = "block"), window.innerWidth <= 480 && s)) {
                let m = s.querySelectorAll("li");
                m.forEach((e) => {
                    e.style.marginBottom = "0";
                });
            }
            u.setAttribute("data-click-value", "1"), u.setAttribute("data-value", e), u.setAttribute("data-menu", t);
        }
    } catch (y) {
        console.error(y);
    }
}
function addSuperFadeClass(e) {
    e.classList.add("super-fade");
}
function scrollToBottom(e) {
    var t = e.parentElement;
    (t.scrollTop = t.scrollHeight), addSuperFadeClass(e);
}
function resetMainMenubar() {
    let e = document.getElementById("main--menubar").querySelector("div>.university-nav"),
        t = path.replace("menubarData.json", "navbarData.json"),
        n = "";
    (n = "localhost:8000" == domainName || "127.0.0.1:8000" == domainName ? `http://${domainName}` : `https://${domainName}`),
        fetch(t)
            .then((e) => e.json())
            .then((t) => {
                (e.innerHTML = ""),
                    t.forEach((t) => {
                        let s = document.createElement("li");
                        s.setAttribute("onclick", `showMenuContent(${t.id},this)`),
                            (s.innerHTML = `
                    <h1 class="underline__effect">
                        <span><img class="fs-18" src="${n}/assets/img/nav_logo/${t.imageURL}" width="70%" alt=""></span>
                        ${t.text}
                    </h1>
                    <i class="bi bi-caret-right-fill"></i>
                `),
                            e.appendChild(s);
                    });
            })
            .catch((e) => {
                console.error("Error fetching navbar data:", e);
            }),
        removeSuperActiveClass();
}
async function openSubMenuContentMobile(e, t) {
    try {
        let n = customMainMenubar.querySelector(".left-section > ul");
        n.innerHTML = "";
        let s = "",
            l = await fetch(path),
            a = await l.json();
        for (let r in a[e][t])
            a[e][t][r].link
                ? (s += `<li><a href="${a[e][t][r].link}" class="additional-link">${r}</a><i class="bi bi-arrow-right-short"></i></li>`)
                : (s += `<li class='underline__effect' onclick="showSubMenuCourseMobile('${e}','${t}','${r}',this)">${r}</li>`);
        n.innerHTML = s;
        let o = document.getElementById("menubar-back-button"),
            c = document.getElementById("back-button-text");
        if (((c.textContent = t), (o.style.display = "block"), o.setAttribute("data-click-value", "0"), window.innerWidth <= 480 && n)) {
            let u = n.querySelectorAll("li");
            u.forEach((e) => {
                e.style.marginBottom = "0";
            });
        }
    } catch (d) {
        console.error(d);
    }
}
async function handleMainMenubar(e, t) {
    let n = t.querySelector("h1");
    if (n.classList.contains("underline__effect_permanent")) n.classList.remove("underline__effect_permanent");
    else {
        let s = t.parentElement,
            l = s.querySelectorAll("li");
        l.forEach((e) => {
            let t = e.querySelector("ul");
            if (t) {
                e.removeChild(t);
                let n = e.querySelector("h1");
                n.classList.contains("underline__effect_permanent") && n.classList.remove("underline__effect_permanent");
            }
        }),
            n.classList.add("underline__effect_permanent"),
            n.classList.remove("underline__effect"),
            (n.parentElement.style.marginBottom = "0vh"),
            null !== n.parentElement.previousElementSibling &&
                setTimeout(function () {
                    n.parentElement.scrollIntoView({ behavior: "smooth" });
                }, 50);
    }
    let a = t.querySelector("ul");
    if (a) "none" === a.style.display ? (a.style.display = "block") : (a.style.display = "none");
    else {
        let r = await fetch(path),
            o = await r.json(),
            c = "";
        if (o[e] && "object" == typeof o[e]) {
            let u = o[e];
            for (let d in u) u[d].link ? (c += `<li><a href="${u[d].link}" class="additional-link">${d}</a><i class="bi bi-arrow-right-short"></i></li>`) : (c += `<li onclick="openSubMenuContentMobile('${e}','${d}')">${d}</li>`);
        }
        let m = document.createElement("ul");
        (m.innerHTML = c), t.appendChild(m);
    }
}
document.querySelector(".university-nav").addEventListener("scroll", function () {
    addSuperFadeClass(this.querySelector(".scroll-down-icon"));
}),
    document.getElementById("menubar-back-button").addEventListener("click", function () {
        closeBox = document.getElementById("menubar-back-button");
        let e = closeBox.getAttribute("data-click-value");
        if (("0" == e && ((closeBox.style.display = "none"), resetMainMenubar()), "1" == e)) {
            let t = closeBox.getAttribute("data-value"),
                n = closeBox.getAttribute("data-menu");
            openSubMenuContentMobile(t, n);
        }
    }),
    document.addEventListener("DOMContentLoaded", () => {
    const e = document.getElementById("myTab");
    if (e) new bootstrap.Tab(e).show();
});

let cachedData;
async function fetchAndCacheData() {
    try {
        let e = await fetch(path);
        cachedData = await e.json();
    } catch (t) {
        console.error("Error fetching data:", t);
    }
}
document.addEventListener("DOMContentLoaded", function () {
    fetchAndCacheData();
});
let newStartY,
    newMenu = document.getElementById("new-menu"),
    newArrow = document.querySelector(".new-arrow"),
    newMenuIcon = document.getElementById("new-menu-icon");
function toggleNewMenu() {
    "block" === newMenu.style.display
        ? ((newMenu.style.display = "none"), newArrow.classList.remove("down"), (newMenuIcon.src = "../assets/img/icons/arrowu.png"))
        : ((newMenu.style.display = "block"), newArrow.classList.add("down"), (newMenuIcon.src = "../assets/img/icons/arrowd.png"));
}
function touchStart(e) {
    newStartY = e.touches[0].clientY;
}
function touchMove(e) {
    e.touches[0].clientY - newStartY > 0 && ((newMenu.style.display = "none"), newArrow.classList.remove("down"), (newMenuIcon.src = "../assets/img/icons/arrowu.png"));
}
function touchEnd(e) {
    e.changedTouches[0].clientY - newStartY < 0 && ((newMenu.style.display = "block"), newArrow.classList.add("down"), (newMenuIcon.src = "../assets/img/icons/arrowd.png"));
}
document.querySelector(".new-menu-container").addEventListener("touchstart", touchStart, !1),
    document.querySelector(".new-menu-container").addEventListener("touchmove", touchMove, !1),
    document.querySelector(".new-menu-container").addEventListener("touchend", touchEnd, !1),
    document.addEventListener("DOMContentLoaded", function () {
        let e = document.querySelectorAll(".expandable-button");
        e.forEach((e) => {
            e.classList.add("expanded");
        }),
            setTimeout(() => {
                e.forEach((e) => {
                    e.classList.remove("expanded"), e.classList.add("minimized");
                });
            }, 2e3),
            e.forEach((e) => {
                e.addEventListener("mouseover", () => {
                    e.classList.remove("minimized");
                }),
                    e.addEventListener("mouseout", () => {
                        e.classList.add("minimized");
                    });
            });
    });
let currentIndex = 0;
const slides = document.querySelectorAll(".featured-slide"),
    totalSlides = slides.length;
let autoSlideInterval;
function showSlide(e) {
    if (isNaN(e) || totalSlides <= 0) return;

    if (e < 0) e = totalSlides - 1;
    else if (e >= totalSlides) e = 0;

    const n = document.querySelector(".featured-slider");
    if (!n) return;

    n.style.transform = `translateX(${-100 * e}%)`;
    currentIndex = e;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}
function prevSlide() {
    showSlide(currentIndex - 1);
}
function startAuto() {
    autoSlideInterval = setInterval(nextSlide, 3e3);
}
function stopAuto() {
    clearInterval(autoSlideInterval);
}
startAuto();
var i,
    acc = document.getElementsByClassName("careers-accordion");
for (i = 0; i < acc.length; i++)
    acc[i].addEventListener("click", function () {
        var e = this.nextElementSibling;
        if ("block" === e.style.display) (e.style.display = "none"), (this.querySelector(".icon").innerHTML = "+"), this.classList.remove("clicked");
        else {
            for (var t = document.querySelectorAll(".panel"), n = 0; n < t.length; n++) {
                t[n].style.display = "none";
                var s = t[n].previousElementSibling;
                (s.querySelector(".icon").innerHTML = "+"), s.classList.remove("clicked");
            }
            (e.style.display = "block"), (this.querySelector(".icon").innerHTML = "-"), this.classList.add("clicked");
        }
    });
var swiper = new Swiper(".swiper-management-awards", {
        effect: "coverflow",
        grabCursor: !0,
        centeredSlides: !0,
        coverflowEffect: { rotate: 0, stretch: 0, depth: 100, modifier: 3, slideShadows: !0 },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        loop: !0,
        autoplay: { delay: 2e3 },
        breakpoints: { 640: { slidesPerView: 2 }, 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 }, 1560: { slidesPerView: 3 } },
    }),
    swiper = new Swiper(".swiper-container", {
        effect: "slide",
        grabCursor: !0,
        coverflowEffect: { rotate: 0, stretch: 0, depth: 100, modifier: 3, slideShadows: !0 },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        loop: !0,
        autoplay: { delay: 2e3 },
        breakpoints: { 480: { slidesPerView: 1 }, 640: { slidesPerView: 1.2 }, 768: { slidesPerView: 1.6 }, 1024: { slidesPerView: 2.2 }, 1560: { slidesPerView: 2.2 } },
    });
$(document).ready(function () {
    var e = $("#owl-carousel1");
    e.owlCarousel({ items: 4, loop: !0, margin: 20, autoplay: !0, autoplayTimeout: 2e3, responsive: { 0: { items: 1 }, 768: { items: 1 }, 992: { items: 4 } } }),
        e.hover(
            function () {
                e.trigger("stop.owl.autoplay");
            },
            function () {
                e.trigger("play.owl.autoplay", [3e3]);
            }
        );
}),
    $(document).ready(function () {
        var e = $("#owl-carousel2");
        e.owlCarousel({ items: 2, loop: !0, margin: 20, dots: !1, autoplay: !0, autoplayTimeout: 3e3, responsive: { 0: { items: 1 }, 768: { items: 2 }, 992: { items: 2 } } }),
            e.hover(
                function () {
                    e.trigger("stop.owl.autoplay");
                },
                function () {
                    e.trigger("play.owl.autoplay", [3e3]);
                }
            );
    }),
    $(document).ready(function () {
        var e = $("#owl-carousel3");
        e.owlCarousel({ items: 1, loop: !0, margin: 20, dots: !1, autoplay: !0, autoplayTimeout: 3e3, responsive: { 0: { items: 1 }, 768: { items: 1 }, 992: { items: 1 } } }),
            e.hover(
                function () {
                    e.trigger("stop.owl.autoplay");
                },
                function () {
                    e.trigger("play.owl.autoplay", [3e3]);
                }
            );
    }),
    $(document).ready(function () {
        var e = $("#owl-carousel4");
        e.owlCarousel({ items: 4, loop: !0, margin: 20, autoplay: !0, autoplayTimeout: 2e3, responsive: { 0: { items: 1 }, 768: { items: 1 }, 992: { items: 4 } } }),
            e.hover(
                function () {
                    e.trigger("stop.owl.autoplay");
                },
                function () {
                    e.trigger("play.owl.autoplay", [3e3]);
                }
            );
    }),
    $(document).ready(function () {
        $(".toggle-side").click(function () {
            $(".sidebar-contact").toggleClass("active"), $(".toggle-side").toggleClass("active");
        });
    });
var button = document.getElementById("menubar--open--button");
function showStory(e) {
    document.getElementById("success-stories-popup").style.display = "flex";
    let t = document.getElementById("success-stories-popup");
    t.style.display = "flex";
    let n = t.querySelector("iframe"),
        s = "";
    switch (e) {
        case 0:
            s = "https://www.youtube.com/embed/AiRSE4hOte4?si=N9mHt7WcSoZ6kJa1";
            break;
        case 1:
        default:
            s = "https://www.youtube.com/embed/0UP6pSY2DdI?si=c7sKLyo3OhNQHooW";
            break;
        case 2:
            s = "https://www.youtube.com/embed/qhijwTChrDM?si=6NmOVlUBuDrO5j0A";
            break;
        case 3:
            s = "https://www.youtube.com/embed/tmzjg4HDQAI?si=uSzWs4_voW78EApp";
            break;
        case 4:
            s = "https://www.youtube.com/embed/5rZSGSViPso?si=xruNHTh_SJnCP4b9";
    }
    n.setAttribute("src", s);
}
window.addEventListener("scroll", function () {
    var e;
    window.scrollY > 100 ? button.classList.add("scroll-down") : button.classList.remove("scroll-down");
}),
    window.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            (document.querySelector("body").style.height = "auto"), (document.querySelector("body").style.overflowY = "scroll");
        });
    }),
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({ loop: !0, margin: 10, nav: !1, autoplay: !0, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 3 } } });
    }),
    $(document).ready(function () {
        $("#owl-certificate").owlCarousel({ loop: !0, margin: 10, nav: !1, autoplay: !0, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 3 } } });
    }),
    $(".read-more").click(function () {
        $(this).prev().slideToggle(), "Read More" == $(this).text() ? $(this).text("Read Less") : $(this).text("Read More");
    }),
    jQuery(document).ready(function () {
        jQuery("#datatable1").dataTable();
    }),
    document.getElementById("closePopupBtn").addEventListener("click", function () {
        document.getElementById("success-stories-popup").style.display = "none";
        let e = document.getElementById("success-stories-popup"),
            t = e.querySelector("iframe");
        t.setAttribute("src", "");
    }),
    document.getElementById("success-stories-popup").addEventListener("click", function (e) {
        let t = document.getElementById("success-stories-popup"),
            n = document.querySelector(".popup-content"),
            s = t.querySelector("iframe");
        s.setAttribute("src", ""), e.target !== n && (t.style.display = "none");
    });
const menuButton = document.querySelector(".menu-button"),
    tooltip = document.getElementById("menu-tooltip");
menuButton?.addEventListener("mouseenter", () => {
    (tooltip.style.visibility = "visible"), (tooltip.style.opacity = "1");
}),
    menuButton?.addEventListener("mouseleave", () => {
        (tooltip.style.visibility = "hidden"), (tooltip.style.opacity = "0");
    }),
    document.addEventListener("DOMContentLoaded", function () {
        let e = document.querySelectorAll(".filter-btn"),
            t = document.querySelectorAll(".gallery-item"),
            n = document.querySelector(".lightbox"),
            s = n?.querySelector("img"),
            l = document.querySelector(".lightbox-close"),
            a = document.querySelector(".lightbox-next"),
            r = document.querySelector(".lightbox-prev"),
            o = document.querySelector(".lightbox-caption"),
            c = 0;
        e.forEach((n) => {
            n.addEventListener("click", () => {
                e.forEach((e) => e.classList.remove("active")), n.classList.add("active");
                let s = n.getAttribute("data-filter");
                t.forEach((e) => {
                    "all" === s || e.getAttribute("data-category") === s ? (e.style.display = "block") : (e.style.display = "none");
                });
            });
        }),
            t.forEach((e, t) => {
                e.addEventListener("click", () => {
                    let l = e.querySelector("img").src,
                        a = e.querySelector(".gallery-item-title").textContent;
                    (c = t), (s.src = l), (o.textContent = a), n.classList.add("active");
                });
            }),
            l?.addEventListener("click", () => {
                n.classList.remove("active");
            }),
            n?.addEventListener("click", (e) => {
                e.target === n && n.classList.remove("active");
            });
        let u = () => {
            let e = Array.from(t).filter((e) => "none" !== e.style.display);
            if (e.length > 0) {
                c = (c + e.length) % e.length;
                let n = e[c].querySelector("img").src,
                    l = e[c].querySelector(".gallery-item-title").textContent;
                (s.src = n), (o.textContent = l);
            }
        };
        a?.addEventListener("click", () => {
            c++, u();
        }),
            r?.addEventListener("click", () => {
                c--, u();
            });
    });
