baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByClassName("bitcoin-chart");
var embedder = scripts[scripts.length - 1];
var cccTheme = {
    "General": {
        "background": "#2359ce",
        "borderWidth": "0",
        "borderColor": "fff",
        "borderRadius": "0"
    },
    "Header": {
        "background": "#2359ce",
        "color": "#fff",
        "displayFollowers": false
    },
    "Followers": {
        "background": "#2359ce",
        "color": "#fed17b",
        "borderColor": "#2359ce",
        "counterBorderColor": "#2359ce"
    },
    "Data": {
        "priceColor": "#fff",
        "infoLabelColor": "#fff",
        "infoValueColor": "#fff"
    },
    "Chart": {
        "fillColor": "#3268dd",
        "borderColor": "#2359ce"
    },
    "Trend": {
        "colorUnchanged": "#2359ce"
    },
    "Conversion": {
        "color": "#fff"
    }
};
(function() {
    var appName = encodeURIComponent(window.location.hostname);
    if (appName == "") {
        appName = "local";
    }
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    var theUrl = baseUrl + 'serve/v2/coin/chart?fsym=BTC&tsym=USD&period=1M';
    s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
    embedder.parentNode.appendChild(s);
})();