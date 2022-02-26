<html lang="en">
<!-- Mirrored from athemeart.dev/html/consted/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Feb 2022 20:10:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consted – Construction HTML template</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('web/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/animate-2.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/icofont/icofont.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/lightboxed.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">
    <script async="" src="../../cdn-cgi/challenge-platform/h/g/scripts/invisible.js"></script>
    <style type="text/css">
        body.swal2-shown:not(.swal2-no-backdrop) {
            overflow-y: hidden;
        }

        body.swal2-toast-shown {
            overflow-y: auto;
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-icon {
            margin: 0 0 15px;
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-buttonswrapper {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input {
            height: 32px;
            font-size: 14px;
            margin: 5px auto;
        }

        body.swal2-toast-shown>.swal2-container {
            position: fixed;
            background-color: transparent;
        }

        body.swal2-toast-shown>.swal2-container.swal2-shown {
            background-color: transparent;
        }

        body.swal2-toast-shown>.swal2-container.swal2-top {
            top: 0;
            left: 50%;
            bottom: auto;
            right: auto;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown>.swal2-container.swal2-top-right {
            top: 0;
            left: auto;
            bottom: auto;
            right: 0;
        }

        body.swal2-toast-shown>.swal2-container.swal2-top-left {
            top: 0;
            left: 0;
            bottom: auto;
            right: auto;
        }

        body.swal2-toast-shown>.swal2-container.swal2-center-left {
            top: 50%;
            left: 0;
            bottom: auto;
            right: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown>.swal2-container.swal2-center {
            top: 50%;
            left: 50%;
            bottom: auto;
            right: auto;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-toast-shown>.swal2-container.swal2-center-right {
            top: 50%;
            left: auto;
            bottom: auto;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown>.swal2-container.swal2-bottom-left {
            top: auto;
            left: 0;
            bottom: 0;
            right: auto;
        }

        body.swal2-toast-shown>.swal2-container.swal2-bottom {
            top: auto;
            left: 50%;
            bottom: 0;
            right: auto;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown>.swal2-container.swal2-bottom-right {
            top: auto;
            left: auto;
            bottom: 0;
            right: 0;
        }

        body.swal2-iosfix {
            position: fixed;
            left: 0;
            right: 0;
        }

        body.swal2-no-backdrop>.swal2-shown {
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            background-color: transparent;
        }

        body.swal2-no-backdrop>.swal2-shown>.swal2-modal {
            -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-top-left {
            top: 0;
            left: 0;
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-top-right {
            top: 0;
            right: 0;
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-center-left {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-bottom-left {
            bottom: 0;
            left: 0;
        }

        body.swal2-no-backdrop>.swal2-shown.swal2-bottom-right {
            bottom: 0;
            right: 0;
        }

        .swal2-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: fixed;
            padding: 10px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: transparent;
            z-index: 1060;
        }

        .swal2-container.swal2-top {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .swal2-container.swal2-top-left {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-top-right {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .swal2-container.swal2-center-left {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-center-right {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-bottom {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .swal2-container.swal2-bottom-left {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-bottom-right {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .swal2-container.swal2-grow-column {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .swal2-container.swal2-grow-column.swal2-top,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-bottom {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-bottom-left {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .swal2-container.swal2-grow-column.swal2-top-right,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-bottom-right {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal {
            margin: auto;
        }

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .swal2-container .swal2-modal {
                margin: 0 !important;
            }
        }

        .swal2-container.swal2-fade {
            -webkit-transition: background-color .1s;
            transition: background-color .1s;
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .swal2-popup {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #fff;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            border-radius: 5px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
            overflow-x: hidden;
            overflow-y: auto;
            display: none;
            position: relative;
            max-width: 100%;
        }

        .swal2-popup.swal2-toast {
            width: 300px;
            padding: 0 15px;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            overflow-y: hidden;
            -webkit-box-shadow: 0 0 10px #d9d9d9;
            box-shadow: 0 0 10px #d9d9d9;
        }

        .swal2-popup.swal2-toast .swal2-title {
            max-width: 300px;
            font-size: 16px;
            text-align: left;
        }

        .swal2-popup.swal2-toast .swal2-content {
            font-size: 14px;
            text-align: left;
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 32px;
            height: 32px;
            margin: 0 15px 0 0;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 32px;
            height: 32px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-info,
        .swal2-popup.swal2-toast .swal2-icon.swal2-warning,
        .swal2-popup.swal2-toast .swal2-icon.swal2-question {
            font-size: 26px;
            line-height: 32px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            top: 14px;
            width: 22px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            left: 5px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            right: 5px;
        }

        .swal2-popup.swal2-toast .swal2-buttonswrapper {
            margin: 0 0 0 5px;
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 0 0 5px;
            padding: 5px 10px;
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
            box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
        }

        .swal2-popup.swal2-toast .swal2-validationerror {
            width: 100%;
            margin: 5px -20px;
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
            border-radius: 50%;
            position: absolute;
            width: 32px;
            height: 64px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            border-radius: 64px 0 0 64px;
            top: -4px;
            left: -15px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 32px 32px;
            transform-origin: 32px 32px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            border-radius: 0 64px 64px 0;
            top: -5px;
            left: 14px;
            -webkit-transform-origin: 0 32px;
            transform-origin: 0 32px;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 32px;
            height: 32px;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            width: 7px;
            height: 90px;
            left: 28px;
            top: 8px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
            height: 5px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
            width: 12px;
            left: 3px;
            top: 18px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
            width: 22px;
            right: 3px;
            top: 15px;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s;
        }

        .swal2-popup:focus {
            outline: none;
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden;
        }

        .swal2-popup .swal2-title {
            color: #595959;
            font-size: 30px;
            text-align: center;
            font-weight: 600;
            text-transform: none;
            position: relative;
            margin: 0 0 .4em;
            padding: 0;
            display: block;
            word-wrap: break-word;
        }

        .swal2-popup .swal2-buttonswrapper {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 15px;
        }

        .swal2-popup .swal2-buttonswrapper:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4;
            cursor: no-drop;
        }

        .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-confirm {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 4px solid transparent;
            border-color: transparent;
            width: 40px;
            height: 40px;
            padding: 0;
            margin: 7.5px;
            vertical-align: top;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            border-radius: 100%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            animation: rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-cancel {
            margin-left: 30px;
            margin-right: 30px;
        }

        .swal2-popup .swal2-buttonswrapper.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            content: '';
            margin-left: 5px;
            vertical-align: -1px;
            height: 15px;
            width: 15px;
            border: 3px solid #999999;
            -webkit-box-shadow: 1px 1px 1px #fff;
            box-shadow: 1px 1px 1px #fff;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            animation: rotate-loading 1.5s linear 0s infinite normal;
        }

        .swal2-popup .swal2-styled {
            border: 0;
            border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            font-weight: 500;
            margin: 15px 5px 0;
            padding: 10px 32px;
        }

        .swal2-popup .swal2-styled:focus {
            outline: none;
            -webkit-box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
        }

        .swal2-popup .swal2-image {
            margin: 20px auto;
            max-width: 100%;
        }

        .swal2-popup .swal2-close {
            background: transparent;
            border: 0;
            margin: 0;
            padding: 0;
            width: 38px;
            height: 40px;
            font-size: 36px;
            line-height: 40px;
            font-family: serif;
            position: absolute;
            top: 5px;
            right: 8px;
            cursor: pointer;
            color: #cccccc;
            -webkit-transition: color .1s ease;
            transition: color .1s ease;
        }

        .swal2-popup .swal2-close:hover {
            color: #d55;
        }

        .swal2-popup>.swal2-input,
        .swal2-popup>.swal2-file,
        .swal2-popup>.swal2-textarea,
        .swal2-popup>.swal2-select,
        .swal2-popup>.swal2-radio,
        .swal2-popup>.swal2-checkbox {
            display: none;
        }

        .swal2-popup .swal2-content {
            font-size: 18px;
            text-align: center;
            font-weight: 300;
            position: relative;
            float: none;
            margin: 0;
            padding: 0;
            line-height: normal;
            color: #545454;
            word-wrap: break-word;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-checkbox {
            margin: 20px auto;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea {
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 18px;
            border-radius: 3px;
            border: 1px solid #d9d9d9;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
            -webkit-transition: border-color .3s, -webkit-box-shadow .3s;
            transition: border-color .3s, -webkit-box-shadow .3s;
            transition: border-color .3s, box-shadow .3s;
            transition: border-color .3s, box-shadow .3s, -webkit-box-shadow .3s;
        }

        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            -webkit-box-shadow: 0 0 2px #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important;
        }

        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-textarea:focus {
            outline: none;
            border: 1px solid #b4dbed;
            -webkit-box-shadow: 0 0 3px #c4e6f5;
            box-shadow: 0 0 3px #c4e6f5;
        }

        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-range input {
            float: left;
            width: 80%;
        }

        .swal2-popup .swal2-range output {
            float: right;
            width: 20%;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 43px;
            line-height: 43px;
            vertical-align: middle;
            margin: 20px auto;
            padding: 0;
        }

        .swal2-popup .swal2-input {
            height: 43px;
            padding: 0 12px;
        }

        .swal2-popup .swal2-input[type='number'] {
            max-width: 150px;
        }

        .swal2-popup .swal2-file {
            font-size: 20px;
        }

        .swal2-popup .swal2-textarea {
            height: 108px;
            padding: 12px;
        }

        .swal2-popup .swal2-select {
            color: #545454;
            font-size: inherit;
            padding: 5px 10px;
            min-width: 40%;
            max-width: 100%;
        }

        .swal2-popup .swal2-radio {
            border: 0;
        }

        .swal2-popup .swal2-radio label:not(:first-child) {
            margin-left: 20px;
        }

        .swal2-popup .swal2-radio input,
        .swal2-popup .swal2-radio span {
            vertical-align: middle;
        }

        .swal2-popup .swal2-radio input {
            margin: 0 3px 0 0;
        }

        .swal2-popup .swal2-checkbox {
            color: #545454;
        }

        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-checkbox span {
            vertical-align: middle;
        }

        .swal2-popup .swal2-validationerror {
            background-color: #f0f0f0;
            margin: 0 -20px;
            overflow: hidden;
            padding: 10px;
            color: gray;
            font-size: 16px;
            font-weight: 300;
            display: none;
        }

        .swal2-popup .swal2-validationerror::before {
            content: '!';
            display: inline-block;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #ea7d7d;
            color: #fff;
            line-height: 24px;
            text-align: center;
            margin-right: 10px;
        }

        @supports (-ms-accelerator: true) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        .swal2-icon {
            width: 80px;
            height: 80px;
            border: 4px solid transparent;
            border-radius: 50%;
            margin: 20px auto 30px;
            padding: 0;
            position: relative;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            display: block;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px;
        }

        .swal2-icon.swal2-warning {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #f8bb86;
            border-color: #facea8;
            font-size: 60px;
            line-height: 80px;
            text-align: center;
        }

        .swal2-icon.swal2-info {
            font-family: 'Open Sans', sans-serif;
            color: #3fc3ee;
            border-color: #9de0f6;
            font-size: 60px;
            line-height: 80px;
            text-align: center;
        }

        .swal2-icon.swal2-question {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #87adbd;
            border-color: #c9dae1;
            font-size: 60px;
            line-height: 80px;
            text-align: center;
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            width: 80px;
            height: 80px;
            border: 4px solid rgba(165, 220, 134, 0.2);
            border-radius: 50%;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2;
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            width: 7px;
            height: 90px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'] {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-progresssteps {
            font-weight: 600;
            margin: 0 0 20px;
            padding: 0;
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative;
        }

        .swal2-progresssteps .swal2-progresscircle {
            background: #3085d6;
            border-radius: 2em;
            color: #fff;
            height: 2em;
            line-height: 2em;
            text-align: center;
            width: 2em;
            z-index: 20;
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0;
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progressline {
            background: #3085d6;
            height: .4em;
            margin: 0 -1px;
            z-index: 10;
        }

        [class^='swal2'] {
            -webkit-tap-highlight-color: transparent;
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-10px) rotateZ(2deg);
                transform: translateY(-10px) rotateZ(2deg);
                opacity: 0;
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }

            66% {
                -webkit-transform: translateY(5px) rotateZ(2deg);
                transform: translateY(5px) rotateZ(2deg);
                opacity: .7;
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-10px) rotateZ(2deg);
                transform: translateY(-10px) rotateZ(2deg);
                opacity: 0;
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }

            66% {
                -webkit-transform: translateY(5px) rotateZ(2deg);
                transform: translateY(5px) rotateZ(2deg);
                opacity: .7;
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1;
            }

            33% {
                opacity: .5;
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1;
            }

            33% {
                opacity: .5;
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }

            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }

            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes hideSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }

            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        @keyframes hideSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }

            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        .swal2-show {
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
        }

        .swal2-show.swal2-toast {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s;
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        .swal2-hide {
            -webkit-animation: hideSweetAlert .15s forwards;
            animation: hideSweetAlert .15s forwards;
        }

        .swal2-hide.swal2-toast {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards;
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        @-webkit-keyframes animate-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }

            100% {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @keyframes animate-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }

            100% {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @-webkit-keyframes animate-success-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px;
            }

            100% {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        @keyframes animate-success-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px;
            }

            100% {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 9px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 9px;
            }

            70% {
                width: 24px;
                left: -4px;
                top: 17px;
            }

            84% {
                width: 8px;
                left: 10px;
                top: 20px;
            }

            100% {
                width: 12px;
                left: 3px;
                top: 18px;
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 9px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 9px;
            }

            70% {
                width: 24px;
                left: -4px;
                top: 17px;
            }

            84% {
                width: 8px;
                left: 10px;
                top: 20px;
            }

            100% {
                width: 12px;
                left: 3px;
                top: 18px;
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                width: 0;
                right: 22px;
                top: 26px;
            }

            65% {
                width: 0;
                right: 22px;
                top: 26px;
            }

            84% {
                width: 26px;
                right: 0;
                top: 15px;
            }

            100% {
                width: 22px;
                right: 3px;
                top: 15px;
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                width: 0;
                right: 22px;
                top: 26px;
            }

            65% {
                width: 0;
                right: 22px;
                top: 26px;
            }

            84% {
                width: 26px;
                right: 0;
                top: 15px;
            }

            100% {
                width: 22px;
                right: 3px;
                top: 15px;
            }
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        .swal2-animate-success-line-tip {
            -webkit-animation: animate-success-tip .75s;
            animation: animate-success-tip .75s;
        }

        .swal2-animate-success-line-long {
            -webkit-animation: animate-success-long .75s;
            animation: animate-success-long .75s;
        }

        .swal2-success.swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in;
        }

        @-webkit-keyframes animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }

            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        @keyframes animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }

            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        .swal2-animate-error-icon {
            -webkit-animation: animate-error-icon .5s;
            animation: animate-error-icon .5s;
        }

        @-webkit-keyframes animate-x-mark {
            0% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px;
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1;
            }
        }

        @keyframes animate-x-mark {
            0% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px;
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1;
            }
        }

        .swal2-animate-x-mark {
            -webkit-animation: animate-x-mark .5s;
            animation: animate-x-mark .5s;
        }

        @-webkit-keyframes rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>

    <div class="preloader" style="display: none;">
        <div class="loader"><img src="web/assets/images/spinner.gif" alt="image"></div>
    </div>


    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="top-right">
                            <ul>
                                <li>
                                    <span><i class="icofont-clock-time"></i></span>
                                    12:05 AM 07:10 PM
                                </li>
                                <li>
                                    <span><i class="icofont-email"></i></span>
                                    <a href="https://athemeart.dev/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="234e4a5a4c53634c53574c4d4f4a4d460d4d4657">[email&nbsp;protected]</a>
                                </li>
                                <li>
                                    <span><i class="icofont-google-map"></i></span>
                                    Tampines St 41, Tampines
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header animated fadeInDown fixed-header">
            <div class="container">
                <div class="row no-gutters justify-content-between">
                    <div class="d-xl-none d-lg-none d-flex col-4">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <img src="web/assets/images/btn-img.png" alt="image">
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-4">
                        <div class="logo">
                            <a href="#">
                                <img src="web/assets/images/logo.png" alt="LOGO">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 next">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="homeDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="homeDropdown">
                                            <a class="dropdown-item" href="index.html">Home Page 01</a>
                                            <a class="dropdown-item" href="index-2.html">Home Page 02</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="serviceDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Service
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="serviceDropdown">
                                            <a class="dropdown-item" href="service.html">Service Page</a>
                                            <a class="dropdown-item" href="service-details.html">Service Details
                                                Page</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="projectDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Project
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="projectDropdown">
                                            <a class="dropdown-item" href="project.html">Project Page</a>
                                            <a class="dropdown-item" href="project-details.html">Project Details
                                                Page</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="pageDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="pageDropdown">
                                            <a class="dropdown-item" href="team.html">Team Page</a>
                                            <a class="dropdown-item" href="team-details.html">Team Details Page</a>
                                            <a class="dropdown-item" href="error.html">Error Page</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="blogDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                            <a class="dropdown-item" href="blog.html">Blog Page</a>
                                            <a class="dropdown-item" href="blog-details.html">Blog Details Page</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-4 d-xl-flex d-lg-flex align-items-center">
                        <div class="side-bar-btn">
                            <button class="side-bar-show"><img src="web/assets/images/btn-img.png" alt="image"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sidebar-bg"></div>
    <div class="main-sidebar">
        <div class="close-btn">
            <i class="icofont-close-line-circled"></i>
        </div>
        <div class="logo">
            <img src="web/assets/images/logo.png" alt="LOGO">
        </div>
        <div class="side-about">
            <p>Lorem ipsum dolor sit amet consectetur ad ipisicing elit. Impedit sequi aliquam iure ve niam optio
                mollitia unde id voluptatibus la boriosam vero asperiores deserunt praese ntium tempora exercitationem
                blanditiis expedita, sed dignissimos veritatis?</p>
        </div>
        <div class="links">
            <h2>additional links</h2>
            <ul>
                <li><a href="#">log in</a></li>
                <li><a href="#">sign up</a></li>
                <li><a href="#">faq</a></li>
                <li><a href="#">log out</a></li>
            </ul>
        </div>
        <div class="side-contact">
            <h2>contact info</h2>
            <ul>
                <li>
                    <i class="icofont-google-map"></i>
                    address
                    <span>Lorance Road 555b, Tailstoi Town 2680 Mt, New York City.</span>
                </li>
                <li>
                    <i class="icofont-email"></i>
                    email
                    <span><a href="https://athemeart.dev/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="7c19041d110c10193c1b111d1510521f1311">[email&nbsp;protected]</a></span>
                </li>
                <li>
                    <i class="icofont-ui-call"></i>
                    phone
                    <span>+123 456 789, +123 456 789</span>
                </li>
            </ul>
        </div>
        <div class="socials">
            <h2>social networks</h2>
            <a href="#"><i class="icofont-facebook"></i></a>
            <a href="#"><i class="icofont-twitter"></i></a>
            <a href="#"><i class="icofont-dribbble"></i></a>
            <a href="#"><i class="icofont-skype"></i></a>
        </div>
    </div>


    <div class="banner owl-carousel owl-loaded">



        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-3558px, 0px, 0px); transition: all 0s ease 0s; width: 8302px;">
                <div class="owl-item cloned" style="width: 1186px;">
                    <div class="slider slider-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 0;" class=""><span>Montion</span> are pro in their
                                            <span>passion</span> so you can just leave it on us.
                                        </h1>
                                        <p style="opacity: 0;" class="">Lorem Ipsum is simply dmmy and text the printing
                                            &amp; typeseng staard dummy text ever since the when unknown.</p>
                                        <a href="service.html" class="def-btn" style="opacity: 0;">All Services <i
                                                class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 1186px;">
                    <div class="slider slider-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 0;" class="">We are <span>truthful</span> and
                                            <span>trustworthy</span>, that’s why we are best.
                                        </h1>
                                        <p style="opacity: 0;" class="">Lorem Ipsum is simply dmmy and text the printing
                                            &amp; typeseng staard dummy text ever since the when unknown.</p>
                                        <a href="service.html" class="def-btn" style="opacity: 0;">All Services <i
                                                class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 1186px;">
                    <div class="slider slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 0;" class="">Stand your <span>dream</span> building with
                                            <span>montion</span> construction.
                                        </h1>
                                        <p style="opacity: 0;" class="">Lorem Ipsum is simply dmmy and text the printing
                                            &amp; typeseng staard dummy text ever since the when unknown.</p>
                                        <a href="service.html" class="def-btn" style="opacity: 0;">All Services <i
                                                class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: 1186px;">
                    <div class="slider slider-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 1;" class="fadeInUp animated"><span>Montion</span> are pro
                                            in their <span>passion</span> so you can just leave it on us.</h1>
                                        <p style="opacity: 1;" class="fadeInUp animated">Lorem Ipsum is simply dmmy and
                                            text the printing &amp; typeseng staard dummy text ever since the when
                                            unknown.</p>
                                        <a href="service.html" class="def-btn fadeInUp animated" style="opacity: 1;">All
                                            Services <i class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 1186px;">
                    <div class="slider slider-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 0;" class="">We are <span>truthful</span> and
                                            <span>trustworthy</span>, that’s why we are best.
                                        </h1>
                                        <p style="opacity: 0;" class="">Lorem Ipsum is simply dmmy and text the printing
                                            &amp; typeseng staard dummy text ever since the when unknown.</p>
                                        <a href="service.html" class="def-btn" style="opacity: 0;">All Services <i
                                                class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 1186px;">
                    <div class="slider slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 0;" class="">Stand your <span>dream</span> building with
                                            <span>montion</span> construction.
                                        </h1>
                                        <p style="opacity: 0;" class="">Lorem Ipsum is simply dmmy and text the printing
                                            &amp; typeseng staard dummy text ever since the when unknown.</p>
                                        <a href="service.html" class="def-btn" style="opacity: 0;">All Services <i
                                                class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 1186px;">
                    <div class="slider slider-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="banner-txt">
                                        <h1 style="opacity: 0;" class=""><span>Montion</span> are pro in their
                                            <span>passion</span> so you can just leave it on us.
                                        </h1>
                                        <p style="opacity: 0;" class="">Lorem Ipsum is simply dmmy and text the printing
                                            &amp; typeseng staard dummy text ever since the when unknown.</p>
                                        <a href="service.html" class="def-btn" style="opacity: 0;">All Services <i
                                                class="icofont-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                class="owl-next"><span aria-label="Next">›</span></button></div>
        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
                class="owl-dot active"><span></span></button><button role="button"
                class="owl-dot"><span></span></button></div>
        <div class="owl-thumbs"></div>
    </div>


    <div class="fun-fact">
        <div class="container">
            <div class="bg">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-box">
                            <div class="txt">
                                <h2><span class="odometer odometer-auto-theme" data-count="7453">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">7</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span>
                                        </div>
                                    </span>+</h2>
                                <p>Happy Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-box">
                            <div class="txt">
                                <h2><span class="odometer odometer-auto-theme" data-count="6597">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">9</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">7</span></span></span></span></span>
                                        </div>
                                    </span>+</h2>
                                <p>Country Reached</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-box">
                            <div class="txt">
                                <h2><span class="odometer odometer-auto-theme" data-count="3467">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">7</span></span></span></span></span>
                                        </div>
                                    </span>+</h2>
                                <p>Project Complete</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-box">
                            <div class="txt">
                                <h2><span class="odometer odometer-auto-theme" data-count="698">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">9</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">8</span></span></span></span></span>
                                        </div>
                                    </span>+</h2>
                                <p>Awards Winning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xl-6 col-lg-5 col-md-8 d-xl-flex d-lg-flex align-items-center justify-content-end">
                    <div class="part-img">
                        <img src="web/assets/images/about-img.png" alt="image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 d-xl-flex d-lg-flex align-items-center">
                    <div class="part-txt">
                        <div class="title">
                            <h4>ABOUT US</h4>
                            <h2>We have 28+ years of experience, you can trust montion construction.</h2>
                        </div>
                        <p class="b">Lorem Ipsum is simply dummy text prining and typesetting industry Lorei has been
                            the industry's standard adummy text ever since the whe printer took a galley of type and
                            scrambled.</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="single-box one">
                                    <div class="icon">
                                        <img src="web/assets/images/about-icon-1.png" alt="icon">
                                    </div>
                                    <h3 class="txt">Expert Team</h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="single-box two">
                                    <div class="icon">
                                        <img src="web/assets/images/about-icon-2.png" alt="icon">
                                    </div>
                                    <h3 class="txt">Fast Service</h3>
                                </div>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorei has been the
                            industry's standard dummy text ever since the when dumm printer took a galley of type and
                            scrambled it tom make a our thet text in has survived not only five centuries, but also the
                            leap</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="heading">
                        <h2>Montion Providing The Best Service.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="service-slider owl-carousel owl-loaded owl-drag">






                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1200px, 0px, 0px); transition: all 1s ease 0s; width: 4800px;">
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-1.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Site Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-2.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Interior Design</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-3.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Road Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-1.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Site Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-2.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Interior Design</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-3.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Road Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-1.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Site Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-2.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Interior Design</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-3.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Road Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-1.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Site Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-2.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Interior Design</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/service-img-3.jpg" alt="image">
                                            <div class="overlay">
                                                <a href="service-details.html">+</a>
                                            </div>
                                        </div>
                                        <div class="part-txt">
                                            <a href="service-details.html">Road Construction</a>
                                            <p>Lorem Ipsu is siply dmmyt the pring<br>been thltext industry standard
                                                dummy text ever sice the when an unown</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                    class="icofont-double-left"></i></button><button type="button" role="presentation"
                                class="owl-next"><i class="icofont-double-right"></i></button></div>
                        <div class="owl-dots disabled"></div>
                        <div class="owl-thumbs"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="heading">
                        <h2>Some Feedback From Happy Customers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-5">
                    <div class="client-area">
                        <div class="client-slider">
                            <img src="web/assets/images/client-1.jpg" class="scale" alt="image">
                            <div class="single-client owl-thumbs" data-slider-id="1">
                                <div class="part-img owl-thumb-item">
                                    <img src="web/assets/images/client-1.jpg" alt="image">
                                </div>
                                <div class="part-img owl-thumb-item active">
                                    <img src="web/assets/images/client-2.jpg" alt="image">
                                </div>
                                <div class="part-img owl-thumb-item">
                                    <img src="web/assets/images/client-3.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="img">
                            <img src="web/assets/images/logo-vector.png" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-7">
                    <div class="comment-slider owl-carousel owl-loaded owl-drag" data-slider-id="1">



                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1890px, 0px, 0px); transition: all 1s ease 0s; width: 4410px;">
                                <div class="owl-item cloned" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Shaikh Darda</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Shepherd Burma</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Burma Shepherd</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Shaikh Darda</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Shepherd Burma</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Burma Shepherd</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 570px; margin-right: 60px;">
                                    <div class="single-comment">
                                        <div class="icon">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text the printing has been the industy standard
                                            dummy text ever since printer took a galley of type and scrambled maketype
                                            survived not only five centuries.</p>
                                        <h3>Shaikh Darda</h3>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                role="button" class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="project">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="title">
                        <h2>Motion Recent Completed Some Amazing Projects</h2>
                    </div>
                </div>
            </div>
            <div class="project-slider owl-carousel owl-loaded owl-drag">


                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-3600px, 0px, 0px); transition: all 1s ease 0s; width: 7200px;">
                        <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-1.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-2.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-3.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-4.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-5.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-4.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-5.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-1.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-2.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-3.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-1.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-2.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-3.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-4.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-5.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1170px; margin-right: 30px;">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-4.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-5.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-1.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-2.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-3.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-1.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-2.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-3.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-4.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-5.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-4.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-5.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-1.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-2.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-box">
                                        <div class="part-img">
                                            <img src="web/assets/images/project-3.jpg" alt="image">
                                        </div>
                                        <div class="part-txt">
                                            <div class="txt">
                                                <h3>Richi Village</h3>
                                                <p>Home Construction</p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="project-details.html">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                            class="icofont-double-left"></i></button><button type="button" role="presentation"
                        class="owl-next"><i class="icofont-double-right"></i></button></div>
                <div class="owl-dots disabled"></div>
                <div class="owl-thumbs"></div>
            </div>
        </div>
    </div>


    <div class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="heading">
                        <h2>You Can Check Latest Tips And Article</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="web/assets/images/blog-1.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="blog-info">
                                <div class="date">
                                    <span>20 August 2021</span>
                                </div>
                                <div class="admin">
                                    <span>By: <span class="name">Kati Peterman</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html">Many desktop publishing package's and web page edit</a>
                            <p>Lorem Ipsu is siply dmmyt the pring been thlext industry's stdard dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="web/assets/images/blog-2.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="blog-info">
                                <div class="date">
                                    <span>20 August 2021</span>
                                </div>
                                <div class="admin">
                                    <span>By: <span class="name">Kati Peterman</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html">Many desktop publishing package's and web page edit</a>
                            <p>Lorem Ipsu is siply dmmyt the pring been thlext industry's stdard dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="web/assets/images/blog-3.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="blog-info">
                                <div class="date">
                                    <span>20 August 2021</span>
                                </div>
                                <div class="admin">
                                    <span>By: <span class="name">Kati Peterman</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html">Many desktop publishing package's and web page edit</a>
                            <p>Lorem Ipsu is siply dmmyt the pring been thlext industry's stdard dummy text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="partner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="partner-slider owl-carousel owl-loaded owl-drag">





                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1170px, 0px, 0px); transition: all 1s ease 0s; width: 3510px;">
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-3.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-4.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-5.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-3.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-4.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-5.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-3.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-4.png" alt="image">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 234px;">
                                    <div class="single-partner">
                                        <img src="web/assets/images/partner-5.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                        <div class="owl-thumbs"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="main-footer">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="site-info">
                            <div class="logo">
                                <img src="web/assets/images/logo.png" alt="logo">
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the typesetting industry. Lorem Ipsum has been
                                industry's standard dumy.</p>
                            <div class="social">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-skype"></i></a>
                                <a href="#"><i class="icofont-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-xl-flex d-none"></div>
                    <div class="col-xl-2 col-lg-3 col-sm-6 d-xl-flex align-items-end">
                        <div class="footer-contact">
                            <h3 class="title">Contact</h3>
                            <ul>
                                <li><span><i class="icofont-clock-time"></i></span>12:05 AM 07:10 PM</li>
                                <li><span><i class="icofont-ui-call"></i></span>+8865 6344 2988</li>
                                <li><span><i class="icofont-email"></i></span><a
                                        href="https://athemeart.dev/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="dab7b3a3b5aa9ab5aaaeb5b4b6b3b4bff4b4bfae">[email&nbsp;protected]</a>
                                </li>
                                <li><span><i class="icofont-google-map"></i></span> 5689 Tampines St 4452 Tampines, USA.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-xl-flex d-none"></div>
                    <div class="col-xl-2 col-lg-3 col-sm-6 d-xl-flex align-items-end">
                        <div class="footer-service">
                            <h3 class="title">Services</h3>
                            <ul>
                                <li><a href="service-details.html"><span><i class="icofont-double-right"></i></span>Home
                                        Construction</a></li>
                                <li><a href="service-details.html"><span><i class="icofont-double-right"></i></span>Road
                                        Construction</a></li>
                                <li><a href="service-details.html"><span><i
                                                class="icofont-double-right"></i></span>Interior Design</a></li>
                                <li><a href="service-details.html"><span><i
                                                class="icofont-double-right"></i></span>Building Construction</a></li>
                                <li><a href="service-details.html"><span><i
                                                class="icofont-double-right"></i></span>Bridge Construction</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-xl-flex d-none"></div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="gallery">
                            <h3 class="title">Gallery</h3>
                            <div class="images">
                                <div class="single-img">
                                    <img class="lightboxed" rel="group1" src="web/assets/images/glry-1.jpg"
                                        data-link="web/assets/images/project-details-1.jpg" alt="Image Alt 1">
                                </div>
                                <div class="single-img">
                                    <img class="lightboxed" rel="group1" src="web/assets/images/glry-2.jpg"
                                        data-link="web/assets/images/service-details-1.jpg" alt="Image Alt 1">
                                </div>
                                <div class="single-img">
                                    <img class="lightboxed" rel="group1" src="web/assets/images/glry-3.jpg"
                                        data-link="web/assets/images/service-details-6.jpg" alt="image">
                                </div>
                                <div class="single-img">
                                    <img class="lightboxed" rel="group1" src="web/assets/images/glry-4.jpg"
                                        data-link="web/assets/images/project-details-4.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <p>Copyright © Montion 2021, All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('web/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/owl.carousel2.thumbs.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/lightboxed.js') }}"></script>

    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('web/assets/js/main.js') }}"></script>
    <script type="text/javascript">
        (function(){window['__CF$cv$params']={r:'6e3bd0d42b6f4f64',m:'IG_quOvELdnMtbu0ggFj.N2ulel_CX_Oqi3vG4eLvrE-1645906215-0-AVu5GMxi95lSY1RuADsiyGA1nMtx3z5+1V0Gs3jCWsmqwWWKXKbauiDnOEM6iTFygorYaxGFYtH3g+KPc4/MEf3fQ4gIyDLoNosAwyD4OKMZKm97wlUHGherOMob3mG1P93b/OD5afqncdFUav/RWqM=',s:[0x08e88e8c8c,0xfd24fc1413],u:'/cdn-cgi/challenge-platform/h/g'}})();
    </script>

    <div id="lightboxed--cache">
        <div id="id1645906396423">
            <div class="lightboxed--cached_content">
                <div class="lightboxed--frame"><img src="web/assets/images/project-details-1.jpg" alt="Image Alt 1">
                </div>
                <div class="lightboxed--frame"><img src="web/assets/images/service-details-1.jpg" alt="Image Alt 1">
                </div>
                <div class="lightboxed--frame"><img src="web/assets/images/service-details-6.jpg" alt="image"></div>
                <div class="lightboxed--frame"><img src="web/assets/images/project-details-4.jpg" alt="image"></div>
            </div>
            <div class="lightboxed--cached_thumbs">
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-1.jpg"></div>
                </div>
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-2.jpg"></div>
                </div>
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-3.jpg"></div>
                </div>
                <div class="lightboxed--thumb">
                    <div class="lightboxed--thumb_border"><img src="web/assets/images/glry-4.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="lightboxed--container" class="lightboxed--lightbox_close">
        <div id="lightboxed--stage">
            <div id="lightboxed--content"></div>
            <div id="lightboxed--thumbs"></div>
        </div>
        <div id="lightboxed--bttn_close"></div>
        <div id="lightboxed--bttn_prev"></div>
        <div id="lightboxed--bttn_next"></div>
    </div>
</body>

</html>
