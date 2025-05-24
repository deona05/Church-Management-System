<?php
// (A) START SESSION
session_start();
 
// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}
 
// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION["user"])) {
  header("Location:admin.php");
  exit();
}?>
<html>
    <head>
        <title>abt</title>
        <link rel="stylesheet"  href="stylesheet.css"> 
        </head>
    <body>
       
     
      
      
        <h1 align="center">ABOUT</h1>
       
            
        <img src="D:\church managment\church.jpeg" width="20%" height="40%" align="left" style="width: 300px; border: 2px solid #007bff; border-radius: 10px;">
        <p id="p1">Prior to 1931, Ammembal was a part of Mogarnad and Fajir parishes. A chapel was built there by Fr Francis S. D’Souza in between 1911 and 1923.
             Since 1919, a thatched house was used for the church services, and all the church services were conducted here. The church site was donated
              by Mr J.F. Rego whose bungalow attached to the Chelur property had served dual purposes – as a residence of the priest and as a temporary chapel. 
              Bishop Victor Fernandes by a decree which came into effect on January 1, 1932 erected the parish with Fr Gasper S. Lewis as the first parish priest,
               who constructed a presbytery. Fr Joseph D’Souza built the new church in 1946 and the new presbytery. Fr Placid Pereira built the new Altar, and 
               Fr E. Ligoury Pinto the church portico in 1963. Fr Joseph Machado constructed the new belfry. It was inaugurated on January 28, 2001.<br><br><br>
               Prior to the construction of the school building by Fr Lewis, the school activities were being held in the bungalow of Mr J.F. Rego. 
                St Thomas Higher Primary School at Chelur was started in 1919. The school attendance registers of that time are accessible, and 
                well maintained even today. Fr Mark Valder built the new school building, which was inaugurated on June 9, 1991.
                
                <p id="p2">Saint Thomas was born in Galilee Israel circa the 1st century. When he first heard of Jesus’ resurrection, he questioned it, earning him the 
                    nickname “Doubting Thomas.” As cited in John 20:28, he later proclaimed Jesus as “My Lord and my God” upon his resurrection. He spent the 
                    following years traveling and spreading the gospel.
                    <br><br><br>
                        Before 1931, Ammembal belonged to the Mogarnad and Fajir parishes. Between 1911 and 1923, a chapel was erected by Fr Francis S. D’Souza.
                         Starting in 1919, church services were held in a that ched hall. Mr. J. F. Rego generously donated the present church site, originally part
                          of his Chelur property, which included a residence for the priest and a makeshift chapel in his bungalow. On January 1, 1932, Bishop
                           Victor Fernandes established the parish, appointing Fr Gaspar S. Lewis as its inaugural priest, who built the presbytery. In 1946, 
                           Fr Joseph D’Souza constructed the new church and presbytery. Further additions were made by subsequent priests – Fr Placid Pereira added 
                           a new altar, and Fr E. Ligoury Pinto built the church portico in 1963. In 2006, on the church’s Platinum Jubilee, Fr Joseph Machado 
                           renovated the building and initiated a Health Fund for the parishioners’ welfare.
                           <br><br> Before the school building was constructed by Fr Lewis, educational activities were conducted in Mr J.F. Rego’s bungalow. 
                            St. Thomas Higher Primary School in Chelur commenced in 1919, maintaining meticulous attendance records from that time. 
                            The current school building was commissioned by Fr Mark Valder and inaugurated on June 9, 1991.</p>
                            <img src="D:\church managment\ch2.jpeg" width="90%" height="40%" align="right" style="width: 300px; border: 2px solid #007bff; border-radius: 10px;">
                </section>
                            <p><b>LOCATION</b></p>
                            <p>The Church is situated about 49 km from Mangalore</p>
                    <p><b>Parish Priests who have served the parish : </b></p>
                    <ul>
                        <li>Fr Gasper S. Lewis (1932 - first parish priest)</li>
                          <li> Fr Joseph D’Souza</li>
                            <li>Fr Placid Pereira</li>
                            <li>Fr E. Ligoury Pinto</li>
                            <li>Fr Mark Valder (1985 - 1992)</li>
                            <li>Fr Joseph Machado (1996 - 2003)</li>
                            <li>Fr Walter D'Souza (2003 - 2010)</li>
                            <li>Fr Valerian Frank (2010 - 2017)</li>
                            <li>Fr Lawrence Mascarenhas (2017 - 2020)</li>
                            <li>Fr Michael D'Silva (from 2020 onwards)</li>
                    </ul>
                    
                   <div class="father">
                    <h1 align="center">About Parish Priest</h1>
                    <img src="d:\church managment\fr.jpg" width="18%" height="35%" align="left">
                    <p style="font-size:x-large;"><b>Rev. Fr Michael D'Silva</p></b>
                    <p style="font-size:large;"><b>Personal details</p></b>
                        <p style="font-size: large;">Native:Paladka</p>
                        <p style="font-size: large;">Father:Maurice D’Silva</p>
                        <p style="font-size: large;">Mother:Theresa S’Silva</p>
                        <p style="font-size: large;">Date of Ordination: 26 April 1993</p>
                        <p style="font-size: large;">Email id:michaeldsilva2@gmail.com</p>
                        </div>
                        <h1 style="font-size: x-large;">Appointments And Designation</h1>
                    
                        <table border="2"  width="500" border="1" cellspacing="4" cellpadding="4">
                        <th bgcolor="pink">no</th> <th bgcolor="pink">year</th> <th bgcolor="pink">designation</th> <th bgcolor="pink">place</th>
                        <tr bgcolor="lightblue"><td>01</td><td>1993 – 1995</td><td> Assistant Parish Priest</td><td>  Bidar</td></tr>
                        <tr bgcolor="lightblue"><td>02</td><td> 1995 – 1996</td><td> Assistant Parish Priest</td><td>Angelore</td></tr>
                        <tr bgcolor="lightblue"><td>03</td><td> 1996 – 1997</td><td> Assistant Parish Priest</td><td>Kallianpur</td></tr>
                        <tr bgcolor="lightblue"><td>04</td><td> 1997 – 1998</td><td> Assistant Parish Priest</td><td>Urwa</td></tr>
                        <tr bgcolor="lightblue"><td>05</td><td> 1998 – 2005</td><td> Parish Priest</td><td>Borimar</td></tr>
                        <tr bgcolor="lightblue"><td>06</td><td> 2005– 2012</td><td> Parish Priest</td><td>Nakre</td></tr>
                        <tr bgcolor="lightblue"><td>07</td><td> 2012 – 2013</td><td> Parish Priest</td><td>Kollangana</td></tr>
                        <tr bgcolor="lightblue"><td>08</td><td> 2013 – 2020</td><td> Parish Priest</td><td>Bolukunje</td></tr>
                        <tr bgcolor="lightblue"><td>09</td><td> 2020 – </td><td>Parish Priest</td><td>Ammembal</td></tr>
                    </table>
                <form method="post">
                     <input type="submit" name="logout" value="logout">
                </form> 
    </body>
    </html>