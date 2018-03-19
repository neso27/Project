<?php
require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>
<?php
session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!=1){
	header("location: ../users/Home1.php");
}
?>

<!DOCTYPE html>

<html>

<head>

	<title> Home </title>
	<meta charset="UTF-8">
	<link href="style2.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wraper">

	<div id="header">
	
		<img src="../Velike slike/library.jpg" alt="Library"> </a>
		
		<a name="back to the top of the page"> </a>
	
	</div>

	<div id="nav">
	
		<ul>
			<li>  <a href="Home2.php"> &raquo; Home </a> </li>
			<li>  <a href="Library2.php"> &raquo; Library </a> </li>
			<li>  <a href="Contact2.php"> &raquo; Contact </a> </li>
			<li>  <a href="Logout2.php"> &raquo; Logout </a> </li>
		</ul>
	
	</div>
	
	<div id="main">
	
	<div id="admin">
	
		<p> <b> WELCOME ADMIN </b> </p>
	
	</div>
	
		<h1> History of BGB </h1> <br>
		
		<p> On January 11, 1931, Belgrade received a modern city library, a lifetime refreshment of the Municipal Library and Museum, a century after the first loan library of Belgrade Glagori Vozarović. </p> <br>

		<p> The City Court of the Municipality appoints Dr. Marija Ilic as a librarian, and she, according to the principles of the work of contemporary European and American libraries, arranges the book according to the decimal classification. The same year, the first public library in the Kingdom of Yugoslavia was opened. </p> <br>

        <p>
		<img src="../Velike slike/program.jpg" alt="Programi">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		
		<img src="../Velike slike/stari.jpg" alt="Stari" style="width: 180px; height: 253px;"> </p> <br>

		<p> After several seasons, in May 1935, the Municipal Library and Museum moved to the building in the Ljubinje 1 kneginje street, in today's Dragon Jovina Street. The German bombing on April 6, 1941, inflicts on the Library an invaluable cultural and material damage. From the inflammable bombs the roof and the last floor were burnt. However, the City Library of Belgrade does not interrupt work with readers. </p> <br>

		<p>
		<img src="../Velike slike/pre-rata.jpg" alt="Pre-rata"> </p> <br>

		<p> After the Second World War, regional and later municipal libraries are being established. Access to the new organization of work, special departments are formed, a professional center for libraries of the Belgrade region is established, with the aim of creating a unique network of popular libraries. According to the Law on libraries, since 1961, the City Library of Belgrade has been designated as a home library for the city  </p> <br>

		<p>
        <img src="../Velike slike/pre-rata-3.jpg" alt="Pre-rata"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<img src="../Velike slike/pre-rata-2.jpg" alt="Pre-rata"> </p> <br>
		
		<p> In the mid sixties, for the first time, procurement for the whole network was united, and every twentieth Belgrader is a member of the City Library. Existing rooms in Zmaj Jovina Street are already too crowded, and in the middle of the seventies the library receives a building at Knez Mihailova 56, a former hotel of the Serbian Crown. Works on the building of the building will last for a whole decade. </p> <br>

		<p>
		<img src="../Velike slike/posle-rata.jpg" alt="Posle-rata"> </p> <br>
		
		<p> In the meantime, free access to books in the General Lending Department is introduced. The following contemporary world experiences, and children's departments rearrange their funds, books are arranged according to the age of the child to whom they are intended. Beginning with the work on the bibliography of books on Belgrade. The City Library publishes a book of translations of foreign journals about Belgrade of the 19th century, and also of the Priestesses about Belgrade, a kind of short history of Belgrade in stories ... The number of literary programs and book exhibitions under the auspices of the Library is growing every year. </p> <br>

		<p>
		<img src="../Velike slike/stari-programi.jpg" alt="Stari-programi">
		<img src="../Velike slike/stari-programi2.jpg" alt="Stari-programi">
		<img src="../Velike slike/stari-programi3.jpg" alt="Stari-programi"> </p> <br>
		
		<p> Finally, in October 1986, the poet Desanka Maksimovic ceremoniously opens a new building of the Library of the City of Belgrade. In her Letter, she will say: If we had been searching for three centuries where we would put it, we would not find a better place for her: the poet Milan Rakic is looking at, not far from Kalemegdan, Branko Radicevic, Vojislav Ilic, Bora Stankovic, not to mention all of whose works will be built under the roof of this Library ... The City Library of Belgrade becomes the first public computerized loan library in the country. </p> <br>

		<p>
		<img src="../Velike slike/nova-zgrada.jpg" alt="Nova-zgrada"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<img src="../Velike slike/kompjuteri.jpg" alt="Kompjuteri"> </p> <br>
		
		<p> In the nineties of the 20th century, the number of subscribers and titles purchased dropped, but the number of books read remained the same.  </p> <br>

		
		<p> The City Library of Belgrade, together with the network of municipal libraries, has the most developed cultural and educational work in the Serbian librarianship. Systematic monitoring of the reading population of Belgrade has begun. Since 1991, the publication of the Belgrade Newspaper Newspaper has begun. Without the discontinuation of work with the audience in 1997, a revision of the General Fund began. In the Knez Mihailova street, the Internet Reading Room has begun. Electronic security of the fund in free access was built.  </p> <br>
		
		
		<p> On the occasion of the seventy years since the founding of the Belgrade City Library, on January 11, 2001, the Library Day was celebrated. On this occasion, a book of selected works by the first headmistress, Marija Ilic-Agapova, was published, and the award was presented to the best librarian of Belgrade, named after her name. Two years later, within the celebration of the Day of Belgrade, a renovated Department of Old and Rare Books and Books on Belgrade - Homeland Department was opened in Zmaj Jovina 1. In July of the same year, within the project Lepša Srbija / Beautiful Serbia, the first renovated facade was Knez Mihailova 56. In renovated rooms, the Department of periodicals continues its work, as well as many branches of municipal libraries. </p> <br>


		<p> For the first time, after several years, the standard of optimum book purchase for all funds has been reached. The results of multiannual projects, the second volume of the Bibliography of the Yugoslav and Foreign Books on Belgrade (2003), and the two-volume monograph of the Street and Square of Belgrade (2004/5) have been completed and published. Twenty-six valuable monographs have been published. </p> <br>

		
	</div>
	
	<div id="footer">
	
		<p> Library &copy </p>
		
		<a href="#back to the top of the page"> Back to the top of the page </a>
	
	</div>

	</div>

</body>

</html>