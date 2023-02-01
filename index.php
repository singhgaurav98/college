

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title> College management System </title>
<style>
 
    body{
			margin:0;
			padding:0;
			font-family:montserrat;
			background:skyblue;
		}
     .header{
        text-align: center;
        font-size: 90px;
        background-color: black;
        color: white;
        padding: 10px;
        position: fixed;
        top: 0px;
        width: 100%;
        height: 15%;
    }
    .navbar {
            display: grid;
  grid-template-columns:auto auto auto ;
  background-color:skyblue;
  margin :0px;
  padding:0px;  
  position:fixed;
  top: 17.5%;
  text-align: center;
  width: 100%;
 }
  .button{
    text-align: center;
    font-size: 30px;
  background-color:green;
  margin :20px;
  padding:10px;
  border-radius: 30px;
     }

.center{
    text-align: center; 
    font-size:40px;
    border-radius: 50px;
    background-color: black;
    color: white;
    width: 50%;
    margin: 25px;
}
    
</Style>                         
</head>

 <body>
     <diV>   
                 <div class= "header"> College Management System  </div>
               <div class = "navbar"> 
                   <div>
                        <h1 class= "center"> Student</h1>
                             <div>   <img src="img/student.jpeg" alt="" width="510px" height= "400px"> </div>
                              <div>  <a href="cms/student/Login.php" "> <button class ="button"> Click here</button></a> </div>
                  </div>
                  <div>
                       <h1 class="center" >Teacher</h1>
                       <div>     <img src="img/Teacher.jpeg" alt=""  width="510px" height= "400px"> </div>
                        <div> <a  href="cms/Teacher/Login.php"> <button class= "button" >Click here</button>  </a> </div>  
                   </div>
                   <div> 
                      <h1 class="center" >Admin </h1>
                             <div>   <img src="img/Admin.jpeg" alt=""  width="510px" height= "400px"></div>
                              <div >  <a href="cms/Admin/login.php" > <button class =  "button" >Click here </button> </a></div>

                       
                   </div>
               </div>  
    </div>
</body>
</html>