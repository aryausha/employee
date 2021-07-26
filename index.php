<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bgclor">
    <table class="table table-borderless">
        <tr>
            <td style="color:red;">EMPNAME</td>
            <td><input type="text" id=emp class="form-control"></td>
        </tr>
        <tr>
            <td style="color:red;">EMPCODE</td>
            <td><input type="text" id="ecode" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:red;">DESIGNATION</td>
            <td><input type="text" id="desgn" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:red;">SALARY</td>
            <td><input type="text" id="salary" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:red;">PHONE NUMBER</td>
            <td><input type="text" id="phno" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:red;">EMAIL ID</td>
            <td><input type="email" id="mail" class="form-control" required></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="check" value="true" class="form-check-input"></td>
            <td style="color:red;">agree the given statement</td>
        </tr>
        <tr>
            <td></td>
            <td><button onclick="employee()" class="btn btn-success">SUBMIT</button></td>
        </tr>


    </table>
    <script>
       function employee ()
       {
           var name=document.getElementById("emp").value
           var code=document.getElementById("ecode").value
           var desgn=document.getElementById("desgn").value
           var salary=document.getElementById("salary").value
           var phone=document.getElementById("phno").value
           var email=document.getElementById("mail").value
           var checkbox=document.getElementById("check").value

           if(document.getElementById("check").checked==true)
           {
            console.log(name)
           console.log(code)
           console.log(desgn)
           console.log(salary)
           console.log(phone)
           console.log(email)
           console.log(checkbox)
           }

           else{
            alert("accept terms and condition")

           }


           




       }


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>