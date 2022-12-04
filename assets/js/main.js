'use strict';
// desktop nav
{
    const tabItems = document.querySelectorAll('.nav__list .nav__list__items a');
    const contents = document.querySelectorAll('.contents_container');

    tabItems.forEach(clickItem => {
        clickItem.addEventListener('click', e => {
            // aタグ機能削除
            e.preventDefault();
            //tabMenuの設定
            tabItems.forEach(item => {
                item.classList.remove('is-active')
            });
            clickItem.classList.add('is-active');

            // contentsの設定
            contents.forEach(content => {
                content.classList.remove('contents__is-active');
            });
            document.getElementById(clickItem.dataset.id).classList.add('contents__is-active');
        })
    })
}

// desktop works
{
    const worksPrev = document.querySelectorAll('.worksPrev');
    const worksNext = document.querySelectorAll('.worksNext');
    const works = document.querySelectorAll('.works_container');

    worksNext.forEach(clickItem => {
        clickItem.addEventListener('click', e => {
            // aタグ機能削除
            e.preventDefault();
            // contentsの設定
            works.forEach(content => {
                content.classList.remove('works_is-active');
            });
            document.getElementById(clickItem.dataset.id).classList.add('works_is-active');
        })
    })
    worksPrev.forEach(clickItem => {
        clickItem.addEventListener('click', e => {
            // aタグ機能削除
            e.preventDefault();
            // contentsの設定
            works.forEach(content => {
                content.classList.remove('works_is-active');
            });
            document.getElementById(clickItem.dataset.id).classList.add('works_is-active');
        })
    })
}

// mobile menu
{
    $(function () {
        // const mobileScreen = 768px;
        const mobileMenu = document.querySelectorAll(".mobile_menu");
        const tabItems = document.querySelectorAll('.nav__list .nav__list__items a');

        $(mobileMenu).click(function () {
            $(".nav").toggleClass("nav_is-active");
            $(".mobile_menu").toggleClass("menu_is-close");
        });
        $(tabItems).click(function () {
            $(".nav").removeClass("nav_is-active");
            $(".mobile_menu").removeClass("menu_is-close");
        })
    });
}