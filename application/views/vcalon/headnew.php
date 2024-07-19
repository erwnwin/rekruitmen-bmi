<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="icon">
    <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="apple-touch-icon">

    <link href="<?= base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/jquery.dataTables.css">

    <style>
        body {
            background: #d7d7d7;
            /* opacity: 50%; */
        }
    </style>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        :root {
            --input-border: #8b8a8b;
            --input-focus-h: 245;
            --input-focus-s: 100%;
            --input-focus-l: 42%;
        }

        .input {
            font-size: 16px;
            font-size: Max(16px, 1em);
            font-family: sans-serif;
            padding: 0.25em 0.5em;
            background-color: #fff;
            border: 2px solid var(--input-border);
            border-radius: 4px;
            transition: 180ms box-shadow ease-in-out;
        }

        .input:focus {
            border-color: hsl(var(--input-focus-h),
                    var(--input-focus-s),
                    var(--input-focus-l));
            box-shadow: 0 0 0 2px hsla(var(--input-focus-h),
                    var(--input-focus-s),
                    calc(var(--input-focus-l) + 40%),
                    0.8);
            outline: 3px solid transparent;
        }

        .input:not(textarea) {
            line-height: 1;
            height: 2.25rem;
        }

        input[type="file"] {
            font-size: 0.9em;
            padding-top: 0.35rem;
        }

        textarea.input {
            resize: vertical;
        }

        .input[readonly] {
            border-style: dotted;
            cursor: not-allowed;
            color: #777;
        }

        .input[disabled] {
            --input-border: #ccc;
            background-color: #eee;
            cursor: not-allowed;
        }

        label {
            font-size: 16px;
            font-weight: bolder;
            line-height: 1;
            font-family: Tahoma, sans-serif;
            /* font-family: 'Poppins', sans-serif; */
        }

        .input+label {
            margin-top: 2rem;
        }
    </style>
    <style type="text/css">
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("<?= base_url() ?>assets/loading2.gif") 50% 50% no-repeat rgb(255, 255, 255);
            opacity: 0.9;
            transition: opacity 0.80s, visibility 0.80s;
        }

        .loader--hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader::after {
            content: "";
            width: 100%;
            height: 100%;
            animation: loading 5.00s ease infinite;
        }
    </style>
</head>

<div class="loader">
</div>

<body>