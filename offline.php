
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
	<head>
		<title>You are offline - CBT Made</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type='text/css' href='stylesheet'>
			:root {
				/* Master scales & styles */
				--sp-1: 4px;
				--sp-2: 8px;
				--sp-3: 12px;
				--sp-4: 16px;
				--sp-5: 20px;
				--sp-6: 24px;
				--sp-7: 32px;
				--sp-8: 40px;
				--sp-9: 48px;
				--sp-10: 64px;

				/* Border vars */
				--radius-1: 4px;
				--radius-2: 8px;
				--border-1px: 1px solid rgba( var(--theme-text_light), 0.15 );

				/* Variables used for specific contexts */
				--box--boxShadow: 0px 2px 4px -1px rgba( var(--theme-area_background_dark), 0.1 );
				--box--backgroundColor: rgb( var(--theme-area_background_reset) );
				--box--radius: var(--radius-1);
				--solved--borderColor: 44, 140, 105;
				

				/* Nav sizes */
				--header--height: 80px;
				--responsive-header--height: 55px;
				--logo--height: 100%;
				--responsive-logo--height: var(--logo--height);
				--primary-navigation--height: 52px;
				--secondary-navigation--height: 50px;

				/* Button styles */
				--button--radius: var(--radius-1);

				/* Page widths */
				--container--width: 1340px;
				--minimal_container--width: 1000px;
				
				/* Theme settings */
				/* Format is --theme-[setting-key] */
				--theme-active_input_border: 52, 128, 187;
	--theme-alternate_button: 23, 126, 201;
	--theme-alternate_button_font: 255, 255, 255;
	--theme-area_background: 237, 242, 247;
	--theme-area_background_dark: 45, 55, 72;
	--theme-area_background_light: 247, 250, 252;
	--theme-area_background_reset: 255, 255, 255;
	--theme-brand_primary: 23, 126, 201;
	--theme-button_bar: 255, 255, 255;
	--theme-comment_count: 237, 242, 247;
	--theme-comment_count_font: 45, 55, 72;
	--theme-featured: 44, 140, 105;
	--theme-footer_text: 53, 60, 65;
	--theme-header: 255, 255, 255;
	--theme-header_text: 45, 55, 72;
	--theme-important_button: 23, 126, 201;
	--theme-important_button_font: 255, 255, 255;
	--theme-item_status: 18, 101, 161;
	--theme-light_button: 232, 242, 250;
	--theme-light_button_font: 14, 76, 121;
	--theme-link: 26, 32, 44;
	--theme-link_button: 23, 126, 201;
	--theme-link_hover: 23, 126, 201;
	--theme-main_nav: 18, 101, 161;
	--theme-main_nav_font: 255, 255, 255;
	--theme-main_nav_tab: 255, 255, 255;
	--theme-main_nav_tab_font: 53, 60, 65;
	--theme-mentions: 61, 101, 148;
	--theme-mobile_back: 232, 233, 235;
	--theme-mobile_back_font: 53, 60, 65;
	--theme-moderated: 247, 237, 241;
	--theme-moderated_light: 252, 247, 249;
	--theme-moderated_text: 136, 14, 79;
	--theme-moderated_text_light: 164, 118, 143;
	--theme-normal_button: 23, 126, 201;
	--theme-normal_button_font: 255, 255, 255;
	--theme-notification_bubble: 54, 171, 128;
	--theme-page_background: 237, 240, 244;
	--theme-pagination_active: 62, 65, 72;
	--theme-poll_bar: 61, 101, 148;
	--theme-post_highlight: 253, 245, 231;
	--theme-post_highlight_border: 129, 98, 46;
	--theme-prefix: 23, 126, 201;
	--theme-price: 182, 63, 63;
	--theme-primary_button: 23, 126, 201;
	--theme-primary_button_font: 255, 255, 255;
	--theme-profile_header: 53, 60, 65;
	--theme-rating_hover: 61, 101, 148;
	--theme-rating_on: 255, 152, 0;
	--theme-secondary_title: 235, 237, 240;
	--theme-secondary_title_font: 130, 142, 153;
	--theme-section_title: 255, 255, 255;
	--theme-section_title_font: 26, 32, 44;
	--theme-selected: 235, 244, 249;
	--theme-selected_border: 23, 126, 201;
	--theme-step_background: 61, 101, 148;
	--theme-tab_background: 74, 85, 104;
	--theme-tag: 255, 244, 223;
	--theme-tag_font: 156, 66, 33;
	--theme-text_color: 53, 60, 65;
	--theme-text_dark: 0, 0, 0;
	--theme-text_light: 113, 128, 150;
	--theme-text_very_light: 255, 255, 255;
	--theme-timeline_color: 45, 55, 72;
	--theme-trophy_first: 250, 199, 70;
	--theme-trophy_first_font: 112, 73, 38;
	--theme-trophy_second: 192, 192, 192;
	--theme-trophy_third: 205, 127, 50;
	--theme-very_light_button: 255, 255, 255;
	--theme-very_light_button_font: 14, 76, 121;
	--theme-widget_title_bar: 255, 255, 255;
	--theme-widget_title_font: 26, 32, 44;

			}

			@-webkit-viewport { width: device-width; }
			@-moz-viewport { width: device-width; }
			@-ms-viewport { width: device-width; }
			@-o-viewport { width: device-width; }
			@viewport { width: device-width; }

			*{
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			}

			html {
				min-height: 100%;
				position: relative;
			}

			body {
				font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
				font-size: 16px;
				line-height: 1.5;
				color: rgb( var(--theme-text_color) );
				height: 100%;
				background-color: rgb( var(--theme-page_background) );
				margin: 0;
			}

			.ipsLayout_container {
				
					
						max-width: 95%;
					
				
				padding: 0 15px;
				margin: 0 auto;
				position: relative;
			}

			/* ======================================================== */
			/* TYPOGRAPHY */
			.ipsType_reset {
				margin: 0;
			}

			.ipsType_pageTitle,
			.ipsType_sectionHead {
				
					font-family: "Inter", "Helvetica Neue", Helvetica, Arial, sans-serif;
				
			}

			/* ======================================================== */
			/* Page title: the large text shown at the top of pages */
			.ipsType_pageTitle {
				font-size: 24.0px;
				font-weight: bold;
				line-height: 1.2;
				letter-spacing: -.02em;
				margin: 0;
				color: rgb( var(--theme-text_dark) );
			}

			/* ======================================================== */
			/* Section heading: a text-based heading for smaller sections */
			.ipsType_sectionHead {
				font-size: 18.0px;
				color: rgb( var(--theme-text_dark) );
				line-height: 24.0px;
				font-weight: bold;
				display: inline-block;
				margin: 0;
			}

			/* ======================================================== */
			/* BOX STYLES */
			.ipsBox {
				box-shadow: var(--box--boxShadow);
				border-radius: var(--box--radius);
				background-color: var(--box--backgroundColor);
			}

			/* ======================================================== */
			/* BASE BUTTONS */
			.ipsApp .ipsButton {
				font-size: 14.0px;
				font-weight: 400;
				text-align: center;
				text-decoration: none;
				text-shadow: none;
				white-space: nowrap;
				display: inline-block;
				vertical-align: middle;
				padding: 10px 20px;
				border-radius: var(--button--radius);
				border: 1px solid transparent;
				transition: 0.1s all linear;
				cursor: pointer;
				-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
				max-width: 100%;
				overflow: hidden;
				text-overflow: ellipsis;
			}

				.ipsApp .ipsButton:hover:not(:active) {
					background-image: linear-gradient(to bottom, rgba(255,255,255,0.08) 0%,rgba(255,255,255,0.08) 100%);
				}

				.ipsApp .ipsButton:active {
					border-color: rgba(0,0,0,0.1);
					background-image: linear-gradient(to bottom, rgba( var(--theme-text_dark), 0.1 ) 0%, rgba( var(--theme-text_dark), 0.1 ) 100%);
				}
				
				.ipsApp .ipsButton_important {
					font-weight: 500;
					background: #202020;
					color: rgb( var(--theme-important_button_font) );
				}

				.ipsApp .ipsButton_medium {
					font-size: 14.0px;
					line-height: 3;
					padding: 0 20px;
				}

				.ipsApp .ipsButton_fullWidth {
					display: block;
					width: 100%;
					text-overflow: ellipsis;
					overflow: hidden;
				}

			/* ======================================================== */
			/* HORIZONTAL RULE */
			hr.ipsHr {
				margin: 15px 0;
				height: 0;
				padding: 0;
				border: 1px solid rgba( var(--theme-text_color), 0.08 );
				border-width: 1px 0 0 0;
			}

			/* ======================================================== */
			/* OFFLINE SPECIFIC */
			.cOfflineBox {
				margin: var(--sp-8) auto 0;
				max-width: 475px;
				padding: var(--sp-5);
			}
		</style>
		<link rel='shortcut icon' href='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAzMCIgZmlsbD0iIzMzMzMzMyI+PHBhdGggZD0iTSAxNSAzIEMgMTQuMTY4NDMyIDMgMTMuNDU2MDYzIDMuNTA2NzIzOCAxMy4xNTQyOTcgNC4yMjg1MTU2IEwgMi4zMDA3ODEyIDIyLjk0NzI2NiBMIDIuMzAwNzgxMiAyMi45NDkyMTkgQSAyIDIgMCAwIDAgMiAyNCBBIDIgMiAwIDAgMCA0IDI2IEEgMiAyIDAgMCAwIDQuMTQwNjI1IDI1Ljk5NDE0MSBMIDQuMTQ0NTMxMiAyNiBMIDE1IDI2IEwgMjUuODU1NDY5IDI2IEwgMjUuODU5Mzc1IDI1Ljk5MjE4OCBBIDIgMiAwIDAgMCAyNiAyNiBBIDIgMiAwIDAgMCAyOCAyNCBBIDIgMiAwIDAgMCAyNy42OTkyMTkgMjIuOTQ3MjY2IEwgMjcuNjgzNTk0IDIyLjkxOTkyMiBBIDIgMiAwIDAgMCAyNy42ODE2NDEgMjIuOTE3OTY5IEwgMTYuODQ1NzAzIDQuMjI4NTE1NiBDIDE2LjU0MzkzNyAzLjUwNjcyMzggMTUuODMxNTY4IDMgMTUgMyB6IE0gMTMuNzg3MTA5IDExLjM1OTM3NSBMIDE2LjIxMjg5MSAxMS4zNTkzNzUgTCAxNi4wMTE3MTkgMTcuODMyMDMxIEwgMTMuOTg4MjgxIDE3LjgzMjAzMSBMIDEzLjc4NzEwOSAxMS4zNTkzNzUgeiBNIDE1LjAwMzkwNiAxOS44MTA1NDcgQyAxNS44MjU5MDYgMTkuODEwNTQ3IDE2LjMxODM1OSAyMC4yNTI4MTMgMTYuMzE4MzU5IDIxLjAwNzgxMiBDIDE2LjMxODM1OSAyMS43NDg4MTIgMTUuODI1OTA2IDIyLjE4OTQ1MyAxNS4wMDM5MDYgMjIuMTg5NDUzIEMgMTQuMTc1OTA2IDIyLjE4OTQ1MyAxMy42Nzk2ODggMjEuNzQ4ODEzIDEzLjY3OTY4OCAyMS4wMDc4MTIgQyAxMy42Nzk2ODggMjAuMjUyODEzIDE0LjE3NDkwNiAxOS44MTA1NDcgMTUuMDAzOTA2IDE5LjgxMDU0NyB6IiBmaWxsPSIjMzMzMzMzIi8+PC9zdmc+Cg==' type="image/svg+xml">
	</head>
	<body class='ipsApp ipsApp_front ipsClearfix ipsLayout_noBackground ipsClearfix'>
		<div class='ipsLayout_container'>

			<div class='cOfflineBox ipsBox'>
				<h1 class='ipsType_pageTitle'>CBT Made</h1>
				
				<hr class='ipsHr'>

				<h2 class='ipsType_sectionHead'>You appear to be offline</h2>
				<p>
					We're unable to load this page because it looks like your device isn't connected to the internet right now.
				</p>
				<p>
					Check your connection then click the button below to try reloading this page.
				</p>

				<hr class='ipsHr'>

				<button onclick="javascript: window.location.reload()" class='ipsButton ipsButton_important ipsButton_medium ipsButton_fullWidth'>
					Try Again
				</button>
			</div>
		</div>
	</body>
</html>