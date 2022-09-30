<!DOCTYPE html>
<html class="default" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <style>
      .gm-err-container {
        height: 100%;
        width: 100%;
        display: table;
        background-color: #e8eaed;
        position: relative;
        left: 0;
        top: 0;
      }
      .gm-err-content {
        border-radius: 1px;
        padding-top: 0;
        padding-left: 10%;
        padding-right: 10%;
        position: static;
        vertical-align: middle;
        display: table-cell;
      }
      .gm-err-content a {
        color: #3c4043;
      }
      .gm-err-icon {
        text-align: center;
      }
      .gm-err-title {
        margin: 5px;
        margin-bottom: 20px;
        color: #3c4043;
        font-family: Roboto, Arial, sans-serif;
        text-align: center;
        font-size: 24px;
      }
      .gm-err-message {
        margin: 5px;
        color: #3c4043;
        font-family: Roboto, Arial, sans-serif;
        text-align: center;
        font-size: 12px;
      }
      .gm-err-autocomplete {
        padding-left: 20px;
        background-repeat: no-repeat;
        background-size: 15px 15px;
      }
    </style>
    <style>
      .gm-style-moc {
        background-color: rgba(0, 0, 0, 0.45);
        pointer-events: none;
        text-align: center;
        transition: opacity ease-in-out;
      }
      .gm-style-mot {
        color: white;
        font-family: Roboto, Arial, sans-serif;
        font-size: 22px;
        margin: 0;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
      }
    </style>
    <style>
      .gm-style img {
        max-width: none;
      }
      .gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
    </style>
    <style>
      :root {
        --litepicker-container-months-color-bg: #fff;
        --litepicker-container-months-box-shadow-color: #ddd;
        --litepicker-footer-color-bg: #fafafa;
        --litepicker-footer-box-shadow-color: #ddd;
        --litepicker-tooltip-color-bg: #fff;
        --litepicker-month-header-color: #333;
        --litepicker-button-prev-month-color: #9e9e9e;
        --litepicker-button-next-month-color: #9e9e9e;
        --litepicker-button-prev-month-color-hover: #2196f3;
        --litepicker-button-next-month-color-hover: #2196f3;
        --litepicker-month-width: calc(var(--litepicker-day-width) * 7);
        --litepicker-month-weekday-color: #9e9e9e;
        --litepicker-month-week-number-color: #9e9e9e;
        --litepicker-day-width: 38px;
        --litepicker-day-color: #333;
        --litepicker-day-color-hover: #2196f3;
        --litepicker-is-today-color: #f44336;
        --litepicker-is-in-range-color: #bbdefb;
        --litepicker-is-locked-color: #9e9e9e;
        --litepicker-is-start-color: #fff;
        --litepicker-is-start-color-bg: #2196f3;
        --litepicker-is-end-color: #fff;
        --litepicker-is-end-color-bg: #2196f3;
        --litepicker-button-cancel-color: #fff;
        --litepicker-button-cancel-color-bg: #9e9e9e;
        --litepicker-button-apply-color: #fff;
        --litepicker-button-apply-color-bg: #2196f3;
        --litepicker-button-reset-color: #909090;
        --litepicker-button-reset-color-hover: #2196f3;
        --litepicker-highlighted-day-color: #333;
        --litepicker-highlighted-day-color-bg: #ffeb3b;
      }
      .show-week-numbers {
        --litepicker-month-width: calc(var(--litepicker-day-width) * 8);
      }
      .litepicker {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 0.8em;
        display: none;
      }
      .litepicker button {
        border: none;
        background: none;
      }
      .litepicker .container__main {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }
      .litepicker .container__months {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background-color: var(--litepicker-container-months-color-bg);
        border-radius: 5px;
        -webkit-box-shadow: 0 0 5px var(--litepicker-container-months-box-shadow-color);
        box-shadow: 0 0 5px var(--litepicker-container-months-box-shadow-color);
        width: calc(var(--litepicker-month-width) + 10px);
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
      }
      .litepicker .container__months.columns-2 {
        width: calc((var(--litepicker-month-width) * 2) + 20px);
      }
      .litepicker .container__months.columns-3 {
        width: calc((var(--litepicker-month-width) * 3) + 30px);
      }
      .litepicker .container__months.columns-4 {
        width: calc((var(--litepicker-month-width) * 4) + 40px);
      }
      .litepicker .container__months.split-view .month-item-header .button-previous-month,
      .litepicker .container__months.split-view .month-item-header .button-next-month {
        visibility: visible;
      }
      .litepicker .container__months .month-item {
        padding: 5px;
        width: var(--litepicker-month-width);
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
      }
      .litepicker .container__months .month-item-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        font-weight: 500;
        padding: 10px 5px;
        text-align: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: var(--litepicker-month-header-color);
      }
      .litepicker .container__months .month-item-header div {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
      }
      .litepicker .container__months .month-item-header div > .month-item-name {
        margin-right: 5px;
      }
      .litepicker .container__months .month-item-header div > .month-item-year {
        padding: 0;
      }
      .litepicker .container__months .month-item-header .reset-button {
        color: var(--litepicker-button-reset-color);
      }
      .litepicker .container__months .month-item-header .reset-button > svg {
        fill: var(--litepicker-button-reset-color);
      }
      .litepicker .container__months .month-item-header .reset-button * {
        pointer-events: none;
      }
      .litepicker .container__months .month-item-header .reset-button:hover {
        color: var(--litepicker-button-reset-color-hover);
      }
      .litepicker .container__months .month-item-header .reset-button:hover > svg {
        fill: var(--litepicker-button-reset-color-hover);
      }
      .litepicker .container__months .month-item-header .button-previous-month,
      .litepicker .container__months .month-item-header .button-next-month {
        visibility: hidden;
        text-decoration: none;
        padding: 3px 5px;
        border-radius: 3px;
        -webkit-transition: color 0.3s, border 0.3s;
        transition: color 0.3s, border 0.3s;
        cursor: default;
      }
      .litepicker .container__months .month-item-header .button-previous-month *,
      .litepicker .container__months .month-item-header .button-next-month * {
        pointer-events: none;
      }
      .litepicker .container__months .month-item-header .button-previous-month {
        color: var(--litepicker-button-prev-month-color);
      }
      .litepicker .container__months .month-item-header .button-previous-month > svg,
      .litepicker .container__months .month-item-header .button-previous-month > img {
        fill: var(--litepicker-button-prev-month-color);
      }
      .litepicker .container__months .month-item-header .button-previous-month:hover {
        color: var(--litepicker-button-prev-month-color-hover);
      }
      .litepicker .container__months .month-item-header .button-previous-month:hover > svg {
        fill: var(--litepicker-button-prev-month-color-hover);
      }
      .litepicker .container__months .month-item-header .button-next-month {
        color: var(--litepicker-button-next-month-color);
      }
      .litepicker .container__months .month-item-header .button-next-month > svg,
      .litepicker .container__months .month-item-header .button-next-month > img {
        fill: var(--litepicker-button-next-month-color);
      }
      .litepicker .container__months .month-item-header .button-next-month:hover {
        color: var(--litepicker-button-next-month-color-hover);
      }
      .litepicker .container__months .month-item-header .button-next-month:hover > svg {
        fill: var(--litepicker-button-next-month-color-hover);
      }
      .litepicker .container__months .month-item-weekdays-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-self: center;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        color: var(--litepicker-month-weekday-color);
      }
      .litepicker .container__months .month-item-weekdays-row > div {
        padding: 5px 0;
        font-size: 85%;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        width: var(--litepicker-day-width);
        text-align: center;
      }
      .litepicker .container__months .month-item:first-child .button-previous-month {
        visibility: visible;
      }
      .litepicker .container__months .month-item:last-child .button-next-month {
        visibility: visible;
      }
      .litepicker .container__months .month-item.no-previous-month .button-previous-month {
        visibility: hidden;
      }
      .litepicker .container__months .month-item.no-next-month .button-next-month {
        visibility: hidden;
      }
      .litepicker .container__days {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        justify-self: center;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: center;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
      }
      .litepicker .container__days > div,
      .litepicker .container__days > a {
        padding: 5px 0;
        width: var(--litepicker-day-width);
      }
      .litepicker .container__days .day-item {
        color: var(--litepicker-day-color);
        text-align: center;
        text-decoration: none;
        border-radius: 3px;
        -webkit-transition: color 0.3s, border 0.3s;
        transition: color 0.3s, border 0.3s;
        cursor: default;
      }
      .litepicker .container__days .day-item:hover {
        color: var(--litepicker-day-color-hover);
        -webkit-box-shadow: inset 0 0 0 1px var(--litepicker-day-color-hover);
        box-shadow: inset 0 0 0 1px var(--litepicker-day-color-hover);
      }
      .litepicker .container__days .day-item.is-today {
        color: var(--litepicker-is-today-color);
      }
      .litepicker .container__days .day-item.is-locked {
        color: var(--litepicker-is-locked-color);
      }
      .litepicker .container__days .day-item.is-locked:hover {
        color: var(--litepicker-is-locked-color);
        -webkit-box-shadow: none;
        box-shadow: none;
        cursor: default;
      }
      .litepicker .container__days .day-item.is-in-range {
        background-color: var(--litepicker-is-in-range-color);
        border-radius: 0;
      }
      .litepicker .container__days .day-item.is-start-date {
        color: var(--litepicker-is-start-color);
        background-color: var(--litepicker-is-start-color-bg);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .litepicker .container__days .day-item.is-start-date.is-flipped {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
      }
      .litepicker .container__days .day-item.is-end-date {
        color: var(--litepicker-is-end-color);
        background-color: var(--litepicker-is-end-color-bg);
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
      }
      .litepicker .container__days .day-item.is-end-date.is-flipped {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .litepicker .container__days .day-item.is-start-date.is-end-date {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
      }
      .litepicker .container__days .day-item.is-highlighted {
        color: var(--litepicker-highlighted-day-color);
        background-color: var(--litepicker-highlighted-day-color-bg);
      }
      .litepicker .container__days .week-number {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: var(--litepicker-month-week-number-color);
        font-size: 85%;
      }
      .litepicker .container__footer {
        text-align: right;
        padding: 10px 5px;
        margin: 0 5px;
        background-color: var(--litepicker-footer-color-bg);
        -webkit-box-shadow: inset 0px 3px 3px 0px var(--litepicker-footer-box-shadow-color);
        box-shadow: inset 0px 3px 3px 0px var(--litepicker-footer-box-shadow-color);
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
      }
      .litepicker .container__footer .preview-date-range {
        margin-right: 10px;
        font-size: 90%;
      }
      .litepicker .container__footer .button-cancel {
        background-color: var(--litepicker-button-cancel-color-bg);
        color: var(--litepicker-button-cancel-color);
        border: 0;
        padding: 3px 7px 4px;
        border-radius: 3px;
      }
      .litepicker .container__footer .button-cancel * {
        pointer-events: none;
      }
      .litepicker .container__footer .button-apply {
        background-color: var(--litepicker-button-apply-color-bg);
        color: var(--litepicker-button-apply-color);
        border: 0;
        padding: 3px 7px 4px;
        border-radius: 3px;
        margin-left: 10px;
        margin-right: 10px;
      }
      .litepicker .container__footer .button-apply:disabled {
        opacity: 0.7;
      }
      .litepicker .container__footer .button-apply * {
        pointer-events: none;
      }
      .litepicker .container__tooltip {
        position: absolute;
        margin-top: -4px;
        padding: 4px 8px;
        border-radius: 4px;
        background-color: var(--litepicker-tooltip-color-bg);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
        white-space: nowrap;
        font-size: 11px;
        pointer-events: none;
        visibility: hidden;
      }
      .litepicker .container__tooltip:before {
        position: absolute;
        bottom: -5px;
        left: calc(50% - 5px);
        border-top: 5px solid rgba(0, 0, 0, 0.12);
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        content: "";
      }
      .litepicker .container__tooltip:after {
        position: absolute;
        bottom: -4px;
        left: calc(50% - 4px);
        border-top: 4px solid var(--litepicker-tooltip-color-bg);
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
      }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script type="module" crossorigin="" src="http://rubick-vue.left4code.com/assets/index.20120bfc.js"></script>
    <link rel="stylesheet" href="http://rubick-vue.left4code.com/assets/index.68055fc5.css" />
    <style data-cke="true">
      .ck-hidden {
        display: none !important;
      }
      .ck.ck-reset,
      .ck.ck-reset_all,
      .ck.ck-reset_all * {
        box-sizing: border-box;
        width: auto;
        height: auto;
        position: static;
      }
      :root {
        --ck-z-default: 1;
        --ck-z-modal: calc(var(--ck-z-default) + 999);
      }
      .ck-transitions-disabled,
      .ck-transitions-disabled * {
        transition: none !important;
      }
      :root {
        --ck-color-base-foreground: #fafafa;
        --ck-color-base-background: #fff;
        --ck-color-base-border: #c4c4c4;
        --ck-color-base-action: #61b045;
        --ck-color-base-focus: #6cb5f9;
        --ck-color-base-text: #333;
        --ck-color-base-active: #198cf0;
        --ck-color-base-active-focus: #0e7fe1;
        --ck-color-base-error: #db3700;
        --ck-color-focus-border-coordinates: 208, 79%, 51%;
        --ck-color-focus-border: hsl(var(--ck-color-focus-border-coordinates));
        --ck-color-focus-outer-shadow: #bcdefb;
        --ck-color-focus-disabled-shadow: rgba(119, 186, 248, 0.3);
        --ck-color-focus-error-shadow: rgba(255, 64, 31, 0.3);
        --ck-color-text: var(--ck-color-base-text);
        --ck-color-shadow-drop: rgba(0, 0, 0, 0.15);
        --ck-color-shadow-drop-active: rgba(0, 0, 0, 0.2);
        --ck-color-shadow-inner: rgba(0, 0, 0, 0.1);
        --ck-color-button-default-background: transparent;
        --ck-color-button-default-hover-background: #e6e6e6;
        --ck-color-button-default-active-background: #d9d9d9;
        --ck-color-button-default-active-shadow: #bfbfbf;
        --ck-color-button-default-disabled-background: transparent;
        --ck-color-button-on-background: #dedede;
        --ck-color-button-on-hover-background: #c4c4c4;
        --ck-color-button-on-active-background: #bababa;
        --ck-color-button-on-active-shadow: #a1a1a1;
        --ck-color-button-on-disabled-background: #dedede;
        --ck-color-button-action-background: var(--ck-color-base-action);
        --ck-color-button-action-hover-background: #579e3d;
        --ck-color-button-action-active-background: #53973b;
        --ck-color-button-action-active-shadow: #498433;
        --ck-color-button-action-disabled-background: #7ec365;
        --ck-color-button-action-text: var(--ck-color-base-background);
        --ck-color-button-save: #008a00;
        --ck-color-button-cancel: #db3700;
        --ck-color-switch-button-off-background: #b0b0b0;
        --ck-color-switch-button-off-hover-background: #a3a3a3;
        --ck-color-switch-button-on-background: var(--ck-color-button-action-background);
        --ck-color-switch-button-on-hover-background: #579e3d;
        --ck-color-switch-button-inner-background: var(--ck-color-base-background);
        --ck-color-switch-button-inner-shadow: rgba(0, 0, 0, 0.1);
        --ck-color-dropdown-panel-background: var(--ck-color-base-background);
        --ck-color-dropdown-panel-border: var(--ck-color-base-border);
        --ck-color-input-background: var(--ck-color-base-background);
        --ck-color-input-border: #c7c7c7;
        --ck-color-input-error-border: var(--ck-color-base-error);
        --ck-color-input-text: var(--ck-color-base-text);
        --ck-color-input-disabled-background: #f2f2f2;
        --ck-color-input-disabled-border: #c7c7c7;
        --ck-color-input-disabled-text: #757575;
        --ck-color-list-background: var(--ck-color-base-background);
        --ck-color-list-button-hover-background: var(--ck-color-button-default-hover-background);
        --ck-color-list-button-on-background: var(--ck-color-base-active);
        --ck-color-list-button-on-background-focus: var(--ck-color-base-active-focus);
        --ck-color-list-button-on-text: var(--ck-color-base-background);
        --ck-color-panel-background: var(--ck-color-base-background);
        --ck-color-panel-border: var(--ck-color-base-border);
        --ck-color-toolbar-background: var(--ck-color-base-foreground);
        --ck-color-toolbar-border: var(--ck-color-base-border);
        --ck-color-tooltip-background: var(--ck-color-base-text);
        --ck-color-tooltip-text: var(--ck-color-base-background);
        --ck-color-engine-placeholder-text: #707070;
        --ck-color-upload-bar-background: #6cb5f9;
        --ck-color-link-default: #0000f0;
        --ck-color-link-selected-background: rgba(31, 177, 255, 0.1);
        --ck-color-link-fake-selection: rgba(31, 177, 255, 0.3);
        --ck-disabled-opacity: 0.5;
        --ck-focus-outer-shadow-geometry: 0 0 0 3px;
        --ck-focus-outer-shadow: var(--ck-focus-outer-shadow-geometry) var(--ck-color-focus-outer-shadow);
        --ck-focus-disabled-outer-shadow: var(--ck-focus-outer-shadow-geometry) var(--ck-color-focus-disabled-shadow);
        --ck-focus-error-outer-shadow: var(--ck-focus-outer-shadow-geometry) var(--ck-color-focus-error-shadow);
        --ck-focus-ring: 1px solid var(--ck-color-focus-border);
        --ck-font-size-base: 13px;
        --ck-line-height-base: 1.84615;
        --ck-font-face: Helvetica, Arial, Tahoma, Verdana, Sans-Serif;
        --ck-font-size-tiny: 0.7em;
        --ck-font-size-small: 0.75em;
        --ck-font-size-normal: 1em;
        --ck-font-size-big: 1.4em;
        --ck-font-size-large: 1.8em;
        --ck-ui-component-min-height: 2.3em;
      }
      .ck.ck-reset,
      .ck.ck-reset_all,
      .ck.ck-reset_all * {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
        text-decoration: none;
        vertical-align: middle;
        transition: none;
        word-wrap: break-word;
      }
      .ck.ck-reset_all,
      .ck.ck-reset_all * {
        border-collapse: collapse;
        font: normal normal normal var(--ck-font-size-base) / var(--ck-line-height-base) var(--ck-font-face);
        color: var(--ck-color-text);
        text-align: left;
        white-space: nowrap;
        cursor: auto;
        float: none;
      }
      .ck.ck-reset_all .ck-rtl * {
        text-align: right;
      }
      .ck.ck-reset_all iframe {
        vertical-align: inherit;
      }
      .ck.ck-reset_all textarea {
        white-space: pre-wrap;
      }
      .ck.ck-reset_all input[type="password"],
      .ck.ck-reset_all input[type="text"],
      .ck.ck-reset_all textarea {
        cursor: text;
      }
      .ck.ck-reset_all input[type="password"][disabled],
      .ck.ck-reset_all input[type="text"][disabled],
      .ck.ck-reset_all textarea[disabled] {
        cursor: default;
      }
      .ck.ck-reset_all fieldset {
        padding: 10px;
        border: 2px groove #dfdee3;
      }
      .ck.ck-reset_all button::-moz-focus-inner {
        padding: 0;
        border: 0;
      }
      .ck[dir="rtl"],
      .ck[dir="rtl"] .ck {
        text-align: right;
      }
      :root {
        --ck-border-radius: 2px;
        --ck-inner-shadow: 2px 2px 3px var(--ck-color-shadow-inner) inset;
        --ck-drop-shadow: 0 1px 2px 1px var(--ck-color-shadow-drop);
        --ck-drop-shadow-active: 0 3px 6px 1px var(--ck-color-shadow-drop-active);
        --ck-spacing-unit: 0.6em;
        --ck-spacing-large: calc(var(--ck-spacing-unit) * 1.5);
        --ck-spacing-standard: var(--ck-spacing-unit);
        --ck-spacing-medium: calc(var(--ck-spacing-unit) * 0.8);
        --ck-spacing-small: calc(var(--ck-spacing-unit) * 0.5);
        --ck-spacing-tiny: calc(var(--ck-spacing-unit) * 0.3);
        --ck-spacing-extra-tiny: calc(var(--ck-spacing-unit) * 0.16);
      }
      .ck.ck-icon {
        vertical-align: middle;
      }
      :root {
        --ck-icon-size: calc(var(--ck-line-height-base) * var(--ck-font-size-normal));
      }
      .ck.ck-icon {
        width: var(--ck-icon-size);
        height: var(--ck-icon-size);
        font-size: 0.8333350694em;
        will-change: transform;
      }
      .ck.ck-icon,
      .ck.ck-icon * {
        color: inherit;
        cursor: inherit;
      }
      .ck.ck-icon :not([fill]) {
        fill: currentColor;
      }
      .ck.ck-tooltip,
      .ck.ck-tooltip .ck-tooltip__text:after {
        position: absolute;
        pointer-events: none;
        -webkit-backface-visibility: hidden;
      }
      .ck.ck-tooltip {
        visibility: hidden;
        opacity: 0;
        display: none;
        z-index: var(--ck-z-modal);
      }
      .ck.ck-tooltip .ck-tooltip__text {
        display: inline-block;
      }
      .ck.ck-tooltip .ck-tooltip__text:after {
        content: "";
        width: 0;
        height: 0;
      }
      :root {
        --ck-tooltip-arrow-size: 5px;
      }
      .ck.ck-tooltip {
        left: 50%;
        top: 0;
        transition: opacity 0.2s ease-in-out 0.2s;
      }
      .ck.ck-tooltip .ck-tooltip__text {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-tooltip .ck-tooltip__text,
      .ck.ck-tooltip .ck-tooltip__text.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-tooltip .ck-tooltip__text {
        font-size: 0.9em;
        line-height: 1.5;
        color: var(--ck-color-tooltip-text);
        padding: var(--ck-spacing-small) var(--ck-spacing-medium);
        background: var(--ck-color-tooltip-background);
        position: relative;
        left: -50%;
      }
      .ck.ck-tooltip .ck-tooltip__text:after {
        transition: opacity 0.2s ease-in-out 0.2s;
        border-style: solid;
        left: 50%;
      }
      .ck.ck-tooltip.ck-tooltip_s,
      .ck.ck-tooltip.ck-tooltip_se,
      .ck.ck-tooltip.ck-tooltip_sw {
        bottom: calc(var(--ck-tooltip-arrow-size) * -1);
        transform: translateY(100%);
      }
      .ck.ck-tooltip.ck-tooltip_s .ck-tooltip__text:after,
      .ck.ck-tooltip.ck-tooltip_se .ck-tooltip__text:after,
      .ck.ck-tooltip.ck-tooltip_sw .ck-tooltip__text:after {
        top: calc(var(--ck-tooltip-arrow-size) * -1 + 1px);
        transform: translateX(-50%);
        border-left-color: transparent;
        border-bottom-color: var(--ck-color-tooltip-background);
        border-right-color: transparent;
        border-top-color: transparent;
        border-left-width: var(--ck-tooltip-arrow-size);
        border-bottom-width: var(--ck-tooltip-arrow-size);
        border-right-width: var(--ck-tooltip-arrow-size);
        border-top-width: 0;
      }
      .ck.ck-tooltip.ck-tooltip_sw {
        right: 50%;
        left: auto;
      }
      .ck.ck-tooltip.ck-tooltip_sw .ck-tooltip__text {
        left: auto;
        right: calc(var(--ck-tooltip-arrow-size) * -2);
      }
      .ck.ck-tooltip.ck-tooltip_sw .ck-tooltip__text:after {
        left: auto;
        right: 0;
      }
      .ck.ck-tooltip.ck-tooltip_se {
        left: 50%;
        right: auto;
      }
      .ck.ck-tooltip.ck-tooltip_se .ck-tooltip__text {
        right: auto;
        left: calc(var(--ck-tooltip-arrow-size) * -2);
      }
      .ck.ck-tooltip.ck-tooltip_se .ck-tooltip__text:after {
        right: auto;
        left: 0;
        transform: translateX(50%);
      }
      .ck.ck-tooltip.ck-tooltip_n {
        top: calc(var(--ck-tooltip-arrow-size) * -1);
        transform: translateY(-100%);
      }
      .ck.ck-tooltip.ck-tooltip_n .ck-tooltip__text:after {
        bottom: calc(var(--ck-tooltip-arrow-size) * -1);
        transform: translateX(-50%);
        border-left-color: transparent;
        border-bottom-color: transparent;
        border-right-color: transparent;
        border-top-color: var(--ck-color-tooltip-background);
        border-left-width: var(--ck-tooltip-arrow-size);
        border-bottom-width: 0;
        border-right-width: var(--ck-tooltip-arrow-size);
        border-top-width: var(--ck-tooltip-arrow-size);
      }
      .ck.ck-tooltip.ck-tooltip_e {
        left: calc(100% + var(--ck-tooltip-arrow-size));
        top: 50%;
      }
      .ck.ck-tooltip.ck-tooltip_e .ck-tooltip__text {
        left: 0;
        transform: translateY(-50%);
      }
      .ck.ck-tooltip.ck-tooltip_e .ck-tooltip__text:after {
        left: calc(var(--ck-tooltip-arrow-size) * -1);
        top: calc(50% - var(--ck-tooltip-arrow-size) * 1);
        border-left-color: transparent;
        border-bottom-color: transparent;
        border-right-color: var(--ck-color-tooltip-background);
        border-top-color: transparent;
        border-left-width: 0;
        border-bottom-width: var(--ck-tooltip-arrow-size);
        border-right-width: var(--ck-tooltip-arrow-size);
        border-top-width: var(--ck-tooltip-arrow-size);
      }
      .ck.ck-tooltip.ck-tooltip_w {
        right: calc(100% + var(--ck-tooltip-arrow-size));
        left: auto;
        top: 50%;
      }
      .ck.ck-tooltip.ck-tooltip_w .ck-tooltip__text {
        left: 0;
        transform: translateY(-50%);
      }
      .ck.ck-tooltip.ck-tooltip_w .ck-tooltip__text:after {
        left: 100%;
        top: calc(50% - var(--ck-tooltip-arrow-size) * 1);
        border-left-color: var(--ck-color-tooltip-background);
        border-bottom-color: transparent;
        border-right-color: transparent;
        border-top-color: transparent;
        border-left-width: var(--ck-tooltip-arrow-size);
        border-bottom-width: var(--ck-tooltip-arrow-size);
        border-right-width: 0;
        border-top-width: var(--ck-tooltip-arrow-size);
      }
      .ck.ck-button,
      a.ck.ck-button {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .ck.ck-button .ck-tooltip,
      a.ck.ck-button .ck-tooltip {
        display: block;
      }
      @media (hover: none) {
        .ck.ck-button .ck-tooltip,
        a.ck.ck-button .ck-tooltip {
          display: none;
        }
      }
      .ck.ck-button,
      a.ck.ck-button {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: left;
      }
      .ck.ck-button .ck-button__label,
      a.ck.ck-button .ck-button__label {
        display: none;
      }
      .ck.ck-button.ck-button_with-text .ck-button__label,
      a.ck.ck-button.ck-button_with-text .ck-button__label {
        display: inline-block;
      }
      .ck.ck-button:not(.ck-button_with-text),
      a.ck.ck-button:not(.ck-button_with-text) {
        justify-content: center;
      }
      .ck.ck-button:hover .ck-tooltip,
      a.ck.ck-button:hover .ck-tooltip {
        visibility: visible;
        opacity: 1;
      }
      .ck.ck-button:focus:not(:hover) .ck-tooltip,
      a.ck.ck-button:focus:not(:hover) .ck-tooltip {
        display: none;
      }
      .ck.ck-button,
      a.ck.ck-button {
        background: var(--ck-color-button-default-background);
      }
      .ck.ck-button:not(.ck-disabled):hover,
      a.ck.ck-button:not(.ck-disabled):hover {
        background: var(--ck-color-button-default-hover-background);
      }
      .ck.ck-button:not(.ck-disabled):active,
      a.ck.ck-button:not(.ck-disabled):active {
        background: var(--ck-color-button-default-active-background);
        box-shadow: inset 0 2px 2px var(--ck-color-button-default-active-shadow);
      }
      .ck.ck-button.ck-disabled,
      a.ck.ck-button.ck-disabled {
        background: var(--ck-color-button-default-disabled-background);
      }
      .ck.ck-button,
      a.ck.ck-button {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-button,
      .ck-rounded-corners a.ck.ck-button,
      .ck.ck-button.ck-rounded-corners,
      a.ck.ck-button.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-button,
      a.ck.ck-button {
        white-space: nowrap;
        cursor: default;
        vertical-align: middle;
        padding: var(--ck-spacing-tiny);
        text-align: center;
        min-width: var(--ck-ui-component-min-height);
        min-height: var(--ck-ui-component-min-height);
        line-height: 1;
        font-size: inherit;
        border: 1px solid transparent;
        transition: box-shadow 0.2s ease-in-out, border 0.2s ease-in-out;
        -webkit-appearance: none;
      }
      .ck.ck-button:active,
      .ck.ck-button:focus,
      a.ck.ck-button:active,
      a.ck.ck-button:focus {
        outline: none;
        border: var(--ck-focus-ring);
        box-shadow: var(--ck-focus-outer-shadow), 0 0;
      }
      .ck.ck-button .ck-button__icon use,
      .ck.ck-button .ck-button__icon use *,
      a.ck.ck-button .ck-button__icon use,
      a.ck.ck-button .ck-button__icon use * {
        color: inherit;
      }
      .ck.ck-button .ck-button__label,
      a.ck.ck-button .ck-button__label {
        font-size: inherit;
        font-weight: inherit;
        color: inherit;
        cursor: inherit;
        vertical-align: middle;
      }
      [dir="ltr"] .ck.ck-button .ck-button__label,
      [dir="ltr"] a.ck.ck-button .ck-button__label {
        text-align: left;
      }
      [dir="rtl"] .ck.ck-button .ck-button__label,
      [dir="rtl"] a.ck.ck-button .ck-button__label {
        text-align: right;
      }
      .ck.ck-button .ck-button__keystroke,
      a.ck.ck-button .ck-button__keystroke {
        color: inherit;
      }
      [dir="ltr"] .ck.ck-button .ck-button__keystroke,
      [dir="ltr"] a.ck.ck-button .ck-button__keystroke {
        margin-left: var(--ck-spacing-large);
      }
      [dir="rtl"] .ck.ck-button .ck-button__keystroke,
      [dir="rtl"] a.ck.ck-button .ck-button__keystroke {
        margin-right: var(--ck-spacing-large);
      }
      .ck.ck-button .ck-button__keystroke,
      a.ck.ck-button .ck-button__keystroke {
        font-weight: 700;
        opacity: 0.7;
      }
      .ck.ck-button.ck-disabled:active,
      .ck.ck-button.ck-disabled:focus,
      a.ck.ck-button.ck-disabled:active,
      a.ck.ck-button.ck-disabled:focus {
        box-shadow: var(--ck-focus-disabled-outer-shadow), 0 0;
      }
      .ck.ck-button.ck-disabled .ck-button__icon,
      a.ck.ck-button.ck-disabled .ck-button__icon {
        opacity: var(--ck-disabled-opacity);
      }
      .ck.ck-button.ck-disabled .ck-button__label,
      a.ck.ck-button.ck-disabled .ck-button__label {
        opacity: var(--ck-disabled-opacity);
      }
      .ck.ck-button.ck-disabled .ck-button__keystroke,
      a.ck.ck-button.ck-disabled .ck-button__keystroke {
        opacity: 0.3;
      }
      .ck.ck-button.ck-button_with-text,
      a.ck.ck-button.ck-button_with-text {
        padding: var(--ck-spacing-tiny) var(--ck-spacing-standard);
      }
      [dir="ltr"] .ck.ck-button.ck-button_with-text .ck-button__icon,
      [dir="ltr"] a.ck.ck-button.ck-button_with-text .ck-button__icon {
        margin-left: calc(var(--ck-spacing-small) * -1);
        margin-right: var(--ck-spacing-small);
      }
      [dir="rtl"] .ck.ck-button.ck-button_with-text .ck-button__icon,
      [dir="rtl"] a.ck.ck-button.ck-button_with-text .ck-button__icon {
        margin-right: calc(var(--ck-spacing-small) * -1);
        margin-left: var(--ck-spacing-small);
      }
      .ck.ck-button.ck-button_with-keystroke .ck-button__label,
      a.ck.ck-button.ck-button_with-keystroke .ck-button__label {
        flex-grow: 1;
      }
      .ck.ck-button.ck-on,
      a.ck.ck-button.ck-on {
        background: var(--ck-color-button-on-background);
      }
      .ck.ck-button.ck-on:not(.ck-disabled):hover,
      a.ck.ck-button.ck-on:not(.ck-disabled):hover {
        background: var(--ck-color-button-on-hover-background);
      }
      .ck.ck-button.ck-on:not(.ck-disabled):active,
      a.ck.ck-button.ck-on:not(.ck-disabled):active {
        background: var(--ck-color-button-on-active-background);
        box-shadow: inset 0 2px 2px var(--ck-color-button-on-active-shadow);
      }
      .ck.ck-button.ck-on.ck-disabled,
      a.ck.ck-button.ck-on.ck-disabled {
        background: var(--ck-color-button-on-disabled-background);
      }
      .ck.ck-button.ck-button-save,
      a.ck.ck-button.ck-button-save {
        color: var(--ck-color-button-save);
      }
      .ck.ck-button.ck-button-cancel,
      a.ck.ck-button.ck-button-cancel {
        color: var(--ck-color-button-cancel);
      }
      .ck.ck-button-action,
      a.ck.ck-button-action {
        background: var(--ck-color-button-action-background);
      }
      .ck.ck-button-action:not(.ck-disabled):hover,
      a.ck.ck-button-action:not(.ck-disabled):hover {
        background: var(--ck-color-button-action-hover-background);
      }
      .ck.ck-button-action:not(.ck-disabled):active,
      a.ck.ck-button-action:not(.ck-disabled):active {
        background: var(--ck-color-button-action-active-background);
        box-shadow: inset 0 2px 2px var(--ck-color-button-action-active-shadow);
      }
      .ck.ck-button-action.ck-disabled,
      a.ck.ck-button-action.ck-disabled {
        background: var(--ck-color-button-action-disabled-background);
      }
      .ck.ck-button-action,
      a.ck.ck-button-action {
        color: var(--ck-color-button-action-text);
      }
      .ck.ck-button-bold,
      a.ck.ck-button-bold {
        font-weight: 700;
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle,
      .ck.ck-button.ck-switchbutton .ck-button__toggle .ck-button__toggle__inner {
        display: block;
      }
      :root {
        --ck-switch-button-toggle-width: 2.6153846154em;
        --ck-switch-button-toggle-inner-size: 1.0769230769em;
        --ck-switch-button-toggle-spacing: 1px;
        --ck-switch-button-translation: calc(var(--ck-switch-button-toggle-width) - var(--ck-switch-button-toggle-inner-size) - var(--ck-switch-button-toggle-spacing) * 2);
      }
      [dir="ltr"] .ck.ck-button.ck-switchbutton .ck-button__label {
        margin-right: calc(var(--ck-spacing-large) * 2);
      }
      [dir="rtl"] .ck.ck-button.ck-switchbutton .ck-button__label {
        margin-left: calc(var(--ck-spacing-large) * 2);
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-button.ck-switchbutton .ck-button__toggle,
      .ck.ck-button.ck-switchbutton .ck-button__toggle.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      [dir="ltr"] .ck.ck-button.ck-switchbutton .ck-button__toggle {
        margin-left: auto;
      }
      [dir="rtl"] .ck.ck-button.ck-switchbutton .ck-button__toggle {
        margin-right: auto;
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle {
        transition: background 0.4s ease;
        width: var(--ck-switch-button-toggle-width);
        background: var(--ck-color-switch-button-off-background);
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle .ck-button__toggle__inner {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-button.ck-switchbutton .ck-button__toggle .ck-button__toggle__inner,
      .ck.ck-button.ck-switchbutton .ck-button__toggle .ck-button__toggle__inner.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-radius: calc(var(--ck-border-radius) * 0.5);
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle .ck-button__toggle__inner {
        margin: var(--ck-switch-button-toggle-spacing);
        width: var(--ck-switch-button-toggle-inner-size);
        height: var(--ck-switch-button-toggle-inner-size);
        background: var(--ck-color-switch-button-inner-background);
        transition: all 0.3s ease;
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle:hover {
        background: var(--ck-color-switch-button-off-hover-background);
      }
      .ck.ck-button.ck-switchbutton .ck-button__toggle:hover .ck-button__toggle__inner {
        box-shadow: 0 0 0 5px var(--ck-color-switch-button-inner-shadow);
      }
      .ck.ck-button.ck-switchbutton.ck-disabled .ck-button__toggle {
        opacity: var(--ck-disabled-opacity);
      }
      .ck.ck-button.ck-switchbutton.ck-on .ck-button__toggle {
        background: var(--ck-color-switch-button-on-background);
      }
      .ck.ck-button.ck-switchbutton.ck-on .ck-button__toggle:hover {
        background: var(--ck-color-switch-button-on-hover-background);
      }
      [dir="ltr"] .ck.ck-button.ck-switchbutton.ck-on .ck-button__toggle .ck-button__toggle__inner {
        transform: translateX(var(--ck-switch-button-translation));
      }
      [dir="rtl"] .ck.ck-button.ck-switchbutton.ck-on .ck-button__toggle .ck-button__toggle__inner {
        transform: translateX(calc(var(--ck-switch-button-translation) * -1));
      }
      .ck.ck-color-grid {
        display: grid;
      }
      :root {
        --ck-color-grid-tile-size: 24px;
        --ck-color-color-grid-check-icon: #000;
      }
      .ck.ck-color-grid {
        grid-gap: 5px;
        padding: 8px;
      }
      .ck.ck-color-grid__tile {
        width: var(--ck-color-grid-tile-size);
        height: var(--ck-color-grid-tile-size);
        min-width: var(--ck-color-grid-tile-size);
        min-height: var(--ck-color-grid-tile-size);
        padding: 0;
        transition: box-shadow 0.2s ease;
        border: 0;
      }
      .ck.ck-color-grid__tile.ck-disabled {
        cursor: unset;
        transition: unset;
      }
      .ck.ck-color-grid__tile.ck-color-table__color-tile_bordered {
        box-shadow: 0 0 0 1px var(--ck-color-base-border);
      }
      .ck.ck-color-grid__tile .ck.ck-icon {
        display: none;
        color: var(--ck-color-color-grid-check-icon);
      }
      .ck.ck-color-grid__tile.ck-on {
        box-shadow: inset 0 0 0 1px var(--ck-color-base-background), 0 0 0 2px var(--ck-color-base-text);
      }
      .ck.ck-color-grid__tile.ck-on .ck.ck-icon {
        display: block;
      }
      .ck.ck-color-grid__tile.ck-on,
      .ck.ck-color-grid__tile:focus:not(.ck-disabled),
      .ck.ck-color-grid__tile:hover:not(.ck-disabled) {
        border: 0;
      }
      .ck.ck-color-grid__tile:focus:not(.ck-disabled),
      .ck.ck-color-grid__tile:hover:not(.ck-disabled) {
        box-shadow: inset 0 0 0 1px var(--ck-color-base-background), 0 0 0 2px var(--ck-color-focus-border);
      }
      .ck.ck-color-grid__label {
        padding: 0 var(--ck-spacing-standard);
      }
      .ck.ck-splitbutton {
        font-size: inherit;
      }
      .ck.ck-splitbutton .ck-splitbutton__action:focus {
        z-index: calc(var(--ck-z-default) + 1);
      }
      .ck.ck-splitbutton.ck-splitbutton_open > .ck-button .ck-tooltip {
        display: none;
      }
      :root {
        --ck-color-split-button-hover-background: #ebebeb;
        --ck-color-split-button-hover-border: #b3b3b3;
      }
      [dir="ltr"] .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__action,
      [dir="ltr"] .ck.ck-splitbutton:hover > .ck-splitbutton__action {
        border-top-right-radius: unset;
        border-bottom-right-radius: unset;
      }
      [dir="rtl"] .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__action,
      [dir="rtl"] .ck.ck-splitbutton:hover > .ck-splitbutton__action {
        border-top-left-radius: unset;
        border-bottom-left-radius: unset;
      }
      .ck.ck-splitbutton > .ck-splitbutton__arrow {
        min-width: unset;
      }
      [dir="ltr"] .ck.ck-splitbutton > .ck-splitbutton__arrow {
        border-top-left-radius: unset;
        border-bottom-left-radius: unset;
      }
      [dir="rtl"] .ck.ck-splitbutton > .ck-splitbutton__arrow {
        border-top-right-radius: unset;
        border-bottom-right-radius: unset;
      }
      .ck.ck-splitbutton > .ck-splitbutton__arrow svg {
        width: var(--ck-dropdown-arrow-size);
      }
      .ck.ck-splitbutton.ck-splitbutton_open > .ck-button:not(.ck-on):not(.ck-disabled):not(:hover),
      .ck.ck-splitbutton:hover > .ck-button:not(.ck-on):not(.ck-disabled):not(:hover) {
        background: var(--ck-color-split-button-hover-background);
      }
      .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled):after,
      .ck.ck-splitbutton:hover > .ck-splitbutton__arrow:not(.ck-disabled):after {
        content: "";
        position: absolute;
        width: 1px;
        height: 100%;
        background-color: var(--ck-color-split-button-hover-border);
      }
      [dir="ltr"] .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled):after,
      [dir="ltr"] .ck.ck-splitbutton:hover > .ck-splitbutton__arrow:not(.ck-disabled):after {
        left: -1px;
      }
      [dir="rtl"] .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled):after,
      [dir="rtl"] .ck.ck-splitbutton:hover > .ck-splitbutton__arrow:not(.ck-disabled):after {
        right: -1px;
      }
      .ck.ck-splitbutton.ck-splitbutton_open {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-splitbutton.ck-splitbutton_open,
      .ck.ck-splitbutton.ck-splitbutton_open.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck-rounded-corners .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__action,
      .ck.ck-splitbutton.ck-splitbutton_open.ck-rounded-corners > .ck-splitbutton__action {
        border-bottom-left-radius: 0;
      }
      .ck-rounded-corners .ck.ck-splitbutton.ck-splitbutton_open > .ck-splitbutton__arrow,
      .ck.ck-splitbutton.ck-splitbutton_open.ck-rounded-corners > .ck-splitbutton__arrow {
        border-bottom-right-radius: 0;
      }
      :root {
        --ck-dropdown-max-width: 75vw;
      }
      .ck.ck-dropdown {
        display: inline-block;
        position: relative;
      }
      .ck.ck-dropdown .ck-dropdown__arrow {
        pointer-events: none;
        z-index: var(--ck-z-default);
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button {
        width: 100%;
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-on .ck-tooltip {
        display: none;
      }
      .ck.ck-dropdown .ck-dropdown__panel {
        -webkit-backface-visibility: hidden;
        display: none;
        z-index: var(--ck-z-modal);
        max-width: var(--ck-dropdown-max-width);
        position: absolute;
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel-visible {
        display: inline-block;
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_n,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_ne,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_nme,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_nmw,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_nw {
        bottom: 100%;
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_s,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_se,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_sme,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_smw,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_sw {
        top: 100%;
        bottom: auto;
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_ne,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_se {
        left: 0;
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_nw,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_sw {
        right: 0;
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_n,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_s {
        left: 50%;
        transform: translateX(-50%);
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_nmw,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_smw {
        left: 75%;
        transform: translateX(-75%);
      }
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_nme,
      .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_sme {
        left: 25%;
        transform: translateX(-25%);
      }
      .ck.ck-toolbar .ck-dropdown__panel {
        z-index: calc(var(--ck-z-modal) + 1);
      }
      :root {
        --ck-dropdown-arrow-size: calc(var(--ck-icon-size) * 0.5);
      }
      .ck.ck-dropdown {
        font-size: inherit;
      }
      .ck.ck-dropdown .ck-dropdown__arrow {
        width: var(--ck-dropdown-arrow-size);
      }
      [dir="ltr"] .ck.ck-dropdown .ck-dropdown__arrow {
        right: var(--ck-spacing-standard);
        margin-left: var(--ck-spacing-standard);
      }
      [dir="rtl"] .ck.ck-dropdown .ck-dropdown__arrow {
        left: var(--ck-spacing-standard);
        margin-right: var(--ck-spacing-small);
      }
      .ck.ck-dropdown.ck-disabled .ck-dropdown__arrow {
        opacity: var(--ck-disabled-opacity);
      }
      [dir="ltr"] .ck.ck-dropdown .ck-button.ck-dropdown__button:not(.ck-button_with-text) {
        padding-left: var(--ck-spacing-small);
      }
      [dir="rtl"] .ck.ck-dropdown .ck-button.ck-dropdown__button:not(.ck-button_with-text) {
        padding-right: var(--ck-spacing-small);
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button .ck-button__label {
        width: 7em;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-disabled .ck-button__label {
        opacity: var(--ck-disabled-opacity);
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-on {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-dropdown__button_label-width_auto .ck-button__label {
        width: auto;
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-off:active,
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-on:active {
        box-shadow: none;
      }
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-off:active:focus,
      .ck.ck-dropdown .ck-button.ck-dropdown__button.ck-on:active:focus {
        box-shadow: var(--ck-focus-outer-shadow), 0 0;
      }
      .ck.ck-dropdown__panel {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-dropdown__panel,
      .ck.ck-dropdown__panel.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-dropdown__panel {
        box-shadow: var(--ck-drop-shadow), 0 0;
        background: var(--ck-color-dropdown-panel-background);
        border: 1px solid var(--ck-color-dropdown-panel-border);
        bottom: 0;
        min-width: 100%;
      }
      .ck.ck-dropdown__panel.ck-dropdown__panel_se {
        border-top-left-radius: 0;
      }
      .ck.ck-dropdown__panel.ck-dropdown__panel_sw {
        border-top-right-radius: 0;
      }
      .ck.ck-dropdown__panel.ck-dropdown__panel_ne {
        border-bottom-left-radius: 0;
      }
      .ck.ck-dropdown__panel.ck-dropdown__panel_nw {
        border-bottom-right-radius: 0;
      }
      .ck.ck-toolbar {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
      }
      .ck.ck-toolbar > .ck-toolbar__items {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        flex-grow: 1;
      }
      .ck.ck-toolbar .ck.ck-toolbar__separator {
        display: inline-block;
      }
      .ck.ck-toolbar .ck.ck-toolbar__separator:first-child,
      .ck.ck-toolbar .ck.ck-toolbar__separator:last-child {
        display: none;
      }
      .ck.ck-toolbar .ck-toolbar__line-break {
        flex-basis: 100%;
      }
      .ck.ck-toolbar.ck-toolbar_grouping > .ck-toolbar__items {
        flex-wrap: nowrap;
      }
      .ck.ck-toolbar.ck-toolbar_vertical > .ck-toolbar__items {
        flex-direction: column;
      }
      .ck.ck-toolbar.ck-toolbar_floating > .ck-toolbar__items {
        flex-wrap: nowrap;
      }
      .ck.ck-toolbar > .ck.ck-toolbar__grouped-dropdown > .ck-dropdown__button .ck-dropdown__arrow {
        display: none;
      }
      .ck.ck-toolbar {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-toolbar,
      .ck.ck-toolbar.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-toolbar {
        background: var(--ck-color-toolbar-background);
        padding: 0 var(--ck-spacing-small);
        border: 1px solid var(--ck-color-toolbar-border);
      }
      .ck.ck-toolbar .ck.ck-toolbar__separator {
        align-self: stretch;
        width: 1px;
        min-width: 1px;
        background: var(--ck-color-toolbar-border);
        margin-top: var(--ck-spacing-small);
        margin-bottom: var(--ck-spacing-small);
      }
      .ck.ck-toolbar .ck-toolbar__line-break {
        height: 0;
      }
      .ck.ck-toolbar > .ck-toolbar__items > :not(.ck-toolbar__line-break) {
        margin-right: var(--ck-spacing-small);
      }
      .ck.ck-toolbar > .ck-toolbar__items:empty + .ck.ck-toolbar__separator {
        display: none;
      }
      .ck.ck-toolbar > .ck-toolbar__items > :not(.ck-toolbar__line-break),
      .ck.ck-toolbar > .ck.ck-toolbar__grouped-dropdown {
        margin-top: var(--ck-spacing-small);
        margin-bottom: var(--ck-spacing-small);
      }
      .ck.ck-toolbar.ck-toolbar_vertical {
        padding: 0;
      }
      .ck.ck-toolbar.ck-toolbar_vertical > .ck-toolbar__items > .ck {
        width: 100%;
        margin: 0;
        border-radius: 0;
        border: 0;
      }
      .ck.ck-toolbar.ck-toolbar_compact {
        padding: 0;
      }
      .ck.ck-toolbar.ck-toolbar_compact > .ck-toolbar__items > * {
        margin: 0;
      }
      .ck.ck-toolbar.ck-toolbar_compact > .ck-toolbar__items > :not(:first-child):not(:last-child) {
        border-radius: 0;
      }
      .ck.ck-toolbar > .ck.ck-toolbar__grouped-dropdown > .ck.ck-button.ck-dropdown__button {
        padding-left: var(--ck-spacing-tiny);
      }
      .ck-toolbar-container .ck.ck-toolbar {
        border: 0;
      }
      .ck.ck-toolbar[dir="rtl"] > .ck-toolbar__items > .ck,
      [dir="rtl"] .ck.ck-toolbar > .ck-toolbar__items > .ck {
        margin-right: 0;
      }
      .ck.ck-toolbar[dir="rtl"]:not(.ck-toolbar_compact) > .ck-toolbar__items > .ck,
      [dir="rtl"] .ck.ck-toolbar:not(.ck-toolbar_compact) > .ck-toolbar__items > .ck {
        margin-left: var(--ck-spacing-small);
      }
      .ck.ck-toolbar[dir="rtl"] > .ck-toolbar__items > .ck:last-child,
      [dir="rtl"] .ck.ck-toolbar > .ck-toolbar__items > .ck:last-child {
        margin-left: 0;
      }
      .ck.ck-toolbar[dir="rtl"].ck-toolbar_compact > .ck-toolbar__items > .ck:first-child,
      [dir="rtl"] .ck.ck-toolbar.ck-toolbar_compact > .ck-toolbar__items > .ck:first-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
      .ck.ck-toolbar[dir="rtl"].ck-toolbar_compact > .ck-toolbar__items > .ck:last-child,
      [dir="rtl"] .ck.ck-toolbar.ck-toolbar_compact > .ck-toolbar__items > .ck:last-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ck.ck-toolbar[dir="rtl"] > .ck.ck-toolbar__separator,
      [dir="rtl"] .ck.ck-toolbar > .ck.ck-toolbar__separator {
        margin-left: var(--ck-spacing-small);
      }
      .ck.ck-toolbar[dir="rtl"].ck-toolbar_grouping > .ck-toolbar__items:not(:empty):not(:only-child),
      [dir="rtl"] .ck.ck-toolbar.ck-toolbar_grouping > .ck-toolbar__items:not(:empty):not(:only-child) {
        margin-left: var(--ck-spacing-small);
      }
      .ck.ck-toolbar[dir="ltr"] > .ck-toolbar__items > .ck:last-child,
      [dir="ltr"] .ck.ck-toolbar > .ck-toolbar__items > .ck:last-child {
        margin-right: 0;
      }
      .ck.ck-toolbar[dir="ltr"].ck-toolbar_compact > .ck-toolbar__items > .ck:first-child,
      [dir="ltr"] .ck.ck-toolbar.ck-toolbar_compact > .ck-toolbar__items > .ck:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ck.ck-toolbar[dir="ltr"].ck-toolbar_compact > .ck-toolbar__items > .ck:last-child,
      [dir="ltr"] .ck.ck-toolbar.ck-toolbar_compact > .ck-toolbar__items > .ck:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
      .ck.ck-toolbar[dir="ltr"] > .ck.ck-toolbar__separator,
      [dir="ltr"] .ck.ck-toolbar > .ck.ck-toolbar__separator {
        margin-right: var(--ck-spacing-small);
      }
      .ck.ck-toolbar[dir="ltr"].ck-toolbar_grouping > .ck-toolbar__items:not(:empty):not(:only-child),
      [dir="ltr"] .ck.ck-toolbar.ck-toolbar_grouping > .ck-toolbar__items:not(:empty):not(:only-child) {
        margin-right: var(--ck-spacing-small);
      }
      .ck.ck-list {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: flex;
        flex-direction: column;
      }
      .ck.ck-list .ck-list__item,
      .ck.ck-list .ck-list__separator {
        display: block;
      }
      .ck.ck-list .ck-list__item > :focus {
        position: relative;
        z-index: var(--ck-z-default);
      }
      .ck.ck-list {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-list,
      .ck.ck-list.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-list {
        list-style-type: none;
        background: var(--ck-color-list-background);
      }
      .ck.ck-list__item {
        cursor: default;
        min-width: 12em;
      }
      .ck.ck-list__item .ck-button {
        min-height: unset;
        width: 100%;
        text-align: left;
        border-radius: 0;
        padding: calc(var(--ck-line-height-base) * 0.2 * var(--ck-font-size-base)) calc(var(--ck-line-height-base) * 0.4 * var(--ck-font-size-base));
      }
      .ck.ck-list__item .ck-button .ck-button__label {
        line-height: calc(var(--ck-line-height-base) * 1.2 * var(--ck-font-size-base));
      }
      .ck.ck-list__item .ck-button:active {
        box-shadow: none;
      }
      .ck.ck-list__item .ck-button.ck-on {
        background: var(--ck-color-list-button-on-background);
        color: var(--ck-color-list-button-on-text);
      }
      .ck.ck-list__item .ck-button.ck-on:active {
        box-shadow: none;
      }
      .ck.ck-list__item .ck-button.ck-on:hover:not(.ck-disabled) {
        background: var(--ck-color-list-button-on-background-focus);
      }
      .ck.ck-list__item .ck-button.ck-on:focus:not(.ck-disabled) {
        border-color: var(--ck-color-base-background);
      }
      .ck.ck-list__item .ck-button:hover:not(.ck-disabled) {
        background: var(--ck-color-list-button-hover-background);
      }
      .ck.ck-list__item .ck-switchbutton.ck-on {
        background: var(--ck-color-list-background);
        color: inherit;
      }
      .ck.ck-list__item .ck-switchbutton.ck-on:hover:not(.ck-disabled) {
        background: var(--ck-color-list-button-hover-background);
        color: inherit;
      }
      .ck.ck-list__separator {
        height: 1px;
        width: 100%;
        background: var(--ck-color-base-border);
      }
      :root {
        --ck-toolbar-dropdown-max-width: 60vw;
      }
      .ck.ck-toolbar-dropdown > .ck-dropdown__panel {
        width: max-content;
        max-width: var(--ck-toolbar-dropdown-max-width);
      }
      .ck.ck-toolbar-dropdown > .ck-dropdown__panel .ck-button:focus {
        z-index: calc(var(--ck-z-default) + 1);
      }
      .ck.ck-toolbar-dropdown .ck-toolbar {
        border: 0;
      }
      .ck.ck-dropdown .ck-dropdown__panel .ck-list {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-dropdown .ck-dropdown__panel .ck-list,
      .ck.ck-dropdown .ck-dropdown__panel .ck-list.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-top-left-radius: 0;
      }
      .ck.ck-dropdown .ck-dropdown__panel .ck-list .ck-list__item:first-child .ck-button {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-dropdown .ck-dropdown__panel .ck-list .ck-list__item:first-child .ck-button,
      .ck.ck-dropdown .ck-dropdown__panel .ck-list .ck-list__item:first-child .ck-button.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ck.ck-dropdown .ck-dropdown__panel .ck-list .ck-list__item:last-child .ck-button {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-dropdown .ck-dropdown__panel .ck-list .ck-list__item:last-child .ck-button,
      .ck.ck-dropdown .ck-dropdown__panel .ck-list .ck-list__item:last-child .ck-button.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      :root {
        --ck-color-editable-blur-selection: #d9d9d9;
      }
      .ck.ck-editor__editable:not(.ck-editor__nested-editable) {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-editor__editable:not(.ck-editor__nested-editable),
      .ck.ck-editor__editable:not(.ck-editor__nested-editable).ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-editor__editable:not(.ck-editor__nested-editable).ck-focused {
        outline: none;
        border: var(--ck-focus-ring);
        box-shadow: var(--ck-inner-shadow), 0 0;
      }
      .ck.ck-editor__editable_inline {
        overflow: auto;
        padding: 0 var(--ck-spacing-standard);
        border: 1px solid transparent;
      }
      .ck.ck-editor__editable_inline[dir="ltr"] {
        text-align: left;
      }
      .ck.ck-editor__editable_inline[dir="rtl"] {
        text-align: right;
      }
      .ck.ck-editor__editable_inline > :first-child {
        margin-top: var(--ck-spacing-large);
      }
      .ck.ck-editor__editable_inline > :last-child {
        margin-bottom: var(--ck-spacing-large);
      }
      .ck.ck-editor__editable_inline.ck-blurred ::selection {
        background: var(--ck-color-editable-blur-selection);
      }
      .ck.ck-balloon-panel.ck-toolbar-container[class*="arrow_n"]:after {
        border-bottom-color: var(--ck-color-base-foreground);
      }
      .ck.ck-balloon-panel.ck-toolbar-container[class*="arrow_s"]:after {
        border-top-color: var(--ck-color-base-foreground);
      }
      .ck.ck-label {
        display: block;
      }
      .ck.ck-voice-label {
        display: none;
      }
      .ck.ck-label {
        font-weight: 700;
      }
      .ck.ck-form__header {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: space-between;
      }
      :root {
        --ck-form-header-height: 38px;
      }
      .ck.ck-form__header {
        padding: var(--ck-spacing-small) var(--ck-spacing-large);
        height: var(--ck-form-header-height);
        line-height: var(--ck-form-header-height);
        border-bottom: 1px solid var(--ck-color-base-border);
      }
      .ck.ck-form__header .ck-form__header__label {
        font-weight: 700;
      }
      :root {
        --ck-input-text-width: 18em;
      }
      .ck.ck-input-text {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-input-text,
      .ck.ck-input-text.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-input-text {
        background: var(--ck-color-input-background);
        border: 1px solid var(--ck-color-input-border);
        padding: var(--ck-spacing-extra-tiny) var(--ck-spacing-medium);
        min-width: var(--ck-input-text-width);
        min-height: var(--ck-ui-component-min-height);
        transition: box-shadow 0.1s ease-in-out, border 0.1s ease-in-out;
      }
      .ck.ck-input-text:focus {
        outline: none;
        border: var(--ck-focus-ring);
        box-shadow: var(--ck-focus-outer-shadow), 0 0;
      }
      .ck.ck-input-text[readonly] {
        border: 1px solid var(--ck-color-input-disabled-border);
        background: var(--ck-color-input-disabled-background);
        color: var(--ck-color-input-disabled-text);
      }
      .ck.ck-input-text[readonly]:focus {
        box-shadow: var(--ck-focus-disabled-outer-shadow), 0 0;
      }
      .ck.ck-input-text.ck-error {
        border-color: var(--ck-color-input-error-border);
        animation: ck-text-input-shake 0.3s ease both;
      }
      .ck.ck-input-text.ck-error:focus {
        box-shadow: var(--ck-focus-error-outer-shadow), 0 0;
      }
      @keyframes ck-text-input-shake {
        20% {
          transform: translateX(-2px);
        }
        40% {
          transform: translateX(2px);
        }
        60% {
          transform: translateX(-1px);
        }
        80% {
          transform: translateX(1px);
        }
      }
      .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper {
        display: flex;
        position: relative;
      }
      .ck.ck-labeled-field-view .ck.ck-label {
        display: block;
        position: absolute;
      }
      :root {
        --ck-labeled-field-view-transition: 0.1s cubic-bezier(0, 0, 0.24, 0.95);
        --ck-labeled-field-empty-unfocused-max-width: 100% - 2 * var(--ck-spacing-medium);
        --ck-color-labeled-field-label-background: var(--ck-color-base-background);
      }
      .ck.ck-labeled-field-view {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-labeled-field-view,
      .ck.ck-labeled-field-view.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper {
        width: 100%;
      }
      .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        top: 0;
      }
      [dir="ltr"] .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        left: 0;
      }
      [dir="rtl"] .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        right: 0;
      }
      .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        pointer-events: none;
        transform-origin: 0 0;
        transform: translate(var(--ck-spacing-medium), -6px) scale(0.75);
        background: var(--ck-color-labeled-field-label-background);
        padding: 0 calc(var(--ck-font-size-tiny) * 0.5);
        line-height: normal;
        font-weight: 400;
        text-overflow: ellipsis;
        overflow: hidden;
        max-width: 100%;
        transition: transform var(--ck-labeled-field-view-transition), padding var(--ck-labeled-field-view-transition), background var(--ck-labeled-field-view-transition);
      }
      .ck.ck-labeled-field-view.ck-error .ck-input:not([readonly]) + .ck.ck-label,
      .ck.ck-labeled-field-view.ck-error > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        color: var(--ck-color-base-error);
      }
      .ck.ck-labeled-field-view .ck-labeled-field-view__status {
        font-size: var(--ck-font-size-small);
        margin-top: var(--ck-spacing-small);
        white-space: normal;
      }
      .ck.ck-labeled-field-view .ck-labeled-field-view__status.ck-labeled-field-view__status_error {
        color: var(--ck-color-base-error);
      }
      .ck.ck-labeled-field-view.ck-disabled > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label,
      .ck.ck-labeled-field-view.ck-labeled-field-view_empty:not(.ck-labeled-field-view_focused) > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        color: var(--ck-color-input-disabled-text);
      }
      [dir="ltr"] .ck.ck-labeled-field-view.ck-disabled.ck-labeled-field-view_empty > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label,
      [dir="ltr"] .ck.ck-labeled-field-view.ck-labeled-field-view_empty:not(.ck-labeled-field-view_focused):not(.ck-labeled-field-view_placeholder) > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        transform: translate(var(--ck-spacing-medium), calc(var(--ck-font-size-base) * 0.6)) scale(1);
      }
      [dir="rtl"] .ck.ck-labeled-field-view.ck-disabled.ck-labeled-field-view_empty > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label,
      [dir="rtl"] .ck.ck-labeled-field-view.ck-labeled-field-view_empty:not(.ck-labeled-field-view_focused):not(.ck-labeled-field-view_placeholder) > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        transform: translate(calc(var(--ck-spacing-medium) * -1), calc(var(--ck-font-size-base) * 0.6)) scale(1);
      }
      .ck.ck-labeled-field-view.ck-disabled.ck-labeled-field-view_empty > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label,
      .ck.ck-labeled-field-view.ck-labeled-field-view_empty:not(.ck-labeled-field-view_focused):not(.ck-labeled-field-view_placeholder) > .ck.ck-labeled-field-view__input-wrapper > .ck.ck-label {
        max-width: calc(var(--ck-labeled-field-empty-unfocused-max-width));
        background: transparent;
        padding: 0;
      }
      .ck.ck-labeled-field-view > .ck.ck-labeled-field-view__input-wrapper > .ck-dropdown > .ck.ck-button {
        background: transparent;
      }
      .ck.ck-labeled-field-view.ck-labeled-field-view_empty > .ck.ck-labeled-field-view__input-wrapper > .ck-dropdown > .ck-button > .ck-button__label {
        opacity: 0;
      }
      .ck.ck-labeled-field-view.ck-labeled-field-view_empty:not(.ck-labeled-field-view_focused):not(.ck-labeled-field-view_placeholder) > .ck.ck-labeled-field-view__input-wrapper > .ck-dropdown + .ck-label {
        max-width: calc(var(--ck-labeled-field-empty-unfocused-max-width) - var(--ck-dropdown-arrow-size) - var(--ck-spacing-standard));
      }
      :root {
        --ck-balloon-panel-arrow-z-index: calc(var(--ck-z-default) - 3);
      }
      .ck.ck-balloon-panel {
        display: none;
        position: absolute;
        z-index: var(--ck-z-modal);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_with-arrow:after,
      .ck.ck-balloon-panel.ck-balloon-panel_with-arrow:before {
        content: "";
        position: absolute;
      }
      .ck.ck-balloon-panel.ck-balloon-panel_with-arrow:before {
        z-index: var(--ck-balloon-panel-arrow-z-index);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_with-arrow:after {
        z-index: calc(var(--ck-balloon-panel-arrow-z-index) + 1);
      }
      .ck.ck-balloon-panel[class*="arrow_n"]:before {
        z-index: var(--ck-balloon-panel-arrow-z-index);
      }
      .ck.ck-balloon-panel[class*="arrow_n"]:after {
        z-index: calc(var(--ck-balloon-panel-arrow-z-index) + 1);
      }
      .ck.ck-balloon-panel[class*="arrow_s"]:before {
        z-index: var(--ck-balloon-panel-arrow-z-index);
      }
      .ck.ck-balloon-panel[class*="arrow_s"]:after {
        z-index: calc(var(--ck-balloon-panel-arrow-z-index) + 1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_visible {
        display: block;
      }
      :root {
        --ck-balloon-arrow-offset: 2px;
        --ck-balloon-arrow-height: 10px;
        --ck-balloon-arrow-half-width: 8px;
        --ck-balloon-arrow-drop-shadow: 0 2px 2px var(--ck-color-shadow-drop);
      }
      .ck.ck-balloon-panel {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-balloon-panel,
      .ck.ck-balloon-panel.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
      }
      .ck.ck-balloon-panel {
        box-shadow: var(--ck-drop-shadow), 0 0;
        min-height: 15px;
        background: var(--ck-color-panel-background);
        border: 1px solid var(--ck-color-panel-border);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_with-arrow:after,
      .ck.ck-balloon-panel.ck-balloon-panel_with-arrow:before {
        width: 0;
        height: 0;
        border-style: solid;
      }
      .ck.ck-balloon-panel[class*="arrow_n"]:after,
      .ck.ck-balloon-panel[class*="arrow_n"]:before {
        border-left-width: var(--ck-balloon-arrow-half-width);
        border-bottom-width: var(--ck-balloon-arrow-height);
        border-right-width: var(--ck-balloon-arrow-half-width);
        border-top-width: 0;
      }
      .ck.ck-balloon-panel[class*="arrow_n"]:before {
        border-bottom-color: var(--ck-color-panel-border);
      }
      .ck.ck-balloon-panel[class*="arrow_n"]:after,
      .ck.ck-balloon-panel[class*="arrow_n"]:before {
        border-left-color: transparent;
        border-right-color: transparent;
        border-top-color: transparent;
      }
      .ck.ck-balloon-panel[class*="arrow_n"]:after {
        border-bottom-color: var(--ck-color-panel-background);
        margin-top: var(--ck-balloon-arrow-offset);
      }
      .ck.ck-balloon-panel[class*="arrow_s"]:after,
      .ck.ck-balloon-panel[class*="arrow_s"]:before {
        border-left-width: var(--ck-balloon-arrow-half-width);
        border-bottom-width: 0;
        border-right-width: var(--ck-balloon-arrow-half-width);
        border-top-width: var(--ck-balloon-arrow-height);
      }
      .ck.ck-balloon-panel[class*="arrow_s"]:before {
        border-top-color: var(--ck-color-panel-border);
        filter: drop-shadow(var(--ck-balloon-arrow-drop-shadow));
      }
      .ck.ck-balloon-panel[class*="arrow_s"]:after,
      .ck.ck-balloon-panel[class*="arrow_s"]:before {
        border-left-color: transparent;
        border-bottom-color: transparent;
        border-right-color: transparent;
      }
      .ck.ck-balloon-panel[class*="arrow_s"]:after {
        border-top-color: var(--ck-color-panel-background);
        margin-bottom: var(--ck-balloon-arrow-offset);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_n:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_n:before {
        left: 50%;
        margin-left: calc(var(--ck-balloon-arrow-half-width) * -1);
        top: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_nw:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_nw:before {
        left: calc(var(--ck-balloon-arrow-half-width) * 2);
        top: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_ne:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_ne:before {
        right: calc(var(--ck-balloon-arrow-half-width) * 2);
        top: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_s:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_s:before {
        left: 50%;
        margin-left: calc(var(--ck-balloon-arrow-half-width) * -1);
        bottom: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_sw:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_sw:before {
        left: calc(var(--ck-balloon-arrow-half-width) * 2);
        bottom: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_se:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_se:before {
        right: calc(var(--ck-balloon-arrow-half-width) * 2);
        bottom: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_sme:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_sme:before {
        right: 25%;
        margin-right: calc(var(--ck-balloon-arrow-half-width) * 2);
        bottom: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_smw:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_smw:before {
        left: 25%;
        margin-left: calc(var(--ck-balloon-arrow-half-width) * 2);
        bottom: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_nme:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_nme:before {
        right: 25%;
        margin-right: calc(var(--ck-balloon-arrow-half-width) * 2);
        top: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_nmw:after,
      .ck.ck-balloon-panel.ck-balloon-panel_arrow_nmw:before {
        left: 25%;
        margin-left: calc(var(--ck-balloon-arrow-half-width) * 2);
        top: calc(var(--ck-balloon-arrow-height) * -1);
      }
      .ck .ck-balloon-rotator__navigation {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .ck .ck-balloon-rotator__content .ck-toolbar {
        justify-content: center;
      }
      .ck .ck-balloon-rotator__navigation {
        background: var(--ck-color-toolbar-background);
        border-bottom: 1px solid var(--ck-color-toolbar-border);
        padding: 0 var(--ck-spacing-small);
      }
      .ck .ck-balloon-rotator__navigation > * {
        margin-right: var(--ck-spacing-small);
        margin-top: var(--ck-spacing-small);
        margin-bottom: var(--ck-spacing-small);
      }
      .ck .ck-balloon-rotator__navigation .ck-balloon-rotator__counter {
        margin-right: var(--ck-spacing-standard);
        margin-left: var(--ck-spacing-small);
      }
      .ck .ck-balloon-rotator__content .ck.ck-annotation-wrapper {
        box-shadow: none;
      }
      .ck .ck-fake-panel {
        position: absolute;
        z-index: calc(var(--ck-z-modal) - 1);
      }
      .ck .ck-fake-panel div {
        position: absolute;
      }
      .ck .ck-fake-panel div:first-child {
        z-index: 2;
      }
      .ck .ck-fake-panel div:nth-child(2) {
        z-index: 1;
      }
      :root {
        --ck-balloon-fake-panel-offset-horizontal: 6px;
        --ck-balloon-fake-panel-offset-vertical: 6px;
      }
      .ck .ck-fake-panel div {
        box-shadow: var(--ck-drop-shadow), 0 0;
        min-height: 15px;
        background: var(--ck-color-panel-background);
        border: 1px solid var(--ck-color-panel-border);
        border-radius: var(--ck-border-radius);
        width: 100%;
        height: 100%;
      }
      .ck .ck-fake-panel div:first-child {
        margin-left: var(--ck-balloon-fake-panel-offset-horizontal);
        margin-top: var(--ck-balloon-fake-panel-offset-vertical);
      }
      .ck .ck-fake-panel div:nth-child(2) {
        margin-left: calc(var(--ck-balloon-fake-panel-offset-horizontal) * 2);
        margin-top: calc(var(--ck-balloon-fake-panel-offset-vertical) * 2);
      }
      .ck .ck-fake-panel div:nth-child(3) {
        margin-left: calc(var(--ck-balloon-fake-panel-offset-horizontal) * 3);
        margin-top: calc(var(--ck-balloon-fake-panel-offset-vertical) * 3);
      }
      .ck .ck-balloon-panel_arrow_s + .ck-fake-panel,
      .ck .ck-balloon-panel_arrow_se + .ck-fake-panel,
      .ck .ck-balloon-panel_arrow_sw + .ck-fake-panel {
        --ck-balloon-fake-panel-offset-vertical: -6px;
      }
      .ck.ck-sticky-panel .ck-sticky-panel__content_sticky {
        z-index: var(--ck-z-modal);
        position: fixed;
        top: 0;
      }
      .ck.ck-sticky-panel .ck-sticky-panel__content_sticky_bottom-limit {
        top: auto;
        position: absolute;
      }
      .ck.ck-sticky-panel .ck-sticky-panel__content_sticky {
        box-shadow: var(--ck-drop-shadow), 0 0;
        border-width: 0 1px 1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      .ck.ck-block-toolbar-button {
        position: absolute;
        z-index: var(--ck-z-default);
      }
      :root {
        --ck-color-block-toolbar-button: var(--ck-color-text);
        --ck-block-toolbar-button-size: var(--ck-font-size-normal);
      }
      .ck.ck-block-toolbar-button {
        color: var(--ck-color-block-toolbar-button);
        font-size: var(--ck-block-toolbar-size);
      }
      .ck.ck-placeholder,
      .ck .ck-placeholder {
        position: relative;
      }
      .ck.ck-placeholder:before,
      .ck .ck-placeholder:before {
        position: absolute;
        left: 0;
        right: 0;
        content: attr(data-placeholder);
        pointer-events: none;
      }
      .ck.ck-read-only .ck-placeholder:before {
        display: none;
      }
      .ck.ck-placeholder:before,
      .ck .ck-placeholder:before {
        cursor: text;
        color: var(--ck-color-engine-placeholder-text);
      }
      .ck.ck-editor {
        position: relative;
      }
      .ck.ck-editor .ck-editor__top .ck-sticky-panel .ck-toolbar {
        z-index: var(--ck-z-modal);
      }
      .ck.ck-editor__top .ck-sticky-panel .ck-toolbar {
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-editor__top .ck-sticky-panel .ck-toolbar,
      .ck.ck-editor__top .ck-sticky-panel .ck-toolbar.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }
      .ck.ck-editor__top .ck-sticky-panel .ck-toolbar {
        border-bottom-width: 0;
      }
      .ck.ck-editor__top .ck-sticky-panel .ck-sticky-panel__content_sticky .ck-toolbar {
        border-bottom-width: 1px;
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-editor__top .ck-sticky-panel .ck-sticky-panel__content_sticky .ck-toolbar,
      .ck.ck-editor__top .ck-sticky-panel .ck-sticky-panel__content_sticky .ck-toolbar.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-radius: 0;
      }
      .ck.ck-editor__main > .ck-editor__editable {
        background: var(--ck-color-base-background);
        border-radius: 0;
      }
      .ck-rounded-corners .ck.ck-editor__main > .ck-editor__editable,
      .ck.ck-editor__main > .ck-editor__editable.ck-rounded-corners {
        border-radius: var(--ck-border-radius);
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      .ck.ck-editor__main > .ck-editor__editable:not(.ck-focused) {
        border-color: var(--ck-color-base-border);
      }
      .ck .ck-widget .ck-widget__type-around__button {
        display: block;
        position: absolute;
        overflow: hidden;
        z-index: var(--ck-z-default);
      }
      .ck .ck-widget .ck-widget__type-around__button svg {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: calc(var(--ck-z-default) + 2);
      }
      .ck .ck-widget .ck-widget__type-around__button.ck-widget__type-around__button_before {
        top: calc(var(--ck-widget-outline-thickness) * -0.5);
        left: min(10%, 30px);
        transform: translateY(-50%);
      }
      .ck .ck-widget .ck-widget__type-around__button.ck-widget__type-around__button_after {
        bottom: calc(var(--ck-widget-outline-thickness) * -0.5);
        right: min(10%, 30px);
        transform: translateY(50%);
      }
      .ck .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button:after,
      .ck .ck-widget > .ck-widget__type-around > .ck-widget__type-around__button:hover:after {
        content: "";
        display: block;
        position: absolute;
        top: 1px;
        left: 1px;
        z-index: calc(var(--ck-z-default) + 1);
      }
      .ck .ck-widget > .ck-widget__type-around > .ck-widget__type-around__fake-caret {
        display: none;
        position: absolute;
        left: 0;
        right: 0;
      }
      .ck .ck-widget:hover > .ck-widget__type-around > .ck-widget__type-around__fake-caret {
        left: calc(var(--ck-widget-outline-thickness) * -1);
        right: calc(var(--ck-widget-outline-thickness) * -1);
      }
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_before > .ck-widget__type-around > .ck-widget__type-around__fake-caret {
        top: calc(var(--ck-widget-outline-thickness) * -1 - 1px);
        display: block;
      }
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_after > .ck-widget__type-around > .ck-widget__type-around__fake-caret {
        bottom: calc(var(--ck-widget-outline-thickness) * -1 - 1px);
        display: block;
      }
      .ck.ck-editor__editable.ck-read-only .ck-widget__type-around,
      .ck.ck-editor__editable.ck-restricted-editing_mode_restricted .ck-widget__type-around,
      .ck.ck-editor__editable.ck-widget__type-around_disabled .ck-widget__type-around {
        display: none;
      }
      :root {
        --ck-widget-type-around-button-size: 20px;
        --ck-color-widget-type-around-button-active: var(--ck-color-focus-border);
        --ck-color-widget-type-around-button-hover: var(--ck-color-widget-hover-border);
        --ck-color-widget-type-around-button-blurred-editable: var(--ck-color-widget-blurred-border);
        --ck-color-widget-type-around-button-radar-start-alpha: 0;
        --ck-color-widget-type-around-button-radar-end-alpha: 0.3;
        --ck-color-widget-type-around-button-icon: var(--ck-color-base-background);
      }
      .ck .ck-widget .ck-widget__type-around__button {
        width: var(--ck-widget-type-around-button-size);
        height: var(--ck-widget-type-around-button-size);
        background: var(--ck-color-widget-type-around-button);
        border-radius: 100px;
        transition: opacity var(--ck-widget-handler-animation-duration) var(--ck-widget-handler-animation-curve), background var(--ck-widget-handler-animation-duration) var(--ck-widget-handler-animation-curve);
        opacity: 0;
        pointer-events: none;
      }
      .ck .ck-widget .ck-widget__type-around__button svg {
        width: 10px;
        height: 8px;
        transform: translate(-50%, -50%);
        transition: transform 0.5s ease;
        margin-top: 1px;
      }
      .ck .ck-widget .ck-widget__type-around__button svg * {
        stroke-dasharray: 10;
        stroke-dashoffset: 0;
        fill: none;
        stroke: var(--ck-color-widget-type-around-button-icon);
        stroke-width: 1.5px;
        stroke-linecap: round;
        stroke-linejoin: round;
      }
      .ck .ck-widget .ck-widget__type-around__button svg line {
        stroke-dasharray: 7;
      }
      .ck .ck-widget .ck-widget__type-around__button:hover {
        animation: ck-widget-type-around-button-sonar 1s ease infinite;
      }
      .ck .ck-widget .ck-widget__type-around__button:hover svg polyline {
        animation: ck-widget-type-around-arrow-dash 2s linear;
      }
      .ck .ck-widget .ck-widget__type-around__button:hover svg line {
        animation: ck-widget-type-around-arrow-tip-dash 2s linear;
      }
      .ck .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button,
      .ck .ck-widget:hover > .ck-widget__type-around > .ck-widget__type-around__button {
        opacity: 1;
        pointer-events: auto;
      }
      .ck .ck-widget:not(.ck-widget_selected) > .ck-widget__type-around > .ck-widget__type-around__button {
        background: var(--ck-color-widget-type-around-button-hover);
      }
      .ck .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button,
      .ck .ck-widget > .ck-widget__type-around > .ck-widget__type-around__button:hover {
        background: var(--ck-color-widget-type-around-button-active);
      }
      .ck .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button:after,
      .ck .ck-widget > .ck-widget__type-around > .ck-widget__type-around__button:hover:after {
        width: calc(var(--ck-widget-type-around-button-size) - 2px);
        height: calc(var(--ck-widget-type-around-button-size) - 2px);
        border-radius: 100px;
        background: linear-gradient(135deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, 0.3));
      }
      .ck .ck-widget.ck-widget_with-selection-handle > .ck-widget__type-around > .ck-widget__type-around__button_before {
        margin-left: 20px;
      }
      .ck .ck-widget .ck-widget__type-around__fake-caret {
        pointer-events: none;
        height: 1px;
        animation: ck-widget-type-around-fake-caret-pulse 1s linear infinite normal forwards;
        outline: 1px solid hsla(0, 0%, 100%, 0.5);
        background: var(--ck-color-base-text);
      }
      .ck .ck-widget.ck-widget_selected.ck-widget_type-around_show-fake-caret_after,
      .ck .ck-widget.ck-widget_selected.ck-widget_type-around_show-fake-caret_before {
        outline-color: transparent;
      }
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_after.ck-widget_selected:hover,
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_before.ck-widget_selected:hover {
        outline-color: var(--ck-color-widget-hover-border);
      }
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_after > .ck-widget__type-around > .ck-widget__type-around__button,
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_before > .ck-widget__type-around > .ck-widget__type-around__button {
        opacity: 0;
        pointer-events: none;
      }
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_after.ck-widget_with-selection-handle.ck-widget_selected:hover > .ck-widget__selection-handle,
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_after.ck-widget_with-selection-handle.ck-widget_selected > .ck-widget__selection-handle,
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_before.ck-widget_with-selection-handle.ck-widget_selected:hover > .ck-widget__selection-handle,
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_before.ck-widget_with-selection-handle.ck-widget_selected > .ck-widget__selection-handle {
        opacity: 0;
      }
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_after.ck-widget_selected.ck-widget_with-resizer > .ck-widget__resizer,
      .ck .ck-widget.ck-widget_type-around_show-fake-caret_before.ck-widget_selected.ck-widget_with-resizer > .ck-widget__resizer {
        opacity: 0;
      }
      .ck[dir="rtl"] .ck-widget.ck-widget_with-selection-handle .ck-widget__type-around > .ck-widget__type-around__button_before {
        margin-left: 0;
        margin-right: 20px;
      }
      .ck-editor__nested-editable.ck-editor__editable_selected .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button,
      .ck-editor__nested-editable.ck-editor__editable_selected .ck-widget:hover > .ck-widget__type-around > .ck-widget__type-around__button {
        opacity: 0;
        pointer-events: none;
      }
      .ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button:not(:hover) {
        background: var(--ck-color-widget-type-around-button-blurred-editable);
      }
      .ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected > .ck-widget__type-around > .ck-widget__type-around__button:not(:hover) svg * {
        stroke: #999;
      }
      @keyframes ck-widget-type-around-arrow-dash {
        0% {
          stroke-dashoffset: 10;
        }
        20%,
        to {
          stroke-dashoffset: 0;
        }
      }
      @keyframes ck-widget-type-around-arrow-tip-dash {
        0%,
        20% {
          stroke-dashoffset: 7;
        }
        40%,
        to {
          stroke-dashoffset: 0;
        }
      }
      @keyframes ck-widget-type-around-button-sonar {
        0% {
          box-shadow: 0 0 0 0 hsla(var(--ck-color-focus-border-coordinates), var(--ck-color-widget-type-around-button-radar-start-alpha));
        }
        50% {
          box-shadow: 0 0 0 5px hsla(var(--ck-color-focus-border-coordinates), var(--ck-color-widget-type-around-button-radar-end-alpha));
        }
        to {
          box-shadow: 0 0 0 5px hsla(var(--ck-color-focus-border-coordinates), var(--ck-color-widget-type-around-button-radar-start-alpha));
        }
      }
      @keyframes ck-widget-type-around-fake-caret-pulse {
        0% {
          opacity: 1;
        }
        49% {
          opacity: 1;
        }
        50% {
          opacity: 0;
        }
        99% {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      :root {
        --ck-color-resizer: var(--ck-color-focus-border);
        --ck-color-resizer-tooltip-background: #262626;
        --ck-color-resizer-tooltip-text: #f2f2f2;
        --ck-resizer-border-radius: var(--ck-border-radius);
        --ck-resizer-tooltip-offset: 10px;
        --ck-resizer-tooltip-height: calc(var(--ck-spacing-small) * 2 + 10px);
      }
      .ck .ck-widget,
      .ck .ck-widget.ck-widget_with-selection-handle {
        position: relative;
      }
      .ck .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle {
        position: absolute;
      }
      .ck .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle .ck-icon {
        display: block;
      }
      .ck .ck-widget.ck-widget_with-selection-handle.ck-widget_selected > .ck-widget__selection-handle,
      .ck .ck-widget.ck-widget_with-selection-handle:hover > .ck-widget__selection-handle {
        visibility: visible;
      }
      .ck .ck-size-view {
        background: var(--ck-color-resizer-tooltip-background);
        color: var(--ck-color-resizer-tooltip-text);
        border: 1px solid var(--ck-color-resizer-tooltip-text);
        border-radius: var(--ck-resizer-border-radius);
        font-size: var(--ck-font-size-tiny);
        display: block;
        padding: 0 var(--ck-spacing-small);
        height: var(--ck-resizer-tooltip-height);
        line-height: var(--ck-resizer-tooltip-height);
      }
      .ck .ck-size-view.ck-orientation-above-center,
      .ck .ck-size-view.ck-orientation-bottom-left,
      .ck .ck-size-view.ck-orientation-bottom-right,
      .ck .ck-size-view.ck-orientation-top-left,
      .ck .ck-size-view.ck-orientation-top-right {
        position: absolute;
      }
      .ck .ck-size-view.ck-orientation-top-left {
        top: var(--ck-resizer-tooltip-offset);
        left: var(--ck-resizer-tooltip-offset);
      }
      .ck .ck-size-view.ck-orientation-top-right {
        top: var(--ck-resizer-tooltip-offset);
        right: var(--ck-resizer-tooltip-offset);
      }
      .ck .ck-size-view.ck-orientation-bottom-right {
        bottom: var(--ck-resizer-tooltip-offset);
        right: var(--ck-resizer-tooltip-offset);
      }
      .ck .ck-size-view.ck-orientation-bottom-left {
        bottom: var(--ck-resizer-tooltip-offset);
        left: var(--ck-resizer-tooltip-offset);
      }
      .ck .ck-size-view.ck-orientation-above-center {
        top: calc(var(--ck-resizer-tooltip-height) * -1);
        left: 50%;
        transform: translate(-50%);
      }
      :root {
        --ck-widget-outline-thickness: 3px;
        --ck-widget-handler-icon-size: 16px;
        --ck-widget-handler-animation-duration: 200ms;
        --ck-widget-handler-animation-curve: ease;
        --ck-color-widget-blurred-border: #dedede;
        --ck-color-widget-hover-border: #ffc83d;
        --ck-color-widget-editable-focus-background: var(--ck-color-base-background);
        --ck-color-widget-drag-handler-icon-color: var(--ck-color-base-background);
      }
      .ck .ck-widget {
        outline-width: var(--ck-widget-outline-thickness);
        outline-style: solid;
        outline-color: transparent;
        transition: outline-color var(--ck-widget-handler-animation-duration) var(--ck-widget-handler-animation-curve);
      }
      .ck .ck-widget.ck-widget_selected,
      .ck .ck-widget.ck-widget_selected:hover {
        outline: var(--ck-widget-outline-thickness) solid var(--ck-color-focus-border);
      }
      .ck .ck-widget:hover {
        outline-color: var(--ck-color-widget-hover-border);
      }
      .ck .ck-editor__nested-editable {
        border: 1px solid transparent;
      }
      .ck .ck-editor__nested-editable.ck-editor__nested-editable_focused,
      .ck .ck-editor__nested-editable:focus {
        outline: none;
        border: var(--ck-focus-ring);
        box-shadow: var(--ck-inner-shadow), 0 0;
        background-color: var(--ck-color-widget-editable-focus-background);
      }
      .ck .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle {
        padding: 4px;
        box-sizing: border-box;
        background-color: transparent;
        opacity: 0;
        transition: background-color var(--ck-widget-handler-animation-duration) var(--ck-widget-handler-animation-curve), visibility var(--ck-widget-handler-animation-duration) var(--ck-widget-handler-animation-curve),
          opacity var(--ck-widget-handler-animation-duration) var(--ck-widget-handler-animation-curve);
        border-radius: var(--ck-border-radius) var(--ck-border-radius) 0 0;
        transform: translateY(-100%);
        left: calc(0px - var(--ck-widget-outline-thickness));
        top: 0;
      }
      .ck .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle .ck-icon {
        width: var(--ck-widget-handler-icon-size);
        height: var(--ck-widget-handler-icon-size);
        color: var(--ck-color-widget-drag-handler-icon-color);
      }
      .ck .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle .ck-icon .ck-icon__selected-indicator {
        opacity: 0;
        transition: opacity 0.3s var(--ck-widget-handler-animation-curve);
      }
      .ck .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle:hover .ck-icon .ck-icon__selected-indicator {
        opacity: 1;
      }
      .ck .ck-widget.ck-widget_with-selection-handle:hover > .ck-widget__selection-handle {
        opacity: 1;
        background-color: var(--ck-color-widget-hover-border);
      }
      .ck .ck-widget.ck-widget_with-selection-handle.ck-widget_selected:hover > .ck-widget__selection-handle,
      .ck .ck-widget.ck-widget_with-selection-handle.ck-widget_selected > .ck-widget__selection-handle {
        opacity: 1;
        background-color: var(--ck-color-focus-border);
      }
      .ck .ck-widget.ck-widget_with-selection-handle.ck-widget_selected:hover > .ck-widget__selection-handle .ck-icon .ck-icon__selected-indicator,
      .ck .ck-widget.ck-widget_with-selection-handle.ck-widget_selected > .ck-widget__selection-handle .ck-icon .ck-icon__selected-indicator {
        opacity: 1;
      }
      .ck[dir="rtl"] .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle {
        left: auto;
        right: calc(0px - var(--ck-widget-outline-thickness));
      }
      .ck.ck-editor__editable.ck-read-only .ck-widget {
        transition: none;
      }
      .ck.ck-editor__editable.ck-read-only .ck-widget:not(.ck-widget_selected) {
        --ck-widget-outline-thickness: 0px;
      }
      .ck.ck-editor__editable.ck-read-only .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle,
      .ck.ck-editor__editable.ck-read-only .ck-widget.ck-widget_with-selection-handle .ck-widget__selection-handle:hover {
        background: var(--ck-color-widget-blurred-border);
      }
      .ck.ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected,
      .ck.ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected:hover {
        outline-color: var(--ck-color-widget-blurred-border);
      }
      .ck.ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected.ck-widget_with-selection-handle > .ck-widget__selection-handle,
      .ck.ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected.ck-widget_with-selection-handle > .ck-widget__selection-handle:hover,
      .ck.ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected:hover.ck-widget_with-selection-handle > .ck-widget__selection-handle,
      .ck.ck-editor__editable.ck-blurred .ck-widget.ck-widget_selected:hover.ck-widget_with-selection-handle > .ck-widget__selection-handle:hover {
        background: var(--ck-color-widget-blurred-border);
      }
      .ck.ck-editor__editable > .ck-widget.ck-widget_with-selection-handle:first-child,
      .ck.ck-editor__editable blockquote > .ck-widget.ck-widget_with-selection-handle:first-child {
        margin-top: calc(1em + var(--ck-widget-handler-icon-size));
      }
      .ck.ck-editor__editable .ck.ck-clipboard-drop-target-position {
        display: inline;
        position: relative;
        pointer-events: none;
      }
      .ck.ck-editor__editable .ck.ck-clipboard-drop-target-position span {
        position: absolute;
        width: 0;
      }
      .ck.ck-editor__editable .ck-widget:-webkit-drag > .ck-widget__selection-handle,
      .ck.ck-editor__editable .ck-widget:-webkit-drag > .ck-widget__type-around {
        display: none;
      }
      :root {
        --ck-clipboard-drop-target-dot-width: 12px;
        --ck-clipboard-drop-target-dot-height: 8px;
        --ck-clipboard-drop-target-color: var(--ck-color-focus-border);
      }
      .ck.ck-editor__editable .ck.ck-clipboard-drop-target-position span {
        bottom: calc(var(--ck-clipboard-drop-target-dot-height) * -0.5);
        top: calc(var(--ck-clipboard-drop-target-dot-height) * -0.5);
        border: 1px solid var(--ck-clipboard-drop-target-color);
        background: var(--ck-clipboard-drop-target-color);
        margin-left: -1px;
      }
      .ck.ck-editor__editable .ck.ck-clipboard-drop-target-position span:after {
        content: "";
        width: 0;
        height: 0;
        display: block;
        position: absolute;
        left: 50%;
        top: calc(var(--ck-clipboard-drop-target-dot-height) * -0.5);
        transform: translateX(-50%);
        border-left: calc(var(--ck-clipboard-drop-target-dot-width) * 0.5) solid transparent;
        border-bottom: 0 solid transparent;
        border-right: calc(var(--ck-clipboard-drop-target-dot-width) * 0.5) solid transparent;
        border-top: calc(var(--ck-clipboard-drop-target-dot-height)) solid var(--ck-clipboard-drop-target-color);
      }
      .ck.ck-editor__editable .ck-widget.ck-clipboard-drop-target-range {
        outline: var(--ck-widget-outline-thickness) solid var(--ck-clipboard-drop-target-color) !important;
      }
      .ck.ck-editor__editable .ck-widget:-webkit-drag {
        zoom: 0.6;
        outline: none !important;
      }
      .ck-content blockquote {
        overflow: hidden;
        padding-right: 1.5em;
        padding-left: 1.5em;
        margin-left: 0;
        margin-right: 0;
        font-style: italic;
        border-left: 5px solid #ccc;
      }
      .ck-content[dir="rtl"] blockquote {
        border-left: 0;
        border-right: 5px solid #ccc;
      }
      .ck.ck-heading_heading1 {
        font-size: 20px;
      }
      .ck.ck-heading_heading2 {
        font-size: 17px;
      }
      .ck.ck-heading_heading3 {
        font-size: 14px;
      }
      .ck[class*="ck-heading_heading"] {
        font-weight: 700;
      }
      .ck.ck-dropdown.ck-heading-dropdown .ck-dropdown__button .ck-button__label {
        width: 8em;
      }
      .ck.ck-dropdown.ck-heading-dropdown .ck-dropdown__panel .ck-list__item {
        min-width: 18em;
      }
      .ck .ck-widget_with-resizer {
        position: relative;
      }
      .ck .ck-widget__resizer {
        display: none;
        position: absolute;
        pointer-events: none;
        left: 0;
        top: 0;
      }
      .ck-focused .ck-widget_with-resizer.ck-widget_selected > .ck-widget__resizer {
        display: block;
      }
      .ck .ck-widget__resizer__handle {
        position: absolute;
        pointer-events: all;
      }
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-bottom-right,
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-top-left {
        cursor: nwse-resize;
      }
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-bottom-left,
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-top-right {
        cursor: nesw-resize;
      }
      :root {
        --ck-resizer-size: 10px;
        --ck-resizer-offset: calc(var(--ck-resizer-size) / -2 - 2px);
        --ck-resizer-border-width: 1px;
      }
      .ck .ck-widget__resizer {
        outline: 1px solid var(--ck-color-resizer);
      }
      .ck .ck-widget__resizer__handle {
        width: var(--ck-resizer-size);
        height: var(--ck-resizer-size);
        background: var(--ck-color-focus-border);
        border: var(--ck-resizer-border-width) solid #fff;
        border-radius: var(--ck-resizer-border-radius);
      }
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-top-left {
        top: var(--ck-resizer-offset);
        left: var(--ck-resizer-offset);
      }
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-top-right {
        top: var(--ck-resizer-offset);
        right: var(--ck-resizer-offset);
      }
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-bottom-right {
        bottom: var(--ck-resizer-offset);
        right: var(--ck-resizer-offset);
      }
      .ck .ck-widget__resizer__handle.ck-widget__resizer__handle-bottom-left {
        bottom: var(--ck-resizer-offset);
        left: var(--ck-resizer-offset);
      }
      .ck.ck-text-alternative-form {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
      }
      .ck.ck-text-alternative-form .ck-labeled-field-view {
        display: inline-block;
      }
      .ck.ck-text-alternative-form .ck-label {
        display: none;
      }
      @media screen and (max-width: 600px) {
        .ck.ck-text-alternative-form {
          flex-wrap: wrap;
        }
        .ck.ck-text-alternative-form .ck-labeled-field-view {
          flex-basis: 100%;
        }
        .ck.ck-text-alternative-form .ck-button {
          flex-basis: 50%;
        }
      }
      .ck-vertical-form .ck-button:after {
        content: "";
        width: 0;
        position: absolute;
        right: -1px;
        top: var(--ck-spacing-small);
        bottom: var(--ck-spacing-small);
        z-index: 1;
      }
      @media screen and (max-width: 600px) {
        .ck.ck-responsive-form .ck-button:after {
          content: "";
          width: 0;
          position: absolute;
          right: -1px;
          top: var(--ck-spacing-small);
          bottom: var(--ck-spacing-small);
          z-index: 1;
        }
      }
      .ck-vertical-form > .ck-button:nth-last-child(2):after {
        border-right: 1px solid var(--ck-color-base-border);
      }
      .ck.ck-responsive-form {
        padding: var(--ck-spacing-large);
      }
      .ck.ck-responsive-form:focus {
        outline: none;
      }
      [dir="ltr"] .ck.ck-responsive-form > :not(:first-child),
      [dir="rtl"] .ck.ck-responsive-form > :not(:last-child) {
        margin-left: var(--ck-spacing-standard);
      }
      @media screen and (max-width: 600px) {
        .ck.ck-responsive-form {
          padding: 0;
          width: calc(var(--ck-input-text-width) * 0.8);
        }
        .ck.ck-responsive-form .ck-labeled-field-view {
          margin: var(--ck-spacing-large) var(--ck-spacing-large) 0;
        }
        .ck.ck-responsive-form .ck-labeled-field-view .ck-input-text {
          min-width: 0;
          width: 100%;
        }
        .ck.ck-responsive-form .ck-labeled-field-view .ck-labeled-field-view__error {
          white-space: normal;
        }
        .ck.ck-responsive-form > .ck-button:last-child,
        .ck.ck-responsive-form > .ck-button:nth-last-child(2) {
          padding: var(--ck-spacing-standard);
          margin-top: var(--ck-spacing-large);
          border-radius: 0;
          border: 0;
          border-top: 1px solid var(--ck-color-base-border);
        }
        [dir="ltr"] .ck.ck-responsive-form > .ck-button:last-child,
        [dir="ltr"] .ck.ck-responsive-form > .ck-button:nth-last-child(2),
        [dir="rtl"] .ck.ck-responsive-form > .ck-button:last-child,
        [dir="rtl"] .ck.ck-responsive-form > .ck-button:nth-last-child(2) {
          margin-left: 0;
        }
        .ck.ck-responsive-form > .ck-button:nth-last-child(2):after,
        [dir="rtl"] .ck.ck-responsive-form > .ck-button:last-child:last-of-type,
        [dir="rtl"] .ck.ck-responsive-form > .ck-button:nth-last-child(2):last-of-type {
          border-right: 1px solid var(--ck-color-base-border);
        }
      }
      .ck-content .image {
        display: table;
        clear: both;
        text-align: center;
        margin: 0.9em auto;
        min-width: 50px;
      }
      .ck-content .image img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        min-width: 100%;
      }
      .ck-content .image-inline {
        display: inline-flex;
        max-width: 100%;
        align-items: flex-start;
      }
      .ck-content .image-inline picture {
        display: flex;
      }
      .ck-content .image-inline img,
      .ck-content .image-inline picture {
        flex-grow: 1;
        flex-shrink: 1;
        max-width: 100%;
      }
      .ck.ck-editor__editable .image > figcaption.ck-placeholder:before {
        padding-left: inherit;
        padding-right: inherit;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .ck.ck-editor__editable .image-inline.ck-widget_selected,
      .ck.ck-editor__editable .image.ck-widget_selected {
        z-index: 1;
      }
      .ck.ck-editor__editable .image-inline.ck-widget_selected ::selection {
        display: none;
      }
      .ck.ck-editor__editable td .image-inline img,
      .ck.ck-editor__editable th .image-inline img {
        max-width: none;
      }
      :root {
        --ck-color-image-caption-background: #f7f7f7;
        --ck-color-image-caption-text: #333;
        --ck-color-image-caption-highligted-background: #fd0;
      }
      .ck-content .image > figcaption {
        display: table-caption;
        caption-side: bottom;
        word-break: break-word;
        color: var(--ck-color-image-caption-text);
        background-color: var(--ck-color-image-caption-background);
        padding: 0.6em;
        font-size: 0.75em;
        outline-offset: -1px;
      }
      .ck.ck-editor__editable .image > figcaption.image__caption_highlighted {
        animation: ck-image-caption-highlight 0.6s ease-out;
      }
      @keyframes ck-image-caption-highlight {
        0% {
          background-color: var(--ck-color-image-caption-highligted-background);
        }
        to {
          background-color: var(--ck-color-image-caption-background);
        }
      }
      :root {
        --ck-image-style-spacing: 1.5em;
        --ck-inline-image-style-spacing: calc(var(--ck-image-style-spacing) / 2);
      }
      .ck-content .image-style-block-align-left,
      .ck-content .image-style-block-align-right {
        max-width: calc(100% - var(--ck-image-style-spacing));
      }
      .ck-content .image-style-align-left,
      .ck-content .image-style-align-right {
        clear: none;
      }
      .ck-content .image-style-side {
        float: right;
        margin-left: var(--ck-image-style-spacing);
        max-width: 50%;
      }
      .ck-content .image-style-align-left {
        float: left;
        margin-right: var(--ck-image-style-spacing);
      }
      .ck-content .image-style-align-center {
        margin-left: auto;
        margin-right: auto;
      }
      .ck-content .image-style-align-right {
        float: right;
        margin-left: var(--ck-image-style-spacing);
      }
      .ck-content .image-style-block-align-right {
        margin-right: 0;
        margin-left: auto;
      }
      .ck-content .image-style-block-align-left {
        margin-left: 0;
        margin-right: auto;
      }
      .ck-content p + .image-style-align-left,
      .ck-content p + .image-style-align-right,
      .ck-content p + .image-style-side {
        margin-top: 0;
      }
      .ck-content .image-inline.image-style-align-left,
      .ck-content .image-inline.image-style-align-right {
        margin-top: var(--ck-inline-image-style-spacing);
        margin-bottom: var(--ck-inline-image-style-spacing);
      }
      .ck-content .image-inline.image-style-align-left {
        margin-right: var(--ck-inline-image-style-spacing);
      }
      .ck-content .image-inline.image-style-align-right {
        margin-left: var(--ck-inline-image-style-spacing);
      }
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open > .ck-splitbutton__action:not(.ck-disabled),
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled),
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled):not(:hover),
      .ck.ck-splitbutton.ck-splitbutton_flatten:hover > .ck-splitbutton__action:not(.ck-disabled),
      .ck.ck-splitbutton.ck-splitbutton_flatten:hover > .ck-splitbutton__arrow:not(.ck-disabled),
      .ck.ck-splitbutton.ck-splitbutton_flatten:hover > .ck-splitbutton__arrow:not(.ck-disabled):not(:hover) {
        background-color: var(--ck-color-button-on-background);
      }
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open > .ck-splitbutton__action:not(.ck-disabled):after,
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled):after,
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open > .ck-splitbutton__arrow:not(.ck-disabled):not(:hover):after,
      .ck.ck-splitbutton.ck-splitbutton_flatten:hover > .ck-splitbutton__action:not(.ck-disabled):after,
      .ck.ck-splitbutton.ck-splitbutton_flatten:hover > .ck-splitbutton__arrow:not(.ck-disabled):after,
      .ck.ck-splitbutton.ck-splitbutton_flatten:hover > .ck-splitbutton__arrow:not(.ck-disabled):not(:hover):after {
        display: none;
      }
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open:hover > .ck-splitbutton__action:not(.ck-disabled),
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open:hover > .ck-splitbutton__arrow:not(.ck-disabled),
      .ck.ck-splitbutton.ck-splitbutton_flatten.ck-splitbutton_open:hover > .ck-splitbutton__arrow:not(.ck-disabled):not(:hover) {
        background-color: var(--ck-color-button-on-hover-background);
      }
      .ck.ck-editor__editable .image,
      .ck.ck-editor__editable .image-inline {
        position: relative;
      }
      .ck.ck-editor__editable .image-inline .ck-progress-bar,
      .ck.ck-editor__editable .image .ck-progress-bar {
        position: absolute;
        top: 0;
        left: 0;
      }
      .ck.ck-editor__editable .image-inline.ck-appear,
      .ck.ck-editor__editable .image.ck-appear {
        animation: fadeIn 0.7s;
      }
      .ck.ck-editor__editable .image-inline .ck-progress-bar,
      .ck.ck-editor__editable .image .ck-progress-bar {
        height: 2px;
        width: 0;
        background: var(--ck-color-upload-bar-background);
        transition: width 0.1s;
      }
      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .ck-image-upload-complete-icon {
        display: block;
        position: absolute;
        top: min(var(--ck-spacing-medium), 6%);
        right: min(var(--ck-spacing-medium), 6%);
        border-radius: 50%;
        z-index: 1;
      }
      .ck-image-upload-complete-icon:after {
        content: "";
        position: absolute;
      }
      :root {
        --ck-color-image-upload-icon: #fff;
        --ck-color-image-upload-icon-background: #008a00;
        --ck-image-upload-icon-size: 20;
        --ck-image-upload-icon-width: 2px;
        --ck-image-upload-icon-is-visible: clamp(0px, 100% - 50px, 1px);
      }
      .ck-image-upload-complete-icon {
        opacity: 0;
        background: var(--ck-color-image-upload-icon-background);
        animation-name: ck-upload-complete-icon-show, ck-upload-complete-icon-hide;
        animation-fill-mode: forwards, forwards;
        animation-duration: 0.5s, 0.5s;
        font-size: calc(1px * var(--ck-image-upload-icon-size));
        animation-delay: 0ms, 3s;
        overflow: hidden;
        width: calc(var(--ck-image-upload-icon-is-visible) * var(--ck-image-upload-icon-size));
        height: calc(var(--ck-image-upload-icon-is-visible) * var(--ck-image-upload-icon-size));
      }
      .ck-image-upload-complete-icon:after {
        left: 25%;
        top: 50%;
        opacity: 0;
        height: 0;
        width: 0;
        transform: scaleX(-1) rotate(135deg);
        transform-origin: left top;
        border-top: var(--ck-image-upload-icon-width) solid var(--ck-color-image-upload-icon);
        border-right: var(--ck-image-upload-icon-width) solid var(--ck-color-image-upload-icon);
        animation-name: ck-upload-complete-icon-check;
        animation-duration: 0.5s;
        animation-delay: 0.5s;
        animation-fill-mode: forwards;
        box-sizing: border-box;
      }
      @keyframes ck-upload-complete-icon-show {
        0% {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes ck-upload-complete-icon-hide {
        0% {
          opacity: 1;
        }
        to {
          opacity: 0;
        }
      }
      @keyframes ck-upload-complete-icon-check {
        0% {
          opacity: 1;
          width: 0;
          height: 0;
        }
        33% {
          width: 0.3em;
          height: 0;
        }
        to {
          opacity: 1;
          width: 0.3em;
          height: 0.45em;
        }
      }
      .ck .ck-upload-placeholder-loader {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0;
        left: 0;
      }
      .ck .ck-upload-placeholder-loader:before {
        content: "";
        position: relative;
      }
      :root {
        --ck-color-upload-placeholder-loader: #b3b3b3;
        --ck-upload-placeholder-loader-size: 32px;
      }
      .ck .ck-image-upload-placeholder {
        width: 100%;
        margin: 0;
      }
      .ck .ck-upload-placeholder-loader {
        width: 100%;
        height: 100%;
      }
      .ck .ck-upload-placeholder-loader:before {
        width: var(--ck-upload-placeholder-loader-size);
        height: var(--ck-upload-placeholder-loader-size);
        border-radius: 50%;
        border-top: 3px solid var(--ck-color-upload-placeholder-loader);
        border-right: 2px solid transparent;
        animation: ck-upload-placeholder-loader 1s linear infinite;
      }
      @keyframes ck-upload-placeholder-loader {
        to {
          transform: rotate(1turn);
        }
      }
      .ck .ck-link_selected {
        background: var(--ck-color-link-selected-background);
      }
      .ck .ck-link_selected span.image-inline {
        outline: var(--ck-widget-outline-thickness) solid var(--ck-color-link-selected-background);
      }
      .ck .ck-fake-link-selection {
        background: var(--ck-color-link-fake-selection);
      }
      .ck .ck-fake-link-selection_collapsed {
        height: 100%;
        border-right: 1px solid var(--ck-color-base-text);
        margin-right: -1px;
        outline: 1px solid hsla(0, 0%, 100%, 0.5);
      }
      .ck.ck-link-form {
        display: flex;
      }
      .ck.ck-link-form .ck-label {
        display: none;
      }
      @media screen and (max-width: 600px) {
        .ck.ck-link-form {
          flex-wrap: wrap;
        }
        .ck.ck-link-form .ck-labeled-field-view {
          flex-basis: 100%;
        }
        .ck.ck-link-form .ck-button {
          flex-basis: 50%;
        }
      }
      .ck.ck-link-form_layout-vertical {
        display: block;
      }
      .ck.ck-link-form_layout-vertical .ck-button.ck-button-cancel,
      .ck.ck-link-form_layout-vertical .ck-button.ck-button-save {
        margin-top: var(--ck-spacing-medium);
      }
      .ck.ck-link-form_layout-vertical {
        padding: 0;
        min-width: var(--ck-input-text-width);
      }
      .ck.ck-link-form_layout-vertical .ck-labeled-field-view {
        margin: var(--ck-spacing-large) var(--ck-spacing-large) var(--ck-spacing-small);
      }
      .ck.ck-link-form_layout-vertical .ck-labeled-field-view .ck-input-text {
        min-width: 0;
        width: 100%;
      }
      .ck.ck-link-form_layout-vertical .ck-button {
        padding: var(--ck-spacing-standard);
        margin: 0;
        border-radius: 0;
        border: 0;
        border-top: 1px solid var(--ck-color-base-border);
        width: 50%;
      }
      [dir="ltr"] .ck.ck-link-form_layout-vertical .ck-button,
      [dir="rtl"] .ck.ck-link-form_layout-vertical .ck-button {
        margin-left: 0;
      }
      [dir="rtl"] .ck.ck-link-form_layout-vertical .ck-button:last-of-type {
        border-right: 1px solid var(--ck-color-base-border);
      }
      .ck.ck-link-form_layout-vertical .ck.ck-list {
        margin: var(--ck-spacing-standard) var(--ck-spacing-large);
      }
      .ck.ck-link-form_layout-vertical .ck.ck-list .ck-button.ck-switchbutton {
        border: 0;
        padding: 0;
        width: 100%;
      }
      .ck.ck-link-form_layout-vertical .ck.ck-list .ck-button.ck-switchbutton:hover {
        background: none;
      }
      .ck.ck-link-actions {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
      }
      .ck.ck-link-actions .ck-link-actions__preview {
        display: inline-block;
      }
      .ck.ck-link-actions .ck-link-actions__preview .ck-button__label {
        overflow: hidden;
      }
      @media screen and (max-width: 600px) {
        .ck.ck-link-actions {
          flex-wrap: wrap;
        }
        .ck.ck-link-actions .ck-link-actions__preview {
          flex-basis: 100%;
        }
        .ck.ck-link-actions .ck-button:not(.ck-link-actions__preview) {
          flex-basis: 50%;
        }
      }
      .ck.ck-link-actions .ck-button.ck-link-actions__preview {
        padding-left: 0;
        padding-right: 0;
      }
      .ck.ck-link-actions .ck-button.ck-link-actions__preview .ck-button__label {
        padding: 0 var(--ck-spacing-medium);
        color: var(--ck-color-link-default);
        text-overflow: ellipsis;
        cursor: pointer;
        max-width: var(--ck-input-text-width);
        min-width: 3em;
        text-align: center;
      }
      .ck.ck-link-actions .ck-button.ck-link-actions__preview .ck-button__label:hover {
        text-decoration: underline;
      }
      .ck.ck-link-actions .ck-button.ck-link-actions__preview,
      .ck.ck-link-actions .ck-button.ck-link-actions__preview:active,
      .ck.ck-link-actions .ck-button.ck-link-actions__preview:focus,
      .ck.ck-link-actions .ck-button.ck-link-actions__preview:hover {
        background: none;
      }
      .ck.ck-link-actions .ck-button.ck-link-actions__preview:active {
        box-shadow: none;
      }
      .ck.ck-link-actions .ck-button.ck-link-actions__preview:focus .ck-button__label {
        text-decoration: underline;
      }
      [dir="ltr"] .ck.ck-link-actions .ck-button:not(:first-child),
      [dir="rtl"] .ck.ck-link-actions .ck-button:not(:last-child) {
        margin-left: var(--ck-spacing-standard);
      }
      @media screen and (max-width: 600px) {
        .ck.ck-link-actions .ck-button.ck-link-actions__preview {
          margin: var(--ck-spacing-standard) var(--ck-spacing-standard) 0;
        }
        .ck.ck-link-actions .ck-button.ck-link-actions__preview .ck-button__label {
          min-width: 0;
          max-width: 100%;
        }
        [dir="ltr"] .ck.ck-link-actions .ck-button:not(.ck-link-actions__preview),
        [dir="rtl"] .ck.ck-link-actions .ck-button:not(.ck-link-actions__preview) {
          margin-left: 0;
        }
      }
      .ck-media__wrapper .ck-media__placeholder {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url .ck-tooltip {
        display: block;
      }
      @media (hover: none) {
        .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url .ck-tooltip {
          display: none;
        }
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url {
        max-width: 100%;
        position: relative;
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url:hover .ck-tooltip {
        visibility: visible;
        opacity: 1;
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url .ck-media__placeholder__url__text {
        overflow: hidden;
        display: block;
      }
      .ck-media__wrapper[data-oembed-url*="facebook.com"] .ck-media__placeholder__icon *,
      .ck-media__wrapper[data-oembed-url*="goo.gl/maps"] .ck-media__placeholder__icon *,
      .ck-media__wrapper[data-oembed-url*="google.com/maps"] .ck-media__placeholder__icon *,
      .ck-media__wrapper[data-oembed-url*="instagram.com"] .ck-media__placeholder__icon *,
      .ck-media__wrapper[data-oembed-url*="maps.app.goo.gl"] .ck-media__placeholder__icon *,
      .ck-media__wrapper[data-oembed-url*="maps.google.com"] .ck-media__placeholder__icon *,
      .ck-media__wrapper[data-oembed-url*="twitter.com"] .ck-media__placeholder__icon * {
        display: none;
      }
      .ck-editor__editable:not(.ck-read-only) .ck-media__wrapper > :not(.ck-media__placeholder),
      .ck-editor__editable:not(.ck-read-only) .ck-widget:not(.ck-widget_selected) .ck-media__placeholder {
        pointer-events: none;
      }
      :root {
        --ck-media-embed-placeholder-icon-size: 3em;
        --ck-color-media-embed-placeholder-url-text: #757575;
        --ck-color-media-embed-placeholder-url-text-hover: var(--ck-color-base-text);
      }
      .ck-media__wrapper {
        margin: 0 auto;
      }
      .ck-media__wrapper .ck-media__placeholder {
        padding: calc(var(--ck-spacing-standard) * 3);
        background: var(--ck-color-base-foreground);
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__icon {
        min-width: var(--ck-media-embed-placeholder-icon-size);
        height: var(--ck-media-embed-placeholder-icon-size);
        margin-bottom: var(--ck-spacing-large);
        background-position: 50%;
        background-size: cover;
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__icon .ck-icon {
        width: 100%;
        height: 100%;
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url__text {
        color: var(--ck-color-media-embed-placeholder-url-text);
        white-space: nowrap;
        text-align: center;
        font-style: italic;
        text-overflow: ellipsis;
      }
      .ck-media__wrapper .ck-media__placeholder .ck-media__placeholder__url__text:hover {
        color: var(--ck-color-media-embed-placeholder-url-text-hover);
        cursor: pointer;
        text-decoration: underline;
      }
      .ck-media__wrapper[data-oembed-url*="open.spotify.com"] {
        max-width: 300px;
        max-height: 380px;
      }
      .ck-media__wrapper[data-oembed-url*="goo.gl/maps"] .ck-media__placeholder__icon,
      .ck-media__wrapper[data-oembed-url*="google.com/maps"] .ck-media__placeholder__icon,
      .ck-media__wrapper[data-oembed-url*="maps.app.goo.gl"] .ck-media__placeholder__icon,
      .ck-media__wrapper[data-oembed-url*="maps.google.com"] .ck-media__placeholder__icon {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTAuMzc4IiBoZWlnaHQ9IjI1NC4xNjciIHZpZXdCb3g9IjAgMCA2Ni4yNDYgNjcuMjQ4Ij48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTcyLjUzMSAtMjE4LjQ1NSkgc2NhbGUoLjk4MDEyKSI+PHJlY3Qgcnk9IjUuMjM4IiByeD0iNS4yMzgiIHk9IjIzMS4zOTkiIHg9IjE3Ni4wMzEiIGhlaWdodD0iNjAuMDk5IiB3aWR0aD0iNjAuMDk5IiBmaWxsPSIjMzRhNjY4IiBwYWludC1vcmRlcj0ibWFya2VycyBzdHJva2UgZmlsbCIvPjxwYXRoIGQ9Ik0yMDYuNDc3IDI2MC45bC0yOC45ODcgMjguOTg3YTUuMjE4IDUuMjE4IDAgMDAzLjc4IDEuNjFoNDkuNjIxYzEuNjk0IDAgMy4xOS0uNzk4IDQuMTQ2LTIuMDM3eiIgZmlsbD0iIzVjODhjNSIvPjxwYXRoIGQ9Ik0yMjYuNzQyIDIyMi45ODhjLTkuMjY2IDAtMTYuNzc3IDcuMTctMTYuNzc3IDE2LjAxNC4wMDcgMi43NjIuNjYzIDUuNDc0IDIuMDkzIDcuODc1LjQzLjcwMy44MyAxLjQwOCAxLjE5IDIuMTA3LjMzMy41MDIuNjUgMS4wMDUuOTUgMS41MDguMzQzLjQ3Ny42NzMuOTU3Ljk4OCAxLjQ0IDEuMzEgMS43NjkgMi41IDMuNTAyIDMuNjM3IDUuMTY4Ljc5MyAxLjI3NSAxLjY4MyAyLjY0IDIuNDY2IDMuOTkgMi4zNjMgNC4wOTQgNC4wMDcgOC4wOTIgNC42IDEzLjkxNHYuMDEyYy4xODIuNDEyLjUxNi42NjYuODc5LjY2Ny40MDMtLjAwMS43NjgtLjMxNC45My0uNzk5LjYwMy01Ljc1NiAyLjIzOC05LjcyOSA0LjU4NS0xMy43OTQuNzgyLTEuMzUgMS42NzMtMi43MTUgMi40NjUtMy45OSAxLjEzNy0xLjY2NiAyLjMyOC0zLjQgMy42MzgtNS4xNjkuMzE1LS40ODIuNjQ1LS45NjIuOTg4LTEuNDM5LjMtLjUwMy42MTctMS4wMDYuOTUtMS41MDguMzU5LS43Ljc2LTEuNDA0IDEuMTktMi4xMDcgMS40MjYtMi40MDIgMi01LjExNCAyLjAwNC03Ljg3NSAwLTguODQ0LTcuNTExLTE2LjAxNC0xNi43NzYtMTYuMDE0eiIgZmlsbD0iI2RkNGIzZSIgcGFpbnQtb3JkZXI9Im1hcmtlcnMgc3Ryb2tlIGZpbGwiLz48ZWxsaXBzZSByeT0iNS41NjQiIHJ4PSI1LjgyOCIgY3k9IjIzOS4wMDIiIGN4PSIyMjYuNzQyIiBmaWxsPSIjODAyZDI3IiBwYWludC1vcmRlcj0ibWFya2VycyBzdHJva2UgZmlsbCIvPjxwYXRoIGQ9Ik0xOTAuMzAxIDIzNy4yODNjLTQuNjcgMC04LjQ1NyAzLjg1My04LjQ1NyA4LjYwNnMzLjc4NiA4LjYwNyA4LjQ1NyA4LjYwN2MzLjA0MyAwIDQuODA2LS45NTggNi4zMzctMi41MTYgMS41My0xLjU1NyAyLjA4Ny0zLjkxMyAyLjA4Ny02LjI5IDAtLjM2Mi0uMDIzLS43MjItLjA2NC0xLjA3OWgtOC4yNTd2My4wNDNoNC44NWMtLjE5Ny43NTktLjUzMSAxLjQ1LTEuMDU4IDEuOTg2LS45NDIuOTU4LTIuMDI4IDEuNTQ4LTMuOTAxIDEuNTQ4LTIuODc2IDAtNS4yMDgtMi4zNzItNS4yMDgtNS4yOTkgMC0yLjkyNiAyLjMzMi01LjI5OSA1LjIwOC01LjI5OSAxLjM5OSAwIDIuNjE4LjQwNyAzLjU4NCAxLjI5M2wyLjM4MS0yLjM4YzAtLjAwMi0uMDAzLS4wMDQtLjAwNC0uMDA1LTEuNTg4LTEuNTI0LTMuNjItMi4yMTUtNS45NTUtMi4yMTV6bTQuNDMgNS42NmwuMDAzLjAwNnYtLjAwM3oiIGZpbGw9IiNmZmYiIHBhaW50LW9yZGVyPSJtYXJrZXJzIHN0cm9rZSBmaWxsIi8+PHBhdGggZD0iTTIxNS4xODQgMjUxLjkyOWwtNy45OCA3Ljk3OSAyOC40NzcgMjguNDc1YTUuMjMzIDUuMjMzIDAgMDAuNDQ5LTIuMTIzdi0zMS4xNjVjLS40NjkuNjc1LS45MzQgMS4zNDktMS4zODIgMi4wMDUtLjc5MiAxLjI3NS0xLjY4MiAyLjY0LTIuNDY1IDMuOTktMi4zNDcgNC4wNjUtMy45ODIgOC4wMzgtNC41ODUgMTMuNzk0LS4xNjIuNDg1LS41MjcuNzk4LS45My43OTktLjM2My0uMDAxLS42OTctLjI1NS0uODc5LS42Njd2LS4wMTJjLS41OTMtNS44MjItMi4yMzctOS44Mi00LjYtMTMuOTE0LS43ODMtMS4zNS0xLjY3My0yLjcxNS0yLjQ2Ni0zLjk5LTEuMTM3LTEuNjY2LTIuMzI3LTMuNC0zLjYzNy01LjE2OWwtLjAwMi0uMDAzeiIgZmlsbD0iI2MzYzNjMyIvPjxwYXRoIGQ9Ik0yMTIuOTgzIDI0OC40OTVsLTM2Ljk1MiAzNi45NTN2LjgxMmE1LjIyNyA1LjIyNyAwIDAwNS4yMzggNS4yMzhoMS4wMTVsMzUuNjY2LTM1LjY2NmExMzYuMjc1IDEzNi4yNzUgMCAwMC0yLjc2NC0zLjkgMzcuNTc1IDM3LjU3NSAwIDAwLS45ODktMS40NCAzNS4xMjcgMzUuMTI3IDAgMDAtLjk1LTEuNTA4Yy0uMDgzLS4xNjItLjE3Ni0uMzI2LS4yNjQtLjQ4OXoiIGZpbGw9IiNmZGRjNGYiIHBhaW50LW9yZGVyPSJtYXJrZXJzIHN0cm9rZSBmaWxsIi8+PHBhdGggZD0iTTIxMS45OTggMjYxLjA4M2wtNi4xNTIgNi4xNTEgMjQuMjY0IDI0LjI2NGguNzgxYTUuMjI3IDUuMjI3IDAgMDA1LjIzOS01LjIzOHYtMS4wNDV6IiBmaWxsPSIjZmZmIiBwYWludC1vcmRlcj0ibWFya2VycyBzdHJva2UgZmlsbCIvPjwvZz48L3N2Zz4=);
      }
      .ck-media__wrapper[data-oembed-url*="facebook.com"] .ck-media__placeholder {
        background: #4268b3;
      }
      .ck-media__wrapper[data-oembed-url*="facebook.com"] .ck-media__placeholder .ck-media__placeholder__icon {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAyNCIgaGVpZ2h0PSIxMDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Ik05NjcuNDg0IDBINTYuNTE3QzI1LjMwNCAwIDAgMjUuMzA0IDAgNTYuNTE3djkxMC45NjZDMCA5OTguNjk0IDI1LjI5NyAxMDI0IDU2LjUyMiAxMDI0SDU0N1Y2MjhINDE0VjQ3M2gxMzNWMzU5LjAyOWMwLTEzMi4yNjIgODAuNzczLTIwNC4yODIgMTk4Ljc1Ni0yMDQuMjgyIDU2LjUxMyAwIDEwNS4wODYgNC4yMDggMTE5LjI0NCA2LjA4OVYyOTlsLTgxLjYxNi4wMzdjLTYzLjk5MyAwLTc2LjM4NCAzMC40OTItNzYuMzg0IDc1LjIzNlY0NzNoMTUzLjQ4N2wtMTkuOTg2IDE1NUg3MDd2Mzk2aDI2MC40ODRjMzEuMjEzIDAgNTYuNTE2LTI1LjMwMyA1Ni41MTYtNTYuNTE2VjU2LjUxNUMxMDI0IDI1LjMwMyA5OTguNjk3IDAgOTY3LjQ4NCAwIiBmaWxsPSIjRkZGRkZFIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=);
      }
      .ck-media__wrapper[data-oembed-url*="facebook.com"] .ck-media__placeholder .ck-media__placeholder__url__text {
        color: #cdf;
      }
      .ck-media__wrapper[data-oembed-url*="facebook.com"] .ck-media__placeholder .ck-media__placeholder__url__text:hover {
        color: #fff;
      }
      .ck-media__wrapper[data-oembed-url*="instagram.com"] .ck-media__placeholder {
        background: linear-gradient(-135deg, #1400c7, #b800b1, #f50000);
      }
      .ck-media__wrapper[data-oembed-url*="instagram.com"] .ck-media__placeholder .ck-media__placeholder__icon {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTA0IiBoZWlnaHQ9IjUwNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik0wIC4xNTloNTAzLjg0MVY1MDMuOTRIMHoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48bWFzayBpZD0iYiIgZmlsbD0iI2ZmZiI+PHVzZSB4bGluazpocmVmPSIjYSIvPjwvbWFzaz48cGF0aCBkPSJNMjUxLjkyMS4xNTljLTY4LjQxOCAwLTc2Ljk5Ny4yOS0xMDMuODY3IDEuNTE2LTI2LjgxNCAxLjIyMy00NS4xMjcgNS40ODItNjEuMTUxIDExLjcxLTE2LjU2NiA2LjQzNy0zMC42MTUgMTUuMDUxLTQ0LjYyMSAyOS4wNTYtMTQuMDA1IDE0LjAwNi0yMi42MTkgMjguMDU1LTI5LjA1NiA0NC42MjEtNi4yMjggMTYuMDI0LTEwLjQ4NyAzNC4zMzctMTEuNzEgNjEuMTUxQy4yOSAxNzUuMDgzIDAgMTgzLjY2MiAwIDI1Mi4wOGMwIDY4LjQxNy4yOSA3Ni45OTYgMS41MTYgMTAzLjg2NiAxLjIyMyAyNi44MTQgNS40ODIgNDUuMTI3IDExLjcxIDYxLjE1MSA2LjQzNyAxNi41NjYgMTUuMDUxIDMwLjYxNSAyOS4wNTYgNDQuNjIxIDE0LjAwNiAxNC4wMDUgMjguMDU1IDIyLjYxOSA0NC42MjEgMjkuMDU3IDE2LjAyNCA2LjIyNyAzNC4zMzcgMTAuNDg2IDYxLjE1MSAxMS43MDkgMjYuODcgMS4yMjYgMzUuNDQ5IDEuNTE2IDEwMy44NjcgMS41MTYgNjguNDE3IDAgNzYuOTk2LS4yOSAxMDMuODY2LTEuNTE2IDI2LjgxNC0xLjIyMyA0NS4xMjctNS40ODIgNjEuMTUxLTExLjcwOSAxNi41NjYtNi40MzggMzAuNjE1LTE1LjA1MiA0NC42MjEtMjkuMDU3IDE0LjAwNS0xNC4wMDYgMjIuNjE5LTI4LjA1NSAyOS4wNTctNDQuNjIxIDYuMjI3LTE2LjAyNCAxMC40ODYtMzQuMzM3IDExLjcwOS02MS4xNTEgMS4yMjYtMjYuODcgMS41MTYtMzUuNDQ5IDEuNTE2LTEwMy44NjYgMC02OC40MTgtLjI5LTc2Ljk5Ny0xLjUxNi0xMDMuODY3LTEuMjIzLTI2LjgxNC01LjQ4Mi00NS4xMjctMTEuNzA5LTYxLjE1MS02LjQzOC0xNi41NjYtMTUuMDUyLTMwLjYxNS0yOS4wNTctNDQuNjIxLTE0LjAwNi0xNC4wMDUtMjguMDU1LTIyLjYxOS00NC42MjEtMjkuMDU2LTE2LjAyNC02LjIyOC0zNC4zMzctMTAuNDg3LTYxLjE1MS0xMS43MUMzMjguOTE3LjQ0OSAzMjAuMzM4LjE1OSAyNTEuOTIxLjE1OXptMCA0NS4zOTFjNjcuMjY1IDAgNzUuMjMzLjI1NyAxMDEuNzk3IDEuNDY5IDI0LjU2MiAxLjEyIDM3LjkwMSA1LjIyNCA0Ni43NzggOC42NzQgMTEuNzU5IDQuNTcgMjAuMTUxIDEwLjAyOSAyOC45NjYgMTguODQ1IDguODE2IDguODE1IDE0LjI3NSAxNy4yMDcgMTguODQ1IDI4Ljk2NiAzLjQ1IDguODc3IDcuNTU0IDIyLjIxNiA4LjY3NCA0Ni43NzggMS4yMTIgMjYuNTY0IDEuNDY5IDM0LjUzMiAxLjQ2OSAxMDEuNzk4IDAgNjcuMjY1LS4yNTcgNzUuMjMzLTEuNDY5IDEwMS43OTctMS4xMiAyNC41NjItNS4yMjQgMzcuOTAxLTguNjc0IDQ2Ljc3OC00LjU3IDExLjc1OS0xMC4wMjkgMjAuMTUxLTE4Ljg0NSAyOC45NjYtOC44MTUgOC44MTYtMTcuMjA3IDE0LjI3NS0yOC45NjYgMTguODQ1LTguODc3IDMuNDUtMjIuMjE2IDcuNTU0LTQ2Ljc3OCA4LjY3NC0yNi41NiAxLjIxMi0zNC41MjcgMS40NjktMTAxLjc5NyAxLjQ2OS02Ny4yNzEgMC03NS4yMzctLjI1Ny0xMDEuNzk4LTEuNDY5LTI0LjU2Mi0xLjEyLTM3LjkwMS01LjIyNC00Ni43NzgtOC42NzQtMTEuNzU5LTQuNTctMjAuMTUxLTEwLjAyOS0yOC45NjYtMTguODQ1LTguODE1LTguODE1LTE0LjI3NS0xNy4yMDctMTguODQ1LTI4Ljk2Ni0zLjQ1LTguODc3LTcuNTU0LTIyLjIxNi04LjY3NC00Ni43NzgtMS4yMTItMjYuNTY0LTEuNDY5LTM0LjUzMi0xLjQ2OS0xMDEuNzk3IDAtNjcuMjY2LjI1Ny03NS4yMzQgMS40NjktMTAxLjc5OCAxLjEyLTI0LjU2MiA1LjIyNC0zNy45MDEgOC42NzQtNDYuNzc4IDQuNTctMTEuNzU5IDEwLjAyOS0yMC4xNTEgMTguODQ1LTI4Ljk2NiA4LjgxNS04LjgxNiAxNy4yMDctMTQuMjc1IDI4Ljk2Ni0xOC44NDUgOC44NzctMy40NSAyMi4yMTYtNy41NTQgNDYuNzc4LTguNjc0IDI2LjU2NC0xLjIxMiAzNC41MzItMS40NjkgMTAxLjc5OC0xLjQ2OXoiIGZpbGw9IiNGRkYiIG1hc2s9InVybCgjYikiLz48cGF0aCBkPSJNMjUxLjkyMSAzMzYuMDUzYy00Ni4zNzggMC04My45NzQtMzcuNTk2LTgzLjk3NC04My45NzMgMC00Ni4zNzggMzcuNTk2LTgzLjk3NCA4My45NzQtODMuOTc0IDQ2LjM3NyAwIDgzLjk3MyAzNy41OTYgODMuOTczIDgzLjk3NCAwIDQ2LjM3Ny0zNy41OTYgODMuOTczLTgzLjk3MyA4My45NzN6bTAtMjEzLjMzOGMtNzEuNDQ3IDAtMTI5LjM2NSA1Ny45MTgtMTI5LjM2NSAxMjkuMzY1IDAgNzEuNDQ2IDU3LjkxOCAxMjkuMzY0IDEyOS4zNjUgMTI5LjM2NCA3MS40NDYgMCAxMjkuMzY0LTU3LjkxOCAxMjkuMzY0LTEyOS4zNjQgMC03MS40NDctNTcuOTE4LTEyOS4zNjUtMTI5LjM2NC0xMjkuMzY1ek00MTYuNjI3IDExNy42MDRjMCAxNi42OTYtMTMuNTM1IDMwLjIzLTMwLjIzMSAzMC4yMy0xNi42OTUgMC0zMC4yMy0xMy41MzQtMzAuMjMtMzAuMjMgMC0xNi42OTYgMTMuNTM1LTMwLjIzMSAzMC4yMy0zMC4yMzEgMTYuNjk2IDAgMzAuMjMxIDEzLjUzNSAzMC4yMzEgMzAuMjMxIiBmaWxsPSIjRkZGIi8+PC9nPjwvc3ZnPg==);
      }
      .ck-media__wrapper[data-oembed-url*="instagram.com"] .ck-media__placeholder .ck-media__placeholder__url__text {
        color: #ffe0fe;
      }
      .ck-media__wrapper[data-oembed-url*="instagram.com"] .ck-media__placeholder .ck-media__placeholder__url__text:hover {
        color: #fff;
      }
      .ck-media__wrapper[data-oembed-url*="twitter.com"] .ck.ck-media__placeholder {
        background: linear-gradient(90deg, #71c6f4, #0d70a5);
      }
      .ck-media__wrapper[data-oembed-url*="twitter.com"] .ck.ck-media__placeholder .ck-media__placeholder__icon {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0MDAgNDAwIj48cGF0aCBkPSJNNDAwIDIwMGMwIDExMC41LTg5LjUgMjAwLTIwMCAyMDBTMCAzMTAuNSAwIDIwMCA4OS41IDAgMjAwIDBzMjAwIDg5LjUgMjAwIDIwMHpNMTYzLjQgMzA1LjVjODguNyAwIDEzNy4yLTczLjUgMTM3LjItMTM3LjIgMC0yLjEgMC00LjItLjEtNi4yIDkuNC02LjggMTcuNi0xNS4zIDI0LjEtMjUtOC42IDMuOC0xNy45IDYuNC0yNy43IDcuNiAxMC02IDE3LjYtMTUuNCAyMS4yLTI2LjctOS4zIDUuNS0xOS42IDkuNS0zMC42IDExLjctOC44LTkuNC0yMS4zLTE1LjItMzUuMi0xNS4yLTI2LjYgMC00OC4yIDIxLjYtNDguMiA0OC4yIDAgMy44LjQgNy41IDEuMyAxMS00MC4xLTItNzUuNi0yMS4yLTk5LjQtNTAuNC00LjEgNy4xLTYuNSAxNS40LTYuNSAyNC4yIDAgMTYuNyA4LjUgMzEuNSAyMS41IDQwLjEtNy45LS4yLTE1LjMtMi40LTIxLjgtNnYuNmMwIDIzLjQgMTYuNiA0Mi44IDM4LjcgNDcuMy00IDEuMS04LjMgMS43LTEyLjcgMS43LTMuMSAwLTYuMS0uMy05LjEtLjkgNi4xIDE5LjIgMjMuOSAzMy4xIDQ1IDMzLjUtMTYuNSAxMi45LTM3LjMgMjAuNi01OS45IDIwLjYtMy45IDAtNy43LS4yLTExLjUtLjcgMjEuMSAxMy44IDQ2LjUgMjEuOCA3My43IDIxLjgiIGZpbGw9IiNmZmYiLz48L3N2Zz4=);
      }
      .ck-media__wrapper[data-oembed-url*="twitter.com"] .ck.ck-media__placeholder .ck-media__placeholder__url__text {
        color: #b8e6ff;
      }
      .ck-media__wrapper[data-oembed-url*="twitter.com"] .ck.ck-media__placeholder .ck-media__placeholder__url__text:hover {
        color: #fff;
      }
      .ck.ck-media-form {
        display: flex;
        align-items: flex-start;
        flex-direction: row;
        flex-wrap: nowrap;
      }
      .ck.ck-media-form .ck-labeled-field-view {
        display: inline-block;
      }
      .ck.ck-media-form .ck-label {
        display: none;
      }
      @media screen and (max-width: 600px) {
        .ck.ck-media-form {
          flex-wrap: wrap;
        }
        .ck.ck-media-form .ck-labeled-field-view {
          flex-basis: 100%;
        }
        .ck.ck-media-form .ck-button {
          flex-basis: 50%;
        }
      }
      .ck-content .media {
        clear: both;
        margin: 0.9em 0;
        display: block;
        min-width: 15em;
      }
      :root {
        --ck-color-table-focused-cell-background: rgba(158, 207, 250, 0.3);
      }
      .ck-widget.table td.ck-editor__nested-editable.ck-editor__nested-editable_focused,
      .ck-widget.table td.ck-editor__nested-editable:focus,
      .ck-widget.table th.ck-editor__nested-editable.ck-editor__nested-editable_focused,
      .ck-widget.table th.ck-editor__nested-editable:focus {
        background: var(--ck-color-table-focused-cell-background);
        border-style: none;
        outline: 1px solid var(--ck-color-focus-border);
        outline-offset: -1px;
      }
      .ck .ck-insert-table-dropdown__grid {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
      }
      :root {
        --ck-insert-table-dropdown-padding: 10px;
        --ck-insert-table-dropdown-box-height: 11px;
        --ck-insert-table-dropdown-box-width: 12px;
        --ck-insert-table-dropdown-box-margin: 1px;
      }
      .ck .ck-insert-table-dropdown__grid {
        width: calc(var(--ck-insert-table-dropdown-box-width) * 10 + var(--ck-insert-table-dropdown-box-margin) * 20 + var(--ck-insert-table-dropdown-padding) * 2);
        padding: var(--ck-insert-table-dropdown-padding) var(--ck-insert-table-dropdown-padding) 0;
      }
      .ck .ck-insert-table-dropdown__label {
        text-align: center;
      }
      .ck .ck-insert-table-dropdown-grid-box {
        width: var(--ck-insert-table-dropdown-box-width);
        height: var(--ck-insert-table-dropdown-box-height);
        margin: var(--ck-insert-table-dropdown-box-margin);
        border: 1px solid var(--ck-color-base-border);
        border-radius: 1px;
      }
      .ck .ck-insert-table-dropdown-grid-box.ck-on {
        border-color: var(--ck-color-focus-border);
        background: var(--ck-color-focus-outer-shadow);
      }
      :root {
        --ck-table-selected-cell-background: rgba(158, 207, 250, 0.3);
      }
      .ck.ck-editor__editable .table table td.ck-editor__editable_selected,
      .ck.ck-editor__editable .table table th.ck-editor__editable_selected {
        position: relative;
        caret-color: transparent;
        outline: unset;
        box-shadow: unset;
      }
      .ck.ck-editor__editable .table table td.ck-editor__editable_selected:after,
      .ck.ck-editor__editable .table table th.ck-editor__editable_selected:after {
        content: "";
        pointer-events: none;
        background-color: var(--ck-table-selected-cell-background);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
      }
      .ck.ck-editor__editable .table table td.ck-editor__editable_selected ::selection,
      .ck.ck-editor__editable .table table td.ck-editor__editable_selected:focus,
      .ck.ck-editor__editable .table table th.ck-editor__editable_selected ::selection,
      .ck.ck-editor__editable .table table th.ck-editor__editable_selected:focus {
        background-color: transparent;
      }
      .ck.ck-editor__editable .table table td.ck-editor__editable_selected .ck-widget_selected,
      .ck.ck-editor__editable .table table th.ck-editor__editable_selected .ck-widget_selected {
        outline: unset;
      }
      .ck-content .table {
        margin: 0.9em auto;
        display: table;
      }
      .ck-content .table table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        height: 100%;
        border: 1px double #b3b3b3;
      }
      .ck-content .table table td,
      .ck-content .table table th {
        min-width: 2em;
        padding: 0.4em;
        border: 1px solid #bfbfbf;
      }
      .ck-content .table table th {
        font-weight: 700;
        background: hsla(0, 0%, 0%, 5%);
      }
      .ck-content[dir="rtl"] .table th {
        text-align: right;
      }
      .ck-content[dir="ltr"] .table th {
        text-align: left;
      }
      .ck-editor__editable .ck-table-bogus-paragraph {
        display: inline-block;
        width: 100%;
      }
    </style>
  </head>
  <body class="login">
    <div id="app" data-v-app="">
      <div>
        <div class="container sm:px-10">
          <div class="block xl:grid grid-cols-2 gap-4">
            <div class="hidden xl:flex flex-col min-h-screen">
              <a href="" class="-intro-x flex items-center pt-5">
                <span class="text-white text-lg ml-3">SISTEM INFORMASI KLINIK</span>
              </a>
              <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('images/urban-928.png') }}" />
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                  Masuk ke aplikasi <br />
                  dengan sekali klik.
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Kelola semua dalam satu tempat</div>
              </div>
            </div>
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
              <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Masuk ke aplikasi dengan sekali klik. Kelola semua dalam satu tempat</div>
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form action="{{ url('login') }}" method="post">
                  @csrf
                  <div class="intro-x mt-8">
                    <input
                      type="text"
                      class="intro-x login__input form-control py-3 px-4 block"
                      placeholder="Username"
                      name="username"
                    />
                    <input
                      type="password"
                      class="intro-x login__input form-control py-3 px-4 block mt-4"
                      placeholder="Password"
                      name="password"
                    />
                  </div>
                  <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
