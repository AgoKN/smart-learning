<?php
session_start();
?>

<html>

<head>
    <title>Python</title>
    <link rel="stylesheet" href="../styles/python-style.css">
</head>

<body>
    <iframe src="../sl/navbar.php" frameborder="0" width="100%"></iframe>
    <h1><img src="../pics/python.png" height="60px" width="60px" /> Python</h1>
    <div class="python-info">
        <a href="#prg-py">
            <h3>Kliko ketu per te shkuar direkt te programet ne Python</h3>
        </a>
        <h3>Python është një gjuhë programimi për qëllime të përgjithshme.
            Përdoret kryesisht në zhvillimin e uebit dhe shkencën e të dhënave (data science).
            Python është gjuha e preferuar e programimit për fillestarët sepse ka një sintaksë të thjeshtë.</h3>
        <div class="video">
            <h3 style="color: rgb(229,34,61);">Explaining Python short:</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/x7X9w_GIm1s"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <h2>Variablat:</h2>
        <ul>
            <li>Variablat ne Python mund të fillojnë vetëm me shkronjë (A-Z/a-z) ose me një nënvizim (_).</li>
            <li>Python është i case-sensitive, kjo do te thote qe variabli "Emri" dhe variabli "emri" janë dy
                identifikues
                të ndryshëm.</li>
            <li>Fjalët e rezervuara (fjalë kyçe) nuk mund të përdoren si emra identifikues. Keto jane:</li>
            <table class="table">
                <tbody>
                    <tr>
                        <td>and</td>
                        <td>def</td>
                        <td>False</td>
                        <td>import</td>
                        <td>not</td>
                        <td>True</td>
                    </tr>
                    <tr>
                        <td>as</td>
                        <td>del</td>
                        <td>finally</td>
                        <td>in</td>
                        <td>or</td>
                        <td>try</td>
                    </tr>
                    <tr>
                        <td>assert</td>
                        <td>elif</td>
                        <td>for</td>
                        <td>is</td>
                        <td>pass</td>
                        <td>while</td>
                    </tr>
                    <tr>
                        <td>break</td>
                        <td>else</td>
                        <td>from</td>
                        <td>lambda</td>
                        <td>print</td>
                        <td>with</td>
                    </tr>
                    <tr>
                        <td>class</td>
                        <td>except</td>
                        <td>global</td>
                        <td>None</td>
                        <td>raise</td>
                        <td>yield</td>
                    </tr>
                    <tr>
                        <td>continue</td>
                        <td>exec</td>
                        <td>if</td>
                        <td>nonlocal</td>
                        <td>return</td>
                    </tr>
                </tbody>
            </table>
            <li>
                Për t'i caktuar një vlerë variablave ne Python, nuk keni nevojë të deklaroni llojin e saj.
            </li>
        </ul>
        <h2>OOP (Object Oriented Programming):</h2>
        <p>Programimi i orientuar nga objekti është një paradigmë programimi që ofron një mjet për strukturimin e
            programeve në mënyrë që vetitë dhe sjelljet të bashkohen në objekte individuale.

            Për shembull, një objekt mund të përfaqësojë një person me veti si emri, mosha dhe adresa dhe sjellje të
            tilla si ecja, të folurit, frymëmarrja dhe vrapimi. Ose mund të përfaqësojë një email me veçori si një listë
            marrësish, subjekt dhe trup dhe sjellje si shtimi i bashkëngjitjeve dhe dërgimi.

            E thënë ndryshe, programimi i orientuar nga objekti është një qasje për modelimin e gjërave konkrete, të
            botës reale, si makinat, si dhe marrëdhëniet midis gjërave, si kompanitë dhe punonjësit, studentët dhe
            mësuesit, etj. OOP modelon entitete të botës reale si objekte softuerike që kanë disa të dhëna të lidhura me
            to dhe mund të kryejnë funksione të caktuara.</p>
        <h2 id="prg-py">Programe te thjeshta ne Python:</h2>
        <h3>Program per gjetjen e shumes se elemente ne nje liste</h3>
        <pre>
        1.  #Python program to find sum of elements in list
        2.  total = 0
        3. 
        4.  #creating a list
        5.  list1 = [11, 5, 17, 18, 23]
        6. 
        7.  #Iterate each element in list
        8.  #and add them in variable total
        9.  for ele in range(0, len(list1)):
        10. total = total + list1[ele]

        11. #printing total value
        12. print("Sum of all elements in given list: ", total)
    </pre>
        <h3>Program per konvertimin e temperatures nga Celsius ne Fahrenheit</h3>
        <pre>
        1.   #Python code to convert Celsius scale
        2.   #to Fahrenheit scale
        3.   def Cel_To_Fah(n):
        4.
        5.   #Used the formula
        6.       return (n*1.8)+32
        7.
        8.   #Driver Code
        9.   n = 20
        10.  print(int(Cel_To_Fah(n)))
        11.
        12.  #This code is contributed by Chinmoy Lenka
    </pre>
        <h3>Program me objektet dhe klasat</h3>
        <pre>
        1.  class GeekforGeeks:
        2.  
        3.  # default constructor
        4.  def __init__(self):
        5.      self.geek = "GeekforGeeks"
        6.
        7.  # a method for printing data members
        8.  def print_Geek(self):
        9.      print(self.geek)
        10.  
        11.  
        12.  # creating object of the class
        13.  obj = GeekforGeeks()
        14.
        15.  # calling the instance method using the object obj
        16.  obj.print_Geek()
    </pre>

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
        $query = "SELECT * FROM content WHERE page = 'python' ORDER BY Id DESC";
        $result = mysqli_query($conn, $query);

        // Display all content on page
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h2>" . $row['title'];
            if ($is_admin) {
                echo " <form method='POST' style='display:inline-block;'><input type='hidden' name='delete_Id' value='" . $row['Id'] . "'><button type='submit'>Delete</button></form>";
            }
            echo "</h2>";
            echo "<p>" . $row['paragraph'] . "</p>";
        }
    ?>




    </div>
    <div class="footer">
        <p>SMART LEARNING - Copy Right © | Contact: info@smartlearning.com | SL✓</p>
    </div>
</body>

</html>