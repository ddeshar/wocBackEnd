<?php
	$currentUrl = url()->current();
 
    $active = [
        '0' => 'Publish',
        '1' => 'Don\'t Publish' 
    ];

    $type = [1 => 'ลิ้งจากภายนอก',2 => 'ลิ้งภายใน',3 => 'เพจ'];

	function fas_icons(){
		$json = [
			"",
			"fab fa-500px",
			"fab fa-accessible-icon",
			"fab fa-accusoft",
			"fas fa-address-book", "far fa-address-book",
			"fas fa-address-card", "far fa-address-card",
			"fas fa-adjust",
			"fab fa-adn",
			"fab fa-adversal",
			"fab fa-affiliatetheme",
			"fab fa-algolia",
			"fas fa-align-center",
			"fas fa-align-justify",
			"fas fa-align-left",
			"fas fa-align-right",
			"fab fa-amazon",
			"fas fa-ambulance",
			"fas fa-american-sign-language-interpreting",
			"fab fa-amilia",
			"fas fa-anchor",
			"fab fa-android",
			"fab fa-angellist",
			"fas fa-angle-double-down",
			"fas fa-angle-double-left",
			"fas fa-angle-double-right",
			"fas fa-angle-double-up",
			"fas fa-angle-down",
			"fas fa-angle-left",
			"fas fa-angle-right",
			"fas fa-angle-up",
			"fab fa-angrycreative",
			"fab fa-angular",
			"fab fa-app-store",
			"fab fa-app-store-ios",
			"fab fa-apper",
			"fab fa-apple",
			"fab fa-apple-pay",
			"fas fa-archive",
			"fas fa-arrow-alt-circle-down", "far fa-arrow-alt-circle-down",
			"fas fa-arrow-alt-circle-left", "far fa-arrow-alt-circle-left",
			"fas fa-arrow-alt-circle-right", "far fa-arrow-alt-circle-right",
			"fas fa-arrow-alt-circle-up", "far fa-arrow-alt-circle-up",
			"fas fa-arrow-circle-down",
			"fas fa-arrow-circle-left",
			"fas fa-arrow-circle-right",
			"fas fa-arrow-circle-up",
			"fas fa-arrow-down",
			"fas fa-arrow-left",
			"fas fa-arrow-right",
			"fas fa-arrow-up",
			"fas fa-arrows-alt",
			"fas fa-arrows-alt-h",
			"fas fa-arrows-alt-v",
			"fas fa-assistive-listening-systems",
			"fas fa-asterisk",
			"fab fa-asymmetrik",
			"fas fa-at",
			"fab fa-audible",
			"fas fa-audio-description",
			"fab fa-autoprefixer",
			"fab fa-avianex",
			"fab fa-aviato",
			"fab fa-aws",
			"fas fa-backward",
			"fas fa-balance-scale",
			"fas fa-ban",
			"fab fa-bandcamp",
			"fas fa-barcode",
			"fas fa-bars",
			"fas fa-bath",
			"fas fa-battery-empty",
			"fas fa-battery-full",
			"fas fa-battery-half",
			"fas fa-battery-quarter",
			"fas fa-battery-three-quarters",
			"fas fa-bed",
			"fas fa-beer",
			"fab fa-behance",
			"fab fa-behance-square",
			"fas fa-bell", "far fa-bell",
			"fas fa-bell-slash", "far fa-bell-slash",
			"fas fa-bicycle",
			"fab fa-bimobject",
			"fas fa-binoculars",
			"fas fa-birthday-cake",
			"fab fa-bitbucket",
			"fab fa-bitcoin",
			"fab fa-bity",
			"fab fa-black-tie",
			"fab fa-blackberry",
			"fas fa-blind",
			"fab fa-blogger",
			"fab fa-blogger-b",
			"fab fa-bluetooth",
			"fab fa-bluetooth-b",
			"fas fa-bold",
			"fas fa-bolt",
			"fas fa-bomb",
			"fas fa-book",
			"fas fa-bookmark", "far fa-bookmark",
			"fas fa-braille",
			"fas fa-briefcase",
			"fab fa-btc",
			"fas fa-bug",
			"fas fa-building", "far fa-building",
			"fas fa-bullhorn",
			"fas fa-bullseye",
			"fab fa-buromobelexperte",
			"fas fa-bus",
			"fab fa-buysellads",
			"fas fa-calculator",
			"fas fa-calendar", "far fa-calendar",
			"fas fa-calendar-alt", "far fa-calendar-alt",
			"fas fa-calendar-check", "far fa-calendar-check",
			"fas fa-calendar-minus", "far fa-calendar-minus",
			"fas fa-calendar-plus", "far fa-calendar-plus",
			"fas fa-calendar-times", "far fa-calendar-times",
			"fas fa-camera",
			"fas fa-camera-retro",
			"fas fa-car",
			"fas fa-caret-down",
			"fas fa-caret-left",
			"fas fa-caret-right",
			"fas fa-caret-square-down", "far fa-caret-square-down",
			"fas fa-caret-square-left", "far fa-caret-square-left",
			"fas fa-caret-square-right", "far fa-caret-square-right",
			"fas fa-caret-square-up", "far fa-caret-square-up",
			"fas fa-caret-up",
			"fas fa-cart-arrow-down",
			"fas fa-cart-plus",
			"fab fa-cc-amex",
			"fab fa-cc-apple-pay",
			"fab fa-cc-diners-club",
			"fab fa-cc-discover",
			"fab fa-cc-jcb",
			"fab fa-cc-mastercard",
			"fab fa-cc-paypal",
			"fab fa-cc-stripe",
			"fab fa-cc-visa",
			"fab fa-centercode",
			"fas fa-certificate",
			"fas fa-chart-area",
			"fas fa-chart-bar", "far fa-chart-bar",
			"fas fa-chart-line",
			"fas fa-chart-pie",
			"fas fa-check",
			"fas fa-check-circle", "far fa-check-circle",
			"fas fa-check-square", "far fa-check-square",
			"fas fa-chevron-circle-down",
			"fas fa-chevron-circle-left",
			"fas fa-chevron-circle-right",
			"fas fa-chevron-circle-up",
			"fas fa-chevron-down",
			"fas fa-chevron-left",
			"fas fa-chevron-right",
			"fas fa-chevron-up",
			"fas fa-child",
			"fab fa-chrome",
			"fas fa-circle", "far fa-circle",
			"fas fa-circle-notch",
			"fas fa-clipboard", "far fa-clipboard",
			"fas fa-clock", "far fa-clock",
			"fas fa-clone", "far fa-clone",
			"fas fa-closed-captioning", "far fa-closed-captioning",
			"fas fa-cloud",
			"fas fa-cloud-download-alt",
			"fas fa-cloud-upload-alt",
			"fab fa-cloudscale",
			"fab fa-cloudsmith",
			"fab fa-cloudversify",
			"fas fa-code",
			"fas fa-code-branch",
			"fab fa-codepen",
			"fab fa-codiepie",
			"fas fa-coffee",
			"fas fa-cog",
			"fas fa-cogs",
			"fas fa-columns",
			"fas fa-comment", "far fa-comment",
			"fas fa-comment-alt", "far fa-comment-alt",
			"fas fa-comments", "far fa-comments",
			"fas fa-compass", "far fa-compass",
			"fas fa-compress",
			"fab fa-connectdevelop",
			"fab fa-contao",
			"fas fa-copy", "far fa-copy",
			"fas fa-copyright", "far fa-copyright",
			"fab fa-cpanel",
			"fab fa-creative-commons",
			"fas fa-credit-card", "far fa-credit-card",
			"fas fa-crop",
			"fas fa-crosshairs",
			"fab fa-css3",
			"fab fa-css3-alt",
			"fas fa-cube",
			"fas fa-cubes",
			"fas fa-cut",
			"fab fa-cuttlefish",
			"fab fa-d-and-d",
			"fab fa-dashcube",
			"fas fa-database",
			"fas fa-deaf",
			"fab fa-delicious",
			"fab fa-deploydog",
			"fab fa-deskpro",
			"fas fa-desktop",
			"fab fa-deviantart",
			"fab fa-digg",
			"fab fa-digital-ocean",
			"fab fa-discord",
			"fab fa-discourse",
			"fab fa-dochub",
			"fab fa-docker",
			"fas fa-dollar-sign",
			"fas fa-dot-circle", "far fa-dot-circle",
			"fas fa-download",
			"fab fa-draft2digital",
			"fab fa-dribbble",
			"fab fa-dribbble-square",
			"fab fa-dropbox",
			"fab fa-drupal",
			"fab fa-dyalog",
			"fab fa-earlybirds",
			"fab fa-edge",
			"fas fa-edit", "far fa-edit",
			"fas fa-eject",
			"fas fa-ellipsis-h",
			"fas fa-ellipsis-v",
			"fab fa-ember",
			"fab fa-empire",
			"fas fa-envelope", "far fa-envelope",
			"fas fa-envelope-open", "far fa-envelope-open",
			"fas fa-envelope-square",
			"fab fa-envira",
			"fas fa-eraser",
			"fab fa-erlang",
			"fab fa-etsy",
			"fas fa-euro-sign",
			"fas fa-exchange-alt",
			"fas fa-exclamation",
			"fas fa-exclamation-circle",
			"fas fa-exclamation-triangle",
			"fas fa-expand",
			"fas fa-expand-arrows-alt",
			"fab fa-expeditedssl",
			"fas fa-external-link-alt",
			"fas fa-external-link-square-alt",
			"fas fa-eye",
			"fas fa-eye-dropper",
			"fas fa-eye-slash", "far fa-eye-slash",
			"fab fa-facebook",
			"fab fa-facebook-f",
			"fab fa-facebook-messenger",
			"fab fa-facebook-square",
			"fas fa-fast-backward",
			"fas fa-fast-forward",
			"fas fa-fax",
			"fas fa-female",
			"fas fa-fighter-jet",
			"fas fa-file", "far fa-file",
			"fas fa-file-alt", "far fa-file-alt",
			"fas fa-file-archive", "far fa-file-archive",
			"fas fa-file-audio", "far fa-file-audio",
			"fas fa-file-code", "far fa-file-code",
			"fas fa-file-excel", "far fa-file-excel",
			"fas fa-file-image", "far fa-file-image",
			"fas fa-file-pdf", "far fa-file-pdf",
			"fas fa-file-powerpoint", "far fa-file-powerpoint",
			"fas fa-file-video", "far fa-file-video",
			"fas fa-file-word", "far fa-file-word",
			"fas fa-film",
			"fas fa-filter",
			"fas fa-fire",
			"fas fa-fire-extinguisher",
			"fab fa-firefox",
			"fab fa-first-order",
			"fab fa-firstdraft",
			"fas fa-flag", "far fa-flag",
			"fas fa-flag-checkered",
			"fas fa-flask",
			"fab fa-flickr",
			"fab fa-fly",
			"fas fa-folder", "far fa-folder",
			"fas fa-folder-open", "far fa-folder-open",
			"fas fa-font",
			"fab fa-font-awesome",
			"fab fa-font-awesome-alt",
			"fab fa-font-awesome-flag",
			"fab fa-fonticons",
			"fab fa-fonticons-fi",
			"fab fa-fort-awesome",
			"fab fa-fort-awesome-alt",
			"fab fa-forumbee",
			"fas fa-forward",
			"fab fa-foursquare",
			"fab fa-free-code-camp",
			"fab fa-freebsd",
			"fas fa-frown", "far fa-frown",
			"fas fa-futbol", "far fa-futbol",
			"fas fa-gamepad",
			"fas fa-gavel",
			"fas fa-gem", "far fa-gem",
			"fas fa-genderless",
			"fab fa-get-pocket",
			"fab fa-gg",
			"fab fa-gg-circle",
			"fas fa-gift",
			"fab fa-git",
			"fab fa-git-square",
			"fab fa-github",
			"fab fa-github-alt",
			"fab fa-github-square",
			"fab fa-gitkraken",
			"fab fa-gitlab",
			"fab fa-gitter",
			"fas fa-glass-martini",
			"fab fa-glide",
			"fab fa-glide-g",
			"fas fa-globe",
			"fab fa-gofore",
			"fab fa-goodreads",
			"fab fa-goodreads-g",
			"fab fa-google",
			"fab fa-google-drive",
			"fab fa-google-play",
			"fab fa-google-plus",
			"fab fa-google-plus-g",
			"fab fa-google-plus-square",
			"fab fa-google-wallet",
			"fas fa-graduation-cap",
			"fab fa-gratipay",
			"fab fa-grav",
			"fab fa-gripfire",
			"fab fa-grunt",
			"fab fa-gulp",
			"fas fa-h-square",
			"fab fa-hacker-news",
			"fab fa-hacker-news-square",
			"fas fa-hand-lizard", "far fa-hand-lizard",
			"fas fa-hand-paper", "far fa-hand-paper",
			"fas fa-hand-peace", "far fa-hand-peace",
			"fas fa-hand-point-down", "far fa-hand-point-down",
			"fas fa-hand-point-left", "far fa-hand-point-left",
			"fas fa-hand-point-right", "far fa-hand-point-right",
			"fas fa-hand-point-up", "far fa-hand-point-up",
			"fas fa-hand-pointer", "far fa-hand-pointer",
			"fas fa-hand-rock", "far fa-hand-rock",
			"fas fa-hand-scissors", "far fa-hand-scissors",
			"fas fa-hand-spock", "far fa-hand-spock",
			"fas fa-handshake", "far fa-handshake",
			"fas fa-hashtag",
			"fas fa-hdd", "far fa-hdd",
			"fas fa-heading",
			"fas fa-headphones",
			"fas fa-heart", "far fa-heart",
			"fas fa-heartbeat",
			"fab fa-hire-a-helper",
			"fas fa-history",
			"fas fa-home",
			"fab fa-hooli",
			"fas fa-hospital", "far fa-hospital",
			"fab fa-hotjar",
			"fas fa-hourglass", "far fa-hourglass",
			"fas fa-hourglass-end",
			"fas fa-hourglass-half",
			"fas fa-hourglass-start",
			"fab fa-houzz",
			"fab fa-html5",
			"fab fa-hubspot",
			"fas fa-i-cursor",
			"fas fa-id-badge", "far fa-id-badge",
			"fas fa-id-card", "far fa-id-card",
			"fas fa-image", "far fa-image",
			"fas fa-images", "far fa-images",
			"fab fa-imdb",
			"fas fa-inbox",
			"fas fa-indent",
			"fas fa-industry",
			"fas fa-info",
			"fas fa-info-circle",
			"fab fa-instagram",
			"fab fa-internet-explorer",
			"fab fa-ioxhost",
			"fas fa-italic",
			"fab fa-itunes",
			"fab fa-itunes-note",
			"fab fa-jenkins",
			"fab fa-joget",
			"fab fa-joomla",
			"fab fa-js",
			"fab fa-js-square",
			"fab fa-jsfiddle",
			"fas fa-key",
			"fas fa-keyboard", "far fa-keyboard",
			"fab fa-keycdn",
			"fab fa-kickstarter",
			"fab fa-kickstarter-k",
			"fas fa-language",
			"fas fa-laptop",
			"fab fa-laravel",
			"fab fa-lastfm",
			"fab fa-lastfm-square",
			"fas fa-leaf",
			"fab fa-leanpub",
			"fas fa-lemon", "far fa-lemon",
			"fab fa-less",
			"fas fa-level-down-alt",
			"fas fa-level-up-alt",
			"fas fa-life-ring", "far fa-life-ring",
			"fas fa-lightbulb", "far fa-lightbulb",
			"fab fa-line",
			"fas fa-link",
			"fab fa-linkedin",
			"fab fa-linkedin-in",
			"fab fa-linode",
			"fab fa-linux",
			"fas fa-lira-sign",
			"fas fa-list",
			"fas fa-list-alt", "far fa-list-alt",
			"fas fa-list-ol",
			"fas fa-list-ul",
			"fas fa-location-arrow",
			"fas fa-lock",
			"fas fa-lock-open",
			"fas fa-long-arrow-alt-down",
			"fas fa-long-arrow-alt-left",
			"fas fa-long-arrow-alt-right",
			"fas fa-long-arrow-alt-up",
			"fas fa-low-vision",
			"fab fa-lyft",
			"fab fa-magento",
			"fas fa-magic",
			"fas fa-magnet",
			"fas fa-male",
			"fas fa-map", "far fa-map",
			"fas fa-map-marker",
			"fas fa-map-marker-alt",
			"fas fa-map-pin",
			"fas fa-map-signs",
			"fas fa-mars",
			"fas fa-mars-double",
			"fas fa-mars-stroke",
			"fas fa-mars-stroke-h",
			"fas fa-mars-stroke-v",
			"fab fa-maxcdn",
			"fab fa-medapps",
			"fab fa-medium",
			"fab fa-medium-m",
			"fas fa-medkit",
			"fab fa-medrt",
			"fab fa-meetup",
			"fas fa-meh", "far fa-meh",
			"fas fa-mercury",
			"fas fa-microchip",
			"fas fa-microphone",
			"fas fa-microphone-slash",
			"fab fa-microsoft",
			"fas fa-minus",
			"fas fa-minus-circle",
			"fas fa-minus-square", "far fa-minus-square",
			"fab fa-mix",
			"fab fa-mixcloud",
			"fab fa-mizuni",
			"fas fa-mobile",
			"fas fa-mobile-alt",
			"fab fa-modx",
			"fab fa-monero",
			"fas fa-money-bill-alt", "far fa-money-bill-alt",
			"fas fa-moon", "far fa-moon",
			"fas fa-motorcycle",
			"fas fa-mouse-pointer",
			"fas fa-music",
			"fab fa-napster",
			"fas fa-neuter",
			"fas fa-newspaper", "far fa-newspaper",
			"fab fa-nintendo-switch",
			"fab fa-node",
			"fab fa-node-js",
			"fab fa-npm",
			"fab fa-ns8",
			"fab fa-nutritionix",
			"fas fa-object-group", "far fa-object-group",
			"fas fa-object-ungroup", "far fa-object-ungroup",
			"fab fa-odnoklassniki",
			"fab fa-odnoklassniki-square",
			"fab fa-opencart",
			"fab fa-openid",
			"fab fa-opera",
			"fab fa-optin-monster",
			"fab fa-osi",
			"fas fa-outdent",
			"fab fa-page4",
			"fab fa-pagelines",
			"fas fa-paint-brush",
			"fab fa-palfed",
			"fas fa-paper-plane", "far fa-paper-plane",
			"fas fa-paperclip",
			"fas fa-paragraph",
			"fas fa-paste",
			"fab fa-patreon",
			"fas fa-pause",
			"fas fa-pause-circle", "far fa-pause-circle",
			"fas fa-paw",
			"fab fa-paypal",
			"fas fa-pen-square",
			"fas fa-pencil-alt",
			"fas fa-percent",
			"fab fa-periscope",
			"fab fa-phabricator",
			"fab fa-phoenix-framework",
			"fas fa-phone",
			"fas fa-phone-square",
			"fas fa-phone-volume",
			"fab fa-pied-piper",
			"fab fa-pied-piper-alt",
			"fab fa-pied-piper-pp",
			"fab fa-pinterest",
			"fab fa-pinterest-p",
			"fab fa-pinterest-square",
			"fas fa-plane",
			"fas fa-play",
			"fas fa-play-circle", "far fa-play-circle",
			"fab fa-playstation",
			"fas fa-plug",
			"fas fa-plus",
			"fas fa-plus-circle",
			"fas fa-plus-square", "far fa-plus-square",
			"fas fa-podcast",
			"fas fa-pound-sign",
			"fas fa-power-off",
			"fas fa-print",
			"fab fa-product-hunt",
			"fab fa-pushed",
			"fas fa-puzzle-piece",
			"fab fa-python",
			"fab fa-qq",
			"fas fa-qrcode",
			"fas fa-question",
			"fas fa-question-circle", "far fa-question-circle",
			"fab fa-quora",
			"fas fa-quote-left",
			"fas fa-quote-right",
			"fas fa-random",
			"fab fa-ravelry",
			"fab fa-react",
			"fab fa-rebel",
			"fas fa-recycle",
			"fab fa-red-river",
			"fab fa-reddit",
			"fab fa-reddit-alien",
			"fab fa-reddit-square",
			"fas fa-redo",
			"fas fa-redo-alt",
			"fas fa-registered", "far fa-registered",
			"fab fa-rendact",
			"fab fa-renren",
			"fas fa-reply",
			"fas fa-reply-all",
			"fab fa-replyd",
			"fab fa-resolving",
			"fas fa-retweet",
			"fas fa-road",
			"fas fa-rocket",
			"fab fa-rocketchat",
			"fab fa-rockrms",
			"fas fa-rss",
			"fas fa-rss-square",
			"fas fa-ruble-sign",
			"fas fa-rupee-sign",
			"fab fa-safari",
			"fab fa-sass",
			"fas fa-save", "far fa-save",
			"fab fa-schlix",
			"fab fa-scribd",
			"fas fa-search",
			"fas fa-search-minus",
			"fas fa-search-plus",
			"fab fa-searchengin",
			"fab fa-sellcast",
			"fab fa-sellsy",
			"fas fa-server",
			"fab fa-servicestack",
			"fas fa-share",
			"fas fa-share-alt",
			"fas fa-share-alt-square",
			"fas fa-share-square", "far fa-share-square",
			"fas fa-shekel-sign",
			"fas fa-shield-alt",
			"fas fa-ship",
			"fab fa-shirtsinbulk",
			"fas fa-shopping-bag",
			"fas fa-shopping-basket",
			"fas fa-shopping-cart",
			"fas fa-shower",
			"fas fa-sign-in-alt",
			"fas fa-sign-language",
			"fas fa-sign-out-alt",
			"fas fa-signal",
			"fab fa-simplybuilt",
			"fab fa-sistrix",
			"fas fa-sitemap",
			"fab fa-skyatlas",
			"fab fa-skype",
			"fab fa-slack",
			"fab fa-slack-hash",
			"fas fa-sliders-h",
			"fab fa-slideshare",
			"fas fa-smile", "far fa-smile",
			"fab fa-snapchat",
			"fab fa-snapchat-ghost",
			"fab fa-snapchat-square",
			"fas fa-snowflake", "far fa-snowflake",
			"fas fa-sort",
			"fas fa-sort-alpha-down",
			"fas fa-sort-alpha-up",
			"fas fa-sort-amount-down",
			"fas fa-sort-amount-up",
			"fas fa-sort-down",
			"fas fa-sort-numeric-down",
			"fas fa-sort-numeric-up",
			"fas fa-sort-up",
			"fab fa-soundcloud",
			"fas fa-space-shuttle",
			"fab fa-speakap",
			"fas fa-spinner",
			"fab fa-spotify",
			"fas fa-square", "far fa-square",
			"fab fa-stack-exchange",
			"fab fa-stack-overflow",
			"fas fa-star", "far fa-star",
			"fas fa-star-half", "far fa-star-half",
			"fab fa-staylinked",
			"fab fa-steam",
			"fab fa-steam-square",
			"fab fa-steam-symbol",
			"fas fa-step-backward",
			"fas fa-step-forward",
			"fas fa-stethoscope",
			"fab fa-sticker-mule",
			"fas fa-sticky-note", "far fa-sticky-note",
			"fas fa-stop",
			"fas fa-stop-circle", "far fa-stop-circle",
			"fab fa-strava",
			"fas fa-street-view",
			"fas fa-strikethrough",
			"fab fa-stripe",
			"fab fa-stripe-s",
			"fab fa-studiovinari",
			"fab fa-stumbleupon",
			"fab fa-stumbleupon-circle",
			"fas fa-subscript",
			"fas fa-subway",
			"fas fa-suitcase",
			"fas fa-sun", "far fa-sun",
			"fab fa-superpowers",
			"fas fa-superscript",
			"fab fa-supple",
			"fas fa-sync",
			"fas fa-sync-alt",
			"fas fa-table",
			"fas fa-tablet",
			"fas fa-tablet-alt",
			"fas fa-tachometer-alt",
			"fas fa-tag",
			"fas fa-tags",
			"fas fa-tasks",
			"fas fa-taxi",
			"fab fa-telegram",
			"fab fa-telegram-plane",
			"fab fa-tencent-weibo",
			"fas fa-terminal",
			"fas fa-text-height",
			"fas fa-text-width",
			"fas fa-th",
			"fas fa-th-large",
			"fas fa-th-list",
			"fab fa-themeisle",
			"fas fa-thermometer-empty",
			"fas fa-thermometer-full",
			"fas fa-thermometer-half",
			"fas fa-thermometer-quarter",
			"fas fa-thermometer-three-quarters",
			"fas fa-thumbs-down", "far fa-thumbs-down",
			"fas fa-thumbs-up", "far fa-thumbs-up",
			"fas fa-thumbtack",
			"fas fa-ticket-alt",
			"fas fa-times",
			"fas fa-times-circle", "far fa-times-circle",
			"fas fa-tint",
			"fas fa-toggle-off",
			"fas fa-toggle-on",
			"fas fa-trademark",
			"fas fa-train",
			"fas fa-transgender",
			"fas fa-transgender-alt",
			"fas fa-trash",
			"fas fa-trash-alt", "far fa-trash-alt",
			"fas fa-tree",
			"fab fa-trello",
			"fab fa-tripadvisor",
			"fas fa-trophy",
			"fas fa-truck",
			"fas fa-tty",
			"fab fa-tumblr",
			"fab fa-tumblr-square",
			"fas fa-tv",
			"fab fa-twitch",
			"fab fa-twitter",
			"fab fa-twitter-square",
			"fab fa-typo3",
			"fab fa-uber",
			"fab fa-uikit",
			"fas fa-umbrella",
			"fas fa-underline",
			"fas fa-undo",
			"fas fa-undo-alt",
			"fab fa-uniregistry",
			"fas fa-universal-access",
			"fas fa-university",
			"fas fa-unlink",
			"fas fa-unlock",
			"fas fa-unlock-alt",
			"fab fa-untappd",
			"fas fa-upload",
			"fab fa-usb",
			"fas fa-user", "far fa-user",
			"fas fa-user-circle", "far fa-user-circle",
			"fas fa-user-md",
			"fas fa-user-plus",
			"fas fa-user-secret",
			"fas fa-user-times",
			"fas fa-users",
			"fab fa-ussunnah",
			"fas fa-utensil-spoon",
			"fas fa-utensils",
			"fab fa-vaadin",
			"fas fa-venus",
			"fas fa-venus-double",
			"fas fa-venus-mars",
			"fab fa-viacoin",
			"fab fa-viadeo",
			"fab fa-viadeo-square",
			"fab fa-viber",
			"fas fa-video",
			"fab fa-vimeo",
			"fab fa-vimeo-square",
			"fab fa-vimeo-v",
			"fab fa-vine",
			"fab fa-vk",
			"fab fa-vnv",
			"fas fa-volume-down",
			"fas fa-volume-off",
			"fas fa-volume-up",
			"fab fa-vuejs",
			"fab fa-weibo",
			"fab fa-weixin",
			"fab fa-whatsapp",
			"fab fa-whatsapp-square",
			"fas fa-wheelchair",
			"fab fa-whmcs",
			"fas fa-wifi",
			"fab fa-wikipedia-w",
			"fas fa-window-close", "far fa-window-close",
			"fas fa-window-maximize", "far fa-window-maximize",
			"fas fa-window-minimize",
			"fas fa-window-restore", "far fa-window-restore",
			"fab fa-windows",
			"fas fa-won-sign",
			"fab fa-wordpress",
			"fab fa-wordpress-simple",
			"fab fa-wpbeginner",
			"fab fa-wpexplorer",
			"fab fa-wpforms",
			"fas fa-wrench",
			"fab fa-xbox",
			"fab fa-xing",
			"fab fa-xing-square",
			"fab fa-y-combinator",
			"fab fa-yahoo",
			"fab fa-yandex",
			"fab fa-yandex-international",
			"fab fa-yelp",
			"fas fa-yen-sign",
			"fab fa-yoast",
			"fab fa-youtube"
		];

		$icons = [];
			foreach ($json as $icon => $value) {
				// $icons[$value] = '&lt;i class=" '.$value.'"&gt;&lt;/i&gt;'. $value;
				$icons[$value] = $value;

				// <option value="fab fa-500px">&lt;i class=" fab fa-500px"&gt;&lt;/i&gt;fab fa-500px</option>
			}
		
			return $icons;
	}

	$dataRoute = Wocglobal::RouteMenu();

?>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="hwpwrap">
	<div class="custom-wp-admin wp-admin wp-core-ui js   menu-max-depth-0 nav-menus-php auto-fold admin-bar">
		<div id="wpwrap">
			<div id="wpcontent">
				<div id="wpbody">
					<div id="wpbody-content">

						<div class="wrap">
							
							<div class="manage-menus">
								<form method="get" action="{{ $currentUrl }}">
									{!! Menu::select('menu', $menulist) !!}

									<span class="submit-btn">
										<input type="submit" class="button-secondary" value="Choose">
									</span>
									<span class="add-new-menu-action"> or <a href="{{ $currentUrl }}?action=edit&menu=0">Create new menu</a>. </span>
								</form>
							</div>

							<div id="nav-menus-frame">
								@if(request()->has('menu')  && !empty(request()->input("menu")))
								<div id="menu-settings-column" class="metabox-holder">

									<div class="clear"></div>

									<form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
										<div id="side-sortables" class="accordion-container">
											<ul class="outer-border">
												<li class="control-section accordion-section  open add-page" id="add-page">
													<h3 class="accordion-section-title hndle" tabindex="0"> Custom Link <span class="screen-reader-text">Press return or enter to expand</span></h3>
													<div class="accordion-section-content ">
														<div class="inside">
															<div class="customlinkdiv" id="customlinkdiv">

																<div class="form-group">
																	{!! Form::label('label', 'Title', ['class' => 'control-label']) !!}
																	{!! Form::text('label', isset($item->label) ? $item->label : null, ['class' => 'form-control', 'id' => 'custom-menu-item-label']) !!}
																</div>

																<div class="form-group" id="menu-item-name-wrap">
																	{!! Form::label('linktype', 'ประเภทของลิ้ง', ['class' => 'control-label']) !!}
																	{!! Form::select('linktype', $type, isset($item->linktype) ? $item->linktype : null, ['class' => 'form-control', 'id' => 'custom-menu-item-linktype']) !!}
																</div>

																<div class="form-group" id="external">
																	{!! Form::label('external', 'ลิ้งจากภายนอก :', ['class' => 'control-label']) !!}
																	{!! Form::text('external', isset($item->link) ? $ext : null,  ['class' => 'form-control', 'id' => 'custom-menu-item-external', 'placeholder'=>'URL']) !!}

																	@if($errors->has('link'))
																	<span class="text-danger">{{ $errors->first('link') }}</span>
																	@endif
																</div>

																<div class="form-group" id="internal" style="display:none;">
																	{!! Form::label('internal', 'ลิ้งภายใน :', ['class' => 'control-label']) !!}
																	{!! Form::select('internal', $dataRoute, isset($item->link) ? $item->link : null, ['class' => 'form-control', 'id' => 'custom-menu-item-internal']) !!}

																	@if($errors->has('link'))
																	<span class="text-danger">{{ $errors->first('link') }}</span>
																	@endif
																</div>

																<div class="form-group" id="page" style="display:none;">
																	{!! Form::label('page', 'เพจ :', ['class' => 'control-label']) !!}
																	{!! Form::select('page', Wocglobal::pageMenu(), isset($item->link) ? $item->link : null, ['class' => 'form-control', 'id' => 'custom-menu-item-page']) !!}

																	@if($errors->has('link'))
																	<span class="text-danger">{{ $errors->first('link') }}</span>
																	@endif
																</div>
																
																<div class="form-group" id="menu-item-name-wrap">
																	{!! Form::label('class', 'Class', ['class' => 'control-label']) !!}
																	{!! Form::text('class', isset($item->class) ? $item->class : null, ['class' => 'form-control', 'id' => 'custom-menu-item-class']) !!}
																</div>
																
																<div class="form-group" id="menu-item-name-wrap">
																	{!! Form::label('icon', 'ICON : ', ['class' => 'control-label']) !!}
																	{!! Form::select('icon', fas_icons(), isset($item->icon) ? $item->icon :null, ['class' => 'form-control', 'id' => 'custom-menu-item-icon']) !!}
																</div>

																@if(!empty($roles))
																<p id="menu-item-role_id-wrap">
																	<label class="howto" for="custom-menu-item-name"> <span>Role</span>&nbsp;
																		<select id="custom-menu-item-role" name="role">
																			<option value="0">Select Role</option>
																			@foreach($roles as $role)
																				<option value="{{ $role->$roles_pk }}">{{ ucfirst($role->$roles_title_field) }}</option>
																			@endforeach
																		</select>
																	</label>
																</p>
																@endif

																<p class="button-controls">

																	<a  href="#" onclick="addcustommenu()"  class="button-secondary submit-add-to-menu right"  >Add menu item</a>
																	<span class="spinner" id="spincustomu"></span>
																</p>

															</div>
														</div>
													</div>
												</li>

											</ul>
										</div>
									</form>

								</div>
								@endif
								<div id="menu-management-liquid">
									<div id="menu-management">
										<form id="update-nav-menu" action="" method="post" enctype="multipart/form-data">
											<div class="menu-edit ">
												<div id="nav-menu-header">
													<div class="major-publishing-actions">
														<label class="menu-name-label howto open-label" for="menu-name"> <span>Name</span>
															<input name="menu-name" id="menu-name" type="text" class="menu-name regular-text menu-item-textbox" title="Enter menu name" value="@if(isset($indmenu)){{$indmenu->name}}@endif">
															<input type="hidden" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
														</label>

														@if(request()->has('action'))
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														@elseif(request()->has("menu"))
														<div class="publishing-action">
															<a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Save menu</a>
															<span class="spinner" id="spincustomu2"></span>
														</div>

														@else
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														@endif
													</div>
												</div>
												<div id="post-body">
													<div id="post-body-content">

														@if(request()->has("menu"))
														<h3>Menu Structure</h3>
														<div class="drag-instructions post-body-plain" style="">
															<p>
																Place each item in the order you prefer. Click on the arrow to the right of the item to display more configuration options.
															</p>
														</div>

														@else
														<h3>Menu Creation</h3>
														<div class="drag-instructions post-body-plain" style="">
															<p>
																Please enter the name and select "Create menu" button
															</p>
														</div>
														@endif

														<ul class="menu ui-sortable" id="menu-to-edit">
															@if(isset($menus))
															@foreach($menus as $m)
															<li id="menu-item-{{$m->id}}" class="menu-item menu-item-depth-{{$m->depth}} menu-item-page menu-item-edit-inactive pending" style="display: list-item;">
																<dl class="menu-item-bar">
																	<dt class="menu-item-handle">
																		<span class="item-title"> <span class="menu-item-title"> <span id="menutitletemp_{{$m->id}}">{{$m->label}}</span> <span style="color: transparent;">|{{$m->id}}|</span> </span> <span class="is-submenu" style="@if($m->depth==0)display: none;@endif">Subelement</span> </span>
																		<span class="item-controls"> <span class="item-type">Link</span> <span class="item-order hide-if-js"> <a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-up"><abbr title="Move Up">↑</abbr></a> | <a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-down"><abbr title="Move Down">↓</abbr></a> </span> <a class="item-edit" id="edit-{{$m->id}}" title=" " href="{{ $currentUrl }}?edit-menu-item={{$m->id}}#menu-item-settings-{{$m->id}}"> </a> </span>
																	</dt>
																</dl>

																<div class="menu-item-settings" id="menu-item-settings-{{$m->id}}">
																	<input type="hidden" class="edit-menu-item-id" name="menuid_{{$m->id}}" value="{{$m->id}}" />


																	<div class="form-group">
																		{!! Form::label('edit-menu-item-title-'.$m->id.'', 'Title', ['class' => 'control-label']) !!}
																		{!! Form::text('label_'.$m->id.'', isset($m->label) ? $m->label : null, ['class' => 'form-control edit-menu-item-label', 'id' => 'idlabelmenu_'.$m->id.'']) !!}
																	</div>

																	<div class="form-group" id="menu-item-name-wrap">
																		{!! Form::label('edit-menu-item-linktype', 'ประเภทของลิ้ง', ['class' => 'control-label']) !!}
																		{!! Form::select('linktype-edit', $type, isset($m->linktype) ? $m->linktype : null, ['class' => 'form-control edit-menu-item-linktype', 'id' => 'linktype_'.$m->id.'']) !!}
																	</div>

																	<div class="form-group" id="external-edit">
																		{!! Form::label('edit-menu-item-external', 'ลิ้งจากภายนอก :', ['class' => 'control-label']) !!}
																		{!! Form::text('external_'.$m->id.'', isset($m->link) ? $m->link : null,  ['class' => 'form-control edit-menu-item-external', 'id' => 'external_'.$m->id.'', 'placeholder'=>'URL']) !!}
																	</div>

																	<div class="form-group" id="internal-edit" style="display:none;">
																		{!! Form::label('edit-menu-item-internal', 'ลิ้งภายใน :', ['class' => 'control-label']) !!}
																		{!! Form::select('internal_'.$m->id.'', $dataRoute, isset($m->link) ? $m->link : null, ['class' => 'form-control edit-menu-item-internal', 'id' => 'internal_'.$m->id.'']) !!}
																	</div>

																	<div class="form-group" id="page-edit" style="display:none;">
																		{!! Form::label('edit-menu-item-page', 'เพจ :', ['class' => 'control-label']) !!}
																		{!! Form::select('page_'.$m->id.'', Wocglobal::pageMenu(), isset($m->link) ? $m->link : null, ['class' => 'form-control edit-menu-item-page', 'id' => 'page_'.$m->id.'']) !!}
																	</div>
																	
																	<div class="form-group" id="menu-item-name-wrap">
																		{!! Form::label('edit-menu-item-class-'.$m->id.'', 'Class CSS (optional)', ['class' => 'control-label']) !!}
																		{!! Form::text('class_menu_'.$m->id.'', isset($m->class) ? $m->class : null, ['class' => 'form-control edit-menu-item-classedit', 'id' => 'class_menu_'.$m->id.'']) !!}
																	</div>
																	
																	<div class="form-group" id="menu-item-name-wrap">
																		{!! Form::label('edit-menu-item-icon', 'ICON : ', ['class' => 'control-label']) !!}
																		{!! Form::select('icon_'.$m->id.'', fas_icons(), isset($m->icon) ? $m->icon :null, ['class' => 'form-control edit-menu-item-icon', 'id' => 'icon_'.$m->id.'']) !!}
																	</div>
																	
																	<div class="form-group" id="menu-item-name-wrap">
																		{!! Form::label('edit-menu-item-active', 'Status:', ['class' => 'control-label']) !!}
																		{!! Form::select('active_'.$m->id.'', $active, isset($m->active) ? $m->active : null, ['class' => 'form-control edit-menu-item-active', 'id' => 'active_'.$m->id.'']) !!}
																	</div>

																	@if(!empty($roles))
																	<p class="field-css-role description description-wide">
																		<label for="edit-menu-item-role-{{$m->id}}"> Role
																			<br>
																			<select id="role_menu_{{$m->id}}" class="widefat code edit-menu-item-role" name="role_menu_[{{$m->id}}]" >
																				<option value="0">Select Role</option>
																				@foreach($roles as $role)
																					<option @if($role->id == $m->role_id) selected @endif value="{{ $role->$roles_pk }}">{{ ucwords($role->$roles_title_field) }}</option>
																				@endforeach
																			</select>
																		</label>
																	</p>
																	@endif

																	<p class="field-move hide-if-no-js description description-wide">
																		<label> 
																			<span>Move</span> 
																			<a href="{{ $currentUrl }}" class="menus-move-up" style="display: none;">Move up</a> |
																			<a href="{{ $currentUrl }}" class="menus-move-down" style="display: inline;">Move Down</a> |
																			<a href="{{ $currentUrl }}" class="menus-move-left" style="display: none;"></a> 
																			<a href="{{ $currentUrl }}" class="menus-move-right" style="display: none;"></a> 
																			<a href="{{ $currentUrl }}" class="menus-move-top" style="display: none;">Top</a> 
																		</label>
																	</p>

																	<div class="menu-item-actions description-wide submitbox">

																		<a class="item-delete submitdelete deletion" id="delete-{{$m->id}}" href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{$m->id}}&_wpnonce=2844002501">Delete</a>
																		<span class="meta-sep hide-if-no-js"> | </span>
																		<a class="item-cancel submitcancel hide-if-no-js button-secondary" id="cancel-{{$m->id}}" href="{{ $currentUrl }}?edit-menu-item={{$m->id}}&cancel=1424297719#menu-item-settings-{{$m->id}}">Cancel</a>
																		<span class="meta-sep hide-if-no-js"> | </span>
																		<a onclick="updateitem({{$m->id}})" class="button button-primary updatemenu" id="update-{{$m->id}}" href="javascript:void(0)">Update item</a>

																	</div>

																</div>
																<ul class="menu-item-transport"></ul>
															</li>
															@endforeach
															@endif
														</ul>
														<div class="menu-settings">

														</div>
													</div>
												</div>
												<div id="nav-menu-footer">
													<div class="major-publishing-actions">

														@if(request()->has('action'))
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														@elseif(request()->has("menu"))
														<span class="delete-action"> <a class="submitdelete deletion menu-delete" onclick="deletemenu()" href="javascript:void(9)">Delete menu</a> </span>
														<div class="publishing-action">

															<a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Save menu</a>
															<span class="spinner" id="spincustomu2"></span>
														</div>

														@else
														<div class="publishing-action">
															<a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
														</div>
														@endif
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
</div>