import "./bootstrap";

import Alpine from "alpinejs";
import money from "alpinejs-money";
import mask from "@alpinejs/mask";

window.Alpine = Alpine;

Alpine.plugin(money);
Alpine.plugin(mask);
Alpine.start();

import "./swiper";
let USDollar = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",
});
