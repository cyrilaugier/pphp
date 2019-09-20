<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <title>new.php</title>
    </head>
    <body>
        <div class="container" />
            <form id="form" action="create.php" method="post" />
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" value="" />
                <label for="body">Corps de l'article</label>
                <textarea name="body" id="body"></textarea>
                <input type="submit" name="submit" id="submit" value="Publier l'article" />
            </form>
        </div>
    </body>
</html>
