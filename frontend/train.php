<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWOTify Sentiment Analysis Trainer</title>
    <link rel="icon" href="assets/sentiment-analysis.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/versions/bulma-no-dark-mode.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.css" rel="stylesheet">


    <style>
        ul#console {
            list-style-type: none;
            font-family: 'Roboto Mono', monospace;
            font-size: 14px;
            line-height: 25px;
            padding-left: 5px;
        }

        ul#console li {
            border-bottom: solid 1px #80808038;
        }

        div.console {
            max-height: 50vh;
            overflow-y: auto;
            display: flex;
            flex-direction: column-reverse;
        }
    </style>
</head>

<body>
    <nav class="navbar is-link" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <img src="assets/sentiment-analysis.png" alt="Page logo">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="index.php" class="navbar-item">Home</a>
                <a href="dashboard.php" class="navbar-item">Analysis Dashboard</a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Model Validation</a>
                    <div class="navbar-dropdown">
                        <a href="form.php" class="navbar-item">Model Validation Form for CSG</a>
                        <a href="bitsform.php" class="navbar-item">Model Validation Form for BITS</a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <a href="train.php" class="navbar-item is-selected">Trainer</a>
                </div>
            </div>

    </nav>

    <section class="hero is-small is-primary">
        <div class="hero-body">
            <p class="subtitle has-text-weight-semibold">SWOTify SA Trainer</p>
            <p class="subtitle">Training Page</p>
        </div>
    </section>

    <section class="section p-2">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-3">
                    <div id="train-form" class="box m-1">
                        <div class="field">
                            <label class="label">CSV File Source URL</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" id="csv_url" placeholder="Public URL to the SWOTify CSV file ">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-link"></i>
                                </span>
                            </div>
                            <p class="help is-info">- Make sure that the CSV url is publicly available</p>
                            <p class="help is-info">- Leave blank if you want to train from the internal dataset (from the model validation values)</p>
                        </div>

                        <div class="field">
                            <p class="control">
                                <button id="sa_train" class="button is-primary is-fullwidth">
                                    Execute Training
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="console box m-1 is-fullheight">
                        <div>
                            <ul id='console'>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>
    <script src="train.js"></script>

</body>

</html>