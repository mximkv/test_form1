
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minimal Form Interface</title>
    <meta name="description" content="Хули палиш мой сайтец, бог сайтостроительства" />
    <meta name="keywords" content="form, minimal, interface, single input, big form, responsive form, transition" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
</head>
<body>
<div class="container">
    <!-- Top Navigation -->

    <header class="codrops-header">
        <h1>КУ ДОРОУ СУП <span>Хули палиш мой сайтец, бог сайтостроительства</span></h1>
    </header>
    <section>
        <form id="theForm" class="simform" autocomplete="off" action="list.php" method="POST">
            <div class="simform-inner">
                <ol class="questions">
                    <li>
                        <span><label for="q1">Твое име?</label></span>
                        <input id="q1" name="name" type="text"/>
                    </li>

                </ol><!-- /questions -->
                <button class="submit" type="submit">Send answers</button>
                <div class="controls">
                    <button class="next"></button>
                    <div class="progress"></div>
                    <span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
                    <span class="error-message"></span>
                </div><!-- / controls -->
            </div><!-- /simform-inner -->
            <span class="final-message"></span>
        </form><!-- /simform -->
    </section>

</div><!-- /container -->
<script src="js/classie.js"></script>
<script src="js/stepsForm.js"></script>
<script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

            /*
            form.submit()
            or
            AJAX request (maybe show loading indicator while we don't have an answer..)
            */

            // let's just simulate something...
            var messageEl = theForm.querySelector( '.final-message' );
            messageEl.innerHTML = 'ПАСИБКИ';
            classie.addClass( messageEl, 'show' );
        }
    } );
</script>




</body>
</html>




