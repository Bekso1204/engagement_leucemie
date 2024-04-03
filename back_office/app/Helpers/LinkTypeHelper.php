<?php

function convertToIcon($valeur) {
    switch ($valeur) {
        case "site":
            return 'ri-global-line'; //icone de site internet
        case "facebook":
            return 'ri-facebook-line';   //icone facebook
        case "twitter":
            return 'ri-twitter-x-line';   //icone twitter
        case "instagram":
            return 'ri-instagram-line';   //icone instagram
        case "tiktok":
            return 'ri-tiktok-line';   //icone tikTok
    }
}

?>