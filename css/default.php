<?php


$overcast = '#F1F1F2';
$warmgray = '#BCBABE';
$ice = '#A1D6E2';
$glacier = '#1995AD';
$slate = '#626D71';
$ceramic = '#CDCDC0';
$latte = '#DDBC95';
$coffee = '#B38667';

?>

<style>
.rhombic {
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
}

.mw-225 {
    max-width: 225px;
}

.ribbled-bottom-only {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 95% calc(100% - 30px), 90% 100%, 85% calc(100% - 30px), 80% 100%, 75% calc(100% - 30px), 70% 100%, 65% calc(100% - 30px), 60% 100%, 55% calc(100% - 30px),
    50% 100%, 45% calc(100% - 30px), 40% 100%, 35% calc(100% - 30px), 30% 100%, 25% calc(100% - 30px), 20% 100%, 15% calc(100% - 30px), 10% 100%, 5% calc(100% - 30px), 0 100%, 0 0);
}

.ribbled-top-only {
    clip-path: polygon(0 0, 5% 30px, 10% 0, 15% 30px, 20% 0, 25% 30px, 30% 0, 35% 30px, 40% 0, 45% 30px, 50% 0, 55% 30px, 60% 0, 65% 30px, 70% 0, 75% 30px, 80% 0, 85% 30px, 90% 0, 95% 30px, 100% 0, 100% 100%, 0 100%, 0 0);
}

.ribbled-both {
    clip-path: polygon(0 0, 5% 30px, 10% 0, 15% 30px, 20% 0, 25% 30px, 30% 0, 35% 30px, 40% 0, 45% 30px, 50% 0, 55% 30px, 60% 0, 65% 30px, 70% 0, 75% 30px, 80% 0, 85% 30px, 90% 0, 95% 30px, 100% 0, 100% 100%,
    95% calc(100% - 30px), 90% 100%, 85% calc(100% - 30px), 80% 100%, 75% calc(100% - 30px), 70% 100%, 65% calc(100% - 30px), 60% 100%, 55% calc(100% - 30px),
    50% 100%, 45% calc(100% - 30px), 40% 100%, 35% calc(100% - 30px), 30% 100%, 25% calc(100% - 30px), 20% 100%, 15% calc(100% - 30px), 10% 100%, 5% calc(100% - 30px), 0 100%, 0 0);
}

video.w-100 {
    background: #000;
}

.bg-dark {
    background: <?= $slate; ?>;
    color: <?= $overcast; ?>;
}

.bg-blue {
    background: <?= $glacier; ?>;
    color: <?= $overcast; ?>;
}

.bg-light {
    background: <?= $overcast; ?>;
    color: <?= $slate; ?> !important;
}

.bg-ice {
    background: <?= $ice; ?>;
    color: <?= $slate; ?>;
}

.color-overcast {
    color: <?= $overcast; ?>;
}

.color-slate {
    color: <?= $slate; ?>;
}

.btn-outline-slate {
    color: <?= $slate; ?>;
    background-color: transparent;
    background-image: none;
    border-color: <?= $slate; ?>;
}

#mainNav .navbar-nav li.nav-item a.nav-link {
    color: <?= $overcast; ?>;
}

#mainNav .navbar-nav li.nav-item a.nav-link:hover {
    color: <?= $glacier; ?>;
}

#mainNav .navbar-nav > li.nav-item > a.nav-link.active {
    color: <?= $overcast; ?>;
    background: <?= $glacier; ?>;
}

#mainNav .navbar-nav > li.nav-item > a.nav-link.active:active, #mainNav .navbar-nav > li.nav-item > a.nav-link.active:focus, #mainNav .navbar-nav > li.nav-item > a.nav-link.active:hover {
    color: <?= $overcast; ?>;
    background: <?= $glacier; ?>;
}

button.bg-blue:hover {
    background: <?= $glacier; ?>;
    color: <?= $ceramic; ?>;
}

section {
    padding-top: 200px;
    padding-bottom: 200px;
}

.cl-effect-5 > li > a {
    position: relative;
    padding-top: 0;
    padding-bottom: 0;
    overflow: hidden;
}

.cl-effect-5 > li > a span[data-hover] {
    position: relative;
    display: inline-block;
    -webkit-transition: -webkit-transform .4s;
    transition: transform .4s;
}

.cl-effect-5 > li > a span[data-hover]:before {
    position: absolute;
    top: 100%;
    font-weight: 700;
    color: #171724;
    content: attr(data-hover);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: color .4s;
    transition: color .4s;
}

.cl-effect-5 > li > a:hover span[data-hover] {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
}

.cl-effect-5 > .active > a span[data-hover],
.cl-effect-5 > .active > a:focus span[data-hover],
.cl-effect-5 > .active > a:hover span[data-hover] {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
}

.cl-effect-5 > li > a {
    max-height: 40px;
    padding-top: 0!important;
    padding-bottom: 0!important;
}

footer {
    margin-top: -60px;
}


</style>