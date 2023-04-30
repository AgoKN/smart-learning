<?php
session_start();
?>

<html lang="en">

<head>
    <link rel="stylesheet" href="../styles/java-style.css">
    <title>Java</title>
</head>

<body>
    <iframe src="../sl/navbar.php" frameborder="0" width="100%"></iframe>
    <h1><img src="../pics/Java.jpg" height="80px" width="60px" /> Java</h1>
    <div class=java-info>
        <h2>Si të shkarkoni dhe instaloni Java JDK 8 në Windows 10 (64-bit)</h2>
        <p>Java Development Kit (JDK) ju lejon të kodoni dhe ekzekutoni programe Java. Është e mundur që të instaloni
            disa versione JDK në të njëjtin PC. Por rekomandohet të instaloni vetëm versionin më të fundit.
        </p>
        <p>Më poshtë janë hapat se si të instaloni Java në Windows 10 për JDK 8 shkarkim falas për 32 bit ose shkarkim
            JDK8
            për Windows 64 bit dhe instalim</p>
        <h3>Hapi 1) Klikoni kete <a href="https://www.oracle.com/java/technologies/downloads/">link</a>. Klikoni në
            JDK Download for Java.</h3>
        <img src="../pics/javapic/javapic1.png" />
        <h3> Hapi 2)</h3>
        <ol>
            <li>Accept License Agreement</li>
            <li>Shkarkoni Java 8 JDK për versionin tuaj 32 bit ose shkarko JDK 64 bit.</li>
        </ol>
        <img src="../pics/javapic/javapic2.png" />
        <h3>Hapi 3)</h3>
        <img src="../pics/javapic/javapic3.png" />
        <h3>Hapi 4) Pasi të përfundojë shkarkimi i Java JDK 8, ekzekutoni file-n exe për instalim JDK. Klikoni Next</h3>
        <img src="../pics/javapic/javapic4.png" />
        <h3>Hapi 5) Zgjidhni 'PATH'-in për të instaluar Java në Windows ose Mund ta lini atë të parazgjedhur. Kliko
            Next.
        </h3>
        <img src="../pics/javapic/javapic5.png" />
        <h3>Hapi 6) Pasi të keni instaluar Java në Windows, klikoni Close</h3>
        <img src="../pics/javapic/javapic6.png" />

        <?php 
            if(isset($_SESSION['username'])) {
                echo '</br></br></br>
                <h2 style="text-align:center; color:#349091;">JAVA - Premium Learning</h1>
                <h3 id="javapremium">Java OOP</h3>
                <p>Java - What is OOP?
                OOP stands for Object-Oriented Programming.
                
                Procedural programming is about writing procedures or methods that perform operations on the data, while object-oriented programming is about creating objects that contain both data and methods.
                
                Object-oriented programming has several advantages over procedural programming:
                
                OOP is faster and easier to execute
                OOP provides a clear structure for the programs
                OOP helps to keep the Java code DRY "Dont Repeat Yourself", and makes the code easier to maintain, modify and debug
                OOP makes it possible to create full reusable applications with less code and shorter development time</p>
                
                <h3>Java Inheritance</h3>
                <p>In Java, it is possible to inherit attributes and methods from one class to another. We group the "inheritance concept" into two categories:
                </br>
                subclass (child) - the class that inherits from another class</br>
                superclass (parent) - the class being inherited from</br>
                To inherit from a class, use the <i>extends</i> keyword </br></br>
                In the example below, the Car class (subclass) inherits the attributes and methods from the Vehicle class (superclass):
                </p>
                <pre>
                1. class Vehicle {
                2.    protected String brand = "Ford";        // Vehicle attribute
                3.     public void honk() {                    // Vehicle method
                4.       System.out.println("Tuut, tuut!");
                5.     }
                6.   }
                7.  
                8.  class Car extends Vehicle {
                9.     private String modelName = "Mustang";    // Car attribute
                10.      public static void main(String[] args) {
                11.  
                12.      // Create a myCar object
                13.      Car myCar = new Car();
                14.  
                15.      // Call the honk() method (from the Vehicle class) on the myCar object
                16.      myCar.honk();
                17.  
                18.      // Display the value of the brand attribute (from the Vehicle class) and the value of the modelName from the Car class
                19.      System.out.println(myCar.brand + " " + myCar.modelName);
                20.     }
                21.  }</pre>

                </br></br>
                <h3 style="text-align: center">All you need to know about Java:</h3>
                <video controls style="width:50%;height: 20vw; display:flex; align-items:center; margin: 0 auto;">
                <source src="../vids-audio/Java.mp4" type="video/mp4">
                Your browser does not support HTML video.
                </video>';
            } else {
            echo '<h2 style="margin-top: 50px; text-align: center;">Please <a href="../sl/login-singup.php">Log in</a> or <a
                    href="../sl/login-singup.php">Sign up</a> to learn more
                    about Java</h2>';
            }
        ?>

    </div>
    <div class="footer">
        <p>SMART LEARNING - Copy Right © | Contact: info@smartlearning.com | SL✓</p>
    </div>
</body>

</html>