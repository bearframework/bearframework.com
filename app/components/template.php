<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bear Framework</title>
        <meta name="robots" content="index,follow"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta property="og:image" content="<?= $app->getUrl('/assets/socialimage'); ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="fb:page_id" content="826626514113679"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@bearframework"/>
        <meta name="twitter:creator" content="@bearframework"/>
        <meta name="twitter:title" content="Bear Framework"/>
        <meta name="twitter:description" content=""/>
        <meta name="twitter:image" content="<?= $app->getUrl('/assets/socialimage'); ?>">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="apple-touch-icon" sizes="57x57" href="<?= $app->getUrl('/assets/icon57'); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= $app->getUrl('/assets/icon60'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= $app->getUrl('/assets/icon72'); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= $app->getUrl('/assets/icon76'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= $app->getUrl('/assets/icon114'); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= $app->getUrl('/assets/icon120'); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= $app->getUrl('/assets/icon144'); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= $app->getUrl('/assets/icon152'); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= $app->getUrl('/assets/icon180'); ?>">
        <link rel="icon" type="image/png" href="<?= $app->getUrl('/assets/icon32'); ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?= $app->getUrl('/assets/icon192'); ?>" sizes="192x192">
        <link rel="icon" type="image/png" href="<?= $app->getUrl('/assets/icon96'); ?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?= $app->getUrl('/assets/icon16'); ?>" sizes="16x16">
        <meta name="msapplication-TileColor" content="#26ade4">
        <meta name="msapplication-TileImage" content="<?= $app->getUrl('/assets/icon144'); ?>">
        <meta name="theme-color" content="#ffffff">
        <style>
            *{
                box-sizing: border-box;
                padding:0;
                margin:0;
                color: #000;
                line-height: 180%;
            }
            html, body{
                font-size: 14px;
                background-color: #fff;
                font-family: helvetica,arial,sans-serif;
            }
            body > *{
                max-width: 800px;
                margin: 0 auto;
            }
            header{
                text-align: center;
                padding: 0 1.5rem;
            }
            .header-logo{
                margin: 2rem 0 2rem 0;
                display: inline-block;
                width: 130px;
                height: 130px;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMTkuNDI1IiBoZWlnaHQ9IjM1OC40NjQiIGZpbGw9IiMwMDAiPjxwYXRoIGQ9Ik0zMTkuNDMgMzU3Ljk1aC01LjE1bC0xMy43LTE4LjIzLTMuOTMgMy41djE0LjczaC00LjM3di0zNy42aDQuMzdWMzM5bDE3LjA0LTE4LjY0aDUuMTZsLTE1LjEyIDE2LjMzem0tNTUuMzgtMTUuNjN2MTUuNjNoLTQuMzh2LTM3LjZoMTAuM2M0LjYyIDAgOC4wMy45IDEwLjIzIDIuNjYgMi4yIDEuNzcgMy4zIDQuNDMgMy4zIDcuOTggMCA0Ljk3LTIuNSA4LjMzLTcuNTUgMTAuMDhsMTAuMiAxNi45SDI4MWwtOS4xLTE1LjY0em0wLTMuNzZoNmMzLjA3IDAgNS4zMy0uNiA2Ljc3LTEuODMgMS40NC0xLjIzIDIuMTYtMy4wNyAyLjE2LTUuNTIgMC0yLjQ3LS43My00LjI3LTIuMi01LjM2LTEuNDYtMS4xLTMuOC0xLjY1LTcuMDUtMS42NWgtNS42OHptLTEyLjc4LjU0YzAgNi4wMi0xLjUyIDEwLjc1LTQuNTcgMTQuMi0zLjA0IDMuNDQtNy4yNyA1LjE2LTEyLjY4IDUuMTYtNS41NCAwLTkuOC0xLjctMTIuODItNS4wNy0zLTMuNC00LjUtOC4xOC00LjUtMTQuMzUgMC02LjEyIDEuNS0xMC44NiA0LjUtMTQuMjMgMy4wMy0zLjM3IDcuMy01LjA1IDEyLjg3LTUuMDUgNS40IDAgOS42IDEuNyAxMi42NSA1LjE0IDMuMDMgMy40NCA0LjU1IDguMTcgNC41NSAxNC4yem0tMjkuOTYgMGMwIDUuMSAxLjEgOC45NiAzLjI3IDExLjYgMi4xNyAyLjYyIDUuMyAzLjkzIDkuNDUgMy45MyA0LjE2IDAgNy4zLTEuMyA5LjQzLTMuOTMgMi4xMy0yLjYyIDMuMi02LjUgMy4yLTExLjYgMC01LjA1LTEuMDctOC45LTMuMi0xMS41LTIuMS0yLjYyLTUuMjQtMy45Mi05LjM4LTMuOTItNC4xNyAwLTcuMzMgMS4zLTkuNSAzLjk0LTIuMTcgMi42NC0zLjI2IDYuNDYtMy4yNiAxMS40OHptLTE4LjYgMTguODVoLTQuMzJsLTcuNTgtMjUuMTdjLS4zNi0xLjEtLjc3LTIuNTItMS4yLTQuMjItLjQ2LTEuNy0uNy0yLjctLjctMy4wNi0uMzggMi4yNy0uOTggNC43NC0xLjggNy40M2wtNy4zNiAyNS4wMmgtNC4zMmwtMTAtMzcuNmg0LjYzTDE3NiAzNDMuNmMuOCAzLjI1IDEuNCA2LjIgMS44IDguODQuNDUtMy4xMyAxLjE0LTYuMiAyLjA0LTkuMmw2Ljc0LTIyLjg2aDQuNjNsNy4wOCAyMy4wNmMuODIgMi42NiAxLjUgNS42NiAyLjA4IDkgLjMzLTIuNDMuOTQtNS40IDEuODUtOC45bDUuOTMtMjMuMTZoNC42MnptLTQxLjE2IDBoLTIwLjk2di0zNy42aDIwLjk2djMuOWgtMTYuNnYxMi4xaDE1LjZ2My44NmgtMTUuNnYxMy44NGgxNi42em0tNTEuODMgMGwtMTIuNzUtMzMuMzJoLS4yYy4yNCAyLjY0LjM2IDUuNzguMzYgOS40djIzLjkyaC00LjAzdi0zNy42aDYuNThsMTEuOSAzMS4wMmguMmwxMi4wMi0zMWg2LjUzdjM3LjU4aC00LjM3di0yNC4yMmMwLTIuNzguMTItNS44LjM2LTkuMDVoLS4yMmwtMTIuODUgMzMuMjd6bS0yNi4zMiAwTDc4LjcgMzQ2SDYzLjYzTDU5IDM1Ny45NEg1NC42bDE0Ljg2LTM3Ljc0aDMuNjhsMTQuNzggMzcuNzV6bS02LjA0LTE1LjlsLTQuMzctMTEuNjRjLS41Ny0xLjQ2LTEuMTUtMy4yNy0xLjc1LTUuNC0uMzggMS42My0uOTIgMy40NC0xLjYyIDUuNGwtNC40MiAxMS42NnptLTQ1LjgyLjI3djE1LjYzaC00LjM3di0zNy42aDEwLjNjNC42MiAwIDguMDMuOSAxMC4yMyAyLjY2IDIuMiAxLjc3IDMuMyA0LjQzIDMuMyA3Ljk4IDAgNC45Ny0yLjUyIDguMzMtNy41NiAxMC4wOGwxMC4yIDE2LjloLTUuMTZsLTkuMS0xNS42NHptMC0zLjc2aDZjMy4wOCAwIDUuMzQtLjYgNi43OC0xLjgzIDEuNDQtMS4yMyAyLjE2LTMuMDcgMi4xNi01LjUyIDAtMi40Ny0uNzMtNC4yNy0yLjItNS4zNi0xLjQ3LTEuMS0zLjgyLTEuNjUtNy4wNi0xLjY1aC01LjY4em0tMjcuMTUgMTkuNEgwdi0zNy42aDIwLjk1djMuODhINC4zN1YzMzhoMTUuNTh2My44OEg0LjM3em0yNTUuNTQtOTkuNHY0My45NWgtNy4wM1YyMDEuNjRoMjQuMDJjMTIuNSAwIDIxLjc0IDIuMyAyNy43MyA2Ljk0IDUuOTggNC42MiA4Ljk3IDExLjU4IDguOTcgMjAuODcgMCA2Ljc2LTEuOCAxMi40Ny01LjM1IDE3LjEtMy41NyA0LjY2LTguOTggOC0xNi4yNSAxMC4wMmwyNy40IDQ1Ljk1aC04LjQzbC0yNi00My45NHptMC02LjA3aDE5LjI2YzguNSAwIDE1LjEtMS45IDE5LjgtNS43IDQuNy0zLjggNy4wNS05LjQgNy4wNS0xNi44IDAtNy43LTIuMy0xMy4yOC02LjktMTYuNzgtNC42LTMuNS0xMi4xLTUuMjQtMjIuNS01LjI0aC0xNi43em0tNDMuMTggMTQuNGgtNDFsLTE0LjA3IDM1LjZoLTcuOGw0MC41OC0xMDEuMjhoNC40OGwzOS43NiAxMDEuM2gtNy45NHptLTM4LjQ0LTYuMzRoMzYuMWwtMTMuNzQtMzYuMzZjLTEuMTUtMi44Ni0yLjUzLTYuOC00LjE0LTExLjg3LTEuMjQgNC40LTIuNiA4LjQtNC4wNyAxMnptLTMzLjEyIDQxLjk1SDkwLjAzVjIwMS42NGg1NS4xM3Y2LjVoLTQ4LjF2MzguMTVoNDUuNHY2LjQ4aC00NS40djQzLjI3aDQ4LjF6TTEuNDMgMjAxLjY0SDI5LjFjMTIuNDYgMCAyMS42MiAyLjEyIDI3LjQ2IDYuMzUgNS44NCA0LjIzIDguNzYgMTAuNjMgOC43NiAxOS4xOCAwIDUuODQtMS43OCAxMC43LTUuMzQgMTQuNi0zLjU3IDMuODgtOC43OCA2LjM4LTE1LjYzIDcuNDh2LjQyYzguMDUgMS4yIDEzLjk3IDMuNzMgMTcuNzYgNy42MiAzLjggMy45IDUuNyA5LjMgNS43IDE2LjI1IDAgOS4zLTMuMDcgMTYuNDUtOS4yNCAyMS40Ni02LjE2IDUtMTQuOSA3LjUtMjYuMjIgNy41SDEuNDR6bTcuMDMgNDQuOTJoMjIuMjJjOS40OCAwIDE2LjM3LTEuNTcgMjAuNjctNC43MiA0LjMtMy4xNiA2LjQ1LTguMSA2LjQ1LTE0LjggMC02LjcyLTIuNDItMTEuNi03LjI4LTE0LjYzLTQuODUtMy4wNC0xMi4xLTQuNTYtMjEuNy00LjU2SDguNDZ6bTAgNi4ydjQzLjU1SDMyLjJjMTguNjggMCAyOC4wMi03LjYgMjguMDItMjIuNzcgMC0xMy44NC05Ljg1LTIwLjc3LTI5LjU0LTIwLjc3ek0yNTcuNjQgMGMtMi41LjA3LTQuOTMgMS4zNi02LjYzIDQuMS00LjIgNi43NiA5LjM3IDkuNjUtMTUuMTYgNi4zLTQzLjQtNS45OC04Ny40Ni00LjE3LTEzMS4yNC01LjI1QzU0LjE3IDMuOSAyMC4xNiAzOC41MyAyNC4xMyA4OC41YzEuODYgMjMuMjIuMiA0NC4zNi0xMC44NiA2NS4xNEM0IDE3My44NiA4LjIgMTc5LjkgMTguNTQgMTgxLjI2YzEyLjI4IDEuNiA0Mi43MyA1Ljk3IDM5LjY3LTYuNzgtMS40LTUuOC0xNS43My0uOTctMTcuMS04LjE0LTIuMTMtMTEuMjggMTYuMDMtMTUuNjIgMjIuMTMtMjQuMyAzLjYtNS4xNyAyNS45MiAxNS4wMiAyNS44IDI2LjUyIDAgMy41NSAzLjc1IDkuOSA2LjM4IDEwLjIzIDkuODYgMS4yMyAyMC4wMy44NiAzMCAuMjQgMS44Ni0uMSA0LjkzLTMuNzIgNC44My02LjE3LS4xLTMuMTYtMy45Mi01LjMyLTUuOTgtNi40LTMuNzctMS45NS00LjE4LTI1LjYgMy4wMi0zMy4yIDUuMjItNS41IDE3LjczLTEwLjc2IDI5LjM1LTcuODIgMTEuNTUgMi45IDIxLjQ2IDcuMSAyMC4yIDE4LjUyLS42NyA1Ljg2LTE3LjM0IDIwLjI4LTE2LjM0IDI2LjEuNTMgMy4xIDE0LjQ2LS40IDE3LjI3LTEuMjggNC44LTEuNTcgOC40OC01LjAyIDEzLjcyLTExLjggOS4xOCAyMi44OCAyNC4wMyAyNy4wMyAzNS4yIDI1Ljc3LjM4LS4wMyAxNC40IDAgMTcuNjItNC4wMiAyLjU3LTMuMi4zNS02Ljc3LTMuNC03LjY1LTExLjc2LTIuNzQtMTcuMDctOS40LTE2Ljc2LTIxLjUuNC0xNS40LS4wOC0zMC43Ni4xMy00Ni4xNC4yMy0xOC45IDExLjM3LTMwLjA4IDMwLjEyLTMwLjI1IDE0LjYtLjE0IDI5LjI3LS4yIDQzLjkuMDcgOS45OC4yIDEyLjY1LTcuODMgMTQuNjMtMTQuNDd2LS4wM2MuOS0yLjkzLTMuODYtOC40LTcuMi0xMS41LTMuNzctMy41NS0xMS4yLTkuODUtMTEuODMtMTIuNy0yLjgtMTMuMjQtMTYuMTQtMTIuMjgtMjQuMjctMTkuNjgtMS4zNS0xLjI1LTEuMS00LjIzLTEuNzQtNi4zLTEuNjYtNS40NS02LjA2LTguNy0xMC4yMy04LjZoLS4wM3oiLz48L3N2Zz4=');
            }
            nav{
                padding: 1rem 0;
            }
            nav a{
                font-family: 'Open Sans', sans-serif;
                font-size: 1.1rem;
                text-decoration: none;
                display: inline-block;
                padding:0.7rem 1rem;
                border-radius: 2px;
            }
            nav a:hover{
                background-color: #26ade4;
                color: #fff;
            }
            nav a:active{
                background-color: #1790C2;
                color: #fff;
            }
            footer{
                text-align: center;
                padding: 2.3rem 1.5rem 2.3rem 1.5rem;
                margin-top: 1.8rem;
                border-top: 1px solid #eee;
                max-width: calc(800px - 3rem);
                width: calc(100% - 3rem);
            }
            h1, h2{
                font-family: 'Open Sans', sans-serif;
                font-size:2.5rem;
                font-weight:normal;
                color: #26ade4;
                text-align:center;
            }
            h2{
                font-size:1.7rem;
            }
            p{
                margin: 1.5rem 0;
                padding: 0 1.5rem;
            }
            a{
                color: #000;
            }
            a:hover{
                color: #26ade4;
            }
            a:active{
                color: #1790C2;
            }
            .socialButtons{
                text-align: center;
                padding-bottom: 1.2rem;
            }
            .socialButtons a{
                background-color: #555;
                text-decoration: none;
                width: 3rem;
                height: 3rem;
                display: inline-block;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: 100% 100%;
                border-radius: 2px;
                margin-right: 1rem;
            }
            .socialButtons a:hover{
                background-color: #26ade4;
            }
            .socialButtons a:active{
                background-color: #1790C2;
            }
            .socialButtonFB{
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzI4LjEzIDkzLjc1Yy00My4xMyAwLTc4LjEzIDM1LTc4LjEzIDc4LjEzdjQ2Ljg3aC02Mi41djYyLjVIMjUwVjUwMGg2Mi41VjI4MS4yNWg3MC4zbDE1LjY0LTYyLjVIMzEyLjV2LTQ2Ljg4YzAtOC42IDcuMDMtMTUuNjIgMTUuNjMtMTUuNjJoNzguMTJ2LTYyLjVoLTc4LjEzeiIvPjwvc3ZnPg==')
            }
            .socialButtonTW{
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzMxLjAzIDEwNi43NWMtNDEgLjA2LTc0LjI4IDMzLjMzLTc0LjI4IDc0LjQ0IDAgNS44My42NiAxMS41MyAxLjkgMTctNjEuODgtMy4xNS0xMTYuOTQtMzIuOC0xNTMuNjItNzcuOS02LjQgMTEuMDItMTAuMSAyMy44NS0xMC4xIDM3LjQ3IDAgMjUuODMgMTMuMTUgNDguNjMgMzMuMTMgNjIuMDMtMTIuMi0uMzgtMjMuNy0zLjctMzMuNzUtOS4yN3YuODRjMCAzNi4xIDI1Ljc0IDY2LjI2IDU5LjggNzMuMTMtNi4yNCAxLjctMTIuODQgMi42My0xOS42NSAyLjYzLTQuNzcgMC05LjQ0LS42LTE0LjAzLTEuNDQgOS41NCAyOS42IDM3LjAyIDUxLjEgNjkuNjYgNTEuNzYtMjUuNTUgMTkuOTgtNTcuNiAzMS45LTkyLjUzIDMxLjktNi4wNyAwLTExLjktLjM4LTE3LjgtMS4xMkMxMTIuNTUgMzg5Ljc2IDE1MS43IDQwMiAxOTMuOSA0MDJjMTM3LjEgMCAyMTIuMTMtMTEzLjUyIDIxMi4xMy0yMTEuOTcgMC0zLjIzLS4xNy02LjQ4LS4yOC05LjY2IDE0LjYtMTAuNSAyNy4yOC0yMy43IDM3LjIyLTM4LjYydi0uMDZjLTEzLjM0IDUuOS0yNy43NCA5Ljk0LTQyLjg1IDExLjc2IDE1LjMzLTkuMjYgMjcuMjgtMjMuODUgMzIuOC00MS4yOC0xNC4zOCA4LjUtMzAuMzYgMTQuNzQtNDcuNCAxOC4xNC0xMy42LTE0LjUzLTMyLjktMjMuNi01NC41LTIzLjZ6Ii8+PC9zdmc+')
            }
            .socialButtonGH{
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTI0Ljg4IDExNS4zNGMtNC4zLS4wOC02LjM4LjYtNi4zOC42LTEzLjUyIDM0LjQ1LTQuOTIgNTkuOS0yLjM0IDY2LjE1LTE2LjAyIDE3LjUtMjUuNzUgMzkuODMtMjUuNzUgNjcuMTcgMCA5NS43IDU4LjQgMTE3LjIgMTEzLjkgMTIzLjQ0LTcuMSA2LjI2LTEzLjYgMTcuMzctMTUuOTUgMzMuMzgtMTQuMjIgNi40LTUwLjQgMTcuNS03Mi42NS0yMC44IDAgMC0xMy4xOC0yMy45Ny0zOC40Mi0yNS43NyAwIDAtMjQuMjItLjQtMS41NiAxNS4yMyAwIDAgMTYuMzcgNy42NiAyNy43OCAzNi41NiAwIDAgMTQuNyA0NC42IDg0LjIyIDI5LjUzLjA4IDIwLjc4LjQgNDAuNTUuNCA0Ni41NyAwIDYuNTctNC42OCAxNC4zOC0xNy4xOCAxMi4wNEM5MC4yIDQ5OS40NCAwIDUwMCAwIDUwMGgzMjQuNzVjLTkuMzguMS0xMi44LTYuNi0xMi44LTEyLjM0IDAtOC4zNi4yNC0zNS4xNi4yNC02OC43NSAwLTIzLjI2LTgtMzguNS0xNy00Ni4zMyA1NS42My02LjEgMTE0LjIzLTI3LjM0IDExNC4yMy0xMjMuMjggMC0yNy4zNS05Ljc3LTQ5LjctMjUuNzgtNjcuMiAyLjU3LTYuMyAxMS4xNy0zMS43OC0yLjM1LTY2LjE1IDAgMC0yMS4wOC02LjcyLTY4Ljc0IDI1LjYyLTIwLTUuNTQtNDEuNC04LjM3LTYyLjY1LTguMzctMjEuMjMuMDctNDIuNjQgMi45LTYyLjY0IDguMzYtMzIuNzYtMjIuMjMtNTIuOTQtMjYuMDMtNjIuMzgtMjYuMjJ6TTMyNC43NSA1MDBINTAwcy05MC4yLS40Ny0xNzAuODgtLjQ3Yy0xLjYuMy0zLjAzLjQ2LTQuMzcuNDd6Ii8+PC9zdmc+')
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <a href="<?= $app->getUrl('/') ?>">Home</a>
                <a href="<?= $app->getUrl('/documentation/') ?>">Documentation</a>
                <a href="<?= $app->getUrl('/documentation/download/') ?>">Download</a>
                <a href="https://github.com/bearframework/bearframework">GitHub</a>
            </nav>
            <span class="header-logo"></span>
        </header>
        <div>{pageContent}</div>
        <footer>
            <div class="socialButtons">
                <a class="socialButtonFB" href="https://www.facebook.com/bearframework/"></a>
                <a class="socialButtonTW" href="https://twitter.com/bearframework"></a>
                <a class="socialButtonGH" href="https://github.com/bearframework/bearframework"></a>
            </div>
            Available under the <a href="http://opensource.org/licenses/MIT">MIT license</a><br/>
            Created and maintained by <a href="http://ivopetkov.com">Ivo Petkov</a><br/>
            This website is <a href="http://github/">built with Bear Framework</a>
        </footer>
    </body>
</html>