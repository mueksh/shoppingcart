<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet"
          type="text/css"
          href="style.css" />
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
 
<body>
    
    <div id="content">
        <h1 class="text-center">Add new product...!</h1>
 
        <form method="POST"
              action="upload.php"
              enctype="multipart/form-data">


              <input type="text" name="name" id="name" placeholder="Name of the product" required /><br>



<input type="text" name="description" id="description" placeholder="Features of product" required/><br>


<input type="text" name="price" id="price" placeholder="Price of product" required/><br>


<input type="number" name="rrp" id="rrp" placeholder="rrp of product" required/><br>


<input type="number" name="quantity" id="quntity" placeholder="Quantity of product" required/><br>

<input type="date" name="date_added" id="date_added" placeholder="Date of product added" required/><br>


            <input type="file"
                   name="uploadfile"
                   value="" />


                   
 
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
    </div>

    <style>
    
    body{

background-color: lightblue;
}
input{

width: 300px;
height: 5%;
border: 1px;
border-radius: 05px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px grey;
font-weight: bold;



}
   
    
#content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}
    
    
    </style>
</body>
 
</html>