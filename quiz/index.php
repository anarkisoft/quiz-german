<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mi sitio HTML5</title>
        <link rel="stylesheet" type="text/css" href="controller/framework/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="controller/framework/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="controller/css/styles.css">
    </head>
    <body>
        <header id="headerTop">
            <h1>Hi, Header</h1>
            <nav>
                <ul>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                    <li><a href="#">Item 5</a></li>
                </ul>
            </nav>
        </header>
        <section id="sectionCont">
            <article class="articleCont">
                <div id="textContentDiv"><h1>Hola mundo!</h1></div>
                <input type="button" value="OK" onclick="imprimir();" />
                    <!-- <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                    </p>
                    <p>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p> -->
            </article>
        </section>
        <section id="sideBarCont">
            <nav>
                <h3>Title SideBar</h3>
                <ul>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                    <li><a href="#">Item 5</a></li>
                </ul>
            </nav>
        </section>
        <footer id="footerCont">
            <p>Footer Text Content</p>
        </footer>
    </body>
    <script type="text/javascript" src="controller/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="controller/framework/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="controller/js/functions.js"></script>
</html>