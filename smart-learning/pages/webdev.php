<?php
    session_start();
?>

<html lang="en">

<head>
    <link rel="stylesheet" href="../styles/webdev-style.css">
    <title>Web Development</title>
</head>

<body>
    <iframe src="../sl/navbar.php" frameborder="0" width="100%"></iframe>
    <img src="../pics/webdev4.png" height="120px" width="250px" class="center" />
    <h1>Web Development</h1>
    <div class=webdev-info>
        <p>Nëse po mësoni për zhvillimin e uebit, do të hasni terma si <b>HTML, CSS dhe JavaScript</b>. Këto shpesh
            quhen
            blloqet
            ndërtuese të Uebit.
            Këto tre mjete dominojnë zhvillimin e uebit. Çdo bibliotekë ose mjet duket se është i përqendruar rreth
            HTML,
            CSS dhe JS. Pra, nëse doni të bëheni një zhvillues ueb, duhet t'i mësoni mirë ato.
            Do të zbuloni gjithashtu se faqet e internetit janë ndërtuar kryesisht nga këto tre gjuhë.
            Por me siguri po pyesni se çfarë është secila dhe për çfarë përdoret në të vërtetë. Çfarë i bën këto gjuhë
            kaq
            të veçanta dhe të rëndësishme? Dhe çfarë i bën ata kaq të kudondodhur sa nuk mund të mos i shihni në çdo
            tutorial dhe temë të bazuar në zhvillimin e uebit?</p>
        <h3>Çfarë është HTML?</h3>
        <h4>HTML qëndron për Hyper Text Markup Language.</h4>
        <p>Kështu që ju mund të mendoni për HTML si gjuhën e përdorur për krijimin e udhëzimeve të detajuara në lidhje
            me stilin, llojin, formatin, strukturën dhe përbërjen e një faqe në internet përpara se ajo të printohet.
            Por në kontekstin e zhvillimit të uebit, ne mund të zëvendësojmë termin 'printuar' me 'rendered' si një term
            më i saktë.
            HTML ju ndihmon të strukturoni faqen tuaj në elementë të tillë si paragrafë, seksione, tituj, shirita
            navigimi etj.
            Për të ilustruar se si duket një faqe, le të krijojmë një dokument HTML:
        </p>
        <pre>
1. &lt;html lang="en"&gt;
2. &lt;head&gt;
3.   &lt;link rel="stylesheet" href="./styles.css"&gt;
4.   &lt;title&gt;Document&lt;/title&gt;
5. &lt;/head&gt;
6. &lt;body&gt;
7.   &lt;h1&gt;This is a first level heading in HTML. With CSS, I will turn this into red color&lt;/h1&gt;
8.   &lt;h2&gt;This is a second level heading in HTML. With CSS, I will turn this into blue color&lt;/h2&gt;
9.   &lt;h3&gt;This is a third level heading in HTML. With CSS, I will turn this into green color&lt;/h3&gt;
10.  &lt;p&gt;This is a &lt;em&gt;paragragh&lt;/em&gt; As you can see, I placed an empahisis on the word "paragraph". Now, I will change also
11.     the background color of the word "paragraph" to black, and its text color  to green, all with just CSS.&lt;/p&gt;
12.  &lt;p&gt;The main essence of this tutorial is to:&lt;/p&gt;
13.     &lt;ul&gt;
14.        &lt;li&gt;Show you how to format a web document with HTML&lt;/li&gt;
15.        &lt;li&gt;Show you how to design a web page with CSS&lt;/li&gt;
16.        &lt;li&gt;Show you how to program a web document with JavaScript&lt;/li&gt;
17.     &lt;/ul&gt;
18.
19.  &lt;p&gt;Next, I am going to add the following two numbers and display the result, all with JavaScript&lt;/p&gt;
20.     &lt;p&gt;First number:&lt;span id= "firstNum"&gt;2&lt;/span&gt; &lt;br&gt;&lt;/p&gt;
21.     &lt;p&gt;Second number: &lt;span id= "secondNum"&gt;7&lt;/span&gt; &lt;/p&gt;
22.     &lt;p&gt;Therefore, the sum of the two of those numbers is: &lt;span id= "answer"&gt;(placeholder for the answer)&lt;/span&gt;&lt;/p&gt;
23.     &lt;input type="button" id="sumButton" value="Click to add!"&gt;
24. &lt;/body&gt;
25. &lt;/html&gt;</pre>

        <h3>Çfarë është CSS?</h3>
        <p>Ndërsa HTML është një gjuhë shënjimi e përdorur për të formatuar/strukturuar një faqe në internet, CSS është
            një gjuhë projektimi që përdorni për ta bërë faqen tuaj të internetit të duket bukur dhe e paraqitshme.
            CSS qëndron për Cascading Style Sheets, dhe ju e përdorni atë për të përmirësuar pamjen e një faqe në
            internet. Duke shtuar stile të menduara CSS, ju e bëni faqen tuaj më tërheqëse dhe të këndshme për t'u parë
            dhe përdorur nga përdoruesi përfundimtar.
            Imagjinoni sikur qeniet njerëzore të bëheshin thjesht të kishin skelete dhe kocka të zhveshura – si do të
            dukej kjo? Nuk është mirë nëse më pyet mua. Pra, CSS është si lëkura, flokët dhe pamja e përgjithshme
            fizike.
            Ju gjithashtu mund të përdorni CSS për të vendosur elementë duke i pozicionuar ato në zona të caktuara të
            faqes tuaj.
            Për të hyrë në këto elemente, duhet t'i "zgjidhni" ato. Ju mund të zgjidhni një ose disa elementë ueb dhe të
            specifikoni se si dëshironi të duken ose të pozicionohen.</p>

        <p>
            Me CSS mund të vendosni ngjyrën dhe sfondin e elementeve tuaja, si dhe llojin e shkrimit, margjinat,
            ndarjen, mbushjen dhe shumë më tepër.
            Nëse e mbani mend faqen tonë të shembullit HTML, ne kishim elementë që ishin mjaft të vetë-shpjegueshëm. Për
            shembull, unë deklarova se do të ndryshoja ngjyrën e nivelit të parë të titullit h1 në të kuqe.
            Për të ilustruar se si funksionon CSS, unë do të ndaj kodin që vendos ngjyrën e sfondit të tre niveleve të
            titujve në përkatësisht të kuqe, blu dhe jeshile:
        </p>
        <pre>
1.  h1 {
2.      background-color: #ff0000;
3.  }
4.              
5.  h2 {
6.      background-color: #0000FF;
7.  }
8.              
9.  h3 {
10.     background-color: #00FF00;
11. }
12.              
13. em {
14.    background-color: #000000;
15.    color: #ffffff;
16. }</pre>

        <h3>Çfarë është JavaScript?</h3>
        <p>Tani, nëse HTML është markup language dhe CSS është gjuha e projektimit, atëherë JavaScript është gjuha e
            programimit.

            Nëse nuk e dini se çfarë është programimi, mendoni për disa veprime që ndërmerrni në jetën tuaj të
            përditshme:

            Kur ndjen rrezik, vrapon. Kur jeni të uritur, hani. Kur je i lodhur, fle. Kur jeni të ftohtë, kërkoni
            ngrohtësi. Kur kaloni një rrugë të ngarkuar, ju llogaritni distancën e automjeteve larg jush.

            Truri juaj është programuar të reagojë në një mënyrë të caktuar ose të bëjë gjëra të caktuara sa herë që
            ndodh diçka. Në të njëjtën mënyrë, ju mund të programoni faqen tuaj të internetit ose elementë individualë
            që të reagojnë në një mënyrë të caktuar dhe të bëjnë diçka kur ndodh diçka tjetër (një ngjarje).

            Ju mund të programoni veprime, kushte, llogaritje, kërkesa rrjeti, detyra të njëkohshme dhe shumë lloje të
            tjera udhëzimesh.

            Ju mund të përdorni çdo element përmes API-së së Modelit të Objektit të Dokumentit (DOM) dhe t'i bëni ato të
            ndryshojnë sipas dëshirës tuaj.</p>
        <h4>Ky kod ilustron se si mund të bëni llogaritjet me JavaScript:</h4>
        <pre>
1. function displaySum() {
2.     let firstNum = Number(document.getElementById('firstNum').innerHTML)
3.     let secondNum = Number(document.getElementById('secondNum').innerHTML)
4.         
5.     let total = firstNum + secondNum;
6.        document.getElementById("answer").innerHTML = ` ${firstNum} + ${secondNum}, equals to ${total}` ;
7. }
8.          
9. document.getElementById('sumButton').addEventListener("click", displaySum);</pre>
        <h2 style="text-align: center; margin-top: 50px; margin-bottom: -20px; color: rgb(52,144,145);">
            Explaining HTML & CSS with videos:
        </h2>
        <div class="row-cards">
            <div class="cards">
                <video controls style="width:100%;height: 15vw">
                    <source src="../vids-audio/HTML.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
                <div style="padding: 2px 16px;">
                    <h3 style="color: black; "><b>HTML</b></h3>
                    <a href="https://youtu.be/ok-plXXHlWw">
                        <p style="text-align: center;">Watch it in YouTube ></p>
                    </a>
                </div>
            </div>
            <div class="cards">
                <video controls style="width:100%;height: 15vw">
                    <source src="../vids-audio/CSS.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
                <div style="padding: 2px 16px;">
                    <h3 style="color: black; "><b>CSS</b></h3>
                    <a href="https://youtu.be/OEV8gMkCHXQ">
                        <p style="text-align: center;">Watch it in YouTube ></p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "users");

        // Check if user is logged in as admin
        $is_admin = false;
        if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin1') {
            $is_admin = true;
        }

        // Check if delete button was clicked and delete content if it was
        if ($is_admin && isset($_POST['delete_Id'])) {
            $Id = $_POST['delete_Id'];
            $query = "DELETE FROM content WHERE Id = $Id";
            mysqli_query($conn, $query);
        }

        // Retrieve all content for Python page
        $query = "SELECT * FROM content WHERE page = 'web_dev' ORDER BY Id DESC";
        $result = mysqli_query($conn, $query);

        // Display all content on page
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h2 style='color: rgb(229,34,61);
            font-style: italic; margin-left:70px;'>" . $row['title'];
            if ($is_admin) {
                echo " <form method='POST' style='display:inline-block;'><input type='hidden' name='delete_Id' value='" . $row['Id'] . "'><button type='submit'>Delete</button></form>";
            }
            echo "</h2>";
            echo "<p style='margin-left:70px;'>" . $row['paragraph'] . "</p>";
        }
    ?>

    <div class="footer">
        <p>SMART LEARNING - Copy Right © | Contact: info@smartlearning.com | SL✓</p>
    </div>

</body>

</html>