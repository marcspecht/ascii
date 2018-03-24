<!DOCTYPE html>
<html>
<head>
    <title>
        <?php $t['Ascii-codes']; ?>
    </title>
    <link rel="stylesheet" href="app/dist/styles/style.min.css">
</head>
<body>

<!--- search -->
<div class="container header">
    <div class="row">
        <div class="s-12 m-12 l-12 pg-b pg-t pg-l-r">

            <h1 class="logo">ASCII<span>found easy</span></h1>
            <p class="heading-subtext">Easily find your ASCII code by using our search<br>function or selecting it in the list</p>

            <form class="example search-box" action="/action_page.php">
                <input type="text" placeholder="I bet you we can find what you&rsquo;re looking for...." name="search2">
            </form>
        </div>
    </div>
</div>

<!--- Top 20 -->
<div class="container">
    <div class="row">
        <div class="s-12 m-12 l-3 pg-b pg-t pg-l-r bg-dark">
            <h1>Top 20</h1>
            <table>
                <tr class="table-header">
                    <th>character</th>
                    <th>html-code</th>
                    <th class="l-hidden">char-code</th>
                    <th class="l-hidden">name</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM ascii_codes ORDER BY clicks DESC limit 20";
                    $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            echo    "<tr>" .
                                        "<td>" . "&" . $row["html_code"] . "</td>" .
                                        "<td>" . "&amp;" . $row["html_code"] . ";" . "</td>" .
                                        "<td class='l-hidden'>" . "&amp;" . $row["char_code"] . ";" . "</td>" .
                                        "<td class='l-hidden'>" . $row["description"] . "</td>" .
                                    "</tr>";
                        }
                ?>
            </table>
        </div>
        <div class="s-12 m-12 l-6 pg-b pg-t pg-l-r">
            <h1>All</h1>
            <table>
                <tr class="table-header">
                    <th>character</th>
                    <th>html-code</th>
                    <th>char-code</th>
                    <th>name</th>
                </tr>
                <?php
                $sql = "SELECT * FROM ascii_codes";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo    "<tr>" .
                        "<td>" . "&" . $row["html_code"] . "</td>" .
                            "<td>" . "&amp;" . $row["html_code"] . ";" . "</td>" .
                            "<td>" . "&amp;" . $row["char_code"] . ";" . "</td>" .
                            "<td>" . $row["description"] . "</td>" .
                        "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="s-12 m-12 l-3 pg-b pg-t pg-l-r">
            <h1></h1>
            <img class="google_ads" src="app/dist/images/google_ads.png" alt="">
        </div>
    </div>
</div>

</body>
</html>